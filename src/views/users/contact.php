<?php
$title = "Contact - kinz";
$src = "contact";
require_once 'layout/header.php';
?>
<main style="margin-top: 140px;">
    <div class="container" style="margin-top: 80px">
        <div class="row mt-5">
            <div class="col-6 d-none d-sm-block col-sm-6">
                <img src="public/images/contact.png" class="img-fluid" alt="" />
            </div>
            <div class="col-12 col-sm-6">
                <div class="d-flex flex-column gap-3">
                    <div class="line"></div>
                    <h4 class="">Nous contactez</h4>
                </div>
                <form action="#" class="d-flex justify-content-center mt-4">
                    <div class="col-12">
                        <div class="row">
                            <div class="col-12 col-sm-6">
                                <label for="nom" class="form-label">Nom </label>
                                <input type="text" class="form-control shadow-sm p-3" />
                            </div>
                            <div class="col-12 col-sm-6">
                                <label for="Prenom" class="form-label">Prenom </label>
                                <input type="text" class="form-control shadow-sm p-3" />
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-12 col-sm-6">
                                <label for="Email" class="form-label">Email </label>
                                <input type="email" class="form-control shadow-sm p-3" />
                            </div>
                            <div class="col-12 col-sm-6">
                                <label for="numero" class="form-label">Numéro </label>
                                <input type="number" class="form-control shadow-sm p-3" />
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-12">
                                <label for="Email" class="form-label">Message </label>
                                <textarea
                                    name=""
                                    class="w-100 form-control shadow-sm"
                                    rows="6"></textarea>
                            </div>
                        </div>
                        <div class="mt-3 d-flex justify-content-center w-100">
                            <button
                                class="btn btn-warning w-100 text-white">
                                Envoyer
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="container-fluid" style="margin-top: 115px">
        <div class="row">
            <div class="col-12">
                <div class="d-flex flex-column align-items-center justify-content-center py-5">
                    <div class="line"></div>
                    <h2 class="mt-4 w-50 text-center">Accedez a notre localisation</h2>
                </div>
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3858.808117628391!2d-17.455300926155708!3d14.72343787405996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xec173c21564c333%3A0x504d9e7bb5384f5a!2sEcole%20221!5e0!3m2!1sfr!2ssn!4v1718996854265!5m2!1sfr!2ssn"
                    width="100%"
                    height="450"
                    style="border: 0"
                    allowfullscreen=""
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
</main>
<?php
require_once 'layout/footer.php';
?>