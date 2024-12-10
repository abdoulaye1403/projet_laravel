<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel</title>
    <style>
        .titre{
            text-align: center;
        }
    </style>
</head>
<body>
    <h1 class="titre">Bonjour Bienvenue sur mon site</h1>
    <a href="">Acceuil</a>
    <a href="{{ route('infos.info') }}">A propos</a>
    <a href="{{ route('produits.produit') }}">Produits</a>
    <a href="{{ route('contacts.contact') }}">Contact</a>
</body>
</html>