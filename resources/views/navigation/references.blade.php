@extends('layout.main')

@section('title', 'KantStopThinking - References')

@section('content')
    <div class="bg-black min-h-screen py-8">
        <div class="container mx-auto px-4">
            <!-- Header -->
            <div class="flex items-center justify-center mb-8">
                <h1 class="text-3xl font-bold text-white">References</h1>
            </div>

            <!-- Search Bar (Instagram Style) -->
            <div class="max-w-md mx-auto mb-8">
                <div class="bg-[rgb(54,54,54)] rounded-lg flex items-center px-3 py-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-white" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
                    <input type="text" placeholder="Search references..."
                        class="ml-2 flex-1 outline-none bg-transparent text-white">
                </div>
            </div>

            <!-- References Grid with scroll -->
            <div class="max-h-[700px] overflow-y-auto">
                <div class="grid grid-cols-1 gap-6 max-w-2xl mx-auto">
                    <!-- Reference Item 1 -->
                    <div class="bg-white rounded-lg shadow overflow-hidden">
                        <!-- Reference Header -->
                        <div class="p-4 flex items-center justify-between">
                            <div class="flex items-center">
                                <div
                                    class="h-10 w-10 rounded-full bg-gradient-to-r from-blue-500 to-purple-400 flex items-center justify-center">
                                    <span class="text-black font-bold">JF</span>
                                </div>
                                <div class="ml-3">
                                    <p class="text-black font-semibold text-sm">Journal of Philosophy</p>
                                    <p class="text-gray-500 text-xs">Academic Journal</p>
                                </div>
                            </div>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-500" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
                            </svg>
                        </div>

                        <!-- Reference Content -->
                        <div class="px-4 pb-3">
                            <p class="text-black font-bold text-lg mb-2">The Categorical Imperative in Modern Context</p>
                            <p class="text-sm text-gray-700 mb-2">Smith, J., Johnson, M. (2023). The Categorical
                                Imperative in Modern Context. <span class="italic">Journal of Philosophy</span>, 45(2),
                                112-134.</p>
                            <p class="text-sm text-gray-600">This paper examines Kant's categorical imperative and
                                applies it to contemporary ethical dilemmas, specifically focusing on issues related to
                                artificial intelligence and bioethics.</p>

                            <div class="mt-3 flex items-center text-gray-500 text-sm">
                                <span class="flex items-center mr-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                    </svg>
                                    42 citations
                                </span>
                                <span class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                    </svg>
                                    PDF Available
                                </span>
                            </div>
                        </div>

                        <!-- Action Buttons -->
                        <div class="border-t border-gray-100 px-4 py-3 flex justify-between">
                            <button class="text-blue-500 text-sm font-medium">Read More</button>
                            <button class="bg-blue-500 text-white text-sm font-medium px-4 py-1 rounded-full">Cite</button>
                        </div>
                    </div>

                    <!-- Reference Item 2 -->
                    <div class="bg-white rounded-lg shadow overflow-hidden">
                        <!-- Reference Header -->
                        <div class="p-4 flex items-center justify-between">
                            <div class="flex items-center">
                                <div
                                    class="h-10 w-10 rounded-full bg-gradient-to-r from-pink-500 to-orange-400 flex items-center justify-center">
                                    <span class="text-white font-bold">ER</span>
                                </div>
                                <div class="ml-3">
                                    <p class="font-semibold text-sm">Ethics Review</p>
                                    <p class="text-gray-500 text-xs">Academic Publication</p>
                                </div>
                            </div>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-500" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
                            </svg>
                        </div>

                        <!-- Reference Content -->
                        <div class="px-4 pb-3">
                            <p class="font-bold text-lg mb-2">Deontological Approaches to Social Media Ethics</p>
                            <p class="text-sm text-gray-700 mb-2">Chen, R., Williams, A. (2024). Deontological
                                Approaches to Social Media Ethics. <span class="italic">Ethics Review</span>, 18(3),
                                224-253.</p>
                            <p class="text-sm text-gray-600">This comprehensive study explores how Kantian ethics can be
                                applied to contemporary social media platforms, addressing issues of privacy,
                                algorithmic bias, and content moderation.</p>

                            <div class="mt-3 flex items-center text-gray-500 text-sm">
                                <span class="flex items-center mr-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                    </svg>
                                    86 citations
                                </span>
                                <span class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                    </svg>
                                    PDF Available
                                </span>
                            </div>
                        </div>

                        <!-- Action Buttons -->
                        <div class="border-t border-gray-100 px-4 py-3 flex justify-between">
                            <button class="text-blue-500 text-sm font-medium">Read More</button>
                            <button class="bg-blue-500 text-white text-sm font-medium px-4 py-1 rounded-full">Cite</button>
                        </div>
                    </div>

                    <!-- Reference Item 3 -->
                    <div class="bg-white rounded-lg shadow overflow-hidden">
                        <!-- Reference Header -->
                        <div class="p-4 flex items-center justify-between">
                            <div class="flex items-center">
                                <div
                                    class="h-10 w-10 rounded-full bg-gradient-to-r from-green-500 to-teal-400 flex items-center justify-center">
                                    <span class="text-white font-bold">BP</span>
                                </div>
                                <div class="ml-3">
                                    <p class="font-semibold text-sm">Book Publication</p>
                                    <p class="text-gray-500 text-xs">Oxford University Press</p>
                                </div>
                            </div>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-500" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
                            </svg>
                        </div>

                        <!-- Reference Content -->
                        <div class="px-4 pb-3">
                            <p class="font-bold text-lg mb-2">Kant's Legacy in Contemporary Thought</p>
                            <p class="text-sm text-gray-700 mb-2">Davidson, M. (2022). <span class="italic">Kant's
                                    Legacy in Contemporary Thought</span>. Oxford University Press.</p>
                            <p class="text-sm text-gray-600">This comprehensive volume explores how Kantian philosophy
                                continues to influence modern thought across disciplines including ethics, politics,
                                aesthetics, and epistemology.</p>

                            <div class="mt-3 flex items-center text-gray-500 text-sm">
                                <span class="flex items-center mr-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                    </svg>
                                    128 citations
                                </span>
                                <span class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                    </svg>
                                    Preview Available
                                </span>
                            </div>
                        </div>

                        <!-- Action Buttons -->
                        <div class="border-t border-gray-100 px-4 py-3 flex justify-between">
                            <button class="text-blue-500 text-sm font-medium">Read More</button>
                            <button class="bg-blue-500 text-white text-sm font-medium px-4 py-1 rounded-full">Cite</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
