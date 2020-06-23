@extends('actuality.original')

@section('content')

<style>
  .img-fluid{
    max-width: 67%;
    }
  </style>   
  
  <div class="jumbotron">
    <div class="container">
    </div>
  </div>

  <div class="container"> 
  <h2><span class="badge badge-info">Actualité</span>
   <h4 class="text-muted"> Added {{ $actu->updated_at->diffForHumans() }}</h4>
</h2> 
  <h2>{{ $actu->title }}</h2>
  <p>{{ $actu->content }}</p>
  @if($actu->image)
 <a href="{{ Storage::url( $actu->image->path)}}">cliquer ici pour télécharger le fichier</a>
  @endif
  @endsection