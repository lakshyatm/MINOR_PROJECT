<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login-Brother Electronics</title>

    <!--Required Script Files-->
    <?php require_once 'template/required-script.php'; ?>
    <!--/Required Script File-->



</head>

<body>

   <!--Start Header-->
       
      <header id ="header" >  
            <!--Header-->
            <?php require_once 'template/header.php'; ?>
            <!--/Header-->

       </header>
    <!--/Start Header-->

    <div class="py-3 box">
        <div class="container">
        <div class="text-center px-4 pt-3 alert alert-danger">To add product in Cart then You must be logged-in !</div>
            <h3>Login</h3>

					<div id="add_err2"></div>
                    <hr>       
                    <form role="form">
                        <div class="row">
                            <div class="form-group col-lg-6">
                                <label>Email Address</label>
                                <input type="email" id="email" name="email" maxlength="35" class="form-control">
                            </div>
                            
                            <br>
                            <div class="form-group col-lg-6">
                                <label>Password</label>
                                <input type="password" id="password" name="password" maxlength="20" class="form-control">
                            </div>
                            <div class="form-group col-lg-12">
                                <button type="submit" id="login" class="btn btn-sm btn-dark"><i class="fa fa-fw fa-user"></i>Login</button>
                            </div>
                        </div>
                    </form>
					
					<div class="form-group col-lg-12">
						<a href="register.php"><button type="submit" class="btn btn-sm btn-dark">Not a Member? Register here</button></a>
					</div>

					
        </div>
    </div>
    <!-- /.container -->

    <!--Footer-->
    <?php require_once 'template/footer.php'; ?>
    <!---/Footer-->

 
</body>

</html>
