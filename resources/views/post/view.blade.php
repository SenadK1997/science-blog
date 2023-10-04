<x-app-layout :meta-title="$post->meta_title ?: $post->title" :meta-description="$post->meta_description" :meta-image="'https://balkanpedia.com'.$post->getThumbnail()">

    <!-- Post Section -->
    <section class="w-full md:w-3/4 flex flex-col items-center px-3">

        <article class="flex flex-col shadow my-4 w-full">
            <!-- Article Image -->
            <a href="#" class="hover:opacity-75">
                <img src="{{$post->getThumbnail()}}" alt="article_image" width="1280" height="720">
            </a>
            <div class="bg-white flex flex-col justify-start p-6">
                <div class="flex gap-4 w-full justify-between items-center">
                    @foreach ($post->categories as $category)
                    <a href="#" class="text-blue-700 text-sm font-bold uppercase pb-4">
                        {{ $category->title }}
                    </a>
                    @endforeach
                    <div id="copySuccessMessage" class="hidden bg-green-500 text-white py-2 px-4 rounded fixed bottom-4 right-4 z-50">
                        Link copied successfully!
                    </div>
                    <div class="relative">
                        <button id="shareButton" class="sharebtn items-center relative flex bg-white border rounded-md p-2 opacity-100 focus:outline-none focus:border-blue-400" title="click to enable menu">
                            <span class="inline-block pr-4 text-gray-600">Podijeli</span>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="h-5 w-6 my-1 text-blue-700">
                                <path fill="currentColor" d="M352 320c-22.608 0-43.387 7.819-59.79 20.895l-102.486-64.054a96.551 96.551 0 0 0 0-41.683l102.486-64.054C308.613 184.181 329.392 192 352 192c53.019 0 96-42.981 96-96S405.019 0 352 0s-96 42.981-96 96c0 7.158.79 14.13 2.276 20.841L155.79 180.895C139.387 167.819 118.608 160 96 160c-53.019 0-96 42.981-96 96s42.981 96 96 96c22.608 0 43.387-7.819 59.79-20.895l102.486 64.054A96.301 96.301 0 0 0 256 416c0 53.019 42.981 96 96 96s96-42.981 96-96-42.981-96-96-96z">
                                </path>
                            </svg>
                        </button>
                        <div id="shareLinks" class="sharebtn-dropdown absolute right-0 mt-0 w-48 hidden bg-white rounded-sm overflow-hidden shadow-lg z-20 border border-gray-100">
                            <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(route('view', $post)) }}" target="_blank" title="Share on Facebook" class="flex px-4 py-2 text-sm text-gray-800 border-b hover:bg-blue-100">
                                <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 1024 1024" class="w-5 h-5 mr-4 text-blue-500" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M880 112H144c-17.7 0-32 14.3-32 32v736c0 17.7 14.3 32 32 32h736c17.7 0 32-14.3 32-32V144c0-17.7-14.3-32-32-32zm-92.4 233.5h-63.9c-50.1 0-59.8 23.8-59.8 58.8v77.1h119.6l-15.6 120.7h-104V912H539.2V602.2H434.9V481.4h104.3v-89c0-103.3 63.1-159.6 155.3-159.6 44.2 0 82.1 3.3 93.2 4.8v107.9z"></path></svg>
                                <span class="text-gray-600">Facebook</span>
                            </a>
                            <a href="https://twitter.com/intent/tweet?url={{ urlencode(route('view', $post)) }}" target="_blank" title="Share on Twitter" class="flex px-4 py-2 text-sm text-gray-800 border-b hover:bg-blue-100">
                                <svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="twitter-square" class="w-5 h-5 mr-4 text-blue-500" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M400 32H48C21.5 32 0 53.5 0 80v352c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V80c0-26.5-21.5-48-48-48zm-48.9 158.8c.2 2.8.2 5.7.2 8.5 0 86.7-66 186.6-186.6 186.6-37.2 0-71.7-10.8-100.7-29.4 5.3.6 10.4.8 15.8.8 30.7 0 58.9-10.4 81.4-28-28.8-.6-53-19.5-61.3-45.5 10.1 1.5 19.2 1.5 29.6-1.2-30-6.1-52.5-32.5-52.5-64.4v-.8c8.7 4.9 18.9 7.9 29.6 8.3a65.447 65.447 0 0 1-29.2-54.6c0-12.2 3.2-23.4 8.9-33.1 32.3 39.8 80.8 65.8 135.2 68.6-9.3-44.5 24-80.6 64-80.6 18.9 0 35.9 7.9 47.9 20.7 14.8-2.8 29-8.3 41.6-15.8-4.9 15.2-15.2 28-28.8 36.1 13.2-1.4 26-5.1 37.8-10.2-8.9 13.1-20.1 24.7-32.9 34z"></path></svg>
                                <span class="text-gray-600">Twitter</span>
                            </a>
                            <button onclick="copyToClipboard()" class="flex px-4 py-2 text-sm text-gray-800 border-b hover:bg-blue-100 w-full">
                                <input class="hidden" type="text" id="textToCopy" value="{{ $currentUrl }}">
                                <svg class="w-5 h-5 mr-4 text-blue-500" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 1024 1024" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M574 665.4a8.03 8.03 0 0 0-11.3 0L446.5 781.6c-53.8 53.8-144.6 59.5-204 0-59.5-59.5-53.8-150.2 0-204l116.2-116.2c3.1-3.1 3.1-8.2 0-11.3l-39.8-39.8a8.03 8.03 0 0 0-11.3 0L191.4 526.5c-84.6 84.6-84.6 221.5 0 306s221.5 84.6 306 0l116.2-116.2c3.1-3.1 3.1-8.2 0-11.3L574 665.4zm258.6-474c-84.6-84.6-221.5-84.6-306 0L410.3 307.6a8.03 8.03 0 0 0 0 11.3l39.7 39.7c3.1 3.1 8.2 3.1 11.3 0l116.2-116.2c53.8-53.8 144.6-59.5 204 0 59.5 59.5 53.8 150.2 0 204L665.3 562.6a8.03 8.03 0 0 0 0 11.3l39.8 39.8c3.1 3.1 8.2 3.1 11.3 0l116.2-116.2c84.5-84.6 84.5-221.5 0-306.1zM610.1 372.3a8.03 8.03 0 0 0-11.3 0L372.3 598.7a8.03 8.03 0 0 0 0 11.3l39.6 39.6c3.1 3.1 8.2 3.1 11.3 0l226.4-226.4c3.1-3.1 3.1-8.2 0-11.3l-39.5-39.6z"></path></svg>
                                <span class="text-gray-600">Kopiraj link</span>
                            </button>
                        </div>
                    </div>
                </div>
                <h1 class="text-3xl font-bold hover:text-gray-700 pb-4">
                    {{ $post->title }}
                </h1>
                <p href="#" class="text-sm pb-8">
                    Autor: <a href="#" class="font-semibold hover:text-gray-800">{{ $post->author }}</a>, {{ $post->getFormattedDate() }}
                </p>
                <div class="flex flex-col gap-y-4">
                    {!! $post->body !!}
                </div>
            </div>
        </article>

        <div class="w-full flex pt-6">
            <div class="w-1/2">
                @if($prev)
                    <a href="{{route('view', $prev)}}" class="block w-full bg-white shadow hover:shadow-md text-left p-6">
                        <p class="text-lg text-blue-800 font-bold flex items-center">
                            <i class="fas fa-arrow-left pr-1"></i>
                            Previous
                        </p>
                        <p class="pt-2">{{$prev->title}}</p>
                    </a>
                @endif
            </div>
            <div class="w-1/2">
                @if($next)
                    <a href="{{route('view', $next)}}" class="block w-full bg-white shadow hover:shadow-md text-right p-6">
                        <p class="text-lg text-blue-800 font-bold flex items-center justify-end">
                            Next
                            <i class="fas fa-arrow-right pl-1"></i>
                        </p>
                        <p class="pt-2">{{ \Illuminate\Support\Str::words($next->title, 5) }}</p>
                    </a>
                @endif
            </div>
        </div>
    </section>
    <x-sidebar />
    <script>
    function copyToClipboard() {
        let copyText = document.getElementById("textToCopy");
        copyText.select();
        copyText.setSelectionRange(0, 99999); 
        navigator.clipboard.writeText(copyText.value);

        // Show the copy success message
        let successMessage = document.getElementById("copySuccessMessage");
        successMessage.classList.remove("hidden");

        // Hide the message after a few seconds (optional)
        setTimeout(function() {
            successMessage.classList.add("hidden");
        }, 2000); // Hide after 3 seconds
    }
    </script>
    <script>
        document.getElementById('shareButton').addEventListener('click', function(event) {
        event.stopPropagation(); // Prevent the event from bubbling up
        document.getElementById('shareLinks').style.display = (document.getElementById('shareLinks').style.display === 'block') ? 'none' : 'block';
        });

        document.addEventListener('click', function(event) {
            if (!document.getElementById('shareButton').contains(event.target) && !document.getElementById('shareLinks').contains(event.target)) {
                document.getElementById('shareLinks').style.display = 'none';
            }
        });
    </script>
    <style lang="postcss">
        .sharebtn {
          @apply relative flex z-10 bg-white border rounded-md p-2 opacity-50 hover:opacity-100 focus:outline-none focus:border-blue-400;
        }
        
        /* .sharebtn:hover + .sharebtn-dropdown, */
        .sharebtn:focus + .sharebtn-dropdown {
          display: block;
        }
        
        .sharebtn-dropdown {
          @apply absolute right-0 mt-0 w-48 bg-white rounded-sm overflow-hidden shadow-lg z-20 hidden border border-gray-100;
        }
    </style>
</x-app-layout>