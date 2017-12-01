<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>DETALLES</title>
        <link rel="stylesheet" media="screen" href="//netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>extra/css/seeProfile.css">﻿
        <script src="//code.jquery.com/jquery.js"></script>
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <div class="container">
        <h1 class="text-center"><?php echo $titulo ?></h1>
        <div class="row">
            <div id="alert_message" style="margin-top : 15px;" ></div>
            <div class="col-xs-8 col-xs-offset-2" id="profile_card" >
                <div id='profile_display' class='well well-lg text-center bg-primary'>
                    <form id="cards" class="form-horizontal">
                        <img  id="foto" src="data:image/jpeg;base64,<?php echo base64_encode($foto); ?>">
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
                            <a href="<?php echo base_url() . "index.php/user/search" ?>">Regresar</a>
                        </div>
                    </form>	                   
                </div>	
            </div>
        </div>
    </div>
</head>
<body>
</body>
</html>



