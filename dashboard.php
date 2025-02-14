<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau de Bord</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="container mt-4">

    <h1 class="text-center">Bienvenue dans le Tableau de Bord</h1>

    <div class="row mt-4">
        <!-- Section Admin -->
        <div class="col-md-4">
            <div class="card border-primary">
                <div class="card-header bg-primary text-white">Administrateur</div>
                <div class="card-body">
                    <a href="ajouter_employe.php" class="btn btn-primary w-100 mb-2">Ajouter un Employé</a>
                    <a href="modifier_mdp.php" class="btn btn-warning w-100 mb-2">Modifier mon mot de passe</a>
                    <a href="logout.php" class="btn btn-danger w-100">Déconnexion</a>
                </div>
            </div>
        </div>

        <!-- Section Employé -->
        <div class="col-md-4">
            <div class="card border-success">
                <div class="card-header bg-success text-white">Employé</div>
                <div class="card-body">
                    <a href="moderer_avis.php" class="btn btn-success w-100 mb-2">Modérer les Avis</a>
                    <a href="modifier_mdp.php" class="btn btn-warning w-100 mb-2">Modifier mon mot de passe</a>
                    <a href="logout.php" class="btn btn-danger w-100">Déconnexion</a>
                </div>
            </div>
        </div>

        <!-- Section Docteur -->
        <div class="col-md-4">
            <div class="card border-info">
                <div class="card-header bg-info text-white">Docteur</div>
                <div class="card-body">
                    <a href="modifier_mdp.php" class="btn btn-warning w-100 mb-2">Modifier mon mot de passe</a>
                    <a href="logout.php" class="btn btn-danger w-100">Déconnexion</a>
                </div>
            </div>
        </div>
    </div>

</body>
</html>