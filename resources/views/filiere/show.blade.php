@include('navbar')
<ul>
@foreach ($matieres as $matiere)
    <li>{{$matiere->name}}</li>
@endforeach
</ul>
<div class="container">
    <div class="row">
      <div class="col-sm">
      </div>
      <div class="col-sm">
  <a href="{{ route('absence.index') }}"><h2><span class="badge badge-danger">Liste D'absences</span></h2></a>
      </div>
      <div class="col-sm">
      </div>
    </div>
  </div>
