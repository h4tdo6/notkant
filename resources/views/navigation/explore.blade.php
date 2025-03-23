@extends('layout.main')

@section('title', 'KantStopThinking - Explore')

@section('content')
<div class="flex flex-col min-h-screen bg-black text-white">
    <!-- Header (Instagram-style) -->
    <div class="sticky top-0 z-10 border-b border-gray-800 bg-black px-4 py-3">
        <div class="flex items-center justify-between">
            <div class="text-xl font-semibold">Learning Module</div>
            <div class="flex items-center space-x-4">

            </div>
        </div>
    </div>

    <!-- Content -->
    <div class="flex-1 p-4">
        <!-- Module Card (Instagram post style) -->
        <div class="mb-6 rounded-lg border border-gray-800 bg-black overflow-hidden">
            <!-- Module Image/Header -->
            <div class="aspect-w-16 aspect-h-9 bg-gradient-to-r from-blue-900 to-purple-900 flex items-center justify-center">
                <div class="text-center p-8">
                    <h1 class="text-2xl font-bold mb-2">Kantian Ethics</h1>
                    <p class="text-gray-300">Philosophy Module</p>
                </div>
            </div>

            <!-- Module Info (Like Instagram caption) -->
            <div class="p-4">
                <div class="flex items-center mb-3">
                    <div class="w-8 h-8 rounded-full overflow-hidden mr-2">
                        <img src="{{ asset('assets/kant-profile.jpg') }}" alt="Kant Profile" class="w-full h-full object-cover" onerror="this.src='https://via.placeholder.com/40'">
                    </div>
                    <div class="font-semibold">KantStopThinking</div>
                    <div class="ml-auto text-gray-500 text-sm">Module 10</div>
                </div>

                <div class="border-b border-gray-800 pb-4">
                    <h2 class="font-semibold text-lg mb-3">Intended Learning Outcomes</h2>
                    <p class="text-gray-300 mb-4">At the end of this module, you should be able to:</p>

                    <ul class="space-y-2">
                        <li class="flex">
                            <span class="mr-2">•</span>
                            <span>explain the essence of goodwill;</span>
                        </li>
                        <li class="flex">
                            <span class="mr-2">•</span>
                            <span>differentiate hypothetical imperative and categorical imperative; and</span>
                        </li>
                        <li class="flex">
                            <span class="mr-2">•</span>
                            <span>discuss the idea of Immanuel Kant concerning virtues.</span>
                        </li>
                    </ul>
                </div>

                <!-- Instagram-style action buttons -->
                <div class="pt-3 flex items-center justify-between">
                    <div class="flex space-x-4">
                        <button class="text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                            </svg>
                        </button>
                        <button class="text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z" />
                            </svg>
                        </button>
                        <button class="text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z" />
                            </svg>
                        </button>
                    </div>
                    <button class="text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z" />
                        </svg>
                    </button>
                </div>

                <!-- Likes count -->
                <div class="mt-2 text-sm font-semibold">42 likes</div>

                <!-- Posted time -->
                <div class="mt-1 text-xs text-gray-500">POSTED 2 DAYS AGO</div>
            </div>
        </div>

        <!-- Related Modules (Instagram suggestions style) -->
        <div class="mt-6">
            <h3 class="mb-3 text-gray-400 font-semibold">You might also like</h3>
            <div class="grid grid-cols-2 gap-4">
                <div class="border border-gray-800 rounded-lg overflow-hidden">
                    <div class="aspect-w-1 aspect-h-1 bg-gradient-to-br from-blue-600 to-purple-600 flex items-center justify-center p-4 text-center">
                        <span class="text-lg font-bold text-white">IMMANUEL KANT'S TREATISE ON VIRTUES</span>
                    </div>
                    <div class="p-2">
                        {{-- <div class="text-sm font-semibold">Module 2</div> --}}
                        <div class="text-xs text-gray-500">3 learning outcomes</div>
                    </div>
                </div>
                <div class="border border-gray-800 rounded-lg overflow-hidden">
                    <div class="aspect-w-1 aspect-h-1 bg-gradient-to-br from-pink-600 to-purple-600 flex items-center justify-center p-4 text-center">
                        <span class="text-lg font-bold text-white">GOODWILL</span>
                    </div>
                    <div class="p-2">
                        {{-- <div class="text-sm font-semibold">Module 2</div> --}}
                        <div class="text-xs text-gray-500">4 learning outcomes</div>
                    </div>
                </div>
                <div class="border border-gray-800 rounded-lg overflow-hidden">
                    <div class="aspect-w-1 aspect-h-1 bg-gradient-to-br from-teal-600 to-blue-600 flex items-center justify-center p-4 text-center">
                        <span class="text-lg font-bold text-white">CATEGORICAL IMPERATIVE</span>
                    </div>
                    <div class="p-2">
                        {{-- <div class="text-sm font-semibold">Module 2</div> --}}
                        <div class="text-xs text-gray-500">4 learning outcomes</div>
                    </div>
                </div>
            </div>
        </div>


        <!-- Related Modules (Instagram suggestions style) -->
        {{-- <div class="mt-6">
            <h3 class="mb-3 text-gray-400 font-semibold">You might also like</h3>
            <div class="grid grid-cols-2 gap-4">
                <div class="border border-gray-800 rounded-lg overflow-hidden">
                    <div class="aspect-w-1 aspect-h-1 bg-gradient-to-br from-indigo-900 to-purple-900 flex items-center justify-center">
                        <span class="text-lg font-bold">Utilitarianism</span>
                    </div>
                    <div class="p-2">
                        <div class="text-sm font-semibold">Module 2</div>
                        <div class="text-xs text-gray-500">3 learning outcomes</div>
                    </div>
                </div>
                <div class="border border-gray-800 rounded-lg overflow-hidden">
                    <div class="aspect-w-1 aspect-h-1 bg-gradient-to-br from-red-900 to-purple-900 flex items-center justify-center">
                        <span class="text-lg font-bold">Virtue Ethics</span>
                    </div>
                    <div class="p-2">
                        <div class="text-sm font-semibold">Module 3</div>
                        <div class="text-xs text-gray-500">4 learning outcomes</div>
                    </div>
                </div>
            </div>
        </div> --}}
    </div>


</div>

@endsection
