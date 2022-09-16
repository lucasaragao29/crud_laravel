<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Estoque</title>
</head>
<body>
    <label for="">Nome</label><br>
    <input type="text" name="nome" value="<?php echo e($produtos->nome); ?>"><br>
    <label for="">Custo</label><br>
    <input type="text" name="custo" value="<?php echo e($produtos->custo); ?>"><br>
    <label for="">Preço</label><br>
    <input type="text" name="preço" value="<?php echo e($produtos->preço); ?>"><br>
    <label for="">Quantidade</label> <br>
    <input type="text" name="quantidade" value="<?php echo e($produtos->quantidade); ?>"><br>
</body>
</html><?php /**PATH C:\xampp7.4\htdocs\crud_laravel_faeterj\crud_laravel\resources\views/produtos/show.blade.php ENDPATH**/ ?>