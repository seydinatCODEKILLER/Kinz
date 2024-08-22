<?php
$title = "A propos - kinz";
$src = "propos";
require_once 'layout/header.php';
?>
<main style="margin-top: 98px;">
    <section class="splide" id="splide" aria-labelledby="carousel-heading">
        <div class="splide__track">
            <ul class="splide__list">
                <li class="splide__slide">
                    <div
                        class="d-flex align-items-center p-5"
                        style="
                                    background-image: url(public/images/fond1.svg);
                                    background-size: cover;
                                    background-repeat: no-repeat;
                                    background-position: center;
                                    height: 90vh;">
                        <div class="cont w-50 d-none d-sm-block p-4 shadow-sm bg-white position-relative rounded">
                            <h2 class="py-3">Qui sommes nous ?</h2>
                            <p class="m-0">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum, ducimus sequi magni repellendus natus, quod molestiae iusto, harum corrupti eum ipsum voluptas aperiam illo doloribus cupiditate! Natus adipisci molestias, quaerat incidunt eaque rerum distinctio quia minima ad, voluptatem, id vitae? Nihil a corrupti eius, voluptas est, error vitae odio eum libero dolores quia doloribus cum deleniti consectetur? Exercitationem, neque reiciendis?
                            </p>
                            <div class="position-absolute top-0 start-100 translate-middle">
                                <i class="ri-double-quotes-r" style="font-size: 60px;"></i>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="splide__slide">
                    <div
                        class="d-flex align-items-center p-5"
                        style="
                                    background-image: url(public/images/fond2.svg);
                                    background-size: cover;
                                    background-repeat: no-repeat;
                                    background-position: center;
                                    height: 90vh; ">
                        <div class="cont w-50 d-none d-sm-block p-4 shadow-sm bg-white position-relative rounded">
                            <p class="m-0">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum, ducimus sequi magni repellendus natus, quod molestiae iusto, harum corrupti eum ipsum voluptas aperiam illo doloribus cupiditate! Natus adipisci molestias, quaerat incidunt eaque rerum distinctio quia minima ad, voluptatem, id vitae? Nihil a corrupti eius, voluptas est, error vitae odio eum libero dolores quia doloribus cum deleniti consectetur? Exercitationem, neque reiciendis?
                            </p>
                            <div class="position-absolute top-0 start-100 translate-middle">
                                <i class="ri-double-quotes-r text-info" style="font-size: 60px;"></i>
                            </div>
                            <div class="position-absolute top-100 start-0 translate-middle">
                                <i class="ri-double-quotes-l text-info" style="font-size: 60px;"></i>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="splide__slide">
                    <div
                        class="d-flex align-items-center justify-content-end p-5"
                        style="
                                    background-image: url(public/images/fond3.svg);
                                    background-size: cover;
                                    background-repeat: no-repeat;
                                    background-position: center;
                                    height: 90vh;">
                        <div class="cont w-50 d-none d-sm-block p-4 shadow-sm bg-white position-relative rounded">
                            <p class="m-0">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum, ducimus sequi magni repellendus natus, quod molestiae iusto, harum corrupti eum ipsum voluptas aperiam illo doloribus cupiditate! Natus adipisci molestias, quaerat incidunt eaque rerum distinctio quia minima ad, voluptatem, id vitae? Nihil a corrupti eius, voluptas est, error vitae odio eum libero dolores quia doloribus cum deleniti consectetur? Exercitationem, neque reiciendis?
                            </p>
                            <div class="position-absolute top-0 start-100 translate-middle">
                                <i class="ri-double-quotes-r text-warning" style="font-size: 60px;"></i>
                            </div>
                            <div class="position-absolute top-100 start-0 translate-middle">
                                <i class="ri-double-quotes-l text-warning" style="font-size: 60px;"></i>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </section>
    <div class="container ban z-3 d-none d-sm-block mt-5">
        <div class="row">
            <div class="col-12 baniere rounded-pill d-flex justify-content-center gap-5 p-2">
                <div class="text-white d-flex flex-column justify-content-center gap-3 align-items-center">
                    <p class="fs-4 m-0">+ 50 Résidences</p>
                    <div class="baniere-icon rounded-circle">
                        <i class="ri-home-office-line fs-3"></i>
                    </div>
                </div>
                <div class="text-white d-flex flex-column justify-content-center gap-3 align-items-center">
                    <p class="fs-4 m-0">+200 Chambres</p>
                    <div class="baniere-icon rounded-circle">
                        <i class="ri-stack-line fs-3"></i>
                    </div>
                </div>
                <div class="text-white d-flex flex-column justify-content-center gap-3 align-items-center">
                    <p class="fs-4 m-0">120k Demande</p>
                    <div class="baniere-icon rounded-circle">
                        <i class="ri-group-3-line fs-3"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12 d-flex flex-column align-items-center justify-content-center mt-5">
                <div class="line"></div>
                <h2 class="mt-4 w-50 text-center">Pourquoi nous choisir ?</h2>
            </div>
        </div>
        <div class="row mt-5 d-flex justify-content-between">
            <div class="col-12 col-sm-6 col-lg-7 position-relative p-3 shadow bg-info-subtle">
                <p class="fw-bold m-0 fs-5 py-4">Emplacements Idéaux</p>
                <span style="margin-bottom: 20px;">
                    Nos propriétés sont situées dans des zones stratégiques, offrant un accès facile aux principales attractions, aux transports en commun et aux commodités locales. Que vous soyez en voyage d'affaires ou en vacance
                </span>
                <div class="rond d-none d-sm-flex position-absolute top-100 start-0 translate-middle rounded-circle shadow">01</div>
            </div>
            <div class="col-12 col-sm-5 col-lg-4 mt-5 mt-sm-0 position-relative p-3 shadow bg-success-subtle">
                <p class="fw-bold m-0 fs-5 py-4">Service client exceptionnel</p>
                <span style="margin-bottom: 20px;">
                    Nous nous engageons à offrir un confort optimal à nos clients. Chaque chambre est soigneusement aménagée avec des lits confortables, une literie de haute qualité, et toutes les commodités modernes nécessaires pour un séjour
                </span>
                <div class="rond d-none d-sm-flex position-absolute top-0 start-100 translate-middle rounded-circle shadow">03</div>
            </div>
        </div>
        <div class="row mt-5 d-flex justify-content-between">
            <div class="col-12 col-sm-5 col-lg-4 position-relative p-3 shadow bg-warning-subtle">
                <p class="fw-bold m-0 fs-5 py-4">Confort et Qualité</p>
                <span style="margin-bottom: 20px;">
                    Nous nous engageons à offrir un confort optimal à nos clients. Chaque chambre est soigneusement aménagée avec des lits confortables, une literie de haute qualité, et toutes les commodités modernes nécessaires pour un séjour
                </span>
                <div class="rond d-none d-sm-flex position-absolute top-0 start-100 translate-middle rounded-circle shadow">02</div>
            </div>
            <div class="col-12 col-sm-6 col-lg-7 mt-5 mt-sm-0 position-relative p-3 shadow bg-danger-subtle">
                <p class="fw-bold m-0 fs-5 py-4">Service client exceptionnel</p>
                <span style="margin-bottom: 20px;">
                    Nous nous engageons à offrir un confort optimal à nos clients. Chaque chambre est soigneusement aménagée avec des lits confortables, une literie de haute qualité, et toutes les commodités modernes nécessaires pour un séjour
                </span>
                <div class="rond d-none d-sm-flex position-absolute top-100 start-0 translate-middle rounded-circle shadow">03</div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12 d-flex flex-column align-items-center justify-content-center mt-5">
                <div class="line"></div>
                <h2 class="mt-4 w-50 text-center">Nos Services</h2>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-12 col-sm-10 col-lg-6 d-flex flex-column gap-3 order-2 order-lg-1">
                <div class="col-12 d-flex gap-3 align-items-center p-2 shadow-sm rounded">
                    <div class="d-flex justify-content-center align-items-center bg-light rounded-circle" style="width: 50px;height:50px">
                        <i class="ri-reserved-line fs-4"></i>
                    </div>
                    <p class="m-0 fw-bold">Réservation de Chambres en Ligne</p>
                </div>
                <div class="col-12 d-flex gap-3 align-items-center p-2 shadow-sm rounded">
                    <div class="d-flex justify-content-center align-items-center bg-light rounded-circle" style="width: 50px;height:50px">
                        <i class="ri-wifi-fill fs-4"></i>
                    </div>
                    <p class="m-0 fw-bold">Sélection de Chambres Équipées</p>
                </div>
                <div class="col-12 d-flex gap-3 align-items-center p-2 shadow-sm rounded">
                    <div class="d-flex justify-content-center align-items-center bg-light rounded-circle" style="width: 50px;height:50px">
                        <i class="ri-money-dollar-circle-line fs-4"></i>
                    </div>
                    <p class="m-0 fw-bold">Paiement à l'Arrivée</p>
                </div>
                <div class="col-12 d-flex gap-3 align-items-center p-2 shadow-sm rounded">
                    <div class="d-flex justify-content-center align-items-center bg-light rounded-circle" style="width: 50px;height:50px">
                        <i class="ri-customer-service-2-line fs-4"></i>
                    </div>
                    <p class="m-0 fw-bold">Support Client 24/7</p>
                </div>
                <div class="col-12 d-flex gap-3 align-items-center p-2 shadow-sm rounded">
                    <div class="d-flex justify-content-center align-items-center bg-light rounded-circle" style="width: 50px;height:50px">
                        <i class="ri-megaphone-line fs-4"></i>
                    </div>
                    <p class="m-0 fw-bold">Accueil Chaleureux et Professionnel</p>
                </div>
            </div>
            <div class="col-12 col-sm-10 col-lg-6 mt-3 mt-lg-0 order-1 order-lg-2">
                <section
                    class="splide"
                    id="splide2"
                    aria-labelledby="carousel-heading">
                    <div class="splide__track">
                        <ul class="splide__list">
                            <li class="splide__slide">
                                <div
                                    class="rounded"
                                    style="
                        background-image: url(public/images/car1.jpg);
                        background-repeat: no-repeat;
                        background-size: cover;
                        background-position: center;
                        height: 70vh;
                      "></div>
                            </li>
                            <li class="splide__slide">
                                <div
                                    class="rounded"
                                    style="
                        background-image: url(public/images/car2.jpg);
                        background-repeat: no-repeat;
                        background-size: cover;
                        background-position: center;
                        height: 70vh;
                      "></div>
                            </li>
                            <li class="splide__slide">
                                <div
                                    class="rounded"
                                    style="
                        background-image: url(public/images/car3.jpg);
                        background-repeat: no-repeat;
                        background-size: cover;
                        background-position: center;
                        height: 70vh;
                      "></div>
                            </li>
                            <li class="splide__slide">
                                <div
                                    class="rounded"
                                    style="
                        background-image: url(public/images/car4.jpg);
                        background-repeat: no-repeat;
                        background-size: cover;
                        background-position: center;
                        height: 70vh;
                      "></div>
                            </li>
                            <li class="splide__slide">
                                <div
                                    class="rounded"
                                    style="
                        background-image: url(public/images/car5.jpg);
                        background-repeat: no-repeat;
                        background-size: cover;
                        background-position: center;
                        height: 70vh;
                      "></div>
                            </li>
                        </ul>
                    </div>
                </section>
            </div>
        </div>
    </div>
</main>
<?php
$srcjs = "propos";
require_once 'layout/footer.php';
?>