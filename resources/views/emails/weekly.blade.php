<x-email-layout>
    <section class="max-w-2xl px-6 py-8 mx-auto bg-white dark:bg-gray-900">
        <header class="flex items-center justify-between ">
            <div class="flex items-center gap-1">
                <img src="{{ asset('logo.png') }}" style="width: 50px;" alt="page_logo" width="1280" height="720">
                <a class="text-gray-800 hover:text-gray-700 optima-lowercase text-3xl font-medium" href="https://balkanpedia.com/">
                    Balkanpedia
                </a>
            </div>
        </header>
        @foreach ($posts as $post)
            <x-email-item :posts="$posts"></x-email-item>
        @endforeach
    </section>
</x-email-layout>