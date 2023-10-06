<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;
use App\Mail\WeeklyMail;
use App\Models\Subscription;

class SendWeeklyEmails extends Command
{
    protected $signature = 'send:weekly-emails';

    protected $description = 'Send the weekly emails to subscribed users';

    public function handle()
    {
        $subscribedEmails = Subscription::where('subscribed', true)->pluck('email');

        foreach ($subscribedEmails as $email) {
            Mail::to($email)->send(new WeeklyMail());
            $this->info("Sent email to: $email");
        }
    }
}
