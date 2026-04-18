<?php

namespace App\Http\Controllers;

use App\Models\NewsletterSubscription;
use Illuminate\Http\Request;

class NewsletterController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|email|unique:newsletter_subscriptions,email',
        ], [
            'email.unique' => 'This email is already part of our community!',
        ]);

        NewsletterSubscription::create([
            'email' => $request->email,
        ]);

        return back()->with('success', 'Welcome to the rhythm! You are now subscribed to EcoShare updates.');
    }
}
