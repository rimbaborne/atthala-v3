<div class="min-h-screen flex flex-col sm:justify-center items-center p-4 bg-gray-100">
    <div>
        @isset($logo)
            {{ $logo }}
        @else
            <Link href="/">
                <x-application-logo class="w-32 h-32 fill-current text-gray-500" />
            </Link>
        @endisset
    </div>

    <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden rounded-lg">
        {{ $slot }}
    </div>
</div>
