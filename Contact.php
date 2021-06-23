<!DOCTYPE html>
<html>
	<head>
		<?php include 'Pages/header.php';?>
		<?php include 'Pages/top.php';?>

		<title>Contact | Effie K.</title>

		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

		<link rel="stylesheet" href="Pages/style.css">

		<link rel="icon" href="Images/effie-logo.png" type="image/gif" sizes="56x56">

		<style>


		</style>

		<script type="text/javascript">
		function validate() {
		x=document.myForm
		at=x.email.value.indexOf("@")
		code=x.code.value
		name=x.fname.value
		submitOK="True"
		if (at==-1) {
		alert("Ελέγξτε τη διεύθυνση email σας!")
		submitOK="False"
		}
		if (code<1 || code>10) {
		alert("The number is not acceptable. Please retry.")
		submitOK="False"
		}
		if (name.length>3) {
		alert("Θα πρέπει να περιέχει πάνω από 3 χαρακτήρες!")
		submitOK="False"
		}
		if (submitOK=="False") {
		return false
		}
		}
	</script>
	</head>

	<body>
		<div class="bread">
			<div class="inside_b">
				<h2>Επικοινωνήστε μαζί μου!</h2>
				<nav aria-label="breadcrumb">
				  <ol class="breadcrumb breadcrumps justify-content-center">
				    <li class="breadcrumb-item"><a href="index.php">Αρχική</a></li>
				    <li class="breadcrumb-item active" aria-current="page">Επικοινωνία</li>
				  </ol>
				</nav>
			</div>
		</div>

		<div class="card-deck">

		  <div class="card">
		    <img src="Pages/Images/telephone.png" class="card-img-top">
		    <div class="card-body">
		      <h5 class="card-title">Τηλέφωνο</h5>
		      <p class="card-text">6981 350074</p>
		    </div>
		    <a href="tel:+306981350074">
			    <div class="card-footer">
			      <small class="text-muted">Καλέστε μας</small>
			    </div>
			</a>
		  </div>

		  <div class="card">
		    <img src="Pages/Images/typewriter.png" class="card-img-top">
		    <div class="card-body">
		      <h5 class="card-title">Email</h5>
		      <p class="card-text">efi_kakouni@hotmail.com</p>
		    </div>
		    <a href="mailto:efi_kakouni@hotmail.com">
			    <div class="card-footer">
			      <small class="text-muted">Στείλτε Email </small>
			    </div>
			</a>
		  </div>

		  <div class="card">
		    <img src="Pages/Images/map.png" class="card-img-top">
		    <div class="card-body">
		      <h5 class="card-title">Διεύθυνση</h5>
		      <p class="card-text">Κριναγόρου 34, Αθήνα</p>
		    </div>
		    <a href="mailto:efi_kakouni@hotmail.com">
			    <div class="card-footer">
			      <small class="text-muted">Βρείτε μας στον Χάρτη</small>
			    </div>
			</a>
		  </div>
		</div>


		<div class="forms">
			<form name="myForm" action="submitpage.html" onsubmit="return validate()">
			  <div class="form-row">

			    <div class="col-6">
			      <input type="text" class="form" id="first_name" placeholder="Όνομα" name="name" size="20">
			    </div>

			    <div class="col-6">
			      <input class="form" type="text" id="last_name" placeholder="Επίθετο" name="name" size="20">
			    </div>

			    <div class="col-12">
			      <input type="email" class="form" name="email" placeholder="Email">
			    </div>

			    <div class="col-12">
			      <textarea name="message" class="textarea" rows="10" cols="30" placeholder="Μήνυμα"></textarea>
			    </div>

			    <div class="col-12 koympi">
					<button class="button" value="Submit">
					  Αποστολή
					  <div class="button__horizontal"></div>
					  <div class="button__vertical"></div>
					</button>
				</div>

			  </div>
			</form>
		</div>

		<footer> <?php include 'Pages/footer.php';?></footer>
	</body>

</html>