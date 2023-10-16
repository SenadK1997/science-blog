<?php
/** @var $posts \Illuminate\Pagination\LengthAwarePaginator */
?>
<x-app-layout meta-description="Balkanpedia, stranica u kojoj se objavljuju naučno-istraživački članci">
<!-- Posts Section -->
<section class="w-full md:w-3/4 flex flex-col items-center px-3">
    @if(session('message'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
            <span class="block sm:inline">{{ session('message') }}</span>
        </div>
    @endif

    @foreach ($posts as $post)
        <x-post-item :post="$post"></x-post-item>
    @endforeach
    {{$posts->onEachSide(1)->links()}}
</section>
<x-sidebar />
</x-app-layout>
