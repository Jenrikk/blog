<?php require '../views/header.php'; ?>


    <div class="contenedor">
        <h2>Bienvenido <?php echo $nombreadmin ?></h2>
        <h2>Panel de control</h2>

        <?php foreach($posts as $post): ?>
            <div class="post">
            <article>
                 <h2 class="titulo"><?php echo $post['titulo']?></h2>
                 <p><?php echo $post['extracto']?></p>
                 <a href="../single.php?id=<?php echo $post['id']?>">VER</a> |
                 <a href="editar.php?id=<?php echo $post['id']?>">EDITAR</a> |
                 <a href="borrar.php?id=<?php echo $post['id']?>">BORRAR</a>
            </article>
        </div>
        <?php endforeach; ?>


        <?php require '../paginacion.php'; ?>
    </div>

<?php require '../views/footer.php'; ?>