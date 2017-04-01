<?php

include_once './header-login.php';

?>

<div class="row">
    <div class="col-sm-8 col-sm-offset-2 col-md-8 col-md-offset-2 main">
        <h1>Login</h1>
        <form>
            <div class="form-group">
              <label for="exampleInputEmail1">Email address</label>
              <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
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
            <button type="submit" class="btn btn-default">Login</button>
            <button type="submit" class="btn btn-default">Cancel</button>
        </form>
    </div>
</div>

    



<?php

include_once './footer.php';   