<?php require 'header.php'; ?>


    <div class="contenedor">
        <div class="post">
            <article>
                <h2 class="titulo">
                    <a href="">Titulo del articulo</a>
                </h2>
                <p class="fecha">10 de Enero de 2011</p>
                <div class="thumb">
                    <a href="#">
                        <img src="<?php echo RUTA?>/imagenes/1.jpg" alt="">
                    </a>
                </div>
                <p class="extracto">s quam oratione eiciendum? Sint modo partes vitae beatae. Unum est sine dolore esse</p>
                <a class="continuar" href="">Seguir leyendo</a>
            </article>
        </div>

        <?php require 'paginacion.php'; ?>
    </div>

<?php require 'footer.php'; ?>