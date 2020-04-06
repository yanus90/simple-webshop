{{--
  Template Name: Template productenoverzicht
--}}

@extends('layouts.app')

@section('content')
    @while(have_posts()) @php(the_post())
    @include('partials.hero-header')
    @include('sections.product-categories')
    @include('sections.products')
    @endwhile
@endsection
