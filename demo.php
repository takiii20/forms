<html>
	<head>
		<meta charset = "utf-8">
		<meta name="viewport" content="width = device-width, initial-scale=1">
		<title>Basic Forms</title>
	</head>
	<body>
		<form>
			<input 
				type = "text" 
				name="fullname"
				size="30"
				placeholder="Enter your name"
			/>
			<br /> <br />
			<textarea name="comment" cols="30" rows="10" placeholder="Enter your comments here..."></textarea>
			<br /> <br />
			<select name="sex">
				<option selected disabled>[Please Select Gender]</option>
				<option value="M">Male</option>
				<option value="F">Female</option>
			</select>
			
			</br></br>
			<p>Select your sex: </p>
				<input type="radio" id="male" name="sex" value="Male">
				<label for="male">Male</label><br/>
				<input type="radio" id="female" name="sex" value="Female">
				<label for="female">Female</label><br/>
			
			</br>
			
			<p>Select your marital status: </p>
			<p>
				<input type = "radio" name="attainment" value="S" /> Single
			</p>
			<p>
				<input type = "radio" name="attainment" value="MA" /> Married
			</p>
			<p>
				<input type = "radio" name="attainment" value="W" /> Widowed
			</p>
			<p>
				<input type = "radio" name="attainment" value="D" /> Divorced
			</p>
			
			<br/><br/>
			<p>Select your highest educational attainment: </p>
			<p>
				<input type = "radio" name="attainment" value="HG" /> High School graduate
			</p>
			<p>
				<input type = "radio" name="attainment" value="HL" /> High School level
			</p>
			<p>
				<input type = "radio" name="attainment" value="CL" /> College Level
			</p>
			<p>
				<input type = "radio" name="attainment" value="CG" /> College graduate
			</p>
			
			<br/><br/>
			<p>Select your favorite childhood anime heroes</p>
			<p>
				<input type="checkbox" name="anime[]" value="Naruto"/> Naruto 
			</p>
			<p>
				<input type="checkbox" name="anime[]" value="Goku"/> Goku
			</p>
			<p>
				<input type="checkbox" name="anime[]" value="Pikachu" /> Pikachu
			</p>
			<p>
				<input type="checkbox" name="anime[]" value="Eugene"/> Eugene
			</p>
			<p>
				<input type="checkbox" name="anime[]" value="Recca"/> Recca
			</p>
			
			<input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
			<label for="vehicle1"> I have a bike</label><br>
			<input type="checkbox" id="vehicle2" name="vehicle2" value="Car">
			<label for="vehicle2"> I have a car</label>
			
			<br><br>
			<button type = "submit" name="save" value="save">Save Record</button>
		</form>
	</body>
</html>