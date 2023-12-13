@extends('layouts.app')

@section('title', "TRAIN'S PAGE")

@section('content')
<section class="py-5">
<div class="container ">
    <h1 class="title py-5">TRAIN'S PAGE</h1>
    @foreach ($trains as $train)
        <div class="train d-flex gap-3">
            <p>{{ $train->azienda }}</p>
            <p>{{ $train->stazione_di_partenza }}</p>
            <p>{{ $train->stazione_di_arrivo }}</p>
            <p>{{ $train->giorno }}</p>
            <p>{{ $train->orario_di_partenza }}</p>
            <p>{{ $train->orario_di_arrivo }}</p>
            <p>{{ $train->codice_treno }}</p>
            <p>{{ $train->numero_carrozze }}</p>
            <p>{{ $train->in_orario }}</p>
            <p>{{ $train->cancellato }}</p>
        </div>
    @endforeach
    <div class="trains">
        

       
    </div>
</div>
</section>
@endsection