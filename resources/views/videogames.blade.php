<x-layout>
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
        <x-card
        id="{{$videogame['id']}}"
        name="{{$videogame['name']}}"
        console="{{$videogame['console']}}"
        date="{{$videogame['date']}}"
        img="{{$videogame['img']}}"
        />
      </div>
      @endforeach
    </div>                    
  </div>
  </x-layout>