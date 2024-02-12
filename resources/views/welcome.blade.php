@extends('layouts.default')
@section('content')
    @include('pages.sections._slide')
    <!--end section-->
    <div class="position-relative">
        <div class="home-shape-arrow">
            <a href="#about"><i class="mdi mdi-arrow-down arrow-icon text-dark h5 shadow"></i></a>
        </div>

        <div class="shape overflow-hidden text-white">
            <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
            </svg>
        </div>
    </div>
    <!-- Hero End -->
    @include('pages.sections._features')
    @include('pages.sections._about')
    @include('pages.sections._start')
    @include('pages.sections._services')
    @include('pages.sections._testimonial')
    @include('pages.sections._price')
    @include('pages.sections._team')
    @include('pages.sections._blog')
    @include('pages.sections._partener')
@endsection
