<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<style>
    body{
    margin-top:20px;
    background:#f8f8f8
}
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 15% auto; /* 15% from the top and centered */
  padding: 20px;
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button */
.close {
  color: #aaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: black;
  text-decoration: none;
  cursor: pointer;
}
.btn {
    width:120px;
    padding:5px;
}
.profilep {
  width: 140px;
  height: 140px;
}
input[type=text], select, textarea{
  width: 100%;
  padding: 1px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  resize: vertical;
}
</style>
<div class="container" >
<div class="row flex-lg-nowrap">
  <div class="col-12 col-lg-auto mb-3" style="width: 200px;">
    <!--div class="card p-3">
      <div class="e-navlist e-navlist--active-bg">
        <ul class="nav">
          <li class="nav-item"><a class="nav-link px-2 active" href="./overview.html"><i class="fa fa-fw fa-bar-chart mr-1"></i><span>Overview</span></a></li>
          <li class="nav-item"><a class="nav-link px-2" href="./users.html"><i class="fa fa-fw fa-th mr-1"></i><span>CRUD</span></a></li>
          <li class="nav-item"><a class="nav-link px-2" href="./settings.html"><i class="fa fa-fw fa-cog mr-1"></i><span>Settings</span></a></li>
        </ul>
      </div>
    </div-->
  </div>

  <div class="col">
    <div class="row">
      <div class="col mb-3">
        <div class="card">
          <div class="card-body">
            <div class="e-profile">
              <div class="row">
                <div class="col-12 col-sm-auto mb-3">
                  <div class="mx-auto" style="width: 140px;">
                    <div class="d-flex justify-content-center align-items-center rounded" style="height: 140px; background-color: rgb(233, 236, 239);">
                    <!--a href="{{ $c->photo}}"-->
                    <img src="/upload/profile/{{ $c->photo}}" class="profilep" alt="">
                    
                  </a>
                      <!--span style="color: rgb(166, 168, 170); font: bold 8pt Arial;">140x140</span-->
                    </div>
                  </div>
                </div>
                <div class="col d-flex flex-column flex-sm-row justify-content-between mb-3">
                  <div class="text-center text-sm-left mb-2 mb-sm-0">
                    <h4 class="pt-sm-2 pb-1 mb-0 text-nowrap">{{ $c->FirstName}}{{' '}}{{ $c->LastName}}</h4>
                    <p class="mb-0">{{ $c->StudentID}}</p>
                    <p class="mb-0">{{ $c->YearOfStudy}}</p>
                    <!--div class="text-muted"><small>Last seen 2 hours ago</small></div-->
                    <!--div class="mt-2">
                      
                    </div-->
                  </div>

                  <div class="btn-toolbar">
                  <div class="text-center text-sm-right">
                  </div>
                  
        
          
            <div class="px-xl-3" >
               <div>
            <button id="myBtn"type="button" class="btn btn-primary">Edit Profile</button>
            </div>
              <button class="btn btn-block btn-warning" style="height:40px;" >
                <!--i class="fa fa-sign-out"></i-->
                <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Logout') }}
                            </x-dropdown-link>
                        </form>
                
              </button>
              
            </div>
            
          </div>
          
        </div>
        
          
           
        
      
                  
                
              </div>
              <ul class="nav nav-tabs" >
                <li class="nav-item"><a href="" class="active nav-link">Profile</a></li>
              </ul>
              <div class="tab-content pt-3" >
                <div class="tab-pane active">
                  <form class="form" novalidate="" >
                    <div class="row">
                      <div class="col">
                      <div class="col-xs-12 col-sm-8" >
                    
                    <p><strong>Gender: </strong> {{ $c->Gender}} </p>
                    <p><strong>StudentId: </strong> {{ $c->StudentID}} </p>
                    <p><strong>DOB: </strong> {{ $c->DateOfBirth}} </p>
                    <p><strong>Email: </strong> {{ $c->EmailID}} </p>
                    <!--p><strong>Home Address: </strong> {{ $c->HomeAddress}} </p>
                    <p><strong>Contact No: </strong> {{ $c->ContactNumber}} </p-->
                    <p><strong>LinkedIn: </strong> <a href="{{ $c->LinkedIn}} "> {{ $c->LinkedIn}}</a> </p>
                    <p><strong>Study Programme: </strong> {{ $c->StudyProgramme}} </p>
                    <p><strong>Subject Offered: </strong> {{ $c->SubjectsOffered}} </p>
                   
                </div>   
                      </div>
                    </div>
                    <!--div class="row">
                      <div class="col-12 col-sm-6 mb-3">
                        <div class="mb-2"><b>Change Password</b></div>
                        <div class="row">
                          <div class="col">
                            <div class="form-group">
                              <label>Current Password</label>
                              <input class="form-control" type="password" placeholder="••••••">
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col">
                            <div class="form-group">
                              <label>New Password</label>
                              <input class="form-control" type="password" placeholder="••••••">
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col">
                            <div class="form-group">
                              <label>Confirm <span class="d-none d-xl-inline">Password</span></label>
                              <input class="form-control" type="password" placeholder="••••••"></div>
                          </div>
                        </div>
                      </div>
                      <div class="col-12 col-sm-5 offset-sm-1 mb-3">
                        <div class="mb-2"><b>Keeping in Touch</b></div>
                        <div class="row">
                          <div class="col">
                            <label>Email Notifications</label>
                            <div class="custom-controls-stacked px-2">
                              <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="notifications-blog" checked="">
                                <label class="custom-control-label" for="notifications-blog">Blog posts</label>
                              </div>
                              <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="notifications-news" checked="">
                                <label class="custom-control-label" for="notifications-news">Newsletter</label>
                              </div>
                              <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="notifications-offers" checked="">
                                <label class="custom-control-label" for="notifications-offers">Personal Offers</label>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div-->
                    <!--div class="row">
                      <div class="col d-flex justify-content-end">
                        <button class="btn btn-primary" type="submit">Save Changes</button>
                      </div>
                    </div-->
                  </form>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      
    </div>

  </div>
