@extends('layout.main')

@section('title', 'KantStopThinking - Home')

@section('content')
    <!-- Main scrollable container -->
    <div class="h-screen overflow-y-auto instagram-scroll">
        <!-- Height set to screen height with bottom padding for footer -->
        <div class="p-6">
            <!-- Profile Section -->
            <div class="flex items-start mb-12">
                <img src="{{ asset('assets/kant-profile.jpg') }}" alt="Profile Picture"
                    class="w-36 h-36 rounded-full mr-8 object-cover">

                <div class="flex flex-col">
                    <div class="flex items-center mb-5">
                        <div class="text-xl mr-5">KantStopThinking</div>
                        <button class="bg-blue-500 text-white px-4 py-1 rounded font-semibold mr-3">Follow</button>
                        <button class="text-xl">•••</button>
                    </div>

                    <div class="flex mb-5 text-gray-500 text-base">
                        <div class="mr-8">
                            <strong class="text-white">15</strong> posts
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
                <div class="aspect-square overflow-hidden cursor-pointer" data-post-id="0">
                    <img src="{{ asset('assets/kant-profile.jpg') }}" alt="Post Image" class="w-full h-full object-cover">
                </div>
                <div class="aspect-square overflow-hidden cursor-pointer" data-post-id="1">
                    <img src="{{ asset('assets/groundwork.jpg') }}" alt="Post Image" class="w-full h-full object-cover">
                </div>
                <div class="aspect-square overflow-hidden cursor-pointer" data-post-id="2">
                    <img src="{{ asset('assets/critiqueofpractical.jpg') }}" alt="Post Image"
                        class="w-full h-full object-cover">
                </div>
                <div class="aspect-square overflow-hidden cursor-pointer" data-post-id="3">
                    <img src="{{ asset('assets/concept_of_virtue.webp') }}" alt="Post Image"
                        class="w-full h-full object-cover">
                </div>
                <div class="aspect-square overflow-hidden cursor-pointer" data-post-id="4">
                    <img src="{{ asset('assets/duties_to_oneself.webp') }}" alt="Post Image"
                        class="w-full h-full object-cover">
                </div>
                <div class="aspect-square overflow-hidden cursor-pointer" data-post-id="5">
                    <img src="{{ asset('assets/moral_perfection.webp') }}" alt="Post Image"
                        class="w-full h-full object-cover">
                </div>
                <div class="aspect-square overflow-hidden cursor-pointer" data-post-id="6">
                    <img src="{{ asset('assets/moral_feeling_and_conscience.webp') }}" alt="Post Image"
                        class="w-full h-full object-cover">
                </div>
                <div class="aspect-square overflow-hidden cursor-pointer" data-post-id="7">
                    <img src="{{ asset('assets/the_categorical_imperative_and_virtue.webp') }}" alt="Post Image"
                        class="w-full h-full object-cover">
                </div>
                <div class="aspect-square overflow-hidden cursor-pointer" data-post-id="8">
                    <img src="{{ asset('assets/virtue_as_duty.webp') }}" alt="Post Image"
                        class="w-full h-full object-cover">
                </div>
                <div class="aspect-square overflow-hidden cursor-pointer" data-post-id="9">
                    <img src="{{ asset('assets/intrinsic_goodness.webp') }}" alt="Post Image"
                        class="w-full h-full object-cover">
                </div>
                <div class="aspect-square overflow-hidden cursor-pointer" data-post-id="10">
                    <img src="{{ asset('assets/acting_from_duty.webp') }}" alt="Post Image"
                        class="w-full h-full object-cover">
                </div>
                <div class="aspect-square overflow-hidden cursor-pointer" data-post-id="11">
                    <img src="{{ asset('assets/moral_worth.webp') }}" alt="Post Image" class="w-full h-full object-cover">
                </div>
                <div class="aspect-square overflow-hidden cursor-pointer" data-post-id="12">
                    <img src="{{ asset('assets/categoical_imperative.webp') }}" alt="Post Image"
                        class="w-full h-full object-cover">
                </div>
                <div class="aspect-square overflow-hidden cursor-pointer" data-post-id="13">
                    <img src="{{ asset('assets/the_formula_of_universal_law.webp') }}" alt="Post Image"
                        class="w-full h-full object-cover">
                </div>
                <div class="aspect-square overflow-hidden cursor-pointer" data-post-id="14">
                    <img src="{{ asset('assets/the_formula_of_humanity.webp') }}" alt="Post Image"
                        class="w-full h-full object-cover">
                </div>
                <div class="aspect-square overflow-hidden cursor-pointer" data-post-id="15">
                    <img src="{{ asset('assets/the_formula_of_kingdom_ends.webp') }}" alt="Post Image"
                        class="w-full h-full object-cover">
                </div>
            </div>
        </div>

        <div class="mt-auto">
            <div class="flex flex-wrap justify-center text-xs text-gray-500 mt-10 space-x-3">
                <a href="https://en.wikipedia.org/wiki/Immanuel_Kant" target="_blank"
                    class="hover:underline">Wikipedia</a>
                <a href="https://plato.stanford.edu/entries/kant/" target="_blank" class="hover:underline">Stanford
                    Encyclopedia</a>
                <a href="https://www.britannica.com/biography/Immanuel-Kant" target="_blank"
                    class="hover:underline">Britannica</a>
            </div>

            <div class="flex justify-center items-center text-xs text-gray-500 my-5">
                <div class="mr-4">English</div>
                <div>© 2025 <a href="https://github.com/dnsxmrs" target="_blank"
                        aria-atomic=""class="hover:underline">dnsxmrs</a></div>
            </div>
        </div>
    </div>

    <!-- Add this to your layout.main template or where appropriate -->
    <div id="postModal" class="fixed inset-0 z-50 hidden overflow-y-auto">
        <div class="relative min-h-screen flex items-center justify-center">
            <!-- Overlay -->
            <div class="fixed inset-0 bg-black bg-opacity-75 transition-opacity" id="modalOverlay"></div>

            <!-- Modal Content -->
            <div
                class="relative bg-black border border-zinc-700 rounded-none md:rounded-lg mx-auto flex flex-col md:flex-row">
                <!-- Close Button -->
                <button class="absolute top-4 right-4 text-white text-xl z-10" id="closeModal">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round">
                        <line x1="18" y1="6" x2="6" y2="18"></line>
                        <line x1="6" y1="6" x2="18" y2="18"></line>
                    </svg>
                </button>

                <!-- Left Section (Image) - Fixed 900x900px with stretched image -->
                <div class="w-[900px] md:w-[900px] h-[900px] bg-black flex-shrink-0">
                    <img id="modalImage" src="{{ asset('assets/kant-profile.jpg') }}" alt="Post"
                        class="w-full h-full object-cover">
                </div>

                <!-- Right Section (Content) -->
                <div
                    class="w-[5000px] md:w-[500px] flex flex-col bg-black text-white border-t border-zinc-700 md:border-t-0 md:border-l">
                    <!-- Header -->
                    <div class="flex items-center p-4 border-b border-zinc-700">
                        <div class="flex items-center">
                            <img id="modalProfilePic" src="{{ asset('assets/kant-profile.jpg') }}" alt="Profile"
                                class="w-8 h-8 rounded-full mr-3 object-cover">
                            <div class="font-semibold mr-2" id="modalUsername">KantStopThinking</div>

                        </div>
                    </div>

                    <!-- Caption - Now explicitly scrollable with max height -->
                    <div class="p-4 overflow-y-auto flex-grow border-zinc-700" id="modalCaption">
                        <!-- Caption content will be inserted here by JS -->
                    </div>

                    <div class="mt-auto" >
                        <!-- Action Buttons -->
                        <div class="p-4 border-b border-t border-zinc-700">
                            <div class="flex justify-between mb-2">
                                <div class="flex space-x-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" class="cursor-pointer">
                                        <path
                                            d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z">
                                        </path>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" class="cursor-pointer">
                                        <path
                                            d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z">
                                        </path>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" class="cursor-pointer">
                                        <line x1="22" y1="2" x2="11" y2="13"></line>
                                        <polygon points="22 2 15 22 11 13 2 9 22 2"></polygon>
                                    </svg>
                                </div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="cursor-pointer">
                                    <path d="M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z"></path>
                                </svg>
                            </div>
                            <div class="mb-1" id="modalLikes">
                                Liked by <span class="font-semibold">theslayables</span> and <span
                                    id="likeCount">137,459</span> others
                            </div>
                            <div class="text-gray-500 text-xs" id="modalDate">March 23, 2025</div>
                        </div>

                        <!-- Comment Section -->
                        <div class="border-t border-zinc-700 flex items-center p-4">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="mr-3">
                                <path d="M14.5 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7.5L14.5 2z"></path>
                                <polyline points="14 2 14 8 20 8"></polyline>
                                <line x1="16" y1="13" x2="8" y2="13"></line>
                                <line x1="16" y1="17" x2="8" y2="17"></line>
                                <line x1="10" y1="9" x2="8" y2="9"></line>
                            </svg>
                            <input type="text" placeholder="Add a comment..."
                                class="bg-transparent border-none flex-grow text-white focus:outline-none placeholder-gray-500">
                            <button class="text-blue-500 font-semibold ml-3">Post</button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- Add this script to your page for modal functionality -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Post data object with images and captions
            const postsData = [{
                    id: 0,
                    image: "{{ asset('assets/kant-profile.jpg') }}",
                    caption: "<div class='font-semibold mb-2'>Immanuel Kant's Treatise on Virtues<span class=\"text-blue-500\"> • Biography</span></div><div>Early Life and Education (1724-1740)<br>Immanuel Kant was born on April 22, 1724, in Königsberg, Prussia (now Kaliningrad, Russia). He was the fourth of nine children in a pious but unpretentious family. His parents, especially his mother, had a strong effect on his sense of discipline and morality. Kant went to the Collegium Fridericianum, where he studied classical languages, and later entered the University of Königsberg (Albertina) to study philosophy, mathematics, and the natural sciences. <br><br>Career as Academician: 1740-1770 <br> Upon his father's death, Kant spent nearly a decade as a private tutor before re-entering academia. He received his doctorate in 1755 and started teaching at the University of Königsberg. He was shaped by rationalist philosophers such as Leibniz and Wolff, but also empiricists including Hume and Newton during this period.</div><div class='mt-3 text-blue-500'>#philosophy #portrait #königsberg #prussia #critique</div>",
                    likes: 187621,
                    date: "March 10, 2025"
                },
                {
                    id: 1,
                    image: "{{ asset('assets/groundwork.jpg') }}",
                    caption: "<div class='font-semibold mb-2'>Immanuel Kant's Treatise on Virtues<span class=\"text-blue-500\"> • Groundwork of the Metaphysics of Morals</span></div><div>Just published my 'Groundwork of the Metaphysics of Morals' (1785). In this work, I develop my formulation of the categorical imperative: \"Act only according to that maxim whereby you can, at the same time, will that it should become a universal law.\" The moral worth of an action lies not in its consequences but in the principle behind it.</div><div class='mt-3 text-blue-500'>#categoricalimperative #ethics #philosophy #morallaw #metaphysics</div>",
                    likes: 142358,
                    date: "February 20, 2025"
                },
                {
                    id: 2,
                    image: "{{ asset('assets/critiqueofpractical.jpg') }}",
                    caption: "<div class='font-semibold mb-2'>Immanuel Kant's Treatise on Virtues<span class=\"text-blue-500\"> • Critique of Practical Reason</span></div><div>My 'Critique of Practical Reason' (1788) expands on the ethical framework I began in the Groundwork. Here I establish that freedom is the ratio essendi (reason for being) of the moral law, while the moral law is the ratio cognoscendi (reason for knowing) of freedom. We must postulate the existence of God, freedom, and immortality to make sense of the moral demands placed upon us.</div><div class='mt-3 text-blue-500'>#practicalreason #morallaw #freedom #philosophy #ethics</div>",
                    likes: 156789,
                    date: "January 15, 2025"
                },
                {
                    id: 3,
                    image: "{{ asset('assets/concept_of_virtue.webp') }}",
                    caption: "<div class='font-semibold mb-2'>Immanuel Kant's Treatise on Virtues<span class=\"text-blue-500\"> • Concept of Virtue</span></div><div>In my view, virtue is not merely a disposition to perform good actions but rather the moral strength of the will to act in accordance with duty, even in the face of opposing inclinations. It is the capacity of a rational being to govern themselves through the moral law, guided by reason rather than desire. Virtue, therefore, is not simply about achieving good results but about maintaining a steadfast commitment to principles that can be willed as universal laws.</div><div class='mt-3 text-blue-500'>#virtue #duty #morallaw #ethics #philosophy</div>",
                    likes: 134523,
                    date: "March 21, 2025"
                },
                {
                    id: 4,
                    image: "{{ asset('assets/duties_to_oneself.webp') }}",
                    caption: "<div class='font-semibold mb-2'>Immanuel Kant's Treatise on Virtues<span class=\"text-blue-500\"> • Duties to Oneself and Others</span></div><div>In my ethical framework, I distinguish between two primary categories of moral duties: duties to oneself and duties to others. Duties to oneself are grounded in the recognition of one's own dignity as a rational being. They involve the cultivation of moral character, self-respect, and the pursuit of self-improvement. To neglect these duties would be to undermine one's own humanity.</div><div class='mt-3 text-blue-500'>#duty #selfrespect #humanity #moralobligation #philosophy</div>",
                    likes: 128945,
                    date: "March 17, 2025"
                },
                {
                    id: 5,
                    image: "{{ asset('assets/moral_perfection.webp') }}",
                    caption: "<div class='font-semibold mb-2'>Immanuel Kant's Treatise on Virtues<span class=\"text-blue-500\"> • Moral Perfection</span></div><div>In my understanding, moral perfection is not a state that can be fully attained, but rather an ongoing duty to continuously strive toward greater moral excellence. As rational beings, we possess the capacity to recognize the moral law and act in accordance with it. However, our natural inclinations and self-interest often conflict with our duty. Thus, the pursuit of moral perfection requires a constant effort to strengthen our will and cultivate virtue.</div><div class='mt-3 text-blue-500'>#moralperfection #progress #virtue #ethics #philosophy</div>",
                    likes: 142567,
                    date: "March 12, 2025"
                },
                {
                    id: 6,
                    image: "{{ asset('assets/moral_feeling_and_conscience.webp') }}",
                    caption: "<div class='font-semibold mb-2'>Immanuel Kant's Treatise on Virtues<span class=\"text-blue-500\"> • Moral Feeling and Conscience</span></div><div>In my view, moral feeling and conscience play crucial roles in our moral life, serving as internal guides that support our commitment to the moral law. Moral feeling is the innate sense of respect we experience when we recognize the authority of the moral law. It is not derived from external influence or personal interest but arises naturally from our rational nature. This feeling of respect acts as a motivating force, encouraging us to act from duty rather than inclination.</div><div class='mt-3 text-blue-500'>#moralfeeling #conscience #respect #duty #philosophy</div>",
                    likes: 138752,
                    date: "March 7, 2025"
                },
                {
                    id: 7,
                    image: "{{ asset('assets/the_categorical_imperative_and_virtue.webp') }}",
                    caption: "<div class='font-semibold mb-2'>Immanuel Kant's Treatise on Virtues<span class=\"text-blue-500\"> • The Categorical Imperative and Virtue</span></div><div>In my philosophy, the concept of virtue is deeply intertwined with the categorical imperative, which serves as the supreme principle of morality. The categorical imperative commands us to act only according to maxims that we could will to become universal laws. Unlike hypothetical imperatives, which are conditional and serve personal desires, the categorical imperative applies universally and unconditionally. Virtue, therefore, is the moral strength to follow this principle, even when our inclinations tempt us otherwise.</div><div class='mt-3 text-blue-500'>#categoricalimperative #virtue #duty #ethics #philosophy</div>",
                    likes: 156234,
                    date: "March 2, 2025"
                },
                {
                    id: 8,
                    image: "{{ asset('assets/virtue_as_duty.webp') }}",
                    caption: "<div class='font-semibold mb-2'>Immanuel Kant's Treatise on Virtues<span class=\"text-blue-500\"> • Virtue as a Duty</span></div><div>In my moral philosophy, I assert that virtue is not merely an admirable quality but a fundamental duty that every rational being must strive to fulfill. Virtue involves the moral strength of the will to act in accordance with the moral law, even in the face of opposing inclinations. It is a duty because the pursuit of moral excellence is essential for maintaining our dignity as rational agents.</div><div class='mt-3 text-blue-500'>#virtue #duty #categorical #morallaw #philosophy</div>",
                    likes: 132456,
                    date: "February 25, 2025"
                },
                {
                    id: 9,
                    image: "{{ asset('assets/intrinsic_goodness.webp') }}",
                    caption: "<div class='font-semibold mb-2'>Goodwill<span class=\"text-blue-500\"> • Intrinsic Goodness</span></div><div>Intrinsic goodness is the idea that the object in question has value based on what it is in and of itself, devoid of its outcomes or the externalities that come along with it. Instrumental goodness is to be valued because it is a means to an end, whereas intrinsic goodness is valuable for its own sake. In moral philosophy, I maintain that the only intrinsic good is a good will — the disposition to act out of duty and according to moral law.</div><div class='mt-3 text-blue-500'>#goodwill #intrinsicvalue #ethics #philosophy #virtue</div>",
                    likes: 147893,
                    date: "February 17, 2025"
                },
                {
                    id: 10,
                    image: "{{ asset('assets/acting_from_duty.webp') }}",
                    caption: "<div class='font-semibold mb-2'>Goodwill<span class=\"text-blue-500\"> • Acting from Duty</span></div><div>Acting from duty is a key idea in my moral philosophy. It means performing an act merely because it is the right thing to do in accordance with moral rules, not for one's own desires, emotions, or selfish concerns. I believe that an action is only moral if it is done from duty, and it is the intention behind the action that matters, not the consequences of it. Duty is what follows the categorical imperative, meaning what people must do in accordance with the universal moral law.</div><div class='mt-3 text-blue-500'>#duty #moralworth #ethics #philosophy #respect</div>",
                    likes: 138965,
                    date: "February 10, 2025"
                },
                {
                    id: 11,
                    image: "{{ asset('assets/moral_worth.webp') }}",
                    caption: "<div class='font-semibold mb-2'>Goodwill<span class=\"text-blue-500\"> • Moral Worth</span></div><div>In my ethical theory, moral worth is the value of an act determined by the motivating factor instead of the outcome. An action has moral worth only if it is done out of a sense of duty, that is to say only if it is carried out simply because it is the right thing to do according to moral law. If an action results in good outcomes, it is devoid of moral worth, as long as it was done for selfish interests, self-benefit or sentimental reasons.</div><div class='mt-3 text-blue-500'>#moralworth #duty #maxim #ethics #philosophy</div>",
                    likes: 142378,
                    date: "February 5, 2025"
                },
                {
                    id: 12,
                    image: "{{ asset('assets/categoical_imperative.webp') }}",
                    caption: "<div class='font-semibold mb-2'>Goodwill<span class=\"text-blue-500\"> • Categorical Imperative</span></div><div>My moral philosophy is built around the categorical imperative. A universal moral principle that acts as a standard upon which actions are judged. In contrast to hypothetical imperatives, which are conditional and dependent on achieving certain ends, the categorical imperative is unconditional, demanding that individuals act according to moral principles regardless of personal wants or situational factors.</div><div class='mt-3 text-blue-500'>#categoricalimperative #universallaw #ethics #philosophy #duty</div>",
                    likes: 165432,
                    date: "January 30, 2025"
                },
                {
                    id: 13,
                    image: "{{ asset('assets/the_formula_of_universal_law.webp') }}",
                    caption: "<div class='font-semibold mb-2'>The Three Formulations of the Categorical Imperative<span class=\"text-blue-500\"> • The Formula of Universal Law</span></div><div>The Formula of Universal Law is one of the fundamental formulations of my categorical imperative, which is a method for determining the morality of an action. It reads: \"Act only according to that maxim whereby you can at the same time will that it should become a universal law.\" The maxim is the standard or rule of your person. The Formula of Universal Law is about whether the maxim could be willed to become a universal law without contradiction.</div><div class='mt-3 text-blue-500'>#universallaw #contradiction #ethics #philosophy #maxim</div>",
                    likes: 152345,
                    date: "January 25, 2025"
                },
                {
                    id: 14,
                    image: "{{ asset('assets/the_formula_of_humanity.webp') }}",
                    caption: "<div class='font-semibold mb-2'>The Three Formulations of the Categorical Imperative<span class=\"text-blue-500\"> • The Formula of Humanity</span></div><div>The Formula of Humanity is one of the key formulations of my categorical imperative. It states: \"Act in such a way that you treat humanity, whether in your own person or in the person of another, always at the same time as an end, never merely as a means.\" This principle emphasizes the inherent dignity and worth of every individual as a rational being. According to my philosophy, people possess intrinsic value simply by virtue of their capacity for rational thought and moral decision-making.</div><div class='mt-3 text-blue-500'>#humanity #dignity #respect #ethics #philosophy</div>",
                    likes: 168742,
                    date: "January 20, 2025"
                },
                {
                    id: 15,
                    image: "{{ asset('assets/the_formula_of_kingdom_ends.webp') }}",
                    caption: "<div class='font-semibold mb-2'>The Three Formulations of the Categorical Imperative<span class=\"text-blue-500\"> • The Formula of the Kingdom of Ends</span></div><div>The Formula of the Kingdom of Ends is another important formulation of my categorical imperative. It reads: \"Act only according to that maxim whereby you can at the same time will that it should become a universal law without contradiction.\" The kingdom of ends refers to where all rational beings are considered related since they reveal moral history for forming a design that advances universal and objective concord. Autonomy is exercised in this moral community where each member is a creator and subject of universal moral laws.</div><div class='mt-3 text-blue-500'>#kingdomofends #community #respect #ethics #philosophy</div>",
                    likes: 157632,
                    date: "January 10, 2025"
                }
            ];

            // Get all post elements
            const postElements = document.querySelectorAll('.aspect-square.cursor-pointer');
            const modal = document.getElementById('postModal');
            const closeModalBtn = document.getElementById('closeModal');
            const modalOverlay = document.getElementById('modalOverlay');
            const modalImage = document.getElementById('modalImage');
            const modalCaption = document.getElementById('modalCaption');
            const modalDate = document.getElementById('modalDate');
            const likeCount = document.getElementById('likeCount');

            // Add click event to each post
            postElements.forEach((post) => {
                post.addEventListener('click', () => {
                    // Get post ID from data attribute
                    const postId = parseInt(post.getAttribute('data-post-id'));

                    // Find the corresponding post data
                    const postData = postsData.find(p => p.id === postId);

                    if (postData) {
                        // Populate modal with post data
                        modalImage.src = postData.image;
                        modalCaption.innerHTML = postData.caption;
                        modalDate.textContent = postData.date;
                        likeCount.textContent = postData.likes.toLocaleString();
                    }

                    // Show modal
                    modal.classList.remove('hidden');
                    document.body.classList.add(
                    'overflow-hidden'); // Prevent scrolling when modal is open

                    // Optional: Get the window size and adjust modal display if needed
                    checkWindowSize();
                });
            });

            // Close modal when clicking the close button or overlay
            closeModalBtn.addEventListener('click', closeModal);
            modalOverlay.addEventListener('click', closeModal);

            function closeModal() {
                modal.classList.add('hidden');
                document.body.classList.remove('overflow-hidden');
            }

            // Close modal when pressing Escape key
            document.addEventListener('keydown', function(e) {
                if (e.key === 'Escape' && !modal.classList.contains('hidden')) {
                    closeModal();
                }
            });

            // Check window size and adjust modal if needed
            function checkWindowSize() {
                // Add responsive handling if the screen is too small for 900px fixed size
                if (window.innerWidth < 1200) {
                    // For small screens, we'll center and scale down the modal
                    document.querySelector('#postModal .relative.bg-black').classList.add('transform', 'scale-75',
                        'origin-center');
                } else {
                    document.querySelector('#postModal .relative.bg-black').classList.remove('transform',
                        'scale-75', 'origin-center');
                }
            }

            // Listen for window resize to adjust modal
            window.addEventListener('resize', function() {
                if (!modal.classList.contains('hidden')) {
                    checkWindowSize();
                }
            });
        });
    </script>
@endsection
