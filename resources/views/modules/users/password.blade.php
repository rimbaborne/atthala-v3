<x-splade-modal>
    <x-splade-form action="{{ route('superadmin.users.password.update', ['id' => $id]) }}" method="PUT" onkeydown="return event.key != 'Enter';">
        <div class="relative">
            <x-forms.header>
                Ubah Password
            </x-forms.header>

            <x-forms.body>
                <x-splade-input type="text" name="password" :label="__('Password')" required autocomplete="new-password" />
            </x-forms.body>

            <x-forms.footer />
        </div>
    </x-splade-form>
</x-splade-modal>
