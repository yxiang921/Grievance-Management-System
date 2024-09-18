@extends('layouts.master')

@section('content')
    <div class="container mx-auto p-4">
        <div class="mx-auto bg-white p-6 rounded-lg shadow-lg">
            <h2 class="text-2xl font-bold mb-6 text-gray-800">Edit Your Profile</h2>

            <table class="w-2/3">
                <tbody>
                    <tr>
                        <td class="font-bold text-slate-700 py-2">Admin ID</td>
                        <td class="py-2">
                            <input type="text" name="admin_id" value="ADM01"
                                class="border border-gray-300 rounded-lg p-2 w-full outline-none transition-all focus:border-green-900"
                                readonly>
                        </td>
                    </tr>
                    <tr>
                        <td class="font-bold text-slate-700 py-2">First Name</td>
                        <td class="py-2">
                            <input type="text" name="first_name" value="John"
                                class="border border-gray-300 rounded-lg p-2 w-full outline-none transition-all focus:border-green-900">
                        </td>
                    </tr>
                    <tr>
                        <td class="font-bold text-slate-700 py-2">Last Name</td>
                        <td class="py-2">
                            <input type="text" name="last_name" value="Doe"
                                class="border border-gray-300 rounded-lg p-2 w-full outline-none transition-all focus:border-green-900">
                        </td>
                    </tr>
                    <tr>
                        <td class="font-bold text-slate-700 py-2">Username</td>
                        <td class="py-2">
                            <input type="text" name="username" value="Doe"
                                class="border border-gray-300 rounded-lg p-2 w-full outline-none transition-all focus:border-green-900">
                        </td>
                    </tr>
                    <tr>
                        <td class="font-bold text-slate-700 py-2">Email</td>
                        <td class="py-2">
                            <input type="email" name="email" value="johndoe@gmail.com"
                                class="border border-gray-300 rounded-lg p-2 w-full outline-none transition-all focus:border-green-900">
                        </td>
                    </tr>
                    <tr>
                        <td class="font-bold text-slate-700 py-2">Phone Number</td>
                        <td class="py-2">
                            <input type="text" name="phone_number" value="012 3456789"
                                class="border border-gray-300 rounded-lg p-2 w-full outline-none transition-all focus:border-green-900">
                        </td>
                    </tr>
                    <tr>
                        <td class="font-bold text-slate-700 py-2">Password</td>
                        <td class="py-2">
                            <input type="password" name="password" value="********"
                                class="border border-gray-300 rounded-lg p-2 w-full outline-none transition-all focus:border-green-900">
                        </td>
                    </tr>
                </tbody>
            </table>

            <div class="mt-6 flex justify-end space-x-4">
                <button
                    class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-semibold py-2 px-4 rounded-lg">Cancel</button>
                <button
                    class="bg-green-900 hover:bg-green-600 text-white font-semibold py-2 px-4 rounded-lg">Submit</button>
            </div>
        </div>
    </div>
@endsection
