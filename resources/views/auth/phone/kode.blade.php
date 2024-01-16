<x-guest-layout>
    <x-auth-card>
        <!-- Session Status -->
        <x-auth-session-status class="mb-4" />

        <x-splade-form action="{{ route('akses.login') }}" :default="['phone_number' => $nomor]" >

            <label class="mb-2 flex items-center justify-center text-l font-bold text-gray-500 pt-5">
                Konfirmasi Kode :
            </label>
            <div class="flex items-center">
                <div class="relative w-full">
                    <x-splade-input name="phone_number" type="text" class="text-3xl text-center border-0" v-model="form.phone_number" required readonly/>
                </div>
            </div>
            <div class="flex items-center">
                <div class="relative w-full">
                    <x-splade-input name="password" type="tel" class="text-3xl text-center border-0" placeholder="_ _ _ _" required autocomplete="current-password"/>
                </div>
            </div>

            <div class="flex items-center justify-center py-5">
                <x-splade-submit class="ml-3" label="Klik Untuk Konfirmasi" />
            </div>
        </x-splade-form>
    </x-auth-card>
</x-guest-layout>
