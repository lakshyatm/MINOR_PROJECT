<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Register-Brother Electronics</title>

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
            <h3>Registration-Form</h3>
					
                    <hr>       
                    <form role="form">
                        <div class="row">
                            <div class="form-group col-lg-4">
                                <label>First Name</label>
                                <input type="text" id="fname" name="fname" maxlength="25" class="form-control">
                            </div>
                            <div class="form-group col-lg-4">
                                <label>Last Name</label>
                                <input type="text" id="lname" name="lname" maxlength="25" class="form-control">
                            </div>
                            <div class="form-group col-lg-4">
                                <label>Mobile Number</label>
                                <input type="tel" id="mobile" name="mobile" maxlength="10" class="form-control">
                            </div>
                            <div class="form-group col-lg-4">
                                <label>Email Address</label>
                                <input type="email" id="email" name="email" maxlength="35" class="form-control">
                            </div>
                            <div class="form-group col-lg-4">
                                <label>Address</label>
                                <input type="text" id="address" name="address" maxlength="150" class="form-control">
                            </div>
                            <div class="clearfix"></div>
                            <div class="form-group col-lg-4">
                                <label>Password</label>
                                <input type="password" id="password" name="password" maxlength="20" class="form-control">
                            </div>
                            <div class="form-group col-lg-12">
                                <div id="add_err2"></div>
                            </div>
                            <div class="form-group col-lg-12">
                                <button type="submit" id="Register" class="btn btn-dark btn-sm">Submit</button>
                                <input type="reset" class="btn btn-dark btn-sm ml-4">
                            </div>
                            
                            
                        </div>
                    </form>

                    <div class="form-group col-lg-12">
                                <a href="login.php"><button type="submit" class="btn btn-sm btn-dark">If a Member? Login here</button></a>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container -->

    <!--Footer-->
    <?php require_once 'template/footer.php'; ?>
    <!---/Footer-->

  

</body>

</html>
