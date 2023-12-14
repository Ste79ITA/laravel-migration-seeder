@extends('layouts.app')

@section('title', "TRAIN'S PAGE")

@section('content')
<section class="py-5">
<div class="container">
    <h1 class="title py-5 ">TRAIN'S PAGE</h1>

    <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">Azienda</th>
            <th scope="col">Stazione di Partenza</th>
            <th scope="col">Stazione di Arrivo</th>
            <th scope="col">Orario di Partenza</th>
            <th scope="col">Oririo di Arrivo</th>
            <th scope="col">Codice Treno</th>
            <th scope="col">Numero Carrozze</th>
            <th scope="col">In Orario</th>
            <th scope="col">Cancellato</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($trains as $train)
          <tr>
            <td>{{ $train->azienda }}</td>
            <td>{{ $train->stazione_di_partenza }}</td>
            <td>{{ $train->stazione_di_arrivo }}</td>
            <td>{{ $train->orario_di_partenza }}</td>
            <td>{{ $train->orario_di_arrivo }}</td>
            <td>{{ $train->codice_treno }}</td>
            <td>{{ $train->numero_carrozze }}</td>
            <td>{{ $train->in_orario == 0 ? 'No' : 'Si'}}</td>
            <td>{{ $train->cancellato == 0 ? 'No' : 'Si'}}</td>
          </tr>
          @endforeach
          
        </tbody>
      </table>
    <div class="trains">
        

       
    </div>
</div>
</section>
@endsection