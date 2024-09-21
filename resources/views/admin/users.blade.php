@extends('layouts.master')
@section('content')
    <div class="w-full h-auto flex flex-col xl:flex-row justify-between">
        <div class="w-full h-full flex flex-col justify-center">
            <div class="grid grid-cols-1 gap-4 lg:grid-cols-3">
                <div class="rounded-md py-2 px-4 shadow-sm bg-white border border-gray-100 h-36 relative">
                    <div class="h-full flex flex-col justify-between">
                        <div class="text-gray-500 font-semibold text-sm">Visitor</div>
                        <div class="w-full pb-2">
                            <h1 class="text-4xl pb-2 font-semibold">15321</h1>
                            <p class="text-sm">
                                <span class="bg-green-100 text-green-900 text-[0.75rem] px-2 rounded-sm">+12.55%</span>
                                Since last month
                            </p>
                        </div>
                    </div>

                    <div
                        class="w-10 h-10 absolute top-4 right-4 bg-primary-100 rounded-full flex items-center justify-center">
                        <svg class="text-primary-900" xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                            fill="currentColor" class="bi bi-people" viewBox="0 0 16 16">
                            <path
                                d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1zm-7.978-1L7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002-.014.002zM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4m3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0M6.936 9.28a6 6 0 0 0-1.23-.247A7 7 0 0 0 5 9c-4 0-5 3-5 4q0 1 1 1h4.216A2.24 2.24 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816M4.92 10A5.5 5.5 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275ZM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0m3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4" />
                        </svg>
                    </div>
                </div>
                <div class="rounded-md py-2 px-4 shadow-sm bg-white border border-gray-100 h-36 relative">
                    <div class="h-full flex flex-col justify-between">
                        <div class="text-gray-500 font-semibold text-sm">New User</div>
                        <div class="w-full pb-2">
                            <h1 class="text-4xl pb-2 font-semibold">123</h1>
                            <p class="text-sm">
                                <span class="bg-green-100 text-green-900 text-[0.75rem] px-2 rounded-sm">+12.55%</span>
                                Since last month
                            </p>
                        </div>
                    </div>

                    <div
                        class="w-10 h-10 absolute top-4 right-4 bg-primary-100 rounded-full flex items-center justify-center">
                        <svg class="text-primary-900" xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                            fill="currentColor" class="bi bi-people" viewBox="0 0 16 16">
                            <path
                                d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1zm-7.978-1L7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002-.014.002zM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4m3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0M6.936 9.28a6 6 0 0 0-1.23-.247A7 7 0 0 0 5 9c-4 0-5 3-5 4q0 1 1 1h4.216A2.24 2.24 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816M4.92 10A5.5 5.5 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275ZM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0m3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4" />
                        </svg>
                    </div>
                </div>
                <div class="rounded-md py-2 px-4 shadow-sm bg-white border border-gray-100 h-36 relative">
                    <div class="h-full flex flex-col justify-between">
                        <div class="text-gray-500 font-semibold text-sm">Total User</div>
                        <div class="w-full pb-2">
                            <h1 class="text-4xl pb-2 font-semibold">1242</h1>
                            <p class="text-sm">
                                <span class="bg-green-100 text-green-900 text-[0.75rem] px-2 rounded-sm">+12.55%</span>
                                Since last month
                            </p>
                        </div>
                    </div>

                    <div
                        class="w-10 h-10 absolute top-4 right-4 bg-primary-100 rounded-full flex items-center justify-center">
                        <svg class="text-primary-900" xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                            fill="currentColor" class="bi bi-people" viewBox="0 0 16 16">
                            <path
                                d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1zm-7.978-1L7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002-.014.002zM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4m3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0M6.936 9.28a6 6 0 0 0-1.23-.247A7 7 0 0 0 5 9c-4 0-5 3-5 4q0 1 1 1h4.216A2.24 2.24 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816M4.92 10A5.5 5.5 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275ZM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0m3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4" />
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="w-full h-auto mt-4 border border-gray-100 shadow-sm rounded-md p-4 bg-white">
        <div class="w-full flex flex-row justify-between items-center pr-2">
            <h1 class="font-semibold text-lg">Users List</h1>
            <button class="primary-btn">Add new user</button>
            {{-- <x-modal></x-modal> --}}
        </div>
        <div class="w-full">
            <div class="w-full">
                <div class="w-full grid grid-cols-1 lg:grid-cols-3 gap-4">
                    <input type="text" class="primary-input" placeholder="User ID">
                    <input type="text" class="primary-input" placeholder="Phone Number">
                    <input type="text" class="primary-input" placeholder="Email Address">
                </div>
            </div>

            <div class="line w-full h-1 border-b-[1px] border-gray-100 my-4"></div>

            <input
                class="primary-input w-64"
                type="text" placeholder="Username">
            <input
                class="primary-input w-64 mx-4"
                type="text" placeholder="Full Name">
            <button class="primary-btn w-28">Search</button>
        </div>
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
                        <tr class="h-10">
                            <td>1</td>
                            <td>johndoe123</td>
                            <td>John Doe</td>
                            <td>johndoe@gmail.com</td>
                            <td>012 345 6789</td>
                            <td>
                                <a href="" class="underline">Edit</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="lg:hidden block mt-4">
            <div class="bg-white border border-gray-100 rounded-md shadow-sm mb-4 p-4">
                <div class="flex justify-between">
                    <div class="text-gray-500 font-medium">User ID</div>
                    <div>1</div>
                </div>
                <div class="flex justify-between">
                    <div class="text-gray-500 font-medium">Username</div>
                    <div>johndoe123</div>
                </div>
                <div class="flex justify-between">
                    <div class="text-gray-500 font-medium">Full Name</div>
                    <div>John Doe</div>
                </div>
                <div class="flex justify-between">
                    <div class="text-gray-500 font-medium">Email</div>
                    <div>johndoe@gmail.com</div>
                </div>
                <div class="flex justify-between">
                    <div class="text-gray-500 font-medium">Phone Number</div>
                    <div>0123456789</div>
                </div>
                <div class="flex justify-between">
                    <div class="text-gray-500 font-medium">Action</div>
                    <div>
                        <a href="" class="underline">Edit</a>
                    </div>
                </div>

            </div>
        </div>

    </div>
@endsection
