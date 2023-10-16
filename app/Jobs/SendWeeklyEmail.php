<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use App\Models\Subscription;
use App\Mail\WeeklyMail;
use Illuminate\Support\Facades\Mail;

class SendWeeklyEmail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        // $subscriptions = Subscription::where('subscribed', true)->pluck('email');

        // foreach ($subscriptions as $subscription) {
        //     Mail::to($subscription)->send(new WeeklyMail($subscription));
        // }
    }
}
