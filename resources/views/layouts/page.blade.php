@extends('layouts.app')

@section('page')
    <header>
        {{-- @include('partials.header') --}}
    </header>

    <main>
        {{-- @include('partials.background') --}}
        {{-- @include('partials.alerts') --}}
        @yield('content')
    </main>

    <footer>
        {{-- @include('partials.footer') --}}

        {{-- @include('layouts.components.sidebar') --}}
        {{-- @include('layouts.components.modal') --}}
    </footer>
@endsection
