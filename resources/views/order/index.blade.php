<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Orders') }}
        </h2>
    </x-slot>

    <
    <div class="py-12">
        <ul>
            @foreach ($orders as $order)
            <li>           
                 <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg flex justify-between">
                        <div class="p-6 text-gray-900">
                        <a href="">{{ $order->delivery_address }}</a>
                        <br>
                        <a href="">{{ $order->order_date}}</a>
                        <br>
                        <a href="">{{ $order->status }}</a>
                        </div>
                    </div>
                </div>
            </li>
        @endforeach
        </ul>
        <div>
            {{ $orders->links() }}
        </div>
    </div>
</x-app-layout>