<div class="js-cookie-consent cookie-consent fixed bottom-0 inset-x-0 pb-2 lg:max-w-full max-w-full flex">
    <div class="flex lg:max-w-7xl mx-auto">
        <div class="flex p-2 rounded-lg bg-yellow-100 w-full lg:max-w-full mx-auto">
            <div class="flex items-center justify-between w-full">
                <div class="flex items-center w-72">
                    <p class="text-black cookie-consent__message w-72">
                        {!! trans('cookie-consent::texts.message') !!}
                    </p>
                </div>
                <div class="mt-2 flex-shrink-0 w-full sm:mt-0 sm:w-auto">
                    <button class="max-w-full js-cookie-consent-agree cookie-consent__agree cursor-pointer px-2 flex items-center justify-center py-2 rounded-md text-sm font-medium text-yellow-800 bg-yellow-400 hover:bg-yellow-300">
                        {{ trans('cookie-consent::texts.agree') }}
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
