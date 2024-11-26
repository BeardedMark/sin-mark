<section id="about">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="flex-col-lgr">
                    <div class="flex-col pad-x-md">
                        <h2 class="font-size-xxl font-style-light">О себе</h2>
                        <p class="font-size-lgr">Креативный и независимый разработчик</p>
                    </div>

                    <div class="row g-4">
                        <div class="col col-12 col-lg">
                            @component('pages.components.text', [
                                'name' => 'Fullstack',
                                'desc' => 'Имею навыки работы с Frontend и Backend инструментами, позволяющими создать сайт',
                            ])
                            @endcomponent
                        </div>

                        {{-- <div class="col col-12 col-lg">
                            @component('pages.components.text', [
                                'name' => 'Backend',
                                'desc' => 'Специализируюсь на разработке логики и построении архитектуры проекта, на фреймворке Laravel',
                            ])
                            @endcomponent
                        </div> --}}

                        <div class="col col-12 col-lg">
                            @component('pages.components.text', [
                                'name' => 'TechLead',
                                'desc' => 'Организую задачи, координирую работу специалистов в команде и оптимизирую процессы',
                            ])
                            @endcomponent
                        </div>

                        <div class="col col-12 col-lg">
                            @component('pages.components.text', [
                                'name' => 'Designer',
                                'desc' => 'Уверенно работаю с Figma, стараясь создать красивый, креативный и удобный дизайн',
                            ])
                            @endcomponent
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>