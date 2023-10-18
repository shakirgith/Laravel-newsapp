<?php
session_start();
include('config.php');
$adminurl = 'http://localhost/trphtml/admin';

$email = "";
$name = "";
// $errors = array();
$showError = '';


//if user signup button
// if(isset($_POST['signup'])){
//     $name = mysqli_real_escape_string($con, $_POST['name']);
//     $email = mysqli_real_escape_string($con, $_POST['email']);
//     $password = mysqli_real_escape_string($con, $_POST['password']);
//     $cpassword = mysqli_real_escape_string($con, $_POST['cpassword']);
//     if($password !== $cpassword){
//         $errors['password'] = "Confirm password not matched!";
//     }
//     $email_check = "SELECT * FROM usertable WHERE email = '$email'";
//     $res = mysqli_query($con, $email_check);
//     if(mysqli_num_rows($res) > 0){
//         $errors['email'] = "Email that you have entered is already exist!";
//     }
//     if(count($errors) === 0){
//         $encpass = password_hash($password, PASSWORD_BCRYPT);
//         $code = rand(999999, 111111);
//         $status = "notverified";
//         $insert_data = "INSERT INTO usertable (name, email, password, code, status)
//                         values('$name', '$email', '$encpass', '$code', '$status')";
//         $data_check = mysqli_query($con, $insert_data);
//         if($data_check){
//             $subject = "Email Verification Code";
//             $message = "Your verification code is $code";
//             $sender = "From: shakir@webcontxt.com";
//             if(mail($email, $subject, $message, $sender)){
//                 $info = "We've sent a verification code to your email - $email";
//                 $_SESSION['info'] = $info;
//                 $_SESSION['email'] = $email;
//                 $_SESSION['password'] = $password;
//                 header('location: user-otp.php');
//                 exit();
//             }else{
//                 $errors['otp-error'] = "Failed while sending code!";
//             }
//         }else{
//             $errors['db-error'] = "Failed while inserting data into database!";
//         }
//     }

// }

