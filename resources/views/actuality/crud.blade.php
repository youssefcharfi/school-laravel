<style>
  .inline{
  display:inline;
}
</style>
<main role="main">

    <div class="jumbotron">
      <div class="container">
      </div>
    </div>
    <div class="container"> 
    <h2><span class="badge badge-info">{{ $sentence }}</span></h2>
      <div class="row">
       @foreach ($actus as $actu)
      <div class="col-md-4">
        <p>
          @can('delete',$actu)
          <form style="display: inline" action="{{ route('actu.destroy',['actu' => $actu->id]) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="close" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            </form>
            @endcan
        <h2>{{ $actu->title }}
          @if($actu->image)
          <span class="badge badge badge-dark">Fichier</span>
          @endif
        </h2>        
        </p>
        <p>{{ $actu->content }}</p>
        <p class="text-muted">
           Added {{ $actu->updated_at->diffForHumans() }}
        </p>
      <p>
        <a class="btn btn-outline-secondary" href="{{ route('actu.show',[ 'actu' => $actu->id ]) }}" role="button">details &raquo;</a> 
        @can('update',$actu)
        <a href="{{ route('actu.edit',[ 'actu' => $actu->id ]) }}"><button type="button" class="btn btn-outline-info">Editer</button></a>
        @endcan   
        </p> 
  </div> 
       @endforeach 
      
  </div>
  
      <hr>
      
    </div> <!-- /container -->
    
  <center>
    @can('create')
    <a class="btn btn-primary" href="{{ route('actu.create') }}" role="button">ajouter</a>
    @endcan
 
   