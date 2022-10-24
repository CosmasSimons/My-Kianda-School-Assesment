<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{Auth::user()->name}} Dashboard
        @if(Auth::user()->adminProfile)
                    
         @else
        <button class="btn btn-primary" style = "padding-left:800px;color:blue"><a href="/dashboard/padmin/create">add Profile</a></button>
         @endif
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                Hey there {{Auth::user()->name}} you're logged in to your Admin Account </br>
                
                @if(Auth::user()->adminProfile)
                    
                @else
                To add your profile details please click the <strong> Add Profile</strong> link above.
                @endif
                </div>
                @if(Auth::user()->adminProfile)
                <div style = "display:flex">
                <div>
                <img src="/storage/{{  Auth::user()->adminProfile->image }}" style="width:300px;height:450px;padding-left:25px;padding-top:25px;padding-bottom:25px">
                </div>
                <div class = "card" style = "">
                <div style="padding-left:25px;padding-top:25px">
                <h1><strong>{{Auth::user()->name}} these are your profile Details</strong></h1>
                <h1 style = "padding-top:10px;"><strong>Name: </strong>{{Auth::user()->name}}</h1>
                <h1><strong>Email:</strong> {{Auth::user()->email}}</h1>
                <h1><strong>Gender:</strong> {{ Auth::user()->adminProfile->gender }}</h1>
                <h1><strong>Date of Birth:</strong> {{ Auth::user()->adminProfile->dob }}</h1>
                <h1><strong>Address:</strong> {{ Auth::user()->adminProfile->address }}</h1>
                

                <h1 style = "padding-top:100px;color:Red">NOTE: THE ABOVE DETAILS WERE PROVIDED BY YOU DURING PROFILE CREATION  </h1>
                </div>
                </div>
                
                </div>
                @endif
            </div>
                </div>
                
            </div>
        </div>
    
</x-app-layout>