</div>
</div>
<div id="myModal" class="modal" >

  <!-- Modal content -->
  <div class="modal-content" style="width:75%">
    <span class="close">&times;</span>
    <form method="POST" action="/updatestudent" enctype="multipart/form-data">
        @csrf
        <!--button class="btn btn-primary" type="button">
                        <i class="fa fa-fw fa-camera"></i>
                        <span>Change Photo</span>
                      </button><br><br-->
        <div title="firstname">First Name</div><input class="form-control" type="text" name="fname" placeholder="First Name" required="required" value="{{ $c->FirstName}}"><br>
        <input type="hidden" name="email" value="{{ $c->EmailID}}" >
        <div title="lastname">Last Name</div><input class="form-control" type="text" name="lname" placeholder="Last Name" required="required" value="{{ $c->LastName}}"><br>
        <div title="select">Level</div><div>
                    
                    <select class="form-control" class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"  name="level" :value="{{ $c->YearOfStudy}}" required autofocus>
                        <option value="{{ $c->YearOfStudy}}">{{ $c->YearOfStudy}}</option>
                        <option value="Level-1G">Level-1G</option>
                        <option value="Level-1G">Level-1S</option>
                        <option value="Level-2G">Level-2G</option>
                        <option value="Level-2S">Level-2S</option>
                        <option value="Level-3G">Level-3G</option>
                        <option value="Level-3M">Level-3M</option>
                        <option value="Level-3S">Level-3S</option>
                        <option value="Level-4M">Level-4M</option>
                        <option value="Level-4S">Level-4S</option>
                        <option value="Level-4X">Level-4X</option>
                    </select>
                    
                </div><br>
        <div title="upload an image">Profile Picture</div><input class="form-control" type="file" name="photo" placeholder="add photo" required="required"> <br>
        <div title="20XX/CSC/XXX,20XX/SP/XXX">Student Id</div><input class="form-control" type="text" name="si" placeholder="Student ID" required="required" value="{{ $c->StudentID}}"><br>
        <div title="Male/Female/Other">Gender</div><div>
                    
                    <select class="form-control" class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"  name="g" value="{{ $c->Gender}}"  required autofocus>
                        <option value="{{ $c->Gender}}">{{ $c->Gender}}</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        <option value="Other">Other</option>
                        
                    </select>
                    
                </div><br>
        <div title="select">Date of Birth</div><input class="form-control" type="date" name="dob" placeholder="DOB" required="required" value="{{ $c->DateOfBirth}}"><br>
        <div title="enter your home address">Home Address</div><input class="form-control" type="text" name="ha" placeholder="Home Address" required="required" value="{{ $c->HomeAddress}}"><br>
        <div title="07XXXXXXXX">Contact No</div><input class="form-control" type="text" name="cn" placeholder="Contact Number" required="required" value="{{ $c->ContactNumber}}"><br>
        <div title="https://www.linkedin.com/in/username/">LinkedIn Id</div><input class="form-control" type="text" name="li" placeholder="LinkedIn" required="required" value="{{ $c->LinkedIn}}"><br>
        <div title="select">Study Programme</div><div>
                    
                    <select class="form-control" class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"  name="sp" value="{{ $c->StudyProgramme}}"  required autofocus>
                        <option value="{{ $c->StudyProgramme}}">{{ $c->StudyProgramme}}</option>
                        <option value="Computer Science">Computer Science</option>
                        <option value="Physical Science">Physical Science</option>
                        
                        
                    </select>
                    
                </div> <br>
        <div title="select">Subjects Offered</div><div>
                    
                    <select class="form-control" class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"  name="so" value="{{ $c->SubjectsOffered}}"  required autofocus>
                        <option value="{{ $c->SubjectsOffered}}">{{ $c->SubjectsOffered}}</option>
                        <option value="Direct Computer Science"> Direct Computer Science</option>
                        <option value="PMM, AMM, CSC">PMM,AMM,CSC</option>
                        <option value="PMM, STA, CSC">PMM,STA,CSC</option>
                        <option value="AMM,STA,CSC">AMM,STA,CSC</option>
                        <option value="AMM,PHY,CSC">AMM,PHY,CSC</option>
                        <option value="PMM,PHY,CSC">PMM,PHY,CSC</option>
                        
                        
                    </select>
                    
                </div> <br>
        <div title="old password">Old Password</div><input class="form-control" type="password" name="pwrd" placeholder="Old Password" required="required" ><br>
        <div title="new password or confirm the old password">New Password</div><input class="form-control" type="password" name="nwpswrd" placeholder="New Password" required="required"><br>
        <input class="btn btn-primary" type="submit" value="submit">
        
    </form>
  </div>

</div>
<script>
    var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on the button, open the modal
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}

</script>