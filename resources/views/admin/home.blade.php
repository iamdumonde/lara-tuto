<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Home | Page</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>

<body>
    <h1>Bienvenu {{ $user }}  ! 🐎</h1>
    <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem expedita illum voluptatum, et, quibusdam
        provident molestias harum culpa alias nostrum blanditiis inventore quasi maiores? Consequatur, vero labore
        architecto aliquid qui itaque possimus ex impedit inventore ullam quia vel ipsum sapiente esse reiciendis
        necessitatibus. Nostrum minus praesentium minima iusto, quaerat provident rem ea autem inventore delectus amet.
    </p>
    <session>
        <h2>Listes des articles</h2>
        @if(count($articles)  > 0) :
        @foreach ($articles as $article) :
            <article>
                <h3>
                     {{ $article['title'] }} 
                </h3>
                <p>
                     {{ $article['description'] }} 
                </p>
                <a href="{{route('detail', $article['id'])}}">Voir article</a>
            </article>
        @endforeach
        @else :
            <p>Pas d'article pour le moment ... </p>
        @endif
    </session>
    {{-- @empty($articles)
        
    @endempty --}}

    {{-- <pre><?php var_dump($articles) ?></pre> --}}
</body>

</html>