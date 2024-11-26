<section id="blog">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="flex-col-lgr">
                    <div class="flex-col pad-x-md">
                        <h2 class="font-size-xxl font-style-light">Статьи и заметки</h2>
                        <p class="font-size-lgr">Архив мыслей и идей</p>
                    </div>

                    <div class="row g-4">
                        <div class="col col-12 col-lg">
                            @component('pages.components.project', [
                                'name' => 'Разметка по Фибоначчи',
                                'desc' => 'Подход к верстке, который основан на пропорциях золотого сечения и последовательности чисел Фибоначчи',
                                'tags' => ['Design', 'Frontend'],
                            ])
                            @endcomponent
                        </div>

                        <div class="col col-12 col-lg">
                            @component('pages.components.project', [
                                'name' => 'Формула трудозатрат',
                                'desc' => 'Анализ и прогнозирование затрат времени на задачу, исходя из истории задач и уровня их сложности',
                                'tags' => ['TeamLead', 'PM'],
                            ])
                            @endcomponent
                        </div>

                        <div class="col col-12 col-lg">
                            @component('pages.components.project', [
                                'name' => 'Радиус в пикселях',
                                'desc' => 'Таблица для определения целочисленного колличества пикселей по диагонали исходя из радиуса',
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