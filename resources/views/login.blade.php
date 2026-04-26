@extends('layouts.app')

@section('title', 'Login - Bendo.net')

@section('content')
<div class="min-h-screen flex items-center justify-center bg-gradient-to-br from-slate-900 to-indigo-950 p-4">
    <div class="max-w-md w-full glass p-10 rounded-3xl shadow-2xl space-y-8 border border-white/10 relative overflow-hidden">
        <div class="absolute -top-24 -left-24 w-48 h-48 bg-cyan-500 rounded-full blur-3xl opacity-10"></div>
        <div class="absolute -bottom-24 -right-24 w-48 h-48 bg-blue-600 rounded-full blur-3xl opacity-10"></div>
        
        <div class="text-center relative">
            <h1 class="text-4xl font-black text-white tracking-tighter uppercase italic">Bendo<span class="text-cyan-400">.net</span></h1>
            <p class="mt-2 text-sm font-bold text-slate-400 uppercase tracking-widest">Autentikasi Operator</p>
        </div>

        @if(session('error'))
            <div class="bg-red-500/10 border border-red-500/20 text-red-400 px-4 py-3 rounded-xl text-xs font-bold uppercase tracking-wider text-center">
                {{ session('error') }}
            </div>
        @endif

        @if(session('success'))
            <div class="bg-green-500/10 border border-green-500/20 text-green-400 px-4 py-3 rounded-xl text-xs font-bold uppercase tracking-wider text-center">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('login.post') }}" method="POST" class="mt-8 space-y-6 relative">
            @csrf
            <div class="space-y-4">
                <div>
                    <label for="username" class="block text-xs font-black text-slate-500 uppercase tracking-widest ml-1 mb-2">Nama Pengguna</label>
                    <input id="username" name="username" type="text" required class="appearance-none block w-full px-4 py-4 bg-slate-900/50 border border-white/5 placeholder-slate-600 text-white rounded-2xl focus:outline-none focus:ring-2 focus:ring-cyan-500/50 focus:border-cyan-500/50 transition duration-300 font-bold" placeholder="ID_OPERATOR">
                </div>
                <div>
                    <label for="password" class="block text-xs font-black text-slate-500 uppercase tracking-widest ml-1 mb-2">Kata Sandi</label>
                    <input id="password" name="password" type="password" required class="appearance-none block w-full px-4 py-4 bg-slate-900/50 border border-white/5 placeholder-slate-600 text-white rounded-2xl focus:outline-none focus:ring-2 focus:ring-cyan-500/50 focus:border-cyan-500/50 transition duration-300 font-bold" placeholder="••••••••">
                </div>
            </div>

            <div>
                <button type="submit" class="group relative w-full flex justify-center py-4 px-4 border border-transparent text-sm font-black rounded-2xl text-white bg-gradient-to-r from-cyan-600 to-blue-700 hover:from-cyan-500 hover:to-blue-600 focus:outline-none shadow-[0_0_20px_rgba(6,182,212,0.3)] transform hover:-translate-y-1 transition duration-300 uppercase tracking-widest">
                    Mulai Sesi
                </button>
            </div>
        </form>

        <div class="text-center relative">
            <a href="{{ route('setup') }}" class="text-xs font-bold text-slate-500 hover:text-cyan-400 transition duration-200 uppercase tracking-widest border-b border-transparent hover:border-cyan-400 pb-1">
                Atur Kredensial
            </a>
        </div>
    </div>
</div>
@endsection
