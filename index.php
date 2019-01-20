<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Handle Soap</title>
		<style>
			fieldset{
				width: 500px;
			}
			input{width:70px;}
		</style>
	</head>
	<body>

		<fieldset>
			<legend>SOAP form calculator exercise using WSDL</legend>
			<form action="calcSoapClient.php" method="post">

				<input type="text" name="num1" value="">

				<!-- Operation selector form-->
				<select name="op">
					<option value="sum">+</option>
					<option value="sub">-</option>
					<option value="mul">*</option>
					<option value="div">/</option>
				</select>

				<input type="text" name="num2" >
				
				<input type="submit"   value="result">
			</form>

			<br><br>

			<form action="calcSoapClient.php" method="post">

				<!-- Operation selector form-->
				<select name="op">
					<option value="sqrt">sqRoot</option>
					<option value="sin">sine</option>
					<option value="cos">cosine</option>
					<option value="tan">tangent</option>
				</select>

				<input type="text" name="num1" >
				<input type="submit"   value="result">
			</form>
		</fieldset>
	</body>
</html>