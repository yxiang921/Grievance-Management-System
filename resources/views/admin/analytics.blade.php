@extends('layouts.app')

@section('content')
    <script src="
                    https://cdn.jsdelivr.net/npm/echarts@5.5.1/dist/echarts.min.js
                    "></script>
    <div class="p-6 bg-gray-100 h-auto">
        <div class="flex justify-center items-start mb-6 flex-col">
            <div class="flex w-full lg:flex-row flex-col justify-center items-center">
                <div class="bg-white p-4 rounded-lg shadow w-full my-2 lg:mx-2 flex flex-row items-center justify-center">
                    <div class="w-12 h-12 rounded-full bg-green-100 flex items-center justify-center text-green-900">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 0 1 2.25-2.25h13.5A2.25 2.25 0 0 1 21 7.5v11.25m-18 0A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75m-18 0v-7.5A2.25 2.25 0 0 1 5.25 9h13.5A2.25 2.25 0 0 1 21 11.25v7.5" />
                        </svg>
                    </div>
                    <div class="mx-8">
                        <p class="text-xl font-bold">24</p>
                        <p class="text-gray-600">Monthly Grievance</p>
                    </div>
                </div>
                <div class="bg-white p-4 rounded-lg shadow w-full my-2 lg:mx-2 flex flex-row items-center justify-center">
                    <div class="w-12 h-12 rounded-full bg-green-100 flex items-center justify-center text-green-900">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                        </svg>

                    </div>
                    <div class="mx-8">
                        <p class="text-xl font-bold">12</p>
                        <p class="text-gray-600">Monthly Resolved</p>
                    </div>
                </div>
                <div class="bg-white p-4 rounded-lg shadow w-full my-2 lg:mx-2 flex flex-row items-center justify-center">

                    <div class="w-12 h-12 rounded-full bg-green-100 flex items-center justify-center text-green-900">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 0 0 2.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 0 0-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 0 0 .75-.75 2.25 2.25 0 0 0-.1-.664m-5.8 0A2.251 2.251 0 0 1 13.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V9.375c0-.621-.504-1.125-1.125-1.125H8.25ZM6.75 12h.008v.008H6.75V12Zm0 3h.008v.008H6.75V15Zm0 3h.008v.008H6.75V18Z" />
                        </svg>

                    </div>


                    <div class="mx-8">
                        <p class="text-xl font-bold">45</p>
                        <p class="text-gray-600">Total Grievances</p>
                    </div>
                </div>
                <div class="bg-white p-4 rounded-lg shadow w-full my-2 lg:mx-2 flex flex-row items-center justify-center">
                    <div class="w-12 h-12 rounded-full bg-green-100 flex items-center justify-center text-green-900">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="m20.25 7.5-.625 10.632a2.25 2.25 0 0 1-2.247 2.118H6.622a2.25 2.25 0 0 1-2.247-2.118L3.75 7.5M10 11.25h4M3.375 7.5h17.25c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125Z" />
                        </svg>

                    </div>
                    <div class="mx-8">
                        <p class="text-xl font-bold">24</p>
                        <p class="text-gray-600">Total Resolved</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="w-full flex flex-col justify-center items-center">
            <div class="w-full flex flex-col md:flex-row justify-center items-center">
                <div class="bg-white rounded-lg shadow-md w-1/2 m-2">
                    <div class="pieChartWrapper w-96 h-96" id="pieChart">
                        {{-- CHART --}}
                    </div>
                </div>
                <div class="bg-white rounded-lg shadow-md w-1/2 m-2">
                    <div class="barChartWrapper min-w-full h-96 p-4" id="barChart">
                        {{-- CHART --}}
                    </div>
                </div>
            </div>
            <div class="w-full my-4">
                <div class="bg-white shadow-md rounded-lg mx-2">
                    <div class="bg-red-400">
                        <div class="h-96" id="progressChart"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        var barChart = echarts.init(document.getElementById('barChart'));
        var pieChart = echarts.init(document.getElementById('pieChart'));
        var progressChart = echarts.init(document.getElementById('progressChart'));

        barChart.setOption({
            title: {
                text: 'ECharts Getting Started Example'
            },
            tooltip: {},
            xAxis: {
                data: ['shirt', 'cardigan', 'chiffon', 'pants', 'heels', 'socks']
            },
            yAxis: {},
            series: [{
                name: 'sales',
                type: 'bar',
                data: [5, 20, 36, 10, 10, 20]
            }]
        });

        pieChart.setOption({
            title: {
                text: 'Access From',
                left: 'center'
            },
            tooltip: {
                trigger: 'item'
            },
            legend: {
                top: '5%',
                left: 'center'
            },
            series: [{
                name: 'Access From',
                type: 'pie',
                radius: ['40%', '70%'],
                avoidLabelOverlap: false,
                padAngle: 5,
                itemStyle: {
                    borderRadius: 10
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
                        name: 'Search Engine'
                    },
                    {
                        value: 735,
                        name: 'Direct'
                    },
                    {
                        value: 580,
                        name: 'Email'
                    },
                    {
                        value: 484,
                        name: 'Union Ads'
                    },
                    {
                        value: 300,
                        name: 'Video Ads'
                    }
                ]
            }]
        });

        progressChart.setOption({
            tooltip: {
                trigger: 'item'
            },
            legend: {
                top: '5%',
                left: 'center'
            },
            series: [{
                name: 'Access From',
                type: 'pie',
                radius: ['40%', '70%'],
                avoidLabelOverlap: false,
                label: {
                    show: false,
                    position: 'center'
                },
                emphasis: {
                    label: {
                        show: true,
                        fontSize: 40,
                        fontWeight: 'bold'
                    }
                },
                labelLine: {
                    show: false
                },
                data: [{
                        value: 1048,
                        name: 'Search Engine'
                    },
                    {
                        value: 735,
                        name: 'Direct'
                    },
                    {
                        value: 580,
                        name: 'Email'
                    },
                    {
                        value: 484,
                        name: 'Union Ads'
                    },
                    {
                        value: 300,
                        name: 'Video Ads'
                    }
                ]
            }]
        });
    </script>
@endsection
