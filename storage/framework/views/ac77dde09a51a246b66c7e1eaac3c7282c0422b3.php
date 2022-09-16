<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Deletar Produto</title>
</head>
<body>
    <form action="<?php echo e(route('deletar_produto',['id'=>$produto->id])); ?>" method="post">
        <?php echo csrf_field(); ?>
        <label for="">Tem Certeza que desejas excluir?</label><br>
        <input type="text" name="nome" value="<?php echo e($produto->nome); ?>"><br>
        <button type="submit">Sim</button>
    </form>
</body>
</html><?php /**PATH C:\xampp7.4\htdocs\crud_laravel_faeterj\crud_laravel\resources\views/produtos/delete.blade.php ENDPATH**/ ?>