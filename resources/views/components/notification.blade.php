<div id="notification"
    class="hidden text-gray-900 shadow-lg border border-gray-100 rounded-md bg-white fixed right-4 max-w-sm w-full max-h-0 transition-all duration-300 ease-in-out overflow-scroll no-scrollbar">
    <div class="flex justify-between items-center">
        <h2 class="font-semibold p-4">Notifications</h2>
        <svg onclick="toggleNotification()" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
            stroke-width="1.5" stroke="currentColor" class="m-4 size-6 text-gray-900 cursor-pointer"
            onclick="toggleNotification()">
            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
        </svg>
    </div>
    <ul class="no-scrollbar">

    </ul>

</div>

<script>
    const dummyNotification = [{
            title: 'New Grievance',
            message: 'A new grievance has been submitted by a user',
            time: '2 minutes ago',
            link: '/admin/grievance/detail/1'
        },
        {
            title: 'Grievance Assigned',
            message: 'A grievance has been assigned to you',
            time: '5 minutes ago',
            link: '/admin/grievance/detail/1'
        },
        {
            title: 'Grievance Assigned',
            message: 'A grievance has been assigned to you',
            time: '5 minutes ago',
            link: '/admin/grievance/detail/1'
        },
        {
            title: 'Grievance Assigned',
            message: 'A grievance has been assigned to you',
            time: '5 minutes ago',
            link: '/admin/grievance/detail/1'
        },

    ];

    const notificationList = document.querySelector('#notification ul');
    dummyNotification.forEach(notification => {
        const li = document.createElement('li');
        li.classList.add('p-4', 'border-b', 'border-gray-100', 'cursor-pointer', 'hover:bg-gray-100',
            'transition-all', 'duration-300');
        li.innerHTML = `
            <a href="${notification.link}">
                <h3 class="font-semibold">${notification.title}</h3>
                <p>${notification.message}</p>
                <small>${notification.time}</small>
            </a>
        `;
        notificationList.appendChild(li);
    });

    function toggleNotification() {
        const notification = document.getElementById('notification');

        if (notification.classList.contains('hidden')) {
            notification.classList.remove('hidden');
            setTimeout(() => {
                notification.style.maxHeight = '20rem';
            }, 10);
        } else {
            notification.style.maxHeight = '0';
            setTimeout(() => {
                notification.classList.add('hidden');
            }, 300);
        }
    }
</script>
