<?php
/** @var $posts \Illuminate\Pagination\LengthAwarePaginator */
?>
<x-app-layout meta-description="Balkanpedia, stranica u kojoj se objavljuju naučno-istraživački članci">
<!-- Posts Section -->
<section class="w-full md:w-2/3 flex flex-col items-center px-3 max-w-2xl">
    @foreach ($posts as $post)
        <x-post-item :post="$post"></x-post-item>
    @endforeach
    {{$posts->onEachSide(1)->links()}}
</section>
<x-sidebar />
</x-app-layout>