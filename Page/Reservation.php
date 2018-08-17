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
						<h2 class="text-center col-md-12">Trajet de {{trajet.Lieuxdepart}} à {{trajet.Lieuxarrive}}</h2>
						<form role="form">
							<div class="d-flex flex-row">
								<div class="form-group col-md-9 p-2" style="margin-left: 3em">
                                    <label for=""><kbd class="font-italic text-nowrap">Départ:</kbd>  {{trajet.Depart}} à  {{trajet.Heure_depart}}</label>
                                    <label for=""><kbd class="font-italic text-nowrap">Arrivée:</kbd>  {{trajet.Arrivee}} à {{trajet.Heure_arrive}}</label>
								</div>

								<div class="p-2">
									<h4 class="text-danger"><span class="label label-danger pull-right">Prix:</span> {{trajet.Prix}} €</h4>
								</div>

							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
	</div>
</body>

</html>