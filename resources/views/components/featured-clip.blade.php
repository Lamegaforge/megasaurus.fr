<div class="absolute inset-x-0 inset-y-0 bg-no-repeat bg-cover blur-sm" style="background-image: url('{{ $featuredClip->thumbnail() }}')"></div>
<div class="w-[900px] max-w-full mx-auto px-5 lg:px-0 @if($infos) wrapper-has-infos @endif">
    <div class="relative aspect-video">
        <iframe class="absolute top-0 left-0 w-full h-full" src="{{ $iframeSrc() }}" allowfullscreen></iframe>
    </div>
    @if($infos)
    <div class="relative mt-8 lg:self-center lg:mt-0">
        <h2 class="text-light-shadow mb-4 text-2xl text-white lg:mb-5 lg:text-3xl">{{ $featuredClip->title }}<h2>
        <p class="text-light-shadow text-white text-lg lg:text-xl">par {{ $featuredClip->author->name }}</p>
        <p class="text-light-shadow text-white text-lg lg:text-xl">
            <a href="{{ route('games.show', $featuredClip->game->uuid) }}">{{ $featuredClip->game->name }}</a>
        </p>
        <p class="text-light-shadow text-white text-lg lg:text-xl">{{ $featuredClip->publishedAgo() }}</p>
        <p class="text-light-shadow text-white text-lg lg:text-xl">{{ $featuredClip->views }} vues</p>
    </div>
    @endif
</div>