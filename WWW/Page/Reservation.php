<?php
	include '../ControllersPhp/sessions.php';
	include '../Page/Hearder.php';
?>
<!doctype html>
<html ng-app="MyApp">
<head>
</head>
<script src="../Controller.js"></script>
<body>
	<section id="loginform" class="outer-wrapper"  ng-controller="userCtrl">
		<div class="inner-wrapper" ng-init="RecupTrajet()">
			<div class="container">
				<div class="row">
					<div class="col-md-4  text-center" ng-repeat=" trajet in Trajets">
					<div class="border border-success rounded" style = "margin-top:15px;">
						<h2 class="text-center col-md-12">Trajet de {{trajet.Lieuxdepart}} à {{trajet.Lieuxarrive}}</h2>
						<form role="form">
							<div class="d-flex flex-row">
								<div class="form-group col-md-9 p-2 " style="margin-left: 3em">
                                    <label for=""><kbd class="font-italic text-nowrap">Départ:</kbd>  {{trajet.Depart}} à  {{trajet.Heure_depart}}</label>
                                    <label for=""><kbd class="font-italic text-nowrap">Arrivée:</kbd>  {{trajet.Arrivee}} à {{trajet.Heure_arrive}}</label>
									<div class="p-2">
										<h4 class="text-danger"><span class="label label-danger pull-right">Prix:</span> {{trajet.Prix}} €</h4>
									</div>
									<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalContactForm"> Réserver</button>
								</div>
							</div>
						</form>
					</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Modal -->
<div class="modal fade" id="modalContactForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header text-center">
                <h4 class="modal-title w-100 font-weight-bold">Réservation</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body mx-3">
                <div class="md-form mb-5">
                    <i class="fa fa-user prefix grey-text"></i>
                    <input type="text" id="form34" class="form-control validate">
                    <label data-error="wrong" data-success="right" for="form34">Votre Nom</label>
                </div>

                <div class="md-form mb-5">
                    <i class="fa fa-envelope prefix grey-text"></i>
                    <input type="email" id="form29" class="form-control validate">
                    <label data-error="wrong" data-success="right" for="form29">Votre Email</label>
                </div>

                <div class="md-form">
                    <i class="fa fa-pencil prefix grey-text"></i>
                    <textarea type="text" id="form8" class="md-textarea form-control" rows="4"></textarea>
                    <label data-error="wrong" data-success="right" for="form8">Your message</label>
                </div>

            </div>
            <div class="modal-footer d-flex justify-content-center">
                <button class="btn btn-unique">Réserver <i class="fa fa-paper-plane-o ml-1"></i></button>
            </div>
        </div>
    </div>
</div>
</body>


</html>