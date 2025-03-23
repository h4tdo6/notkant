@extends('navigation.messages')

@section('title', 'KantStopThinking - Direct')

@section('messages')
<!-- Conversation area -->
<div class="flex-1 flex flex-col chat-container">
    <!-- Conversation Header - Made sticky -->
    <div class="sticky top-0 z-10 px-4 py-3 flex items-center justify-between border-b border-gray-800 bg-black">
        <div class="flex items-center">
            <div class="w-8 h-8 rounded-full overflow-hidden mr-3">
                <img src="{{ asset('assets/aquinas-profile.jpg') }}" alt="Profile" class="w-full h-full object-cover">
            </div>
            <div class="font-semibold">Saint Thomas Aquinas</div>
        </div>
        <div class="flex items-center">
            <button class="text-white mx-3">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                </svg>
            </button>
            <button class="text-white mx-3">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z" />
                </svg>
            </button>
            <button class="text-white mx-3">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
            </button>
        </div>
    </div>

    <!-- Chat Area -->
    <div class="message-list flex flex-col instagram-scroll">

        {{-- misc --}}

        {{-- <!-- Date Divider -->
        <div class="text-center text-gray-500 text-xs my-4">Sun 4:04 PM</div> --}}

        {{-- <!-- Message status -->
        <div class="self-start text-gray-500 text-xs mb-2 ml-8">ur_angie replied to you</div> --}}

        <!-- Received message with avatar -->
        <div class="self-start max-w-xs sm:max-w-md mb-4">
            <div class="flex items-end"> <!-- Changed from items-start to items-end -->
                <div class="w-6 h-6 rounded-full overflow-hidden mr-2 flex-shrink-0">
                    <img src="{{ asset('assets/aquinas-profile.jpg') }}" alt="Profile" class="w-full h-full object-cover">
                </div>
                {{-- rounded-bl-sm

                    add this class to add border cuts for multiple lines --}}
                <div class="bg-gray-800 px-4 py-2 rounded-2xl  text-base">
                    Ah, Immanuel Kant! A pleasure to meet a fellow lover of reason. Tell me something about your views on the role of reason in morality?
                </div>
            </div>
        </div>

        <!-- Sent message -->
        <div class="self-end max-w-xs sm:max-w-md mb-4">
            <div class="bg-blue-600 px-4 py-2 rounded-2xl text-base">
                Hello, Saint Thomas. Moral law, I believe, is grounded in reason. We should act on duty under the Categorical Imperative, which permits us to universalize our activities. So morality cannot be based on desires or consequences.
            </div>
        </div>

        <!-- Received message with avatar -->
        <div class="self-start max-w-xs sm:max-w-md mb-4">
            <div class="flex items-end"> <!-- Changed from items-start to items-end -->
                <div class="w-6 h-6 rounded-full overflow-hidden mr-2 flex-shrink-0">
                    <img src="{{ asset('assets/aquinas-profile.jpg') }}" alt="Profile" class="w-full h-full object-cover">
                </div>
                {{-- rounded-bl-sm

                    add this class to add border cuts for multiple lines --}}
                <div class="bg-gray-800 px-4 py-2 rounded-2xl  text-base">
                    A noble pursuit! But I think reason is a gift from God to understand His natural law. Morality is not simply about duty, it is about accomplishing our ultimate purpose—beatitude or union with God. Virtue directs us to that beatific end.
                </div>
            </div>
        </div>

        <!-- Sent message -->
        <div class="self-end max-w-xs sm:max-w-md mb-4">
            <div class="bg-blue-600 px-4 py-2 rounded-2xl text-base">
                I respect your perspective, but I am opposed to teleology in ethics. The only source of morality must be pure practical reason — not some external goal such as happiness, nor a reward from a deity. I do, however, posit the existence of God, because it is He who ensures the Gracious Good, the union of virtue and happiness.
            </div>
        </div>

        <!-- Received message with avatar -->
        <div class="self-start max-w-xs sm:max-w-md mb-4">
            <div class="flex items-end"> <!-- Changed from items-start to items-end -->
                <div class="w-6 h-6 rounded-full overflow-hidden mr-2 flex-shrink-0">
                    <img src="{{ asset('assets/aquinas-profile.jpg') }}" alt="Profile" class="w-full h-full object-cover">
                </div>
                {{-- rounded-bl-sm

                    add this class to add border cuts for multiple lines --}}
                <div class="bg-gray-800 px-4 py-2 rounded-2xl  text-base">
                    Interesting! You do not seek to demonstrate God's existence the way I do in my Five Ways, but you do recognize his necessity in the order of morality. But wait, if you put morality aside from divine law, what makes that people respect it?
                </div>
            </div>
        </div>

        <!-- Sent message -->
        <div class="self-end max-w-xs sm:max-w-md mb-4">
            <div class="bg-blue-600 px-4 py-2 rounded-2xl text-base">
                Our inner moral compass is all you need. Human beings have free will; we need to do the right thing from our respect for the law, and not out of fear of punishment or desire for reward. Morality must be internally enforced, not externally mandated.
            </div>
        </div>

        <!-- Received message with avatar -->
        <div class="self-start max-w-xs sm:max-w-md mb-4">
            <div class="flex items-end"> <!-- Changed from items-start to items-end -->
                <div class="w-6 h-6 rounded-full overflow-hidden mr-2 flex-shrink-0">
                    <img src="{{ asset('assets/aquinas-profile.jpg') }}" alt="Profile" class="w-full h-full object-cover">
                </div>
                {{-- rounded-bl-sm

                    add this class to add border cuts for multiple lines --}}
                <div class="bg-gray-800 px-4 py-2 rounded-2xl  text-base">
                    I hear you, but I assert that morality is both reasonable and divinely revealed. Reason can lead us far, but it is faith that fulfills what reason cannot comprehend.
                </div>
            </div>
        </div>

        <!-- Sent message -->
        <div class="self-end max-w-xs sm:max-w-md mb-4">
            <div class="bg-blue-600 px-4 py-2 rounded-2xl text-base">
                We both agree that reason is crucial, but I confine reason to what is applicable to human experience, whereas you extend it to divine truth. Maybe we are not so different after all — we both crave a moral order grounded in reason, and while our sources of authority diverge, we yearn for a reasoned basis for our moral lives.
            </div>
        </div>

        <!-- Received message with avatar -->
        <div class="self-start max-w-xs sm:max-w-md mb-4">
            <div class="flex items-end"> <!-- Changed from items-start to items-end -->
                <div class="w-6 h-6 rounded-full overflow-hidden mr-2 flex-shrink-0">
                    <img src="{{ asset('assets/aquinas-profile.jpg') }}" alt="Profile" class="w-full h-full object-cover">
                </div>
                {{-- rounded-bl-sm

                    add this class to add border cuts for multiple lines --}}
                <div class="bg-gray-800 px-4 py-2 rounded-2xl  text-base">
                    Indeed! We may take different paths but we both hold up reason as the guide to what is good. Maybe we have more in common than meets the eye.
                </div>
            </div>
        </div>
    </div>

    <!-- Message Input -->
    <div class="sticky bottom-0 px-4 py-3 border-t border-gray-800 flex items-center bg-black">
        <button class="text-white mr-3">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
        </button>
        <input type="text" placeholder="Message..." class="flex-1 bg-transparent text-white border-none focus:ring-0 focus:outline-none">
        <button class="text-white mx-2">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11a7 7 0 01-7 7m0 0a7 7 0 01-7-7m7 7v4m0 0H8m4 0h4m-4-8a3 3 0 01-3-3V5a3 3 0 116 0v6a3 3 0 01-3 3z" />
            </svg>
        </button>
        <button class="text-white mx-2">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
            </svg>
        </button>
        <button class="text-white ml-2">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd" />
            </svg>
        </button>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Get the chat container (update the selector to match your class name)
        const chatContainer = document.querySelector(".message-list");

        // Scroll to the bottom
        if (chatContainer) {
            chatContainer.scrollTop = chatContainer.scrollHeight;
        }
    });
</script>
@endsection
