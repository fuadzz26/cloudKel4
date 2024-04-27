<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight pt-16">
            {{ __('Shopping Cart') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @php
                $cartItems = [
                    [
                        'id' => 1,
                        'name' => 'Product 1',
                        'image' => 'path_to_image_1',
                        'price' => '$10.00',
                        'quantity' => 2,
                        'total' => '$20.00'
                    ],
                    [
                        'id' => 2,
                        'name' => 'Product 2',
                        'image' => 'path_to_image_2',
                        'price' => '$15.00',
                        'quantity' => 1,
                        'total' => '$15.00'
                    ]
                ];
            @endphp

            @if(count($cartItems) > 0)
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Product
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Price
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Quantity
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Total
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        <span class="sr-only">Remove</span>
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        <span class="sr-only">Select</span>
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                @foreach($cartItems as $item)
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="flex items-center">
                                                <div class="flex-shrink-0 h-16 w-16">
                                                    <img class="h-16 w-16 rounded-md object-cover" src="{{ $item['image'] }}" alt="{{ $item['name'] }}">
                                                </div>
                                                <div class="ml-4">
                                                    <div class="text-sm font-medium text-gray-900">{{ $item['name'] }}</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm text-gray-900">{{ $item['price'] }}</div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm text-gray-900">{{ $item['quantity'] }}</div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm text-gray-900">{{ $item['total'] }}</div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                            {{-- <form action="{{ route('cart.remove', $item['id']) }}" method="POST"> --}}
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="text-red-600 hover:text-red-900 focus:outline-none">Remove</button>
                                            {{-- </form> --}}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                            <input type="checkbox">
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="mt-4 text-right">
                    <button class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">Checkout</button>
                </div>
            @else
                <p>Your shopping cart is empty.</p>
            @endif
        </div>
    </div>
</x-app-layout>
