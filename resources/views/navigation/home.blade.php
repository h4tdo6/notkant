@extends('layout.main')

@section('title', 'Home Page')

@section('content')

<!-- Profile Section -->
<div class="flex items-start mb-12">
    <img src="{{ asset('assets/images.jpg') }}" alt="Profile Picture" class="w-36 h-36 rounded-full mr-8 object-cover">

    <div class="flex flex-col">
        <div class="flex items-center mb-5">
            <div class="text-xl mr-5">_notkant</div>
            <button class="bg-blue-500 text-white px-4 py-1 rounded font-semibold mr-3">Follow</button>
            <button class="text-xl">•••</button>
        </div>

        <div class="flex mb-5">
            <div class="mr-8">1 post</div>
            <div class="mr-8">0 followers</div>
            <div>1 following</div>
        </div>

        <div class="font-semibold">Immanuel Kant</div>
    </div>
</div>

<!-- Tabs -->
<div class="flex justify-center border-t border-zinc-800 mt-3">
    <div class="flex items-center px-8 py-3 border-t border-white -mt-px">
        <span class="mr-2">📷</span>
        <span class="text-xs font-semibold uppercase">Posts</span>
    </div>
    <div class="flex items-center px-8 py-3">
        <span class="mr-2">🏷️</span>
        <span class="text-xs font-semibold uppercase">Tagged</span>
    </div>
</div>

<!-- Posts Grid -->
<div class="grid grid-cols-3 gap-1 mt-1">
    <div class="aspect-square overflow-hidden cursor-pointer">
        <img src="{{ asset('assets/images.jpg') }}" alt="Post Image" class="w-full h-full object-cover">
    </div>
    
</div>

@endsection
