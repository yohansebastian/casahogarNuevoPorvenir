<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <title>Lista Animales</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Patrick+Hand&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Italianno&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('public/styles/estilos.css') ?>">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark fondo">
            <div class="container-fluid">
                <a class="navbar-brand fuente" href="<?= base_url()?>">
                    <i class="fas fa-paw"></i>
                    Nuevo Porvenir
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="<?=site_url('/Animales')?>">Registro
                                Animales</a>
                        </li>
                        <li class="nav-item">
                            <!-- <a class="nav-link" href="Producto">Registrar Productos</a> -->
                            <a class="nav-link" href="<?=site_url('/Producto')?>">Registrar Productos</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <div class="container">
            <div class="row row-cols1 row-cols-md5 g4">
                <?php foreach ($animales as $animal) :?>
                <div class="col">
                    <div class="card h-100 p-3">
                        <img src="<?= $animal["a_fotografia"]?>" class="card-img-top h-100" alt="foto">
                        <div class="card-body">
                            <h5 class="card-title"><?= $animal["a_nombre"]?></h5>
                            <p class="card-text"><?= $animal["a_descripcion"]?><br>Edad <?= $animal["a_edad"]?></p>
                            <a href="#" data-bs-toggle="modal" data-bs-target="#confirmacion<?= $animal["a_id"]?>" class="btn btn-primary"><i class="fas fa-trash-alt"></i></a>
                            <a href="#" data-bs-toggle="modal" data-bs-target="#editar<?= $animal["a_id"]?>" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                        </div>
                    </div>
                    <section>
                        <div class="modal fade" id="confirmacion<?= $animal["a_id"]?>">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header fondo text-white">
                                        <h5 class="modal-title">Confirmación</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <p>¿Está seguro de eliminar el animal <strong><?= $animal["a_nombre"]?></strong> ?</p>
                                        <p></p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Cerrar</button>
                                        <a href="<?=site_url('/animal/eliminar/'.$animal["a_id"])?>" class="btn btn-danger">Aceptar</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <section>
                        <div class="modal fade" id="editar<?= $animal["a_id"]?>">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header fondo text-white">
                                        <h5 class="modal-title">Editar Animal</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-3 align-self-center">
                                                <img src="<?= $animal["a_fotografia"]?>" alt="foto" class="img-fluid w-100">
                                            </div>
                                            <div class="col-9">
                                                <form action="<?= site_url('/productos/editar/'.$animal["a_id"])?>" method="POST">
                                                    <div class="mb-3">
                                                        <label for="nombre">Nombre: </label>
                                                        <input class="form-control" id="nombre" name="nombre" type="text" placeholder="Nombre del Animal" value="<?= $animal["a_nombre"]?>">
                                                    </div>
                                                    <div class="mb-3">
                                                        <textarea name="descripcion" class="form-control" id="descripcion" cols="30" rows="10"
                                                        placeholder="Descripcion"><?= $animal["a_descripcion"]?></textarea>
                                                    </div>
                                                    <div class="mb-3">
                                                    <button class="btn btn-primary" type="submit">Editar Animal</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                   
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                <?php endforeach ?>
            </div>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous">
    </script>
    <script src="https://kit.fontawesome.com/3675f85246.js" crossorigin="anonymous"></script>
</body>

</html>