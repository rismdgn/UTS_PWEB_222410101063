<div class="cyber-card p-8 rounded-3xl border border-white/5 hover:border-{{ $color }}-500/30 transition duration-500 group">
    <div class="w-14 h-14 bg-{{ $color }}-500/10 rounded-2xl flex items-center justify-center text-{{ $color }}-400 mb-6 group-hover:scale-110 transition duration-500">
        {{ $slot }}
    </div>
    <h3 class="text-sm font-black text-slate-500 uppercase tracking-widest">{{ $title }}</h3>
    <p class="text-4xl font-black text-white mt-2">{{ $value }}</p>
    <p class="text-[10px] font-bold text-{{ $color }}-400 mt-2 uppercase">{{ $subtitle }}</p>
</div>
