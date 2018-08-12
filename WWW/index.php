<!doctype html>
<html ng-app="MyApp">

<?php
	include 'ControllersPhp/sessions.php';
	include 'Page/Hearder.php';
?>
<head>
<script src="Controller.js"></script>
</head>

<body ng-init>
	<section id="loginform" class="outer-wrapper"  ng-controller="userCtrl">
		<div class="inner-wrapper" ng-init="RecupLieux()">
			<div class="container">
				<div class="row">
					<div class="col-sm-4 col-sm-offset-4">
						<h2 class="text-center">Mon voyage</h2>
						<form role="form">
							<div class="form-group">
								<label>De</label>
								<div class="form-group">
									<select class="custom-select"  require ng-model="Depart.type" ng-options="option.fAdresse for option in adresse" name="Depart">
										<option value="">-- Choisir une un départ --</option>
									</select>
								</div>
							</div>
							<div class="form-group">
								<label>A</label>
								<div class="form-group">
                <select class="custom-select"  require ng-model="Arrive.type" ng-options="option.fAdresse for option in adresse" name="Arrive">
										<option value="">-- Choisir une une Destination --</option>
									</select>
								</div>
							</div>
              <div class="form-group">
              <label >Le</label>
                <input type="text" class="form-control docs-date" name="Date" placeholder="Sélectionner une date" id="datepicker" ng-model="Datee">
              </div>

							<div class="form-group">
								<button type="submit" class="btn btn-success" ng-click="submit1()">Suivant</button>
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