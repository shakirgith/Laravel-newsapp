<?php
include('layout/admin_header.php');

 // $css_hide = 'style="display: none"'; 
 // $css_hide2 = 'style="display: none"'; 
 // $css_hide3 = 'style="display: none"'; 
 // $css_hide_success = 'style="display: none"'; 
 $showError = "";
 $showMsg = "";


if(isset($_POST['registerSubmit'])) {


    $title = mysqli_real_escape_string($conn, $_POST['gender']);
    $fname = mysqli_real_escape_string($conn, $_POST['fname']);
    $lname = mysqli_real_escape_string($conn, $_POST['lname']);
    $user_email = mysqli_real_escape_string($conn, $_POST['user_email']);
    $password = mysqli_real_escape_string($conn, md5($_POST['password']));
    $role = mysqli_real_escape_string($conn, $_POST['role']);
    $code = rand(0,0);
    $status = "pending";

   $emailquery = "SELECT * FROM admin_users WHERE user_email = '{$user_email}'";  

   $result = mysqli_query($conn, $emailquery) or die("Query Failed");

    if(mysqli_num_rows($result) > 0) {

          $showError = "Your email already exists."; 

    } else {

         $insertquery = "insert into admin_users (user_title, first_name, last_name, user_email, password, role, token, status) values('{$title}','{$fname}', '{$lname}','{$user_email}','{$password}', '{$role}','{$code}','{$status}')";


         if(mysqli_query($conn, $insertquery)) {


            $showMsg = "You have successfully registered."; 
        //   header('location:' .$adminurl.'/login.php');

         }
        
    }


}


?>



<div id="layoutSidenav">
            <div id="layoutSidenav_nav">
            <?php
                include('layout/sidbar.php');
                ?>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-7">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Create Account</h3></div>
                                    <div class="card-body">
                                        <form  action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST" autocomplete="off">
                                           <!--   <p class="success-message" <?php // echo $css_hide_success ?>>You have successfully registered</p>
                                                <p class="error-message" <?php // echo $css_hide ?>>Your email already exists</p>
                                                <p class="error-message" <?php // echo $css_hide2 ?>>You are not registered</p> -->
                                               
                                                <?php if(!empty($showError)) { ?>
                                                <p class="alert alert-danger"><?php echo $showError ?></p>
                                                <?php } ?>
                                                <?php if(!empty($showMsg)) { ?>
                                                <p class="alert alert-success"><?php echo $showMsg; ?></p>
                                                <?php } ?>

                                             <div class="row">
                                              <div class="col-md-6">
                                                  <div class="form-floating mb-3">
                                                    <select class="form-select form-control" name="gender" aria-label="Default select example">
                                                          <option selected>Select Title</option>
                                                          <option value="Mr">Mr</option>
                                                          <option value="Mrs">Mrs</option>
                                                          <option value="Miss">Miss</option>
                                                    </select>
                                                     <!-- <label for="inputFirstName">Gender</label> -->
                                                   </div>
                                               </div>
      
                                                <div class="col-md-6 mb-3">
                                                    <div class="form-floating mb-3">
                                                        <input class="form-control" type="text" name="fname" placeholder="Enter your first name" />
                                                        <label for="inputFirstName">First name</label>
                                                    </div>
                                                </div>
                                                 <div class="col-md-6 mb-3">
                                                    <div class="form-floating mb-3">
                                                        <input class="form-control" type="text" name="lname" placeholder="Enter your last name" />
                                                        <label for="inputFirstName">Last name</label>
                                                    </div>
                                                </div>
                                               
                                          
                                             <div class="col-md-6">
                                                <div class="form-floating mb-3">
                                                    <input class="form-control" type="email" name="user_email" placeholder="name@example.com" />
                                                    <label for="inputEmail">Email address</label>
                                                </div>
                                            </div>
                             
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" type="password" name="password" placeholder="Create a password" />
                                                        <label for="inputPassword">Password</label>
                                                    </div>
                                                </div>

                                                 <div class="col-md-6">
                                                  <div class="form-floating mb-3">
                                                    <select class="form-select form-control" name="role" aria-label="Default select example">
                                                          <option selected>Select Role</option>
                                                          <option value="0">Normal User</option>
                                                          <option value="1">Admin</option>
                                                    </select>
                                                     <!-- <label for="inputFirstName">Gender</label> -->
                                                   </div>
                                               </div>
                                              
                                            </div>
                                   
                                            <div class="mt-4 mb-0">
                                                <div class="d-grid">
                                                     <button name="registerSubmit" type="submit" class="btn btn-primary btn-block">Create Account </button>
                                            </div>
                                        </form>
                                    </div>
                                    <!-- <div class="card-footer text-center py-3">
                                        <div class="small"><a href="<?php // echo $adminurl; ?>/login.php">Have an account? Go to login</a></div>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
             </div>
             </div>

<?php
include('layout/admin_footer.php');
?>
