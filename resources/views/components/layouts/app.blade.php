<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ $title ?? config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif

    <!-- Favicon -->
    <link rel="icon" type="image/jpeg" href="{{ asset('img/iconweb.jpeg') }}">
</head>
<body class="font-sans antialiased text-white bg-black dark pt-[60px]">


    @isset($herosection)
        <section class="relative z-0">
            {{ $herosection }}
        </section>
    @endisset

    <main class="relative z-0">
        {{ $slot }}
    </main>

    @isset($footer)
    <footer class="w-full border-t border-zinc-800 bg-black/50 py-12 flex items-center backdrop-blur-sm">
        <div class="w-full px-6 md:px-16">
            {{ $footer }}
        </div>
    </footer>
    @endisset


    @isset($header)
    <x-header>
        {{ $header }}
    </x-header>
    @endisset

    <script>
        (function() {
            // --- Interactive 3D Trigonometry Particles (Header) ---
            const hCanvas = document.getElementById('header-particles');
            if (hCanvas) {
                const hCtx = hCanvas.getContext('2d');
                let hParticles = [];
                const maxDist = 120; // Increased for better connectivity
                let mouse = { x: -1000, y: -1000 };
                
                function initH() {
                    const rect = hCanvas.parentElement.getBoundingClientRect();
                    hCanvas.width = rect.width;
                    hCanvas.height = rect.height;
                    hParticles = [];
                    for (let i = 0; i < 40; i++) { // Increased count
                        hParticles.push({
                            x: Math.random() * hCanvas.width,
                            y: Math.random() * hCanvas.height,
                            z: Math.random() * 2,
                            vx: (Math.random() - 0.5) * 0.3,
                            vy: (Math.random() - 0.5) * 0.3,
                            originX: 0,
                            originY: 0
                        });
                        hParticles[i].originX = hParticles[i].x;
                        hParticles[i].originY = hParticles[i].y;
                    }
                }

                function animateH() {
                    hCtx.clearRect(0, 0, hCanvas.width, hCanvas.height);
                    
                    for (let i = 0; i < hParticles.length; i++) {
                        let p = hParticles[i];
                        
                        // Movement + Mouse Parallax
                        let dxMouse = mouse.x - p.x;
                        let dyMouse = mouse.y - p.y;
                        let distMouse = Math.sqrt(dxMouse * dxMouse + dyMouse * dyMouse);
                        let moveX = p.vx * (p.z + 0.5);
                        let moveY = p.vy * (p.z + 0.5);

                        if (distMouse < 150) {
                            let force = (150 - distMouse) / 150;
                            moveX -= (dxMouse / distMouse) * force * 2;
                            moveY -= (dyMouse / distMouse) * force * 2;
                        }

                        p.x += moveX;
                        p.y += moveY;
                        
                        // Smooth Wrap
                        if (p.x < -20) p.x = hCanvas.width + 20;
                        if (p.x > hCanvas.width + 20) p.x = -20;
                        if (p.y < -20) p.y = hCanvas.height + 20;
                        if (p.y > hCanvas.height + 20) p.y = -20;

                        // Draw Node
                        const opacity = (p.z / 2) * 0.4 + 0.1;
                        hCtx.fillStyle = `rgba(244, 114, 182, ${opacity})`;
                        hCtx.beginPath();
                        hCtx.arc(p.x, p.y, p.z + 0.5, 0, Math.PI * 2);
                        hCtx.fill();

                        // Connections
                        for (let j = i + 1; j < hParticles.length; j++) {
                            let p2 = hParticles[j];
                            let dx = p.x - p2.x;
                            let dy = p.y - p2.y;
                            let dist = Math.sqrt(dx * dx + dy * dy);
                            
                            if (dist < maxDist) {
                                let lineAlpha = (1 - (dist / maxDist)) * 0.15;
                                hCtx.strokeStyle = `rgba(244, 114, 182, ${lineAlpha})`;
                                hCtx.lineWidth = 0.4;
                                hCtx.beginPath();
                                hCtx.moveTo(p.x, p.y);
                                hCtx.lineTo(p2.x, p2.y);
                                hCtx.stroke();
                            }
                        }
                    }
                    requestAnimationFrame(animateH);
                }

                hCanvas.parentElement.addEventListener('mousemove', (e) => {
                    const rect = hCanvas.getBoundingClientRect();
                    mouse.x = e.clientX - rect.left;
                    mouse.y = e.clientY - rect.top;
                });

                hCanvas.parentElement.addEventListener('mouseleave', () => {
                    mouse.x = -1000;
                    mouse.y = -1000;
                });

                window.addEventListener('resize', initH);
                initH();
                animateH();
            }

            // --- Scroll Reveal ---
            const observerOptions = {
                root: null,
                threshold: 0.1,
                rootMargin: "0px"
            };

            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('visible');
                        observer.unobserve(entry.target);
                    }
                });
            }, observerOptions);

            document.querySelectorAll('.animate-reveal').forEach(el => {
                observer.observe(el);
            });
        })();
    </script>
</body>
</html>