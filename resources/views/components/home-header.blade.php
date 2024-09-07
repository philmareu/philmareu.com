<header class="py-16 bg-slate-50">
    <div class="text-center">
        <img src="{{ $user->image }}" alt="Image of Phil Mareu" class="rounded-full ring-slate-200 ring-4 mx-auto">
        <div class="font-serif mt-8 md:w-4/5 md:mx-auto">
            <div class="uppercase text-3xl md:text-6xl bg-gradient-to-r from-slate-500 via-slate-400 to-slate-900 text-transparent bg-clip-text inline-block">Hi, I'm {{ $user->name }}</div>
            <br>
            <div class="uppercase text-2xl md:text-4xl bg-gradient-to-r from-teal-500 via-teal-400 to-teal-900 text-transparent bg-clip-text inline-block">{{ $user->hero }}</div>
        </div>
    </div>
    <div class="px-8 md:w-2/3 mx-auto text-center mt-8">
        <p class="text-xl">{{ $user->summary }}</p>
        <div class="space-x-3 uppercase text-slate-950/70 font-bold mt-8">
            @foreach($user->links as $link)
                <a href="{{ $link['url'] }}" class="px-3 py-1 bg-slate-300 border border-slate-800/20 rounded text-sm">{{ $link['name'] }}</a>
            @endforeach
        </div>
    </div>
</header>
