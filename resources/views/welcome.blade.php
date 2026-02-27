<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ config('app.name', 'Laravel') }}</title>
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600&display=swap" rel="stylesheet" />
        <script src="https://cdn.tailwindcss.com"></script>
        <style>
            :root { --tech-bg: #020617; --accent-cyan: #22d3ee; --accent-purple: #818cf8; }
            body { background-color: var(--tech-bg); color: #f8fafc; font-family: 'Instrument Sans', sans-serif; overflow-x: hidden; }
            .grid-overlay { position: fixed; inset: 0; background-image: linear-gradient(to right, rgba(34, 211, 238, 0.05) 1px, transparent 1px), linear-gradient(to bottom, rgba(34, 211, 238, 0.05) 1px, transparent 1px); background-size: 40px 40px; mask-image: radial-gradient(circle at 50% 50%, black, transparent 80%); z-index: -1; }
            .glow-orb { position: absolute; width: 500px; height: 500px; background: radial-gradient(circle, rgba(129, 140, 248, 0.1) 0%, transparent 70%); filter: blur(80px); pointer-events: none; }
            .glass-card { background: rgba(15, 23, 42, 0.6); backdrop-filter: blur(12px); border: 1px solid rgba(255, 255, 255, 0.1); border-radius: 1.5rem; transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1); }
            .glass-card:hover { border-color: var(--accent-cyan); transform: translateY(-5px); box-shadow: 0 0 30px rgba(34, 211, 238, 0.15); }
            @keyframes fade-in-up { from { opacity: 0; transform: translateY(30px); } to { opacity: 1; transform: translateY(0); } }
            .animate-reveal { animation: fade-in-up 1s ease-out forwards; }
        </style>
    </head>
    <body class="antialiased selection:bg-cyan-500/30">
        <div class="grid-overlay"></div>
        <div class="glow-orb top-[-10%] left-[-10%]"></div>

        <div class="relative min-h-screen flex flex-col items-center px-6 py-12">
            <nav class="w-full max-w-7xl flex justify-between items-center mb-12 animate-reveal">
                <div class="text-2xl font-black tracking-tighter italic"><span class="text-cyan-400">SHARE</span>GEN</div>
            </nav>

            <header class="text-center max-w-4xl animate-reveal mb-12">
                <h1 class="text-5xl md:text-7xl font-bold tracking-tight mb-4">
                    Thoughts Mo<span class="text-transparent bg-clip-text bg-gradient-to-r from-cyan-400 to-indigo-500"> e Share mo</span>
                </h1>
            </header>

            <section class="w-full max-w-2xl mb-20 animate-reveal" style="animation-delay: 0.2s;">
                <form action="{{ route('posts.store') }}" method="POST" class="glass-card p-8">
                    @csrf
                    <div class="space-y-4">
                        <input type="text" name="title" placeholder="Headline..." required
                            class="w-full bg-slate-900/50 border border-slate-700 rounded-xl p-4 text-white focus:border-cyan-500 outline-none transition">
                        
                        <select name="category_id" required 
                            class="w-full bg-slate-900/80 border border-cyan-500/30 rounded-xl p-4 text-cyan-100 shadow-[0_0_15px_rgba(34,211,238,0.1)] focus:border-cyan-500 outline-none transition">
                            <option value="" disabled selected class="bg-slate-900 text-slate-400">Select Category</option>
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}" class="bg-slate-900 text-white">
                                    {{ $category->title }}
                                </option>
                            @endforeach
                        </select>

                        <textarea name="text" rows="3" placeholder="Whats on your Mind?" required
                            class="w-full bg-slate-900/50 border border-slate-700 rounded-xl p-4 text-white focus:border-cyan-500 outline-none transition"></textarea>
                        
                        <button type="submit" 
                            class="w-full bg-gradient-to-r from-cyan-500 to-indigo-600 py-4 rounded-xl font-bold hover:scale-[1.02] active:scale-95 transition-all">
                            Send Thought
                        </button>
                    </div>
                </form>
            </section>

            <section class="grid grid-cols-1 md:grid-cols-2 gap-8 w-full max-w-6xl animate-reveal" style="animation-delay: 0.4s;">
                @forelse($posts as $post)
                    <div class="glass-card p-8 flex flex-col justify-between">
                        <div>
                            <span class="text-[10px] uppercase tracking-[0.2em] text-cyan-400 font-bold">
                                {{ $post->category->title ?? 'General' }}
                            </span>
                            <h3 class="text-2xl font-bold mt-2 mb-4">{{ $post->title }}</h3>
                            <p class="text-slate-400 leading-relaxed">{{ $post->text }}</p>
                        </div>
                        <div class="mt-6 pt-4 border-t border-slate-800 text-[10px] text-slate-500">
                            SEND: {{ $post->created_at->diffForHumans() }}
                        </div>
                    </div>
                @empty
                    <div class="col-span-full text-center text-slate-500 italic">
                      
                    </div>
                @endforelse
            </section>

            <footer class="mt-32 text-slate-600 text-xs">
                Laravel v{{ Illuminate\Foundation\Application::VERSION }} // PHP v{{ PHP_VERSION }}
            </footer>
        </div>
    </body>
</html>