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
        $subscription = Subscription::where('token', $token)->first();

        if ($subscription) {
            $subscription->subscribed = false;
            $subscription->save();

            return redirect()->route('home')->with('success', 'You have successfully unsubscribed.');
        }

        return redirect()->route('home')->with('error', 'Invalid unsubscribe link.');
    }

}
