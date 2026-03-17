<div id="home" class="w-full h-[500px] md:h-[750px] grid grid-cols-1 md:grid-cols-2 items-center px-16 relative overflow-hidden">
    <!-- Background Effects -->
    <div class="hero-glow"></div>
    <canvas id="hero-particles" class="absolute inset-0 pointer-events-none z-0"></canvas>

    <!-- Left Column: Text Content -->
    <div class="flex flex-col justify-center gap-4 z-10">
        <h1 class="text-6xl font-bold animate-reveal" style="animation-delay: 0.1s;"><span class="text-pink-400">Hello!</span> I'm Rahmat Fushiguro</h1>
        <p class="text-2xl font-bold animate-reveal" style="animation-delay: 0.2s;">I'm a junior web developer</p>
        <div class="animate-reveal" style="animation-delay: 0.3s;">
           <a href="#" class="bg-pink-400 text-white px-6 py-3 rounded-full font-bold hover:bg-pink-500 transition-colors inline-block text-center">Download CV</a>
        </div>
        <!-- Sosial Icon -->
        <div class="flex gap-4 mt-2 mb-4 animate-reveal" style="animation-delay: 0.4s;">
            <!-- Instagram -->
            <a href="#" class="w-10 h-10 rounded-full bg-zinc-900 border border-zinc-800 flex items-center justify-center text-zinc-400 hover:text-pink-400 hover:border-pink-500/50 transition-all hover:-translate-y-1 shadow-lg">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="20" height="20" x="2" y="2" rx="5" ry="5"/><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"/><line x1="17.5" x2="17.51" y1="6.5" y2="6.5"/></svg>
            </a>
            <!-- GitHub -->
            <a href="#" class="w-10 h-10 rounded-full bg-zinc-900 border border-zinc-800 flex items-center justify-center text-zinc-400 hover:text-pink-400 hover:border-pink-500/50 transition-all hover:-translate-y-1 shadow-lg">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M15 22v-4a4.8 4.8 0 0 0-1-3.5c3 0 6-2 6-5.5.08-1.25-.27-2.48-1-3.5.28-1.15.28-2.35 0-3.5 0 0-1 0-3 1.5-2.64-.5-5.36-.5-8 0C6 2 5 2 5 2c-.3 1.15-.3 2.35 0 3.5A5.403 5.403 0 0 0 4 9c0 3.5 3 5.5 6 5.5-.39.49-.68 1.05-.85 1.65-.17.6-.22 1.23-.15 1.85v4"/><path d="M9 18c-4.51 2-5-3-7-2"/></svg>
            </a>
            <!-- LinkedIn -->
            <a href="#" class="w-10 h-10 rounded-full bg-zinc-900 border border-zinc-800 flex items-center justify-center text-zinc-400 hover:text-pink-400 hover:border-pink-500/50 transition-all hover:-translate-y-1 shadow-lg">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"/><rect width="4" height="12" x="2" y="9"/><circle cx="4" cy="4" r="2"/></svg>
            </a>
        </div>
        
        <div class="animate-reveal" style="animation-delay: 0.5s;">
            <!-- Custom Spotify-style MP3 Player -->
            <div class="music-player-container group/player relative overflow-hidden bg-zinc-900/40 backdrop-blur-xl border border-white/5 rounded-2xl p-4 flex items-center gap-4 hover:border-pink-500/30 transition-all duration-500 shadow-2xl">
                <!-- Album Art -->
                <div class="relative w-16 h-16 md:w-20 md:h-20 flex-shrink-0">
                    <img src="{{ asset('img/album_art.png') }}" class="w-full h-full object-cover rounded-lg shadow-lg" alt="Album Art">
                    <div class="absolute inset-0 bg-pink-500/20 group-hover/player:bg-pink-500/10 transition-colors rounded-lg"></div>
                </div>

                <!-- Controls & Info -->
                <div class="flex-1 flex flex-col gap-2 min-w-0">
                    <div class="flex items-center justify-between">
                        <div class="min-w-0">
                            <h4 class="text-white font-bold text-sm truncate">Midnight Cyberwave</h4>
                            <p class="text-zinc-500 text-xs truncate">Rahmat Fushiguro ft. Gemini AI</p>
                        </div>
                        <div class="flex items-center gap-3">
                            <button id="prev-track" class="text-zinc-500 hover:text-pink-400 transition-colors">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="19 20 9 12 19 4 19 20"/><line x1="5" y1="19" x2="5" y2="5"/></svg>
                            </button>
                            <button id="play-pause" class="w-9 h-9 md:w-10 md:h-10 bg-white rounded-full flex items-center justify-center text-black hover:scale-105 transition-transform active:scale-95 shadow-lg">
                                <svg id="play-icon" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="currentColor" stroke="none"><polygon points="5 3 19 12 5 21 5 3"/></svg>
                                <svg id="pause-icon" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="currentColor" stroke="none" class="hidden"><rect x="6" y="4" width="4" height="16"/><rect x="14" y="4" width="4" height="16"/></svg>
                            </button>
                            <button id="next-track" class="text-zinc-500 hover:text-pink-400 transition-colors">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="5 4 15 12 5 20 5 4"/><line x1="19" y1="5" x2="19" y2="19"/></svg>
                            </button>
                        </div>
                    </div>

                    <!-- Progress Bar -->
                    <div class="flex flex-col gap-1">
                        <div class="relative h-1.5 w-full bg-zinc-800 rounded-full cursor-pointer group/bar" id="progress-container">
                            <div class="absolute inset-0 bg-pink-500/20 blur-[2px] opacity-0 group-hover/bar:opacity-100 transition-opacity rounded-full"></div>
                            <div id="progress-bar" class="absolute top-0 left-0 h-full bg-pink-500 rounded-full w-0 transition-[width] duration-100 relative shadow-[0_0_10px_rgba(236,72,153,0.5)]">
                                <div class="absolute right-0 top-1/2 -translate-y-1/2 w-3 h-3 bg-white rounded-full scale-0 group-hover/bar:scale-100 transition-transform shadow-md"></div>
                            </div>
                        </div>
                        <div class="flex justify-between text-[10px] text-zinc-600 font-medium">
                            <span id="current-time">0:00</span>
                            <span id="duration">3:24</span>
                        </div>
                    </div>
                </div>

                <audio id="main-audio" preload="metadata" src="https://www.soundhelix.com/examples/mp3/SoundHelix-Song-17.mp3"></audio>
            </div>
        </div>
        <!--   -->
    </div>

    <!-- Right Column: Image Slider with Poker Fan Effect -->
    
