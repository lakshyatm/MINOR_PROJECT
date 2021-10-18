$(document).ready(function(){

    // banner owl carousel
    $("#banner-area .owl-carousel").owlCarousel({
        loop:true,
        dots: true,
        items: 1
    });

    //top-Sale
    $("#top-sale .owl-carousel").owlCarousel({
        loop:true,
        nav:true,
        dots: true,
        responsive:{
            0:{
                items:2
            },
            600:{
                items:3
            },
            1000:{
                items:5
            }
        }
       
    });

    // isotope filter
    var $grid = $(".grid").isotope({
        itemSelector : '.grid-item',
        layoutMode : 'fitRows'
    });
    
    //filter items on button click
    $(".button-group").on("click","button",function(){
        var filterValue = $(this).attr("data-filter");
        $grid.isotope({filter:filterValue});
    })

    // Coming Soon owl carousel
    $("#coming-soon .owl-carousel").owlCarousel({
        loop: true,
        nav: false,
        dots: true,
        responsive : {
            0: {
                items: 2
            },
            600: {
                items: 3
            },
            1000 : {
                items: 5
            }
        }
    });

     // blogs owl carousel
     $("#blogs .owl-carousel").owlCarousel({
        loop: true,
        nav: false,
        dots: true,
        responsive : {
            0: {
                items: 1
            },
            600: {
                items: 3
            }
        }
    });

    

    // For Registering Into the Database
    $("#Register").click(function () {

        fname = $("#fname").val();
        lname = $("#lname").val();
        mobile = $("#mobile").val();
        email = $("#email").val();
        address = $("#address").val();
        password = $("#password").val();

        $.ajax({
            type: "POST",
            url: "adduser.php",
            data:  "fname=" + fname + "&lname=" + lname + "&mobile=" + mobile + "&email=" + email + "&address=" + address + "&password=" + password,
            success: function (html) {
                if (html == 'true') {

                    $("#add_err2").html('<div class="alert alert-success"> \
                                         <strong>Account</strong> processed. \ \
                                         </div>');

                    window.location.href = "login.php";

                } else if (html == 'false') {
                    $("#add_err2").html('<div class="alert alert-danger"> \
                                         <strong>Email Address</strong> already in system. \ \
                                         </div>');                    

                } else if (html == 'fname') {
                    $("#add_err2").html('<div class="alert alert-danger"> \
                                         <strong>First Name</strong> is required. \ \
                                         </div>');
                                         
                } else if (html == 'lname') {
                    $("#add_err2").html('<div class="alert alert-danger"> \
                                         <strong>Last Name</strong> is required. \ \
                                         </div>');
                } else if (html == 'mformat') {
                    $("#add_err2").html('<div class="alert alert-danger"> \
                                         <strong>Mobile No.</strong> is Short/format is not valid. \ \
                                         </div>');
                } else if (html == 'eshort') {
                    $("#add_err2").html('<div class="alert alert-danger"> \
                                         <strong>Email Address</strong> is required. \ \
                                         </div>');

                } else if (html == 'eformat') {
                    $("#add_err2").html('<div class="alert alert-danger"> \
                                         <strong>Email Address</strong> format is not valid. \ \
                                         </div>');
                } else if (html == 'addshort') {
                    $("#add_err2").html('<div class="alert alert-danger"> \
                                         <strong>Address</strong> must be at least 10 characters . \ \
                                         </div>');						 
                } else if (html == 'pshort') {
                    $("#add_err2").html('<div class="alert alert-danger"> \
                                         <strong>Password</strong> must be at least 4 characters . \ \
                                         </div>');

                } else {
                    $("#add_err2").html('<div class="alert alert-danger"> \
                                         <strong>Error</strong> processing request. Please try again. \ \
                                         </div>');
                }
            },
            beforeSend: function () {
                $("#add_err2").html('<div class="alert alert-danger"> \
                                         <strong>Loading...</strong> \ \
                                         </div>');
            }
        });
        return false;
    });

    //For Accessing Database
    $("#login").click(function(){
				
        email=$("#email").val();
        password=$("#password").val();
         $.ajax({
            type: "POST",
            url: "usercheck.php",
            data: "email="+email+"&password="+password,
            success: function(html){
              if(html=='true')
              {
                  
                  $("#add_err2").html('<div class="alert alert-success"> \
                                        <strong>Authenticated</strong> \ \
                                    </div>');

                window.location.href = "index.php";
              
              } else if (html=='false') {
                    $("#add_err2").html('<div class="alert alert-danger"> \
                                        <strong>Authentication</strong> failure. \ \
                                    </div>');
                    
              
              } else {
                    $("#add_err2").html('<div class="alert alert-danger"> \
                                        <strong>Error</strong> processing request. Please try again. \ \
                                    </div>');
              }
            },
            beforeSend:function()
            {
                $("#add_err2").html('<div class="alert alert-danger"> \
                                        <strong>Loading...</strong> \ \
                                    </div>');
            }
        });
         return false;
    });

    //Order-Items
    $("#order .owl-carousel").owlCarousel({
       
        nav:true,
        dots: true,
        responsive:{
            0:{
                items:2
            },
            600:{
                items:3
            },
            1000:{
                items:5
            }
        }
       
    });

    
    //For sending Messagae
    $("#contact").click(function () {

        fname = $("#fname").val();
        email = $("#email").val();
        message = $("#message").val();

        $.ajax({
            type: "POST",
            url: "sendmessage.php",
            data: "fname=" + fname + "&email=" + email + "&message=" + message,
            success: function (html) {
                if (html == 'true') {

                    $("#add_err2").html('<div class="alert alert-success"> \
                                         <strong>Message Sent!</strong> \ \
                                         </div>');

                } else if (html == 'fname_long') {
                    $("#add_err2").html('<div class="alert alert-danger"> \
                                         <strong>First Name</strong> must cannot exceed 50 characters. \ \
                                         </div>');
                
                } else if (html == 'fname_short') {
                    $("#add_err2").html('<div class="alert alert-danger"> \
                                         <strong>First Name</strong> must exceed 2 characters. \ \
                                         </div>');
                                         
                } else if (html == 'email_long') {
                    $("#add_err2").html('<div class="alert alert-danger"> \
                                         <strong>Email</strong> must cannot exceed 50 characters. \ \
                                         </div>');
                
                } else if (html == 'email_short') {
                    $("#add_err2").html('<div class="alert alert-danger"> \
                                         <strong>Email</strong> must exceed 2 characters. \ \
                                         </div>');
                                         
                } else if (html == 'eformat') {
                    $("#add_err2").html('<div class="alert alert-danger"> \
                                         <strong>Email</strong> format incorrect. \ \
                                         </div>');
                                         
                } else if (html == 'message_long') {
                    $("#add_err2").html('<div class="alert alert-danger"> \
                                         <strong>Message</strong> must cannot exceed 50 characters. \ \
                                         </div>');
                
                } else if (html == 'message_short') {
                    $("#add_err2").html('<div class="alert alert-danger"> \
                                         <strong>Message</strong> must exceed 2 characters. \ \
                                         </div>');


                } else {
                    $("#add_err2").html('<div class="alert alert-success"> \
                                         <strong>Meassage sent.</strong> \ \
                                         </div>');
                }
            },
            beforeSend: function () {
                $("#add_err2").html('<div class="alert alert-danger"> \
                                         <strong>Loading...</strong> \ \
                                         </div>');
            }
        });
        return false;
    });

});