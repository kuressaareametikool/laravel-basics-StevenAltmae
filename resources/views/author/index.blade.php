<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Authors') }}
            
        </h2>
    </x-slot>
    
    <x-primary-link href="{{ route('authors.create') }}">Add author</x-primary-link> 
    <div class="py-12">     
        <ul>
            @foreach ($authors as $author)
            <li>           
                 <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg flex justify-between">
                        <div class="p-6 text-gray-900">
                        <a href="">{{ $author->first_name }}</a>
                        <br>
                        <a href="">{{ $author->last_name }}</a>
                        </div>
                        <form action="{{ route('authors.destroy', $author->id) }}" method="POST" class="inline-block">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Delete</button>
                        </form>
                    </div>
                </div>
            </li>
        @endforeach
        </ul>
        <div>
            {{ $authors->links() }}
        </div>
    </div>
</x-app-layout>