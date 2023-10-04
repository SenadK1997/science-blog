<?php
/** @var $posts \Illuminate\Pagination\LengthAwarePaginator */
?>
<x-app-layout :meta-title="'Balkanpedia ' . $category->title" :meta-description="$posts[0]->shortBody()" :meta-image="$posts[0]->getThumbnail()">
<!-- Posts Section -->
<section class="w-full md:w-3/4 flex flex-col items-center px-3">

    @foreach ($posts as $post)
        <x-post-item :post="$post"></x-post-item>
    @endforeach
    {{$posts->onEachSide(1)->links()}}
</section>
<x-sidebar />
</x-app-layout>