</div>

<script>
    (function() {
        // --- Particle System Script ---
        const canvas = document.getElementById('hero-particles');
        const ctx = canvas.getContext('2d');
        const container = document.getElementById('home');
        
        let particles = [];
        let mouse = { x: null, y: null };
        
        function init() {
            if (!canvas || !container) return;
            canvas.width = container.offsetWidth;
            canvas.height = container.offsetHeight;
            particles = [];
            const numberOfParticles = (canvas.width * canvas.height) / 15000;
            for (let i = 0; i < numberOfParticles; i++) {
                particles.push(new Particle());
            }
        }
        
        class Particle {
            constructor() {
                this.x = Math.random() * canvas.width;
                this.y = Math.random() * canvas.height;
                this.size = Math.random() * 3 + 1;
                this.speedX = (Math.random() - 0.5) * 0.8;
                this.speedY = (Math.random() - 0.5) * 0.8;
                this.baseX = this.x;
                this.baseY = this.y;
                this.density = (Math.random() * 30) + 1;
            }
            draw() {
                ctx.fillStyle = 'rgba(244, 144, 182, 0.4)';
                ctx.beginPath();
                ctx.arc(this.x, this.y, this.size, 0, Math.PI * 2);
                ctx.closePath();
                ctx.fill();
            }
            update() {
                if (mouse.x != null) {
                    let dx = mouse.x - this.x;
                    let dy = mouse.y - this.y;
                    let distance = Math.sqrt(dx * dx + dy * dy);
                    let forceDirectionX = dx / distance;
                    let forceDirectionY = dy / distance;
                    let maxDistance = 150;
                    let force = (maxDistance - distance) / maxDistance;
                    let directionX = forceDirectionX * force * this.density;
                    let directionY = forceDirectionY * force * this.density;
                    
                    if (distance < maxDistance) {
                        this.x -= directionX;
                        this.y -= directionY;
                    } else {
                        if (this.x !== this.baseX) {
                            let dx = this.x - this.baseX;
                            this.x -= dx / 15;
                        }
                        if (this.y !== this.baseY) {
                            let dy = this.y - this.baseY;
                            this.y -= dy / 15;
                        }
                    }
                }

                this.x += this.speedX;
                this.y += this.speedY;
                this.baseX += this.speedX;
                this.baseY += this.speedY;

                if (this.x > canvas.width) { this.x = 0; this.baseX = 0; }
                else if (this.x < 0) { this.x = canvas.width; this.baseX = canvas.width; }
                if (this.y > canvas.height) { this.y = 0; this.baseY = 0; }
                else if (this.y < 0) { this.y = canvas.height; this.baseY = canvas.height; }
            }
        }
        
        function animate() {
            ctx.clearRect(0, 0, canvas.width, canvas.height);
            for (let i = 0; i < particles.length; i++) {
                particles[i].draw();
                particles[i].update();
            }
            requestAnimationFrame(animate);
        }
        
        container.addEventListener('mousemove', (e) => {
            const rect = canvas.getBoundingClientRect();
            mouse.x = e.clientX - rect.left;
            mouse.y = e.clientY - rect.top;
        });
        
        container.addEventListener('mouseleave', () => {
            mouse.x = null;
            mouse.y = null;
        });
        
        window.addEventListener('resize', init);
        
        init();
        animate();

        // --- Slider Logic ---
        const slides = document.querySelectorAll('.slide');
        const dots = document.querySelectorAll('.dot');
        let currentSlide = 0;

        function updateSlider() {
            slides.forEach((slide, index) => {
                slide.style.opacity = index === currentSlide ? '1' : '0';
            });
            dots.forEach((dot, index) => {
                dot.style.backgroundColor = index === currentSlide ? 'white' : 'rgba(255, 255, 255, 0.3)';
            });
        }

        function nextSlide() {
            currentSlide = (currentSlide + 1) % slides.length;
            updateSlider();
        }

        // Auto slide every 5 seconds
        setInterval(nextSlide, 5000);
        updateSlider(); // Initial state

        // --- Music Player Logic ---
        const audio = document.getElementById('main-audio');
        const playBtn = document.getElementById('play-pause');
        const playIcon = document.getElementById('play-icon');
        const pauseIcon = document.getElementById('pause-icon');
        const progressBar = document.getElementById('progress-bar');
        const progressContainer = document.getElementById('progress-container');
        const currentTimeEl = document.getElementById('current-time');
        const durationEl = document.getElementById('duration');

        if (audio && playBtn) {
            let isPlaying = false;

            function togglePlay() {
                if (isPlaying) {
                    audio.pause();
                } else {
                    audio.play();
                }
            }

            audio.addEventListener('play', () => {
                isPlaying = true;
                playIcon.classList.add('hidden');
                pauseIcon.classList.remove('hidden');
            });

            audio.addEventListener('pause', () => {
                isPlaying = false;
                playIcon.classList.remove('hidden');
                pauseIcon.classList.add('hidden');
            });

            playBtn.addEventListener('click', togglePlay);

            // Update Time and Progress Bar
            audio.addEventListener('timeupdate', (e) => {
                const { currentTime, duration } = e.srcElement;
                if (!duration) return;
                
                const progressPercent = (currentTime / duration) * 100;
                progressBar.style.width = `${progressPercent}%`;

                // Calculate time
                let curMin = Math.floor(currentTime / 60);
                let curSec = Math.floor(currentTime % 60);
                if (curSec < 10) curSec = `0${curSec}`;
                currentTimeEl.innerText = `${curMin}:${curSec}`;
            });

            // Set Duration
            audio.addEventListener('loadedmetadata', () => {
                let totalMin = Math.floor(audio.duration / 60);
                let totalSec = Math.floor(audio.duration % 60);
                if (totalSec < 10) totalSec = `0${totalSec}`;
                durationEl.innerText = `${totalMin}:${totalSec}`;
            });

            // Seek functionality
            progressContainer.addEventListener('click', (e) => {
                const width = progressContainer.clientWidth;
                const clickX = e.offsetX;
                const duration = audio.duration;
                audio.currentTime = (clickX / width) * duration;
            });

            // End behavior
            audio.addEventListener('ended', () => {
                audio.currentTime = 0;
                isPlaying = false;
                playIcon.classList.remove('hidden');
                pauseIcon.classList.add('hidden');
            });
        }
    })();
</script>