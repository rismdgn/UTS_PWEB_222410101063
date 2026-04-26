<nav x-data="{ open: false }" class="bg-slate-950/50 border-b border-white/5 sticky top-0 z-50 backdrop-blur-xl">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex items-center">
                <div class="flex-shrink-0 flex items-center">
                    <span class="text-2xl font-black bg-clip-text text-transparent bg-gradient-to-r from-cyan-400 to-blue-500 tracking-tighter">BENDO.NET</span>
                </div>
                <div class="hidden md:ml-10 md:flex md:space-x-8">
                    <a href="{{ route('dashboard') }}" class="{{ Route::is('dashboard') ? 'text-cyan-400 border-cyan-400' : 'text-slate-400 border-transparent hover:text-slate-200 hover:border-slate-700' }} inline-flex items-center px-1 pt-1 border-b-2 text-sm font-bold transition duration-200">
                        BERANDA
                    </a>
                    <a href="{{ route('pengelolaan') }}" class="{{ Route::is('pengelolaan') ? 'text-cyan-400 border-cyan-400' : 'text-slate-400 border-transparent hover:text-slate-200 hover:border-slate-700' }} inline-flex items-center px-1 pt-1 border-b-2 text-sm font-bold transition duration-200">
                        KELOLA PC
                    </a>
                    <a href="{{ route('profile') }}" class="{{ Route::is('profile') ? 'text-cyan-400 border-cyan-400' : 'text-slate-400 border-transparent hover:text-slate-200 hover:border-slate-700' }} inline-flex items-center px-1 pt-1 border-b-2 text-sm font-bold transition duration-200">
                        OPERATOR
                    </a>
                </div>
            </div>
            
            <div class="hidden md:flex md:items-center md:space-x-6">
                <div class="flex items-center space-x-3">
                    <div class="text-right">
                        <p class="text-xs font-bold text-slate-500 leading-none uppercase">Operator</p>
                        <p class="text-sm font-black text-slate-200">{{ session('username', 'Guest') }}</p>
                    </div>
                    <div class="h-10 w-10 rounded-xl bg-gradient-to-br from-cyan-500 to-blue-600 flex items-center justify-center text-white shadow-lg shadow-cyan-500/20">
                        <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                        </svg>
                    </div>
                    <a href="{{ route('logout') }}" class="p-2 text-slate-500 hover:text-red-400 transition duration-200">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                        </svg>
                    </a>
                </div>
            </div>

            <div class="flex items-center md:hidden">
                <button @click="open = !open" class="inline-flex items-center justify-center p-2 rounded-xl text-slate-400 hover:text-white hover:bg-slate-800 focus:outline-none transition duration-150">
                    <svg class="h-6 w-6" :class="{'hidden': open, 'block': !open }" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                    <svg class="h-6 w-6" :class="{'block': open, 'hidden': !open }" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <div x-show="open" 
         x-transition:enter="transition ease-out duration-200"
         x-transition:enter-start="opacity-0 -translate-y-4"
         x-transition:enter-end="opacity-100 translate-y-0"
         x-transition:leave="transition ease-in duration-150"
         x-transition:leave-start="opacity-100 translate-y-0"
         x-transition:leave-end="opacity-0 -translate-y-4"
         class="md:hidden bg-slate-900 border-b border-white/5">
        <div class="px-2 pt-2 pb-3 space-y-1">
            <a href="{{ route('dashboard') }}" class="{{ Route::is('dashboard') ? 'bg-slate-800 text-cyan-400' : 'text-slate-400 hover:bg-slate-800 hover:text-white' }} block px-3 py-4 rounded-xl text-base font-bold transition">
                BERANDA
            </a>
            <a href="{{ route('pengelolaan') }}" class="{{ Route::is('pengelolaan') ? 'bg-slate-800 text-cyan-400' : 'text-slate-400 hover:bg-slate-800 hover:text-white' }} block px-3 py-4 rounded-xl text-base font-bold transition">
                KELOLA PC
            </a>
            <a href="{{ route('profile') }}" class="{{ Route::is('profile') ? 'bg-slate-800 text-cyan-400' : 'text-slate-400 hover:bg-slate-800 hover:text-white' }} block px-3 py-4 rounded-xl text-base font-bold transition">
                OPERATOR
            </a>
            <div class="pt-4 pb-3 border-t border-white/5 mt-2">
                <div class="flex items-center px-3">
                    <div class="h-10 w-10 rounded-xl bg-gradient-to-br from-cyan-500 to-blue-600 flex items-center justify-center text-white">
                        <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                        </svg>
                    </div>
                    <div class="ml-3">
                        <div class="text-base font-black text-white">{{ session('username', 'Guest') }}</div>
                        <div class="text-sm font-bold text-slate-500 uppercase tracking-widest">Sistem Operator</div>
                    </div>
                </div>
                <div class="mt-3 px-2">
                    <a href="{{ route('logout') }}" class="block px-3 py-2 rounded-xl text-base font-bold text-red-400 hover:bg-red-400/10 transition">
                        Keluar
                    </a>
                </div>
            </div>
        </div>
    </div>
</nav>
