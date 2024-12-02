<div class="frame-shadow flex-col-sm pad-sm bord-rad-md back-color-prime speed-norm transform-up-hover h-100">
    @if (!empty($img))
        <img class="bord-rad-smr w-100 " src="{{ $img }}" alt="">
    @endif

    <div class="flex-col pad-smr flex-start h-100">
        <a href="@if (!empty($url)) https://{{ $url }} @endif" target="_blink" class="font-color-accent-hover font-light-hover font-size-lg font-color-accent font-light-hover speed-norm">{{ $name }}</a>
        <p class="font-size-md">{{ $desc }}</p>
        @if (!empty($url))
            <a target="_blink" class="font-size-md font-color-second font-color-accent-hover speed-norm" href="https://{{ $url }}">{{ $url }}</a>
        @endif
    </div>

    @if (!empty($tags))
        <div class="flex-row-smr">
            @foreach ($tags as $tag)
                @component('pages.components.tag', ['name' => $tag])
                @endcomponent
            @endforeach
        </div>
    @endif
</div>
