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

                <p class="text-sm mt-12 text-gray-800">Already have an account? <a
                        href="{{ route('department.login.form') }}"
                        class="text-primary-900 font-semibold hover:underline ml-1">Login here</a></p>
            </div>

            <form class="max-w-md md:ml-auto w-full" method="POST" action="{{ route('department.register') }}">
                @csrf
                <h3 class="text-gray-900 text-3xl font-extrabold mb-8">
                    Sign Up
                </h3>

                <div class="space-y-4">
                    <div>
                        <x-input-label for="department_name" :value="__('Department Name')" />
                        <x-text-input id="department_name" class="block mt-1 w-full" type="text"
                            name="department_name" :value="old('department_name')" required autofocus
                            autocomplete="department_name" />
                        <x-input-error :messages="$errors->get('department_name')" class="mt-2" />
                    </div>

                    <div>
                        <x-input-label for="department_key" :value="__('Department Key')" />
                        <x-text-input id="department_key" class="block mt-1 w-full" type="text" name="department_key"
                            :value="old('department_key')" required autofocus autocomplete="department_key" />
                        <x-input-error :messages="$errors->get('department_key')" class="mt-2" />
                    </div>

                    <div class="mt-4">
                        <x-input-label for="department_category" :value="__('Category')" />
                        <select id="department_category" class="block mt-1 w-full primary-select"
                            name="department_category" required>
                            <option value="" disabled selected>Select Category</option>
                            <option value="Academic">Academic</option>
                            <option value="Facility">Facility</option>
                            <option value="Finance">Finance</option>
                            <option value="Behaviour">Behaviour</option>
                            <option value="Other">Other</option>
                        </select>
                        <x-input-error :messages="$errors->get('department_category')" class="mt-2" />
                    </div>

                    <div>
                        <x-input-label for="department_password" :value="__('Password')" />
                        <x-text-input id="department_password" class="block mt-1 w-full" type="password"
                            name="department_password" :value="old('department_password')" required autofocus
                            autocomplete="department_password" />
                        <x-input-error :messages="$errors->get('department_password')" class="mt-2" />
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
