<article class="bg-white flex flex-col shadow my-4 min-w-full	">
    <!-- Article Image -->
    <a href="{{ route('view', $post) }}" class="hover:opacity-75 aspect-video flex w-full max-h-96">
        <img src="{{$post->getThumbnail()}}" class="aspect-video flex w-full object-cover object-top" alt="post_thumbnail" width="1280" height="720">
    </a>
    <div class="bg-white flex flex-col justify-start p-6">
        <div class="flex gap-4">
            @foreach ($post->categories as $category)
            <a href="#" class="text-blue-700 text-sm font-bold uppercase pb-4">
                {{ $category->title }}
            </a>
            @endforeach
        </div>
        <a href="{{ route('view', $post) }}" class="text-3xl font-bold hover:text-gray-700 pb-4">
            {{ $post->title }}
        </a>
        <p href="#" class="text-sm pb-3">
           Autor: <a href="#" class="font-semibold hover:text-gray-800">{{ $post->author }}</a>, {{ $post->getFormattedDate() }}
        </p>
        <a href="{{ route('view', $post) }}" class="pb-6">
            {!! strip_tags($post->shortBody(), '<p><br>') !!}
        </a>
        <a href="{{ route('view', $post) }}" class="uppercase text-gray-800 hover:text-black">Nastavi čitati<i class="fas fa-arrow-right"></i></a>
    </div>
</article>
