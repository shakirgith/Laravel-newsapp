<?php
require_once "controller.php";

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Forgot Password - TRP Admin</title>
        <link rel="shortcut icon" href="<?php echo $adminurl; ?>/assets/images/trp-favicon.png" />
        <link href="assets/css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-primary">
    <div id="layoutAuthentication" class="main-wrapper">
                <main class="login-wrapper shadow-lg">
                 
                        <div class="left_panel">
                            <div class="p-5">
                                <h4 class="text-center text-white">Welcome to TRP Admin</h4>
                              <img class="img-fluid" src="<?php echo $adminurl; ?>/assets/images/auth-img2.png" alt="image" />
                            </div>
                        </div> <!-- end left_panel -->


                    <div class="right_panel">
                        <div class="row justify-content-center">
                            <div class="col-lg-10">
                                <div class="card">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Forgot Password</h3></div>
                                    <div class="card-body">

                                    <?php
                                        if($showError != ''){  ?>

                                            <div class="alert alert-danger mb-4">
                                            <?php echo $showError ?> 
                                            </div>

                                            <?php
                                        } else {
                                            
                                            
                                        }
                                        ?>


                                       
                                       <form action="forgot-password.php" method="POST" autocomplete="off">
                                            <div class="form-floating mb-3">
                                                <input class="form-control" type="email" name="user_email" pattern="[^ @]*@[^ @]*"  placeholder="Email Address" autocomplete="off" required />
                                                <label for="inputEmail">Email address</label>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                                <a class="small" href="login.php">Back Login?</a>
                                                <button name="check-email" type="submit" class="btn btn-primary">Submit</button>
                                            </div>
                                        </form>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </main>
         
            <div id="layoutAuthentication_footer">
                            <footer class="py-4 mt-auto">
                                <div class="container-fluid px-4">
                                    <div class="d-flex align-items-center justify-content-between small">
                                    
                               <p class="text-center mb-0 w-100"> Copyright &copy; 2014-2023 | The Rainbow Print Admin</p>

                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="assets/js/scripts.js"></script>
    </body>
</html>
