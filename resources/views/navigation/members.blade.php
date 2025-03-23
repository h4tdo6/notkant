@extends('layout.main')

@section('title', 'KantStopThinking - Members')

@section('content')
<div class="bg-black h-screen flex flex-col">
    <!-- Fixed Header -->
    <div class="py-4">
        <div class="container mx-auto px-4">
            <div class="flex items-center justify-center">
                <h1 class="text-3xl font-bold text-white">Group 2 - Members</h1>
            </div>
        </div>
    </div>

    <!-- Scrollable Content Area -->
    <div class="flex-1 overflow-y-auto py-4 instagram-scroll">
        <div class="container mx-auto px-4">
                <!-- Members Grid -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <!-- Empty space for first column -->
                    <div class="hidden md:block"></div>

                    <!-- Member Card 1 -->
                    <div class="bg-gray-800 rounded-lg shadow overflow-hidden ">
                        <!-- Profile Header -->
                        <div class="p-4 flex items-center">
                            <div class="h-12 w-12 rounded-full bg-gradient-to-r from-pink-500 to-orange-400 flex items-center justify-center">
                                <img src="{{ asset('assets/redubla.jpg') }}" alt="Member 1" class="h-11 w-11 rounded-full">
                            </div>
                            <div class="ml-4">
                                <p class="font-semibold text-sm">Angie Lee P. Redubla</p>
                                <p class="text-gray-500 text-xs">ME22S1</p>
                            </div>
                        </div>

                        <!-- Member Image -->
                        <div class="aspect-w-1 aspect-h-1 w-full">
                            <img src="{{ asset('assets/redubla.jpg') }}" alt="Member photo" class="w-full object-cover">
                        </div>

                        <!-- Action Buttons -->
                        <div class="p-4 flex justify-between">
                            <div class="flex space-x-4">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                                </svg>
                            </div>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
                            </svg>
                        </div>

                        <!-- Member Bio -->
                        <div class="px-4 pb-4">
                            <p class="font-semibold text-sm mb-1">64 likes</p>
                            {{-- <p class="text-sm"><span class="font-semibold">Angie Lee P. Redubla</span> Exploring the categorical imperative through modern ethical dilemmas. #philosophy #kant</p> --}}
                            <p class="text-xs text-gray-500 mt-2">MARCH 23, 2025</p>
                        </div>
                    </div>

                    <!-- Empty space for first column -->
                    <div class="hidden md:block"></div>

                    <!-- Member Card 2 -->
                    <div class="bg-gray-800 rounded-lg shadow overflow-hidden ">
                        <!-- Profile Header -->
                        <div class="p-4 flex items-center">
                            <div class="h-12 w-12 rounded-full bg-gradient-to-r from-pink-500 to-orange-400 flex items-center justify-center">
                                <img src="{{ asset('assets/christine.jpg') }}" alt="Member 1" class="h-11 w-11 rounded-full">
                            </div>
                            <div class="ml-4">
                                <p class="font-semibold text-sm">Christine Dela Peña</p>
                                <p class="text-gray-500 text-xs">ME22S1</p>
                            </div>
                        </div>

                        <!-- Member Image -->
                        <div class="aspect-w-1 aspect-h-1 w-full">
                            <img src="{{ asset('assets/christine.jpg') }}" alt="Member photo" class="w-full object-cover">
                        </div>

                        <!-- Action Buttons -->
                        <div class="p-4 flex justify-between">
                            <div class="flex space-x-4">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                                </svg>
                            </div>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
                            </svg>
                        </div>

                        <!-- Member Bio -->
                        <div class="px-4 pb-4">
                            <p class="font-semibold text-sm mb-1">31 likes</p>
                            {{-- <p class="text-sm"><span class="font-semibold">Angie Lee P. Redubla</span> Exploring the categorical imperative through modern ethical dilemmas. #philosophy #kant</p> --}}
                            <p class="text-xs text-gray-500 mt-2">MARCH 23, 2025</p>
                        </div>
                    </div>

                    <div class="bg-gray-800 rounded-lg shadow overflow-hidden ">
                        <!-- Profile Header -->
                        <div class="p-4 flex items-center">
                            <div class="h-12 w-12 rounded-full bg-gradient-to-r from-pink-500 to-orange-400 flex items-center justify-center">
                                <img src="{{ asset('assets/hilario.jpg') }}" alt="Member 1" class="h-11 w-11 rounded-full">
                            </div>
                            <div class="ml-4">
                                <p class="font-semibold text-sm">Koey Hilario</p>
                                <p class="text-gray-500 text-xs">ME22S1</p>
                            </div>
                        </div>

                        <!-- Member Image -->
                        <div class="aspect-w-1 aspect-h-1 w-full">
                            <img src="{{ asset('assets/hilario.jpg') }}" alt="Member photo" class="w-full object-cover">
                        </div>

                        <!-- Action Buttons -->
                        <div class="p-4 flex justify-between">
                            <div class="flex space-x-4">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                                </svg>
                            </div>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
                            </svg>
                        </div>

                        <!-- Member Bio -->
                        <div class="px-4 pb-4">
                            <p class="font-semibold text-sm mb-1">42 likes</p>
                            {{-- <p class="text-sm"><span class="font-semibold">Angie Lee P. Redubla</span> Exploring the categorical imperative through modern ethical dilemmas. #philosophy #kant</p> --}}
                            <p class="text-xs text-gray-500 mt-2">MARCH 23, 2025</p>
                        </div>
                    </div>

                    <div class="bg-gray-800 rounded-lg shadow overflow-hidden ">
                        <!-- Profile Header -->
                        <div class="p-4 flex items-center">
                            <div class="h-12 w-12 rounded-full bg-gradient-to-r from-pink-500 to-orange-400 flex items-center justify-center">
                                <img src="{{ asset('assets/esmilla.jpg') }}" alt="Member 1" class="h-11 w-11 rounded-full">
                            </div>
                            <div class="ml-4">
                                <p class="font-semibold text-sm">Alek Sandre Esmilla</p>
                                <p class="text-gray-500 text-xs">ME22S1</p>
                            </div>
                        </div>

                        <!-- Member Image -->
                        <div class="aspect-w-1 aspect-h-1 w-full">
                            <img src="{{ asset('assets/esmilla.jpg') }}" alt="Member photo" class="w-full object-cover">
                        </div>

                        <!-- Action Buttons -->
                        <div class="p-4 flex justify-between">
                            <div class="flex space-x-4">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                                </svg>
                            </div>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
                            </svg>
                        </div>

                        <!-- Member Bio -->
                        <div class="px-4 pb-4">
                            <p class="font-semibold text-sm mb-1">57 likes</p>
                            {{-- <p class="text-sm"><span class="font-semibold">Angie Lee P. Redubla</span> Exploring the categorical imperative through modern ethical dilemmas. #philosophy #kant</p> --}}
                            <p class="text-xs text-gray-500 mt-2">MARCH 23, 2025</p>
                        </div>
                    </div>

                    <div class="bg-gray-800 rounded-lg shadow overflow-hidden ">
                        <!-- Profile Header -->
                        <div class="p-4 flex items-center">
                            <div class="h-12 w-12 rounded-full bg-gradient-to-r from-pink-500 to-orange-400 flex items-center justify-center">
                                <img src="{{ asset('assets/janus.jpg') }}" alt="Member 1" class="h-11 w-11 rounded-full">
                            </div>
                            <div class="ml-4">
                                <p class="font-semibold text-sm">Janus Salud</p>
                                <p class="text-gray-500 text-xs">ME22S1</p>
                            </div>
                        </div>

                        <!-- Member Image -->
                        <div class="aspect-w-1 aspect-h-1 w-full">
                            <img src="{{ asset('assets/janus.jpg') }}" alt="Member photo" class="w-full object-cover">
                        </div>

                        <!-- Action Buttons -->
                        <div class="p-4 flex justify-between">
                            <div class="flex space-x-4">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                                </svg>
                            </div>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
                            </svg>
                        </div>

                        <!-- Member Bio -->
                        <div class="px-4 pb-4">
                            <p class="font-semibold text-sm mb-1">49 likes</p>
                            {{-- <p class="text-sm"><span class="font-semibold">Angie Lee P. Redubla</span> Exploring the categorical imperative through modern ethical dilemmas. #philosophy #kant</p> --}}
                            <p class="text-xs text-gray-500 mt-2">MARCH 23, 2025</p>
                        </div>
                    </div>

                    <div class="bg-gray-800 rounded-lg shadow overflow-hidden ">
                        <!-- Profile Header -->
                        <div class="p-4 flex items-center">
                            <div class="h-12 w-12 rounded-full bg-gradient-to-r from-pink-500 to-orange-400 flex items-center justify-center">
                                <img src="{{ asset('assets/solano.jpg') }}" alt="Member 1" class="h-11 w-11 rounded-full">
                            </div>
                            <div class="ml-4">
                                <p class="font-semibold text-sm">Mhike Vincent Solano</p>
                                <p class="text-gray-500 text-xs">ME22S1</p>
                            </div>
                        </div>

                        <!-- Member Image -->
                        <div class="aspect-w-1 aspect-h-1 w-full">
                            <img src="{{ asset('assets/solano.jpg') }}" alt="Member photo" class="w-full object-cover">
                        </div>

                        <!-- Action Buttons -->
                        <div class="p-4 flex justify-between">
                            <div class="flex space-x-4">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                                </svg>
                            </div>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
                            </svg>
                        </div>

                        <!-- Member Bio -->
                        <div class="px-4 pb-4">
                            <p class="font-semibold text-sm mb-1">38 likes</p>
                            {{-- <p class="text-sm"><span class="font-semibold">Angie Lee P. Redubla</span> Exploring the categorical imperative through modern ethical dilemmas. #philosophy #kant</p> --}}
                            <p class="text-xs text-gray-500 mt-2">MARCH 23, 2025</p>
                        </div>
                    </div>

                    <div class="bg-gray-800 rounded-lg shadow overflow-hidden ">
                        <!-- Profile Header -->
                        <div class="p-4 flex items-center">
                            <div class="h-12 w-12 rounded-full bg-gradient-to-r from-pink-500 to-orange-400 flex items-center justify-center">
                                <img src="{{ asset('assets/gado.jpg') }}" alt="Member 1" class="h-11 w-11 rounded-full">
                            </div>
                            <div class="ml-4">
                                <p class="font-semibold text-sm">Jodell Andrew Gado</p>
                                <p class="text-gray-500 text-xs">ME22S1</p>
                            </div>
                        </div>

                        <!-- Member Image -->
                        <div class="aspect-w-1 aspect-h-1 w-full">
                            <img src="{{ asset('assets/gado.jpg') }}" alt="Member photo" class="w-full object-cover">
                        </div>

                        <!-- Action Buttons -->
                        <div class="p-4 flex justify-between">
                            <div class="flex space-x-4">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                                </svg>
                            </div>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
                            </svg>
                        </div>

                        <!-- Member Bio -->
                        <div class="px-4 pb-4">
                            <p class="font-semibold text-sm mb-1">60 likes</p>
                            {{-- <p class="text-sm"><span class="font-semibold">Angie Lee P. Redubla</span> Exploring the categorical imperative through modern ethical dilemmas. #philosophy #kant</p> --}}
                            <p class="text-xs text-gray-500 mt-2">MARCH 23, 2025</p>
                        </div>
                    </div>

                    <div class="bg-gray-800 rounded-lg shadow overflow-hidden ">
                        <!-- Profile Header -->
                        <div class="p-4 flex items-center">
                            <div class="h-12 w-12 rounded-full bg-gradient-to-r from-pink-500 to-orange-400 flex items-center justify-center">
                                <img src="{{ asset('assets/gerald.jpg') }}" alt="Member 1" class="h-11 w-11 rounded-full">
                            </div>
                            <div class="ml-4">
                                <p class="font-semibold text-sm">Gerald Libuet</p>
                                <p class="text-gray-500 text-xs">ME22S1</p>
                            </div>
                        </div>

                        <!-- Member Image -->
                        <div class="aspect-w-1 aspect-h-1 w-full">
                            <img src="{{ asset('assets/gerald.jpg') }}" alt="Member photo" class="w-full object-cover">
                        </div>

                        <!-- Action Buttons -->
                        <div class="p-4 flex justify-between">
                            <div class="flex space-x-4">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                                </svg>
                            </div>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
                            </svg>
                        </div>

                        <!-- Member Bio -->
                        <div class="px-4 pb-4">
                            <p class="font-semibold text-sm mb-1">53 likes</p>
                            {{-- <p class="text-sm"><span class="font-semibold">Angie Lee P. Redubla</span> Exploring the categorical imperative through modern ethical dilemmas. #philosophy #kant</p> --}}
                            <p class="text-xs text-gray-500 mt-2">MARCH 23, 2025</p>
                        </div>
                    </div>

                    <div class="bg-gray-800 rounded-lg shadow overflow-hidden ">
                        <!-- Profile Header -->
                        <div class="p-4 flex items-center">
                            <div class="h-12 w-12 rounded-full bg-gradient-to-r from-pink-500 to-orange-400 flex items-center justify-center">
                                <img src="{{ asset('assets/francis.jpg') }}" alt="Member 1" class="h-11 w-11 rounded-full">
                            </div>
                            <div class="ml-4">
                                <p class="font-semibold text-sm">Francis Laurence Cruz</p>
                                <p class="text-gray-500 text-xs">ME22S1</p>
                            </div>
                        </div>

                        <!-- Member Image -->
                        <div class="aspect-w-1 aspect-h-1 w-full">
                            <img src="{{ asset('assets/francis.jpg') }}" alt="Member photo" class="w-full object-cover">
                        </div>

                        <!-- Action Buttons -->
                        <div class="p-4 flex justify-between">
                            <div class="flex space-x-4">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                                </svg>
                            </div>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
                            </svg>
                        </div>

                        <!-- Member Bio -->
                        <div class="px-4 pb-4">
                            <p class="font-semibold text-sm mb-1">47 likes</p>
                            {{-- <p class="text-sm"><span class="font-semibold">Angie Lee P. Redubla</span> Exploring the categorical imperative through modern ethical dilemmas. #philosophy #kant</p> --}}
                            <p class="text-xs text-gray-500 mt-2">MARCH 23, 2025</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
