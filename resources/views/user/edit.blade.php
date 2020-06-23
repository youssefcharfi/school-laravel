@extends('layouts.app')

@section('content')

<div class="container">
	<div class="row">
    <div class="col-md-4">
		<div class="form_main">
                <h4 class="heading"></strong>Editer la photo de profile<span></span></h4>
                <div class="form">
                <form action="{{ route('user.update',['user' => $user->id]) }}" method="post" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                   <div class="form-group">
                    <label for="file">Ajouter une image</label>
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