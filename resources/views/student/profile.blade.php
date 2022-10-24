<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <form method="post" enctype ="multipart/form-data" action="/dashboard/pstudent">
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
                <label for="image" class="col-md-4 col-form-label text-md-end">{{ __('Profile Image') }}</label> <br>
                <input type="file" class = "form-control-file" id = "image" name = "image">
                @error('image')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                @enderror
            </div>

            
            <div>
                <x-input-label for="parent_name" :value="__('Parent/Guardian Name')" />

                <x-text-input id="parent_name" class="block mt-1 w-full" type="text" name="parent_name" :value="old('parent_name')" required autofocus />

                <x-input-error :messages="$errors->get('parent_name')" class="mt-2" />
            </div>

            <div>
                <x-input-label for="parent_phone" :value="__('Parent/Guardian Mobile Nunber')" />

                <x-text-input id="parent_phone" class="block mt-1 w-full" type="text" name="parent_phone" :value="old('parent_phone')" required autofocus />

                <x-input-error :messages="$errors->get('parent_phone')" class="mt-2" />
            </div>

            <div>
                <x-input-label for="parent_email" :value="__('Parent/Guardian Email')" />

                <x-text-input id="parent_email" class="block mt-1 w-full" type="email" name="parent_email" :value="old('parent_email')" required autofocus />

                <x-input-error :messages="$errors->get('parent_email')" class="mt-2" />
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
                <x-input-label for="class" :value="__('Class')" />

                <select name="class" id="class" style = "width:50%">
                    
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
                                        
                </select>                
            </div>

            

            <div class="mt-4">
                <x-input-label for="subject1" :value="__('Subject 1')" />

                <select name="subject1" id="subject1" style = "width:50%"> 
                    
                    <option value="maths">Maths</option>             
                                        
                </select>                
            </div>

            <div class="mt-4">
                <x-input-label for="subject2" :value="__('Subject 2')" />

                <select name="subject2" id="subject2" style = "width:50%"> 
                    
                    <option value="english">English</option>             
                                        
                </select>                
            </div>

            <div class="mt-4">
                <x-input-label for="subject3" :value="__('Subject 3')" />

                <select name="subject3" id="subject3" style = "width:50%"> 
                    <option value="kiswahili">Kiswahili</option>
                                        
                </select>                
            </div>

            <div class="mt-4">
                <x-input-label for="subject4" :value="__('Subject 4')" />

                <select name="subject4" id="subject4" style = "width:50%"> 
                    <option value="chemistry">Chemistry</option>
                                        
                </select>                
            </div>

            <div class="mt-4">
                <x-input-label for="subject5" :value="__('Subject 5')" />

                <select name="subject5" id="subject5" style = "width:50%"> 
                    <option value="physics">Physics</option>
                    <option value="">N/A</option>             
                                        
                </select>                
            </div>

            <div class="mt-4">
                <x-input-label for="subject6" :value="__('Subject 6')" />

                <select name="subject6" id="subject6" style = "width:50%"> 
                
                <option value="biology">Biology</option>
                <option value="">N/A</option>               
                                        
                </select>                
            </div>

            <div class="mt-4">
                <x-input-label for="subject7" :value="__('Subject 7')" />

                <select name="subject7" id="subject7" style = "width:50%"> 
                    <option value="history">History</option>
                    <option value="">N/A</option>             
                                        
                </select>                
            </div>

            <div class="mt-4">
                <x-input-label for="subject8" :value="__('Subject 8')" />

                <select name="subject8" id="subject8" style = "width:50%"> 
                    <option value="geography">Geography</option>
                    <option value="">N/A</option>             
                                        
                </select>                 
            </div>

            <div class="mt-4">
                <x-input-label for="subject9" :value="__('Subject 9')" />

                <select name="subject9" id="subject9" style = "width:50%"> 
                    <option value="c.r.e">C.R.E</option>
                    <option value="">N/A</option>             
                                        
                </select>                   
            </div>

            <div class="mt-4">
                <x-input-label for="subject10" :value="__('Subject 10')" />

                <select name="subject10" id="subject10" style = "width:50%"> 
                    <option value="computer studies">Computer Studies</option>
                    <option value="bussines">Bussines</option>
                    <option value="agriculture">Agriculture</option>   
                    <option value="">N/A</option>        
                                        
                </select>                    
            </div>
            <div class="mt-4">
                <x-input-label for="subject11" :value="__('Subject 11')" />

                <select name="subject11" id="subject11" style = "width:50%"> 
                    <option value="french">French</option>
                    <option value="german">German</option>  
                    <option value="">N/A</option>            
                                        
                </select>                
            </div>
            <div class="mt-4">
                <x-input-label for="subject12" :value="__('Subject 12')" />

                <select name="subject12" id="subject12" style = "width:50%"> 
                    <option value="homescience">Homescience</option>
                    <option value="woodwork">Woodwork</option>
                    <option value="metalwork">MetalWork</option> 
                    <option value="">N/A</option>             
                                        
                </select>                
            </div>

            <div class="row">
                <button class="btn btn-primary" style = "width:30%">Add Profile</button>
            </div>            
            
        </form>
    </x-auth-card>
</x-guest-layout>
