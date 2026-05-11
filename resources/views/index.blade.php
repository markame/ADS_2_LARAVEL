<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Gremlins - Página Simples</title>
    <!-- CDN do Tailwind -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-900 text-gray-100 font-sans">

<!-- Barra de Menu -->
@include('menu.menu')

<header class="text-center py-8">
    <h1 class="text-4xl font-bold">🎬 Gremlins (1984)</h1>
    <h3 class="text-xl mt-2">Direção: Joe Dante</h3>
</header>

<div class="flex justify-center mb-6">
    <img class="w-64 rounded-lg shadow-lg border-4 border-white"
         src="{{asset('/images/capa.jpg')}}"
         alt="Poster do filme Gremlins">
</div>

<div class="max-w-2xl mx-auto px-4 text-justify">
    <p class="mb-4">
        <span class="font-semibold">Sinopse:</span> Um jovem recebe de presente um misterioso animal de estimação chamado Mogwai,
        com três regras muito importantes: não expô-lo à luz forte, não molhá-lo e nunca alimentá-lo após a meia-noite.
        Quando essas regras são quebradas, criaturas travessas chamadas Gremlins são liberadas, causando caos na cidade.
    </p>

    <p>
        <span class="font-semibold">Curiosidade:</span> O filme mistura comédia, terror e fantasia, tornando-se um clássico dos anos 80
        e ganhando uma sequência em 1990.
    </p>
</div>

<footer class="text-center mt-10 text-gray-400 text-sm">
    <p>Projeto Laravel - Página simples em Blade com Tailwind</p>
</footer>

</body>
</html>
