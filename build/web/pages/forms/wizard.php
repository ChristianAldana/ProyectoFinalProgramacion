<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Lista</title>

  <!-- plugins:css -->
  <link rel="stylesheet" href="..\..\vendors\mdi\css\materialdesignicons.min.css">
  <link rel="stylesheet" href="..\..\vendors\simple-line-icons\css\simple-line-icons.css">
  <link rel="stylesheet" href="..\..\vendors\flag-icon-css\css\flag-icon.min.css">
  <link rel="stylesheet" href="..\..\vendors\css\vendor.bundle.base.css">
  <script src="../../js/db.js" type="text/javascript"></script>
  
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
        <link href="parteTres.css" rel="stylesheet" type="text/css"/>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src="ultimo 2/ProyectoFinalProgramacion/build/web/js/script.js" type="text/javascript"></script>
        
  <!-- plugin css para esta lista -->
  <link rel="stylesheet" href="..\..\vendors\jsgrid\jsgrid.min.css">
  <link rel="stylesheet" href="..\..\vendors\jsgrid\jsgrid-theme.min.css">
 
  <!-- Conexion con :css -->
  <link rel="stylesheet" href="..\..\css\style.css">
</head>

<body>
  <div class="container-scroller">
    <!-- SECCION DEL NAVBAR -->

    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
        <a class="navbar-brand brand-logo" href="..\..\index.html"><img src="..\..\images\logo.png" alt="logo"></a>
      </div>

        <!-- SECCION DE LA CONFIGURACION DE LA CUENTA -->
        <div class="navbar-menu-wrapper d-flex align-items-center">
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="icon-menu"></span>
          </button>
          <ul class="navbar-nav">
            <li class="nav-item dropdown d-none d-lg-flex">
              <a class="nav-link dropdown-toggle nav-btn" id="actionDropdown" href="#" data-toggle="dropdown">
                <span class="btn">+ Account</span>
              </a>
              <!-- Crear un nuevo usuario, rol del usuario y reporte del usuario -->
              <div class="dropdown-menu navbar-dropdown dropdown-left" aria-labelledby="actionDropdown">
                <a class="dropdown-item" href="#">
                  <i class="icon-user text-primary"></i>
                  Nuevo usuario
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">
                  <i class="icon-user-following text-warning"></i>
                  Rol: Coordinador
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">
                  <i class="icon-docs text-success"></i>
                   Reporte
                </a>
              </div>
            </li>
          </ul>
  
         <!-- SECCION DE LOS IDIOMAS DISPONIBLES -->
         <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item dropdown d-none d-lg-flex">
            <a class="nav-link dropdown-toggle" id="languageDropdown" href="#" data-toggle="dropdown">
              <i class="flag-icon flag-icon-es"></i>
              Español
            </a>
            <div class="dropdown-menu navbar-dropdown" aria-labelledby="languageDropdown">
              <a class="dropdown-item font-weight-medium" href="#">
                <i class="flag-icon flag-icon-fr"></i>
                Proximamente
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item font-weight-medium" href="#">
                <i class="flag-icon flag-icon-gb"></i>
                Proximamente
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item font-weight-medium" href="#">
                <i class="flag-icon flag-icon-lt"></i>
                Proximamente
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item font-weight-medium" href="#">
                <i class="flag-icon flag-icon-ae"></i>
                Proximamente
              </a>
            </div>
          </li>
          
           <!-- SECCION DE LAS NOTIFICACIONES RECIENTES -->

           <li class="nav-item dropdown">
            <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
              <i class="icon-bell mx-0"></i>
              <span class="count"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
              <a class="dropdown-item">
                <p class="mb-0 font-weight-normal float-left">Tienes nuevas notificaciones
                </p>
                <span class="badge badge-pill badge-warning float-right">Ver notificaciones</span>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-success">
                    <i class="icon-info mx-0"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject font-weight-medium">Nuevo registro de alumno</h6>
                  <p class="font-weight-light small-text">
                    Justo ahora.
                  </p>
                </div>
              </a> 
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-info">
                    <i class="icon-envelope mx-0"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject font-weight-medium">Registros ya realizados!</h6>
                  <p class="font-weight-light small-text">
                    Hace 2 dias.
                  </p>
                </div>
              </a>
            </div>
          </li>

 <!-- SECCION DE LOS ALUMNOS RECIEN AGREGADOS -->

 <li class="nav-item dropdown">
  <a class="nav-link count-indicator dropdown-toggle" id="messageDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
    <i class="icon-envelope mx-0"></i>
    <span class="count"></span>
  </a>
  <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="messageDropdown">
    <div class="dropdown-item">
      <p class="mb-0 font-weight-normal float-left">Alumnos recien agregados.
      </p>
      <span class="badge badge-info badge-pill float-right">Ver todo</span>
    </div>
    <div class="dropdown-divider"></div>
    <a class="dropdown-item preview-item">
      <div class="preview-thumbnail">
          <img src="..\..\images\faces\Carlos.jpeg" alt="image" class="profile-pic">
      </div>
      <div class="preview-item-content flex-grow">
        <h6 class="preview-subject ellipsis font-weight-medium">Carlos Gonzales
          <span class="float-right font-weight-light small-text">1 Minuto atras</span>
        </h6>
        <p class="font-weight-light small-text">
          Alumno registrado exitosamente.!
        </p>
      </div>
    </a>
    <div class="dropdown-divider"></div>
    <a class="dropdown-item preview-item">
      <div class="preview-thumbnail">
          <img src="..\..\images\faces\Brandon.jpeg" alt="image" class="profile-pic">
      </div>
      <div class="preview-item-content flex-grow">
        <h6 class="preview-subject ellipsis font-weight-medium">Brandon Amperez
          <span class="float-right font-weight-light small-text">15 Minutos atras</span>
        </h6>
        <p class="font-weight-light small-text">
          Alumno registrado exitosamente!
        </p>
      </div>
    </a>
    <div class="dropdown-divider"></div>
    <a class="dropdown-item preview-item">
      <div class="preview-thumbnail">
          <img src="..\..\images\faces\Yulmi.jpeg" alt="image" class="profile-pic">
      </div>
      <div class="preview-item-content flex-grow">
        <h6 class="preview-subject ellipsis font-weight-medium"> Yulmi Contreras
          <span class="float-right font-weight-light small-text">18 Minutos atras</span>
        </h6>
        <p class="font-weight-light small-text">
          Alumna registrado exitosamente!
        </p>
      </div>
    </a>
  </div>
