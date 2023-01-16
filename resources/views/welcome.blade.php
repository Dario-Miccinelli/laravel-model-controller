@extends('layouts.app')

@section('title-page', 'Movies')
    
@section('main-content')
    <div class="w-100 m-auto pb-5">   
     <h1 class="fs-2">DB Movies</h1>
     <h6>Some movies we got in our DB:</h6>
    </div>

     {{-- Record db table movies  --}}
    @foreach ($movie as $elem)


    <div class="card d-flex flex-wrap p-2 bg-dark border-0 " style="width: calc(100% / 5)">
        <img class="card-img-top p-2" src="https://www.nasa.gov/sites/default/files/styles/full_width/public/thumbnails/image/blackhole.png?itok=THJrwcHP" alt="Card image cap">
        <div class="card-body ">
          <h6 class="">{{$elem['title']}}</h6>
          <p class="card-text fs-6">Original title: <br>{{$elem['original_title']}}</p>
          <p class="card-text fs-6">Average vote: {{$elem['vote']}}</p>
          
        </div>
      </div>
  
    @endforeach

@endsection