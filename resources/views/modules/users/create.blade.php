<x-splade-modal>
    <x-splade-form action="{{ route('superadmin.roles.store') }}" onkeydown="return event.key != 'Enter';">
        <div class="relative">
            <x-forms.header>
                Tambah Data User
            </x-forms.header>

            <x-forms.body>
                <x-splade-input id="name" type="text" name="name" :label="__('Name')" required autofocus />
                <x-splade-input id="email" type="email" name="email" :label="__('Email')" required />
                <x-splade-input id="password" type="password" name="password" :label="__('Password')" required autocomplete="new-password" />
            </x-forms.body>

            <x-forms.footer />
        </div>
    </x-splade-form>
</x-splade-modal>
