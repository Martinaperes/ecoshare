<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DonationController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        
        // In a real app, you would fetch from DB:
        // $foodDonations = $user->organization ? $user->organization->foodDonations()->where('status', '!=', 'completed')->get() : collect();
        // $clothingDonations = $user->clothingDonations()->where('status', '!=', 'completed')->get();
        // $donations = $foodDonations->concat($clothingDonations);
        
        $donations = collect(); // Starting empty as requested - "show what user donated only"

        return view('donate', compact('donations'));
    }
}
