@extends('layouts.app')

@section('title', 'Beranda - Bendo.net')

@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8 md:py-12">
    @include('partials.welcome-banner')

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 md:gap-8 mt-8 md:mt-10">
        <x-stat-card color="cyan" title="Klien Aktif" value="{{ $stats['active_pcs'] }}" subtitle="/ 10 UNIT">
            <svg class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
            </svg>
        </x-stat-card>

        <x-stat-card color="blue" title="Pendapatan Hari Ini" value="{{ $stats['total_billing'] }}" subtitle="↑ 15% dari rata-rata">
            <svg class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M12 16v1m3-9v.377a8.852 8.852 0 010 11.246M12 4.872V4m0 10.872V14m0-10.872A8.978 8.978 0 0115 12a8.978 8.978 0 01-3 7.128" />
            </svg>
        </x-stat-card>

        <x-stat-card color="purple" title="Shift Saat Ini" value="{{ $stats['current_shift'] }}" subtitle="Waktu tersisa: 04:22:10">
            <svg class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
        </x-stat-card>
    </div>

    <div class="mt-8 md:mt-12 cyber-card rounded-3xl p-6 md:p-10 border border-white/5">
        <div class="flex flex-col sm:flex-row sm:items-center justify-between mb-8 gap-4">
            <h2 class="text-xl font-black text-white uppercase tracking-tighter">Log Aktivitas Sistem</h2>
            <button class="text-xs font-bold text-cyan-400 uppercase tracking-widest hover:text-cyan-300 transition text-left">Lihat Semua Log</button>
        </div>
        <div class="space-y-6">
            <div class="flex items-start group">
                <div class="w-2 h-2 mt-2 rounded-full bg-cyan-500 shadow-[0_0_8px_rgba(6,182,212,0.6)] flex-shrink-0"></div>
                <div class="ml-4 md:ml-6 flex-grow border-b border-white/5 pb-4">
                    <div class="flex flex-col sm:flex-row sm:justify-between sm:items-center gap-1">
                        <p class="text-sm font-bold text-slate-200">Sesi dimulai pada <span class="text-cyan-400">PC-05</span></p>
                        <p class="text-[10px] font-bold text-slate-500 uppercase tracking-widest">2 menit lalu</p>
                    </div>
                </div>
            </div>
            <div class="flex items-start group">
                <div class="w-2 h-2 mt-2 rounded-full bg-blue-500 shadow-[0_0_8px_rgba(59,130,246,0.6)] flex-shrink-0"></div>
                <div class="ml-4 md:ml-6 flex-grow border-b border-white/5 pb-4">
                    <div class="flex flex-col sm:flex-row sm:justify-between sm:items-center gap-1">
                        <p class="text-sm font-bold text-slate-200">Tagihan selesai untuk <span class="text-blue-400">PC-01</span></p>
                        <p class="text-[10px] font-bold text-slate-500 uppercase tracking-widest">15 menit lalu</p>
                    </div>
                </div>
            </div>
            <div class="flex items-start group">
                <div class="w-2 h-2 mt-2 rounded-full bg-yellow-500 shadow-[0_0_8px_rgba(234,179,8,0.6)] flex-shrink-0"></div>
                <div class="ml-4 md:ml-6 flex-grow pb-4">
                    <div class="flex flex-col sm:flex-row sm:justify-between sm:items-center gap-1">
                        <p class="text-sm font-bold text-slate-200">Peringatan perbaikan: <span class="text-yellow-400">PC-04</span></p>
                        <p class="text-[10px] font-bold text-slate-500 uppercase tracking-widest">1 jam lalu</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
