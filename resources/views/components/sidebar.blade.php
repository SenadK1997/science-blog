<!-- Sidebar Section -->
<aside class="w-full md:w-1/4 flex flex-col items-center px-3">
    <div class="w-full bg-white shadow flex flex-col my-4 p-6">
        <h3 class="text-xl font-semibold mb-3">Kategorije
        </h3>
        @foreach ($categories as $category)
            <a href="{{route('by-category', $category)}}" 
            class="hover:bg-blue-400 text-semibold block py-2 px-3 rounded {{ request('category')?->slug === $category->slug ? 'bg-blue-600 text-white' : '' }}">
                {{ $category->title }} ({{$category->total}})
            </a>
        @endforeach
    </div>
    <div class="sticky top-0 w-full">
        <a href="/objavi-clanak" class="flex justify-center bg-red-400 text-xl w-full hover:bg-red-500 text-white rounded py-2">Objavi članak</a>
    </div>
    {{-- <div class="w-full bg-white shadow flex flex-col my-4 p-6">
        <p class="text-xl font-semibold pb-5">
            {{ \App\Models\TextWidget::getTitle('about-us-sidebar') }}
        </p>
        {!! \App\Models\TextWidget::getContent('about-us-sidebar') !!}
        <a href="{{ route('about-us') }}" class="w-full bg-blue-800 text-white font-bold text-sm uppercase rounded hover:bg-blue-700 flex items-center justify-center px-2 py-3 mt-4">
            Get to know us
        </a>
    </div> --}}
</aside>