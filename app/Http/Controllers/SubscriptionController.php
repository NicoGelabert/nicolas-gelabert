<?php

namespace App\Http\Controllers;

use App\Models\Subscription;
use App\Events\SubscriptionCreated;
use Illuminate\Http\Request;

class SubscriptionController extends Controller
{
    public function create()
    {
        return view('subscribe');
    }

    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|email|unique:subscriptions,email',
        ]);

        $subscription = Subscription::create([
            'email' => $request->email,
        ]);

        event(new SubscriptionCreated($subscription));

        return response()->json(['message' => 'Subscribed successfully']);
    }
}
