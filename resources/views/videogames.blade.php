@extends('layouts.app')

@section('content')

  <!-- MAIN -->

  <main>


  <div class="container py-5 my-5">
    <div class="row">
      <div class="col-12">
        <h1>Prodotti</h1>
      </div>    
    </div>                    
  </div>


  <div class="container py-2 my-2">
    <div class="row">
      @foreach($videogames as $videogame)
      <div class="col-md-3 py-5 my-5">
        <div class="card" style="width: 18rem;">
          <img src="{{$videogame['img']}}" style="width: 18rem;" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">{{$videogame['name']}}</h5>
            <p class="card-text">{{$videogame['console']}}</p>
            <p class="card-text">{{$videogame['date']}}</p>
            <a href="{{route('videogames-dettaglio', ['id' => $videogame['id']])}}" class="btn btn-primary">Visualizza prodotto</a>
          </div>
        </div>
      </div>
      @endforeach
    </div>                    
  </div>

  </main>

  
  @endsection