//if user click continue button in forgot password form
if(isset($_POST['check-email'])) {

    $email = mysqli_real_escape_string($conn, $_POST['user_email']);
     $check_email = "SELECT * FROM admin_users WHERE user_email='$email'";
     $run_sql = mysqli_query($conn, $check_email);
 
         if(mysqli_num_rows($run_sql) > 0){
             $code = rand(999999, 111111);
             $insert_code = "UPDATE admin_users SET token = '$code' WHERE user_email = '$email'";
             $run_query =  mysqli_query($conn, $insert_code);
 
                 if($run_query){
                     $subject = "Reset your TRP administrator password";
                    //  $message = "Your password reset code is $code";

                    $message = "
                    <!DOCTYPE html><html><head><meta charset='utf-8'>
                    <title>Confirmation Emailer</title>
                    </head>
                    <body>

                    <div style='margin: 0px;padding:0px;'>
                    <table style='width: 700px;margin:0px auto;background-color: #F5F5F5;'>
                    <tbody>
                    <tr>
                    <td>
                    <table style='max-width:640px; padding:0px 40px 20px 40px;margin:30px auto;background-color: #fff; width: 100%;'>
                    <tbody>

                    <tr>
                    <td style='font-family:Arial,sans-serif;font-size:18px;line-height:35px;color:#3c3c3c;font-weight:700;padding-bottom:15px; text-align: center;'>
                    <p style='margin-bottom: 0; padding-bottom:0px; display: block; text-align: center; line-height: 16px;'>
                    <img style='border: 0; max-width: 200px; height: auto;' src='https://therainbowprint.com/assets/images/trp-logo.png' alt='Logo' /></p>
                    </td>
                    </tr>

                    <tr>
                    <td style='font-family:Arial,sans-serif;font-size:18px;line-height:35px;color:#3c3c3c;font-weight:600;padding-bottom:15px; padding-top: 20px;'>Reset your password OTP</td>
                    </tr>  
                    
                    <tr>
                    <td style='font-family:Arial,sans-serif;font-size:16px;line-height:22px;color:#3c3c3c;font-weight:500;padding-bottom:15px; padding-top: 20px;'>Dear User, <br /> <br />
                    We've received a request to reset the password for the (TRP) Admin
                    account with $email. 
                    </td>
                    </tr>

                    <tr>
                    <td style='font-family:Arial,sans-serif;font-size:16px;line-height:26px;color:#515455;font-weight:500;padding-bottom:30px;'>
                        Your password reset code is: <strong style='font-family:Arial,sans-serif;font-size:18px;color:#515455;font-weight:bold;'> $code</strong> 
                    </td>
                    </tr>

                    <tr>
                    <td style='font-family:Arial,sans-serif;font-size:16px;line-height:26px;color:#515455;font-weight:500;padding-bottom:30px;'>
                    If you did not ask to change your password, then you can ignore this email
                    and your password will not be changed. 
                   
                    </td>
                    </tr>

                    <tr>
                    <td style='font-family:Arial,sans-serif;font-size:16px;line-height:22px;color:#515455;font-weight:500;padding-bottom:0px'>
                    <p>Warm regards <br />
                        TRP Team <br />
                        </p> 

                    </td>
                    </tr>

                    </tbody>
                    </table>
                    
                    </td>
                    </tr>
                    </tbody>
                    </table>
                    </div>
                    </body>
                    </html>
                    ";

                    // Always set content-type when sending HTML email
                    $headers = "MIME-Version: 1.0" . "\r\n";
                    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
                    $headers .= 'From: shakir@webcontxt.com' . "\r\n";
                    // $headers .= 'Cc: shakir2@webcontxt.com' . "\r\n";

                    //  $sender = "From: shakir@webcontxt.com";
                     if(mail($email, $subject, $message, $headers)){
                             $info = "We've sent a passwrod reset otp to your email - $email";
                             $_SESSION['info'] = $info;
                             $_SESSION['user_email'] = $email;
                             header('location: activation.php');
                             exit();
                     }else{
                         $showError = "Failed while sending code!";
                     }
 
             }else{
                $showError = "Something went wrong!";
            }
 
  }else{  
   $showError = "This email address does not exist!";
 }
}


 //if user click check reset otp button
if(isset($_POST['check-reset-otp'])){
    $_SESSION['info'] = "";
    $otp_code = mysqli_real_escape_string($conn, $_POST['otp']);
    $check_code = "SELECT * FROM admin_users WHERE token = '$otp_code'";
    $code_res = mysqli_query($conn, $check_code);
    if(mysqli_num_rows($code_res) > 0){
        $fetch_data = mysqli_fetch_assoc($code_res);
        $email = $fetch_data['email'];
        $_SESSION['email'] = $email;
        $info = "Please create a new password that you don't use on any other site.";
        $_SESSION['info'] = $info;
        header('location: new-password.php');
        exit();
    }else{
        $showError = "You've entered incorrect code!";
    }
}



 //if user click change password button
 if(isset($_POST['changePassword'])){
    $_SESSION['info'] = "";
    $password = mysqli_real_escape_string($conn, md5($_POST['password']));
    $cpassword = mysqli_real_escape_string($conn, md5($_POST['cpassword']));
    if($password !== $cpassword){
        $showError = "Confirm password not matched!";
    }else{
        $code = 0;
        $email = $_SESSION['user_email']; //getting this email using session
        // $encpass = password_hash($password, PASSWORD_BCRYPT);
        $update_pass = "UPDATE admin_users SET token ='$code', password ='$password' WHERE user_email = '$email'";
        $run_query = mysqli_query($conn, $update_pass);
        if($run_query){
            $info = "Your password changed. Now you can login with your new password.";
            $_SESSION['info'] = $info;
            header('Location: changed-password.php');
        }else{
            $showError = "Failed to change your password!";
        }
    }
}


 //if login now button click
 if(isset($_POST['loginNow'])){
    header('Location: login.php');
}

?>
