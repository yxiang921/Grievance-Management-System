@extends('layouts.master')

@section('content')
    <div class="container mx-auto">
        <div class="mx-auto bg-white border border-gray-100 p-4 rounded-md">
            <h2 class="text-2xl font-bold mb-6 text-gray-800">Edit Your Profile</h2>

            <table class="w-2/3">
                <tbody>
                    <tr>
                        <td class="font-bold text-slate-700 py-2">Admin ID</td>
                        <td class="py-2">
                            <input type="text" name="admin_id" value="ADM01"
                                class="w-full primary-input"
                                readonly>
                        </td>
                    </tr>
                    <tr>
                        <td class="font-bold text-slate-700 py-2">First Name</td>
                        <td class="py-2">
                            <input type="text" name="first_name" value="John"
                                class="w-full primary-input">
                        </td>
                    </tr>
                    <tr>
                        <td class="font-bold text-slate-700 py-2">Last Name</td>
                        <td class="py-2">
                            <input type="text" name="last_name" value="Doe"
                                class="w-full primary-input">
                        </td>
                    </tr>
                    <tr>
                        <td class="font-bold text-slate-700 py-2">Username</td>
                        <td class="py-2">
                            <input type="text" name="username" value="Doe"
                                class="w-full primary-input">
                        </td>
                    </tr>
                    <tr>
                        <td class="font-bold text-slate-700 py-2">Email</td>
                        <td class="py-2">
                            <input type="email" name="email" value="johndoe@gmail.com"
                                class="w-full primary-input">
                        </td>
                    </tr>
                    <tr>
                        <td class="font-bold text-slate-700 py-2">Phone Number</td>
                        <td class="py-2">
                            <input type="text" name="phone_number" value="012 3456789"
                                class="w-full primary-input">
                        </td>
                    </tr>
                    <tr>
                        <td class="font-bold text-slate-700 py-2">Password</td>
                        <td class="py-2">
                            <input type="password" name="password" value="********"
                                class="w-full primary-input">
                        </td>
                    </tr>
                </tbody>
            </table>

            <div class="mt-6 flex justify-end space-x-4">
                <button
                    class="cancel-btn">Cancel</button>
                <button
                    class="primary-btn">Submit</button>
            </div>
        </div>
    </div>
@endsection
