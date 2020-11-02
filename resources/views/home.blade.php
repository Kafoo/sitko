@extends('layouts.app')

@section('content')

<div class="container d-flex justify-content-center">
    <img class="conf conf-left" src="{{ asset('/assets/conf.png') }}">
    <h2>Bravo, tu es connecté ! =D</h2>
    <img class="conf conf-right" src="{{ asset('/assets/conf.png') }}">
</div>

<div class="container">

    <categories></categories>
    <example-component></example-component>

</div>
@endsection
