<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="<?= base_url('public/styles/bootstrap.min.css') ?>" type="text/css">
</head>
<body>

<div class="container">
    <div class="row" style="margin-top: 115px">
        <div class="col-md-4 col-md-offset-4">
            <h4>  Registro Nuevo Porvenir</h4> <hr>
            <form action="<?= site_url('auth/registrar')?>" method="POST">
                <?= csrf_field();?>
                <?php if(!empty(session()->getFlashdata('error'))) : ?>
                    <div class="alert alert-danger" role="alert"><?= session()->getFlashdata('error');?></div>
                <?php endif ?>    
                <?php if(!empty(session()->getFlashdata('success'))) : ?>
                    <div class="alert alert-success" role="alert"><?= session()->getFlashdata('success');?></div>
                <?php endif ?>    

                <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <input type="text" id="nombre" class="form-control" name="nombre" placeholder="Nombre" value="<?= set_value('nombre')?>">
                    <span class="text-danger"><?= isset($validation) ? display_error($validation,'nombre') : '' ?></span>
                </div>
                <div class="form-group">
                    <label for="correo">Correo Electronico</label>
                    <input type="text" id="correo" class="form-control" name="correo" placeholder="Correo Electronico" value="<?= set_value('correo')?>">
                    <span class="text-danger"><?= isset($validation) ? display_error($validation,'correo') : '' ?></span>
                </div>
                <div class="form-group">
                    <label for="celular">Celular</label>
                    <input type="text" id="celular" class="form-control" name="celular" placeholder="Correo Electronico" value="<?= set_value('celular')?>">
                    
                </div>
                <div class="form-group">
                    <label for="clave">Contraseña</label>
                    <input type="password" id="clave" class="form-control" name="clave" placeholder="Contraseña">
                    <span class="text-danger"><?= isset($validation) ? display_error($validation,'clave') : '' ?></span>
                </div>
                <div class="form-group">
                    <label for="cclave">Confirmar Contraseña</label>
                    <input type="password" id="cclave" class="form-control" name="cclave" placeholder="Contraseña" >
                    <span class="text-danger"><?= isset($validation) ? display_error($validation,'cclave') : '' ?></span>
                </div>
                <div class="form-group">
                    <button class="btn btn-primary btn-block" type="submit">Registrarse</button>
                    <br>
                    <a href="<?= site_url('auth/login')?>">Actualmente tengo una cuenta, iniciar sesión</a>
                </div>
            </form>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>l