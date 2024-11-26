<section id="contacts" class="pad-y-xlg pos-rel">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="flex-col-lgr">
                    {{-- <div class="flex-col pad-x-md">
                        <h2 class="font-size-xxl font-style-light">Контакты и реквизиты</h2>
                        <p class="font-size-lgr">А так же ссылки и соцсети</p>
                    </div> --}}

                    <div class="row g-5">

                        <div class="col col-12 col-lg-5">
                            <div class="flex-col-md pad-md bord-rad-md bord-prime back-color-prime-hover speed-norm">
                                <div class="flex-row-md flex-start">
                                    <div class="flex-col">
                                        <p class="font-size-lg font-color-accent">Реквизиты</p>
                                        <p class="font-size-md">ИП Синельщиков Марк Романович</p>
                                        <p class="font-size-md">г.Новосибирск</p>
                                    </div>
                                    
                                    <img class="lock" src="{{ asset('img/document.png') }}" alt="">
                                </div>

                                <div class="flex-col">
                                    <p class="font-size-md">ИНН: 220421489755</p>
                                    <p class="font-size-md">ОГРН: 323220200119280</p>
                                </div>

                                <div class="flex-row-md flex-start">
                                    <a class="font-size-md font-color-second font-color-accent-hover speed-norm"
                                        href="{{ route('legal.download') }}">Скачать</a>
                                    <a class="font-size-md font-color-second font-color-accent-hover speed-norm"
                                        href="{{ route('legal.open') }}">Открыть</a>
                                        <a class="font-size-md font-color-second font-color-accent-hover speed-norm"
                                            href="https://yandex.ru/search/?text=Индивидуальный+предприниматель+Синельщиков+Марк+Романович" target="_blank">Яндекс</a>
                                        <a class="font-size-md font-color-second font-color-accent-hover speed-norm"
                                            href="https://www.google.com/search?q=Индивидуальный+предприниматель+Синельщиков+Марк+Романович" target="_blank">Google</a>
                                </div>
                            </div>
                        </div>

                        <div class="col col-12 col-lg">
                            <div class="flex-col-lg pad-x-md">
                                <div class="flex-col font-end">
                                    <p class="font-size-xlg font-style-light"><span
                                            class="font-style-light font-color-accent">sin.mark.r</span>@gmail.com
                                    </p>
                                    <p class="font-size-xxl font-style-light">8 (913) <span
                                            class="font-style-light font-color-accent">920-84-05</span></p>
                                    {{-- <p class="font-size-lgr font-color-second">г.Новосибирск</p> --}}
                                </div>

                                <div class="flex-row-md flex-end">
                                    <a class="transform-scale-hover font-color-accent font-color-contrast-hover font-size-lg speed-norm"
                                        target="_blink" href="https://wa.me/79139208405">
                                        <img class="lock" height="42px" src="{{ asset('img/wa.png') }}"
                                            alt="">
                                    </a>

                                    <a class="transform-scale-hover font-color-accent font-color-contrast-hover font-size-lg speed-norm"
                                        target="_blink" href="https://t.me/+79139208405">
                                        <img class="lock" height="42px" src="{{ asset('img/tg.png') }}"
                                            alt="">
                                    </a>

                                    <a class="transform-scale-hover font-color-accent font-color-contrast-hover font-size-lg speed-norm"
                                        target="_blink" href="https://vk.com/beardedmark">
                                        <img class="lock" height="42px" src="{{ asset('img/vk.png') }}"
                                            alt="">
                                    </a>

                                    <a class="transform-scale-hover font-color-accent font-color-contrast-hover font-size-lg speed-norm"
                                        target="_blink" href="https://discordapp.com/users/274204663446765569/">
                                        <img class="lock" height="42px" src="{{ asset('img/discord.png') }}"
                                            alt="">
                                    </a>

                                    {{-- <a class="transform-scale-hover font-color-accent font-color-contrast-hover font-size-lg speed-norm"
                                        target="_blink" href="https://steamcommunity.com/id/beardedmark/">
                                        <img class="lock" height="42px" src="{{ asset('img/steam.png') }}"
                                            alt="">
                                    </a> --}}

                                    <a class="transform-scale-hover font-color-accent font-color-contrast-hover font-size-lg speed-norm"
                                        target="_blink" href="https://github.com/BeardedMark">
                                        <img class="lock" height="42px" src="{{ asset('img/git.png') }}"
                                            alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
