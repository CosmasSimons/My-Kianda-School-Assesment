<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <form method="post" enctype ="multipart/form-data" action="/dashboard/padmin">
            @csrf

            <div>
                <x-input-label for="name" :value="__('Name')" />

                <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" readonly value="{{ Auth::user()->name }}" required autofocus />

                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>

            <div>
                <x-input-label for="email" :value="__('Email')" />

                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" readonly value="{{ Auth::user()->email }}" required autofocus />

                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>


            <div>
                <label for="image" class="col-md-4 col-form-label text-md-end">{{ __('Profile Image') }}</label><br>
                <input type="file" class = "form-control-file" id = "image" name = "image">
                @error('image')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                @enderror
            </div>

            
            <div>
                <x-input-label for="phone" :value="__('Mobile Nunber')" />

                <x-text-input id="phone" class="block mt-1 w-full" type="text" name="phone" :value="old('phone')" required autofocus />

                <x-input-error :messages="$errors->get('phone')" class="mt-2" />
            </div>

            <div>
                <x-input-label for="dob" :value="__(' Date of Birth')" />

                <x-text-input id="dob" class="block mt-1 w-full" type="date" name="dob" :value="old('dob')" required autofocus />

                <x-input-error :messages="$errors->get('dob')" class="mt-2" />
            </div>

            <div>
                <x-input-label for="address" :value="__(' Address')" />

                <x-text-input id="address" class="block mt-1 w-full" type="text" name="address" :value="old('address')" required autofocus />

                <x-input-error :messages="$errors->get('address')" class="mt-2" />
            </div>

            

            <div class="mt-4">
                <x-input-label for="gender" :value="__('Gender')" />

                <select name="gender" id="gender" style = "width:50%">
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                                        
                </select>                
            </div>


            <div class="row">
                <button class="btn btn-primary" style = "width:30%">Add Profile</button>
            </div>



            
            
        </form>
    </x-auth-card>
</x-guest-layout>
