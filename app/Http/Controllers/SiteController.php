<?php

namespace App\Http\Controllers;

use App\Models\TextWidget;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use App\Models\Subscription;

class SiteController extends Controller
{
    public function about(): View
    {
        $widget = TextWidget::query()
                ->where('key', '=', 'about-page')
                ->where('active', '=', true)
                ->first();
        if(!$widget) {
            throw new NotFoundHttpException();
        }
        return view('about', compact('widget'));
    }

    public function publish(): View
    {
        return view('publish');
    }


    public function bilten()
    {
        return view('bilten');
    }
    public function subscribe(Request $request)
    {
        $email = $request->input('email');

        $existingSubscription = Subscription::where('email', $email)->first();

        if ($existingSubscription) {
            return redirect()->back()->with('message', 'Mail je već registrovan');
        } else {
            Subscription::create(['email' => $email, 'subscribed' => true]);

            return redirect()->back()->with('message', 'Registracija uspješna');
        }
    }
    public function email()
    {
        return view('emails.weekly');
    }
}
