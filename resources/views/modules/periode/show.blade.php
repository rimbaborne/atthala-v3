<x-layouts.main :unit="$unit">
    <x-layouts.card>
        <x-layouts.title>Manajemen Periode {{ $unit }} {{ $d_periode->nama }}</x-layouts.title>
        <x-splade-form action="{{ route('admin.periode.update', ['unit' => $unit, 'periode' => $d_periode->id]) }}" method="PUT" onkeydown="return event.key != 'Enter';"
            :default="[
                'aktifkan_pendaftaran' => $d_periode->aktifkan_pendaftaran,
                'tahun_ajaran' => $d_periode->tahun_ajaran,
                'angkatan' => $d_periode->angkatan,
                'waktu_start' => $d_periode->waktu_start,
                'waktu_end' => $d_periode->waktu_end,
                'nama' => $d_periode->nama,
            ]"
        >
            @csrf

            <div class="relative p-4">
                <x-splade-input name="nama" :label="__('Nama Periode')" required min="3" oninvalid="this.setCustomValidity('Harus Diisi, Minimal 3 Huruf')" disabled/>
                <x-splade-input name="tahun_ajaran" :label="__('Tahun Ajaran')" required min="3" oninvalid="this.setCustomValidity('Harus Diisi, Minimal 3 Huruf')"/>
                <x-splade-input type="number" name="angkatan" :label="__('Angkatan')" required min="3" oninvalid="this.setCustomValidity('Harus Diisi, Minimal 3 Huruf')"/>
                <x-splade-input name="waktu_start" :label="__('Waktu Mulai')" required date />
                <x-splade-input name="waktu_end" :label="__('Waktu Berakhir')" required date />
                <x-splade-select name="aktifkan_pendaftaran" :label="__('Status Pendaftaran')" choices>
                    <option value="0">Tutup Pendaftaran</option>
                    <option value="1">Buka Pendaftaran</option>
                </x-splade-select>
            </div>
            <div class="flex items-center p-6">
                <input id="konfirmasi-checkbox" type="checkbox" v-model="form.agree_with_terms" class="w-5 h-5 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500">
                <label for="konfirmasi-checkbox" class="text-sm font-medium text-gray-900 px-3">Konfirmasi</label>
            </div>
            <div class="flex items-center p-6 border-t border-gray-200 rounded-b ">

                <x-splade-submit label="Simpan" v-show="form.agree_with_terms"/>
            </div>

        </x-splade-form>
    </x-layouts.card>
</x-layouts.main>
