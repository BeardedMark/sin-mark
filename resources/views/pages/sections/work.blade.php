<section id="work">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="flex-col-lgr">
                    <div class="flex-col pad-x-md">
                        <h2 class="font-size-xxl font-style-light">Коммерческий опыт</h2>
                        <p class="font-size-lgr">Работа в разных бизнес-моделях</p>
                    </div>

                    <div class="row g-4">
                        <div class="col col-12 col-lg">
                            @component('pages.components.work', [
                                'experience' => '5 лет',
                                'position' => 'Руководитель IT-отдела',
                                'company' => 'ООО «ДНЛ Упаковка»',
                                'activity' => 'Торговая компания',
                                'icon' => asset('img/dnl-logo.png'),
                            ])
                            @endcomponent
                        </div>

                        <div class="col col-12 col-lg">
                            @component('pages.components.work', [
                                'experience' => '3 года',
                                'position' => 'Лидер команды',
                                'company' => 'Devirs',
                                'activity' => 'Студия web-разработки',
                                'icon' => asset('img/devirs-logo.png'),
                            ])
                            @endcomponent
                        </div>

                        <div class="col col-12 col-lg">
                            @component('pages.components.work', [
                                'experience' => '1 год',
                                'position' => 'Руководитель проекта',
                                'company' => 'TECRENT',
                                'activity' => 'Аренда оборудования',
                                'icon' => asset('img/tecrent-logo.png'),
                            ])
                            @endcomponent
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>