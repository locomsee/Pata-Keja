<?php 
include "header1.php";


 ?>
    <div class="container"style="padding-top:50px;">
<div class="row">
  <div class="col-md-4 col-md-offset-4">
<div class="panel panel-info panel-sm">
<div class="panel-heading">
  <h4 class="panel-title" >Register</h4>
</div>
  <div class="panel-body">
  <form method="post" action="register2.php">
    <div class="form-group">
   <input class="form-control" type="text" name="adm" required="required" placeholder="Enter your admission No."/>
    </div>
    <div class="form-group">
   <input class="form-control" type="text" name="name" required="required" placeholder="Your Full names"/>
    </div>
    <div class="form-group">
    <input class="form-control" type="text" name="username" required="required" placeholder="Type a username"/>
    </div>
    <div class="form-group">
    <input class="form-control" type="password" name="password" required="required" placeholder="Enter Password"/>
    </div>
    <div class="form-group">
    <input class="form-control" type="email" name="email" required="required" placeholder="Your Email address"/>
    </div>
    <div class="form-group">
    <input class="form-control" type="text" name="accnum" required="required" placeholder="Your Account Number"/>
    </div>
    <div class="form-group">
   <input class="form-control" type="text" name="phonenum" required="required" placeholder="Enter your Phone No."/>
    </div>
    <div class="form-group">
    <input type='radio' name='gender' value='male' required="required" />
            Male &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type='radio' name='gender' value='female'  />
                      Female
    </div> 
    <input class="btn btn-info" type="submit" name="submit" value="Sign up" />
    </form>
    
    
        </div>
</div>
        </div>  
  </div>
</div>
    

        </div>
      