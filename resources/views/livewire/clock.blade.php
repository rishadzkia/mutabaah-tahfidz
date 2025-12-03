<div class="livewire-clock inline-block text-center p-3 rounded-lg shadow-lg" style="min-width:140px;">
    <div wire:poll.1000ms="refresh">

        @php
            $time = \Carbon\Carbon::now($timezone)->format($format);
        @endphp

        <div style="font-family: 'Segoe UI', Roboto, Arial; font-weight:700; font-size:2rem;">
            {{ $time }}
        </div>

        <div style="font-size:0.8rem; margin-top:6px; color: #555;">
            {{ $timezone }}
        </div>

    </div>
</div>
