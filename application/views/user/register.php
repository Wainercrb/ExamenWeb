<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Registro</title>
        <link rel="stylesheet" media="screen" href="//netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    </head>
    <body>
        <div id="container" class="container">
            <h1>Bienvenido</h1>
            <form class="form-horizontal" action="user/save" role="form"   name="registroUsuario" id="prospects_form" method="post" enctype="multipart/form-data">
                <fieldset>
                    <legend class="text-center">Registro musicos</legend>
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="last_name">picture profile</label>  
                        <div class="col-md-4">
                            <div class="group center-block" style="border-style: hidden">
                                <img id="blah" style="border-style: dashed" name="blah" height="100px" width="100px" class="center-block" src="https://cdn2.iconfinder.com/data/icons/thin-touch-gestures-1/24/thin-0212_hand_touch_click_one_finger-512.png" alt="" />
                                <input type="file" style="display: none" name="image" id="image" onchange="readURL(this);"/>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-4 control-label" for="last_name">first name</label>  
                        <div class="col-md-4">
                            <input id="Name" name="first_name" type="text" placeholder="first name" class="form-control input-md" required="">

                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="last_name">last name</label>  
                        <div class="col-md-4">
                            <input id="Name" name="last_name" type="text" placeholder="last_name" class="form-control input-md" required="">

                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="email ">Email</label>  
                        <div class="col-md-4">
                            <input id="Email " name="email" type="email" placeholder="emil" class="form-control input-md" required="">

                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="Email ">address</label>  
                        <div class="col-md-4">
                            <input id="Email " name="address" type="text" placeholder="address" class="form-control input-md" required="">

                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="user">User</label>  
                        <div class="col-md-4">
                            <input id="Email " name="username" type="text" placeholder="user" class="form-control input-md" required="">

                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="password">Password</label>
                        <div class="col-md-4">
                            <input id="password" name="password" type="password" placeholder="" class="form-control input-md" required="">

                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="Password2">Confirm Password</label>  
                        <div class="col-md-4">
                            <input id="Password2" name="Password2" type="password" placeholder="" class="form-control input-md" required="">

                        </div>
                    </div>
                    <h1 class="text-center">Genero</h1>
                    <div style="border-style: dashed" class="form-group">
                        <?php foreach ($gender as $index => $gender) { ?>
                            <label class="col-md-4 control-label" for="genero"><?php echo$gender->genero ?></label>  
                            <div class="form-group">
                                <div class="col-md-4">
                                    <div class="checkbox">
                                        <label><input type="checkbox"  name="genders[]" value="<?php echo$gender->id_genero ?>"></label>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                    <h1 class="text-center">Instrumento</h1>
                    <div style="border-style: dashed">
                        <?php foreach ($instrument as $index => $instrument) { ?>
                            <label class="col-md-4 control-label" for="genero"><?php echo$instrument->intrumento ?></label>  
                            <div class="form-group">
                                <div class="col-md-4">
                                    <div class="checkbox">
                                        <label><input type="checkbox"  name="instruments[]" value="<?php echo$instrument->id_intrumento ?>"></label>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                    <div class="form-group"> 
                        <br>
                        <input id="btnSave" name="btnSave" type="submit"  class="btn btn-primary center-block" >
                    </div>
                </fieldset>
            </form>
            <script src="//code.jquery.com/jquery.js"></script>
            <script src="//netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
            <script type="text/javascript">
                                    document.querySelector('#blah').addEventListener('click', fotoPerfil);
                                    function fotoPerfil() {
                                        var obj = document.getElementById("image");
                                        if (obj) {
                                            obj.click();
                                        }
                                    }
                                    function readURL(input) {
                                        if (input.files && input.files[0]) {
                                            var reader = new FileReader();
                                            reader.onload = function (e) {
                                                document.getElementById('blah').src = e.target.result;
                                            }
                                            reader.readAsDataURL(input.files[0]);
                                        }
                                    }
            </script>
    </body>
</html>



