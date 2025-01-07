@extends('layouts.master')

@section('content')
    <div class="container mx-auto">
        <form action="{{ route('admin.setting.update') }}" method="POST"
            class="mx-auto bg-white border border-gray-100 p-4 rounded-md">
            @csrf
            <h2 class="text-2xl font-bold mb-6 text-gray-800">Edit Your Profile</h2>

            <table class="w-2/3">
                <tbody>
                    <tr>
                        <td class="font-bold text-slate-700 py-2">Admin ID</td>
                        <td class="py-2">
                            <input type="text" name="admin_id" value="ADM{{ $admin->id }}" class="w-full primary-input"
                                readonly>
                        </td>
                    </tr>
                    <tr>
                        <td class="font-bold text-slate-700 py-2">Full Name</td>
                        <td class="py-2">
                            <input type="text" name="last_name" value="{{ $admin->admin_name }}"
                                class="w-full primary-input">
                        </td>
                    </tr>
                    <tr>
                        <td class="font-bold text-slate-700 py-2">Username</td>
                        <td class="py-2">
                            <input type="text" name="username" value="{{ $admin->admin_username }}"
                                class="w-full primary-input">
                        </td>
                    </tr>
                    <tr>
                        <td class="font-bold text-slate-700 py-2">Email</td>
                        <td class="py-2">
                            <input type="email" name="email" value="{{ $admin->admin_email }}"
                                class="w-full primary-input">
                        </td>
                    </tr>
                    <tr>
                        <td class="font-bold text-slate-700 py-2">Phone Number</td>
                        <td class="py-2">
                            <input type="text" name="phone_number" value="{{ $admin->admin_phone_number }}"
                                class="w-full primary-input">
                        </td>
                    </tr>
                    <tr>
                        <td class="font-bold text-slate-700 py-2">Reset Password</td>
                        <td class="py-2">
                            <input type="password" name="admin_password" value="" class="w-full primary-input">
                        </td>
                    </tr>
                </tbody>
            </table>

            <div class="mt-6 flex justify-end space-x-4">
                {{-- <button class="cancel-btn">Cancel</button> --}}
                <button class="primary-btn">Submit</button>
            </div>
        </form>
    </div>
@endsection
