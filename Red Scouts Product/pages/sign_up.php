<!doctype html>
<html>

<head>
	<!-- Required meta tags -->
		    	<meta charset="utf-8">
		    	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		    	<!-- Bootstrap CSS -->
		    	<link rel="stylesheet" href="css/bootstrap.min.css">
		    	<link rel="stylesheet" type="text/css" href="css/custom.css">

<div class="container fluid">
	<div class="row">
		<div class="col-md-1 bg-light"></div>
		<div class="col-md-10 bg-light">
			<hr class="my-1">
		    <hr class="my-1">
			<nav class="navbar navbar-expand-lg navbar-light bg-light">
			  <b><a class="navbar-brand" href="#">Sign Up Now!</a></b>
			</nav> 
			<hr class="my-1">
		    <hr class="my-1">
		</div>
		<div class="col-md-1 bg-light"></div>
	</div>
</div>

</head>

<body>
	<div class="container bg-light"> <!-- Use 'required' in the input class to indicate a required field or tab-->
        <div class="row">
          <div class="col-md-1"></div>
          <div class="col-md-10">
            
            <form action="/" method="">
              
                <div class="form-row form1">

                  <div class="col-md-4 mb-3 form2">
                    <label for="validationCustom01">First name</label>
                    <input type="text" class="form-control" id="validationCustom01" placeholder="First name" required>
                  </div>

                  <div class="col-md-4 mb-3 form2">
                    <label for="validationCustom02">Last name</label>
                    <input type="text" class="form-control" id="validationCustom02" placeholder="Last name" required>
                  </div>

                  <div class="col-md-4 mb-3 form2">
                    <label for="validationCustomUsername">Username</label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroupPrepend">@</span>
                      </div>
                      <input type="text" class="form-control" id="validationCustomUsername" placeholder="Username" aria-describedby="inputGroupPrepend" required>
                      <div class="invalid-feedback">
                        Please choose a username.
                      </div>
                    </div>
                  </div>

                </div>

              <div class="form-group row form2">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                  <input type="email" class="form-control" id="inputEmail3" placeholder="Email" required>
                  <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
              </div>

              <div class="form-group row form2">
                <label for="inputPassword5" class="col-md-2">Password</label>
                <div class="col-md-10">
                  <input type="password" id="inputPassword5" class="form-control" aria-describedby="passwordHelpBlock" placeholder="Password" required>
                  <small id="passwordHelpBlock" class="form-text text-muted">
                    Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces, special characters, or emoji.
                  </small>
                </div>
              </div>
              
              <div class="form-group form2">
                <label for="inputAddress">Address</label>
                <input type="text" class="form-control" id="inputAddress" placeholder="Housing or Residence Address" required>
              </div>

              <div class="form-row form2">

                <div class="form-group col-md-3">
                  <label for="inputPhoneNumber">Phone Number</label>
                  <select id="inputCountryCode" class="form-control" required>
                    <option selected>Country Code...</option>
                    <option>+1</option>
                    <option>+62</option>
                    <option>+65</option>
                    <option>+81</option>
                    <option>+44</option>
                    <option>+60</option>
                    <option>+33</option>
                  </select>
                </div>

                <div class="form-group col-md-9">
                  <label for="BlankBuffer"></label>
                  <input type="text" class="form-control Buffer" id="inputAddress2" placeholder="Phone number" required>
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

              <div class="form-group form2">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="gridCheck" required>
                  <label class="form-check-label" for="gridCheck">
                    I hereby accept the terms and conditions
                  </label>
                </div>
              </div>
              <button class="btn btn-primary BUT" type="submit" role="submit">Sign Up Now</button>
            </form>

          </div>
          <div class="col-md-1"></div>
        </div>
      </div>
</body>

</html>