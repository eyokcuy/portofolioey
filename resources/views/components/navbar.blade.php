<div class="flex justify-between items-center w-full">
    <div>
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">{{ config('app.name') }}</h2>
    </div>
    <div class="flex items-center gap-8">
        <a href="{{ url('/') }}#home" class="text-zinc-400 hover:text-pink-400 transition-colors font-semibold text-sm uppercase tracking-wider">Home</a>
        <a href="{{ url('/') }}#skills" class="text-zinc-400 hover:text-pink-400 transition-colors font-semibold text-sm uppercase tracking-wider">Skills</a>
        <a href="{{ url('/') }}#about" class="text-zinc-400 hover:text-pink-400 transition-colors font-semibold text-sm uppercase tracking-wider">About</a>
        <a href="{{ url('/') }}#feedback" class="text-zinc-400 hover:text-pink-400 transition-colors font-semibold text-sm uppercase tracking-wider">Feedbacks</a>
    </div>
</div>
