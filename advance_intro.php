<!doctype=html>
<html>
<head>
    <title></title>
	<link rel="stylesheet" type="text/css" href="survey_form.css">    
</head>
<body>

	<div id="form">
		<form action="somepage.php" method="post">
			Your Name:<input type="text" name="first_name"><br>
			Dojo Location:
			<select name="location">
				<OPTION value="Chicago">Chicago</OPTION>
				<OPTION value="Los Angeles">Los Angeles</OPTION>
				<OPTION value="Seattle">Seattle</OPTION>
				<OPTION value="Washington, D.C.">Washington, D.C.</OPTION>
			</select><br>
			Favorite Language:<input type="text" name="language"><br>
			Comments:<br><textarea rows="4" cols="50" name="comments"></textarea><br>
			<input type="submit">
		</form>
	</div>
	
</body>
</html>


