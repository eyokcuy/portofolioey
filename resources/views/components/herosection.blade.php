<div id="home" class="w-full min-h-[600px] md:h-[750px] grid grid-cols-1 md:grid-cols-2 items-center px-6 md:px-16 py-20 md:py-0 relative overflow-hidden z-0">
    <!-- Background Effects -->
    <div class="hero-glow"></div>
    <canvas id="hero-particles" class="absolute inset-0 pointer-events-none z-0"></canvas>

    <!-- Left Column: Text Content -->
    <div class="flex flex-col justify-center items-center md:items-start text-center md:text-left gap-4 z-10">
        <h1 class="text-4xl md:text-6xl font-bold animate-reveal min-h-[1.2em]" style="animation-delay: 0.1s;">
            <span id="typing-name"></span>
        </h1>
        <p class="text-xl md:text-2xl font-bold animate-reveal min-h-[1.5em]" style="animation-delay: 0.2s;">
            <span id="typing-text" class="text-pink-400 border-r-2 border-pink-500/50 pr-1 cursor-blink"></span>
        </p>
        <div class="animate-reveal" style="animation-delay: 0.3s;">
           <a href="#" class="bg-pink-400 text-white px-8 py-4 rounded-full font-bold hover:bg-pink-500 transition-all hover:scale-105 active:scale-95 shadow-xl shadow-pink-500/20 inline-block text-center mt-2">Download CV</a>
        </div>
        <!-- Sosial Icon -->
        <div class="flex gap-4 mt-2 mb-4 animate-reveal" style="animation-delay: 0.4s;">
            <!-- Instagram -->
            <a href="#" class="w-12 h-12 rounded-full bg-zinc-900 border border-zinc-800 flex items-center justify-center text-zinc-400 hover:text-pink-400 hover:border-pink-500/50 transition-all hover:-translate-y-1 shadow-lg">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="20" height="20" x="2" y="2" rx="5" ry="5"/><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"/><line x1="17.5" x2="17.51" y1="6.5" y2="6.5"/></svg>
            </a>
            <!-- GitHub -->
            <a href="#" class="w-12 h-12 rounded-full bg-zinc-900 border border-zinc-800 flex items-center justify-center text-zinc-400 hover:text-pink-400 hover:border-pink-500/50 transition-all hover:-translate-y-1 shadow-lg">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M15 22v-4a4.8 4.8 0 0 0-1-3.5c3 0 6-2 6-5.5.08-1.25-.27-2.48-1-3.5.28-1.15.28-2.35 0-3.5 0 0-1 0-3 1.5-2.64-.5-5.36-.5-8 0C6 2 5 2 5 2c-.3 1.15-.3 2.35 0 3.5A5.403 5.403 0 0 0 4 9c0 3.5 3 5.5 6 5.5-.39.49-.68 1.05-.85 1.65-.17.6-.22 1.23-.15 1.85v4"/><path d="M9 18c-4.51 2-5-3-7-2"/></svg>
            </a>
            <!-- LinkedIn -->
            <a href="#" class="w-12 h-12 rounded-full bg-zinc-900 border border-zinc-800 flex items-center justify-center text-zinc-400 hover:text-pink-400 hover:border-pink-500/50 transition-all hover:-translate-y-1 shadow-lg">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"/><rect width="4" height="12" x="2" y="9"/><circle cx="4" cy="4" r="2"/></svg>
            </a>
        </div>
        
        <div class="animate-reveal w-full flex justify-center md:justify-start" style="animation-delay: 0.5s;">
            <!-- Custom Spotify-style MP3 Player (Compact) -->
            <div class="music-player-container group/player relative overflow-hidden bg-zinc-900/40 backdrop-blur-xl border border-white/5 rounded-3xl p-4 flex flex-col gap-3 hover:border-pink-500/30 transition-all duration-500 shadow-2xl w-full max-w-[320px]">
                <div class="flex items-center gap-4">
                    <!-- Album Art -->
                    <div class="relative w-14 h-14 flex-shrink-0">
                        <img src="{{ asset('img/foto.jpeg') }}" class="w-full h-full object-cover rounded-xl shadow-lg" alt="Album Art">
                        <div class="absolute inset-0 bg-pink-500/20 group-hover/player:bg-pink-500/10 transition-colors rounded-xl"></div>
                    </div>

                    <!-- Info -->
                    <div class="min-w-0 flex-1">
                        <h4 class="text-white font-bold text-sm truncate">Kane Music</h4>
                        <p class="text-zinc-500 text-[10px] truncate">{{ env('APP_NAME') }} Original</p>
                    </div>
                    
                    <!-- Small Play Button (Top Right) -->
                    <button id="play-pause" class="w-10 h-10 bg-white rounded-full flex items-center justify-center text-black hover:scale-105 transition-transform active:scale-95 shadow-lg flex-shrink-0">
                        <svg id="play-icon" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="currentColor" stroke="none"><polygon points="5 3 19 12 5 21 5 3"/></svg>
                        <svg id="pause-icon" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="currentColor" stroke="none" class="hidden"><rect x="6" y="4" width="4" height="16"/><rect x="14" y="4" width="4" height="16"/></svg>
                    </button>
                </div>

                <!-- Bottom: Visualizer & Progress -->
                <div class="flex flex-col gap-2">
                    <div class="h-8 w-full flex items-end justify-center gap-[2px] px-2 opacity-50">
                        <canvas id="visualizer-canvas" class="w-full h-full"></canvas>
                    </div>
                    <div class="flex flex-col gap-1">
                        <!-- Progress Area with larger hit target -->
                        <div class="relative h-5 w-full flex items-center cursor-pointer group/bar" id="progress-container" style="touch-action: none;">
                            <!-- Progress Track Background -->
                            <div class="h-1 w-full bg-zinc-800 rounded-full overflow-hidden">
                                <!-- Progress Fill -->
                                <div id="progress-bar" class="h-full bg-pink-500 rounded-full w-0 transition-[width] duration-100 shadow-[0_0_8px_rgba(236,72,153,0.4)] relative"></div>
                            </div>
                            <!-- Drag Handle -->
                            <div id="progress-handle" class="absolute top-1/2 -translate-y-1/2 w-3 h-3 bg-white rounded-full scale-0 group-hover/bar:scale-100 transition-transform shadow-md pointer-events-none" style="left: 0%;"></div>
                        </div>
                        <div class="flex justify-between text-[10px] text-zinc-600 font-medium px-0.5">
                            <span id="current-time">0:00</span>
                            <span id="duration">...</span>
                        </div>
                    </div>
                </div>

                <audio id="main-audio" preload="auto" src="{{ asset('audio/kane.mp3') }}" autoplay playsinline></audio>
            </div>
        </div>
        <!--   -->
    </div>

    <!-- Right Column: 3D Trigonometry Animation (Abstract Framework) -->
    <div class="hidden md:flex justify-center items-center relative h-full min-h-[600px] md:min-h-[750px] z-10 overflow-visible">
        <div id="trig-3d-canvas-container" class="absolute inset-0 w-full h-full cursor-grab active:cursor-grabbing"></div>
        <!-- Decorative Glow -->
        <div class="absolute inset-0 bg-gradient-to-br from-pink-500/10 to-transparent pointer-events-none rounded-full blur-[120px] -z-10"></div>
    </div>
