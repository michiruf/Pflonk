@extends('layouts.app')
@section('title', 'Index')

@section('content')
    @include('layouts.include.hero')

    <livewire:product-list/>
@endsection
