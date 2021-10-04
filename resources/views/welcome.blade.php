@extends('template.main')

@section('content')
    @include('pages.frontend.home.homeSection')
    @include('pages.frontend.home.homeServices')
    @include('pages.frontend.home.homeGalerie')
    @include('pages.frontend.home.homeGuest')
    @include('pages.frontend.home.homeRestaurant')
    @include('pages.frontend.home.homeVideo')
    @include('pages.frontend.home.homeNews')
    @include('pages.frontend.home.homeGetin')
@endsection

