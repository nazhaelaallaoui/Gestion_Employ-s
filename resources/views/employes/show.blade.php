<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Détails de l'Employé</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>Détails de l'Employé</h1>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{ $employe->nom }} {{ $employe->prenom }}</h5>
                <p class="card-text"><strong>Salaire:</strong> {{ $employe->salaire }} €</p>
                <p class="card-text"><strong>Poste:</strong> {{ $employe->poste }}</p>
                <p class="card-text"><strong>Date d'embauche:</strong> {{ $employe->date_embauche }}</p>
                <a href="{{ route('employes.edit', $employe->id) }}" class="btn btn-warning">Modifier</a>
                <a href="{{ route('employes.index') }}" class="btn btn-secondary">Retour</a>
            </div>
        </div>
    </div>
</body>
</html>
