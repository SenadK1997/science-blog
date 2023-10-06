<x-app-layout>
   <div class="bg-gray-50 flex justify-center flex-col py-60 lg:py-48 mx-auto">
      <div class="mx-auto max-w-7xl gap-10 px-6 flex flex-col gap-y-4">
         <div class="max-w-xl text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl lg:col-span-7">
            <h2 class="inline sm:block lg:inline xl:block">Want product news and updates?</h2>
            <p class="inline sm:block lg:inline xl:block">Sign up for our newsletter.</p>
         </div>
         @if(session('message'))
            <div class="alert alert-success">
               <p class="bg-blue-500 text-white max-w-max p-2 flex rounded-md">
                  {{ session('message') }}
               </p>
            </div>
         @endif
         <form class="w-full max-w-md lg:col-span-5 lg:pt-2" action="{{ route('subscribe') }}" method="POST">
            @csrf
            <div class="flex gap-x-4">
               <label for="email-address" class="sr-only">Email address</label>
               <input id="email-address" name="email" type="email" autocomplete="email" required class="min-w-0 flex-auto rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="Enter your email">
               <button type="submit" class="flex-none rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Subscribe</button>
            </div>
            <p class="mt-4 text-sm leading-6 text-gray-900">We care about your data. Read our <a href="#" class="font-semibold text-indigo-600 hover:text-indigo-500">privacy&nbsp;policy</a>.</p>
         </form>
      </div>
   </div>
</x-app-layout>
 