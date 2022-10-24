<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <form method="post" enctype ="multipart/form-data" action="/dashboard/pteacher">
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

            <div class="mt-4">
                <x-input-label for="tfaculty" :value="__('Faculty/Department')" />

                <select name="tfaculty" id="tfaculty" style = "width:50%">
                    
                    <option value="maths">Maths</option>
                    <option value="science">Science</option>
                    <option value="languages">Maths</option>
                    <option value="technical">Maths</option>
                    <option value="curriculum">Curriculum</option>
                    <option value="discipline">Discipline</option>
                                        
                </select>                
            </div>

            <div class="mt-4">
                <x-input-label for="teaching1" :value="__('Subject 1')" />

                <select name="teaching1" id="teaching1" style = "width:50%"> 
                    <option value="maths">Maths</option>
                    <option value="">N/A</option>                  
                                        
                </select>                
            </div>

            <div class="mt-4">
                <x-input-label for="teaching2" :value="__('Subject 2')" />

                <select name="teaching2" id="teaching2" style = "width:50%"> 
                    <option value="english">English</option>
                    <option value="kiswakili">Kiswahili</option> 
                    <option value="">N/A</option>                 
                                        
                </select>                
            </div>

            <div class="mt-4">
                <x-input-label for="teaching4" :value="__('Subject 3')" />

                <select name="teaching3" id="teaching3" style = "width:50%"> 
                    <option value="physics">Physics</option>
                    <option value="biology">Biology</option> 
                    <option value="chemistry">Chemistry</option>   
                    <option value="">N/A</option>                
                                        
                </select>                
            </div>

            <div class="mt-4">
                <x-input-label for="teaching4" :value="__('Subject 4')" />

                <select name="teaching4" id="teaching4" style = "width:50%"> 
                <option value="physics">Physics</option>
                    <option value="biology">Biology</option> 
                    <option value="chemistry">Chemistry</option>   
                    <option value="">N/A</option>                 
                                        
                </select>                
            </div>

            <div class="mt-4">
                <x-input-label for="teaching5" :value="__('Subject 5')" />

                <select name="teaching5" id="teaching5" style = "width:50%"> 
                    <option value="agriculture">Agriculture</option>
                    <option value="computer">Computer</option>
                    <option value="bussines">Bussines</option>
                    <option value="homescience">Homescience</option>
                    <option value="metalwork">Metalwork</option>
                    <option value="woodwork">Woodwork</option>
                    <option value="french">French</option>
                    <option value="german">Germanman</option>  
                    <option value="">N/A</option>
                </select>              
            </div>

            <div class="mt-4">
                <x-input-label for="classincharge" :value="__('Claass In Charge')" />

                <select name="classincharge" id="classincharge" style = "width:50%">
                <option value="1A">1A</option>
                <option value="1B">1B</option> 
                <option value="1C">1C</option> 
                <option value="1D">1D</option> 
                

                <option value="2A">2A</option>
                <option value="2B">2B</option> 
                <option value="2C">2C</option> 
                <option value="2D">2D</option>
                
                <option value="3A">3A</option>
                <option value="3B">3B</option> 
                <option value="3C">3C</option> 
                <option value="3D">3D</option> 

                <option value="4A">4A</option>
                <option value="4B">4B</option> 
                <option value="4C">4C</option> 
                <option value="4D">4D</option> 

                <option value="">N/A</option>
                 
                
                                        
                </select>                
            </div>

            <div class="row">
                <button class="btn btn-primary" style = "width:30%">Add Profile</button>
            </div>



            
            
        </form>
    </x-auth-card>
</x-guest-layout>
