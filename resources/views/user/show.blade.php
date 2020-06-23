<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<style>

#fondecran {
 /* Fixe l'image en haut à gauche de la page */
 position: fixed; 
 top: 0; 
 left: 0; 
 /* Préserve le ratio de l'image */
 min-width: 100%;
 min-height: 100%;
}
    .body{
        padding-top:30px;
        }

.glyphicon {  margin-bottom: 10px;margin-right: 10px;}

small {
display: block;
line-height: 1.428571429;
color: #999;
}
</style>

<img src="https://i.pinimg.com/originals/f2/53/ff/f253ff48520ad098c840d27c9c4300c1.jpg" id=fondecran class=fondecran alt=/>

<div class="container">
    <div class="row">
        <div class="col-md-12 my-5">
            <div class="well well-sm">
                <div class="row">
                    <div class="col-sm-5 col-md-4">
                        @can('update',$user)
                    <a href="{{ route('user.edit',['user' => $user]) }}"><img src="{{ $user->image ? Storage::url($user->image->path) : 'https://previews.123rf.com/images/salamatik/salamatik1801/salamatik180100019/92979836-ic%C3%B4ne-de-visage-anonyme-de-profil-personne-silhouette-grise-avatar-par-d%C3%A9faut-masculin-photo-placeholder-.jpg'}}" class="img-rounded img-responsive" /></a>
                    @endcan
                    @cannot('update',$user)
                    <img src="{{ $user->image ? Storage::url($user->image->path) : 'https://previews.123rf.com/images/salamatik/salamatik1801/salamatik180100019/92979836-ic%C3%B4ne-de-visage-anonyme-de-profil-personne-silhouette-grise-avatar-par-d%C3%A9faut-masculin-photo-placeholder-.jpg'}}" class="img-rounded img-responsive" /></a>
                    @endcannot
                    </div>
                    <div class="col-sm-6 col-md-8">
                        <h4>{{$user->name}} </h4>
                        <small><cite title="San Francisco, USA">Tanger, Maroc <i class="glyphicon glyphicon-map-marker">
                        </i></cite></small>
                        <p>
                            <i class="glyphicon glyphicon-book"></i>{{ $user->filiere->name}}
                            <br />
                            <i class="glyphicon glyphicon-envelope"></i>{{$user->email}}
                            <br />
                            <i class="glyphicon glyphicon-gift"></i>June 02, 1998</p>
                            @can('view',$user)
                            <div class="dropdown">
                                <button class="btn btn-danger dropdown-toggle" type="button" data-toggle="dropdown">
                                  Action
                                </button>
                                <div class="dropdown-menu"> 
                                <a class="dropdown-item" href="{{ route('user.edit',['user' => $user->id]) }}">Editer la photo de profile</a>
                                <a class="dropdown-item" href="{{ route('filiere.show',['filiere' => $user->filiere_id]) }}">Filiere</a>
                                <a class="dropdown-item" href="{{ route('home') }}">Home</a>
                                <a class="dropdown-item" href="{{ route('actu.index') }}">ENSAT</a>
                                </div>
                              </div>
                              @endcan
                              @cannot('view',$user)
                            <a href="{{ route('actu.index') }}"><button type="button" class="btn-block btn-primary">Accueil</button></a>
                              @endcannot
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</div>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>