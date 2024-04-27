<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight pt-16">
            {{ __('Order Summary') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h2 class="text-lg font-semibold mb-4">Order Details</h2>
                    <div class="flex flex-col md:flex-row items-start md:items-center justify-between mb-6">
                        <div class="flex items-center">
                            <img src="path_to_image" class="w-16 h-16 object-cover rounded-md mr-4" alt="Product Image">
                            <div>
                                <h3 class="text-gray-800 font-semibold">Product Name</h3>
                                <p class="text-gray-600">Price: $10.00</p>
                                <p class="text-gray-600">Quantity: 2</p>
                            </div>
                        </div>
                        <p class="text-gray-800 font-semibold">$20.00</p>
                    </div>
                    <!-- You can add more product details here if needed -->
                    <hr class="my-6">
                    <h2 class="text-lg font-semibold mb-4">Payment Method</h2>
                    <div class="flex items-center mb-4">
                        <input type="radio" id="cod" name="payment_method" value="cod" class="mr-2">
                        <label for="cod" class="text-gray-800">Cash on Delivery (COD)</label>
                    </div>
                    <div class="flex items-center mb-4">
                        <input type="radio" id="credit_card" name="payment_method" value="credit_card" class="mr-2">
                        <label for="credit_card" class="text-gray-800">Credit Card</label>
                    </div>
                    <!-- You can add more payment methods here if needed -->
                    <hr class="my-6">
                    <h2 class="text-lg font-semibold mb-4">Shipping Address</h2>
                    <!-- Current Address -->
                    <div class="mb-4" id="current-address">
                        <h3 class="text-gray-800 font-semibold">Current Address</h3>
                        <p class="text-gray-800">John Doe</p>
                        <p class="text-gray-800">123 Main St, City, Country</p>
                    </div>
                    <!-- Form to Change Address -->
                    <div class="mb-4">
                        <label for="new_address" class="block text-sm font-medium text-gray-700">New Address</label>
                        <textarea id="new_address" name="new_address" rows="3" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50"></textarea>
                    </div>
                    <button onclick="changeAddress()" class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">Change Address</button>
                    <!-- You can add more address details here if needed -->
                    <hr class="my-6">
                    <div class="flex justify-end">
                        <button class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">Place Order</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function changeAddress() {
            var newAddress = document.getElementById('new_address').value;
            document.getElementById('current-address').innerHTML = '<h3 class="text-gray-800 font-semibold">New Address</h3><p class="text-gray-800">' + newAddress + '</p>';
            // Clear textarea after changing address
            document.getElementById('new_address').value = '';
        }
    </script>
</x-app-layout>
