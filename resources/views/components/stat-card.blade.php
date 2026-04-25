@props(['label', 'value', 'trend', 'trendUp' => true, 'iconBg' => 'bg-primary/10', 'iconColor' => 'text-primary', 'comparison'])

<div class="bg-surface-container-lowest p-5 rounded-2xl border border-outline-variant shadow-sm hover:shadow-md transition-all duration-300 group">
    <div class="flex justify-between items-start mb-4">
        <div class="w-10 h-10 rounded-xl {{ $iconBg }} flex items-center justify-center {{ $iconColor }} group-hover:scale-110 transition-transform duration-300">
            {{ $icon ?? '' }}
        </div>
        <span class="text-[10px] font-black text-secondary/60 uppercase tracking-[0.2em] pt-1">{{ $label }}</span>
    </div>
    <div class="flex items-baseline gap-2 mb-1">
        <span class="text-[24px] font-black text-on-surface leading-tight tracking-tight">{{ $value }}</span>
        <div class="flex items-center gap-0.5 px-1.5 py-0.5 rounded-md text-[11px] font-bold {{ $trendUp ? 'bg-emerald-500/10 text-emerald-600' : 'bg-error/10 text-error' }}">
            @if($trendUp)
                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path d="M2.25 18L9 11.25l4.306 4.307a11.95 11.95 0 015.814-5.519l2.74-1.22m0 0l-5.94-2.28m5.94 2.28l-2.28 5.941" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>
            @else
                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path d="M2.25 6L9 12.75l4.306-4.307a11.95 11.95 0 015.814 5.519l2.74 1.22m0 0l-5.94 2.28m5.94-2.28l-2.28-5.941" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>
            @endif
            <span>{{ $trend }}</span>
        </div>
    </div>
    <p class="text-[11px] text-secondary/50 font-medium tracking-tight">{{ $comparison }}</p>
</div>
