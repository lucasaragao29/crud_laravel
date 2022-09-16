<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Atualizar Produto</title>
</head>
<body>
    <form action="{{route('alterar_produto',['id'=>$produtos->id])}}" method="post">
        @csrf
    <label for="">Nome</label><br>
    <input type="text" name="nome" value="{{$produtos->nome}}"><br>
    <label for="">Custo</label><br>
    <input type="text" name="custo" value="{{$produtos->custo}}"><br>
    <label for="">Preço</label><br>
    <input type="text" name="preço" value="{{$produtos->preço}}"><br>
    <label for="">Quantidade</label> <br>
    <input type="text" name="quantidade" value="{{$produtos->quantidade}}"><br>
    <button type="submit">Salvar</button>
    </form>
</body>
</html>