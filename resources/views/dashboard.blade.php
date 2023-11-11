<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                    <div class="contianer">
                        
                        <a href="{{ route('create.user') }}" class="btn text-success">Add Data</a>
                        <a href="{{ route('view.user') }}" class="btn text-info">View Data</a>
                        
                    </div>
                </div>
                
            </div>
            
        </div>
       
    </div>
    
</x-app-layout>
