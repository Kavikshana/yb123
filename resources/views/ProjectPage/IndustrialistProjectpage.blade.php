
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

<!--link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"-->

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

.bg-secondary{}


.btn {
    width:120px;
    padding:5px;
}
</style> 






<body> 
    <h2
    class="p-3 mb-2 bg-dark text-white" style="text-align: center;">Project Details For lecturers</h2> 
    <form
    class="p-3 mb-2 bg-secondary text-white"
    name="ProjectForm" method="post" action="/stor">
         @csrf
        
		 <p> 
            Destination<br>
			<select type="text" value="" name="Destination"> 
				<option>Lecturer</option> 
				<option>Student</option> 
				<option>Industrialist</option> 
                
				</select>
        </p> 
		<br />
        <p>NameWithInitials :<br> <input type="text"
                        size="45" name="NameWithInitials" />
                    </p> 


                   
        <br /> 
        
        
		<p>Title of the project :<br> <input type="text"
                        size="65" name="Titleoftheproject" />
                    </p> 


                   
		<br /> 
		
        <p> 
            Technologies<br>
			<select type="text" value="" name="Technologies">  
                <option>Advanced database design and systems</option>
                <option>Bioinformatics Computing</option>
                <option>Compiler design</option>
                <option>Computer Networks and Internet Computing</option>
                <option>Cryptography and Data Security</option>
                <option>Data communication and computer networks</option>
                <option>Data Structures and Algorithms</option>
                <option>Digital Image Processing)</option>
                <option>E-technologies</option>
                <option>Foundations of Computer Science</option>
                <option>Graphics and Visual Computing</option>
                <option>Multimedia Technologies</option>
                <option>Numerical Computing</option>
                <option>Numerical Linear algebra and solutions of differential equations</option>
                <option>Object Oriented Programming</option>
                <option>Parallel computing</option>
                <option>Principles of computer Architecture</option>
                <option>Programming in Logic</option>
                <option>System design, analysis and project management</option> 
                <option>Computer Systems</option>
                <option>Human Computer Interaction</option>
                <option>Design of Algorithms</option>
                <option>Organisational Behaviour</option>
                <option>Computer Architecture</option>
                <option>Programming Languages</option>
                <option>Web Technologies</option>
                <option>Emerging Trends</option>
                <option>High Performance Computing</option>
                <option>Image Processing and Computer Vision</option>
                <option>Data Mining and Machine Learning</option>
                <option>Systems and Network Administration</option>
                <option>Artificial Intelligence</option>
				
            </select>
        </p> 
		<br />
        
       
       
       
		
		
       
        
            <input class="btn btn-info" type="Submit"
				value="Submit" name="Submit" /> 
			<input class="btn btn-warning" type="Submit"
				value="Cancel" name="Cancel" /> 
        </p> 
        
        
    </form> 
    
    
</body> 


<script> 
	function GEEKFORGEEKS() { 
        var LecturerID = document.forms["ProjectForm"]["LecturerID"];
        var ProjectID = document.forms["ProjectForm"]["ProjectID"];
		var Titleoftheproject = document.forms["ProjectForm"]["Titleoftheproject"]; 
		var Description = document.forms["ProjectForm"]["Description"]; 
        var Technologies = document.forms["ProjectForm"]["Technologies"]; 
		var ProjectType = document.forms["ProjectForm"]["ProjectType"]; 
        //var ProjectStatus = document.forms["ProjectForm"]["ProjectStatus"];
		 
        if (name.value == "") { 
			window.alert("Please enter LecturerID."); 
			name.focus(); 
			return false; 
		} 

        if (name.value == "") { 
			window.alert("Please enter ProjectID."); 
			name.focus(); 
			return false; 
		} 

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

        if (password.value == "") { 
			window.alert("Please select Technologies."); 
			password.focus(); 
			return false; 
		} 

		
		if (password.value == "") { 
			window.alert( 
			"Please select Project Type."); 
			email.focus(); 
			return false; 
		} 

		 
		/**if (email.value == "") { 
			window.alert( 
			"Please select Project Status."); 
			email.focus(); 
			return false; 
		} 
		*/


		

		return true; 
	} 
</script> 

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>