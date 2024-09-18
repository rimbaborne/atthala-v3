<x-splade-modal>
    <x-splade-form action="{{ route('admin.user.store') }}" onkeydown="return event.key != 'Enter';">
        <div class="relative">
            <x-forms.header>
                Tambah Data User
            </x-forms.header>

            <x-forms.body>
                <x-splade-input type="text" name="name" :label="__('Name')" required autofocus />
                <x-splade-input type="email" name="email" :label="__('Email')" required />
                <x-splade-input type="text" name="password" :label="__('Password')" required autocomplete="new-password" />
            </x-forms.body>

            <x-forms.footer />
        </div>
    </x-splade-form>
</x-splade-modal>
