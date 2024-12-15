@include('layouts.partials.head')

@if (session('message'))
    <x-alert status="{{ session('status') }}" message="{{ session('message') }}" />
@endif

<div class="font-[sans-serif] text-gray-900">
    <div class="min-h-screen flex flex-col items-center justify-center py-6 px-4">
        <div class="grid md:grid-cols-2 items-center gap-10 max-w-6xl w-full">
            <div>
                <h2 class="lg:text-4xl text-3xl font-extrabold lg:leading-[55px]">
                    Grievance Management System
                </h2>
                <p class="text-md mt-6 text-gray-800">
                    “Streamline, Resolve, Improve: Elevate Your Workflow with Our Grievance Management System!”
                </p>

                <p class="text-sm mt-12 text-gray-800">Already have an account? <a href="{{ route('admin.login.form') }}"
                        class="text-primary-900 font-semibold hover:underline ml-1">Login here</a></p>
            </div>

            <form class="max-w-md md:ml-auto w-full" method="POST" action="{{ route('admin.register') }}">
                @csrf
                <h3 class="text-gray-900 text-3xl font-extrabold mb-8">
                    Sign Up
                </h3>

                <div class="space-y-4">
                    <div>
                        <x-input-label for="name" :value="__('Name')" />
                        <x-text-input id="name" class="block mt-1 w-full" type="text" name="admin_name"
                            :value="old('name')" required autofocus autocomplete="name" />
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    </div>

                    <div>
                        <x-input-label for="username" :value="__('Username')" />
                        <x-text-input id="username" class="block mt-1 w-full" type="text" name="admin_username"
                            :value="old('username')" required autofocus autocomplete="username" />
                        <x-input-error :messages="$errors->get('username')" class="mt-2" />
                    </div>

                    <div class="mt-4">
                        <x-input-label for="admin_email" :value="__('Admin Email')" />
                        <x-text-input id="admin_email" class="block mt-1 w-full" type="text" name="admin_email"
                            :value="old('admin_email')" required autocomplete="username" />
                        <x-input-error :messages="$errors->get('admin_email')" class="mt-2" />
                    </div>

                    <div class="mt-4">
                        <x-input-label for="admin_phone_number" :value="__('Admin Phone Number')" />
                        <x-text-input id="admin_phone_number" class="block mt-1 w-full" type="text" name="admin_phone_number"
                            :value="old('admin_phone_number')" required autocomplete="username" />
                        <x-input-error :messages="$errors->get('admin_phone_number')" class="mt-2" />
                    </div>

                    <div class="mt-4">
                        <x-input-label for="admin_password" :value="__('Password')" />

                        <x-text-input id="admin_password" class="block mt-1 w-full" type="password"
                            name="admin_password" required autocomplete="new-admin_password" />

                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>

                    <div class="mt-4">
                        <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

                        <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password"
                            name="password_confirmation" required autocomplete="new-password" />

                        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                    </div>

                </div>

                <div class="!mt-8">
                    <button type="submit" class="primary-btn w-full">
                        Sign Up
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
