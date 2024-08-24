<!doctype html>
<html lang="en">

<head>
    <title><?= $title ?></title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link rel="stylesheet" href="public/css/<?= $src ?>.css">
    <style>
        @media (min-width: 992px) {
            .menu {
                margin-left: 150px;
            }
        }

        @media (max-width: 768px) {
            .menu {
                margin-left: 0px;
            }
        }

        @media (max-width: 576px) {
            .menu {
                margin-left: 0px;
            }
        }
    </style>
    <link
        href="
    https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css
    "
        rel="stylesheet" />
    <link href="
https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.min.css
" rel="stylesheet">
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
        crossorigin="anonymous" />
</head>

<body>
    <header style="position: fixed;top:0;z-index:1000;background-color:white;width:100%">
        <nav class="navbar navbar-expand-lg bg-body-white shadow">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="public/images/logo.svg" alt="" style="height: 70px;">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 menu p-1 d-flex gap-3">
                        <li class="nav-item sidebar-link">
                            <a class="nav-link" href="index.php">Accueil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link sidebar-link" href="index.php?action=chambre">Nos Chambres</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link sidebar-link" href="index.php?action=propos">Qui sommes-nous ?</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link sidebar-link" href="index.php?action=contact">Contact</a>
                        </li>
                    </ul>
                    <div class="d-flex align-items-center gap-3">
                        <button class="btn bg-success d-flex align-items-center gap-4">
                            <span class="text-white fs-5">Telephone</span>
                            <i class="ri-phone-fill fes-5 text-white"></i>
                        </button>
                        <div style="width: 48px;height:48px" class="bg-success rounded-circle d-flex align-items-center justify-content-center">
                            <i class="ri-whatsapp-line text-white fs-4"></i>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>