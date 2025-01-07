<script>
    function toggleMenu() {
        const sidebar = document.getElementById('sidebar');
        const overlay = document.querySelector('.overlay');

        // Toggle sidebar's translation class
        sidebar.classList.toggle('-translate-x-full');
        sidebar.classList.toggle('translate-x-0');

        // Toggle the visibility of the overlay
        overlay.classList.toggle('hidden');
    }
</script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const dropdownContainers = document.querySelectorAll('.dropdown-container');

        dropdownContainers.forEach((container) => {
            const button = container.querySelector('.dropdown-button');
            const menu = container.querySelector('.dropdown-menu');

            // Toggle the dropdown menu on button click
            button.addEventListener('click', (event) => {
                event.stopPropagation(); // Prevent event from bubbling to document
                menu.classList.toggle('hidden');
            });

            // Close dropdown if clicked outside
            document.addEventListener('click', (event) => {
                if (!container.contains(event.target)) {
                    menu.classList.add('hidden');
                }
            });
        });
    });
</script>

<script>
    var barChart = echarts.init(document.getElementById('barChart'));
    var pieChart = echarts.init(document.getElementById('pieChart'));
    var progressChart1 = echarts.init(document.getElementById('progressChart-1'));
    var progressChart2 = echarts.init(document.getElementById('progressChart-2'));
    var progressChart3 = echarts.init(document.getElementById('progressChart-3'));

    barChart.setOption({
        xAxis: {
            data: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug']
        },
        yAxis: {},
        series: [{
            name: 'Grievances Amount',
            type: 'bar',
            data: [5, 20, 36, 10, 10, 20, 30, 40]
        }]
    });

    pieChart.setOption({
        tooltip: {
            trigger: 'item'
        },
        legend: {
            top: '5%',
            left: 'center',
            height: '180px',
            itemWidth: 12,
            itemHeight: 12,

        },
        series: [{
            // name: 'Access From',
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
                    value: 580,
                    name: 'Academic'
                },
                {
                    value: 1048,
                    name: 'Facility'
                },
                {
                    value: 735,
                    name: 'Finance'
                },
                {
                    value: 484,
                    name: 'Behaviour'
                },
                {
                    value: 484,
                    name: 'Human Resource'
                },
                {
                    value: 300,
                    name: 'Other'
                }
            ]
        }]
    });

    progressChart1.setOption({
        tooltip: {
            trigger: 'item'
        },

        series: [{
            name: 'Access From',
            type: 'pie',
            radius: ['40%', '70%'],
            avoidLabelOverlap: false,
            label: {
                show: true,
                position: 'center',
                formatter: '75%',
                fontSize: 18,
                fontWeight: 'bold'
            },
            labelLine: {
                show: false
            },
            data: [{
                    value: 75,
                    name: 'Search Engine',
                    itemStyle: {
                        color: '#FF5B5B'
                    }
                },
                {
                    value: 25,
                    name: 'Direct',
                    itemStyle: {
                        color: '#FFE6E6',
                    }
                }
            ]
        }]
    });

    progressChart2.setOption({
        tooltip: {
            trigger: 'item'
        },

        series: [{
            name: 'Access From',
            type: 'pie',
            radius: ['40%', '70%'],
            avoidLabelOverlap: false,
            label: {
                show: true,
                position: 'center',
                formatter: '75%',
                fontSize: 18,
                fontWeight: 'bold'
            },
            labelLine: {
                show: false
            },
            data: [{
                    value: 75,
                    name: 'Search Engine',
                    itemStyle: {
                        color: '#2D9CDB'
                    }
                },
                {
                    value: 25,
                    name: 'Direct',
                    itemStyle: {
                        color: '#E0F0FA',
                    }
                }
            ]
        }]
    });

    progressChart3.setOption({
        tooltip: {
            trigger: 'item'
        },

        series: [{
            name: 'Access From',
            type: 'pie',
            radius: ['40%', '70%'],
            avoidLabelOverlap: false,
            label: {
                show: true,
                position: 'center',
                formatter: '75%',
                fontSize: 18,
                fontWeight: 'bold'
            },
            labelLine: {
                show: false
            },
            data: [{
                    value: 75,
                    name: 'Search Engine',
                    itemStyle: {
                        color: '#00B074'
                    }
                },
                {
                    value: 25,
                    name: 'Direct',
                    itemStyle: {
                        color: '#D9F3EA',
                    }
                }
            ]
        }]
    });
</script>

<script>
    function confirmDelete(type, event, url) {
        event.preventDefault();
        if (confirm(`Are you sure you want to delete this ${type}?`)) {
            window.location.href = url;
        }
    }
</script>
