<div class="flex justify-between items-center w-full relative">
    <a href="{{ url('/') }}" class="flex items-center group">
        <img src="{{ asset('img/iconweb.jpeg') }}" alt="Icon" class="h-10 w-10 object-cover rounded-xl group-hover:border-pink-500/50 transition-all duration-300 shadow-lg">
    </a>

    <!-- Desktop Menu -->
    <div class="hidden md:flex items-center gap-8">
        <a href="{{ url('/') }}#home" class="text-zinc-400 hover:text-pink-400 transition-all font-semibold text-sm uppercase tracking-wider hover:-translate-y-0.5">Home</a>
        <a href="{{ url('/') }}#skills" class="text-zinc-400 hover:text-pink-400 transition-all font-semibold text-sm uppercase tracking-wider hover:-translate-y-0.5">Skills</a>
        <a href="{{ url('/') }}#about" class="text-zinc-400 hover:text-pink-400 transition-all font-semibold text-sm uppercase tracking-wider hover:-translate-y-0.5">About</a>
        <a href="{{ url('/') }}#feedback" class="text-zinc-400 hover:text-pink-400 transition-all font-semibold text-sm uppercase tracking-wider hover:-translate-y-0.5">Feedbacks</a>
        <a href="{{ url('/') }}#contact" class="bg-pink-500 text-white px-5 py-2 rounded-full font-bold text-sm hover:bg-pink-600 transition-all shadow-lg shadow-pink-500/20 active:scale-95">Contact</a>
    </div>

    <!-- Mobile Menu Button -->
    <button id="mobile-menu-btn" class="md:hidden text-zinc-400 hover:text-white p-2 transition-colors z-50">
        <svg id="menu-icon-open" xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="4" x2="20" y1="12" y2="12"/><line x1="4" x2="20" y1="6" y2="6"/><line x1="4" x2="20" y1="18" y2="18"/></svg>
        <svg id="menu-icon-close" class="hidden" xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="18" x2="6" y1="6" y2="18"/><line x1="6" x2="18" y1="6" y2="18"/></svg>
    </button>

    <!-- Mobile Menu Dropdown -->
    <div id="mobile-menu" class="hidden fixed top-[60px] left-0 right-0 bg-black border-b border-white/10 p-4 flex-col gap-1 shadow-2xl z-[99999] animate-in fade-in slide-in-from-top-2 duration-200">
        <a href="{{ url('/') }}#home" class="mobile-nav-link text-sm font-bold text-zinc-300 hover:text-pink-400 transition-colors py-4 px-4 border-b border-white/5">Home</a>
        <a href="{{ url('/') }}#skills" class="mobile-nav-link text-sm font-bold text-zinc-300 hover:text-pink-400 transition-colors py-4 px-4 border-b border-white/5">Skills</a>
        <a href="{{ url('/') }}#about" class="mobile-nav-link text-sm font-bold text-zinc-300 hover:text-pink-400 transition-colors py-4 px-4 border-b border-white/5">About Me</a>
        <a href="{{ url('/') }}#feedback" class="mobile-nav-link text-sm font-bold text-zinc-300 hover:text-pink-400 transition-colors py-4 px-4 border-b border-white/5">Feedbacks</a>
        <a href="{{ url('/') }}#contact" class="mobile-nav-link text-sm font-bold text-pink-400 transition-colors py-4 px-4">Contact</a>
    </div>
</div>

<script>
    (function() {
        const btn = document.getElementById('mobile-menu-btn');
        const menu = document.getElementById('mobile-menu');
        const openIcon = document.getElementById('menu-icon-open');
        const closeIcon = document.getElementById('menu-icon-close');
        const links = document.querySelectorAll('.mobile-nav-link');
        let isOpen = false;

        function toggleMenu() {
            isOpen = !isOpen;
            if (isOpen) {
                menu.classList.remove('hidden');
                menu.classList.add('flex');
                openIcon.classList.add('hidden');
                closeIcon.classList.remove('hidden');
            } else {
                menu.classList.remove('flex');
                menu.classList.add('hidden');
                openIcon.classList.remove('hidden');
                closeIcon.classList.add('hidden');
            }
        }

        if (btn) btn.addEventListener('click', (e) => {
            e.stopPropagation();
            toggleMenu();
        });
        
        links.forEach(link => link.addEventListener('click', () => {
            if (isOpen) toggleMenu();
        }));
        
        // Close menu when clicking outside
        document.addEventListener('click', (e) => {
            if (isOpen && !menu.contains(e.target) && !btn.contains(e.target)) {
                toggleMenu();
            }
        });
    })();
</script>
