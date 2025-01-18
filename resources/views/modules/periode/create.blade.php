<x-splade-modal :unit="$unit">
    <x-splade-form action="{{ route('admin.periode.store', ['unit' => $unit]) }}" method="POST" onkeydown="return event.key != 'Enter';"
            :default="[
                'aktifkan_pendaftaran' => 0,
            ]"
        >
        @csrf

        <div class="relative">
            <x-forms.header>
                Tambah Data Periode
            </x-forms.header>

            <x-forms.body >
                {{-- <x-forms.label>Nama  <x-forms.asterisk /> </x-forms.label> --}}
                <x-splade-input name="nama" :label="__('Nama Periode')" required min="3" oninvalid="this.setCustomValidity('Harus Diisi, Minimal 3 Huruf')"/>
                <x-splade-input name="tahun_ajaran" :label="__('Tahun Ajaran')" required min="3" oninvalid="this.setCustomValidity('Harus Diisi, Minimal 3 Huruf')"/>
                <x-splade-input type="number" name="angkatan" :label="__('Angkatan')" required min="3" oninvalid="this.setCustomValidity('Harus Diisi, Minimal 3 Huruf')"/>
                <x-splade-input name="waktu_start" :label="__('Waktu Mulai')" required date />
                <x-splade-input name="waktu_end" :label="__('Waktu Berakhir')" required date />
                <x-splade-select name="aktifkan_pendaftaran" :label="__('Status Pendaftaran')" choices>
                    <option value="0">Tutup Pendaftaran</option>
                    <option value="1">Buka Pendaftaran</option>
                </x-splade-select>
            </x-forms.body>

            <x-forms.footer />
        </div>
    </x-splade-form>
</x-splade-modal>
