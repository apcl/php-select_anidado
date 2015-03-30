<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
	<script type="text/javascript" charset="utf-8">
	  $(document).ready(function() {
	  // Parametros para el combo
	   $("#region").change(function () {
	      $("#region option:selected").each(function () {
	        elegido=$(this).val();
	        $.post("PHP/provincia.php", { elegido: elegido }, function(data){
	        $("#provincia").html(data);
	      });
	     });
	   });
	});
</script>
<script type="text/javascript" charset="utf-8">
	  $(document).ready(function() {
	  // Parametros para el combo
	   $("#provincia").change(function () {
	      $("#provincia option:selected").each(function () {
	        elegido=$(this).val();
	        $.post("PHP/comuna.php", { elegido: elegido }, function(data){
	        $("#comuna").html(data);
	      });
	     });
	   });
	});
</script>
</head>
<body>
	<label>Regi&oacute;n :</label>
	<select name="region" id="region" required>
		<option value="1000">Seleccione...</option>
		<?php 
			require ("Query.php");
			$mostrarR = new Query;
			$rowR = $mostrarR->regiones();
			for ($i=0; $i < max( array_map( 'count', $rowR)); $i++) {
				echo "<option value='".$rowR[0][$i]."'>".$rowR[1][$i]."</option>";
			}			
		 ?>
	</select>
	<br>
	<label>Provincia :</label>
	<select name="provincia" id="provincia" required></select>
	<br>
	<label>Comuna :</label>
	<select name="comuna" id="comuna" required></select>
</body>
</html>