<?php

namespace App\Http\Controllers;

use App\Models\TextWidget;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use App\Models\Subscription;
use Closure;
use Illuminate\Support\Facades\Http;

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
        $request->validate([
            'email' => ['required', 'string', 'email', 'max:255'],
            'g-recaptcha-response' => ['required', function (string $attribute, mixed $value, Closure $fail) {
                $g_response = Http::asForm()->post("https://www.google.com/recaptcha/api/siteverify", [
                    'secret' => config('services.recaptcha.secret_key'),
                    'response' => $value,
                    'remoteip' => \request()->ip()
                ]);
                if (!$g_response->json('success')) {
                    $fail("The {$attribute} is invalid.");
                }
            },],
        ]);
        $email = $request->input('email');

        $existingSubscription = Subscription::where('email', $email)->first();

        if ($existingSubscription) {
            $existingSubscription->subscribed = true;
            $existingSubscription->save();
            return redirect()->back()->with('message', 'Registracija uspješna');
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
