<?php

include_once './header-login.php';

?>
<div class="row">
    <div class="col-sm-8 col-sm-offset-2 col-md-8 col-md-offset-2 main">
        <h1>Register</h1>
        <form>
            <div class="form-group">
              <label for="txtFirstName">First Name</label>
              <input type="text" class="form-control" id="txtFirstName" placeholder="First Name">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Last Name</label>
              <input type="text" class="form-control" id="txtLastName" placeholder="Last Name">
            </div>
            <div class="form-group">
              <label >Gander</label>
              <div class="radio">
                <label>
                  <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                  Male
                </label>
              </div>
              <div class="radio">
                <label>
                  <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                  Fe Male
                </label>
              </div>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Date of Birth</label>
              <input type="date" class="form-control" >
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Email</label>
              <input type="email" class="form-control" id="txtEmail" placeholder="Email Address">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Password</label>
              <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>
            <div class="checkbox">
              <label>
                <input type="checkbox"> Check me out
              </label>
            </div>
            <button type="submit" class="btn btn-default">Register</button>
            <button type="submit" class="btn btn-default">Cancel</button>
        </form>
    </div>
</div>

<?php

include_once './footer.php';   