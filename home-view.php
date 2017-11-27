<!-- ------------------------------------------------ -->
<!-- This is the main template for the Home Page View -->
<!-- ------------------------------------------------ -->
<!DOCTYPE html>
<html>

	<!-- inject head-utils -->
	<?php require_once ("head-utils.php");?>

	<body class="sfooter">
		<div class="sfooter-content">

			<!-- inject navbar -->
			<?php require_once("navbar.php"); ?>

			<!-- begin Home Page layout -->
			<main class="my-5">
				<div class="container-fluid">

					<!-- Page Title -->
					<div class="row mb-3">
						<div class="col">
							<h1>Page Title</h1>
							<hr>
						</div>
					</div>

					<div class="row">
						<div class="col-md-6 col-lg-3">

							<!-- inject admin panel -->
							<?php require_once ("admin-panel.php");?>

						</div>
						<div class="col-md-6 col-lg-9">

							<!-- inject content panel -->
							<?php require_once ("content-panel.php");?>

						</div>
					</div>
				</div>
			</main>

		</div>

		<!-- inject footer -->
		<?php require_once ("footer.php");?>

		<!-- inject modal window -->
		<?php require_once ("sign-up-modal.php");?>
	</body>
</html>