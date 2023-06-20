<!DOCTYPE html>
<html>
<head>
    <title>Profile Form</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/bootstrap/css/bootstrap.min.css') ?>">
    <style>
     .sidebar-item {
        margin-top: 50px;
        margin-bottom: 40px; /* Tambahkan jarak antara setiap item sidebar */
        }      
    </style>
</head>
<body>
<form class="form-container">
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
                <div class="container">
                    <h1>Profile Form</h1>
        <!-- Form code goes here -->
    </div>

    <!-- Bootstrap JS -->
    <script src="<?= base_url('assets/bootstrap/js/bootstrap.min.js') ?>"></script>
    <script src="https://kit.fontawesome.com/53b3156941.js" crossorigin="anonymous"></script>
</body>
</html>
