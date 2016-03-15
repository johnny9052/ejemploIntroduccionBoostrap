<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title></title>
        <link href="../Recursos/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="../Recursos/js/jquery.min.js" type="text/javascript"></script>
        <script src="../Recursos/js/bootstrap.min.js" type="text/javascript"></script>
    </head>
    <body>

        <!-- navbar-inverse -->

        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <!--                    Boton que esconde el menu para moviles, se asocia al 
                                        conjunto de elementos que se quieren ocultar-->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Brand</a>
                </div>
                <!--                Div que se oculta segun el tamaño de la pantalla y que 
                                se despliega con el boton-->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Page 1</a></li>
                        <li><a href="#">Page 2</a></li> 
                        <li><a href="#">Page 3</a></li> 
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Page 1
                                <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Page 1-1</a></li>
                                <li><a href="#">Page 1-2</a></li>
                                <li><a href="#">Page 1-3</a></li> 
                            </ul>
                        </li>
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- NAVIGATION FIXED -->

        <!--        <nav class="navbar navbar-inverse navbar-fixed-top">
                    <div class="container-fluid">
                        <div class="navbar-header">
                             Boton que esconde el menu para moviles, se asocia al 
                            conjunto de elementos que se quieren ocultar
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="#">Brand</a>
                        </div>
                         Div que se oculta segun el tamaño de la pantalla y que 
                        se despliega con el boton
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav">
                                <li class="active"><a href="#">Home</a></li>
                                <li><a href="#">Page 1</a></li>
                                <li><a href="#">Page 2</a></li>
                                <li><a href="#">Page 3</a></li>
                                <li class="dropdown">
                                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Page 1
                                        <span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Page 1-1</a></li>
                                        <li><a href="#">Page 1-2</a></li>
                                        <li><a href="#">Page 1-3</a></li> 
                                    </ul>
                                </li>
                            </ul>
        
                            <ul class="nav navbar-nav navbar-right">
                                <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                                <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                            </ul>
                        </div>
                    </div>
                </nav>-->



        <!-- CONTENIDO, SOLO PARA VER EL EFECTO DEL NAVIGATIONBAR -->


        <div class="container">
            <h3>Fixed Navbar</h3>
            <div class="row">
                <div class="col-md-4">
                    <p>A fixed navigation bar stays visible in a fixed position (top or bottom) independent of the page scroll.</p>
                    <p>A fixed navigation bar stays visible in a fixed position (top or bottom) independent of the page scroll.</p>    
                </div>
                <div class="col-md-4"> 
                    <p>A fixed navigation bar stays visible in a fixed position (top or bottom) independent of the page scroll.</p>
                    <p>A fixed navigation bar stays visible in a fixed position (top or bottom) independent of the page scroll.</p>
                </div>
                <div class="col-md-4"> 
                    <p>A fixed navigation bar stays visible in a fixed position (top or bottom) independent of the page scroll.</p>
                    <p>A fixed navigation bar stays visible in a fixed position (top or bottom) independent of the page scroll.</p> 
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <p>A fixed navigation bar stays visible in a fixed position (top or bottom) independent of the page scroll.</p>
                    <p>A fixed navigation bar stays visible in a fixed position (top or bottom) independent of the page scroll.</p>    
                </div>
                <div class="col-md-4"> 
                    <p>A fixed navigation bar stays visible in a fixed position (top or bottom) independent of the page scroll.</p>
                    <p>A fixed navigation bar stays visible in a fixed position (top or bottom) independent of the page scroll.</p>
                </div>
                <div class="col-md-4"> 
                    <p>A fixed navigation bar stays visible in a fixed position (top or bottom) independent of the page scroll.</p>
                    <p>A fixed navigation bar stays visible in a fixed position (top or bottom) independent of the page scroll.</p> 
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <p>A fixed navigation bar stays visible in a fixed position (top or bottom) independent of the page scroll.</p>
                    <p>A fixed navigation bar stays visible in a fixed position (top or bottom) independent of the page scroll.</p>    
                </div>
                <div class="col-md-4"> 
                    <p>A fixed navigation bar stays visible in a fixed position (top or bottom) independent of the page scroll.</p>
                    <p>A fixed navigation bar stays visible in a fixed position (top or bottom) independent of the page scroll.</p>
                </div>
                <div class="col-md-4"> 
                    <p>A fixed navigation bar stays visible in a fixed position (top or bottom) independent of the page scroll.</p>
                    <p>A fixed navigation bar stays visible in a fixed position (top or bottom) independent of the page scroll.</p> 
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <p>A fixed navigation bar stays visible in a fixed position (top or bottom) independent of the page scroll.</p>
                    <p>A fixed navigation bar stays visible in a fixed position (top or bottom) independent of the page scroll.</p>    
                </div>
                <div class="col-md-4"> 
                    <p>A fixed navigation bar stays visible in a fixed position (top or bottom) independent of the page scroll.</p>
                    <p>A fixed navigation bar stays visible in a fixed position (top or bottom) independent of the page scroll.</p>
                </div>
                <div class="col-md-4"> 
                    <p>A fixed navigation bar stays visible in a fixed position (top or bottom) independent of the page scroll.</p>
                    <p>A fixed navigation bar stays visible in a fixed position (top or bottom) independent of the page scroll.</p> 
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <p>A fixed navigation bar stays visible in a fixed position (top or bottom) independent of the page scroll.</p>
                    <p>A fixed navigation bar stays visible in a fixed position (top or bottom) independent of the page scroll.</p>    
                </div>
                <div class="col-md-4"> 
                    <p>A fixed navigation bar stays visible in a fixed position (top or bottom) independent of the page scroll.</p>
                    <p>A fixed navigation bar stays visible in a fixed position (top or bottom) independent of the page scroll.</p>
                </div>
                <div class="col-md-4"> 
                    <p>A fixed navigation bar stays visible in a fixed position (top or bottom) independent of the page scroll.</p>
                    <p>A fixed navigation bar stays visible in a fixed position (top or bottom) independent of the page scroll.</p> 
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <p>A fixed navigation bar stays visible in a fixed position (top or bottom) independent of the page scroll.</p>
                    <p>A fixed navigation bar stays visible in a fixed position (top or bottom) independent of the page scroll.</p>    
                </div>
                <div class="col-md-4"> 
                    <p>A fixed navigation bar stays visible in a fixed position (top or bottom) independent of the page scroll.</p>
                    <p>A fixed navigation bar stays visible in a fixed position (top or bottom) independent of the page scroll.</p>
                </div>
                <div class="col-md-4"> 
                    <p>A fixed navigation bar stays visible in a fixed position (top or bottom) independent of the page scroll.</p>
                    <p>A fixed navigation bar stays visible in a fixed position (top or bottom) independent of the page scroll.</p> 
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <p>A fixed navigation bar stays visible in a fixed position (top or bottom) independent of the page scroll.</p>
                    <p>A fixed navigation bar stays visible in a fixed position (top or bottom) independent of the page scroll.</p>    
                </div>
                <div class="col-md-4"> 
                    <p>A fixed navigation bar stays visible in a fixed position (top or bottom) independent of the page scroll.</p>
                    <p>A fixed navigation bar stays visible in a fixed position (top or bottom) independent of the page scroll.</p>
                </div>
                <div class="col-md-4"> 
                    <p>A fixed navigation bar stays visible in a fixed position (top or bottom) independent of the page scroll.</p>
                    <p>A fixed navigation bar stays visible in a fixed position (top or bottom) independent of the page scroll.</p> 
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <p>A fixed navigation bar stays visible in a fixed position (top or bottom) independent of the page scroll.</p>
                    <p>A fixed navigation bar stays visible in a fixed position (top or bottom) independent of the page scroll.</p>    
                </div>
                <div class="col-md-4"> 
                    <p>A fixed navigation bar stays visible in a fixed position (top or bottom) independent of the page scroll.</p>
                    <p>A fixed navigation bar stays visible in a fixed position (top or bottom) independent of the page scroll.</p>
                </div>
                <div class="col-md-4"> 
                    <p>A fixed navigation bar stays visible in a fixed position (top or bottom) independent of the page scroll.</p>
                    <p>A fixed navigation bar stays visible in a fixed position (top or bottom) independent of the page scroll.</p> 
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <p>A fixed navigation bar stays visible in a fixed position (top or bottom) independent of the page scroll.</p>
                    <p>A fixed navigation bar stays visible in a fixed position (top or bottom) independent of the page scroll.</p>    
                </div>
                <div class="col-md-4"> 
                    <p>A fixed navigation bar stays visible in a fixed position (top or bottom) independent of the page scroll.</p>
                    <p>A fixed navigation bar stays visible in a fixed position (top or bottom) independent of the page scroll.</p>
                </div>
                <div class="col-md-4"> 
                    <p>A fixed navigation bar stays visible in a fixed position (top or bottom) independent of the page scroll.</p>
                    <p>A fixed navigation bar stays visible in a fixed position (top or bottom) independent of the page scroll.</p> 
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <p>A fixed navigation bar stays visible in a fixed position (top or bottom) independent of the page scroll.</p>
                    <p>A fixed navigation bar stays visible in a fixed position (top or bottom) independent of the page scroll.</p>    
                </div>
                <div class="col-md-4"> 
                    <p>A fixed navigation bar stays visible in a fixed position (top or bottom) independent of the page scroll.</p>
                    <p>A fixed navigation bar stays visible in a fixed position (top or bottom) independent of the page scroll.</p>
                </div>
                <div class="col-md-4"> 
                    <p>A fixed navigation bar stays visible in a fixed position (top or bottom) independent of the page scroll.</p>
                    <p>A fixed navigation bar stays visible in a fixed position (top or bottom) independent of the page scroll.</p> 
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <p>A fixed navigation bar stays visible in a fixed position (top or bottom) independent of the page scroll.</p>
                    <p>A fixed navigation bar stays visible in a fixed position (top or bottom) independent of the page scroll.</p>    
                </div>
                <div class="col-md-4"> 
                    <p>A fixed navigation bar stays visible in a fixed position (top or bottom) independent of the page scroll.</p>
                    <p>A fixed navigation bar stays visible in a fixed position (top or bottom) independent of the page scroll.</p>
                </div>
                <div class="col-md-4"> 
                    <p>A fixed navigation bar stays visible in a fixed position (top or bottom) independent of the page scroll.</p>
                    <p>A fixed navigation bar stays visible in a fixed position (top or bottom) independent of the page scroll.</p> 
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <p>A fixed navigation bar stays visible in a fixed position (top or bottom) independent of the page scroll.</p>
                    <p>A fixed navigation bar stays visible in a fixed position (top or bottom) independent of the page scroll.</p>    
                </div>
                <div class="col-md-4"> 
                    <p>A fixed navigation bar stays visible in a fixed position (top or bottom) independent of the page scroll.</p>
                    <p>A fixed navigation bar stays visible in a fixed position (top or bottom) independent of the page scroll.</p>
                </div>
                <div class="col-md-4"> 
                    <p>A fixed navigation bar stays visible in a fixed position (top or bottom) independent of the page scroll.</p>
                    <p>A fixed navigation bar stays visible in a fixed position (top or bottom) independent of the page scroll.</p> 
                </div>
            </div>F

        </div>

        <h1>Scroll this page to see the effect</h1>

    </body>
</html>
