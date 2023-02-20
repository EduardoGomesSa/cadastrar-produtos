<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    </head>
    <body>
        <div>
            <div>
                <h1>Cadastro de Produtos</h1>
                <form onSubmit={submit}>
                    <p>Nome: <input type="text"></p>  
                    <p>Preço: <input type="text"></p>
                    <p><button>Cadastrar</button></p>
                </form>
            </div>
        </div>   
    </body>
</html>
