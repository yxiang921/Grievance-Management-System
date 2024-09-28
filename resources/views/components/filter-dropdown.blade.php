<div class="relative inline-block text-left w-full  dropdown-container">
    <!-- Dropdown toggle button -->
    <button type="button" class="dropdown-button inline-flex justify-between items-center transition-all w-full h-12 px-4 py-2 border  rounded-md focus:outline-none focus:ring-1 focus:ring-primary-100 focus:border-primary-900" aria-haspopup="true" aria-expanded="true">
        {{ $label }}
        <svg class="w-5 h-5 ml-2 -mr-1 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
        </svg>
    </button>

    <!-- Dropdown menu -->
    <div class="dropdown-menu absolute right-0 z-20 mt-2 w-full origin-top-right bg-white border border-gray-200 divide-y divide-gray-100 rounded-lg shadow-lg hidden" role="menu" aria-orientation="vertical">
        <div class="py-1" role="none">
            @foreach ($items as $item)
                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900" role="menuitem">{{ $item }}</a>
            @endforeach
        </div>
    </div>
</div>