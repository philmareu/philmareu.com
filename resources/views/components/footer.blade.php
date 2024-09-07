<div class="md:flex items-center p-8 bg-slate-600 text-slate-200 mt-16">
    <div class="basis-1/2">{{ now()->format('Y') }} {{ $user->name }}</div>
    <div class="basis-1/2 space-x-3 uppercase text-slate-950/70 font-bold text-right mt-2 md:mt-0">
        @foreach($user->links as $link)
            <a href="{{ $link['url'] }}" class="px-3 py-1 bg-slate-300 border border-slate-800/20 rounded text-sm">{{ $link['name'] }}</a>
        @endforeach
    </div>
</div>
