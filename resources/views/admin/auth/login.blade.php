<x-guest-layout>
    <!-- Session Status -->
    {{-- <x-auth-session-status class="mb-4" :status="session('status')" /> --}}
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

                    <p class="text-sm mt-12 text-gray-800">Don't have an account <a
                            href="{{ route('admin.register.form') }}"
                            class="text-primary-900 font-semibold hover:underline ml-1">Register here</a></p>
                </div>

                <form class="max-w-md md:ml-auto w-full" method="POST" action="{{ route('admin.login') }}">
                    @csrf
                    <h3 class="text-gray-900 text-3xl font-extrabold mb-8">
                        Sign in
                    </h3>

                    <div class="space-y-4">
                        <div>
                            <x-input-label for="admin_email" :value="__('Email')" />
                            <x-text-input id="admin_email" class="block mt-1 w-full" type="email" name="admin_email"
                                :value="old('admin_email')" required autofocus autocomplete="username" />
                        </div>
                        <div>
                            <x-input-label for="admin_password" :value="__('Password')" />

                            <x-text-input id="admin_password" class="block mt-1 w-full" type="password"
                                name="admin_password" required autocomplete="current-admin_password" />

                            <x-input-error :messages="$errors->get('error_message')" class="mt-2" />
                        </div>
                        <div class="flex flex-wrap items-center justify-between gap-4">
                            <div class="flex items-center">
                                <input id="remember-me" name="remember-me" type="checkbox"
                                    class="h-4 w-4 text-primary-900 focus:ring-primary-500 border-gray-300 rounded" />
                                <label for="remember-me" class="ml-3 block text-sm text-gray-900">
                                    Remember me
                                </label>
                            </div>
                            <div class="text-sm">
                                @if (Route::has('password.request'))
                                    <a class="underline text-primary-900 hover:text-primary-hover font-semibold"
                                        href="{{ route('password.request') }}">
                                        {{ __('Forgot your password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="!mt-8">
                        <button type="submit" class="primary-btn w-full">
                            Log in
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</x-guest-layout>
