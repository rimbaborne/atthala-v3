<x-layouts.main>
    <x-layouts.card>

            <x-splade-form :default="$user" action="{{ route('superadmin.users.update', ['id' => $user->id]) }}" method="PUT" onkeydown="return event.key != 'Enter';">
                <div class="relative">
                    <x-forms.header>
                        Data User
                    </x-forms.header>
                    <div class="grid lg:grid-cols-2">
                        <x-forms.body>
                            <x-splade-input type="text" name="name" :label="__('Name')" required autofocus />
                            <x-splade-input type="email" name="email" :label="__('Email')" disabled/>
                            <x-splade-select name="role" value="{{ $user->has_roles->role_id ?? 0}}" label="Role" choices>
                                <option value="0">---</option>
                                @foreach ($roles as $role)
                                    <option value="{{ $role->id }}">{{ $role->name }}</option>
                                @endforeach
                            </x-splade-select>
                        </x-forms.body>
                        <x-forms.body>
                            <div class="grid justify-items-end">
                                <Link modal max-width="lg" href="{{ route('superadmin.users.password', ['id' => $user->id]) }}" class="text-gray-700 flex bg-white border border-gray-500 hover:bg-gray-200 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-">
                                    Ganti Password @svg('carbon-password', 'ml-2 h-5 w-5')
                                </Link>
                                <div class="pt-4">
                                    <button type="button" class="text-white bg-red-700 border border-red-500 hover:bg-red-500 font-medium rounded-lg text-sm px-3 py-2.5 me-2 mb-">
                                        @svg('carbon-trash-can', 'h-5 w-5')
                                    </button>
                                </div>
                            </div>
                        </x-forms.body>
                    </div>
                    <x-forms.footer-page />
                </div>
            </x-splade-form>
    </x-layouts.card>
</x-layouts.main>

