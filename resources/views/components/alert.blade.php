<?php

$alert_class = [
    'success' => 'bg-green-100 border-green-400 text-green-900',
    'error' => 'bg-red-100 border-red-400 text-red-900',
    'warning' => 'bg-yellow-100 border-yellow-400 text-yellow-900',
    'info' => 'bg-blue-100 border-blue-400 text-blue-900',
];

?>

<div id="alertBox"
    class=" 
    {{ $alert_class[$status] }}
    border rounded-md fixed top-4 inset-x-0 z-[999] px-4 py-3 text-center mx-auto max-w-xl scale-0 transition-transform duration-300 ease-out"
    role="alert">
    <span class="block sm:inline">
        {{ $message }}
    </span>
    <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
        <svg class="fill-current h-6 w-6 text-green-900" role="button" xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 20 20" onclick="hideAlert()">
            <title>Close</title>
            <path
                d="M14.348 5.652a1 1 0 00-1.414 0L10 8.586 7.066 5.652a1 1 0 10-1.414 1.414L8.586 10 5.652 12.934a1 1 0 101.414 1.414L10 11.414l2.934 2.934a1 1 0 001.414-1.414L11.414 10l2.934-2.934a1 1 0 000-1.414z" />
        </svg>
    </span>
</div>

<script>
    function showAlert() {
        const alert = document.getElementById('alertBox');
        alert.classList.remove('scale-0');
        alert.classList.add('scale-100');
    }

    function hideAlert() {
        const alert = document.getElementById('alertBox');
        alert.classList.remove('scale-100');
        alert.classList.add('scale-0');
    }

    // Show the alert with animation
    setTimeout(showAlert, 100);

    // Auto-hide after 3 seconds
    setTimeout(hideAlert, 3000);
</script>
