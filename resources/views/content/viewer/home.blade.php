@section('title', 'welc')

@extends('layouts.base')
@section('content')


    @include('sections.users.hero')
    @include('sections.users.abouts')
    @include('sections.users.fetures')
    @include('sections.users.blog')
    @include('sections.users.recent_work')
    @include('sections.users.testimonial')
    @include('sections.users.post')

    @include('sections.users.service')
    @include('sections.users.client')







    @include('sections.users.footer')


@endsection
