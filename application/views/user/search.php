<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Welcome to My App</title>
        <link rel="stylesheet" media="screen" href="//netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
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
                                <th>Email</th>
                                <th>Dirección</th>
                                <th>Ver</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($users as $index => $user) { ?>
                                <tr>
                                    <td><?php echo $user->nombre; ?></td>
                                    <td><?php echo $user->apellidos; ?></td>
                                    <td><?php echo $user->email; ?></td>
                                    <td><?php echo $user->direccion; ?></td>
                                    <td><a href="<?php echo '' . base_url() . 'index.php/user/see/'.$user->id_usuario; ?>">Editar</a></td>
                                </tr>	
                            <?php } ?>

                        </tbody>
                    </table>
                </div>


            </div>
        <?php } ?>
    </div>
    <style>
        body{
            font-family: 'Raleway', sans-serif;
            background:url(https://4.bp.blogspot.com/-hzY5TQIMAl0/VHhfxonYhRI/AAAAAAABXvY/KCxVTvQaqlo/s0/Wolves%2Band%2BFull%2BMoon%2BHD.jpg) no-repeat center center fixed; 
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }

        .container{

            height: 600px!important;
        }
        #mytable, #div-table{
            background-color: #00ffff;
        }


        #form-buscar {
            position: absolute;
            left: 0;
            right: 0;
            margin: auto;  
        }
        #input-buscar{

            border: 1px dotted #999;
            height: 30px;
            border-radius: 0;

            -webkit-appearance: none;
        }
        #search-select{

            height: 30px; 

        }

    </style>
</head>
<body>
</body>
</html>



