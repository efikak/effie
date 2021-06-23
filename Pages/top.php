<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<style>
			@font-face {
				font-family: Arrow;
				src: url(arrows.otf);
				}
				
			body {
				font-family:Arrow;
				font-size: 20px;
			}

			#myBtn {
				display: none;
				position: fixed;
				bottom: 20px;
				right: 30px;
				z-index: 99;
				font-size: 80px;
				border: none;
				outline: none;
				color: black;
				cursor: pointer;
				padding: 15px;
				font-family:Arrow ! important;
				background-color: rgba(255, 255, 255, 0);
			}

			#myBtn:hover {
				color: #cf2c59;
				transition: 1s;
			}
		</style>
	</head>
	<body>

		<button onclick="topFunction()" id="myBtn" title="Go to top" alt="back to top">m</button>

		<script>

			var mybutton = document.getElementById("myBtn");

			window.onscroll = function() {scrollFunction()};

			function scrollFunction() {
				if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
					mybutton.style.display = "block";}
				else {
					mybutton.style.display = "none";}
			}

			function topFunction() {
				document.body.scrollTop = 0;
				document.documentElement.scrollTop = 0;}
		</script>

<html>