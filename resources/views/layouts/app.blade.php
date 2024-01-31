<div class="min-h-screen bg-gray-100">
    <div class="max-[640px]:hidden">
        @include('layouts.navigation')
    </div>

    <!-- Page Heading -->
    <header class="bg-white shadow max-[640px]:hidden">
        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
            {{ $header }}
        </div>
    </header>

    <!-- Page Content -->
    <main>
        {{ $slot }}
    </main>
</div>
