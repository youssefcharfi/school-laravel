@include('navbar')
<div class="col-md-8">
<table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">Nom</th>
      <th scope="col">Matière</th>
      <th scope="col">Date</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($absences as $absence)
  @can('view',$absence)
    <tr>
        <td>{{$absence->user->name}}</td>
        <td>{{$absence->matiere->name}}</td>
        <td>{{$absence->updated_at}}</td>
    @can('delete')
    <td> <form style="display: inline" action="{{ route('absence.destroy',['absence' => $absence->id]) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" class="close" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        </form>
     </td>    
     @endcan
    </tr>  
    @endcan 
  @endforeach
    </table>
    </div>
    <br>
    @can('create')
<form action="{{ route('absence.store') }}" method="POST">
    @csrf
      <div class="col-md-8">
        <div class="col-auto my-1">
          <label class="mr-sm-2" for="inlineFormCustomSelect">Marquer une nouvelle absence</label>
          <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="matiere">
            @foreach ($matieres as $matiere)
          <option  value="{{$matiere->id}}">{{ $matiere->name }}</option>
            @endforeach
          </select>
          <label class="mr-sm-2" for="inlineFormCustomSelect">Marquer l'etudiant Absentée</label>
          <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="etudiant">
            @foreach ($users as $user)
          <option  value="{{$user->id}}">{{ $user->name }}</option>
            @endforeach
          </select>
        </div>
        <div class="col-md-2">
          <button type="submit" class="btn btn-primary">Ajouter</button>
        </div>
        </div>
        
    </form>
    @endcan
