<x-splade-modal>
    <x-splade-form action="{{ route('superadmin.level.store') }}" onkeydown="return event.key != 'Enter';">
        <div class="relative">
            <x-forms.header>
                Tambah Data Level
            </x-forms.header>

            <x-forms.body>
                {{-- <x-forms.label>Nama  <x-forms.asterisk /> </x-forms.label> --}}
                <x-splade-input name="name" required min="3" oninvalid="this.setCustomValidity('Harus Diisi, Minimal 3 Huruf')"/>
            </x-forms.body>

            <x-forms.footer />
        </div>
    </x-splade-form>
</x-splade-modal>
