<h2>Liste des employés</h2>
<a href="{{ route('employes.create') }}">Ajouter</a>

<table border="1">
@foreach($employes as $e)
<tr>
<td>{{ $e->nom }}</td>
<td>{{ $e->prenom }}</td>
<td>{{ $e->poste }}</td>
<td>{{ $e->salaire }}</td>
<td>
<a href="{{ route('employes.edit',$e->id) }}">Modifier</a>
<form action="{{ route('employes.destroy',$e->id) }}" method="POST">
@csrf
@method('DELETE')
<button>Supprimer</button>
</form>
</td>
</tr>
@endforeach
</table>
