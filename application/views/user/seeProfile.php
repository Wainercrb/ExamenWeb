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
        <h1 class="text-center"><?php echo $titulo ?></h1>
        <div class="row">
            <div id="alert_message" style="margin-top : 15px;" ></div>
            <div class="col-xs-8 col-xs-offset-2" id="profile_card" >
                <div id='profile_display' class='well well-lg text-center bg-primary'>
                    <form id="cards" class="form-horizontal">
                        <img src="data:image/jpeg;base64,<?php echo base64_encode($foto); ?>">
                        <div class="form-group">
                            <label class="col-md-6 control-label" for="textinput">Nombre</label>  
                            <div class="col-md-6" id=""><h5><?php echo $nombre ?></h5></div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-6 control-label" for="textinput">Apelliodos</label>  
                            <div class="col-md-6" id=""><h5><?php echo $apellidos ?></h5></div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-6 control-label" for="textinput">email</label>  
                            <div class="col-md-6" id=""><h5><?php echo $email ?></h5></div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-6 control-label" for="textinput">Dirección</label>  
                            <div class="col-md-6"><h5><?php echo $direccion ?></h5></div>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary">Buscar</button>  
                        </div>
                    </form>	                   
                </div>	
            </div>
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

        #cards{
            color:#ff00ff;
        }
        #cards h5{
            color:#ff00ff;
            text-align: left;
        }

    </style>
</head>
<body>
</body>
</html>



