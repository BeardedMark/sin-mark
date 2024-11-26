<section id="tools" class="pad-y-xlg pos-rel">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="flex-col-lgr">
                    <div class="flex-col pad-x-md">
                        <h2 class="font-size-xxl font-style-light">Рабочие инструменты</h2>
                        <p class="font-size-lgr">Приложения и сервисы для работы</p>
                    </div>

                    <div class="row g-4">
                        <div class="col col-12 col-lg-4">
                            @component('pages.components.tool', [
                                'icon' => asset('img/visual.png'),
                                'name' => 'VisualStudio',
                                'desc' => 'IDE для работы с кодом',
                                'link' => 'code.visualstudio.com',
                            ])
                            @endcomponent
                        </div>

                        <div class="col col-12 col-lg-4">
                            @component('pages.components.tool', [
                                'icon' => asset('img/figma.png'),
                                'name' => 'Figma',
                                'desc' => 'Инструмент для дизайна',
                                'link' => 'figma.com',
                            ])
                            @endcomponent
                        </div>

                        <div class="col col-12 col-lg-4">
                            @component('pages.components.tool', [
                                'icon' => asset('img/notion.png'),
                                'name' => 'Notion',
                                'desc' => 'Документация и заметки',
                                'link' => 'notion.so',
                            ])
                            @endcomponent
                        </div>

                        <div class="col col-12 col-lg-4">
                            @component('pages.components.tool', [
                                'icon' => asset('img/laravel.png'),
                                'name' => 'Laravel',
                                'desc' => 'Backend фреймворк',
                                'link' => 'laravel.com',
                            ])
                            @endcomponent
                        </div>

                        <div class="col col-12 col-lg-4">
                            @component('pages.components.tool', [
                                'icon' => asset('img/bootstrap.png'),
                                'name' => 'Bootstrap',
                                'desc' => 'Адаптивная разметка',
                                'link' => 'getbootstrap.com',
                            ])
                            @endcomponent
                        </div>

                        <div class="col col-12 col-lg-4">
                            @component('pages.components.tool', [
                                'icon' => asset('img/jquery.png'),
                                'name' => 'JQuery',
                                'desc' => 'Frontend библиотека',
                                'link' => 'jquery.com',
                            ])
                            @endcomponent
                        </div>

                        {{-- <div class="col col-12 col-lg-4">
                            @component('pages.components.tool', [
                                'icon' => asset('img/gpt.png'),
                                'name' => 'ChatGPT',
                                'desc' => 'Генерация контента',
                                'link' => 'chatgpt.com',
                            ])
                            @endcomponent
                        </div>

                        <div class="col col-12 col-lg-4">
                            @component('pages.components.tool', [
                                'icon' => asset('img/git.png'),
                                'name' => 'Git',
                                'desc' => 'Хостинг проектов',
                                'link' => 'github.com',
                            ])
                            @endcomponent
                        </div>

                        <div class="col col-12 col-lg-4">
                            @component('pages.components.tool', [
                                'icon' => asset('img/regular.png'),
                                'name' => 'Regular',
                                'desc' => 'Регулярные выражения',
                                'link' => 'regex101.com',
                            ])
                            @endcomponent
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>