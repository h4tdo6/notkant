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
            <div class="bg-[#363636] rounded-lg flex items-center px-3 py-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-white" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                </svg>
                <input type="text" id="searchInput" placeholder="Search references..."
                    class="ml-2 flex-1 outline-none bg-transparent text-white">
            </div>
        </div>

        <!-- References Grid with scroll -->
        <div class="max-h-screen overflow-y-auto instagram-scroll">
            <div class="grid grid-cols-1 gap-6 max-w-2xl mx-auto">
                <!-- Primary Sources -->
                <h2 class="text-xl font-bold text-white mb-4" id="primaryHeader">Primary Sources</h2>

                <div id="primarySources">
                    <!-- Reference Item 1 -->
                    <div class="bg-white rounded-lg shadow overflow-hidden mb-6 reference-item">
                        <div class="p-4 flex items-center justify-between">
                            <div class="flex items-center">
                                <div class="h-10 w-10 rounded-full bg-gradient-to-r from-blue-500 to-purple-400 flex items-center justify-center">
                                    <span class="text-black font-bold">IK</span>
                                </div>
                                <div class="ml-3">
                                    <p class="text-black font-semibold text-sm">Cambridge University Press</p>
                                    <p class="text-gray-500 text-xs">Original Publication: 1785</p>
                                </div>
                            </div>
                        </div>
                        <div class="px-4 pb-3">
                            <p class="text-black font-bold text-lg mb-2 reference-title">Groundwork of the Metaphysics of Morals</p>
                            <p class="text-sm text-gray-700 mb-2 reference-author">Kant, I. (1997). <span class="italic">Groundwork of the metaphysics of morals</span> (M. Gregor, Trans.). Cambridge University Press. (Original work published 1785)</p>
                            <p class="text-sm text-gray-600 reference-description">Kant's foundational work establishing his deontological ethical framework and the categorical imperative.</p>
                        </div>
                        <div class="border-t border-gray-100 px-4 py-3 flex justify-end">
                            <button class="bg-blue-500 text-white text-sm font-medium px-4 py-1 rounded-full">Cite</button>
                        </div>
                    </div>

                    <!-- Reference Item 2 -->
                    <div class="bg-white rounded-lg shadow overflow-hidden mb-6 reference-item">
                        <div class="p-4 flex items-center justify-between">
                            <div class="flex items-center">
                                <div class="h-10 w-10 rounded-full bg-gradient-to-r from-blue-500 to-purple-400 flex items-center justify-center">
                                    <span class="text-black font-bold">IK</span>
                                </div>
                                <div class="ml-3">
                                    <p class="text-black font-semibold text-sm">Cambridge University Press</p>
                                    <p class="text-gray-500 text-xs">Original Publication: 1788</p>
                                </div>
                            </div>
                        </div>
                        <div class="px-4 pb-3">
                            <p class="text-black font-bold text-lg mb-2 reference-title">Critique of Practical Reason</p>
                            <p class="text-sm text-gray-700 mb-2 reference-author">Kant, I. (1997). <span class="italic">Critique of practical reason</span> (M. Gregor, Trans.). Cambridge University Press. (Original work published 1788)</p>
                            <p class="text-sm text-gray-600 reference-description">Kant's follow-up to the Groundwork, expanding his moral theory and addressing practical applications of his ethical framework.</p>
                        </div>
                        <div class="border-t border-gray-100 px-4 py-3 flex justify-end">
                            <button class="bg-blue-500 text-white text-sm font-medium px-4 py-1 rounded-full">Cite</button>
                        </div>
                    </div>

                    <!-- Reference Item 3 -->
                    <div class="bg-white rounded-lg shadow overflow-hidden mb-6 reference-item">
                        <div class="p-4 flex items-center justify-between">
                            <div class="flex items-center">
                                <div class="h-10 w-10 rounded-full bg-gradient-to-r from-blue-500 to-purple-400 flex items-center justify-center">
                                    <span class="text-black font-bold">IK</span>
                                </div>
                                <div class="ml-3">
                                    <p class="text-black font-semibold text-sm">Cambridge University Press</p>
                                    <p class="text-gray-500 text-xs">Original Publication: 1797</p>
                                </div>
                            </div>
                        </div>
                        <div class="px-4 pb-3">
                            <p class="text-black font-bold text-lg mb-2 reference-title">The Metaphysics of Morals</p>
                            <p class="text-sm text-gray-700 mb-2 reference-author">Kant, I. (1996). <span class="italic">The metaphysics of morals</span> (M. Gregor, Trans.). Cambridge University Press. (Original work published 1797)</p>
                            <p class="text-sm text-gray-600 reference-description">Kant's mature work on moral philosophy, divided into the "Doctrine of Right" and "Doctrine of Virtue," exploring legal and ethical duties.</p>
                        </div>
                        <div class="border-t border-gray-100 px-4 py-3 flex justify-end">
                            <button class="bg-blue-500 text-white text-sm font-medium px-4 py-1 rounded-full">Cite</button>
                        </div>
                    </div>

                    <!-- Reference Item 4 -->
                    <div class="bg-white rounded-lg shadow overflow-hidden mb-6 reference-item">
                        <div class="p-4 flex items-center justify-between">
                            <div class="flex items-center">
                                <div class="h-10 w-10 rounded-full bg-gradient-to-r from-blue-500 to-purple-400 flex items-center justify-center">
                                    <span class="text-black font-bold">IK</span>
                                </div>
                                <div class="ml-3">
                                    <p class="text-black font-semibold text-sm">Cambridge University Press</p>
                                    <p class="text-gray-500 text-xs">Collected Lectures</p>
                                </div>
                            </div>
                        </div>
                        <div class="px-4 pb-3">
                            <p class="text-black font-bold text-lg mb-2 reference-title">Lectures on Ethics</p>
                            <p class="text-sm text-gray-700 mb-2 reference-author">Kant, I. (1997). <span class="italic">Lectures on ethics</span> (P. Heath, Trans.; J. B. Schneewind, Ed.). Cambridge University Press.</p>
                            <p class="text-sm text-gray-600 reference-description">A collection of Kant's lecture notes on ethics, providing insight into his teaching and development of moral philosophy.</p>
                        </div>
                        <div class="border-t border-gray-100 px-4 py-3 flex justify-end">
                            <button class="bg-blue-500 text-white text-sm font-medium px-4 py-1 rounded-full">Cite</button>
                        </div>
                    </div>
                </div>

                <!-- Secondary Sources -->
                <h2 class="text-xl font-bold text-white mb-4 mt-8" id="secondaryHeader">Secondary Sources</h2>

                <div id="secondarySources">
                    <!-- Reference Item 5 -->
                    <div class="bg-white rounded-lg shadow overflow-hidden mb-6 reference-item">
                        <div class="p-4 flex items-center justify-between">
                            <div class="flex items-center">
                                <div class="h-10 w-10 rounded-full bg-gradient-to-r from-green-500 to-teal-400 flex items-center justify-center">
                                    <span class="text-black font-bold">CK</span>
                                </div>
                                <div class="ml-3">
                                    <p class="text-black font-semibold text-sm">Cambridge University Press</p>
                                    <p class="text-gray-500 text-xs">Academic Publication</p>
                                </div>
                            </div>
                        </div>
                        <div class="px-4 pb-3">
                            <p class="text-black font-bold text-lg mb-2 reference-title">Creating the Kingdom of Ends</p>
                            <p class="text-sm text-gray-700 mb-2 reference-author">Korsgaard, C. M. (1996). <span class="italic">Creating the kingdom of ends</span>. Cambridge University Press.</p>
                            <p class="text-sm text-gray-600 reference-description">An influential contemporary interpretation of Kant's moral philosophy, focusing on autonomy and the kingdom of ends.</p>
                        </div>
                        <div class="border-t border-gray-100 px-4 py-3 flex justify-end">
                            <button class="bg-blue-500 text-white text-sm font-medium px-4 py-1 rounded-full">Cite</button>
                        </div>
                    </div>

                    <!-- Reference Item 6 -->
                    <div class="bg-white rounded-lg shadow overflow-hidden mb-6 reference-item">
                        <div class="p-4 flex items-center justify-between">
                            <div class="flex items-center">
                                <div class="h-10 w-10 rounded-full bg-gradient-to-r from-green-500 to-teal-400 flex items-center justify-center">
                                    <span class="text-black font-bold">AW</span>
                                </div>
                                <div class="ml-3">
                                    <p class="text-black font-semibold text-sm">Cambridge University Press</p>
                                    <p class="text-gray-500 text-xs">Academic Publication</p>
                                </div>
                            </div>
                        </div>
                        <div class="px-4 pb-3">
                            <p class="text-black font-bold text-lg mb-2 reference-title">Kant's Ethical Thought</p>
                            <p class="text-sm text-gray-700 mb-2 reference-author">Wood, A. W. (1999). <span class="italic">Kant's ethical thought</span>. Cambridge University Press.</p>
                            <p class="text-sm text-gray-600 reference-description">A comprehensive analysis of Kant's ethical philosophy, exploring its foundations and implications for contemporary ethics.</p>
                        </div>
                        <div class="border-t border-gray-100 px-4 py-3 flex justify-end">
                            <button class="bg-blue-500 text-white text-sm font-medium px-4 py-1 rounded-full">Cite</button>
                        </div>
                    </div>

                    <!-- Reference Item 7 -->
                    <div class="bg-white rounded-lg shadow overflow-hidden mb-6 reference-item">
                        <div class="p-4 flex items-center justify-between">
                            <div class="flex items-center">
                                <div class="h-10 w-10 rounded-full bg-gradient-to-r from-green-500 to-teal-400 flex items-center justify-center">
                                    <span class="text-black font-bold">OO</span>
                                </div>
                                <div class="ml-3">
                                    <p class="text-black font-semibold text-sm">Columbia University Press</p>
                                    <p class="text-gray-500 text-xs">Academic Publication</p>
                                </div>
                            </div>
                        </div>
                        <div class="px-4 pb-3">
                            <p class="text-black font-bold text-lg mb-2 reference-title">Acting on Principle: An Essay on Kantian Ethics</p>
                            <p class="text-sm text-gray-700 mb-2 reference-author">O'Neill, O. (1975). <span class="italic">Acting on principle: An essay on Kantian ethics</span>. Columbia University Press.</p>
                            <p class="text-sm text-gray-600 reference-description">A critical examination of Kant's moral principles and their application in practical ethical reasoning.</p>
                        </div>
                        <div class="border-t border-gray-100 px-4 py-3 flex justify-end">
                            <button class="bg-blue-500 text-white text-sm font-medium px-4 py-1 rounded-full">Cite</button>
                        </div>
                    </div>

                    <!-- Reference Item 8 -->
                    <div class="bg-white rounded-lg shadow overflow-hidden mb-6 reference-item">
                        <div class="p-4 flex items-center justify-between">
                            <div class="flex items-center">
                                <div class="h-10 w-10 rounded-full bg-gradient-to-r from-green-500 to-teal-400 flex items-center justify-center">
                                    <span class="text-black font-bold">JR</span>
                                </div>
                                <div class="ml-3">
                                    <p class="text-black font-semibold text-sm">Harvard University Press</p>
                                    <p class="text-gray-500 text-xs">Academic Publication</p>
                                </div>
                            </div>
                        </div>
                        <div class="px-4 pb-3">
                            <p class="text-black font-bold text-lg mb-2 reference-title">Lectures on the History of Moral Philosophy</p>
                            <p class="text-sm text-gray-700 mb-2 reference-author">Rawls, J. (2000). <span class="italic">Lectures on the history of moral philosophy</span>. Harvard University Press.</p>
                            <p class="text-sm text-gray-600 reference-description">Includes significant sections on Kant's moral philosophy from the perspective of political philosopher John Rawls.</p>
                        </div>
                        <div class="border-t border-gray-100 px-4 py-3 flex justify-end">
                            <button class="bg-blue-500 text-white text-sm font-medium px-4 py-1 rounded-full">Cite</button>
                        </div>
                    </div>

                    <!-- Reference Item 9 -->
                    <div class="bg-white rounded-lg shadow overflow-hidden mb-[300px] reference-item">
                        <div class="p-4 flex items-center justify-between">
                            <div class="flex items-center">
                                <div class="h-10 w-10 rounded-full bg-gradient-to-r from-green-500 to-teal-400 flex items-center justify-center">
                                    <span class="text-black font-bold">HP</span>
                                </div>
                                <div class="ml-3">
                                    <p class="text-black font-semibold text-sm">Hutchinson University Library</p>
                                    <p class="text-gray-500 text-xs">Academic Publication</p>
                                </div>
                            </div>
                        </div>
                        <div class="px-4 pb-3">
                            <p class="text-black font-bold text-lg mb-2 reference-title">The Moral Law: Kant's Groundwork of the Metaphysics of Morals</p>
                            <p class="text-sm text-gray-700 mb-2 reference-author">Paton, H. J. (1948). <span class="italic">The moral law: Kant's groundwork of the metaphysics of morals</span>. Hutchinson University Library.</p>
                            <p class="text-sm text-gray-600 reference-description">A classic commentary and translation of Kant's Groundwork, influential in Anglo-American Kant scholarship.</p>
                        </div>
                        <div class="border-t border-gray-100 px-4 py-3 flex justify-end">
                            <button class="bg-blue-500 text-white text-sm font-medium px-4 py-1 rounded-full">Cite</button>
                        </div>
                    </div>
                </div>

                <!-- No results message -->
                <div id="noResults" class="hidden text-center py-8">
                    <p class="text-white text-lg">No matching references found</p>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const searchInput = document.getElementById('searchInput');
    const referenceItems = document.querySelectorAll('.reference-item');
    const primaryHeader = document.getElementById('primaryHeader');
    const secondaryHeader = document.getElementById('secondaryHeader');
    const primarySources = document.getElementById('primarySources');
    const secondarySources = document.getElementById('secondarySources');
    const noResults = document.getElementById('noResults');

    searchInput.addEventListener('input', function() {
        const searchTerm = this.value.toLowerCase().trim();
        let primaryMatches = 0;
        let secondaryMatches = 0;

        referenceItems.forEach(item => {
            const title = item.querySelector('.reference-title').textContent.toLowerCase();
            const author = item.querySelector('.reference-author').textContent.toLowerCase();
            const description = item.querySelector('.reference-description').textContent.toLowerCase();

            // Check if any of the text content matches the search term
            const isMatch = title.includes(searchTerm) ||
                         author.includes(searchTerm) ||
                         description.includes(searchTerm);

            // Show or hide the item based on match
            if (isMatch) {
                item.style.display = 'block';
                // Count matches in each category
                if (item.closest('#primarySources')) {
                    primaryMatches++;
                } else if (item.closest('#secondarySources')) {
                    secondaryMatches++;
                }
            } else {
                item.style.display = 'none';
            }
        });

        // Show/hide section headers and no results message
        primaryHeader.style.display = primaryMatches > 0 ? 'block' : 'none';
        secondaryHeader.style.display = secondaryMatches > 0 ? 'block' : 'none';
        noResults.style.display = (primaryMatches === 0 && secondaryMatches === 0) ? 'block' : 'none';
    });

    // Clear search when 'x' is clicked (for browsers that support it)
    searchInput.addEventListener('search', function() {
        if (this.value === '') {
            // Reset the display of all items
            referenceItems.forEach(item => {
                item.style.display = 'block';
            });
            primaryHeader.style.display = 'block';
            secondaryHeader.style.display = 'block';
            noResults.style.display = 'none';
        }
    });
});
</script>
@endsection
