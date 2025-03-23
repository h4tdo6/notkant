@extends('layout.main')

@section('title', 'KantStopThinking - Home')

@section('content')
    <!-- Main scrollable container -->
    <div class="h-screen overflow-y-auto instagram-scroll"> <!-- Height set to screen height with bottom padding for footer -->
        <div class="p-6">
            <!-- Profile Section -->
            <div class="flex items-start mb-12">
                <img src="{{ asset('assets/kant-profile.jpg') }}" alt="Profile Picture" class="w-36 h-36 rounded-full mr-8 object-cover">

                <div class="flex flex-col">
                    <div class="flex items-center mb-5">
                        <div class="text-xl mr-5">KantStopThinking</div>
                        <button class="bg-blue-500 text-white px-4 py-1 rounded font-semibold mr-3">Follow</button>
                        <button class="text-xl">•••</button>
                    </div>

                    <div class="flex mb-5 text-gray-500 text-base">
                        <div class="mr-8">
                            <strong class="text-white">3</strong> posts
                        </div>
                        <div class="mr-8">
                            <strong class="text-white">137m</strong> followers
                        </div>
                        <div>
                            <strong class="text-white">0</strong> following
                        </div>
                    </div>

                    <div class="font-semibold">Immanuel Kant</div>
                    <div class="text-sm">Philosopher</div>
                </div>
            </div>

            <!-- Tabs -->
            <div class="flex justify-center border-t border-zinc-800 mt-3">
                <div class="flex items-center px-8 py-3 border-t border-white -mt-px">
                    <span class="mr-2">📷</span>
                    <span class="text-xs font-semibold uppercase">Posts</span>
                </div>
            </div>

            <!-- Posts Grid -->
            <div class="grid grid-cols-3 gap-1 mt-1">
                <div class="aspect-square overflow-hidden cursor-pointer">
                    <img src="{{ asset('assets/kant-profile.jpg') }}" alt="Post Image" class="w-full h-full object-cover">
                </div>
                <div class="aspect-square overflow-hidden cursor-pointer">
                    <img src="{{ asset('assets/kant-profile.jpg') }}" alt="Post Image" class="w-full h-full object-cover">
                </div>
                <div class="aspect-square overflow-hidden cursor-pointer">
                    <img src="{{ asset('assets/kant-profile.jpg') }}" alt="Post Image" class="w-full h-full object-cover">
                </div>
                <div class="aspect-square overflow-hidden cursor-pointer">
                    <img src="{{ asset('assets/kant-profile.jpg') }}" alt="Post Image" class="w-full h-full object-cover">
                </div>
            </div>
        </div>

        <div class="mt-auto">
            <div class="flex flex-wrap justify-center text-xs text-gray-500 mt-10 space-x-3">
                <a href="https://en.wikipedia.org/wiki/Immanuel_Kant" target="_blank" class="hover:underline">Wikipedia</a>
                <a href="https://plato.stanford.edu/entries/kant/" target="_blank" class="hover:underline">Stanford Encyclopedia</a>
                <a href="https://www.britannica.com/biography/Immanuel-Kant" target="_blank" class="hover:underline">Britannica</a>
            </div>

            <div class="flex justify-center items-center text-xs text-gray-500 my-5">
                <div class="mr-4">English</div>
                <div>© 2025 <a href="https://github.com/dnsxmrs" target="_blank" aria-atomic=""class="hover:underline">dnsxmrs</a></div>
            </div>
        </div>
    </div>




@endsection

@section('footer')

@endsection
