@extends('layouts.app')

@section('title', 'Kelola PC - Bendo.net')

@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8 md:py-12">
    <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-10 gap-6">
        <div>
            <h1 class="text-3xl font-black text-white uppercase tracking-tighter">Manajemen Terminal</h1>
            <p class="mt-1 text-slate-500 font-medium italic">Pantau status real-time dan sesi aktif di seluruh unit.</p>
        </div>
        <div class="flex flex-wrap gap-3">
            <button class="bg-slate-900 border border-white/5 text-slate-300 px-6 py-3 rounded-2xl font-bold text-xs uppercase tracking-widest hover:bg-slate-800 transition inline-flex items-center">
                <svg class="w-4 h-4 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15" />
                </svg>
                Segarkan
            </button>
            <button class="bg-gradient-to-r from-cyan-600 to-blue-700 text-white px-6 py-3 rounded-2xl font-black text-xs uppercase tracking-widest shadow-lg shadow-cyan-500/20 hover:from-cyan-500 hover:to-blue-600 transition transform hover:-translate-y-0.5">
                Sesi Baru
            </button>
        </div>
    </div>

    <div class="cyber-card rounded-3xl border border-white/5 overflow-hidden shadow-2xl">
        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-white/5">
                <thead class="bg-slate-950/50">
                    <tr>
                        <th class="px-8 py-5 text-left text-[10px] font-black text-slate-500 uppercase tracking-[0.2em]">ID Unit</th>
                        <th class="px-8 py-5 text-left text-[10px] font-black text-slate-500 uppercase tracking-[0.2em]">Status</th>
                        <th class="px-8 py-5 text-left text-[10px] font-black text-slate-500 uppercase tracking-[0.2em]">Pengguna Aktif</th>
                        <th class="px-8 py-5 text-left text-[10px] font-black text-slate-500 uppercase tracking-[0.2em]">Durasi</th>
                        <th class="px-8 py-5 text-right text-[10px] font-black text-slate-500 uppercase tracking-[0.2em]">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-white/5">
                    @foreach($items as $item)
                    <tr class="hover:bg-white/[0.02] transition duration-150 group">
                        <td class="px-8 py-6 whitespace-nowrap">
                            <div class="text-sm font-black text-white group-hover:text-cyan-400 transition">{{ $item['pc_name'] }}</div>
                            <div class="text-[10px] font-bold text-slate-600 uppercase tracking-widest mt-1">G-SERIES HW</div>
                        </td>
                        <td class="px-8 py-6 whitespace-nowrap">
                            <span class="px-3 py-1 inline-flex text-[10px] font-black uppercase tracking-widest rounded-lg border 
                                {{ $item['status'] == 'Digunakan' ? 'bg-cyan-500/10 text-cyan-400 border-cyan-500/20 shadow-[0_0_10px_rgba(6,182,212,0.1)]' : 
                                   ($item['status'] == 'Tersedia' ? 'bg-green-500/10 text-green-400 border-green-500/20' : 'bg-red-500/10 text-red-400 border-red-500/20') }}">
                                {{ $item['status'] }}
                            </span>
                        </td>
                        <td class="px-8 py-6 whitespace-nowrap">
                            <div class="text-sm font-bold {{ $item['user'] == '-' ? 'text-slate-600' : 'text-slate-200' }}">{{ $item['user'] }}</div>
                        </td>
                        <td class="px-8 py-6 whitespace-nowrap">
                            <div class="text-sm font-mono {{ $item['duration'] == '00:00:00' ? 'text-slate-600' : 'text-cyan-400' }}">{{ $item['duration'] }}</div>
                        </td>
                        <td class="px-8 py-6 whitespace-nowrap text-right text-[10px] font-black uppercase tracking-widest">
                            @if($item['status'] == 'Tersedia')
                                <a href="#" class="text-cyan-400 hover:text-cyan-300 transition mr-6">Mulai</a>
                            @elseif($item['status'] == 'Digunakan')
                                <a href="#" class="text-blue-400 hover:text-blue-300 transition mr-6">Tagihan</a>
                            @endif
                            <a href="#" class="text-slate-600 hover:text-white transition">Konfigurasi</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
