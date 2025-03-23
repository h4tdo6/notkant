@extends('navigation.messages')

@section('title', 'KantStopThinking - Direct')

@section('chat-list')
    <a href="{{ route('direct.aquinas') }}" class="block">
        <div
            class="flex items-center p-3 {{ Route::currentRouteName() == 'direct.aquinas' ? 'bg-gray-900' : 'bg-black' }} cursor-pointer hover:bg-gray-700">
            <div class="relative">
                <img src="{{ asset('assets/aquinas-profile.jpg') }}" alt="Miracle" class="w-12 h-12 rounded-full">
            </div>
            <div class="ml-3 flex-grow">
                <div class="flex justify-between items-center">
                    <span class="font-medium">Saint Thomas Aquinas</span>
                    <span class="text-xs text-gray-500">2d</span>
                </div>
                <p
                    class="text-sm {{ Route::currentRouteName() == 'direct.aquinas' ? 'text-white' : 'text-gray-400' }} truncate">
                    Aquinas: Indeed! We may take di...</p>
            </div>
        </div>
    </a>

    {{-- for messages tab --}}
    <a href="{{ route('direct.aristotle') }}" class="block">
        <!-- Chat item 2 -->
        <div
            class="flex items-center p-3 {{ Route::currentRouteName() == 'direct.aristotle' ? 'bg-gray-900' : 'bg-black' }} cursor-pointer hover:bg-gray-700">
            <div class="relative">
                <img src="{{ asset('assets/aristotle-profile.jpg') }}" alt="ur_angie" class="w-12 h-12 rounded-full">
            </div>
            <div class="ml-3 flex-grow">
                <div class="flex justify-between items-center">
                    <span class="font-medium">Aristotle</span>
                    <span class="text-xs text-gray-500">1d</span>
                </div>
                <p
                    class="text-sm {{ Route::currentRouteName() == 'direct.aristotle' ? 'text-white' : 'text-gray-400' }} truncate">
                    Aristotle: Agreed! Though we pur..</p>
            </div>
        </div>
    </a>
@endsection

@section('messages')
    <!-- Container for messages section -->
    <div class="flex flex-col items-center justify-center h-full text-gray-400">
        <!-- Title Section -->
        <div class="mb-6">
            <p class="text-3xl font-semibold">Your Messages</p>
        </div>

        <!-- Subtitle Section -->
        <div class="mt-2 text-lg">
            <p>Click a conversation to view.</p>
        </div>
    </div>
@endsection
