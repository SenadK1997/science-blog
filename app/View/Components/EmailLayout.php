<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Models\Post;

class EmailLayout extends Component
{
    public $posts;
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->posts = Post::latest('published_at')->take(5)->get();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        // $posts = Post::latest('published_at')->take(5)->get();
        return view('layouts.email-layout');
    }
}
