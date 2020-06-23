@extends('layouts.app')

@section('content')
<div class="alert alert-secondery" role="alert">
    {{ session()->get('status') }}
  </div>
<div class="container">
	<div class="row">
    <div class="col-md-4">
		<div class="form_main">
                <h4 class="heading"></strong>Editer l'actualitée<span></span></h4>
                <div class="form">
                <form action="{{ route('actu.update',['actu' => $actu->id]) }}" method="post" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                <input type="text"  placeholder="Titre de la nouvelle actualitée" value="{{ old('title', $actu->title ?? null) }}"  name="title" class="txt">
                	 <input placeholder="le contenu de l'actualitée" value="{{ old('content', $actu->content ?? null) }}" name="content" type="text" class="txt_3"></input>
                   <div class="form-group">
                    <label for="file">Ajouter un fichier</label>
                    <input type="file" name="file" id="file" class="form-control" placeholder="" aria-describedby="helpId">
                  </div>
                   <input type="submit" value="Editer" name="submit" class="txt2">
                </form>
            </div>
            </div>
        </div>
        </div>
</div>

    
@endsection