<?php
$title = "Details Chambre - kinz";
$src = "home";
$srcjs = "detail";
require_once 'layout/header.php';
require_once 'src/includes/database.php';
require_once 'src/includes/function.php';

$chambreId = $_GET["id"] ?? null;
$chambre = getChambreWithId($pdo, $chambreId);
$residences = searchParamsToGetResidences($pdo, $_GET);

?>
<main style="margin-top: 100px;">
    <div class="container">
        <div class="row">
            <div class="col-12" style="height: 60vh;">
                <div class="rounded position-relative" style="background-image: url(src/uploads/imgChambre/<?= $chambre["image"] ?>);background-size:cover;background-position:center;background-repeat:no-repeat;height:100%">
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-12 col-sm-6">
                <p class="p-2 fs-5 w-75 rounded bg-warning text-white"><?= $chambre["nom_chambre"] ?></p>
                <div class="d-flex flex-column gap-2">
                    <span class="fw-bold fs-5">Caracteristique : </span>
                    <div class="d-flex gap-3">
                        <?php if ($chambre["television"] == "oui"): ?>
                            <div class="d-flex flex-column fs-4 justify-content-center align-items-center bg-light rounded gap-3 p-3">
                                <i class="ri-tv-line"></i>
                                <span>Television</span>
                            </div>
                        <?php endif; ?>
                        <?php if ($chambre["comodite"] == "ventiller"): ?>
                            <div class="d-flex flex-column fs-4 justify-content-center align-items-center bg-light rounded gap-3 p-3">
                                <i class="ri-water-flash-line"></i>
                                <span>Ventilateur</span>
                            </div>
                        <?php else: ?>
                            <div class="d-flex flex-column fs-4 justify-content-center align-items-center bg-light rounded gap-3 p-3">
                                <i class=" ri-fridge-line"></i>
                                <span>Climatiser</span>
                            </div>
                        <?php endif; ?>
                    </div>
                    <div class="mt-4">
                        <button class="btn bg-primary text-white fs-5 w-100 d-flex gap-2 justify-content-center" data-bs-toggle="modal" data-bs-target="#staticBackdrop<?= $chambreId ?>">
                            <span>Reserver</span>
                            <i class="ri-calendar-schedule-line"></i>
                        </button>
                        <div class="modal fade" id="staticBackdrop<?= $chambreId ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel<?= $chambreId ?>" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <h4 class="text-center mb-4">Faire votre reservation</h4>
                                        <form action="src/views/users/reservation.php" method="post">
                                            <div class="form-group">
                                                <label for="debut">Date de debut</label>
                                                <input type="date" name="debut" class="form-control p-2 mt-2 shadow-sm">
                                            </div>
                                            <div class="form-group mt-4">
                                                <label for="debut">Date de fin</label>
                                                <input type="date" name="fin" class="form-control p-2 mt-2 shadow-sm">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6">
                <div>
                    <span class="fw-bold fs-5">Description : </span>
                    <p><?= $chambre["Description"] ?></p>
                </div>
                <div>
                    <span class="fw-bold fs-5">Prix: </span>
                    <span><?= $chambre["prix"] ?> FCFA</span>
                </div>
                <div>
                    <span class="fw-bold fs-5">Residence: </span>
                    <?php foreach ($residences as $residence): ?>
                        <?php if ($residence["ID_Residence"] == $chambre["ID_Residence"]): ?>
                            <span><?= $residence["nom"] ?></span>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</main>

<!-- Bootstrap JavaScript Libraries -->
<script
    src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
    crossorigin="anonymous"></script>

<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
    integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
    crossorigin="anonymous"></script>
</body>

</html>