<html lang="en">
<head>
        <meta charset="utf-8">
        <title>Dalhousie Connect - Welcome </title>
        
        <meta name="description" content="Dalhousie online forum initiative brings the capabilities of a forum online, rather than the traditional way which members of a society or particular interest need to meet physically to discuss and vote on suggestions/ideas">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="icon" type="image/png" href="images/favicon.jpg">
        <link type = "text/css" href="css/bootstrap.min.css" rel="stylesheet">
       
        <link type = "text/css" href="css/login.css" rel="stylesheet">
    </head>
<body>
<?php
    if(isset($_POST['login']))
    {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $con = mysqli_connect('localhost','root','Niti@123','sample') or die("Connection failed: " . mysqli_connect_error());
        $result = mysqli_query($con, "SELECT * FROM `users` WHERE username='$username' AND password='$password'");
        if(mysqli_num_rows($result) == 0)
         echo 'Invalid Id and Password';
       else
          header('Location: admin.html');
    }
    else
    {
?>
    <div class="container-fluid">
            <div class="row wrapper">

                <div class="col-lg-6 col-xs-6 col-sm-6 col-12 welcome-section" >

                    <div class="banner"></div>
                    <div class="overlay"></div>
                    <div class="col-lg-7 col-xs-7 col-sm-12 col-12 tag-line ">
                            <h2>See what's happening in Dalhousie </h2>
                            
                            <div class="tag-line-item">
                                <i class="fa fa-users fa-2x"></i> Meet people with similar interest
                            </div>
                            <div class="tag-line-item">
                                <i class="fa fa-comments fa-2x"></i> Create or join a conversation
                            </div>
                            <div class="tag-line-item">
                                <i class="fa fa-building fa-2x"></i> Learn, build career and grow Dalhousie
                             </div>

                    </div>
                </div>

                <div class="col-lg-6 col-xs-6 col-sm-6 form-section">
                        <img src="images/dal-logo.jpg" alt="logo" height ="70"  class="mx-auto d-block">
                        <h2 class="text-center">Welcome to DAL Connect!</h2>
                        <p class="text-center" style="margin-bottom: 12px; font-size: 14px;">Please sign in with your Net Id and Password</p>


                        <div class="alert alert-danger alert-dismissible fade show error_message_container" role="alert"  style="display: none;">
                            <span id="error_message">Banner ID and Password do not match.</span>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>    
    <form action="" method="post">
            <div class="form-group">
                                <label>Net ID</label>
                                <input type="text" class="form-control" placeholder="Enter Net ID" name="username" id="net_id">
                            </div>
           <div class="form-group">
                                <label>Password</label>
                                <input type="password" class="form-control" name="password" placeholder="Password" id="password" required>
                                <small id="password_warning" class="form-text text-danger"></small>
                            </div>
               <div class="form-check">
                                <input type="checkbox" class="form-check-input">
                                <label class="form-check-label">Remember Me</label>
                            </div><br/>
            <input type="submit" name="login" value="Login"  id="login_button"/>
           </form>
           </div>


              <div class="col-lg-12 col-xs-12 col-sm-12 text-center">&copy; Copyrights 2019, Dalhousie University</div>
            </div>
        </div>

