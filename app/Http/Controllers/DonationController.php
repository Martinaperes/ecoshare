<?php

namespace App\Http\Controllers;

use App\Models\FoodDonation;
use App\Models\ClothingDonation;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DonationController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        // 1. Fetch User's Active Donations
        $foodDonations = $user->foodDonations()
            ->whereIn('status', ['available', 'claimed'])
            ->get()
            ->map(function($item) {
                $item->category = 'food';
                $item->icon = 'restaurant';
                $item->color = 'secondary';
                return $item;
            });

        $clothingDonations = $user->clothingDonations()
            ->whereIn('status', ['available', 'claimed'])
            ->get()
            ->map(function($item) {
                $item->category = 'cloth';
                $item->icon = 'checkroom';
                $item->color = 'primary';
                return $item;
            });

        $activeDonations = $foodDonations->concat($clothingDonations)->sortByDesc('created_at');

        // 2. Real Impact Calculation
        // Simulation: Food items (avg 2kg), Clothing (avg 1kg)
        $totalFoodImpact = $user->foodDonations()->count() * 2;
        $totalClothImpact = $user->clothingDonations()->count() * 1;
        $totalImpact = $totalFoodImpact + $totalClothImpact;

        // 3. Dynamic Rank Calculation
        // Calculate points for everyone: Food=5pts, Cloth=3pts
        $ranks = User::withCount(['foodDonations', 'clothingDonations'])
            ->get()
            ->map(function($u) {
                return [
                    'id' => $u->id,
                    'score' => ($u->food_donations_count * 5) + ($u->clothing_donations_count * 3)
                ];
            })
            ->sortByDesc('score')
            ->values();

        $myRankPosition = $ranks->search(fn($r) => $r['id'] === $user->id) + 1;

        return view('donate', [
            'donations' => $activeDonations,
            'totalImpact' => $totalImpact,
            'myRank' => $myRankPosition > 0 ? $myRankPosition : $ranks->count() + 1,
            'co2Offset' => number_format($totalImpact * 0.45, 1) // 0.45kg CO2 per kg shared
        ]);
    }

    public function storeOrganization(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'type' => 'required|string',
            'location' => 'required|string',
        ]);

        Auth::user()->organization()->create([
            'name' => $request->name,
            'type' => $request->type,
            'location' => $request->location,
        ]);

        return redirect()->route('donate')->with('success', 'Your Community Hub is now live!');
    }

    public function storeFood(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'quantity' => 'required|string',
            'expiry_time' => 'required|date|after:now',
        ]);

        $user = Auth::user();
        $org = $user->organization;
        
        if (!$org) {
            return redirect()->route('donate')->with('error', 'Please register your Hub before donating food.');
        }

        $org->foodDonations()->create([
            'title' => $request->title,
            'quantity' => $request->quantity,
            'expiry_time' => $request->expiry_time,
            'status' => 'available',
        ]);

        return redirect()->route('donate')->with('success', 'Food surplus committed to the community flow!');
    }


    public function storeClothing(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'condition' => 'required|in:new,good,worn',
            'quantity' => 'required|string',
            'pickup_location' => 'required|string',
        ]);

        Auth::user()->clothingDonations()->create([
            'description' => $request->title, // mapping title to description for clothes
            'quantity' => $request->quantity,
            'condition' => $request->condition,
            'pickup_location' => $request->pickup_location,
            'status' => 'available',
        ]);

        return redirect()->route('donate')->with('success', 'Textiles registered for redistribution!');
    }
}

