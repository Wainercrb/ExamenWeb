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
            <form method="POST" action="user/search"enctype="multipart/form-data">
                <div class="form-group">
                    <h1 class="text-center"><?php echo $data ?> </h1>
                    <label class="col-md-4 control-label" for="selectbasic"></label>
                    <div class="col-lg-6">
                        <input type="text" placeholder="Buscar..." class="input" id="input-buscar" name="valor"/>
                        <select name="tipoFiltro" class="selectpicker" id="search-select">
                            <option value="intrumento">genero</option>
                            <option value="genero">intrumeto</option>
                        </select>
                        <button name="buscarValor" class="btn btn-default" type="submit">Buscar</button>
                    </div>
                </div>
            </form>
        </div>
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