</li>
<li class="nav-item nav-settings d-none d-lg-block">
  <a class="nav-link" href="#">
    <i class="icon-grid"></i>
  </a>
</li>
</ul>
<button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
<span class="icon-menu"></span>
</button>
</div>
</nav>
<!-- FIN DEL NAVBAR -->

    <!-- SECCION DEL PANEL DE RECORDATORIO-->
    <div class="container-fluid page-body-wrapper">
      <div class="row row-offcanvas row-offcanvas-right">

        <!-- SECCION DE LA CONFIGURACION DEL PANEL -->
        <div class="theme-setting-wrapper">
          <div id="settings-trigger"><i class="mdi mdi-settings"></i></div>
          <div id="theme-settings" class="settings-panel">
            <i class="settings-close mdi mdi-close"></i>

            <!-- SECCION DE LOS COLORES-->
            <p class="settings-heading">TIPO DE COLORES</p>
            <div class="sidebar-bg-options selected" id="sidebar-light-theme"><div class="img-ss rounded-circle bg-light border mr-3"></div>Modo normal</div>
            <div class="sidebar-bg-options" id="sidebar-dark-theme"><div class="img-ss rounded-circle bg-dark border mr-3"></div>Modo nocturno</div>
            <p class="settings-heading mt-2">Customizar</p>
            <div class="color-tiles mx-0 px-4">
              <div class="tiles primary"></div>
              <div class="tiles success"></div>
              <div class="tiles warning"></div>
              <div class="tiles danger"></div>
              <div class="tiles pink"></div>
              <div class="tiles info"></div>
              <div class="tiles dark"></div>
              <div class="tiles default"></div>
            </div>
          </div>
        </div>
        <div id="right-sidebar" class="settings-panel">
          <i class="settings-close mdi mdi-close"></i>
          <ul class="nav nav-tabs" id="setting-panel" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" id="todo-tab" data-toggle="tab" href="#todo-section" role="tab" aria-controls="todo-section" aria-expanded="true">TO DO LIST</a>
            </li>
            <li class="nav-item">
            </li>
          </ul>
          <div class="tab-content" id="setting-content">
            <div class="tab-pane fade show active scroll-wrapper" id="todo-section" role="tabpanel" aria-labelledby="todo-section">
              <div class="add-items d-flex px-3 mb-0">
                <form class="form w-100">
                  <div class="form-group d-flex">
                    <input type="text" class="form-control todo-list-input" placeholder="Add To-do">
                    <button type="submit" class="add btn btn-primary todo-list-add-btn" id="add-task">Add</button>
                  </div>
                </form>
              </div>
              <div class="list-wrapper px-3">
                <ul class="d-flex flex-column-reverse todo-list">
                  
                  <li>
                    <div class="form-check">
                      <label class="form-check-label">
                        <input class="checkbox" type="checkbox">
                        Preparar los reportes.
                      </label>
                    </div>
                    <i class="remove mdi mdi-close-circle-outline"></i>
                  </li>
                  <li>  
                </ul>
              </div>
              
              <div class="events pt-4 px-3">
                <div class="wrapper d-flex mb-2">
                  <i class="mdi mdi-circle-outline text-primary mr-2"></i>
                  <span>29 de octubre de 2022</span>
                </div>
                <p class="mb-0 font-weight-thin text-gray">Reunion con el presidente para entrega de los reportes</p>
                
              </div>
            </div>
            <!-- FIN DE LA SECCION DE RECORDATORIOS -->
          </div>
        </div>

            <!-- SECCION DEL PERFIL  -->

            <nav class="sidebar sidebar-offcanvas" id="sidebar">
              <ul class="nav">
                <li class="nav-item nav-profile">
                  <div class="nav-link">
                    <div class="profile-image">
                      <img src="..\..\images\faces\face26.jpeg" alt="image">
                      <span class="online-status online"></span> <!-- offline Si se quiere inactivar el perfil-->
                    </div>
                    <div class="profile-name">
                      <p class="name">
                        Christian
                      </p>
                      <p class="designation">
                        Coordinador
                      </p>
                    </div>
                  </div>
                </li>
                
            <li class="nav-item">
              <a class="nav-link" href="..\..\index.html">
                <i class="icon-rocket menu-icon"></i>
                <!-- SECCION DEL AREA DASHBOARD  -->
                <span class="menu-title">Dashboard</span>
                <span class="badge badge-success">Estadisticas</span>
              </a>
            </li> 

                         <!-- SECCION DEL AREA DE ELEMENTOS AVANZADOS  -->

            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#ui-advanced" aria-expanded="false" aria-controls="ui-advanced">
                <i class="icon-cup menu-icon"></i>
                <span class="menu-title">Avanzados</span>
                <span class="badge badge-primary">2</span>
              </a>
              <div class="collapse" id="ui-advanced">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="..\ui-features\dragula.html">Reporte</a></li>
                  <li class="nav-item"> <a class="nav-link" href="..\ui-features\carousel.html">Carousel</a></li>
                </ul>
              </div>
            </li>
                         <!-- SECCION DEL AREA FORMULARIOS  -->

            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#form-elements" aria-expanded="false" aria-controls="form-elements">
                <i class="icon-flag menu-icon"></i>
                <span class="menu-title">Formularios</span>
                <span class="badge badge-danger">1</span>
              </a>
              <div class="collapse" id="form-elements">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"><a class="nav-link" href="..\forms\wizard.html">Registro</a></li>
                </ul>
              </div>
            </li>
            

            <!-- SECCION DE GRAFICAS  -->
