<!DOCTYPE html>
<html>
<head>
	<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/custom.css">

	<title>Edit Profile</title>
</head>
<body>
	<div class="container-fluid">
		<div class="container bg-light"> <!-- Use 'required' in the input class to indicate a required field or tab-->
        

			<div class="row">
				<div class = "col-md-2 bg-light">
		            <img src="images/logo.png" class = "img-fluid rounded mx-auto d-block">
		          </div>

		          <div class = "col-md-10 bg-light set TRO">
		            <!-- Class 'set'-->
		            <hr class="my-1">
		            <hr class="my-1">
		            <nav class="navbar navbar-expand-lg navbar-light">
		              <a class="navbar-brand" href="#">Red Scouts</a>
		              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
		                <span class="navbar-toggler-icon"></span>
		              </button>
		              <div class="collapse navbar-collapse" id="navbarNavDropdown">
		                <ul class="navbar-nav mr-auto">
		                  <li class="nav-item active">
		                    <a class="nav-link" href="home.html">Home <span class="sr-only">(current)</span></a>
		                  </li>
		                  <li class="nav-item">
		                    <a class="nav-link" href="profile.html">Profile</a>
		                  </li>
		                  <li class="nav-item">
		                    <a class="nav-link" href="connect.html">Connect</a>
		                  </li>
		                  <li class="nav-item">
		                    <a class="nav-link" href="#">Chat</a>
		                  </li>
		                </ul>

		                
		                <form class="form-inline my-2 my-lg-0">
		                	<a class="btn btn-outline-success my-2 my-sm-0" href="index.html" role="submit">Log Out</a>
		                </form>
		                

		              </div>
		            </nav>
		            <hr class="my-1">
		            <hr class="my-1">
		          </div>
			</div>


        <div class="row">
          <div class="col-md-1"></div>
          <div class="col-md-10">
            
            <form action="" method="">
              
                <div class="form-row form1">

                  <div class="col-md-4 mb-3 form2">
                    <label for="validationCustom01">First name</label>
                    <input type="text" class="form-control" id="validationCustom01" placeholder="Change First Name" required>
                  </div>

                  <div class="col-md-4 mb-3 form2">
                    <label for="validationCustom02">Last name</label>
                    <input type="text" class="form-control" id="validationCustom02" placeholder="Change Last Name" required>
                  </div>

                  <div class="col-md-4 mb-3 form2">
                    <label for="validationCustomUsername">Username</label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroupPrepend">@</span>
                      </div>
                      <input type="text" class="form-control" id="validationCustomUsername" placeholder="Change Username" aria-describedby="inputGroupPrepend" required>
                      <div class="invalid-feedback">
                        Please choose a username.
                      </div>
                    </div>
                  </div>

                </div>

              <div class="form-group row form2">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                  <input type="email" class="form-control" id="inputEmail3" placeholder="Change Email" required>
                </div>
              </div>

              <div class="form-group row form2">
                <label for="inputPassword5" class="col-md-2">Password</label>
                <div class="col-md-10">
                  <input type="password" id="inputPassword5" class="form-control" aria-describedby="passwordHelpBlock" placeholder="Change Password" required>
                </div>
              </div>
              
              <div class="form-group form2">
                <label for="inputAddress">Address</label>
                <input type="text" class="form-control" id="inputAddress" placeholder="Change Address" required>
              </div>

              <div class="form-row form2">

                <div class="form-group col-md-3">
                  <label for="inputPhoneNumber">Phone Number</label>
                  <input type="text" class="form-control" id="inputAddress" placeholder="Change Country Code" required>
                </div>

                <div class="form-group col-md-9">
                  <label for="BlankBuffer"></label>
                  <input type="text" class="form-control Buffer" id="inputAddress2" placeholder="Change Phone number" required>
                </div>

              </div>

              <div class="form-row form2">

                <div class="form-group col-md-6">
                  <label for="inputCity">City</label>
                  <input type="text" class="form-control" id="inputCity" required>
                </div>

                <div class="form-group col-md-4">
                  <label for="inputState">State</label>
                  <select id="inputState" class="form-control" required>
                    <option selected>Choose...</option>
                    <option>Ontario</option>
                    <option>British Columbia</option>
                    <option>Québec</option>
                    <option>Alberta</option>
                    <option>Nova Scotia</option>
                    <option>Manitoba</option>
                    <option>Saskatchewan</option>
                  </select>
                </div>

                <div class="form-group col-md-2">
                  <label for="inputZip">Zip Code</label>
                  <input type="text" class="form-control" id="inputZip" required>
                </div>

              </div>

              <div class="row ROW2">
              	<div class="col-md-1"></div>
              	<div class="col-md-6">
              		<div class="row">
	              		<a class="btn btn-primary BUT2" href="profile.html" role="button">Save Changes</a>
	              	</div>
              	</div>
              	<div class="col-md-4">
              		<div class="row">
	              		<a class="btn btn-primary BUT2" href="profile.html" role="button">Back</a>
	              	</div>
              	</div>
              	<div class="col-md-1"></div>
              </div>


            </form>

          </div>
          <div class="col-md-1"></div>
        </div>
      </div>