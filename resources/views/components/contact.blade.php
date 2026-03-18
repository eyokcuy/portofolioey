<section id="contact" class="py-24 px-6 md:px-16 bg-zinc-950/30">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 max-w-7xl mx-auto">
        <!-- Left: Contact Info -->
        <div class="animate-reveal">
            <h2 class="text-4xl md:text-5xl font-bold mb-6">
                Give your <span class="text-pink-400">Feedback</span>
            </h2>
            <div class="w-20 h-1 bg-pink-500 mb-8 rounded-full"></div>
            
            <p class="text-zinc-400 text-lg mb-10 max-w-md italic">
                "I'd love to hear your thoughts. Whether you have a question, a suggestion, or just want to share your experience, your feedback is invaluable."
            </p>

            <div class="space-y-8">
                <div class="flex items-center gap-6">
                    <div class="w-14 h-14 rounded-2xl bg-zinc-900 border border-zinc-800 flex items-center justify-center text-pink-400 shadow-lg shadow-pink-500/5">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="20" height="16" x="2" y="4" rx="2"/><path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"/></svg>
                    </div>
                    <div>
                        <span class="block text-zinc-500 text-sm uppercase tracking-widest font-bold">Email Me</span>
                        <a href="mailto:{{ env('MAIL_FROM_ADDRESS') }}" class="text-white hover:text-pink-400 transition-colors font-semibold">{{ env('MAIL_FROM_ADDRESS') }}</a>
                    </div>
                </div>

                <div class="flex items-center gap-6">
                    <div class="w-14 h-14 rounded-2xl bg-zinc-900 border border-zinc-800 flex items-center justify-center text-pink-400 shadow-lg shadow-pink-500/5">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"/><circle cx="12" cy="10" r="3"/></svg>
                    </div>
                    <div>
                        <span class="block text-zinc-500 text-sm uppercase tracking-widest font-bold">Location</span>
                        <span class="text-white font-semibold">Semarang, Indonesia</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Right: Feedback Form -->
        <div class="animate-reveal" style="animation-delay: 0.3s;">
            <div class="bg-zinc-900/50 backdrop-blur-xl border border-zinc-800 p-8 md:p-10 rounded-3xl shadow-2xl relative overflow-hidden">
                <!-- Success/Error Message Toast (Hidden by default) -->
                <div id="form-message" class="hidden mb-6 p-4 rounded-xl text-sm animate-reveal border"></div>

                <form id="feedback-form" action="{{ route('feedback.store') }}" method="POST" class="space-y-6">
                    @csrf
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label for="name" class="block text-zinc-500 text-sm mb-2 font-medium">Name</label>
                            <input type="text" id="name" name="name" required class="w-full bg-zinc-950/50 border border-zinc-800 rounded-xl px-4 py-3 text-white focus:outline-none focus:border-pink-500/50 transition-colors placeholder:text-zinc-700" placeholder="John Doe">
                        </div>
                        <div>
                            <label for="email" class="block text-zinc-500 text-sm mb-2 font-medium">Email</label>
                            <input type="email" id="email" name="email" required class="w-full bg-zinc-950/50 border border-zinc-800 rounded-xl px-4 py-3 text-white focus:outline-none focus:border-pink-500/50 transition-colors placeholder:text-zinc-700" placeholder="john@example.com">
                        </div>
                    </div>
                    <div>
                        <label for="subject" class="block text-zinc-500 text-sm mb-2 font-medium">Topic (Optional)</label>
                        <input type="text" id="subject" name="subject" class="w-full bg-zinc-950/50 border border-zinc-800 rounded-xl px-4 py-3 text-white focus:outline-none focus:border-pink-500/50 transition-colors placeholder:text-zinc-700" placeholder="About my project...">
                    </div>
                    <div>
                        <label for="message" class="block text-zinc-500 text-sm mb-2 font-medium">Feedback</label>
                        <textarea id="message" name="message" rows="4" required class="w-full bg-zinc-950/50 border border-zinc-800 rounded-xl px-4 py-3 text-white focus:outline-none focus:border-pink-500/50 transition-colors placeholder:text-zinc-700 resize-none" placeholder="Share your thoughts..."></textarea>
                    </div>

                    <button type="submit" id="submit-btn" class="w-full bg-pink-500 text-white font-bold py-4 rounded-xl hover:bg-pink-600 transition-all shadow-lg shadow-pink-500/20 active:scale-95 group flex items-center justify-center gap-2">
                        <span id="btn-text">Submit Feedback</span>
                        <svg id="btn-icon" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="group-hover:translate-x-1 group-hover:-translate-y-1 transition-transform"><line x1="22" y1="2" x2="11" y2="13"/><polygon points="22 2 15 22 11 13 2 9 22 2"/></svg>
                        <!-- Spinner (hidden) -->
                        <svg id="btn-spinner" class="hidden animate-spin h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                            <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                        </svg>
                    </button>
                </form>
            </div>
        </div>

        <script>
            document.getElementById('feedback-form').addEventListener('submit', async function(e) {
                e.preventDefault();
                
                const form = this;
                const btn = document.getElementById('submit-btn');
                const btnText = document.getElementById('btn-text');
                const btnIcon = document.getElementById('btn-icon');
                const btnSpinner = document.getElementById('btn-spinner');
                const messageBox = document.getElementById('form-message');
                
                // Loading State
                btn.disabled = true;
                btnText.textContent = 'Sending...';
                btnIcon.classList.add('hidden');
                btnSpinner.classList.remove('hidden');
                btn.classList.add('opacity-80', 'cursor-not-allowed');

                try {
                    const formData = new FormData(form);
                    const response = await fetch(form.action, {
                        method: 'POST',
                        body: formData,
                        headers: {
                            'X-Requested-With': 'XMLHttpRequest',
                            'Accept': 'application/json'
                        }
                    });

                    const result = await response.json();

                    if (response.ok) {
                        // Success
                        messageBox.textContent = result.message;
                        messageBox.classList.remove('hidden', 'bg-red-500/20', 'bg-yellow-500/20', 'border-red-500/30', 'border-yellow-500/30', 'text-red-400', 'text-yellow-500');
                        messageBox.classList.add('block', 'bg-pink-500/20', 'border-pink-500/30', 'text-pink-400');
                        form.reset();
                        if (window.refreshFeedbackList) window.refreshFeedbackList();
                        startCooldown(60); 
                    } else if (response.status === 429) {
                        // Rate Limit
                        messageBox.textContent = result.message;
                        messageBox.classList.remove('hidden', 'bg-red-500/20', 'bg-pink-500/20', 'border-red-500/30', 'border-pink-500/30', 'text-red-400', 'text-pink-400');
                        messageBox.classList.add('block', 'bg-yellow-500/20', 'border-yellow-500/30', 'text-yellow-500');
                        if (result.remaining) {
                            startCooldown(result.remaining);
                        }
                    } else {
                        // Validation Errors
                        let errorMsg = result.message || 'Something went wrong.';
                        if (result.errors) {
                            errorMsg = Object.values(result.errors).flat().join(' ');
                        }
                        messageBox.textContent = errorMsg;
                        messageBox.classList.remove('hidden', 'bg-pink-500/20', 'bg-yellow-500/20', 'border-pink-500/30', 'border-yellow-500/30', 'text-pink-400', 'text-yellow-500');
                        messageBox.classList.add('block', 'bg-red-500/20', 'border-red-500/30', 'text-red-400');
                    }
                } catch (error) {
                    console.error('Feedback Error:', error);
                    messageBox.textContent = 'Connection error. Please try again.';
                    messageBox.classList.remove('hidden');
                    messageBox.classList.add('block', 'bg-red-500/20', 'border-red-500/30', 'text-red-400');
                } finally {
                    // Only re-enable if NOT in cooldown
                    if (!window.cooldownActive) {
                        btn.disabled = false;
                        btnText.textContent = 'Submit Feedback';
                        btnIcon.classList.remove('hidden');
                        btnSpinner.classList.add('hidden');
                        btn.classList.remove('opacity-80', 'cursor-not-allowed');
                    }
                }
            });

            function startCooldown(seconds) {
                const btn = document.getElementById('submit-btn');
                const btnText = document.getElementById('btn-text');
                const btnIcon = document.getElementById('btn-icon');
                const btnSpinner = document.getElementById('btn-spinner');
                
                window.cooldownActive = true;
                btn.disabled = true;
                btnIcon.classList.add('hidden');
                btnSpinner.classList.add('hidden');
                btn.classList.add('opacity-80', 'cursor-not-allowed');

                let count = seconds;
                const timer = setInterval(() => {
                    btnText.textContent = `Wait (${count}s)`;
                    count--;
                    if (count < 0) {
                        clearInterval(timer);
                        window.cooldownActive = false;
                        btn.disabled = false;
                        btnText.textContent = 'Submit Feedback';
                        btnIcon.classList.remove('hidden');
                        btn.classList.remove('opacity-80', 'cursor-not-allowed');
                    }
                }, 1000);
            }
        </script>
    </div>
</section>
