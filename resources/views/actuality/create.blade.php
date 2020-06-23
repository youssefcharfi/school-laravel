@extends('layouts.app')

@section('content')
@if(session()->has('status'))
<div class="alert alert-secondery" role="alert">
  {{ session()->get('status') }}
</div>
@endif
<div class="container">
	<div class="row">
    <div class="col-md-4">
		<div class="form_main">
                <h4 class="heading"></strong>Nouvelle Actualitée<span></span></h4>
                <div class="form">
                <form action="{{ route('actu.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                <input type="text"  placeholder="Titre de la nouvelle actualitée" value="{{ old('title', $actu->content ?? null) }}"  name="title" class="txt">
                	 <textarea placeholder="le contenu de l'actualitée" value="{{ old('content', $actu->content ?? null) }}" name="content" type="text" class="txt_3"></textarea>
                  <div class="form-group">
                    <label for="file">Ajouter un fichier</label>
                    <input type="file" name="file" id="file" class="form-control" placeholder="" aria-describedby="helpId">
                  </div>
                   <input type="submit" value="Ajouter" name="submit" class="txt2">
                </form>
            </div>
            </div>
        </div>
        </div>
</div>
@endsection