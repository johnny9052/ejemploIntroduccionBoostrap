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
        <!-- CONTENEDOR PRINCIPAL -->
        <div class="container">
            <h2>Button Styles</h2>
            <button type="button" class="btn btn-default">Default</button>
            <button type="button" class="btn btn-primary">Primary</button>
            <button type="button" class="btn btn-success">Success</button>
            <button type="button" class="btn btn-info">Info</button>
            <button type="button" class="btn btn-warning">Warning</button>
            <button type="button" class="btn btn-danger">Danger</button>
            <button type="button" class="btn btn-link">Link</button> 

            <br>
            <br>

            <h2>Button Sizes</h2>
            <button type="button" class="btn btn-primary btn-lg">Large</button>
            <button type="button" class="btn btn-primary btn-md">Medium</button>    
            <button type="button" class="btn btn-primary btn-sm">Small</button>
            <button type="button" class="btn btn-primary btn-xs">XSmall</button>

            <br>
            <br>

            <h2>Block Level Buttons</h2>
            <button type="button" class="btn btn-primary btn-block">Button 1</button>
            <button type="button" class="btn btn-default btn-block">Button 2</button>

            <br>
            <br>

            <h2>Grupo de botones</h2>
            <div class="btn-group">
                <button type="button" class="btn btn-primary">Apple</button>
                <button type="button" class="btn btn-primary">Samsung</button>
                <button type="button" class="btn btn-primary">Sony</button>
            </div>

            <div class="btn-group btn-group-lg">
                <button type="button" class="btn btn-primary">Apple</button>
                <button type="button" class="btn btn-primary">Samsung</button>
                <button type="button" class="btn btn-primary">Sony</button>
            </div>

            <br>

            <div class="btn-group-vertical">
                <button type="button" class="btn btn-primary">Apple</button>
                <button type="button" class="btn btn-primary">Samsung</button>
                <button type="button" class="btn btn-primary">Sony</button>
            </div>

            <br>
            <br>

            <h1>Justificado</h1>
            <div class="btn-group btn-group-justified">
                <a href="#" class="btn btn-primary">Apple</a>
                <a href="#" class="btn btn-primary">Samsung</a>
                <a href="#" class="btn btn-primary">Sony</a>
            </div>


            <br>
            <br>

            <h1>Con submenus</h1>
            <div class="btn-group">
                <button type="button" class="btn btn-primary">Apple</button>
                <button type="button" class="btn btn-primary">Samsung</button>
                <div class="btn-group">
                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                        Sony <span class="caret"></span></button>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Tablet</a></li>
                        <li><a href="#">Smartphone</a></li>
                    </ul>
                </div>
            </div>


            <br>
            <br>


            <h1>Combos o selects</h1>

            <div class="dropdown">
                <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Dropdown Example
                    <span class="caret"></span></button>
                <ul class="dropdown-menu">
                    <li><a href="#">HTML</a></li>
                    <li><a href="#">CSS</a></li>
                    <li><a href="#">JavaScript</a></li>
                </ul>                
            </div> 


            <br>
            <br>
            <br>
            <br>

            <h1>Barra de progreso</h1>

            <div class="progress">
                <div class="progress-bar progress-bar-striped active" role="progressbar"
                     aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:40%">
                    40%
                </div>
            </div>


            <br>
            <br>


            <h2>Formulario</h2>

            <!--Anadir clase al form para que quede en la misma linea class="form-inline" -->
            <form role="form" class="form-horizontal">
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" id="email" placeholder="Enter email">
                </div>
                <div class="form-group">
                    <label for="pwd">Password:</label>
                    <input type="password" class="form-control" id="pwd" placeholder="Enter password">
                </div>

                <div class="form-group">
                    <label for="comment">Comment:</label>
                    <textarea class="form-control" rows="5" id="comment"></textarea>
                </div>

                <br>

                <div class="checkbox">
                    <label><input type="checkbox" value="">Option 1</label>
                </div>
                <div class="checkbox">
                    <label><input type="checkbox" value="">Option 2</label>
                </div>

                <br>

                <div class="radio">
                    <label><input type="radio" name="optradio">Option 1</label>
                </div>
                <div class="radio">
                    <label><input type="radio" name="optradio">Option 2</label>
                </div>
                <div class="radio">
                    <label><input type="radio" name="optradio">Option 3</label>
                </div>

                <br>

                <div class="form-group">
                    <label for="sel1">Select list:</label>
                    <select class="form-control" id="sel1">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                    </select>
                </div>

                <br>
                <br>

                <button type="submit" class="btn btn-default">Submit</button>

                <br>
                <br>
                <br>
                <br>

                <div class="form-group has-success has-feedback">
                    <label class="col-sm-2 control-label" for="inputSuccess">Input with success and glyphicon</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputSuccess">
                        <span class="glyphicon glyphicon-ok form-control-feedback"></span>
                    </div>
                </div>
                <div class="form-group has-warning has-feedback">
                    <label class="col-sm-2 control-label" for="inputWarning">Input with warning and glyphicon</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputWarning">
                        <span class="glyphicon glyphicon-warning-sign form-control-feedback"></span>
                    </div>
                </div>
                <div class="form-group has-error has-feedback">
                    <label class="col-sm-2 control-label" for="inputError">Input with error and glyphicon</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputError">
                        <span class="glyphicon glyphicon-remove form-control-feedback"></span>
                    </div>
                </div>


            </form>

        </div>
    </body>
</html>
