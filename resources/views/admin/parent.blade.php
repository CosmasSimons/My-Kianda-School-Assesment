<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    Students In the school <br>
                    

                    <table class="" style = "border:1px solid black;width:100%">
                        <tr >
                            
                            <td style = "border:1px solid black">Name</td>
                            <td style = "border:1px solid black">Address</td>
                            <td style = "border:1px solid black">Parent Name</td>
                            <td style = "border:1px solid black">Parent phone</td>
                            <td style = "border:1px solid black">Parent Email</td>

                            
                        </tr>
                        @foreach($users as $user)

                        <tr>
                            
                            <td style = "border:1px solid black">{{$user['name']}}</td>
                            <td style = "border:1px solid black">{{$user['address']}}</td>
                            <td style = "border:1px solid black">{{$user['parent_name']}}</td>
                            <td style = "border:1px solid black">{{$user['parent_phone']}}</td>
                            <td style = "border:1px solid black">{{$user['parent_email']}}</td>
                            
                            
                        </tr>

                        @endforeach
                        
                    </table>

                </div>
            </div>
        </div>
    </div>

    <div class="table">
    
    </div>
</x-app-layout>