</div>

<style>
    @keyframes blink {
        0%, 100% { border-color: transparent; }
        50% { border-color: rgba(244, 114, 182, 0.5); }
    }
    .cursor-blink {
        animation: blink 0.8s infinite;
    }
</style>

<!-- Three.js Library -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.min.js"></script>

<script>
    (function() {
        // --- Typing Animation (Sequential) ---
        const typingElement = document.getElementById('typing-text');
        const nameElement = document.getElementById('typing-name');
        const nameText = "Hello! I'm Rahmat Fushiguro";
        const words = ["Creative Developer", "Problem Solver", "Tech Enthusiast", "Digital Artist"];
        let wordIndex = 0;
        let charIndex = 0;
        let isDeleting = false;
        
        function typeName(index) {
            if (index <= nameText.length) {
                let greeting = nameText.substring(0, Math.min(index, 6));
                let rest = nameText.substring(6, index);
                nameElement.innerHTML = `<span class="text-pink-400">${greeting}</span>${rest}`;
                setTimeout(() => typeName(index + 1), 60);
            } else {
                setTimeout(() => type(), 500);
            }
        }

        function type() {
            const currentWord = words[wordIndex];
            let typeSpeed = 150;
            
            if (isDeleting) {
                typingElement.textContent = currentWord.substring(0, charIndex - 1);
                charIndex--;
                typeSpeed = 80;
            } else {
                typingElement.textContent = currentWord.substring(0, charIndex + 1);
                charIndex++;
                typeSpeed = 120;
            }

            if (!isDeleting && charIndex === currentWord.length) {
                isDeleting = true;
                typeSpeed = 2000;
            } else if (isDeleting && charIndex === 0) {
                isDeleting = false;
                wordIndex = (wordIndex + 1) % words.length;
                typeSpeed = 500;
            }

            setTimeout(type, typeSpeed);
        }
        
        if (nameElement) typeName(0);

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
        const progressHandle = document.getElementById('progress-handle');
        const progressContainer = document.getElementById('progress-container');
        const currentTimeEl = document.getElementById('current-time');
        const durationEl = document.getElementById('duration');

        if (audio && playBtn) {
            let isPlaying = false;
            let isDragging = false;

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

            function formatTime(seconds) {
                if (isNaN(seconds)) return "0:00";
                let min = Math.floor(seconds / 60);
                let sec = Math.floor(seconds % 60);
                if (sec < 10) sec = `0${sec}`;
                return `${min}:${sec}`;
            }

            // Di dalam updateProgress()
            function updateProgress() {
                // Tambahkan pengecekan audio.seeking untuk mencegah "lompatan" UI
                if (isDragging || audio.seeking) return; 
                
                const { currentTime, duration } = audio;
                if (!duration || isNaN(duration)) return;
                
                const progressPercent = (currentTime / duration) * 100;
                progressBar.style.width = `${progressPercent}%`;
                if (progressHandle) progressHandle.style.left = `${progressPercent}%`;
                currentTimeEl.innerText = formatTime(currentTime);
            }

            audio.addEventListener('timeupdate', updateProgress);

            function setDuration() {
                if (audio.duration && !isNaN(audio.duration)) {
                    durationEl.innerText = formatTime(audio.duration);
                }
            }

            if (audio.readyState > 0) {
                setDuration();
            } else {
                audio.addEventListener('loadedmetadata', setDuration);
            }

            function scrub(e, updateAudio = false) {
                if (!audio.duration || isNaN(audio.duration)) return;
                const rect = progressContainer.getBoundingClientRect();
                
                let clientX;
                if (e.type.includes('touch')) {
                    clientX = (e.touches && e.touches.length) ? e.touches[0].clientX : e.changedTouches[0].clientX;
                } else {
                    clientX = e.clientX;
                }
                
                let x = clientX - rect.left;
                let percentage = Math.max(0, Math.min(1, x / rect.width));
                const seekTime = percentage * audio.duration;

                // Update Visual secara instan
                const percentString = `${percentage * 100}%`;
                progressBar.style.width = percentString;
                if (progressHandle) progressHandle.style.left = percentString;
                currentTimeEl.innerText = formatTime(seekTime);
                
                // Update Audio hanya jika updateAudio bernilai true (saat mouseup/touchend)
                if (updateAudio && isFinite(seekTime)) {
                    // Matikan event listener sementara agar tidak bentrok
                    audio.removeEventListener('timeupdate', updateProgress);
                    
                    audio.currentTime = seekTime;
                    
                    // Pasang kembali setelah audio stabil di posisi baru
                    audio.addEventListener('canplaythrough', function onCanPlay() {
                        audio.addEventListener('timeupdate', updateProgress);
                        audio.removeEventListener('canplaythrough', onCanPlay);
                    }, { once: true });
                }
            }

            progressContainer.addEventListener('mousedown', (e) => {
                isDragging = true;
                progressBar.style.transition = 'none';
                if (progressHandle) progressHandle.style.transition = 'none';
                // Just update visuals on start
                scrub(e, false);
            });

            window.addEventListener('mousemove', (e) => {
                if (isDragging) {
                    scrub(e, false);
                }
            });

            window.addEventListener('mouseup', (e) => {
                if (isDragging) {
                    // Finalize seek on release
                    scrub(e, true);
                    isDragging = false;
                    progressBar.style.transition = 'width 0.1s linear';
                    if (progressHandle) progressHandle.style.transition = 'left 0.1s linear';
                }
            });

            // Touch Support
            progressContainer.addEventListener('touchstart', (e) => {
                isDragging = true;
                progressBar.style.transition = 'none';
                if (progressHandle) progressHandle.style.transition = 'none';
                scrub(e, false);
            }, { passive: false });

            window.addEventListener('touchmove', (e) => {
                if (isDragging) {
                    e.preventDefault(); 
                    scrub(e, false);
                }
            }, { passive: false });

            window.addEventListener('touchend', (e) => {
                if (isDragging) {
                    scrub(e, true);
                    isDragging = false;
                    progressBar.style.transition = 'width 0.1s linear';
                    if (progressHandle) progressHandle.style.transition = 'left 0.1s linear';
                }
            });



            // --- Audio Visualizer ---
            let audioCtx;
            let analyser;
            let source;

            function initVisualizer() {
                if (audioCtx) return;
                
                try {
                    audioCtx = new (window.AudioContext || window.webkitAudioContext)();
                    analyser = audioCtx.createAnalyser();
                    source = audioCtx.createMediaElementSource(audio);
                    source.connect(analyser);
                    analyser.connect(audioCtx.destination);
                    
                    analyser.fftSize = 64; 
                    const bufferLength = analyser.frequencyBinCount;
                    const dataArray = new Uint8Array(bufferLength);
                    
                    const vCanvas = document.getElementById('visualizer-canvas');
                    const vCtx = vCanvas.getContext('2d');
                    
                    // Set internal canvas size
                    const dpr = window.devicePixelRatio || 1;
                    vCanvas.width = vCanvas.offsetWidth * dpr;
                    vCanvas.height = vCanvas.offsetHeight * dpr;
                    vCtx.scale(dpr, dpr);

                    function draw() {
                        if (!isPlaying && audioCtx.state !== 'running') {
                             requestAnimationFrame(draw);
                             return;
                        }

                        requestAnimationFrame(draw);
                        analyser.getByteFrequencyData(dataArray);
                        
                        vCtx.clearRect(0, 0, vCanvas.width, vCanvas.height);
                        
                        const barWidth = (vCanvas.offsetWidth / bufferLength);
                        let x = 0;
                        
                        for (let i = 0; i < bufferLength; i++) {
                            const barHeight = (dataArray[i] / 255) * vCanvas.offsetHeight;
                            
                            // Beautiful pink theme bars
                            const gradient = vCtx.createLinearGradient(0, vCanvas.offsetHeight, 0, 0);
                            gradient.addColorStop(0, 'rgba(236, 72, 153, 0.2)');
                            gradient.addColorStop(1, 'rgba(236, 72, 153, 0.8)');
                            
                            vCtx.fillStyle = gradient;
                            vCtx.fillRect(x, vCanvas.offsetHeight - barHeight, barWidth - 1, barHeight);
                            
                            x += barWidth;
                        }
                    }
                    draw();
                } catch (e) {
                    console.error("Audio Visualizer Error:", e);
                }
            }

            audio.addEventListener('play', () => {
                if (!audioCtx) initVisualizer();
                if (audioCtx && audioCtx.state === 'suspended') audioCtx.resume();
            });

            audio.addEventListener('ended', () => {
                audio.currentTime = 0;
                isPlaying = false;
                playIcon.classList.remove('hidden');
                pauseIcon.classList.add('hidden');
                progressBar.style.width = '0%';
                if (progressHandle) progressHandle.style.left = '0%';
            });

            // --- "Aggressive" Autoplay Unlocker ---
            const forcePlay = () => {
                audio.play().then(() => {
                    // Sync UI State
                    isPlaying = true;
                    playIcon.classList.add('hidden');
                    pauseIcon.classList.remove('hidden');
                    
                    // Cleanup
                    ['pointerdown', 'keydown', 'click', 'mousemove', 'wheel', 'scroll'].forEach(e => {
                        window.removeEventListener(e, forcePlay);
                    });
                    clearInterval(autoRetry);
                }).catch(err => {
                    // Blocked - wait for next retry or interaction
                });
            };

            // Watch for ANY interaction
            ['pointerdown', 'keydown', 'click', 'mousemove', 'wheel', 'scroll'].forEach(e => {
                window.addEventListener(e, forcePlay, { once: true, passive: true });
            });

            // Recurrent attempt (handles browser delay)
            const autoRetry = setInterval(forcePlay, 1000);

            // Immediate attempts
            window.addEventListener('load', forcePlay);
            forcePlay();
        }

        // --- 3D Trigonometry Animation ---
        (function() {
            const container = document.getElementById('trig-3d-canvas-container');
            if (!container || typeof THREE === 'undefined') return;

            const scene = new THREE.Scene();
            const camera = new THREE.PerspectiveCamera(75, container.clientWidth / container.clientHeight, 0.1, 1000);
            const renderer = new THREE.WebGLRenderer({ antialias: true, alpha: true });
            
            renderer.setSize(container.clientWidth, container.clientHeight);
            renderer.setPixelRatio(Math.min(window.devicePixelRatio, 2));
            container.appendChild(renderer.domElement);

            // Sphere Geometry for the "Globe Framework"
            const geometry = new THREE.SphereGeometry(6, 32, 32); 
            
            // Material with wireframe (Rangka Globe)
            const material = new THREE.MeshPhongMaterial({
                color: 0xec4899,
                wireframe: true,
                transparent: true,
                opacity: 0.4,
                shininess: 100
            });

            const mesh = new THREE.Mesh(geometry, material);
            scene.add(mesh);

            // Points Material for vertices (Mathematical nodes)
            const pointsMaterial = new THREE.PointsMaterial({
                color: 0x8b5cf6,
                size: 0.06,
                transparent: true,
                opacity: 0.7
            });
            const points = new THREE.Points(geometry, pointsMaterial);
            scene.add(points);

            // Lights
            scene.add(new THREE.AmbientLight(0xffffff, 0.4));
            const pointLight = new THREE.PointLight(0xec4899, 2);
            pointLight.position.set(15, 15, 15);
            scene.add(pointLight);

            const purpleLight = new THREE.PointLight(0x8b5cf6, 2);
            purpleLight.position.set(-15, -15, 15);
            scene.add(purpleLight);

            camera.position.z = 25;

            let mouseX = 0, mouseY = 0;
            container.addEventListener('mousemove', (e) => {
                const rect = container.getBoundingClientRect();
                mouseX = (e.clientX - rect.left) / rect.width - 0.5;
                mouseY = (e.clientY - rect.top) / rect.height - 0.5;
            });

            function animateTrig() {
                requestAnimationFrame(animateTrig);
                const time = Date.now() * 0.001;
                
                // Subtle trigonometric surface "breathing"
                const position = geometry.attributes.position;
                const vertex = new THREE.Vector3();

                for (let i = 0; i < position.count; i++) {
                    vertex.fromBufferAttribute(position, i);
                    const direction = vertex.clone().normalize();
                    const dist = 6 + Math.sin(vertex.x * 2 + time) * 0.2 + 
                                     Math.cos(vertex.y * 2 + time) * 0.2;
                    vertex.copy(direction).multiplyScalar(dist);
                    position.setXYZ(i, vertex.x, vertex.y, vertex.z);
                }
                position.needsUpdate = true;

                mesh.rotation.y += 0.004;
                mesh.rotation.x += 0.002;
                
                // Interaction
                mesh.rotation.y += (mouseX * 1.5 - mesh.rotation.y) * 0.05;
                mesh.rotation.x += (mouseY * 1.5 - mesh.rotation.x) * 0.05;
                points.rotation.copy(mesh.rotation);

                renderer.render(scene, camera);
            }

            window.addEventListener('resize', () => {
                camera.aspect = container.clientWidth / container.clientHeight;
                camera.updateProjectionMatrix();
                renderer.setSize(container.clientWidth, container.clientHeight);
            });

            animateTrig();
        })();
    })();
</script>