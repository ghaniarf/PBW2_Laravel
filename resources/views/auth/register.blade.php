<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf
        
         <!-- Username -->
         <div>
            <x-input-label for="username" :value="__('Username')" />
            <x-text-input id="username" class="block mt-1 w-full" type="text" name="username" :value="old('username')" required autofocus />
            <x-input-error :messages="$errors->get('username')" class="mt-2" />
        </div>

        <!-- Fullname -->
        <div class="mt-4">
            <x-input-label for="fullname" :value="__('Fullname')" />
            <x-text-input id="fullname" class="block mt-1 w-full" type="text" name="fullname" :value="old('fullname')" required autofocus />
            <x-input-error :messages="$errors->get('fullname')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

         <!-- Alamat -->
         <div class="mt-4">
            <x-input-label for="address" :value="__('Alamat')" />
            <x-text-input id="address" class="block mt-1 w-full" type="text" name="address" :value="old('address')" required />
            <x-input-error :messages="$errors->get('address')" class="mt-2" />
        </div>

        <!-- Tanggal Lahir -->
        <div class="mt-4">
            <x-input-label for="birthdate" :value="__('Tanggal Lahir')" />
            <x-text-input id="birthdate" class="block mt-1 w-full" type="date" name="birthdate" :value="old('birthdate')" required />
            <x-input-error :messages="$errors->get('birthdate')" class="mt-2" />
        </div>

         <!-- Nomor Telepon -->
         <div class="mt-4">
            <x-input-label for="phoneNumber" :value="__('No Telepon')" />
            <x-text-input id="phoneNumber" class="block mt-1 w-full" type="text" name="phoneNumber" :value="old('phoneNumber')" required />
            <x-input-error :messages="$errors->get('phoneNumber')" class="mt-2" />
        </div>

        <!-- Religion -->
        <div class="mt-4">
            <x-input-label for="religion" :value="__('Religion')" />
            <select id="religion" name="religion" class="block mt-1 w-full" required autofocus>
                <option value="{{ old('religion') == '' ? '' : old('religion') }}" {{ old('religion') == '' ? 'selected' : '' }}>{{ old('religion') == '' ? 'Select one...' : old('religion').' (Selected)' }}</option>
                <option value="Islam">Islam</option>
                <option value="Kristen">Kristen</option>
                <option value="Katolik">Katolik</option>
                <option value="Hindu">Hindu</option>
                <option value="Buddha">Buddha</option>
                <option value="Khonghucu">Khonghucu</option>
            </select>
            <x-input-error :messages="$errors->get('religion')" class="mt-2" />
        </div>

        <!-- Gender -->
        <div class="mt-4">
            <x-input-label for="gender" :value="__('Gender')" />
            <select id="gender" name="gender" class="block mt-1 w-full" required autofocus>
                <option value="{{ old('gender') == '' ? '' : old('gender') }}" {{ old('gender') == '' ? 'selected' : '' }}>{{ old('gender') == '' ? 'Select one...' : (old('gender') == 1 ? 'Laki-Laki (Selected)' : 'Perempuan (Selected)') }}</option>
                <option value="1">Laki-Laki</option>
                <option value="0">Perempuan</option>
            </select>
            <x-input-error :messages="$errors->get('gender')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ml-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
