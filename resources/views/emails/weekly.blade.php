<x-email-layout>
    @php
        $posts = App\Models\Post::latest('published_at')->take(5)->get();
    @endphp
    <section class="max-w-2xl px-6 py-8 mx-auto bg-white dark:bg-gray-900">
        <header class="flex items-center justify-between ">
            <div class="flex items-center gap-1">
                <img src="{{ asset('logo.png') }}" style="width: 50px;" alt="page_logo" width="1280" height="720">
                <a class="text-gray-800 hover:text-gray-700 optima-lowercase text-3xl font-medium" href="https://balkanpedia.com/">
                    Balkanpedia
                </a>
            </div>
        </header>
        <div class="flex flex-col py-8 gap-y-4 font-sans">
            <p class="flex items-center gap-x-2">
                <svg stroke="currentColor" fill="blue" stroke-width="0" viewBox="0 0 512 512" height="1.5em" width="1.5em" xmlns="http://www.w3.org/2000/svg"><path d="M144 32S94.11 69.4 96 96c1.604 22.57 44.375 25.665 48 48 1.91 11.772-16 32-16 32s48-25.373 48-48-42.8-25.978-48-48c-3.875-16.414 16-48 16-48zm80 0s-49.89 37.4-48 64c1.604 22.57 44.375 25.665 48 48 1.91 11.772-16 32-16 32s48-25.373 48-48-42.8-25.978-48-48c-3.875-16.414 16-48 16-48zm80 0s-49.89 37.4-48 64c1.604 22.57 44.375 25.665 48 48 1.91 11.772-16 32-16 32s48-25.373 48-48-42.8-25.978-48-48c-3.875-16.414 16-48 16-48zM73.293 201c1.43 63.948 18.943 179.432 74.707 238h152c55.764-58.568 73.278-174.052 74.707-238H73.293zm319.598.445c-.186 9.152-.652 19.252-1.472 30.057C419.312 235.162 441 259.142 441 288c0 31.374-25.626 57-57 57-4.387 0-8.656-.517-12.764-1.465-2.912 9.62-6.176 19.165-9.84 28.51C368.602 373.97 376.176 375 384 375c48.155 0 87-38.845 87-87 0-45.153-34.153-82.12-78.11-86.555zM42.763 457c1.507 5.193 3.854 11.2 6.955 16.37 2.637 4.394 5.69 8.207 8.428 10.58C60.882 486.32 63 487 64 487h320c1 0 3.118-.678 5.855-3.05 2.738-2.373 5.79-6.186 8.428-10.58 3.1-5.17 5.448-11.177 6.955-16.37H42.762z"></path></svg>
                Dobro jutro,
            </p>
            <p class="leading-6">
                Nadam se da ste dobrog raspoloženja. Za vas smo izdvojili posljednjih pet članaka da pročitate. Mislimo da će vam se svidjeti!
            </p>
        </div>
        @foreach ($posts as $post)
            <x-email-item :post="$post"></x-email-item>
        @endforeach
        <footer class="w-full border-t bg-white pb-0">
            <div class="flex w-full container mx-auto justify-between items-center p-4 flex-col md:flex-row">
                <div>&copy; All Rights Reserved</div>
                <div class="flex">
                    <a href="https://www.linkedin.com/in/senad-kurtovi%C4%87-143742201/" target="_blank" class="text-blue-400">@Senad Kurtovic</a>
                </div>
                <form method="POST" action="{{ route('unsubscribe', $token) }}">
                    @csrf
                    <button>Unsubscribe</button>
                </form>
            </div>
        </footer>
    </section>
</x-email-layout>