<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{Auth::user()->name}} Dashboard
        @if(Auth::user()->studentProfile)
                    
         @else
        <button class="btn btn-primary" style = "padding-left:800px;color:blue"><a href="/dashboard/pstudent/create">add Profile</a></button>
         @endif
            
        </h2>
    </x-slot>
    
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                Hey there {{Auth::user()->name}} you're logged in to your Student Account </br>
                
                @if(Auth::user()->studentProfile)
                    
                @else
                To add your profile details please click the <strong> Add Profile</strong> link above.
                @endif
                                                
                    
                </div>
                @if(Auth::user()->studentProfile)
                <div style = "display:flex">
                <div>
                <img src="/storage/{{  Auth::user()->studentprofile->image }}" style="width:300px;height:450px;padding-left:25px;padding-top:25px;padding-bottom:25px">
                </div>
                <div class = "card" style = "">
                <div style="padding-left:25px;padding-top:25px">
                <h1><strong>{{Auth::user()->name}} these are your profile Details</strong></h1>
                <h1 style = "padding-top:10px;"><strong>Name: </strong>{{Auth::user()->name}}</h1>
                <h1><strong>Email:</strong> {{Auth::user()->email}}</h1>
                <h1><strong>Gender:</strong> {{ Auth::user()->studentProfile->gender }}</h1>
                <h1><strong>Date of Birth:</strong> {{ Auth::user()->studentProfile->dob }}</h1>
                <h1><strong>Address:</strong> {{ Auth::user()->studentProfile->address }}</h1>
                <h1><strong>Parent Name</strong> {{ Auth::user()->studentProfile->parent_name }}</h1>
                <h1><strong>Parent Phone:</strong> {{ Auth::user()->studentProfile->parent_phone }}</h1>
                <h1><strong>Parent Email:</strong> {{ Auth::user()->studentProfile->parent_email }}</h1>
                <h1><strong>Class:</strong> {{ Auth::user()->studentProfile->class }}</h1>
                <h1><strong>Subjects:</strong>
                    <select name="subject" id="" readonly style = "width:58%">
                        <option value="">{{ Auth::user()->name }} your subjects are....</option>
                        <option value="">{{ Auth::user()->studentProfile->subject1 }}</option>
                        <option value="">{{ Auth::user()->studentProfile->subject2 }}</option>
                        <option value="">{{ Auth::user()->studentProfile->subject3 }}</option>
                        <option value="">{{ Auth::user()->studentProfile->subject4 }}</option>
                        <option value="">{{ Auth::user()->studentProfile->subject5 }}</option>
                        <option value="">{{ Auth::user()->studentProfile->subject6 }}</option>
                        <option value="">{{ Auth::user()->studentProfile->subject7 }}</option>
                        <option value="">{{ Auth::user()->studentProfile->subject8 }}</option>
                        <option value="">{{ Auth::user()->studentProfile->subject9 }}</option>
                        <option value="">{{ Auth::user()->studentProfile->subject10 }}</option>
                        <option value="">{{ Auth::user()->studentProfile->subject11}}</option>
                        <option value="">{{ Auth::user()->studentProfile->subject12}}</option>
                    </select>
                </h1>

                <h1 style = "padding-top:100px;color:Red">NOTE: THE ABOVE DETAILS WERE PROVIDED BY YOU DURING PROFILE CREATION  </h1>
                </div>
                </div>
                
                </div>
                @endif
            </div>
        </div>
    </div>
</x-app-layout>
