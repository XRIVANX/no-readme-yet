<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login | SHAREGEN</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        :root { --tech-bg: #020617; --accent-cyan: #22d3ee; }
        body { background-color: var(--tech-bg); color: #f8fafc; font-family: sans-serif; }
        .grid-overlay { position: fixed; inset: 0; background-image: linear-gradient(to right, rgba(34, 211, 238, 0.05) 1px, transparent 1px), linear-gradient(to bottom, rgba(34, 211, 238, 0.05) 1px, transparent 1px); background-size: 40px 40px; z-index: -1; }
        .glass-card { background: rgba(15, 23, 42, 0.6); backdrop-filter: blur(12px); border: 1px solid rgba(255, 255, 255, 0.1); border-radius: 1.5rem; }
    </style>
</head>
<body class="antialiased">
    <div class="grid-overlay"></div>
    <div class="min-h-screen flex items-center justify-center px-6">
        <div class="glass-card p-10 w-full max-w-md">
            <div class="text-center mb-8">
                <div class="text-3xl font-black tracking-tighter italic mb-2"><span class="text-cyan-400">SHARE</span>GEN</div>
                <p class="text-slate-400 text-sm">Welcome back, share your thoughts.</p>
            </div>

            <form action="{{ route('login') }}" method="POST" class="space-y-6">
                @csrf
                <div>
                    <label class="block text-xs font-bold text-cyan-400 uppercase tracking-widest mb-2">Email Address</label>
                    <input type="email" name="email" required class="w-full bg-slate-900/50 border border-slate-700 rounded-xl p-4 text-white focus:border-cyan-500 outline-none transition">
                </div>

                <div>
                    <label class="block text-xs font-bold text-cyan-400 uppercase tracking-widest mb-2">Password</label>
                    <input type="password" name="password" required class="w-full bg-slate-900/50 border border-slate-700 rounded-xl p-4 text-white focus:border-cyan-500 outline-none transition">
                </div>

                <button type="submit" class="w-full bg-gradient-to-r from-cyan-500 to-indigo-600 py-4 rounded-xl font-bold hover:scale-[1.02] active:scale-95 transition-all shadow-lg shadow-cyan-500/20">
                    Sign In
                </button>
            </form>
        </div>
    </div>
</body>
</html>