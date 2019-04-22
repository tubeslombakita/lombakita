<!doctype html>     
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css" >


    <!-- Our Custom CSS -->
	<link rel="stylesheet" href="<?php echo base_url();?>/assets/css/sidebar.css">
	<!-- Scrollbar Custom CSS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">


    <title>LOMBA KITA</title>
  </head>
  <body>
    <header>
    <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
      <div>
        <button class="btn nav-link   btn-light" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation" onclick="openNav()" ondblclick="closeNav()">
            <span class="navbar-toggler-icon"></span>
        </button>
      </div>
      <ul class="navbar-nav"> 
             <!-- <li><button>test </button></li> &emsp; -->
             
        <li> <a class="navbar-brand nav-link" href="#">LOMBAKITA.COM</a> </li> 
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                     Kategori
            </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="#">Pelajar</a>
                    <a class="dropdown-item" href="#">Mahasiswa</a>
                    <a class="dropdown-item" href="#">Umum</a>
                    <a class="dropdown-item" href="#">Lainnya</a>
                </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Menjadi Penyelenggara <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Blog</a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      English(en)
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="#">English(en)</a>
                <a class="dropdown-item" href="#">Indonesia(id)</a>

            </div>
        </li>
      </ul>
      <ul class="nav navbar-nav ml-auto">
                
                <!-- navbar_plugin_output -->
                <li class="nav-item">
                
                </li>
                <!-- user_menu -->
                <li class="nav-item d-flex align-items-center">
                    <div><span >You are not logged in. (<a href="#">Log in</a>)</span></div>
                </li>
            </ul>
      <!-- <ul class="navbar-nav navbar-right" >
        <li style="text-align: right;">You are not logged in.(<a href="#">Log in</a>)</li>  
      </ul> -->
      </div>
    </nav>
    <div id="mySidebar" class="sidebar">
    </br><button type="button" class="btn btn-primary btn-block btn-lg" >Home</button>
    </div>
    </header>

   
    

    
    <!-- <div class="bd-example">
    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
              <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
            </ol>
        <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="..." class="d-block w-100" alt="...">
                  <div class="carousel-caption d-none d-md-block">
                    <h5>First slide label</h5>
                    <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                  </div>
              </div>
              <div class="carousel-item">
                    <img src="..." class="d-block w-100" alt="...">
                      <div class="carousel-caption d-none d-md-block">
                          <h5>Second slide label</h5>
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                      </div>
              </div>
              <div class="carousel-item">
                    <img src="..." class="d-block w-100" alt="...">
                      <div class="carousel-caption d-none d-md-block">
                          <h5>Third slide label</h5>
                          <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                      </div>
              </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
 -->

    <script>
      function openNav() {
        document.getElementById("mySidebar").style.width = "250px";
        document.getElementById("main").style.marginLeft = "250px";
      }

      function closeNav() {
        document.getElementById("mySidebar").style.width = "0";
        document.getElementById("main").style.marginLeft= "0";
      }
    </script>
    <script src="<?php echo base_url();?>assets/js/jquery.js" ></script>
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js" ></script>
  </body>

</html>
