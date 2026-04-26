@extends('layouts.app')

@section('title', 'Profil Operator - Bendo.net')

@section('content')
<div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-8 md:py-12">
    <div class="cyber-card rounded-3xl border border-white/5 overflow-hidden shadow-2xl">
        <div class="h-32 md:h-40 bg-gradient-to-r from-slate-900 via-cyan-900/50 to-blue-900/50 relative overflow-hidden">
            <div class="absolute inset-0 bg-[url('https://www.transparenttextures.com/patterns/carbon-fibre.png')] opacity-20"></div>
        </div>
        <div class="px-6 md:px-10 pb-10">
            <div class="relative flex justify-center sm:justify-start">
                <div class="-mt-16 md:-mt-20 h-32 w-32 md:h-40 md:w-40 rounded-3xl bg-slate-950 p-2 shadow-2xl border border-white/10">
                    <div class="h-full w-full rounded-2xl bg-gradient-to-tr from-cyan-500 to-blue-600 flex items-center justify-center text-white text-4xl md:text-5xl font-black italic">
                        {{ strtoupper(substr($username, 0, 1)) }}
                    </div>
                </div>
            </div>
            
            <div class="mt-8 flex flex-col sm:flex-row sm:items-center sm:justify-between gap-6">
                <div class="text-center sm:text-left">
                    <h1 class="text-3xl md:text-4xl font-black text-white uppercase tracking-tighter">{{ $username }}</h1>
                    <div class="flex items-center justify-center sm:justify-start mt-1">
                        <span class="w-2 h-2 rounded-full bg-cyan-400 animate-pulse mr-2"></span>
                        <p class="text-slate-500 font-bold uppercase text-xs tracking-widest">Operator Sistem Utama</p>
                    </div>
                </div>
                <div class="flex flex-col sm:flex-row gap-3 sm:gap-4">
                    <button class="bg-slate-900 border border-white/5 text-slate-300 px-8 py-3 rounded-2xl font-bold text-xs uppercase tracking-widest hover:bg-slate-800 transition">
                        Edit Akses
                    </button>
                    <a href="{{ route('logout') }}" class="bg-red-600/10 border border-red-500/20 text-red-400 px-8 py-3 rounded-2xl font-black text-xs uppercase tracking-widest hover:bg-red-600 hover:text-white transition shadow-lg shadow-red-900/20 text-center">
                        Terminasi
                    </a>
                </div>
            </div>

            <div class="mt-12 md:mt-16 grid grid-cols-1 md:grid-cols-2 gap-10 md:gap-12">
                <div>
                    <h3 class="text-[10px] font-black text-slate-600 uppercase tracking-[0.3em] mb-6">Keamanan Akses</h3>
                    <div class="space-y-6">
                        <div class="flex items-center space-x-4">
                            <div class="w-10 h-10 rounded-xl bg-white/5 flex items-center justify-center text-slate-400 flex-shrink-0">
                                <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                            </div>
                            <div class="min-w-0">
                                <p class="text-[10px] font-black text-slate-500 uppercase tracking-widest leading-none mb-1">Email Terenkripsi</p>
                                <p class="text-sm font-bold text-slate-200 truncate">{{ strtolower($username) }}@bendo.net.intra</p>
                            </div>
                        </div>
                        <div class="flex items-center space-x-4">
                            <div class="w-10 h-10 rounded-xl bg-white/5 flex items-center justify-center text-slate-400 flex-shrink-0">
                                <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 11c0 3.517-1.009 6.799-2.753 9.571m-3.44-2.04l.054-.09A10.003 10.003 0 0012 3c1.72 0 3.347.433 4.775 1.202M21 21l-3-3m1.392-2.931A8.949 8.949 0 0120 12c0-4.97-4.03-9-9-9a8.949 8.949 0 01-6.108 2.392M3 3l18 18" />
                                </svg>
                            </div>
                            <div class="min-w-0">
                                <p class="text-[10px] font-black text-slate-500 uppercase tracking-widest leading-none mb-1">Otorisasi</p>
                                <p class="text-sm font-bold text-slate-200">Level 4 - Administrator</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div>
                    <h3 class="text-[10px] font-black text-slate-600 uppercase tracking-[0.3em] mb-6">Statistik Terminal</h3>
                    <div class="space-y-4">
                        <div class="flex justify-between items-center py-3 border-b border-white/5">
                            <span class="text-xs font-bold text-slate-500 uppercase tracking-widest">Aktif Sejak</span>
                            <span class="text-sm font-black text-slate-200 uppercase tracking-tighter">Jan 2026</span>
                        </div>
                        <div class="flex justify-between items-center py-3 border-b border-white/5">
                            <span class="text-xs font-bold text-slate-500 uppercase tracking-widest">Total Sesi</span>
                            <span class="text-sm font-black text-cyan-400 uppercase tracking-tighter">1.284 UNIT</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
