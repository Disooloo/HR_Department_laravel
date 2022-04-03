@extends('layouts.admin')
@section('title',  config('app.name', 'Отдел кадров'))

@section('content')
    <livewire:company-live />
@endsection
