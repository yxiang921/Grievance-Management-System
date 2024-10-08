<div class="flex flex-col items-center justify-between mb-6 relative w-full h-6 m-auto">
    <div class="w-11/12 flex items-center justify-between relative">
        {{-- point one --}}
        <div class="absolute left-0 w-1/2 h-1 bg-primary-900 rounded-full"></div>
        <div class="absolute right-0 w-1/2 h-1 bg-primary-100 rounded-full"></div>

        <div class=" w-5 h-5 rounded-full bg-primary-900 relative flex items-center"></div>

        {{-- point two --}}
        <div class="current-status w-5 h-5 rounded-full bg-primary-900 relative"></div>

        {{-- point three --}}
        <div class="closed-pt w-5 h-5 rounded-full bg-[#ccefe3] relative"></div>
    </div>
    <div class="w-full h-2 flex justify-between items-center px-[0.4rem] pt-3">
        <h3>Received</h3>
        <h3>In Progress</h3>
        <h3>Closed</h3>
    </div>
</div>
