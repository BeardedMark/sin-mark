<section id="portfolio">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="flex-col-lgr">
                    <div class="flex-col pad-x-md">
                        <h2 class="font-size-xxl font-style-light">Участие в разработках</h2>
                        <p class="font-size-lgr">Работа в команде над проектами</p>
                    </div>

                    <div class="row g-4">
                        <div class="col col-12 col-lg">
                            @component('pages.components.project', [
                                'name' => 'DNL Маркет',
                                'desc' => 'Интернет-магазин экспендиалов',
                                'url' => 'dnlmarket.ru',
                                'img' => asset('img/dnl.png'),
                                'tags' => ['Design', 'TeamLead', 'TechLead'],
                            ])
                            @endcomponent
                        </div>

                        <div class="col col-12 col-lg">
                            @component('pages.components.project', [
                                'name' => 'Мегаполис',
                                'desc' => 'Сеть городских автошкол',
                                'url' => 'mega54.com',
                                'img' => asset('img/megapolis.png'),
                                'tags' => ['Design', 'TeamLead', 'PM'],
                            ])
                            @endcomponent
                        </div>

                        <div class="col col-12 col-lg">
                            @component('pages.components.project', [
                                'name' => 'Devirs',
                                'desc' => 'Сайт независимой web-студии',
                                'url' => 'devirs.ru',
                                'img' => asset('img/devirs.png'),
                                'tags' => ['Design', 'TeamLead', 'PM'],
                            ])
                            @endcomponent
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>