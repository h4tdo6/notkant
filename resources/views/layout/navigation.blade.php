<div class="flex flex-col h-full">
    <div class="pt-5 mb-8 text-4xl font-instagram">Instagram</div>

    <div class="flex flex-col space-y-2 flex-grow">
        <a href="{{ route('home') }}" class="nav-item flex items-center gap-3 py-3 rounded-lg hover:bg-gray-900 cursor-pointer">
            <div class="text-xl">🏠</div>
            <div class="text-lg">Home</div>
        </a>

        <a href="{{ route('search') }}" class="nav-item flex items-center gap-3 py-3 rounded-lg hover:bg-gray-900 cursor-pointer">
            <div class="text-xl">🔍</div>
            <div class="text-lg">Search</div>
        </a>

        <a href="{{ route('explore') }}" class="nav-item flex items-center gap-3 py-3 rounded-lg hover:bg-gray-900 cursor-pointer">
            <div class="text-xl">🧭</div>
            <div class="text-lg">Explore</div>
        </a>

        <a href="{{ route('messages') }}" class="nav-item flex items-center gap-3 py-3 rounded-lg hover:bg-gray-900 cursor-pointer">
            <div class="text-xl">✉️</div>
            <div class="text-lg">Messages</div>
        </a>

        <a href="{{ route('notifications') }}" class="nav-item flex items-center gap-3 py-3 rounded-lg hover:bg-gray-900 cursor-pointer">
            <div class="text-xl">❤️</div>
            <div class="text-lg">Notifications</div>
        </a>

        <a href="{{ route('members') }}" class="nav-item flex items-center gap-3 py-3 rounded-lg hover:bg-gray-900 cursor-pointer">
            <div class="text-xl">👤</div>
            <div class="text-lg">Members</div>
        </a>
    </div>

    <!-- References item pushed to bottom -->
    <a href="{{ route('references') }}" class="nav-item flex items-center gap-3 py-3 rounded-lg hover:bg-gray-900 cursor-pointer mt-auto">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16m-7 6h7" />
        </svg>
        <div class="text-lg">References</div>
    </a>

</div>
