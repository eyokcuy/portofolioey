<x-layouts.app>
    <x-slot:title>All User Feedback</x-slot:title>

    <x-slot:header>
        <x-navbar />
    </x-slot:header>

    <div class="py-24 px-16 max-w-7xl mx-auto min-h-screen">
        <!-- Header -->
        <div class="mb-16 animate-reveal">
            <a href="{{ url('/') }}" class="inline-flex items-center gap-2 text-pink-400 hover:text-pink-300 transition-colors mb-8 group">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="group-hover:-translate-x-1 transition-transform"><path d="m15 18-6-6 6-6"/></svg>
                Back to Home
            </a>
            <h1 class="text-4xl md:text-6xl font-bold italic mb-4">
                What People <span class="text-pink-400">Say</span>
            </h1>
            <div class="w-32 h-1.5 bg-pink-500 rounded-full"></div>
        </div>

        @if($feedbacks->count() > 0)
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach($feedbacks as $feedback)
                    <div class="animate-reveal skill-card p-8 rounded-3xl relative h-full flex flex-col">
                        <div class="absolute top-6 right-8 text-pink-500/20">
                            <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="currentColor" viewBox="0 0 24 24"><path d="M14.017 21L14.017 18C14.017 16.8954 14.9124 16 16.017 16H19.017C19.5693 16 20.017 15.5523 20.017 15V9C20.017 8.44772 19.5693 8 19.017 8H16.017C15.4647 8 15.017 8.44772 15.017 9V12C15.017 12.5523 14.5693 13 14.017 13H11.017V21H14.017ZM5.017 21L5.017 18C5.017 16.8954 5.91243 16 7.017 16H10.017C10.5693 16 11.017 15.5523 11.017 15V9C11.017 8.44772 10.5693 8 10.017 8H7.017C6.46472 8 6.017 8.44772 6.017 9V12C6.017 12.5523 5.5693 13 5.017 13H2.017V21H5.017Z"/></svg>
                        </div>
                        <p class="text-zinc-300 italic mb-10 relative z-10 flex-grow text-lg leading-relaxed">
                            "{{ $feedback->message }}"
                        </p>
                        <div class="flex items-center gap-4 border-t border-zinc-800/50 pt-6">
                            <div class="w-12 h-12 rounded-full bg-pink-500/20 flex items-center justify-center font-bold text-pink-400 text-xl">
                                {{ strtoupper(substr($feedback->name, 0, 1)) }}{{ strtoupper(substr(strrchr($feedback->name, ' ') ?: $feedback->name, 1, 1)) }}
                            </div>
                            <div>
                                <h5 class="text-white font-bold text-lg">{{ $feedback->name }}</h5>
                                <p class="text-zinc-500 text-sm">{{ $feedback->subject ?? 'Universal User' }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Pagination -->
            <div class="mt-16 text-zinc-400">
                {{ $feedbacks->links() }}
            </div>
        @else
            <div class="text-center py-20 bg-zinc-900/30 rounded-3xl border border-zinc-800/50">
                <p class="text-zinc-500 italic text-xl">No one has spoken yet. Be the first!</p>
                <a href="{{ url('/') }}#contact" class="mt-8 inline-block text-pink-400 font-bold hover:underline underline-offset-8 transition-all">
                    Go to Feedback Form
                </a>
            </div>
        @endif
    </div>

    <x-slot:footer>
        <x-footer />
    </x-slot:footer>
</x-layouts.app>
