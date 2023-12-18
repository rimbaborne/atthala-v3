<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }} Super Admin
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <a href="#" class="text-xs inline-flex items-center font-medium rounded-lg px-2 py-1 mb-4 text-center text-green-400 hover:text-white border border-green-400 hover:bg-green-500 focus:ring-4 focus:outline-none focus:ring-green-300 ">
                        <x-carbon-volume-file-storage class="pr-2 w-5 h-5 inline" /> Export
                    </a>
                    <x-splade-table :for="$users">
                        <x-slot name="head">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th class="px-6 py-3 text-left text-xs font-medium tracking-wide text-gray-500">{{ $users->columns()[0]->label }}</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium tracking-wide text-gray-500">{{ $users->columns()[1]->label }}</th>
                                    <th class="w-80 px-6 py-3 text-left text-xs font-medium tracking-wide text-gray-500">{{ $users->columns()[2]->label }}</th>
                                </tr>
                            </thead>
                        </x-slot>

                        <x-slot name="body">
                            <tbody class="divide-y divide-gray-200 bg-white">
                                @foreach($users->resource as $user)
                                    <tr>
                                        <td class="text-xs px-6 py-4">
                                            {{ $user->name }}
                                        </td>
                                        <td class="text-xs px-6 py-4">
                                            {{ $user->email }}
                                        </td>
                                        <td class="text-xs px-6 py-4 w-80">
                                            <a href="#" class="text-xs inline-flex items-center font-medium rounded-lg px-2 py-1 text-center text-green-400 hover:text-white border border-green-400 hover:bg-green-500 focus:ring-4 focus:outline-none focus:ring-green-300 ">
                                                <x-carbon-view class="pr-2 w-5 h-5 inline" /> View
                                            </a>
                                            <a href="#" class="ml-2 text-xs inline-flex items-center font-medium rounded-lg px-2 py-1 text-center text-yellow-400 hover:text-white border border-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:outline-none focus:ring-yellow-300 ">
                                                <x-carbon-edit class="pr-2 w-5 h-5 inline" /> Edit
                                            </a>
                                            <a href="#" class="ml-2 text-xs inline-flex items-center font-medium rounded-lg px-2 py-1 text-center text-red-400 hover:text-white border border-red-400 hover:bg-red-500 focus:ring-4 focus:outline-none focus:ring-red-300 ">
                                                <x-carbon-trash-can class="pr-2 w-5 h-5 inline" /> Delete
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </x-slot>
                    </x-splade-table>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
