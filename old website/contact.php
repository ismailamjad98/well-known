<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Colarusgroup</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/modern-business.css" rel="stylesheet">
</head>

<body>

  <?php include 'header.php';?>

    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <h1 class="mt-4 mb-3">
            Contact
            <!--<small>Subheading</small>-->
        </h1>

        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="index.php">Home</a>
            </li>
            <li class="breadcrumb-item active">Contact</li>
        </ol>

        <div class="row">
            <div class="col-lg-8 portfolio-item" style="height: 30%">
                <div class="card h-100">
                    <div class="col-lg-12">
                        <!-- Embedded Google Map -->
                        <iframe width="100%" height="400px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?hl=en&amp;ie=UTF8&amp;ll=37.0625,-95.677068&amp;spn=56.506174,79.013672&amp;t=m&amp;z=4&amp;output=embed"></iframe>


                        <div class="col-lg-12 mb-4">
                            <h3>Send us a Message</h3>
                            <form name="sentMessage" id="contactForm" novalidate method="post" action="send_form_email.php">
                                <div class="control-group form-group">
                                    <div class="controls">
                                        <label>Full Name:</label>
                                        <input type="text" class="form-control" name="FullName" id="name" required data-validation-required-message="Please enter your name.">
                                        <p class="help-block"></p>
                                    </div>
                                </div>
                                <div class="control-group form-group">
                                    <div class="controls">
                                        <label>Phone Number:</label>
                                        <input type="tel" class="form-control" name ="PhoneNumber" id="phone" required data-validation-required-message="Please enter your phone number.">
                                    </div>
                                </div>
                                <div class="control-group form-group">
                                    <div class="controls">
                                        <label>Email Address:</label>
                                        <input type="email" class="form-control" name="EmailAddress" id="email" required data-validation-required-message="Please enter your email address.">
                                    </div>
                                </div>
                                <div class="control-group form-group">
                                    <div class="controls">
                                        <label>Message:</label>
                                        <textarea rows="10" cols="100" class="form-control" name="Message" id="message" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"></textarea>
                                    </div>
                                </div>
                                <div id="success"></div>
                                <!-- For success/fail messages -->
                                <button type="submit" class="btn btn-primary" id="sendMessageButton">Send Message</button>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-lg-4 portfolio-item" style="height: 30%">
                <div class="card h-100">
                    <!--<a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>-->
                    <div class="card-body">
                        <strong>Canada</strong><br>
                        3588 Grassie Road, Grassie , ON L0R  1M0 
                        <br />
                        <abbr title="Mobile">M</abbr>: 1-(289)-938-1727
                        <br />
                        <abbr title="Phone">D</abbr>: 1-(289)-271-5000
                        <br />
                        <abbr title="Email">E</abbr>:
                        <a href="mailto:sales@colarusgroup.ca">sales@colarusgroup.ca</a>
                        <br />
                        <abbr title="Email">E</abbr>:
                        <a href="mailto:waheed@colarusgroup.ca">waheed@colarusgroup.ca</a>

                        <br />
                        <abbr title="Hours">H</abbr>: Monday - Friday: 9:00 AM to 5:00 PM
                        <hr />

                        <strong>China Shaoxning</strong>
                        <br />
                        RM 1004-1005, 10th Floor Wuming
                        Building,Fuquan Town, Shaoxing City,
                        <br>Zhejiang Province, China.
                        <br>Zip Code: 312046
                        <br />
                        <abbr title="Phone">P</abbr>: 0086-(575)-81101550
                        <br />
                        <abbr title="Mobile">M</abbr>: 0086-(575)-81101560
                        <br />

                        <hr />

                        <strong>Vietnam</strong>
                        <br />
                        Phòng 1451Q, tòa nhà Hapro,
                        số 11B đường Cát Linh,
                        Phường Quốc Tử Giám,
                        Quận Đống Đa, Thành phố Hà Nội,
                        Việt Nam

                        <hr />
                        <strong>Malaysia</strong>
                        <br />
                        65A, Jalan Mamanda 9, Taman Dato Ahmad Razali
                        Ampang 68000, Selangor Darul Ehsan
                        <hr />

                    </div>
                </div>
            </div>
        </div>

        <!-- /.row -->

    </div>
   
<?php include 'footer.php';?>
</body>

</html>