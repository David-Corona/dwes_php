<?php include __DIR__ . '/partials/inicio-doc.part.php'; ?>

    </head>
<body>
    <?php include __DIR__ . '/partials/header.part.php'; ?>

    <div class="main">
        <div class="shop_top">
            <div class="container">
                <div class="row">
                    <h1>Alta nuevo producto</h1>
                    <hr>


                    <div class="col-md-12 contact">
                        <?php if ($_SERVER['REQUEST_METHOD'] === 'POST') : ?>
                            <div class="alert alert-<?= empty($errores) ? 'success' : 'danger'; ?> alert-dismissible" role="alert">
                                <!--<button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>-->
                                <?php if(empty($errores)) : ?>
                                    <p><?= $GLOBALS['mensaje'] ?></p>
                                <?php else : ?>
                                    <ul>
                                        <?php foreach($errores as $error) : ?>
                                            <li><?= $error ?></li>
                                        <?php endforeach; ?>
                                    </ul>
                                <?php endif; ?>
                            </div>
                        <?php endif; ?>
                        <form method="post" action="<?= $_SERVER['PHP_SELF'] ?>" enctype="multipart/form-data">
                            <div class="">


                                <p><label for="titulo">(*) Título</label>
                                    <input type="text" class="text" name="titulo" value="<?= $GLOBALS['titulo'] ?>" required></p>

                                <p><label for="subtitulo">(*) Subtítulo</label>
                                    <input type="text" class="text" name="subtitulo" value="<?= $GLOBALS['subtitulo'] ?>" required></p>

                                <p><label for="descripcion">Descripción</label>
                                    <textarea name="descripcion" rows="5" cols="40" ><?= $GLOBALS['descripcion'] ?></textarea></p>

                                <p><label for="precio">(*) Precio</label>
                                    <input type="number" name="precio" min="0.00" max="1000" step="0.01" value="<?= $GLOBALS['precio'] ?>" required></p>

                                <p><label for="imagen">Imagen</label>
                                    <input type="file" class="form-control" name="imagen" ></p>

                                <button class="">ENVIAR</button>


                                <!--<div class="form-submit">
                                    <input name="submit" type="submit" id="submit" value="Submit"><br>
                                </div>-->



                            </div>
                            <div class="clear">Los campos marcados con (*) son obligatorios.</div>
                        </form>
                    </div>





                </div>
            </div>
        </div>
    </div>

    <?php include __DIR__ . '/partials/fin-doc.part.php'; ?>
</body>
</html>