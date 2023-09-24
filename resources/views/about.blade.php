<x-app-layout meta-title="About Balkanopedia">
    <section class="w-full flex flex-col items-center px-3">

        <article class="flex flex-col shadow my-4 w-full">
            <!-- Article Image -->
            <a href="#" class="hover:opacity-75">
                <img src="/storage/{{ $widget->image }}" class="max-w-full">
            </a>
            <div class="bg-white flex flex-col justify-start p-6">
                <h1 class="text-3xl font-bold hover:text-gray-700 pb-4">
                    {{ $widget->title }}
                </h1>
                <div>
                    {!! $widget->content !!}
                </div>
            </div>
        </article>
    </section>
</x-app-layout>