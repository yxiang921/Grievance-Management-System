@extends('layouts.master')
@section('content')
    <div class="w-full h-auto flex flex-col xl:flex-row justify-between">
        <div class="w-full xl:w-2/5 h-full flex flex-col justify-center">
            <div class="grid grid-cols-1 gap-4 md:grid-cols-2">
                <div class="rounded-md py-2 px-4 shadow-sm border border-gray-100 h-36 relative">
                    <div class="h-full flex flex-col justify-between">
                        <div class="text-gray-500 font-semibold text-sm">Total Grievances</div>
                        <div class="w-full pb-2">
                            <h1 class="text-4xl pb-2 font-semibold">
                                {{ $analytics['total_grievances'] }}
                            </h1>
                            <p class="text-sm">
                                <span class="bg-green-100 text-green-900 text-[0.75rem] px-2 rounded-sm">+6.55%</span>
                                Since last month
                            </p>
                        </div>
                    </div>

                    <div
                        class="w-10 h-10 absolute top-4 right-4 bg-primary-100 rounded-full flex items-center justify-center">
                        <svg class="text-primary-900" xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                            fill="currentColor" class="bi bi-truck" viewBox="0 0 16 16">
                            <path
                                d="M0 3.5A1.5 1.5 0 0 1 1.5 2h9A1.5 1.5 0 0 1 12 3.5V5h1.02a1.5 1.5 0 0 1 1.17.563l1.481 1.85a1.5 1.5 0 0 1 .329.938V10.5a1.5 1.5 0 0 1-1.5 1.5H14a2 2 0 1 1-4 0H5a2 2 0 1 1-3.998-.085A1.5 1.5 0 0 1 0 10.5zm1.294 7.456A2 2 0 0 1 4.732 11h5.536a2 2 0 0 1 .732-.732V3.5a.5.5 0 0 0-.5-.5h-9a.5.5 0 0 0-.5.5v7a.5.5 0 0 0 .294.456M12 10a2 2 0 0 1 1.732 1h.768a.5.5 0 0 0 .5-.5V8.35a.5.5 0 0 0-.11-.312l-1.48-1.85A.5.5 0 0 0 13.02 6H12zm-9 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2m9 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2" />
                        </svg>
                    </div>
                </div>
                <div class="rounded-md py-2 px-4 shadow-sm bg-white border border-gray-100 h-36 relative">
                    <div class="h-full flex flex-col justify-between">
                        <div class="text-gray-500 font-semibold text-sm">Monthly Grievances</div>
                        <div class="w-full pb-2">
                            <h1 class="text-4xl pb-2 font-semibold">
                                {{ $analytics['monthly_grievances'] }}
                            </h1>
                            <p class="text-sm">
                                <span class="bg-red-100 text-red-900 text-[0.75rem] px-2 rounded-sm">-6.55%</span>
                                Since last month
                            </p>
                        </div>
                    </div>

                    <div
                        class="w-10 h-10 absolute top-4 right-4 bg-primary-100 rounded-full flex items-center justify-center">
                        <svg class="text-primary-900" xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                            fill="currentColor" class="bi bi-bag-check" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M10.854 8.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L7.5 10.793l2.646-2.647a.5.5 0 0 1 .708 0" />
                            <path
                                d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1m3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1z" />
                        </svg>
                    </div>
                </div>
                <div class="rounded-md py-2 px-4 shadow-sm bg-white border border-gray-100 h-36 relative">
                    <div class="h-full flex flex-col justify-between">
                        <div class="text-gray-500 font-semibold text-sm">Total Closed</div>
                        <div class="w-full pb-2">
                            <h1 class="text-4xl pb-2 font-semibold">
                                {{ $analytics['total_closed'] }}
                            </h1>
                            <p class="text-sm">
                                <span class="bg-red-100 text-red-900 text-[0.75rem] px-2 rounded-sm">-6.55%</span>
                                Since last month
                            </p>
                        </div>
                    </div>

                    <div
                        class="w-10 h-10 absolute top-4 right-4 bg-primary-100 rounded-full flex items-center justify-center">
                        <svg class="text-primary-900" xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                            fill="currentColor" class="bi bi-currency-dollar" viewBox="0 0 16 16">
                            <path
                                d="M4 10.781c.148 1.667 1.513 2.85 3.591 3.003V15h1.043v-1.216c2.27-.179 3.678-1.438 3.678-3.3 0-1.59-.947-2.51-2.956-3.028l-.722-.187V3.467c1.122.11 1.879.714 2.07 1.616h1.47c-.166-1.6-1.54-2.748-3.54-2.875V1H7.591v1.233c-1.939.23-3.27 1.472-3.27 3.156 0 1.454.966 2.483 2.661 2.917l.61.162v4.031c-1.149-.17-1.94-.8-2.131-1.718zm3.391-3.836c-1.043-.263-1.6-.825-1.6-1.616 0-.944.704-1.641 1.8-1.828v3.495l-.2-.05zm1.591 1.872c1.287.323 1.852.859 1.852 1.769 0 1.097-.826 1.828-2.2 1.939V8.73z" />
                        </svg>
                    </div>
                </div>
                <div class="rounded-md py-2 px-4 shadow-sm bg-white border border-gray-100 h-36 relative">
                    <div class="h-full flex flex-col justify-between">
                        <div class="text-gray-500 font-semibold text-sm">Total in Progress</div>
                        <div class="w-full pb-2">
                            <h1 class="text-4xl pb-2 font-semibold">
                                {{ $analytics['total_in_progress'] }}
                            </h1>
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
        <div class="w-full xl:w-3/5 xl:ml-4 mt-4 xl:mt-0">
            <div id="line-chart" class="rounded-md p-4 shadow-sm bg-white border border-gray-100 w-full h-[19rem]">

            </div>
        </div>
    </div>

    <div class="w-full h-auto mt-4 grid grid-cols-3 md:grid-cols-2">
        <div class="col-span-3 md:col-span-1 h-[30rem] p-4 bg-white rounded-md border border-gray-100">
            <h1 class="text-xl font-medium">Grievances Status Analytics</h1>
            <p class="text-gray-500">{{ $analytics['monthly_grievances'] }} total grievances this month</p>
            <div class="flex flex-row justify-center items-center">
                <div class="w-full h-full">
                    <h1 class="text-3xl font-semibold">
                        {{ $analytics['total_grievances'] }}
                    </h1>
                    <p class="text-gray-500">Total grievances</p>
                </div>
                <div id="status-pie" class="w-full h-36 flex justify-center items-center">
                    {{-- Chart --}}
                </div>

            </div>
            <div class="w-full flex-col justify-between">
                <div class="flex flex-row items-center w-full h-16">
                    <div
                        class="w-12 h-12 bg-yellow-100 text-yellow-900 text-lg font-semibold rounded-md flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path
                                d="M19.903 8.586a.997.997 0 0 0-.196-.293l-6-6a.997.997 0 0 0-.293-.196c-.03-.014-.062-.022-.094-.033a.991.991 0 0 0-.259-.051C13.04 2.011 13.021 2 13 2H6c-1.103 0-2 .897-2 2v16c0 1.103.897 2 2 2h12c1.103 0 2-.897 2-2V9c0-.021-.011-.04-.013-.062a.952.952 0 0 0-.051-.259c-.01-.032-.019-.063-.033-.093zM16.586 8H14V5.414L16.586 8zM6 20V4h6v5a1 1 0 0 0 1 1h5l.002 10H6z">
                            </path>
                            <path d="M8 12h8v2H8zm0 4h8v2H8zm0-8h2v2H8z"></path>
                        </svg>
                    </div>
                    <div class="h-full w-full flex flex-row justify-between">
                        <div class="h-full flex flex-col justify-center pl-4">
                            <h1 class="font-semibold">Pending Grievances</h1>
                            <p class="text-gray-500">12% of total grievances</p>
                        </div>
                        <div class="h-full p-4 flex items-center">
                            <h1 class="text-lg font-medium">{{ $analytics['total_pending'] }}</h1>
                        </div>
                    </div>
                </div>

                <div class="flex flex-row items-center w-full h-16">
                    <div
                        class="w-12 h-12 bg-yellow-100 text-yellow-900 text-lg font-semibold rounded-md flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path
                                d="M19.903 8.586a.997.997 0 0 0-.196-.293l-6-6a.997.997 0 0 0-.293-.196c-.03-.014-.062-.022-.094-.033a.991.991 0 0 0-.259-.051C13.04 2.011 13.021 2 13 2H6c-1.103 0-2 .897-2 2v16c0 1.103.897 2 2 2h12c1.103 0 2-.897 2-2V9c0-.021-.011-.04-.013-.062a.952.952 0 0 0-.051-.259c-.01-.032-.019-.063-.033-.093zM16.586 8H14V5.414L16.586 8zM6 20V4h6v5a1 1 0 0 0 1 1h5l.002 10H6z">
                            </path>
                            <path d="M8 12h8v2H8zm0 4h8v2H8zm0-8h2v2H8z"></path>
                        </svg>
                    </div>
                    <div class="h-full w-full flex flex-row justify-between">
                        <div class="h-full flex flex-col justify-center pl-4">
                            <h1 class="font-semibold">In Progress Grievances</h1>
                            <p class="text-gray-500">12% of total grievances</p>
                        </div>
                        <div class="h-full p-4 flex items-center">
                            <h1 class="text-lg font-medium">{{ $analytics['total_in_progress'] }}</h1>
                        </div>
                    </div>
                </div>
                <div class="flex flex-row items-center w-full h-16">
                    <div
                        class="w-12 h-12 bg-yellow-100 text-yellow-900 text-lg font-semibold rounded-md flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path
                                d="M19.903 8.586a.997.997 0 0 0-.196-.293l-6-6a.997.997 0 0 0-.293-.196c-.03-.014-.062-.022-.094-.033a.991.991 0 0 0-.259-.051C13.04 2.011 13.021 2 13 2H6c-1.103 0-2 .897-2 2v16c0 1.103.897 2 2 2h12c1.103 0 2-.897 2-2V9c0-.021-.011-.04-.013-.062a.952.952 0 0 0-.051-.259c-.01-.032-.019-.063-.033-.093zM16.586 8H14V5.414L16.586 8zM6 20V4h6v5a1 1 0 0 0 1 1h5l.002 10H6z">
                            </path>
                            <path d="M8 12h8v2H8zm0 4h8v2H8zm0-8h2v2H8z"></path>
                        </svg>
                    </div>
                    <div class="h-full w-full flex flex-row justify-between">
                        <div class="h-full flex flex-col justify-center pl-4">
                            <h1 class="font-semibold">Closed Grievances</h1>
                            <p class="text-gray-500">12% of total grievances</p>
                        </div>
                        <div class="h-full p-4 flex items-center">
                            <h1 class="text-lg font-medium">{{ $analytics['total_closed'] }}</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="category-bar-chart"
            class="p-4 h-[30rem] col-span-3 md:col-span-1 md:ml-4 mt-4 md:mt-0 bg-white border border-gray-100 rounded-md">

        </div>
    </div>


    <script>
        var lineChart = echarts.init(document.getElementById('line-chart'));
        var statusPie = echarts.init(document.getElementById('status-pie'));
        var cateBarChart = echarts.init(document.getElementById('category-bar-chart'));


        lineChart.setOption({
            title: {
                text: 'Monthly Grievances Based on Category'
            },
            tooltip: {
                trigger: 'axis'
            },
            xAxis: {
                data: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug']
            },
            yAxis: {},
            series: [{
                name: 'Line Chart Demo',
                type: 'line',
                smooth: true,
                data: [5, 20, 36, 10, 10, 20, 30, 40]
            }]
        });

        statusPie.setOption({
            series: [{
                name: 'Access From',
                type: 'pie',
                radius: ['40%', '70%'],
                avoidLabelOverlap: false,
                padAngle: 5,
                itemStyle: {
                    borderRadius: 2
                },
                label: {
                    show: false,
                    position: 'center'
                },
                labelLine: {
                    show: false
                },
                data: [{
                        value: 1048,
                        name: 'Pending'
                    },
                    {
                        value: 735,
                        name: 'In Progress'
                    },
                    {
                        value: 580,
                        name: 'Closed'
                    },
                ]
            }]
        });

        cateBarChart.setOption({
            title: {
                text: 'Grievances Category'
            },
            xAxis: {
                type: 'category',
                data: @json($analytics['category_data']['labels'])
            },
            yAxis: {
                type: 'value'
            },
            series: [{
                data: @json($analytics['category_data']['data']),
                type: 'bar'
            }]
        });

        window.addEventListener('resize', function() {
            lineChart.resize();
            statusPie.resize();
            cateBarChart.resize();
        });

    </script>
@endsection