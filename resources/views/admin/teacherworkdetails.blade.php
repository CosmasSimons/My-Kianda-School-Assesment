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
                    Teachers In the school <br>
                    

                    <table class="" style = "border:1px solid black;width:100%">
                        <tr >
                            
                            <td style = "border:1px solid black">Name</td>
                            <td style = "border:1px solid black">Department</td>
                            <td style = "border:1px solid black">Class in Charge</td>
                            <td style = "border:1px solid black">Subjects</td>
                            
                        </tr>
                        @foreach($users as $user)

                        <tr>
                            
                            <td style = "border:1px solid black">{{$user['name']}}</td>
                            <td style = "border:1px solid black">{{$user['tfaculty']}}</td>
                            <td style = "border:1px solid black">{{$user['classincharge']}}</td>
                            <td style = "border:1px solid black">
                            <select style = "width:100%">
                            <option>Subjects for {{$user['name']}}</option>
                                <option> {{$user['teaching1']}} </option>
                                <option> {{$user['teaching2']}} </option>
                                <option> {{$user['teaching3']}} </option>
                                <option> {{$user['teaching4']}} </option>
                                <option> {{$user['teaching5']}} </option>
                                
                            </select>
                            </td>
                            
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
