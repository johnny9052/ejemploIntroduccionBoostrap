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
        <!-- Trigger the modal with a button -->
        <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button>

        <!-- Modal -->
        <div id="myModal" class="modal fade" role="dialog">
            <!-- para definir tamaño del modal añadir al siguiente div estas clases
            <div class="modal-dialog modal-sm">
            <div class="modal-dialog modal-lg">
            -->
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <!-- Cabecera del modal -->
                    <div class="modal-header">
                        <!-- data-dismiss para cerrar modal -->
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Modal Header</h4>
                    </div>
                    <!-- Contenido del modal -->
                    <div class="modal-body">
                        <p>Some text in the modal.</p>
                    </div>
                    <!-- Footer del modal -->
                    <div class="modal-footer">
                        <!-- data-dismiss para cerrar modal -->
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>

            </div>
        </div>
    </body>
</html>
