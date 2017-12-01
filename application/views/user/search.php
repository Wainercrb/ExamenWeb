<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>BUSQUEDA</title>
        <link rel="stylesheet" media="screen" href="//netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>extra/css/search.css">﻿
        <script src="//code.jquery.com/jquery.js"></script>
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <div class="container">
        <div class="row">
            <form method="POST" action="<?php echo base_url() . 'index.php/user/search' ?>"enctype="multipart/form-data">
                <div class="form-group">
                    <h1 class="text-center"  size="50px" style="color: #ffffff"><?php echo $data ?> </h1>
                    <label class="col-md-4 control-label" for="selectbasic"></label>
                    <div class="col-lg-6">
                        <input type="text" placeholder="Buscar..." class="input" id="input-buscar" name="valor"/>
                        <button name="buscarValor" class="btn btn-default" type="submit">Buscar</button>
                    </div>
                </div>
            </form>
        </div>
        <br>
        <br>
        <br>
        <br>
        <?php if (isset($users)) { ?>
            <div id="container" class="container">
                <div class="table-responsive">
                    <table class="table table-hover" style="background-color: #ffffff">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Apellidos</th>
                                <th>Ver</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($users as $index => $user) { ?>
                                <tr>
                                    <td><?php echo $user->nombre; ?></td>
                                    <td><?php echo $user->apellidos; ?></td>
                                    <td><a href="<?php echo '' . base_url() . 'index.php/user/see/' . $user->id_usuario; ?>">Ver</a></td>
                                </tr>	
                            <?php } ?>

                        </tbody>
                    </table>
                </div>
            </div>
        <?php } ?>
    </div>
</head>
<body>
</body>
</html>



