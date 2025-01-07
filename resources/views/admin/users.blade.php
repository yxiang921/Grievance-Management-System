@extends('layouts.master')
@section('content')
    <div class="w-full h-auto mt-4 border border-gray-100 shadow-sm rounded-md p-4 bg-white">
        <div class="w-full flex flex-row justify-between items-center pr-2">
            <h1 class="font-semibold text-lg">Users List</h1>
            <a class="primary-btn" href="{{ route('admin.user.add') }}">Add new user</a>
        </div>
        <form action="{{ route('admin.user.search') }}" method="POST" class="w-full">
            @csrf
            <div class="w-full">
                <div class="w-full grid grid-cols-1 lg:grid-cols-3 gap-4">
                    <input type="text" class="primary-input" placeholder="User ID" name="user_id"
                        value="{{ request('user_id') }}">
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
                            <th class="">User ID</th>
                            <th class="">Username</th>
                            <th class="">Full Name</th>
                            <th class="">Email</th>
                            <th class="">Phone Number</th>
                            <th class="">Action</th>
                        </tr>
                    </thead>
                    <tbody>

                        @if (count($users) == 0)
                            <tr>
                                <td colspan="6" class="text-center py-4">No users found</td>
                            </tr>
                        @endif

                        @foreach ($users as $user)
                            <tr class="h-10 hover:bg-primary-100/5">
                                <td>USR{{ $user->id }}</td>
                                <td>{{ $user->username }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->phone_number }}</td>
                                <td>
                                    <a href="{{ route('admin.user.edit', ['user_id' => $user->id]) }}"
                                        class="underline">Edit</a>
                                    <span class="px-2">|</span>
                                    <a onclick="confirmDelete('user', event, '{{ route('admin.user.delete', ['user_id' => $user->id]) }}')"
                                        class="underline">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <div class="lg:hidden block mt-4">
            @if (count($users) == 0)
                <tr>
                    <td colspan="6" class="text-center py-4">No users found</td>
                </tr>
            @endif
            @foreach ($users as $user)
                <div class="bg-white border border-gray-100 rounded-md shadow-sm mb-4 p-4">

                    <div class="flex justify-between">
                        <div class="text-gray-500 font-medium">User ID</div>
                        <div>
                            USR{{ $user->id }}
                        </div>
                    </div>
                    <div class="flex justify-between">
                        <div class="text-gray-500 font-medium">Username</div>
                        <div>
                            {{ $user->username }}
                        </div>
                    </div>
                    <div class="flex justify-between">
                        <div class="text-gray-500 font-medium">Full Name</div>
                        <div>
                            {{ $user->name }}
                        </div>
                    </div>
                    <div class="flex justify-between">
                        <div class="text-gray-500 font-medium">Email</div>
                        <div>
                            {{ $user->email }}
                        </div>
                    </div>
                    <div class="flex justify-between">
                        <div class="text-gray-500 font-medium">Phone Number</div>
                        <div>
                            {{ $user->phone_number }}
                        </div>
                    </div>
                    <div class="flex justify-between">
                        <div class="text-gray-500 font-medium">Action</div>
                        <div>
                            <a href="{{ route('admin.user.edit', ['user_id' => $user->id]) }}" class="underline">Edit</a>
                            <span class="px-2">|</span>
                            <a href="{{ route('admin.user.delete', ['user_id' => $user->id]) }}"
                                class="underline">Delete</a>
                        </div>
                    </div>


                </div>
            @endforeach
        </div>

    </div>
@endsection
