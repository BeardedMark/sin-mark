<div class="flex-col pad-md bord-rad-md bord-prime back-color-prime-hover speed-norm">
    <div class="flex-col">
        <div class="flex-row-md flex-y-center">
            <p class="font-size-xlg font-color-accent font-style-light">
                {{ $experience }}
                <span class="font-size-lg font-color-second">(по н.в.)</span>
            </p>
        </div>

        <p class="font-size-lgr">{{ $position }}</p>
    </div>

    <div class="flex-row-md flex-center">
        {{-- <img class="lock" height="16px" src="{{ $icon }}" alt=""> --}}

        <div class="flex-col">
            {{-- <p class="font-size-lg">{{ $company }}</p> --}}
            <p class="font-size-lg font-color-second">{{ $activity }}</p>
        </div>
    </div>
</div>
