<?php

?>
<main>
    <div class="container">
        <div class="row breadcrumbs">
            <div class="col-sm-12">
            <a href="index.php?page=index"> Home</a>
                <span class="seperator">></span>
                <span class="current-page">Registration</span>
            </div>
        </div> 
        <br>
        <h2>Registration</h2>
        <br>
  <div class="row">
    <div class="col-sm-4">
        <form id="reg-form" method="post" action="registration_action.php">
            <div class="errors" style="">
                <ul>
    <?php

     if (isset($_SESSION['flash'])&& isset($_SESSION['flash'][errors])){
         foreach ($_SESSION['flash']['errors'] as $errors){
            echo "<li>$errors</li>";

         }
         unset($_SESSION['flash']['errors']);
     }
     ?>
                </ul>
                
            </div>

                     <div class="success" style="">
                 <ul>
     <?php

         if (isset($_SESSION['flash'])&& isset($_SESSION['flash'][success])){
         foreach ($_SESSION['flash']['success'] as $msg){
            echo "<li>$msg</li>";

         }
         unset($_SESSION['flash']['success']);
         }
      ?>
                </ul>
                
            </div>
            
            <div class="form-group">
                <input type="text" name="username" class="form-control" placeholder="Username*">
            </div>
            <div class="form-group">
                <input type="password" name="password" class="form-control" placeholder="Password*">
            </div>
            <div class="form-group">
                <input type="password" name="password2" class="form-control" placeholder="Retype password*">
            </div>
            <div class="form-group">
                <input type="text" name="first_name" class="form-control" placeholder="First name*">
            </div>
            <div class="form-group">
                <input type="text" name="last_name" class="form-control" placeholder="Last name*">
            </div>
           <!-- <div class="form-group" >
                <select placeholder="Please select coutnry" name="country" class="form-control">
                    <option value="0">Select coutnry</option>
                    <option value="1">Latvia</option>
                    <option value="2">Lithuania</option>
                    <option value="3">Estonia</option>
                    <option value="4">Netherlands</option>
                    <option value="5">France</option>
                    <option value="6">Germany</option>
                    <option value="7">USA</option>
                </select>
            </div>
            <div class="checkbox">
                <label>
                    <input type="checkbox" name="agree" value="1"> I Agree with some GDPR 
                </label>
            </div>-->
            <button type="submit" class="btn btn-default">Submit</button>
        </form>
      </div>
    </div>
  </div>
</main>