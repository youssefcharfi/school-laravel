@extends('actuality.original')

@section('content')
 
@include('actuality.crud',['sentence' => 'Derniéres Actualitées'])

<a href="{{ route('indexall') }}"><button type="button" class="btn btn-outline-secondary">Autres Actualitées</button></a>
</center>

</main>
  
@endsection