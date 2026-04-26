@extends('layouts.app')

@section('title', 'Pengaturan Admin - Bendo.net')

@section('content')
<div class="min-h-screen flex items-center justify-center bg-gradient-to-br from-slate-900 to-indigo-950 p-4">
    <div class="max-w-md w-full glass p-10 rounded-3xl shadow-2xl space-y-8 border border-white/10">
        <div class="text-center">
            <h1 class="text-4xl font-extrabold text-white tracking-tight">Pengaturan Admin</h1>
            <p class="mt-2 text-sm text-slate-400">Tentukan nama pengguna dan kata sandi admin untuk sesi ini.</p>
        </div>
        <form action="{{ route('setup.store') }}" method="POST" class="mt-8 space-y-6">
            @csrf
            <div class="rounded-md space-y-4">
                <div>
                    <label for="username" class="block text-sm font-medium text-slate-300 ml-1 mb-1">Set Nama Pengguna</label>
                    <input id="username" name="username" type="text" required class="appearance-none relative block w-full px-4 py-3 bg-slate-800/50 border border-slate-700 placeholder-slate-500 text-white rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition duration-200" placeholder="Username baru">
                </div>
                <div>
                    <label for="password" class="block text-sm font-medium text-slate-300 ml-1 mb-1">Set Kata Sandi</label>
                    <input id="password" name="password" type="password" required class="appearance-none relative block w-full px-4 py-3 bg-slate-800/50 border border-slate-700 placeholder-slate-500 text-white rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition duration-200" placeholder="Password baru">
                </div>
            </div>

            <div>
                <button type="submit" class="group relative w-full flex justify-center py-3 px-4 border border-transparent text-sm font-semibold rounded-xl text-white bg-gradient-to-r from-blue-600 to-indigo-600 hover:from-blue-700 hover:to-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 shadow-lg transform hover:-translate-y-0.5 transition duration-200">
                    Simpan Konfigurasi
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
