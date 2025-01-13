<!DOCTYPE html>
<html>
<head>
    <title>Zoo Application</title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    <?php
    // Inclure le menu sur toutes les pages
    $menuController = new MenuController();
    $menuController->displayMenu();
    ?>
    
    <main>
        <!-- Contenu spécifique de la page -->
        <?php echo $content; ?>
    </main>
</body>
</html>