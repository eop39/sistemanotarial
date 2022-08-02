<?php

    class navtar {

        public static function cabeza($b){ ?>

            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
        

         <?php
        }
    
        
        

        public static function barra($a){ ?>
            <html>
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
                <div class ="container-fluid "style="background-color: #e3f2fd;">
                    <nav class="navbar navbar-expand-lg container" >
                    <div class="container-fluid">

                        


                      
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="principal.php">INICIO</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link" href="#">ARCHIVO</a>
                            </li>
                            <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                DATOS
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="provincias.php">PROVINCIAS</a></li>
                                <li><a class="dropdown-item" href="#">CLIENTES</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link ">ALGO</a>
                            </li>
                        </ul>
                    
                        </div>
                        <div><a class="navbar-brand mr-auto"  onclick="$"   ><img src="eop.jpg" width="50" height="60"></img></a></div>

                    </div>
                    </nav>



                </div> 
            </html>



    <?php
        }
    }


    ?>