@props(['label', 'value', 'trend', 'trendUp' => true, 'icon', 'iconBg' => 'bg-blue-50 dark:bg-blue-950/30', 'iconColor' => 'text-blue-600', 'comparison'])

<div class="bg-white dark:bg-slate-900 p-4 rounded-lg border border-slate-200 dark:border-slate-800 shadow-sm transition-colors duration-300">
    <div class="flex justify-between items-start mb-2">
        <span class="text-[11px] font-semibold text-secondary dark:text-slate-400 uppercase tracking-wider">{{ $label }}</span>
        <div class="w-8 h-8 rounded {{ $iconBg }} flex items-center justify-center {{ $iconColor }}">
            <span class="material-symbols-outlined text-[18px]">{{ $icon }}</span>
        </div>
    </div>
    <div class="flex items-baseline gap-2">
        <span class="text-[20px] font-black text-on-surface dark:text-white">{{ $value }}</span>
        <span class="text-[12px] font-semibold flex items-center {{ $trendUp ? 'text-emerald-600' : 'text-error' }}">
            <span class="material-symbols-outlined text-[14px]">{{ $trendUp ? 'trending_up' : 'trending_down' }}</span> {{ $trend }}
        </span>
    </div>
    <p class="text-[10px] text-slate-400 dark:text-slate-500 mt-1">{{ $comparison }}</p>
</div>
