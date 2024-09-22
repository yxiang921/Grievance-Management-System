@extends('layouts.master')
@section('content')
    <div class="w-full border border-gray-100 rounded-md p-4">
        <h1 class="text-lg font-medium">Add Department</h1>
        <form class="mt-4" action="">
            <div class="grid lg:grid-cols-4 items-center">
                <label for="departmentName" class="col-span-1">Department Name</label>
                <input type="text" class="primary-input col-span-2 mt-2 lg:mt-0" placeholder="Name" name="departmentName" />
            </div>
            <div class="grid lg:grid-cols-4 items-center mt-4">
                <label for="departmentStaff" class="col-span-1">Staff</label>
                {{-- DROPDOWN START --}}
                <div x-data="{ open: false, selected: [] }" class="relative inline-block col-span-2 mt-2 lg:mt-0">
                    <!-- Dropdown Trigger -->
                    <div class="relative">
                        <button @click="open = !open"
                            class="w-full flex items-center justify-between px-4 py-2 bg-white border border-gray-300 text-gray-500 rounded-md hover:bg-gray-50 focus:outline-none focus:ring focus:ring-primary-100 focus:border-primary-900">
                            <span x-text="selected.length > 0 ? selected.join(', ') : 'Select options'"></span>
                            <svg class="w-5 h-5 inline ml-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 011.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd" />
                            </svg>
                        </button>
                    </div>

                    <!-- Dropdown Menu -->
                    <div x-show="open" @click.away="open = false"
                        class="absolute z-10 w-full mt-2 bg-white border border-gray-300 rounded-md shadow-lg">
                        <ul class="py-1">
                            <!-- Repeatable Option -->
                            @foreach (['Abu', 'John Doe', 'Alex', 'Ali'] as $option)
                                <li @click="if(selected.includes('{{ $option }}')) { selected = selected.filter(item => item !== '{{ $option }}') } else { selected.push('{{ $option }}') }"
                                    class="cursor-pointer select-none relative py-2 pl-10 pr-4 hover:bg-gray-100">
                                    <div class="flex items-center">
                                        <input type="checkbox"
                                            class="h-4 w-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500"
                                            x-model="selected" value="{{ $option }}">
                                        <label for="checkbox" class="ml-2 block text-sm text-gray-900">
                                            {{ $option }}
                                        </label>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                {{-- DROPDOWN END --}}
            </div>
            <div class="mt-8">
                <button class="cancel-btn">Cancel</button>
                <button class="primary-btn" type="submit">Submit</button>
            </div>

        </form>
    </div>


    <script>
        document.querySelector('form').addEventListener('submit', function(e) {
            e.preventDefault();
        });
    </script>
@endsection
