@extends('layouts.master')
@section('content')
    <div class="w-full h-auto mt-4 border border-gray-100 shadow-sm rounded-md p-4 bg-white">
        <div class="w-full flex flex-row justify-between items-center pr-2">
            <h1 class="font-semibold text-lg">Admin List</h1>
            <a href="{{ route('admin.admin.add') }}" class="primary-btn">Add new admin</a>
        </div>
        <form action="{{ route('admin.admin.search') }}" method="POST" class="w-full">
            @csrf
            <div class="w-full">
                <div class="w-full grid grid-cols-1 lg:grid-cols-3 gap-4">
                    <input type="text" class="primary-input" placeholder="Admin ID" name="admin_id"
                        value="{{ request('admin_id') }}">
                    <input type="text" class="primary-input" placeholder="Phone Number" name="phone_number"
                        value="{{ request('phone_number') }}">
                    <input type="text" class="primary-input" placeholder="Email Address" name="email"
                        value="{{ request('email') }}">
                </div>
            </div>

            <div class="line w-full h-1 border-b-[1px] border-gray-100 my-4"></div>

            <input class="primary-input w-64" type="text" placeholder="Username" name="username"
                value="{{ request('username') }}">
            <input class="primary-input w-64 lg:mx-4" type="text" placeholder="Full Name" name="fullname"
                value="{{ request('fullname') }}">
            <button class="primary-btn w-28">Search</button>

        </form>
        <div class="w-full h-auto mt-8 hidden lg:block">
            <div class="w-full text-center border-collapse border-y border-gray-100 bg-white">
                <table class="min-w-full overflow-hidden">
                    <thead class="border-b-[1px] border-gray-100 h-12 text-gray-500">
                        <tr>
                            <th class="">Admin ID</th>
                            <th class="">Username</th>
                            <th class="">Full Name</th>
                            <th class="">Email</th>
                            <th class="">Phone Number</th>
                            <th class="">Action</th>
                        </tr>
                    </thead>
                    <tbody>

                        @if (count($admins) == 0)
                            <tr>
                                <td colspan="6" class="text-center py-4">No admins found</td>
                            </tr>
                        @endif

                        @foreach ($admins as $admin)
                            <tr class="h-10">
                                <td>ADM{{ $admin->id }}</td>
                                <td>{{ $admin->admin_username }}</td>
                                <td>{{ $admin->admin_name }}</td>
                                <td>{{ $admin->admin_email }}</td>
                                <td>{{ $admin->admin_phone_number }}</td>
                                <td>
                                    <a href="{{ route('admin.admin.edit', ['admin_id' => $admin->id]) }}"
                                        class="underline">Edit</a>
                                    <span class="px-2">|</span>
                                    <a href="{{ route('admin.admin.delete', ['admin_id' => $admin->id]) }}"
                                        class="underline">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <div class="lg:hidden block mt-4">

            @if (count($admins) == 0)
                <div class="text-center py-4">No admins found</div>
            @endif

            @foreach ($admins as $admin)
                <div class="bg-white border border-gray-100 rounded-md shadow-sm mb-4 p-4">
                    <div class="flex justify-between">
                        <div class="text-gray-500 font-medium">Admin ID</div>
                        <div>
                            ADM{{ $admin->id }}
                        </div>
                    </div>
                    <div class="flex justify-between">
                        <div class="text-gray-500 font-medium">Username</div>
                        <div>
                            {{ $admin->admin_username }}
                        </div>
                    </div>
                    <div class="flex justify-between">
                        <div class="text-gray-500 font-medium">Full Name</div>
                        <div>
                            {{ $admin->admin_name }}
                        </div>
                    </div>
                    <div class="flex justify-between">
                        <div class="text-gray-500 font-medium">Email</div>
                        <div>
                            {{ $admin->admin_email }}
                        </div>
                    </div>
                    <div class="flex justify-between">
                        <div class="text-gray-500 font-medium">Phone Number</div>
                        <div>
                            {{ $admin->admin_phone_number }}
                        </div>
                    </div>
                    <div class="flex justify-between">
                        <div class="text-gray-500 font-medium">Action</div>
                        <div>
                            <a href="{{ route('admin.admin.edit', ['admin_id' => $admin->id]) }}" class="underline">Edit</a>
                            <span class="px-2">|</span>
                            <a href="{{ route('admin.admin.delete', ['admin_id' => $admin->id]) }}" class="underline">Delete</a>
                        </div>
                    </div>

                </div>
            @endforeach
        </div>

    </div>
@endsection
