          <nav class="navbar navbar-inverse navbar-static-top">
                <div class="container">
                  <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                      <span class="sr-only">Toggle navigation</span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php">eShop</a>
                  </div>
                  <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                      <li class="active"><a href="index.php">Home</a></li>
                      <li><a href="#about">About</a></li>
                      <li><a href="#contact">Contact</a></li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="float:right;">Dropdown <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                          <li><a href="#">Action</a></li>
                          <li><a href="#">Another action</a></li>
                          <li><a href="#">Something else here</a></li>
                          <li role="separator" class="divider"></li>
                          <li class="dropdown-header">Nav header</li>
                          <li><a href="#">Separated link</a></li>
                          <li><a href="#">One more separated link</a></li>
                        </ul>
                      </li>
                    </ul>
                    <button type="button" style="float:right;" class="btn btn-default navbar-btn btn-primary" onclick="location.href='../links/register.php';">Sign up</button>
                    <button type="button" style="float:right;" class="btn btn-default navbar-btn" onclick="location.href='../links/login.php';">Sign in</button>
                  </div>
                </div>
              </nav>

              <!-- Sidebar -->
              <nav class="navbar navbar-default sidebar" id="sidebar-wrapper" role="navigation"> 
                <div class="container-fluid"> 
                  <div class="navbar-header"> 
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-sidebar-navbar-collapse-1"> 
                      <span class="sr-only">Toggle navigation</span> 
                      <span class="icon-bar"></span> 
                      <span class="icon-bar"></span> 
                      <span class="icon-bar"></span> 
                    </button> 
                  </div> 
                  <div class="collapse navbar-collapse" id="bs-sidebar-navbar-collapse-1"> 
                    <ul class="nav navbar-nav"> 
                      <li class="active">
                        <a href="#">Home<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-home"></span></a>
                      </li> 
                      <li class="dropdown"> 
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Usuarios
                          <span class="caret"></span>
                          <span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-user"></span></a> 
                        <ul class="dropdown-menu forAnimate" role="menu"> 
                          <li><a href="{{URL::to('createusuario')}}">Crear</a></li> 
                          <li><a href="#">Modificar</a></li> 
                          <li><a href="#">Reportar</a></li> 
                          <li class="divider"></li> 
                          <li><a href="#">Separated link</a></li> 
                          <li class="divider"></li> 
                          <li><a href="#">Informes</a></li> 
                        </ul> 
                      </li> 
                      <li><a href="#">Libros
                        <span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-th-list"></span></a></li> 
                      <li><a href="#">Tags
                        <span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-tags"></span></a></li> 
                    </ul> 
                  </div> 
                </div> 
              </nav>