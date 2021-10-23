<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <title>Registro Producto</title>
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
                            <a class="nav-link" href="<?=site_url('/Producto')?>">Registrar Productos</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>


    <section>
        <div class="container mb-5">
            <div class="row mt-5">
                <div class="col-md-6 mt-5 align-self-center">
                    <img src="<?= base_url('public/img/mascotasmayoristas.jpg') ?>" class="img-fluid w-100 rounded">
                </div>
                <div class="col-12 col-md-6">
                    <h1 class="fw-bold fuente"><span><i class="fas fa-paw"></i></span> Registro de Productos</h1>
                    <form action="<?= site_url('/registrarProducto')?>" method="POST" class="mt-4">
                        <label for="producto">Producto: </label>
                        <input class="form-control" id="producto" name="producto" type="text"
                            placeholder="Nombre Producto">
                        <br>
                        <label for="fotografia">Fotografía: </label>
                        <input class="form-control" id="fotografia" name="fotografia" type="text"
                            placeholder="URL de la fotografia">
                        <br>
                        <label for="precio">Precio Unidad : </label>
                        <input class="form-control" id="precio" name="precio" type="text">
                        <br>
                        <textarea name="descripcion" class="form-control" id="descripcion" name="descripcion" cols="30"
                            rows="10" placeholder="Descripcion"></textarea>
                        <br>
                        <select class="form-select" aria-label="Default select example" name="tipo">
                            <option selected>Selecciona un tipo de animal</option>
                            <option value="1">Perros</option>
                            <option value="2">Gatos</option>
                            <option value="3">Aves</option>
                            <option value="4">Reptiles</option>
                            <option value="5">Caballos</option>
                        </select>
                        <br>
                        <div class="d-grid gap-2 col-6 mx-auto">
                            <button class="btn btn-primary" type="submit">Registrar Producto</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <section>
        <?php if(session('mensaje')):?>
        <!-- Modal -->
        <div class="modal fade" id="modal" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header fondo text-white">
                        <h5 class="modal-title">Nuevo Porvenir</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <h5><?=(session('mensaje'))?></h5>
                    </div>
                </div>
            </div>
        </div>
        <?php unset($_SESSION['mensaje']);?>
        <?php endif ?>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous">
    </script>
    <script src="https://kit.fontawesome.com/3675f85246.js" crossorigin="anonymous"></script>
    <script type="module" src="<?= base_url('public/js/lanzarmodal.js')?>"></script>
</body>

</html>