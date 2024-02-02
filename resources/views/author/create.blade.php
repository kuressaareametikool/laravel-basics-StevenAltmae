<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Authors') }}
        </h2>
    </x-slot>

    <div>
    <form method="POST" action="{{ route('authors.store') }}">
            @csrf
            <div>
                <x-input-label for="author" :value="__('First name')" />
                <x-text-input id="first_name" class="block mt-1 w-full" type="first_name" name="first_name" :value="old('first_name')"/>
                <x-input-error :messages="$errors->get('authors')" class="mt-2" />
            </div>
            <div>
                <x-input-label for="author" :value="__('Last name')" />
                <x-text-input id="last_name" class="block mt-1 w-full" type="last_name" name="last_name" :value="old('last_name')"/>
                <x-input-error :messages="$errors->get('authors')" class="mt-2" />
            </div>
            <x-primary-button class="ms-3">
                {{ __('save') }}
            </x-primary-button>
        </form>
    </div>
</x-app-layout>