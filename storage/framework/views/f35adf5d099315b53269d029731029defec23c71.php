<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro de Novo Produto</title>
</head>
<body>
    <form action="<?php echo e(route ('registrar_produto')); ?>" method="post">
        <?php echo csrf_field(); ?>
        <label for="">Nome</label><br>
        <input type="text" name="nome"><br>
        <label for="">Custo</label><br>
        <input type="text" name="custo"><br>
        <label for="">Preço</label><br>
        <input type="text" name="preço"><br>
        <label for="">Quantidade</label> <br>
        <input type="text" name="quantidade"><br>
        <button type="submit">Salvar</button>
    </form>
</body>
</html><?php /**PATH C:\xampp7.4\htdocs\crud_laravel_faeterj\crud_laravel\resources\views/produtos/criar.blade.php ENDPATH**/ ?>