@extends('layouts.page')
@section('title', 'Синельщиков Марк : Web-Developer')
@section('description', 'FullStack разработчик, TechLead и дизайнер web сайтов и проектов')

@section('content')
    <div class="flex-col-xxl">
        {{-- About --}}
        
        @component('pages.sections.promo')
        @endcomponent

        @component('pages.sections.about')
        @endcomponent

        @component('pages.sections.experience')
        @endcomponent

        {{-- Skills --}}

        {{-- @component('pages.sections.stack')
        @endcomponent --}}

        @component('pages.sections.hard-skills')
        @endcomponent

        @component('pages.sections.soft-skills')
        @endcomponent

        {{-- Portfolio --}}

        @component('pages.sections.projects')
        @endcomponent

        @component('pages.sections.portfolio')
        @endcomponent

        @component('pages.sections.work')
        @endcomponent

        @component('pages.sections.ad-1')
        @endcomponent

        {{-- More --}}

        @component('pages.sections.tools')
        @endcomponent

        @component('pages.sections.ad-2')
        @endcomponent

        @component('pages.sections.contacts')
        @endcomponent

        @component('pages.sections.the-end')
        @endcomponent
    </div>
@endsection
