<section id="projects">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="flex-col-lgr">
                    <div class="flex-col pad-x-md">
                        <h2 class="font-size-xxl font-style-light">Личные проекты</h2>
                        <p class="font-size-lgr">От идеи до домена</p>
                    </div>

                    <div class="row g-4">
                        <div class="col col-12 col-lg">
                            @component('pages.components.project', [
                                'name' => 'Вебзитка',
                                'desc' => 'Сеть интернет-визиток',
                                'url' => 'webzitka.ru',
                                'img' => asset('img/webzitka.png'),
                                'tags' => ['PHP', 'HTML', 'CSS'],
                            ])
                            @endcomponent
                        </div>

                        <div class="col col-12 col-lg">
                            @component('pages.components.project', [
                                'name' => 'TecRent',
                                'desc' => 'Аренда компьютеров и оборудования',
                                'url' => 'tecrent.ru',
                                'img' => asset('img/tecrent.png'),
                                'tags' => ['PHP', 'HTML', 'CSS'],
                            ])
                            @endcomponent
                        </div>

                        <div class="col col-12 col-lg">
                            @component('pages.components.project', [
                                'name' => 'CustomPoe',
                                'desc' => 'Инструменты для игрового комьюнити',
                                'url' => 'custompoe.ru',
                                'img' => asset('img/custompoe.png'),
                                'tags' => ['PHP', 'HTML', 'CSS'],
                            ])
                            @endcomponent
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>