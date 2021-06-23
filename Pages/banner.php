<html>
 <head>
	<style>

		.text {
			text-align: center;
			font-size: 15px;
			margin: 10px 0;
			font-family: Evangelina;
		}
	</style>
	<script language="JavaScript">
		 msg = "Let's design your Personal Website";
		 msg += "";
		pos = 0;
		 function ScrollMessage() {
		 var newtext = msg.substring(pos, msg.length) + "… " + msg.substring(0,
		pos);
		 t1.firstChild.nodeValue = newtext;
		 pos++;
		 if (pos>msg.length) pos=0;
		 window.setTimeout("ScrollMessage()", 170);
		 }
	 </script>
</head>
<body onLoad="ScrollMessage();">
	<table class="text" width="100%" border="0" >
	<tr>
	<td id="t1" width="100%"> </td>
	</tr>
	</table>
 </body>
</html>