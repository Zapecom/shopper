@extends('shopper::layouts.'. config('shopper.system.theme'))
@section('title', __('Analytics'))

@section('content')

    <livewire:shopper-analytics.dashboard />

@endsection