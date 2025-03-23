@extends('layout.main')

@section('title', 'KantStopThinking - Messages')

@section('content')
<div class="flex h-screen">
    <!-- Sidebar (messages list) -->
    <div class="flex flex-col w-80 bg-black text-white border-r border-gray-800">
        <!-- Header -->
        <div class="flex justify-between items-center p-4 border-b border-gray-800">
            <!-- Header content -->
            <div class="flex items-center">
                <span class="text-lg font-semibold">KantStopThinking</span>
                <i class="fas fa-chevron-down ml-2 text-xs"></i>
            </div>
            <div>
                <i class="far fa-edit text-xl"></i>
            </div>
        </div>

        <!-- Stories -->
        <div class="p-2 overflow-x-auto">
            <!-- Stories content -->
            <div class="flex space-x-4 py-2">
                <!-- Your note -->
                <div class="flex flex-col items-center space-y-1 min-w-16">
                    <div class="relative">
                        <div class="rounded-full p-0.5">
                            <img src="{{ asset('assets/kant-profile.jpg') }}" alt="Your note" class="w-14 h-14 rounded-full border-2 border-black">
                        </div>
                        <div class="absolute top-0 right-0 bg-black rounded-full p-0.5">
                            <div class="bg-gray-700 rounded-full w-10 h-5 flex items-center justify-center text-[10px]">
                                Note...
                            </div>
                        </div>
                    </div>
                    <span class="text-xs text-center truncate w-16">Your note</span>
                </div>

                <div class="flex flex-col items-center space-y-1 min-w-16">
                    <div class="relative">
                        <div class="bg-gradient-to-r from-pink-500 to-orange-500 rounded-full p-0.5">
                            <img src="{{ asset('assets/aquinas-profile.jpg') }}" alt="profile" class="w-14 h-14 rounded-full border-2 border-black">
                        </div>
                    </div>
                    <span class="text-xs text-center truncate w-16">Saint Thomas Aqu... </span>
                </div>

                <div class="flex flex-col items-center space-y-1 min-w-16">
                    <div class="relative">
                        <div class="bg-gradient-to-r from-pink-500 to-orange-500 rounded-full p-0.5">
                            <img src="{{ asset('assets/aristotle-profile.jpg') }}" alt="profile" class="w-14 h-14 rounded-full border-2 border-black">
                        </div>
                    </div>
                    <span class="text-xs text-center truncate w-16">Aristotle</span>
                </div>
            </div>
        </div>




        {{-- <!-- Tabs -->
        <div class="flex border-b border-gray-800">
            <!-- Tabs content -->
            <button class="flex-1 py-3 font-semibold border-b-2 border-white">Messages</button>
            <button class="flex-1 py-3 text-gray-500">Requests</button>
        </div> --}}
        {{-- <a href="{{ route('messages.aquinas') }}" class="block"> --}}


        <!-- Chat List -->
        <div class="flex-grow overflow-y-auto custom-scrollbar">
            {{-- for messages tab --}}
            {{-- for messages tab --}}
            <a href="{{ route('direct.aquinas') }}" class="block">
                <div class="flex items-center p-3 {{ Route::currentRouteName() == 'direct.aquinas' ? 'bg-gray-900' : 'bg-black' }} cursor-pointer hover:bg-gray-700">
                    <div class="relative">
                        <img src="{{ asset('assets/aquinas-profile.jpg') }}" alt="Miracle" class="w-12 h-12 rounded-full">
                    </div>
                    <div class="ml-3 flex-grow">
                        <div class="flex justify-between items-center">
                            <span class="font-medium">Saint Thomas Aquinas</span>
                            <span class="text-xs text-gray-500">2d</span>
                        </div>
                        <p class="text-sm {{ Route::currentRouteName() == 'direct.aquinas' ? 'text-white' : 'text-gray-400' }} truncate">Aquinas: Indeed! We may take di...</p>
                    </div>
                </div>
            </a>

            {{-- for messages tab --}}
            <a href="{{ route('direct.aristotle') }}" class="block">
                <!-- Chat item 2 -->
                <div class="flex items-center p-3 {{ Route::currentRouteName() == 'direct.aristotle' ? 'bg-gray-900' : 'bg-black' }} cursor-pointer hover:bg-gray-700">
                    <div class="relative">
                        <img src="{{ asset('assets/aristotle-profile.jpg') }}" alt="ur_angie" class="w-12 h-12 rounded-full">
                    </div>
                    <div class="ml-3 flex-grow">
                        <div class="flex justify-between items-center">
                            <span class="font-medium">Aristotle</span>
                            <span class="text-xs text-gray-500">1d</span>
                        </div>
                        <p class="text-sm {{ Route::currentRouteName() == 'direct.aristotle' ? 'text-white' : 'text-gray-400' }} truncate">Aristotle: Agreed! Though we pur..</p>
                    </div>
                </div>
            </a>

            {{-- for request tab --}}
            <a href="{{ route('requests.plato') }}" class="block">
                <!-- Chat item 2 -->
                <div class="flex items-center p-3 hover:bg-gray-500 cursor-pointer">
                    <div class="relative">
                        <img src="{{ asset('assets/plato-profile.jpg') }}" alt="Plato Profile" class="w-12 h-12 rounded-full">
                    </div>
                    <div class="ml-3 flex-grow">
                        <div class="flex justify-between items-center">
                            <span class="font-medium">Plato</span>
                            <span class="text-xs text-gray-500">32m</span>
                        </div>
                        <p class="text-sm text-gray-400 truncate">Plato: Zup g?..</p>
                    </div>
                </div>
            </a>
            {{-- for request tab --}}
            <a href="{{ route('requests.socrates') }}" class="block">
                <!-- Chat item 2 -->
                <div class="flex items-center p-3 hover:bg-gray-500 cursor-pointer">
                    <div class="relative">
                        <img src="{{ asset('assets/socrates-profile.jpg') }}" alt="Socrates Profile" class="w-12 h-12 rounded-full">
                    </div>
                    <div class="ml-3 flex-grow">
                        <div class="flex justify-between items-center">
                            <span class="font-medium">Socrates</span>
                            <span class="text-xs text-gray-500">1w</span>
                        </div>
                        <p class="text-sm text-gray-400 truncate">Socrates: Hey bud!</p>
                    </div>
                </div>
            </a>
        </div>
    </div>
    <!-- Main message content area -->
    <div class="flex-1 flex items-center justify-center bg-black">
        @yield('messages')
    </div>
</div>

<style>
    /* Custom scrollbar styles */
    .custom-scrollbar::-webkit-scrollbar {
        width: 4px;
    }

    .custom-scrollbar::-webkit-scrollbar-track {
        background: #262626;
    }

    .custom-scrollbar::-webkit-scrollbar-thumb {
        background: #555;
        border-radius: 10px;
    }
</style>
@endsection
