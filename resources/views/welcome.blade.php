<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600&display=swap" rel="stylesheet" />
        <script src="https://cdn.tailwindcss.com"></script>
        <script src="https://unpkg.com/framer-motion@10.16.4/dist/framer-motion.js"></script>

        <style>
            :root {
                --tech-bg: #020617; /* Slate-950 */
                --accent-cyan: #22d3ee;
                --accent-purple: #818cf8;
            }

            body {
                background-color: var(--tech-bg);
                color: #f8fafc;
                font-family: 'Instrument Sans', sans-serif;
                overflow-x: hidden;
            }

            /* Animated Tech Grid Background */
            .grid-overlay {
                position: fixed;
                inset: 0;
                background-image: 
                    linear-gradient(to right, rgba(34, 211, 238, 0.05) 1px, transparent 1px),
                    linear-gradient(to bottom, rgba(34, 211, 238, 0.05) 1px, transparent 1px);
                background-size: 40px 40px;
                mask-image: radial-gradient(circle at 50% 50%, black, transparent 80%);
                z-index: -1;
            }

            /* Glow Effects */
            .glow-orb {
                position: absolute;
                width: 500px;
                height: 500px;
                background: radial-gradient(circle, rgba(129, 140, 248, 0.1) 0%, transparent 70%);
                filter: blur(80px);
                pointer-events: none;
            }

            /* Modern Glassmorphism Card */
            .glass-card {
                background: rgba(15, 23, 42, 0.6);
                backdrop-filter: blur(12px);
                border: 1px solid rgba(255, 255, 255, 0.1);
                border-radius: 1.5rem;
                transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            }

            .glass-card:hover {
                border-color: var(--accent-cyan);
                transform: translateY(-5px) scale(1.02);
                box-shadow: 0 0 30px rgba(34, 211, 238, 0.15);
            }

            @keyframes fade-in-up {
                from { opacity: 0; transform: translateY(30px); }
                to { opacity: 1; transform: translateY(0); }
            }

            .animate-reveal {
                animation: fade-in-up 1s ease-out forwards;
            }
        </style>
    </head>
    <body class="antialiased selection:bg-cyan-500/30">
        <div class="grid-overlay"></div>
        <div class="glow-orb top-[-10%] left-[-10%]"></div>
        <div class="glow-orb bottom-[-10%] right-[-10%] bg-cyan-500/10"></div>

        <div class="relative min-h-screen flex flex-col items-center px-6 py-12">
            
            <nav class="w-full max-w-7xl flex justify-between items-center mb-20 animate-reveal">
                <div class="text-2xl font-black tracking-tighter italic">
                    <span class="text-cyan-400">NEXT</span>GEN
                </div>
                <div class="flex gap-6 text-sm font-medium text-slate-400">
                    <a href="#" class="hover:text-cyan-400 transition">Documentation</a>
                    <a href="#" class="hover:text-cyan-400 transition">Showcase</a>
                </div>
            </nav>

            <header class="text-center max-w-4xl animate-reveal" style="animation-delay: 0.2s;">
                <h1 class="text-6xl md:text-8xl font-bold tracking-tight mb-8">
                    Build with <br/>
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-cyan-400 to-indigo-500">
                        Digital Elegance
                    </span>
                </h1>
                <p class="text-xl text-slate-400 mb-12 max-w-2xl mx-auto leading-relaxed">
                    A sleek, high-performance foundation for your next masterpiece. Smaller footprints, bigger impacts.
                </p>
            </header>

            <section class="grid grid-cols-1 md:grid-cols-3 gap-8 w-full max-w-6xl animate-reveal" style="animation-delay: 0.4s;">
                
                <div class="glass-card overflow-hidden group">
                    <div class="h-48 bg-slate-900 flex items-center justify-center relative">
                        <div class="absolute inset-0 bg-gradient-to-br from-cyan-500/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity"></div>
                        <svg class="w-16 h-16 text-cyan-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4"/></svg>
                    </div>
                    <div class="p-6">
                        <h3 class="text-lg font-bold mb-2">Micro-Architecture</h3>
                        <p class="text-sm text-slate-500">Fine-tuned components designed for maximum efficiency and speed.</p>
                    </div>
                </div>

                <div class="glass-card overflow-hidden group">
                    <div class="h-48 bg-slate-900 flex items-center justify-center relative">
                        <div class="absolute inset-0 bg-gradient-to-br from-indigo-500/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity"></div>
                        <svg class="w-16 h-16 text-indigo-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                    </div>
                    <div class="p-6">
                        <h3 class="text-lg font-bold mb-2">Instant Response</h3>
                        <p class="text-sm text-slate-500">Real-time interactions with ultra-low latency design patterns.</p>
                    </div>
                </div>

                <div class="glass-card overflow-hidden group">
                    <div class="h-48 bg-slate-900 flex items-center justify-center relative">
                        <div class="absolute inset-0 bg-gradient-to-br from-purple-500/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity"></div>
                        <svg class="w-16 h-16 text-purple-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                    </div>
                    <div class="p-6">
                        <h3 class="text-lg font-bold mb-2">Secure Core</h3>
                        <p class="text-sm text-slate-500">Encrypted data streams protecting every layer of your application.</p>
                    </div>
                </div>

            </section>

            <footer class="mt-32 text-slate-600 text-xs animate-reveal" style="animation-delay: 0.6s;">
                Laravel v{{ Illuminate\Foundation\Application::VERSION }} // PHP v{{ PHP_VERSION }}
            </footer>
        </div>
    </body>
</html>