<!DOCTYPE html>
<html lang="en">
<head>
    <!-- meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!-- custom css -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="separator.css">
    <style>
     .sidebar-item {
        margin-top: 10px;
        margin-bottom: 40px; /* Tambahkan jarak antara setiap item sidebar */
        }   
    </style>
</head>
<body>
    <form class="form-container" action="/dashboard" method="POST">
        <div class="container-fluid">
            <div class="row">
                <!-- Sidebar -->
                <div class="col-1 text-white position-fixed h-100 fa-2xl" style="background-color: #12AD2B;">
                    <ul class="nav flex-column">
                        <li class="nav-item sidebar-item">
                            <a class="nav-link text-white" href="/dashboard/profile"><i class="far fa-user"></i></a>
                        </li>
                        <li class="nav-item sidebar-item">
                            <a class="nav-link text-white" href="/dashboard/order"><i class="fa-solid fa-basket-shopping"></i></a>
                        </li>
                        <li class="nav-item sidebar-item">
                            <a class="nav-link text-white" href="/dashboard/product"><i class="fa-solid fa-store"></i></a>
                        </li>
                        <li class="nav-item sidebar-item">
                            <a class="nav-link text-white" href="/dashboard/logout"><i class="fas fa-sign-out-alt"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </form>
    
    <!-- Bootstrap requirement jQuery pada posisi pertama, kemudian Popper.js, dan yang terakhir Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/53b3156941.js" crossorigin="anonymous"></script>
</body>
</html>