<li class="nav-item">
  <a class="nav-link" data-toggle="collapse" href="#charts" aria-expanded="false" aria-controls="charts">
    <i class="icon-pie-chart menu-icon"></i>
    <span class="menu-title">Graficas</span>
    <span class="badge badge-warning">4</span>
  </a>
              <div class="collapse" id="charts">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="..\charts\chartjs.html">Grafica A</a></li>
                  <li class="nav-item"> <a class="nav-link" href="..\charts\flot-chart.html">Grafica B</a></li>
                  <li class="nav-item"> <a class="nav-link" href="..\charts\c3.html"> Grafica C</a></li>
                  <li class="nav-item"> <a class="nav-link" href="..\charts\chartist.html">Grafica D</a></li>
                </ul>
                </div>
            </li>

                          <!-- SECCION DE TABLAS  -->

            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#tables" aria-expanded="false" aria-controls="tables">
                <i class="icon-grid menu-icon"></i>
                <span class="menu-title">Tablas</span>
                <span class="badge badge-info">4</span>
              </a>
              <div class="collapse" id="tables">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="basic-table.html">Tabla Basica</a></li>
                  <li class="nav-item"> <a class="nav-link" href="data-table.html">Tabla Datos</a></li>
                  <li class="nav-item"> <a class="nav-link" href="js-grid.html">Lista Alumnos</a></li>
                </ul>
              </div>
            </li>
           
                         <!-- SECCION DE CALENDARIO  -->

            <li class="nav-item">
              <a class="nav-link" href="..\apps\calendar.html">
                <i class="icon-calendar menu-icon"></i>
                <span class="menu-title">Calendario</span>
              </a>
            </li>
                             <!-- SECCION DE LISTA DE ALUMNOS REGISTRADOS  -->

            <li class="nav-item">
              <a class="nav-link" href="..\apps\todo.html">
                <i class="icon-clock menu-icon"></i>
                <span class="menu-title">Todo List</span>
              </a>
            </li>
          </ul>
        </nav>
        <!-- partial -->






        <!-- partial -->
  
    

        <div class="content-wrapper">
        <div class="row grid-margin">
        <div class="col-12">
        <div class="card">
        <div class="card-body">
        <h1>Formulario de Registro Alumnos</h1>
        <a href="ultimo 2/ProyectoFinalProgramacion/src/java/NewServlet.java"></a>
        <form method="POST" id="form" name="form" action="conector.php">
            <div class="form-group">
                <label for="exampleInputName">Nivel academico</label>
                <input class="form-control" type="text" placeholder="ingresar nivel" name="nivel" id="nivel" >
            </div>
            
            <div class="form-group">
                <label for="exampleInputName">Sección</label>
                <input class="form-control" type="text" placeholder="ingresar seccion" name="seccion" id="seccion" >
            </div>
            
            <div class="form-group">
                <label for="exampleInputName">Profesor</label>
                <input class="form-control" type="text" placeholder="ingresar profesor" name="profesor" id="profesor" >
            </div>
            
            <div class="form-group">
                <label for="exampleInputName">Codigo de alumno</label>
                <input class="form-control" type="text" placeholder="ingresar codigo" name="codigo" id="codigo" >
            </div>
            <div class="form-group">
                <label for="exampleInputName">Nombre del alumno</label>
                <input class="form-control" type="text" placeholder="ingresar nombre" name="nombre" id="nombre" >
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Correo</label>
              <input type="email" class="form-control"  aria-describedby="emailHelp" name="correo" id="correo"  >
              <small id="emailHelp" class="form-text text-muted">No compartas tu correo con nadie.</small>
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Direccion</label>
              <input type="text" class="form-control"  name="direccion" id="direccion"  >
            </div>
            
            <select class="form-control" name="opcion">
                <option value="1">1 = Masculino</option>
                <option value="2">2 = Femenino</option>
            </select><br>
            <button type="submit" class="btn btn-primary">Guardar</button>
              <button type="button" onclick="enviarFormularioOpcion2()" class="btn btn-success">Guardar con JS</button>
             <button type="button" onclick="borrarArrays()" class="btn btn-danger">Eliminar JS</button>
             <button type="reset" class="btn btn-danger">Cancelar</button>
             <?php
 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
 
    // collect value of input field
    $data = $_REQUEST['INSERT INTO Systemae.alumno(idAlumno, Profesor, seccion, codigo, correo, direccion )'];
 
    if (empty($data)) {
        echo "data is empty";
    } else {
        echo $data;
    }
}
?>
 
// Closing the connection.
$conn->close();
 
?>
        </form>
        
        

					<!-- partial:../../partials/_footer.html -->
					<footer class="footer">
            <div class="container-fluid clearfix">
              <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © 2017 <a href="#">UrbanUI</a>. All rights reserved.</span>
              <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="mdi mdi-heart text-danger"></i></span>
            </div>
          </footer>
					<!-- partial -->
        </div>
        <!-- content-wrapper ends -->
      </div>
      <!-- row-offcanvas ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="..\..\vendors\js\vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <script src="..\..\vendors\jsgrid\jsgrid.min.js"></script>
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="..\..\js\off-canvas.js"></script>
  <script src="..\..\js\hoverable-collapse.js"></script>
  <script src="..\..\js\misc.js"></script>
  <script src="..\..\js\settings.js"></script>
  <script src="..\..\js\todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="..\..\js\js-grid.js"></script>
  <script src="..\..\js\db.js"></script>
  <!-- End custom js for this page-->
</body>

</html>