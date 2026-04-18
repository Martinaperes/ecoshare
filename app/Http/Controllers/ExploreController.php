<?php

namespace App\Http\Controllers;

use App\Models\FoodDonation;
use App\Models\ClothingDonation;
use Illuminate\Http\Request;

class ExploreController extends Controller
{
    public function index()
    {
        // Fetch all available food donations with their organization info
        $foodDonations = FoodDonation::with('organization')
            ->where('status', 'available')
            ->orderBy('created_at', 'desc')
            ->get()
            ->map(function($item) {
                return [
                    'type' => 'FOOD',
                    'title' => $item->title,
                    'location' => $item->organization->location ?? 'Nairobi Node',
                    'time' => 'Expires ' . $item->expiry_time->diffForHumans(),
                    'qty' => $item->quantity,
                    'color' => 'secondary',
                    'icon' => 'restaurant'
                ];
            });

        // Fetch all available clothing donations with their user/location info
        $clothingDonations = ClothingDonation::where('status', 'available')
            ->orderBy('created_at', 'desc')
            ->get()
            ->map(function($item) {
                return [
                    'type' => 'TEXTILE',
                    'title' => $item->description ?? 'Gently Used Items',
                    'location' => $item->pickup_location,
                    'time' => 'Available Now',
                    'qty' => $item->quantity,
                    'color' => 'primary',
                    'icon' => 'checkroom'
                ];
            });

        // Combine and shuffle for a diverse feed
        $items = $foodDonations->concat($clothingDonations)->shuffle();

        return view('explore', compact('items'));
    }
}
