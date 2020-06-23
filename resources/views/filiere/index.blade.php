@include('navbar')
     <table class="table">
        <thead class="thead-light">
          <tr>
            <th scope="col">Filieres Ensa Tanger (Cycle Ingénieure)</th>
          </tr>
        </thead>
        <tbody>
          @foreach($filieres as $filiere)
         <tr>
           <td><a href="{{ route('filiere.show',['filiere' => $filiere->id]) }}">{{ $filiere->name }} ({{ $filiere->abbreviation }})</a></td>
          </tr> 
          @endforeach
        </tbody>
      </table>
</body>
     