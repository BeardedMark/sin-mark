<section id="promo" class="pad-y-xlg pos-rel">
    <div class="wallpaper">
        <img src="{{ asset('img/brain.png') }}" alt="">
        <div class="overlay"></div>
    </div>

    <div class="container">
        <div class="row g-5">
            <div class="col col-12 col-lg order-2 order-lg-1">
                <div class="flex-col-lgr pad-x-md">
                    <div class="flex-col">
                        <h1 class="font-size-xxl font-color-contrast font-style-light">Синельщиков Марк</h1>
                        <p class="font-size-lgr font-color-accent">Web-Developer</p>
                    </div>

                    <p class="font-size-lg">IT-специалист, сочитающий технологии и творчество в решениях, вдохновляясь интересными и полезными идеями</p>

                    <div class="flex-row-md flex-wrap">
                        <a class="font-color-accent font-color-accent-hover font-light-hover font-size-lg speed-norm"
                            href="#hard-skills">Навыки</a>
                        <a class="font-color-accent font-color-accent-hover font-light-hover font-size-lg speed-norm"
                            href="#projects">Портфолио</a>
                        <a class="font-color-accent font-color-accent-hover font-light-hover font-size-lg speed-norm"
                            href="#tools">Инструменты</a>
                        <a class="font-color-accent font-color-accent-hover font-light-hover font-size-lg speed-norm"
                            href="#contacts">Контакты</a>
                    </div>
                </div>
            </div>

            <div class="col col-12 col-lg-auto order-1 order-lg-2 offset-lg-2">
                <div class="flex-center">
                    <svg overflow="visible" width="400" height="400" xmlns="http://www.w3.org/2000/svg">
                        <circle class="circle-line" cx="70" cy="330" r="65" />

                        <clipPath id="clip-circle">
                            <circle cx="200" cy="200" r="200" />
                        </clipPath>
                        <image href="{{ asset('img/avatar.png') }}" width="100%" height="100%"
                            clip-path="url(#clip-circle)" />

                        <circle class="circle-fill" cx="360" cy="40" r="40" />
                    </svg>
                </div>
            </div>
        </div>
    </div>
</section>