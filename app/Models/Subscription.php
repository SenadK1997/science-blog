<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    use HasFactory;
    
    protected $fillable = ['email', 'subscribed'];
    
    public function unsubscribe($token)
    {   
        $email = decrypt($token);
        $subscription = Subscription::where('email', $email)->pluck('email')->first();
        if (!$subscription) {
            return redirect()->route('home')->with('message', 'Email adresa pogrešna');
        }
        return view('unsubscribe', ['subscription' => $subscription]);
    }
    public function unsubscribeMail($token)
    {
        $subscribedEmail = decrypt($token);
        $subscription = Subscription::where('email', $subscribedEmail)->first();
        $subscription->subscribed = false;
        $subscription->save();
        return redirect()->route('home')->with('message', 'Nedostajat ćete nam!');
    }

}
