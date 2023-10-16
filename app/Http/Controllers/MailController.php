<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jobs\SendWeeklyEmail;

class MailController extends Controller
{
    public function sendWeeklyEmails()
    {
        $date = now();
        
        if ($date->isMonday()) {
            SendWeeklyEmail::dispatch();
        }
    }
}
