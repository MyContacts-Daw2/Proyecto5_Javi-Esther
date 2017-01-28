<?php
// session_start();

// if (!isset($_SESSION['username'])) {
//   header('location:login.php');
// }

//include "categoria_select_proc.php";
//include "productos_select_proc.php";
include "formulario.php";
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Blue Forest</title>
 
    <!-- CSS de Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="css/style.css?=''" rel="stylesheet" media="screen">

    <!-- Librería jQuery requerida por los plugins de JavaScript -->
    <script src="http://code.jquery.com/jquery.js"></script>
 
    <script src="js/bootstrap.min.js"></script>
 
  </head>
  <script type="text/javascript">
            
            function llamadaBbdd(){
                $.ajax({
                        url: 'agenda.php',
                        data: JSON.stringify(),
                        dataType: "json",
                        method: "post",
                        success: function (data) {
                            //alert(data[0].nombre);
                            for(var i in data) {
                               alert(data[i].nombre);
                               $("#lista").append( '<li class="list-group-item" style="height: 50px; overflow: hidden;"><dt>'+data[i].nombre+'</dt><div class="row"><div class="col-lg-2">'+data[i].tel1+'</div><div class="col-lg-6">'+data[i].direccion1+'</div><div class="col-lg-4"><div class="col-lg-1"><a onclick="eliminarUsuario('+data[i].id+')"><span class="glyphicon glyphicon-remove"></span></a></div><div class="col-lg-1"><a onclick="llamadaBbdd()"><span class="glyphicon glyphicon-pencil"></span></a></div><div class="col-lg-1"><a onclick="llamadaBbdd()"><span  class="glyphicon glyphicon-screenshot"></span></div></div></div></li>');

                            }
                            // $(id).bootstrapTable('refresh');
                            // callback( returned_data );
                            // return;
                        },
                        error: function( xhr, status) {
                            alert(xhr+" - ERROR - "+status);
                            return;
                        }
                })
            }
            function eliminarUsuario(id){
                $.ajax({
                        url: 'eliminar.php?&rec_id='+id,
                        data: JSON.stringify(),
                        dataType: "json",
                        method: "post",
                        success: function (data) {
                            alert(data);
                            $("#lista li").remove();
                            return llamadaBbdd();
                        },
                        error: function( xhr, status) {
                            alert(xhr+" - ERROR - "+status);
                            return;
                        }
                })
            }
            function editarUsuario(){
                $.ajax({
                        url: 'agenda.php',
                        data: JSON.stringify(),
                        dataType: "json",
                        method: "post",
                        success: function (data) {
                            //alert(data[0].nombre);
                            for(var i in data) {
                               alert(data[i].nombre);
                               $("#lista").append( '<li class="list-group-item" style="height: 50px; overflow: hidden;"><dt>'+data[i].nombre+'</dt><div class="row"><div class="col-lg-2">'+data[i].tel1+'</div><div class="col-lg-6">'+data[i].direccion1+'</div><div class="col-lg-4"><div class="col-lg-1"><a onclick="llamadaBbdd()"><span class="glyphicon glyphicon-remove"></span></a></div><div class="col-lg-1"><a onclick="llamadaBbdd()"><span class="glyphicon glyphicon-pencil"></span></a></div><div class="col-lg-1"><a onclick="llamadaBbdd()"><span  class="glyphicon glyphicon-screenshot"></span></div></div></div></li>');

                            }
                            // $(id).bootstrapTable('refresh');
                            // callback( returned_data );
                            // return;
                        },
                        error: function( xhr, status) {
                            alert(xhr+" - ERROR - "+status);
                            return;
                        }
                })
            }
    </script>





      
  <body>
  <div class="page-header" style="background-color: white">
    <h1>Encabezado de página <small>con un texto secundario</small></h1>
  </div>
      <!-- <div class="jumbotron"> -->
        <div class="col-lg-3">
          <div class="caja">
            <div class="col-sm-12 col-md-12">
              <div class="thumbnail">
                  <img src="img/cartel.jpg" height="300">
                  <img src="">
                <div class="caption">
                    <h3>MI NOMBRE</h3>
                    <p>dirección</p>
                    <p>
                      <a href="#" class="btn btn-primary" role="button">Botón</a>
                      <a href="#" class="btn btn-default" role="button">Botón</a>
                    </p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="caja1">
            <div class="form-group">
              <label for="exampleInputEmail1">Buscador</label>
              <div class="row">
                <div class="col-lg-10">
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Buscador">
                </div>
                <div class="col-lg-2">
                  <a href="#" class="btn btn-default" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-user"></span></a>
                </div>
              </div>
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="row">
              <div  class="col-lg-12">
                  <ul id="lista" class="list-group">
                    <li class="list-group-item" style="height: 50px; overflow: hidden;">
                        <dt>ESTA ES LA LINEA BUENA</dt> 
                      <div class="row">
                        <div class="col-lg-2">
                          659659659
                        </div>
                        <div class="col-lg-6">
                          calle hernan cortes, 42 Villa nueva de la Serena
                        </div>
                        <div class="col-lg-4">
                          <div class="col-lg-1">
                            <a onclick="eliminarUsuario(1)"><span class="glyphicon glyphicon-remove"></span></a>
                          </div>
                          <div class="col-lg-1">
                            <a onclick="llamadaBbdd()"><span class="glyphicon glyphicon-pencil"></span></a>
                          </div>
                          <div class="col-lg-1">
                            <a onclick="llamadaBbdd()"><span  class="glyphicon glyphicon-screenshot"></span></a>
                          </div>
                        </div>
                      </div>
                    </li>
                    <!-- <li class="list-group-item" style="height: 50px;">
                          <dt>Vestibulum at eros</dt> 
                          <dd><div class="col-lg-2">659659659</div><div class="col-lg-8">Avda Rural 4, Barcelona</div></dd> 
                    </li>
                    <li class="list-group-item" style="height: 50px;">
                          <dt>Porta ac consectetur ac</dt> 
                          <dd><div class="col-lg-2">659659659</div><div class="col-lg-8">Avda Rural 4, Barcelona</div></dd> 
                    </li>
                    <li class="list-group-item" style="height: 50px;">
                          <dt>Morbi leo risus</dt> 
                          <dd><div class="col-lg-2">659659659</div><div class="col-lg-8">Avda Rural 4, Barcelona</div></dd> 
                    </li>
                    <li class="list-group-item" style="height: 50px;">
                          <dt>Dapibus ac facilisis in</dt> 
                          <dd><div class="col-lg-2">659659659</div><div class="col-lg-8">Avda Rural 4, Barcelona</div></dd> 
                    </li> -->
                    <!-- <li class="list-group-item">Dapibus ac facilisis in</li>
                    <li class="list-group-item">Morbi leo risus</li>
                    <li class="list-group-item">Porta ac consectetur ac</li>
                    <li class="list-group-item">Vestibulum at eros</li>
                    <li class="list-group-item" style="height: 50px;">
                          <dt>Dapibus ac facilisis in</dt> 
                          <dd><div class="col-lg-2">659659659</div><div class="col-lg-8">Avda Rural 4, Barcelona</div></dd> 
                    </li>
                    <li class="list-group-item" style="height: 50px;">
                          <dt>Dapibus ac facilisis in</dt> 
                          <dd><div class="col-lg-2">659659659</div><div class="col-lg-8">Avda Rural 4, Barcelona</div></dd> 
                    </li>
                    <li class="list-group-item" style="height: 50px;">
                          <dt>Dapibus ac facilisis in</dt> 
                          <dd><div class="col-lg-2">659659659</div><div class="col-lg-8">Avda Rural 4, Barcelona</div></dd> 
                    </li>
                    <li class="list-group-item" style="height: 50px;">
                          <dt>Dapibus ac facilisis in</dt> 
                          <dd><div class="col-lg-2">659659659</div><div class="col-lg-8">Avda Rural 4, Barcelona</div></dd> 
                    </li>
                    <li class="list-group-item" style="height: 50px;">
                        <dt> ESTA ES LA LINEA BUENA </dt> 
                      <div class="row">
                        <div class="col-lg-3">659659659</div><div class="col-lg-9">Avda Rural 4, Barcelona</div>
                      </div>
                    </li> -->
                  </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-5">
          <div class="caja">
            <iframe class="col-lg-12" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2995.1179376121263!2d2.1055016151933397!3d41.3497902062884!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12a498d64bd023fd%3A0x26089fc39cb352a3!2sJesu%C3%AFtes+Bellvitge.+Centre+d&#39;Estudis+Joan+XXIII!5e0!3m2!1ses!2ses!4v1485446539541" height="450" frameborder="0" style="border:4" allowfullscreen></iframe>
          </div>
        </div>

        <!-- Modal -->
  <div class="modal fade" id="myModal" role="text">
    <div class="modal-dialog modal-lg">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Insertar Contacto</h4>
        </div>
        <div class="modal-body">
          <form role="form" action="formulario.php">
            <div class="row">
              <div class="form-group col-lg-4">
                <label >Nombre</label>
                <input type="text" class="form-control" name="per_nombre" 
                       placeholder="Introduce tu nombre" required >
              </div>
              <div class="form-group col-lg-4">
                <label >Apellido1</label>
                <input type="text" class="form-control" name="per_apellido1" 
                       placeholder="Introduce el primer apellido">
              </div>
              <div class="form-group col-lg-4">
                <label >Apellido2</label>
                <input type="text" class="form-control" name="per_apellido2" 
                       placeholder="Introduce el segundo apellido">
              </div>
            </div>
            <div class="row">
              <div class="form-group col-lg-4">
                <label >Correo</label>
                <input type="email" class="form-control" name="per_mail" 
                       placeholder="Introduce el email">
              </div>
              <div class="form-group col-lg-4">
                <label for="ejemplo_email_1">Teléfono1</label>
                <input type="number" class="form-control" name="per_telf1" 
                       placeholder="Introduce el número de teléfono" required>
              </div>
              <div class="form-group col-lg-4">
                <label for="ejemplo_email_1">Teléfono2</label>
                <input type="number" class="form-control" name="per_telf2" 
                       placeholder="Introduce el número de teléfono">
              </div>
            </div>
            <div class="row">
              <div class="form-group col-lg-8">
                <label for="ejemplo_email_1">Dirección 1</label>
                <div class="input-group">
                  <input type="text" class="form-control" name="per_direc1" placeholder="Introduce la dirección PRINCIPAL">
                  <span class="input-group-btn">
                    <button class="btn btn-default" type="button">MAPA</button>
                  </span>
                </div>
              </div>
              <div class="form-group col-lg-4">
                <label for="ejemplo_email_1">CP</label>
                <input type="number" class="form-control col-lg-6" name="per_cp1"
                       placeholder="Código postal">
              </div>
            </div>
            <div class="row">
              <div class="form-group col-lg-8">
                <label for="ejemplo_email_1">Dirección 2</label>
                <div class="input-group">
                  <input type="text" class="form-control" name="per_direc2" placeholder="Introduce la dirección SECUNDARIA">
                  <span class="input-group-btn">
                    <button class="btn btn-default" type="button">MAPA</button>
                  </span>
                </div>
              </div>
              <div class="form-group col-lg-4">
                <label for="ejemplo_email_1">CP</label>
                <input type="number" class="form-control col-lg-6" name="per_cp2"
                       placeholder="Código postal">
              </div>
            </div>
            <div class="row">
              <div class="form-group col-lg-12">
                  <label for="ejemplo_password_1">De que te conozco??</label>
                  <input type="text" class="form-control" name="per_coment" 
                       placeholder="Introduce un breve comentario sobre el usuario">
              </div>
            </div>
            
            <div class="row">
              <div class="form-group col-lg-12">
                <button type="submit" class="btn btn-primary col-lg-12" value="insertForm">GUARDAR</button>
              </div>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
        
      <!-- </div> -->
     
  </body>
</html>

