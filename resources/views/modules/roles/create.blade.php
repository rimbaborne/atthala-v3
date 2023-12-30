<x-splade-modal>
    <x-splade-form action="{{ route('superadmin.roles.store') }}" onkeydown="return event.key != 'Enter';">
        <div class="relative">
            <x-forms.header>
                Tambah Data Roles
            </x-forms.header>

            <x-forms.body>
                <x-splade-input name="name" label="Nama" required autofocus min="3" oninvalid="this.setCustomValidity('Harus Diisi, Minimal 3 Huruf')"/>
            </x-forms.body>

            <x-forms.footer />
        </div>
    </x-splade-form>
</x-splade-modal>
