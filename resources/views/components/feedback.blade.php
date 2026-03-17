<section id="feedback" class="py-24 px-16 relative overflow-hidden">
    <!-- Header -->
    <div class="text-center mb-16 animate-reveal">
        <h2 class="text-4xl md:text-5xl font-bold mb-4">Users <span class="text-pink-400">Feedback</span></h2>
        <div class="w-24 h-1 bg-pink-500 mx-auto rounded-full"></div>
    </div>

    <!-- Feedback Grid / Horizontal Loop -->
    <div class="relative w-full overflow-hidden py-10">
        @if($feedbacks->count() > 0)
            <div class="flex gap-8 animate-scroll-horizontal hover:pause-animation">
                @foreach($feedbacks->merge($feedbacks) as $feedback) {{-- Duplicate for infinite effect --}}
                    <div class="flex-shrink-0 w-[400px] skill-card p-8 rounded-3xl relative">
                        <div class="absolute top-6 right-8 text-pink-500/20">
                            <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="currentColor" viewBox="0 0 24 24"><path d="M14.017 21L14.017 18C14.017 16.8954 14.9124 16 16.017 16H19.017C19.5693 16 20.017 15.5523 20.017 15V9C20.017 8.44772 19.5693 8 19.017 8H16.017C15.4647 8 15.017 8.44772 15.017 9V12C15.017 12.5523 14.5693 13 14.017 13H11.017V21H14.017ZM5.017 21L5.017 18C5.017 16.8954 5.91243 16 7.017 16H10.017C10.5693 16 11.017 15.5523 11.017 15V9C11.017 8.44772 10.5693 8 10.017 8H7.017C6.46472 8 6.017 8.44772 6.017 9V12C6.017 12.5523 5.5693 13 5.017 13H2.017V21H5.017Z"/></svg>
                        </div>
                        <p class="text-zinc-400 italic mb-8 relative z-10 line-clamp-4">
                            "{{ $feedback->message }}"
                        </p>
                        <div class="flex items-center gap-4">
                            <div class="w-10 h-10 rounded-full bg-pink-500/20 flex items-center justify-center font-bold text-pink-400">
                                {{ strtoupper(substr($feedback->name, 0, 1)) }}{{ strtoupper(substr(strrchr($feedback->name, ' ') ?: $feedback->name, 1, 1)) }}
                            </div>
                            <div>
                                <h5 class="text-white font-bold">{{ $feedback->name }}</h5>
                                <p class="text-zinc-500 text-xs">{{ $feedback->subject ?? 'User Feedback' }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <div class="text-center text-zinc-600 italic py-12 animate-reveal">
                No feedback yet. Be the first to share your thoughts below!
            </div>
        @endif
    </div>

    <div class="text-center mt-12 animate-reveal">
        <a href="{{ route('feedback.index') }}" class="group inline-flex items-center gap-2 text-pink-400 font-bold hover:text-pink-300 transition-all text-lg">
            View All Feedbacks
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="group-hover:translate-x-1 transition-transform"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg>
        </a>
    </div>

    <style>
        @keyframes scroll-horizontal {
            0% { transform: translateX(0); }
            100% { transform: translateX(calc(-100% / 2)); }
        }
        .animate-scroll-horizontal {
            display: flex;
            width: max-content;
            animation: scroll-horizontal 30s linear infinite;
        }
        .hover\:pause-animation:hover {
            animation-play-state: paused;
        }
    </style>
</section>
