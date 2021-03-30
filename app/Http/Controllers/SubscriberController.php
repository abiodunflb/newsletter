<?php

namespace App\Http\Controllers;

use App\Models\Subscriber;
use Newsletter;

use Illuminate\Http\Request;

class SubscriberController extends Controller
{
    public function subscribe(Request $request)
    {
        $request->validate([
            'email' => 'required|email|unique:subscribers',
            'name' => 'required|max:15',
        ]);

        $email = $request->email;
        $name = $request->name;

        $subscriber = new Subscriber();
        $subscriber->email = $email;
        $subscriber->name = $name;
        Newsletter::subscribe($email, ['FNAME' => $name]);
        $subscriber->save();
        return back()->with('success', 'Thank you for subscribing, check your email');
    }
}
