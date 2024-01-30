<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Clients') }}
        </h2>
    </x-slot>

    <
    <div class="py-12">
        <ul>
            @foreach ($clients as $client)
            <li>           
                 <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg flex justify-between">
                        <div class="p-6 text-gray-900">
                        <a href="">{{ $client->first_name }}</a>
                        <br>
                        <a href="">{{ $client->last_name }}</a>
                        </div>
                    </div>
                </div>
            </li>
        @endforeach
        </ul>
        <div>
            {{ $clients->links() }}
        </div>
    </div>
</x-app-layout>