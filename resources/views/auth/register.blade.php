@include('layouts.partials.head')

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

                <p class="text-sm mt-12 text-gray-800">Already have an account? <a href="{{ route('login') }}"
                        class="text-primary-900 font-semibold hover:underline ml-1">Login here</a></p>
            </div>

            <form class="max-w-md md:ml-auto w-full" method="POST" action="{{ route('register') }}">
                @csrf
                <h3 class="text-gray-900 text-3xl font-extrabold mb-8">
                    Sign Up
                </h3>

                <div class="space-y-4">
                    <!-- Name -->
                    <div>
                        <x-input-label for="name" :value="__('Name')" />
                        <x-text-input id="name" class="block mt-1 w-full" type="text" name="name"
                            :value="old('name')" required autofocus autocomplete="name" />
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    </div>

                    <!-- Email Address -->
                    <div class="mt-4">
                        <x-input-label for="email" :value="__('Email')" />
                        <x-text-input id="email" class="block mt-1 w-full" type="email" name="email"
                            :value="old('email')" required autocomplete="username" />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <!-- Password -->
                    <div class="mt-4">
                        <x-input-label for="password" :value="__('Password')" />

                        <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                            autocomplete="new-password" />

                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>

                    <!-- Confirm Password -->
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
