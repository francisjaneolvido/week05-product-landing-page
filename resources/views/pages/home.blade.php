@extends('layouts.app')

@section('title', 'SmokeHouse | Filipino Grilled Favorites')

@section('content')

    {{-- HERO --}}
    <x-hero />


    {{-- FEATURES --}}
    <x-features.features />


    {{-- PRODUCT SHOWCASE --}}
    <x-showcase />


    {{-- PRICING --}}
    <x-pricing.pricing />


    {{-- TESTIMONIALS --}}
    <x-testimonials.testimonials />


    {{-- CALL TO ACTION --}}
    <x-cta />


    {{-- FOOTER --}}
    <x-footer />

@endsection