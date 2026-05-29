@extends('layouts.main')

@section('title', 'HDC Events')

@section('content')

@php
    $base = rtrim(dirname($_SERVER['SCRIPT_NAME']), '/');
    if ($base === '.') {
        $base = '';
    }
@endphp

<h1>{{ $titulo }}</h1>

<img class="banner" src="{{ $base }}/img/banner.svg" alt="Banner HDC Events">

<p>Oiiii Ederrr Pansaniiii!</p>
cd C:\projetos\git\DevWeb2\semana22-05\ACTIONS\VTP.DWE2-2026-ACTIONS


@endsection
