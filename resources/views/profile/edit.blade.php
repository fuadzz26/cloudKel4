<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 flex flex-col md:flex-row space-y-6 md:space-x-6">
            <div class="md:w-1/3">
                <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                    <div class="max-w-md mx-auto">
                        <!-- Foto Profil -->
                        <div class="flex justify-center items-center mb-4">
                            <div class="w-24 h-24 rounded-full overflow-hidden">
                                <img class="object-cover w-full h-full" src="{{ asset('images/profile_picture.jpg') }}" alt="Profile Picture">
                            </div>
                        </div>
                        <!-- Nama Pengguna -->
                        <div class="text-center text-lg font-semibold mb-4">
                            John Doe
                        </div>
                        <!-- Informasi Profil -->
                        <div>
                            {{-- <h3 class="text-xl font-semibold mb-2">Profile Information</h3> --}}
                            @include('profile.partials.update-profile-information-form')
                        </div>
                    </div>
                </div>
            </div>

            <div class="md:w-2/3">
                <!-- Update Password -->
                <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg mb-6">
                    <div class="max-w-md mx-auto">
                        {{-- <h3 class="text-xl font-semibold mb-2">Update Password</h3> --}}
                        @include('profile.partials.update-password-form')
                    </div>
                </div>
                
                <!-- Delete User -->
                <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                    <div class="max-w-md mx-auto">
                        {{-- <h3 class="text-xl font-semibold mb-2">Delete User</h3> --}}
                        @include('profile.partials.delete-user-form')
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
