<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Books') }}
        </h2>
    </x-slot>

    <div>
    <form method="POST" action="{{ route('books.store') }}">
            @csrf
            <div>
                <x-input-label for="book" :value="__('title')" />
                <x-text-input id="title" class="block mt-1 w-full" type="" name="type" :value="old('title')"/>
                <x-input-error :messages="$errors->get('books')" class="mt-2" />
            </div>
            <div>
                <x-input-label for="book" :value="__('title')" />
                <x-text-input id="title" class="block mt-1 w-full" type="" name="type" :value="old('title')"/>
                <x-input-error :messages="$errors->get('books')" class="mt-2" />
            </div>
            <x-primary-button class="ms-3">
                {{ __('save') }}
            </x-primary-button>
        </form>
    </div>
</x-app-layout>