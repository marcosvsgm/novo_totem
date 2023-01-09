<?php
if(isset($_POST['submit']))
{
$name= $_POST['resposta6'];
// conexão com o banco de dados modelo padrão do php

  $dbHost ='Localhost';
  $dbUsername = 'root';
  $dbPassword =''; 
  $dbName = 'totem_senai';

  $conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);

  // info bd
 $result_cadsatro = "insert into respostas (resposta6) values ('$name')";
 $resultado_cadsatro = mysqli_query($conexao, $result_cadsatro);
}
 ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>DASHMIN - Bootstrap Admin Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-xxl position-relative bg-white d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->
< <!-- Sidebar Start -->
<div class="sidebar pe-4 pb-3">
    <nav class="navbar bg-light navbar-light">
            <h3 class="text-primary">Totem senai</h3>

                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="far fa-file-alt me-2"></i>Perguntas</a>
                <div class="dropdown-menu bg-transparent border-0">
                    <a href="pergunta1.php" class="dropdown-item">pergunta 1</a>
                    <a href="pergunta2.php" class="dropdown-item">pergunta 2</a>
                    <a href="pergunta3.php" class="dropdown-item">pergunta 3</a>
                    <a href="pergunta4.php" class="dropdown-item">pergunta 4</a>
                    <a href="pergunta5.php" class="dropdown-item">pergunta 5</a>
                    <a href="pergunta6.php" class="dropdown-item">pergunta 6</a>
                    <a href="pergunta7.php" class="dropdown-item">pergunta 7</a>
                    <a href="pergunta8.php" class="dropdown-item">pergunta 8</a>
                </div>
                        </div>
                    </div>
                </div>
            </div>

<!-- Sidebar End -->


        


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <nav class="navbar navbar-expand bg-light navbar-light sticky-top px-4 py-0">
                <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
                    <h2 class="text-primary mb-0"><i class="fa fa-hashtag"></i></h2>
                </a>
                <a href="#" class="sidebar-toggler flex-shrink-0">
                    <i class="fa fa-bars"></i>
                </a>
                
                <div class="navbar-nav align-items-center ms-auto">
                    <div class="nav-item dropdown">
                        
                        
                    </div>
                    
                    
                </div>
            </nav>
            <!-- Navbar End -->


            <!-- Blank Start -->
            <form method="POST" action="pergunta8.php">
            <div class="container-fluid pt-4 px-4">
                <div class="row vh-100 bg-light rounded align-items-center justify-content-center mx-0">
                    <div class="col-md-6 text-center">
                        <h3>Escolha a palavra que melhor define o nosso produto ou serviço.</h3>
                        <div class="bg-light rounded h-100 p-4">
                            <div class="btn-group" role="group">
                                <button href="pergunta2.php" type="submit" name="resposta7" class="btn btn-danger">Ruim</button>
                                <button href="pergunta2.php" type="submit" name="resposta7" class="btn btn-warning">Médio</button>
                                <button href="pergunta2.php"type="submit"  name="resposta7" class="btn btn-success">Bom</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </form>
            
            <!-- Blank End -->

        </div>
        <!-- Content End -->


        <!-- Back to Top -->
        

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/chart/chart.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>