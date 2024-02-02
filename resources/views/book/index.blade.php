<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Books') }}
        </h2>
    </x-slot>

    <x-primary-link href="{{ route('books.create') }}">Add book</x-primary-link> 
    <div class="py-12">
        <ul>
            @foreach ($books as $book)
            <li>           
                 <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg flex justify-between">
                        <div class="p-6 text-gray-900">
                        <a href="">{{ $book->title }}</a>
                        <br>
                        <a href="">{{ $book->release_date }}</a>
                        </div>
                    </div>
                </div>
            </li>
        @endforeach
        </ul>
        <div>
            {{ $books->links() }}
        </div>
    </div>
</x-app-layout>