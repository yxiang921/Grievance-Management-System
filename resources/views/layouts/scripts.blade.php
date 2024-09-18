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
