@extends('layouts.master')
@section('content')
    <div class="w-full h-auto flex flex-col xl:flex-row justify-between">
        <div class="w-full xl:w-2/5 h-full flex flex-col justify-center">
            <div class="grid grid-cols-1 gap-4 md:grid-cols-2">

                <div class="rounded-md py-2 px-4 shadow-sm bg-white border border-gray-100 h-36 relative">
                    <div class="h-full flex flex-col justify-between">
                        <div class="text-gray-500 font-semibold text-sm">Monthly Grievances</div>
                        <div class="w-full pb-2">
                            <h1 class="text-4xl pb-2 font-semibold">
                                {{ $analytics['monthly_grievances'] }}
                            </h1>
                            <p class="text-sm">
                                <span
                                    class="
                                {{ $analytics['month_percentage_change'] > 0 ? 'bg-red-100 text-red-900' : 'bg-green-100 text-green-900' }} 
                                text-[0.75rem] px-2 mr-1 rounded-sm">
                                    {{ $analytics['month_percentage_change'] > 0 ? '+' : '' }}
                                    {{ $analytics['month_percentage_change'] }}%
                                </span>
                                Since last month
                            </p>
                        </div>
                    </div>

                    <div
                        class="w-10 h-10 absolute top-4 right-4 bg-primary-100 rounded-full flex items-center justify-center">
                        <svg class="text-primary-900 size-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 0 1 2.25-2.25h13.5A2.25 2.25 0 0 1 21 7.5v11.25m-18 0A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75m-18 0v-7.5A2.25 2.25 0 0 1 5.25 9h13.5A2.25 2.25 0 0 1 21 11.25v7.5" />
                        </svg>
                    </div>
                </div>
                <div class="rounded-md py-2 px-4 shadow-sm border border-gray-100 h-36 relative">
                    <div class="h-full flex flex-col justify-between">
                        <div class="text-gray-500 font-semibold text-sm">Monthly Pending</div>
                        <div class="w-full pb-2">
                            <h1 class="text-4xl pb-2 font-semibold">
                                {{ $analytics['monthly_pending'] }}
                            </h1>
                            <p class="text-sm">
                                <span
                                    class="
                                {{ $analytics['pending_percentage_change'] > 0 ? 'bg-red-100 text-red-900' : 'bg-green-100 text-green-900' }} 
                                text-[0.75rem] px-2 mr-1 rounded-sm">
                                    {{ $analytics['pending_percentage_change'] > 0 ? '+' : '' }}
                                    {{ $analytics['pending_percentage_change'] }}%
                                </span>
                                Since last month
                            </p>

                        </div>
                    </div>

                    <div
                        class="w-10 h-10 absolute top-4 right-4 bg-primary-100 rounded-full flex items-center justify-center text-primary-900">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="m20.25 7.5-.625 10.632a2.25 2.25 0 0 1-2.247 2.118H6.622a2.25 2.25 0 0 1-2.247-2.118L3.75 7.5M10 11.25h4M3.375 7.5h17.25c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125Z" />
                        </svg>
                    </div>
                </div>
                <div class="rounded-md py-2 px-4 shadow-sm bg-white border border-gray-100 h-36 relative">
                    <div class="h-full flex flex-col justify-between">
                        <div class="text-gray-500 font-semibold text-sm">Monthly in Progress</div>
                        <div class="w-full pb-2">
                            <h1 class="text-4xl pb-2 font-semibold">
                                {{ $analytics['monthly_in_progress'] }}
                            </h1>
                            <p class="text-sm">
                                <span
                                    class="
                                {{ $analytics['in_progress_percentage_change'] > 0 ? 'bg-red-100 text-red-900' : 'bg-green-100 text-green-900' }} 
                                text-[0.75rem] px-2 mr-1 rounded-sm">
                                    {{ $analytics['in_progress_percentage_change'] > 0 ? '+' : '' }}
                                    {{ $analytics['in_progress_percentage_change'] }}%
                                </span>Since last month
                            </p>
                        </div>
                    </div>

                    <div
                        class="w-10 h-10 absolute top-4 right-4 bg-primary-100  rounded-full flex items-center justify-center">
                        <svg class="text-primary-900 size-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                        </svg>
                    </div>
                </div>
                <div class="rounded-md py-2 px-4 shadow-sm bg-white border border-gray-100 h-36 relative">
                    <div class="h-full flex flex-col justify-between">
                        <div class="text-gray-500 font-semibold text-sm">Monthly Closed</div>
                        <div class="w-full pb-2">
                            <h1 class="text-4xl pb-2 font-semibold">
                                {{ $analytics['monthly_closed'] }}
                            </h1>
                            <p class="text-sm">
                                <span
                                    class="
                                {{ $analytics['closed_percentage_change'] > 0 ? 'bg-red-100 text-red-900' : 'bg-green-100 text-green-900' }} 
                                text-[0.75rem] px-2 mr-1 rounded-sm">
                                    {{ $analytics['closed_percentage_change'] > 0 ? '+' : '' }}
                                    {{ $analytics['closed_percentage_change'] }}%
                                </span>Since last month
                            </p>
                        </div>
                    </div>

                    <div
                        class="w-10 h-10 absolute top-4 right-4 bg-primary-100 rounded-full flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-6 text-primary-900">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="m20.25 7.5-.625 10.632a2.25 2.25 0 0 1-2.247 2.118H6.622a2.25 2.25 0 0 1-2.247-2.118L3.75 7.5M10 11.25h4M3.375 7.5h17.25c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125Z" />
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
                    <div class="w-12 h-12 text-lg font-semibold rounded-md flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 0 0 2.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 0 0-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 0 0 .75-.75 2.25 2.25 0 0 0-.1-.664m-5.8 0A2.251 2.251 0 0 1 13.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V9.375c0-.621-.504-1.125-1.125-1.125H8.25ZM6.75 12h.008v.008H6.75V12Zm0 3h.008v.008H6.75V15Zm0 3h.008v.008H6.75V18Z" />
                        </svg>
                    </div>
                    <div class="h-full w-full flex flex-row justify-between">
                        <div class="h-full flex flex-col justify-center pl-4">
                            <h1 class="font-semibold">Pending Grievances</h1>
                            <p class="text-gray-500">{{ $analytics['pending_percentage'] }}% of total grievances</p>
                        </div>
                        <div class="h-full p-4 flex items-center">
                            <h1 class="text-lg font-medium">{{ $analytics['total_pending'] }}</h1>
                        </div>
                    </div>
                </div>

                <div class="flex flex-row items-center w-full h-16">
                    <div class="w-12 h-12  text-lg font-semibold rounded-md flex items-center justify-center">
                        <svg class="size-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                        </svg>
                    </div>
                    <div class="h-full w-full flex flex-row justify-between">
                        <div class="h-full flex flex-col justify-center pl-4">
                            <h1 class="font-semibold">In Progress Grievances</h1>
                            <p class="text-gray-500">{{ $analytics['in_progress_percentage'] }}% of total grievances</p>
                        </div>
                        <div class="h-full p-4 flex items-center">
                            <h1 class="text-lg font-medium">{{ $analytics['total_in_progress'] }}</h1>
                        </div>
                    </div>
                </div>
                <div class="flex flex-row items-center w-full h-16">
                    <div class="w-12 h-12 text-lg font-semibold rounded-md flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="m20.25 7.5-.625 10.632a2.25 2.25 0 0 1-2.247 2.118H6.622a2.25 2.25 0 0 1-2.247-2.118L3.75 7.5M10 11.25h4M3.375 7.5h17.25c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125Z" />
                        </svg>
                    </div>
                    <div class="h-full w-full flex flex-row justify-between">
                        <div class="h-full flex flex-col justify-center pl-4">
                            <h1 class="font-semibold">Closed Grievances</h1>
                            <p class="text-gray-500">{{ $analytics['closed_percentage'] }}% of total grievances</p>
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

        var monthlyGrievanceCount = @json($analytics['each_month_grievance']);

        var month = [];
        var monthData = [];
        var len = monthlyGrievanceCount.length;

        for (let i = 0; i < len; i++) {
            month.push(monthlyGrievanceCount[i]['month']);
            monthData.push(monthlyGrievanceCount[i]['grievance_count']);
        }

        console.log(month, monthData);

        console.log(@json($analytics['month_percentage_change']))

        lineChart.setOption({
            title: {
                text: 'Monthly Grievances Based on Category'
            },
            tooltip: {
                trigger: 'axis',
                axisPointer: {
                    type: 'cross'
                },
                formatter: '{c0} grievances this month',

            },
            xAxis: {
                data: month,
            },
            yAxis: {},
            series: [{
                name: 'Grievances this month',
                type: 'line',
                smooth: true,
                data: monthData
            }]
        });

        statusPie.setOption({
            tooltip: {
                trigger: 'item',
                formatter: '{a} <br/>{b}: {c} ({d}%)'
            },
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
                        value: @json($analytics['total_pending']),
                        name: 'Pending'
                    },
                    {
                        value: @json($analytics['total_in_progress']),
                        name: 'In Progress'
                    },
                    {
                        value: @json($analytics['total_closed']),
                        name: 'Closed'
                    },
                ]
            }]
        });

        cateBarChart.setOption({
            title: {
                text: 'Grievances Category'
            },
            tooltip: {
                trigger: 'item',
                axisPointer: {
                    type: 'shadow'
                },
                formatter: '{b}: {c} grievances'
            },
            xAxis: {
                type: 'category',
                data: @json($analytics['category_data']['labels'])
            },
            yAxis: {
                type: 'value'
            },
            series: [{
                name: 'Grievances',
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
