<x-bilten-layout>
<section class="h-screen">
    <div class="max-w-md mx-auto bg-white p-6 rounded-lg shadow-lg">
        <h2 class="text-2xl font-bold mb-4">Potvrda potrebna</h2>
        <p class="mb-6">Žao nam je što odlazite. Ako ste sigurni u svoju odluku o odjavljivanju, molimo vas da kliknete donje dugme.</p>
        
        <form method="POST" action="{{ route('unsubscribe.email', $subscription) }}" class="flex flex-col" id="unsubscribeForm">
            @csrf
            <input type="hidden" value="{{ $subscription }}">
            <button 
                type="submit" 
                data-sitekey="{{ config('services.recaptcha.site_key') }}" 
                data-callback='onSubmit' 
                data-action='submit'
                class="g-recaptcha bg-red-500 hover:bg-red-600 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                Unsubscribe
            </button>
        </form>
        
        <p class="mt-4 text-gray-600 text-md">Ako želite nastaviti primati ažuriranja, možete zatvoriti ovaj prozor.</p>
    </div>
</section>
@push('scripts')
   <script>
      function onSubmit(token) {
        document.getElementById("unsubscribeForm").submit();
      }
    </script>
@endpush
</x-bilten-layout>