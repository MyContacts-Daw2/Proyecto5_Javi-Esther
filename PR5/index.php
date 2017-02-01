<?php
session_start();

if (!isset($_SESSION['usu_usuario'])) {

  header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MyContacts</title>
 
    <!-- CSS de Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="css/style.css?=''" rel="stylesheet" media="screen">

    <!-- Librería jQuery requerida por los plugins de JavaScript -->
    <script src="http://code.jquery.com/jquery.js"></script>
 
    <script src="js/bootstrap.min.js"></script>

    <script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyBtBajhUeO_-Hog2jCUTjyg2ZIg8rvUwMU">
    </script>
 
  </head>
  <script type="text/javascript">
    // VARIABLES GLOBALES JAVASCRIPT
var geocoder;
var marker;
var latLng;
var latLng2;
var map;




// INICiALIZACION DE MAPA
function initialize() {
  //alert(1);
  geocoder = new google.maps.Geocoder();  
  latLng = new google.maps.LatLng(41.3818 ,2.1685);  map = new google.maps.Map(document.getElementById('mapCanvas'), {
    zoom:12,
    center: latLng,
    mapTypeId: google.maps.MapTypeId.ROADMAP  });


// CREACION DEL MARCADOR  
    marker = new google.maps.Marker({
    position: latLng,
    title: 'Arrastra el marcador si quieres moverlo',
    map: map,
    draggable: true
  });
    
    // maker1=new google.new google.maps.Marker({
    //   position: latLng,
    //   title: "Prueba"
    // });

    // var mapOptions = {
    //   zoom: 4,
    //   center: latLng
    // }

    // var map1 = new google.maps.Map(document.getElementById("mapCanvas"), mapOptions);


    // marker1.setMap(map1);

// Escucho el CLICK sobre el mama y si se produce actualizo la posicion del marcador 
     google.maps.event.addListener(map, 'click', function(event) {
     updateMarker(event.latLng);
   });
  
  // Inicializo los datos del marcador
  //    updateMarkerPosition(latLng);
     
      geocodePosition(latLng);
 
  // Permito los eventos drag/drop sobre el marcador
  google.maps.event.addListener(marker, 'dragstart', function() {
    updateMarkerAddress('Arrastrando...');
  });
 
  google.maps.event.addListener(marker, 'drag', function() {
    updateMarkerStatus('Arrastrando...');
    updateMarkerPosition(marker.getPosition());
  });
 
  google.maps.event.addListener(marker, 'dragend', function() {
    updateMarkerStatus('Arrastre finalizado');
    geocodePosition(marker.getPosition());
  });


}

// google.maps.event.addDomListener(window, 'load', initialize);
    google.maps.event.addDomListener(window, 'load', initialize);


// ESTA FUNCION OBTIENE LA DIRECCION A PARTIR DE LAS COORDENADAS POS
function geocodePosition(pos) {
  geocoder.geocode({
    latLng: pos
  }, function(responses) {
    if (responses && responses.length > 0) {
      updateMarkerAddress(responses[0].formatted_address);
    } else {
      updateMarkerAddress('No puedo encontrar esta direccion.');
    }
  });
}

// OBTIENE LA DIRECCION A PARTIR DEL LAT y LON DEL FORMULARIO
function codeLatLon() { 
      str= document.form_mapa.longitud.value+" , "+document.form_mapa.latitud.value;
      latLng2 = new google.maps.LatLng(document.form_mapa.latitud.value ,document.form_mapa.longitud.value);
      marker.setPosition(latLng2);
      map.setCenter(latLng2);
      geocodePosition (latLng2);
      // document.form_mapa.direccion.value = str+" OK";
}



// OBTIENE LAS COORDENADAS DESDE lA DIRECCION EN LA CAJA DEL FORMULARIO
function codeAddress() {
        var address = document.form_mapa.direccion.value;
          geocoder.geocode( { 'address': address}, function(results, status) {
          if (status == google.maps.GeocoderStatus.OK) {
             updateMarkerPosition(results[0].geometry.location);
             marker.setPosition(results[0].geometry.location);
             map.setCenter(results[0].geometry.location);
           } else {
            alert('ERROR : ' + status);
          }
        });
      }



      // OBTIENE LAS COORDENADAS DESDE lA DIRECCION EN LA CAJA DEL FORMULARIO
function codeAddress2 (address) {
          //alert(address);
          geocoder.geocode( { 'address': address}, function(results, status) {
          if (status == google.maps.GeocoderStatus.OK) {
             marker.setPosition(results[0].geometry.location);
             map.setCenter(results[0].geometry.location);
             document.form_mapa.direccion.value = address;
           } else {
            alert('ERROR : No se puede contrar estala dirección no es correcta ');
          }
        });
      }

      // function codeAddress3 () {
          
      //     geocoder.geocode( { 'address': 'Plaza de Cataluña, Barcelona, Spain'}, function(results, status) {
      //     if (status == google.maps.GeocoderStatus.OK) {
             
      //        marker.setPosition(results[0].geometry.location);
      //        map.setCenter(results[0].geometry.location);
      //        document.form_mapa.direccion.value = address;
      //      } else {
      //       alert('ERROR : ' + status);
      //     }
      //   });
      // }



      function updateMarkerStatus(str) {
  document.form_mapa.direccion.value = str;
}

// RECUPERO LOS DATOS LON LAT Y DIRECCION Y LOS PONGO EN EL FORMULARIO
function updateMarkerPosition (latLng) {
  document.form_mapa.longitud.value =latLng.lng();
  document.form_mapa.latitud.value = latLng.lat();
}

function updateMarkerAddress(str) {
  document.form_mapa.direccion.value = str;
}

// ACTUALIZO LA POSICION DEL MARCADOR
function updateMarker(location) {
        marker.setPosition(location);
        updateMarkerPosition(location);
        geocodePosition(location);
      }


  </script>

  <style>
  #mapCanvas {
    height: 450px;
    /*max-height: 500px;*/
    float: center;
  }

  #Mapa {
    height: 450px;
    /*max-height: 500px;*/
    float: center;
  }
 
  </style>


  <script type="text/javascript">

            function insertBd(){
              var url = "formulario.php"; // El script a dónde se realizará la petición.
                $.ajax({
                       type: "POST",
                       url: url,
                       data: $("#formulario").serialize(), // Adjuntar los campos del formulario enviado.
                       success: function(data)
                       {
                          alert("Usuario añadido correctamente");
                          $("#lista li").remove();
                          document.getElementById("formulario").reset();
                          
                          setTimeout(llamadaBbdd(), 3000);

                          //return llamadaBbdd();

                           //$("#respuesta").html(data); // Mostrar la respuestas del script PHP.
                       }
                     });

                return false; // Evitar ejecutar el submit del formulario.
            };

            function resetForm(){
              document.getElementById("formulario").reset();
            };


            function llamadaBbdd(){
                $.ajax({
                        url: 'agenda.php',
                        data: JSON.stringify(),
                        dataType: "json",
                        method: "post",
                        success: function (data) {
                            //alert(data[0].nombre);
                            for(var i in data) {
                                // alert(data[i].id);
                               $("#lista").append( '<li class="list-group-item" style="height: 50px; overflow: hidden;"><dt>'+data[i].nombre+' '+data[i].apellidos+'</dt><div class="row"><div class="col-lg-2">'+data[i].tel1+'</div><div class="col-lg-6">'+data[i].direccion1+'</div><div class="col-lg-4"><div class="col-lg-1"><a onclick="eliminarUsuario('+data[i].id+')"><span class="glyphicon glyphicon-remove"></span></a></div><div class="col-lg-1"><a data-toggle="modal" data-target="#myModal" onclick="editarUsuario('+data[i].id+')"><span class="glyphicon glyphicon-pencil"></span></a></div><div class="col-lg-1"><a onclick="codeAddress2(\''+data[i].direccion1+'\')"><span  class="glyphicon glyphicon-screenshot"></span></div></div></div></li>');

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
            };
            function eliminarUsuario(id){
                $.ajax({
                        url: 'eliminar.php?&per_id='+id,
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
            };
            function editarUsuario(id){
                $.ajax({
                        url: 'editarUsuario.php?&per_id='+id,
                        data: JSON.stringify(),
                        dataType: "json",
                        method: "post",
                        success: function (data) {
                            //alert(data[0].nombre);
                            for(var i in data) {
                               alert(data[i].nombre);
                               $("#per_nombre").val(data[i].nombre);
                               $("#per_apellido1").val(data[i].apellido1);
                               $("#per_apellido2").val(data[i].apellido2);
                               $("#per_mail").val(data[i].email);
                               $("#per_telf1").val(data[i].tel1);
                               $("#per_telf2").val(data[i].tel2);
                               $("#per_direc1").val(data[i].direccion1);
                               $("#per_cp1").val(data[i].cp1);
                               $("#per_direc2").val(data[i].direccion2);
                               $("#per_cp2").val(data[i].cp2);
                               $("#per_coment").val(data[i].comentario);
                               $("#per_id").val(data[i].id);
                               //$("#lista li").remove();
                                //return llamadaBbdd();
                            }
                            
                        },
                        error: function( xhr, status) {
                            alert(xhr+" - ERROR - "+status);
                            return;
                        }
                })
            }
    </script>





      
  <body onload="llamadaBbdd()">
  <div class="page-header" style="background-color: white">
    <div class="row">
        <div class="col-md-1 col-sx-12 text-center">
          <img src="img/Logo_letrasSM.jpg" class="image-responsive">
        </div>
        <div class="col-md-10"> 
          <h1 class="text-center">MyContacts <small>siempre a punto <img src="img/punteroNaranja2.jpg"><img src="img/punteroAzul.jpg"></small></h1>
        </div>
        <div class="col-md-1 text-center">
          <a href="cerrar_sesion_proc.php" >Cerrar Sesión</a>
        </div>
      </div>  
    </div>
      <!-- <div class="jumbotron"> -->
        <div class="col-lg-3">
          <div class="caja">
            <div class="col-sm-12 col-md-12">
              <div class="thumbnail">
                  <img src="img/punteroNaranja.jpg" height="300">
                  <img src="">
                <div class="caption text-center">
                    <h3><?php
                    echo $_SESSION['usu_nombre'];  echo " "; echo $_SESSION['usu_apellido1']; echo " "; echo $_SESSION['usu_apellido2'] ?>
                    <br>
                    <?php echo $_SESSION['usu_direc1']?> </h3>
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
                  <a href="#" class="btn btn-default" data-toggle="modal" data-target="#myModal" onclick="resetForm()"><span class="glyphicon glyphicon-user" "></span></a>
                </div>
              </div>
                <small id="emailHelp" class="form-text text-muted">Filtrar por Nombre, Apellidos y Número.</small>
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
                            <a onclick="editarUsuario(id)" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-pencil"></span></a>
                          </div>
                          <div class="col-lg-1">
                            <a onclick="llamadaBbdd()"><span  class="glyphicon glyphicon-screenshot"></span></a>
                          </div>
                        </div>
                      </div>
                    </li>
                  </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-5">
          <div class="caja">
            <div id="mapCanvas"></div>
          </div>
        </div>

        <!-- Modal -->
  <div class="modal fade" id="myModal" role="text" >
    <div class="modal-dialog modal-lg">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Insertar Contacto</h4>
        </div>
        <div class="modal-body">
            <form role="form"  id="formulario" onsubmit= "return insertBd();">
            <div class="row">
              <div class="form-group col-lg-4">
                <label >Nombre</label>
                <input type="text" id="per_nombre" class="form-control" name="per_nombre" 
                       placeholder="Introduce tu nombre" required >
              </div>
              <div class="form-group col-lg-4">
                <label >Apellido1</label>
                <input type="text" id="per_apellido1" class="form-control" name="per_apellido1" 
                       placeholder="Introduce el primer apellido">
              </div>
              <div class="form-group col-lg-4">
                <label >Apellido2</label>
                <input type="text" id="per_apellido2" class="form-control" name="per_apellido2" 
                       placeholder="Introduce el segundo apellido">
              </div>
            </div>
            <div class="row">
              <div class="form-group col-lg-4">
                <label >Correo</label>
                <input type="email" id="per_mail" class="form-control" name="per_mail" 
                       placeholder="Introduce el email">
              </div>
              <div class="form-group col-lg-4">
                <label for="ejemplo_email_1">Teléfono1</label>
                <input type="number" id="per_telf1" class="form-control" name="per_telf1" 
                       placeholder="Introduce el número de teléfono" required>
              </div>
              <div class="form-group col-lg-4">
                <label for="ejemplo_email_1">Teléfono2</label>
                <input type="number" id="per_telf2" class="form-control" name="per_telf2" 
                       placeholder="Introduce el número de teléfono">
              </div>
            </div>
            <div class="row">
              <div class="form-group col-lg-8">
                <label for="ejemplo_email_1">Dirección 1</label>
                <div class="input-group">
                  <input type="text" id="per_direc1" class="form-control" name="per_direc1" placeholder="Introduce la dirección PRINCIPAL">
                  <span class="input-group-btn">
                    <button class="btn btn-default" data-toggle="modal" data-target="#myModalMapa" onclick="" type="button">MAPA</button>
                  </span>
                </div>
              </div>
              <div class="form-group col-lg-4">
                <label for="ejemplo_email_1">CP</label>
                <input type="number" id="per_cp1" class="form-control col-lg-6" name="per_cp1"
                       placeholder="Código postal">
              </div>
            </div>
            <div class="row">
              <div class="form-group col-lg-8">
                <label for="ejemplo_email_1">Dirección 2</label>
                <div class="">
                  <input type="text" id="per_direc2" class="form-control" name="per_direc2" placeholder="Introduce la dirección SECUNDARIA">
                  <small>Ejemplo: Carrer d'Aragó, 132, 08011 Barcelona, España</small>
                  <!-- <span class="input-group-btn">
                    <button class="btn btn-default" data-toggle="modal" data-target="#myModalMapa" type="button">MAPA</button>
                  </span> -->
                </div>
              </div>
              <div class="form-group col-lg-4">
                <label for="ejemplo_email_1">CP</label>
                <input type="number" id="per_cp2" class="form-control col-lg-6" name="per_cp2"
                       placeholder="Código postal">
              </div>
            </div>
            <div class="row">
              <div class="form-group col-lg-12">
                  <label for="ejemplo_password_1">De que te conozco??</label>
                  <input type="text" id="per_coment" class="form-control" name="per_coment" 
                       placeholder="Introduce un breve comentario sobre el usuario">
              </div>
            </div>
            
            <div class="row">
              <div class="form-group col-lg-12">
                <button type="submit" id="inserUsu" class="btn btn-primary col-lg-12" value="insertForm">GUARDAR</button>
              </div>
            </div>
            <input type="hidden" id="per_id" name="per_id" value="">
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>



        <!-- Modal -->
  <div class="modal fade" id="myModalMapa" role="text" >
    <div class="modal-dialog modal-lg">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Insertar Contacto</h4>
        </div>
        <div class="modal-body">
            <div id="Mapa">
              
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>





        
      <!-- </div> -->
    <form name="form_mapa" method="POST" enctype="multipart/form-data" style="display: none;">
     <input type="text" name="direccion" id="direccion" value="segovia,spain" style="width: 250px;font-size: 10px;font-family: verdana;font-weight: bold;" />
     </form>

  </body>



  <script type="text/javascript">


    var geocoder1;
    var marker1;
    var latLng1;
    var latLng3;
    var map1;



$('#myModalMapa').on('shown.bs.modal', function (e) {
  // do something...
  inicio();
})

// INICiALIZACION DE MAPA
function inicio() {
  //alert(2);
  geocoder1 = new google.maps.Geocoder();  
  latLng1 = new google.maps.LatLng(41.3818 ,2.1685);  map1 = new google.maps.Map(document.getElementById('Mapa'), {
    zoom:12,
    center: latLng1,
    mapTypeId: google.maps.MapTypeId.ROADMAP  });


// CREACION DEL MARCADOR  
    marker1 = new google.maps.Marker({
    position: latLng1,
    title: 'Arrastra el marcador si quieres moverlo',
    map: map1,
    draggable: true
  });
    
 
// Escucho el CLICK sobre el mama y si se produce actualizo la posicion del marcador 
     google.maps.event.addListener(map1, 'click', function(event) {
     updateMarker(event.latLng1);
   });
  
  //Inicializo los datos del marcador
     updateMarkerPositions(latLng1);
     
      geocodePositions(latLng1);
 
  // Permito los eventos drag/drop sobre el marcador
  google.maps.event.addListener(marker1, 'dragstart', function() {
    updateMarkerAddress('Arrastrando...');
  });
 
  google.maps.event.addListener(marker1, 'drag', function() {
    updateMarkerStatuss('Arrastrando...');
    updateMarkerPositions(marker1.getPosition());
  });
 
  google.maps.event.addListener(marker1, 'dragend', function() {
    updateMarkerStatuss('Arrastre finalizado');
    geocodePositions(marker1.getPosition());
  });


}

// google.maps.event.addDomListener(window, 'load', initialize);
    //google.maps.event.addDomListener(window, 'load', inicio);


//ESTA FUNCION OBTIENE LA DIRECCION A PARTIR DE LAS COORDENADAS POS
function geocodePositions(pos) {
  geocoder.geocode({
    latLng: pos
  }, function(responses) {
    if (responses && responses.length > 0) {
      updateMarkerAddress(responses[0].formatted_address);
    } else {
      updateMarkerAddress('No puedo encontrar esta direccion.');
    }
  });
}

// OBTIENE LA DIRECCION A PARTIR DEL LAT y LON DEL FORMULARIO
// function codeLatLon1() { 
//       str= document.form_mapa.longitud.value+" , "+document.form_mapa.latitud.value;
//       latLng2 = new google.maps.LatLng(document.form_mapa.latitud.value ,document.form_mapa.longitud.value);
//       marker.setPosition(latLng2);
//       map.setCenter(latLng2);
//       geocodePositions (latLng2);
//       // document.form_mapa.direccion.value = str+" OK";
// }



// OBTIENE LAS COORDENADAS DESDE lA DIRECCION EN LA CAJA DEL FORMULARIO
function codeAddress() {
        var address = document.form_mapa.direccion.value;
          geocoder1.geocode( { 'address': address}, function(results, status) {
          if (status == google.maps.GeocoderStatus.OK) {
             updateMarkerPositions(results[0].geometry.location);
             marker1.setPosition(results[0].geometry.location);
             map1.setCenter(results[0].geometry.location);
           } else {
            alert('ERROR : ' + status);
          }
        });
      }



      // OBTIENE LAS COORDENADAS DESDE lA DIRECCION EN LA CAJA DEL FORMULARIO
// function codeAddress2 (address) {
//           //alert(address);
//           geocoder.geocode( { 'address': address}, function(results, status) {
//           if (status == google.maps.GeocoderStatus.OK) {
//              marker.setPosition(results[0].geometry.location);
//              map.setCenter(results[0].geometry.location);
//              document.form_mapa.direccion.value = address;
//            } else {
//             alert('ERROR : No se puede contrar estala dirección no es correcta ');
//           }
//         });
//       }

      // function codeAddress3 () {
          
      //     geocoder.geocode( { 'address': 'Plaza de Cataluña, Barcelona, Spain'}, function(results, status) {
      //     if (status == google.maps.GeocoderStatus.OK) {
             
      //        marker.setPosition(results[0].geometry.location);
      //        map.setCenter(results[0].geometry.location);
      //        document.form_mapa.direccion.value = address;
      //      } else {
      //       alert('ERROR : ' + status);
      //     }
      //   });
      // }



      function updateMarkerStatuss(str) {
  document.form_mapa.direccion.value = str;
  $("#per_direc1").val(str);
}

// RECUPERO LOS DATOS LON LAT Y DIRECCION Y LOS PONGO EN EL FORMULARIO
function updateMarkerPositions (latLng) {
  // document.form_mapa.longitud.value =latLng.lng();
  // document.form_mapa.latitud.value = latLng.lat();
}

function updateMarkerAddress(str) {
  //documentById('per_direc1').value = str;
  document.form_mapa.direccion.value = str;
  $("#per_direc1").val(str);
}

// ACTUALIZO LA POSICION DEL MARCADOR
function updateMarkers(location) {
        marker1.setPosition(location);
        updateMarkerPositions(location);
        geocodePositions(location);
      }



    


  </script>





</html>

