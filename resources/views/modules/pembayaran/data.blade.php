<x-layouts.main :unit="$unit">
    <x-layouts.card>
        <x-layouts.title>Manajemen Pembayaran {{ $unit }}</x-layouts.title>
        <div class="items-left justify-start flex">
            <Link modal max-width="lg" href="{{ route('superadmin.users.create') }}"
                class="text-white bg-sky-500 hover:bg-sky-600 focus:ring-4 focus:ring-sky-300 font-medium rounded-lg text-sm px-4 py-2 mb-2 flex items-center focus:outline-none">
            Tambah Data
            @svg('carbon-add-filled', 'ml-2 text-white h-4 w-4')
            </Link>
        </div>
        <div class="bg-white p-4 rounded-lg border">
            <div class="flex flex-col md:flex-row md:items-center md:space-x-4 space-y-4 md:space-y-0">
                <div class="flex-grow">
                    <label for="filter-search" class="block text-sm font-medium text-gray-700">Pencarian</label>
                    <input type="email" id="filter-search" placeholder="what are you looking for?"
                        class="w-full border border-gray-300 rounded-lg py-2 px-3 text-gray-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500" />
                </div>
                <div class="flex-shrink-0">
                    <label for="filter-account" class="block text-sm font-medium text-gray-700">Akun</label>
                    <select id="filter-account"
                        class="w-full border border-gray-300 rounded-lg py-2 px-3 text-gray-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500">
                        <option value="">Semua</option>
                        {{-- @foreach ($accounts as $account)
                            <option value="{{ $account->id }}">{{ $account->name }}</option>
                        @endforeach --}}
                    </select>
                </div>
                <div class="flex-shrink-0">
                    <label for="filter-status" class="block text-sm font-medium text-gray-700">Status</label>
                    <select id="filter-status"
                        class="w-full border border-gray-300 rounded-lg py-2 px-3 text-gray-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500">
                        <option value="">Semua</option>
                        <option value="pending">Pending</option>
                        <option value="success">Sukses</option>
                        <option value="failed">Gagal</option>
                    </select>
                </div>
                <div class="flex-shrink-0">
                    <label for="filter-from" class="block text-sm font-medium text-gray-700">Dari</label>
                    <input type="date" id="filter-from" placeholder="From"
                        class="w-full border border-gray-300 rounded-lg py-2 px-3 text-gray-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500" />
                </div>
                <div class="flex-shrink-0">
                    <label for="filter-to" class="block text-sm font-medium text-gray-700">Sampai</label>
                    <input type="date" id="filter-to" placeholder="To"
                        class="w-full border border-gray-300 rounded-lg py-2 px-3 text-gray-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500" />
                </div>
            </div>
            <div class="flex flex-col pt-4 md:flex-row md:items-center md:space-x-4 space-y-4 md:space-y-0">
                <div class="flex-grow">
                    <label for="filter-search" class="block text-sm font-medium text-gray-700">Pencarian</label>
                    <input type="email" id="filter-search" placeholder="what are you looking for?"
                        class="w-full border border-gray-300 rounded-lg py-2 px-3 text-gray-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500" />
                </div>
                <div class="flex-grow">
                    <label for="filter-search" class="block text-sm font-medium text-gray-700">Pencarian</label>
                    <input type="email" id="filter-search" placeholder="what are you looking for?"
                        class="w-full border border-gray-300 rounded-lg py-2 px-3 text-gray-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500" />
                </div>
                <div class="flex-grow">
                    <label for="filter-search" class="block text-sm font-medium text-gray-700">Pencarian</label>
                    <input type="email" id="filter-search" placeholder="what are you looking for?"
                        class="w-full border border-gray-300 rounded-lg py-2 px-3 text-gray-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500" />
                </div>
                <div class="flex-shrink-0 pt-5">
                    <button
                        class="w-full bg-primary-700 text-white rounded-lg py-2 px-4 hover:bg-primary-700 focus:outline-none focus:ring-2 focus:ring-primary-500 flex items-center justify-between">
                        Cari
                        <svg xmlns="http://www.w3.org/2000/svg" class="ml-2 h-4 w-4" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <section class="bg-gray-50 dark:bg-gray-900 h-screen flex items-center">
            <div class="max-w-screen-xl px-4 mx-auto lg:px-12 w-full">
                <!-- Start coding here -->
                <div class="relative bg-white shadow-md dark:bg-gray-800 sm:rounded-lg">
                    <div
                        class="flex flex-col items-center justify-between p-4 space-y-3 md:flex-row md:space-y-0 md:space-x-4">
                        <div class="w-full md:w-1/2">
                            <form class="flex items-center">
                                <label for="simple-search" class="sr-only">Search</label>
                                <div class="relative w-full">
                                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                        <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400"
                                            fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                    <input type="text" id="simple-search"
                                        class="block w-full p-2 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                        placeholder="Search" required="">
                                </div>
                            </form>
                        </div>
                        <div
                            class="flex flex-col items-stretch justify-end flex-shrink-0 w-full space-y-2 md:w-auto md:flex-row md:space-y-0 md:items-center md:space-x-3">
                            <button type="button"
                                class="flex items-center justify-center px-4 py-2 text-sm font-medium text-white rounded-lg bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 focus:outline-none dark:focus:ring-primary-800">
                                <svg class="h-3.5 w-3.5 mr-2" fill="currentColor" viewbox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                    <path clip-rule="evenodd" fill-rule="evenodd"
                                        d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" />
                                </svg>
                                Add product
                            </button>
                            <div class="flex items-center w-full space-x-3 md:w-auto">
                                <button id="actionsDropdownButton" data-dropdown-toggle="actionsDropdown"
                                    class="flex items-center justify-center w-full px-4 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg md:w-auto focus:outline-none hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700"
                                    type="button">
                                    <svg class="-ml-1 mr-1.5 w-5 h-5" fill="currentColor" viewbox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                        <path clip-rule="evenodd" fill-rule="evenodd"
                                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" />
                                    </svg>
                                    Actions
                                </button>
                                <div id="actionsDropdown"
                                    class="z-10 hidden bg-white divide-y divide-gray-100 rounded shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                                    <ul class="py-1 text-sm text-gray-700 dark:text-gray-200"
                                        aria-labelledby="actionsDropdownButton">
                                        <li>
                                            <a href="#"
                                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Mass
                                                Edit</a>
                                        </li>
                                    </ul>
                                    <div class="py-1">
                                        <a href="#"
                                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Delete
                                            all</a>
                                    </div>
                                </div>
                                <button id="filterDropdownButton" data-dropdown-toggle="filterDropdown"
                                    class="flex items-center justify-center w-full px-4 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg md:w-auto focus:outline-none hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700"
                                    type="button">
                                    <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true"
                                        class="w-4 h-4 mr-2 text-gray-400" viewbox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd"
                                            d="M3 3a1 1 0 011-1h12a1 1 0 011 1v3a1 1 0 01-.293.707L12 11.414V15a1 1 0 01-.293.707l-2 2A1 1 0 018 17v-5.586L3.293 6.707A1 1 0 013 6V3z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    Filter
                                    <svg class="-mr-1 ml-1.5 w-5 h-5" fill="currentColor" viewbox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                        <path clip-rule="evenodd" fill-rule="evenodd"
                                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" />
                                    </svg>
                                </button>
                                <!-- Dropdown menu -->
                                <div id="filterDropdown"
                                    class="z-10 hidden w-48 p-3 bg-white rounded-lg shadow dark:bg-gray-700">
                                    <h6 class="mb-3 text-sm font-medium text-gray-900 dark:text-white">
                                        Category
                                    </h6>
                                    <ul class="space-y-2 text-sm" aria-labelledby="dropdownDefault">
                                        @foreach (['apple', 'fitbit', 'dell', 'asus'] as $category)
                                            <li class="flex items-center">
                                                <input id="{{ $category }}" type="checkbox" value=""
                                                    {{ old('category') == $category ? 'checked' : '' }}
                                                    class="w-4 h-4 bg-gray-100 border-gray-300 rounded text-primary-600 focus:ring-primary-500 dark:focus:ring-primary-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500" />
                                                <label for="{{ $category }}"
                                                    class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-100">
                                                    {{ ucfirst($category) }} ({{ rand(1, 100) }})
                                                </label>
                                            </li>
                                        @endforeach
                                    </ul>

                                    <x-splade-script>
                                        @foreach (['apple', 'fitbit', 'dell', 'asus'] as $category)
                                            document.getElementById('{{ $category }}').addEventListener('change',
                                            function() {
                                            document.querySelector(`#search-{{ $category }}`).classList.toggle('hidden');
                                            });
                                        @endforeach
                                    </x-splade-script>

                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="flex items-center space-x-4">
                        @foreach(['apple', 'fitbit', 'dell', 'asus'] as $category)
                            <div class="hidden" id="search-{{ $category }}">
                            <label for="search-{{ $category }}" class="block text-sm font-medium text-gray-900 dark:text-gray-100">
                                Search {{ ucfirst($category) }}:
                            </label>
                            <input type="text" id="search-{{ $category }}" name="search[{{ $category }}]" value="{{ old("search.$category") }}"
                                class="block w-full px-3 py-2 text-sm text-gray-700 bg-gray-100 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-primary-500 focus:border-primary-500 dark:focus:ring-primary-600 dark:focus:border-primary-600 dark:bg-gray-700 dark:text-gray-300"
                                placeholder="Search {{ ucfirst($category) }}..."
                            />
                            </div>
                        @endforeach
                    </div>
                </div>
        </section>

    </x-layouts.card>
</x-layouts.main>
