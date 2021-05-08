<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

<style> 
div { 
	box-sizing: border-box; 
	width: 100%; 
	border: 100px solid black; 
	float: left; 
	align-content: center; 
	align-items: center; 
} 

form { 
	margin: 0 auto; 
	width: 800px; 
}

.div1 {
  width: 300px;
  height: 100px;
  border: 1px solid black;
}

</style> 



<script> 
	function GEEKFORGEEKS() { 
		var Titleoftheproject = document.forms["ProjectForm"]["Titleoftheproject"]; 
		var Description = document.forms["ProjectForm"]["Description"]; 
		var ProjectType = document.forms["ProjectForm"]["ProjectType"]; 
		var SelectedSubjectsandTopic = document.forms["ProjectForm"]["SelectedSubjectsandTopic"]; 
		var Technologies = document.forms["ProjectForm"]["Technologies"]; 
		var SelectedTechnologies = document.forms["ProjectForm"]["SelectedTechnologies"]; 

		if (name.value == "") { 
			window.alert("Please enter Title of the project."); 
			name.focus(); 
			return false; 
		} 

		if (address.value == "") { 
			window.alert("Please enter Description."); 
			address.focus(); 
			return false; 
		} 

		if (email.value == "") { 
			window.alert( 
			"Please select Project Type."); 
			email.focus(); 
			return false; 
		} 

		if (phone.value == "") { 
			window.alert( 
			"Please select Selected Subjects and Topic."); 
			phone.focus(); 
			return false; 
		} 

		if (password.value == "") { 
			window.alert("Please select Technologies."); 
			password.focus(); 
			return false; 
		} 

		if (what.selectedIndex < 1) { 
			alert("Please select Selected Technologies."); 
			what.focus(); 
			return false; 
		} 

		return true; 
	} 
</script> 








<body> 
	<h1 style="text-align: center;">Project Details For Students</h1> 
	<form name="ProjectForm" action="/submit.php"
		onsubmit="return GEEKFORGEEKS()" method="post"> 
		<p>Title of the project :<br> <input type="text"
                        size="65" name="Titleoftheproject" />
                    </p> 
		<br /> 
		<p>Description :<br> <input type="text"
						class="div1" name="Description" /></p> 
        <br /> 
        <p> 
			Project Type <br>
			<select type="text" value="" name="ProjectType"> 
				<option>Project for first year</option> 
				<option>Project for second year</option> 
				<option>Project for third year</option> 
				<option>Project for fourth year</option> 
				
			</select> 
        </p> 
        <br />
		<p> 
            Selected Subjects and Topic<br>
			<select type="text" value="" name="SelectedSubjectsandTopic"> 
				<option>computer science</option> 
				<option>                  </option> 
				<option>                    </option> 
				<option>                    </option> 
				
            </select>
        </p> 
		<br /> 
		<p> 
            Technologies<br>
			<select type="text" value="" name="Technologies"> 
				<option>Arduino</option> 
				<option>c#</option> 
				<option>c</option> 
                <option>c++</option> 
                <option>cakePHp</option>
                <option>CSS</option>
                <option>core Java</option>
                <option>ASP NET MVC</option>
                <option>ASP NET</option>
                <option>drupal</option>
                <option>AJAX</option>
                <option>Android</option>
                <option>Apache</option>
				
				
            </select>
        </p> 
		<br />

		<p> 
			Selected Technologies<br> 
			<select type="text" value="" name="SelectedTechnologies"> 
				<option> ASP NET MVC</option> 
				<option></option> 
				<option></option> 
				<option></option> 
				<option></option> 
			</select> 
		</p> 
		<br /> 
		<br />
			<input type="Submit"
				value="Submit" name="Submit" /> 
			<input type="Cancel"
				value="Cancel" name="Cancel" /> 
		</p> 
	</form> 
</body>