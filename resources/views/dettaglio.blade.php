@extends('layouts.app')

@section('content')

  <!-- MAIN -->

  <main>

  <div class="container py-5 my-5">
    <div class="row">
      <div class="col-12">
        
        <div class="card mb-3" style="max-width: 540px;">
          <div class="row g-0">
            <div class="col-md-4 d-flex align-items-center">
              <img src="{{$videogame['img']}}" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <h5 class="card-title">{{$videogame['name']}}</h5>
                <p class="card-text">{{$videogame['console']}}</p>
                <p class="card-text">{{$videogame['date']}}</p>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer. This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
              </div>
            </div>
          </div>
        </div>

      </div>    
    </div>                    
  </div>
  
  </main>
  
  @endsection