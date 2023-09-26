<!-- Sidebar Section -->
<aside class="w-full md:w-1/4 flex flex-col items-center px-3">
    <section class="sticky top-0 w-full">
        <div class="w-full bg-white shadow flex flex-col my-4 p-6">
            <h3 class="text-xl font-semibold mb-3">Kategorije
            </h3>
            @foreach ($categories as $category)
                <a href="{{route('by-category', $category)}}"
                class="flex justify-between hover:bg-blue-400 text-semibold block px-2 py-1 rounded text-sm {{ request('category')?->slug === $category->slug ? 'bg-blue-600 text-white' : '' }}">
                    <span>{{ $category->title }}</span> <span>{{$category->total}}</span>
                </a>
            @endforeach
        </div>
        <div class="w-full">
            <a href="/objavi-clanak" class="flex justify-center bg-blue-500 text-xl w-full hover:bg-blue-600 text-white rounded py-2">Objavi članak</a>
        </div>
    </section>
</aside>
