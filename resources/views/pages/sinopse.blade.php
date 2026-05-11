<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Sinopse - Gremlins</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-900 text-gray-100 font-sans">

<!-- Barra de Navegação -->
@include('menu.menu')

<!-- Cabeçalho -->
<header class="text-center py-10">
    <h1 class="text-4xl font-bold">Sinopse - Gremlins (1984)</h1>
    <h3 class="text-xl mt-2 text-gray-400">Direção: Joe Dante</h3>
</header>

<!-- Conteúdo Principal -->
<main class="max-w-4xl mx-auto px-6">
    <div class="flex justify-center mb-8">
        <img class="w-72 rounded-lg shadow-lg border-4 border-white"
             src="{{asset('/images/capa.jpg')}}"
             alt="Poster do filme Gremlins">
    </div>

    <section class="bg-gray-800 p-6 rounded-lg shadow-lg mb-10">
        <h2 class="text-2xl font-semibold mb-4">Sinopse</h2>
        <p class="text-justify leading-relaxed mb-4">
            Billy Peltzer recebe de presente um adorável Mogwai, uma criatura misteriosa com três regras fundamentais:
            nunca expô-lo à luz forte, jamais molhá-lo e, acima de tudo, nunca alimentá-lo após a meia-noite.
            Quando essas regras são quebradas, o que era doce e inocente se transforma em uma legião de Gremlins
            travessos e perigosos, espalhando caos pela cidade.
        </p>
        <p class="text-justify leading-relaxed">
            Misturando comédia, terror e fantasia, <span class="font-semibold">Gremlins</span> tornou-se um clássico
            dos anos 80, conquistando fãs ao redor do mundo e garantindo uma sequência em 1990.
        </p>
    </section>

    <!-- Galeria de Fotos -->
    <section>
        <h2 class="text-2xl font-semibold mb-6 text-center">Galeria de Fotos</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
            <img class="rounded-lg shadow-lg border-2 border-gray-700"
                 src="{{asset('/images/gremlins1.jpg')}}"
                 alt="Cena do filme Gremlins">
            <img class="rounded-lg shadow-lg border-2 border-gray-700"
                 src="{{asset('/images/gremlins2.jpg')}}"
                 alt="Gremlin travesso">
            <img class="rounded-lg shadow-lg border-2 border-gray-700"
                 src="{{asset('/images/gremlins3.jpg')}}"
                 alt="Mogwai fofo">
            <img class="rounded-lg shadow-lg border-2 border-gray-700"
                 src="{{asset('/images/gremlins4.jpg')}}"
                 alt="Cena de caos na cidade">
            <img class="rounded-lg shadow-lg border-2 border-gray-700"
                 src="{{asset('/images/gremlins5.jpg')}}"
                 alt="Gremlins em grupo">
            <img class="rounded-lg shadow-lg border-2 border-gray-700"
                 src="{{asset('/images/gremlins6.jpg')}}"
                 alt="Billy e Gizmo">
        </div>
    </section>
</main>

<!-- Rodapé -->
<footer class="text-center mt-12 text-gray-400 text-sm">
    <p>Projeto Laravel - Tela de Sinopse com Galeria em Tailwind</p>
</footer>

</body>
</html>
