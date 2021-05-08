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

.tooltip span {
    display:none;
}
.tooltip:hover span {
    display:block;
    position:fixed;
    overflow:hidden;
}
</style>
<div class="container">
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
                    <!--a href=""-->
                    <img src="/upload/profile/{{ $c->Photo}}" class="profilep" alt="">
                    
                  </a>
                      <!--span style="color: rgb(166, 168, 170); font: bold 8pt Arial;">140x140</span-->
                    </div>
                  </div>
                </div>
                <div class="col d-flex flex-column flex-sm-row justify-content-between mb-3">
                  <div class="text-center text-sm-left mb-2 mb-sm-0">
                    <h4 class="pt-sm-2 pb-1 mb-0 text-nowrap">{{ $c->NameWithInitials}}</h4>
                    <p class="mb-0">{{ $c->CompanyPersonalEmailID}}</p>
                    <!--div class="text-muted"><small>Last seen 2 hours ago</small></div-->
                    <!--div class="mt-2">
                      <--button class="btn btn-primary" type="button">
                        <i class="fa fa-fw fa-camera"></i>
                        <span>Change Photo</span>
                      </button-->
                    </div-->
                  </div>

                  <div class="btn-toolbar">
                  <div class="text-center text-sm-right">
                  </div>
                  
        
          
            <div class="px-xl-3">
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
              <ul class="nav nav-tabs">
                <li class="nav-item"><a href="" class="active nav-link">Profile</a></li>
              </ul>
              <div class="tab-content pt-3">
                <div class="tab-pane active">
                  <form class="form" novalidate="">
                    <div class="row">
                      <div class="col">
                      <div class="col-xs-12 col-sm-8">
                    
                      <p><strong>CompanyName: </strong> {{ $c->CompanyName}} </p>
                    <p><strong>Company Personal Email: </strong> {{ $c->CompanyPersonalEmailID}} </p>
                    <p><strong>Designation: </strong> {{ $c->Designation}}</ </p>
                    <p><strong>LinkedIn: </strong><a href="{{ $c->LinkedIn}} "> {{ $c->LinkedIn}}</a> </p>
                    <p><strong>Fields Of Interests: </strong> {{ $c->FieldOfInterests}} </p>
                    <p><strong>ContactNumber: </strong> {{ $c->ContactNumber}} </p>
                    
                      
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
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    <form method="POST" action="/updateindustrialist" enctype="multipart/form-data">
        @csrf
        <div title="Initials.Name">Name with initials</div><input class="form-control" type="text" name="namewi" placeholder="Name with initials" required="required" value="{{ $c->NameWithInitials}}"><br>
        <input type="hidden" name="email" value="{{ $c->CompanyPersonalEmailID}}" >
        <div title="upload an image">Profile Picture</div><input class="form-control" type="file" name="photo" placeholder="add photo" required="required"><br>
        <div title="Companyname(pvt)ltd">Company Name</div><input class="form-control" type="text" name="comn" placeholder="Company Name" required="required" value="{{ $c->CompanyName}}"><br>
        <div title="your position">Designation</div><input class="form-control" type="text" name="designation" placeholder="Designation" required="required" value="{{ $c->Designation}}"><br>
        <div title="https://www.linkedin.com/in/username/">LinkedIn Id</div><input class="form-control" type="text" name="linkedin" placeholder="LinkedIn" required="required" value="{{ $c->LinkedIn}}"><br>
        <div title="">Fields of Interests</div><div>
                    
                    <select class="form-control" class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"  name="foi" value="{{ $c->FieldOfInterests}}"  required autofocus>
                        <option value="{{ $c->FieldOfInterests}}">{{ $c->FieldOfInterests}}</option>
                        <option value="Advanced database design and systems">Advanced database design and systems</option>
                        <option value="Bioinformatics Computing">Bioinformatics Computing</option>
                        <option value="Compiler design">Compiler design</option>
                        <option value="Computer Networks and Internet Computing">Computer Networks and Internet Computing</option>
                        <option value="Cryptography and Data Security">Cryptography and Data Security</option>
                        <option value="Data communication and computer networks">Data communication and computer networks</option>
                        <option value="Data Structures and Algorithms">Data Structures and Algorithms</option>
                        <option value="Digital Image Processing">Digital Image Processing</option>
                        <option value="E-technologies">E-technologies</option>
                        <option value="Foundations of Computer Science">Foundations of Computer Science</option>
                        <option value="Graphics and Visual Computing">Graphics and Visual Computing</option>
                        <option value="Multimedia Technologies">Multimedia Technologies</option>
                        <option value="Numerical Computing">Numerical Computing</option>
                        <option value="Numerical Linear algebra and solutions of differential equations">Numerical Linear algebra and solutions of differential equations</option>
                        <option value="Object Oriented Programming">Object Oriented Programming</option>
                        <option value="Parallel computing">Parallel computing</option>
                        <option value="Principles of computer Architecture">Principles of computer Architecture</option>
                        <option value="Programming in Logic">Programming in Logic</option>
                        <option value="System design, analysis and project management">System design, analysis and project management</option>
                        <option value="Computer Systems">Computer Systems</option>
                        <option value="Human Computer Interaction">Human Computer Interaction</option>
                        <option value="Design of Algorithms">Design of Algorithms</option>
                        <option value="Organisational Behaviour">Organisational Behaviour</option>
                        <option value="Computer Architecture">Computer Architecture</option>
                        <option value="Programming Languages">Programming Languages</option>
                        <option value="Web Technologies">Web Technologies</option>
                        <option value="Emerging Trends">Emerging Trends</option>
                        <option value="High Performance Computing">High Performance Computing</option>
                        <option value="Image Processing and Computer Vision">Image Processing and Computer Vision</option>
                        <option value="Machine Learning">Machine Learning</option>
                        <option value="Systems and Network Administration">Systems and Network Administration</option>
                        
                        
                    </select>
                    
                </div><br>
        <div title="07XXXXXXXX">Contact No.</div><input class="form-control" type="text" name="cn" placeholder="Contact Number" required="required" value="{{ $c->ContactNumber}}"><br>
        <div title="old password">Old Password</div><input class="form-control" type="password" name="pwrd" placeholder="Old Password" required="required" ><br>
        <div title="new password or confirm the old password">New Password</div><input class="form-control" type="password" name="nwpswrd" placeholder="New Password" required="required"><br>
        <input class="btn btn-primary" type="submit" value="submit">
        
    </form>
  </div>

</div>
<script>
  var tooltipSpan = document.getElementById('tooltip-span');

window.onmousemove = function (e) {
    var x = e.clientX,
        y = e.clientY;
    tooltipSpan.style.top = (y + 20) + 'px';
    tooltipSpan.style.left = (x + 20) + 'px';
};
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