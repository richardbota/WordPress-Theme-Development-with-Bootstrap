<!doctype html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html";
          charset="UTF-8">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="assets/img/favicon.ico">
    <title>Contact | Bootstrap to WordPress</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome Icons -->
    <link href="assets/css/font-awesome/css/font-awesome.min.css"
          rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/custom.css">

    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Raleway:400,700' rel='stylesheet' type='text/css'>


    <!-- HTML5 shiv and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body class="full-width contact">

<!-- Header -->
<header class="site-header" role="banner">

    <!-- NAVBAR -->
    <div class="navbar-wrapper">

        <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="/"><img src="assets/img/logo.png" alt="Bootstrap to Wordpress"></a>
                </div>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="/">Home</a></li>
                        <li><a href="blog.php">Blog</a></li>
                        <li><a href="resources.php">Resources</a></li>
                        <li class="active"><a href="contact.php">Contact</a></li>
                    </ul>
                </div>
            </div>
        </div>

    </div><!--Header end-->

    <!-- Feature Image -->
    <section class="feature-image feature-image-default" data-type="background" data-speed="2">
        <h1 class="page-title">Contact</h1>
    </section><!-- Feature Image end -->

    <!-- Main Content -->
    <div class="container">
        <div class="row" id="primary">

            <div id="content" class="col-sm-12">

                <section class="main-content">
                    <p class="lead">Have any questions about the course? Feel free to get in touch with me! I&rsquo;ll do my best to get back to you ASAP.</p>

                    <form role="form" class="clearfix">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="sr-only" for="contact-name">Name</label>
                                    <input type="text" class="form-control input-lg" id="contact-name" placeholder="Your name">
                                </div>
                            </div><!-- end col -->

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="sr-only" for="contact-email">Email</label>
                                    <input type="text" class="form-control input-lg" id="contact-email" placeholder="Your email">
                                </div>
                            </div><!-- end col -->

                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label class="sr-only" for="contact-words">Message</label>
                                    <textarea class="form-conrol input-lg" id="contact-words" placeholder="Your message" rows="3"></textarea>
                                </div>
                            </div><!-- end col -->
                        </div><!-- row -->
                        <input type="submit" class="btn btn-info btn-lg pull-right" value="Get in touch &raquo;">
                    </form>

                </section>

            </div><!-- content -->

        </div><!-- primary -->
    </div><!-- container -->

    <!-- Sign up section -->
    <section id="signup" data-type="background" data-speed="4">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-sm-offset-3">
                    <h2>Are you ready to take your coding skills to the <strong>next level</strong>?</h2>
                    <p><a href="" class="btn btn-lg btn-block btn-success">Yes, sign me up!</a></p>
                </div><!-- end col -->
            </div><!-- row -->
        </div><!-- container -->
    </section><!-- signup -->


    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="col-sm-3">
                <p><a href="/"><img src="assets/img/logo.png" alt="Bootstrap to WordPress"></a></p>
            </div><!-- end col -->
            <div class="col-sm-6">
                <nav>
                    <ul class="list-unstyled list-inline">
                        <li><a href="">Home</a></li>
                        <li><a href="">Blog</a></li>
                        <li><a href="">Resources</a></li>
                        <li><a href="">Contact</a></li>
                        <li class="signup-link"><a href="">Sign up now</a></li>
                    </ul>
                </nav>
            </div><!-- end col -->
            <div class="col-sm-3">
                <p class="pull-right">&copy; 2014 Brad Hussey</p>
            </div><!-- end col -->
        </div><!-- container -->
    </footer>



    <!-- Modal -->
    <div class="modal fade" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content">

                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title" id="myModalLabel"><i class="fa fa-envelope"></i> Subscribe to our Mailing List</h4>
                </div><!-- modal-header -->

                <div class="modal-body">
                    <p>Simply enter your name and email! As a thank you for joining us, we're going to give you one of our best-selling courses, <em>for free!</em></p>

                    <form class="form-inline" role="form">
                        <div class="form-group">
                            <label class="sr-only" for="subscribe-name">Your first name</label>
                            <input type="text" class="form-control" id="subscribe-name" placeholder="Your first name">
                        </div>
                        <div class="form-group">
                            <label class="sr-only" for="subscribe-email">and your email</label>
                            <input type="text" class="form-control" id="subscribe-email" placeholder="and your email">
                        </div>
                        <input type="submit" class="btn btn-danger" value="Subscribe!">
                    </form>

                    <hr>

                    <p><small>By providing your email you consent to receiving occasional promotional emails &amp; newsletters. <br>No Spam. Just good stuff. We respect your privacy &amp; you may unsubscribe at any time.</small></p>
                </div><!-- modal-body -->

            </div><!-- modal-content -->
        </div><!-- modal-dialog -->
    </div><!-- modal -->

    <!-- Bootstrap core javascript
    Placed at the end of the document so the pages load faster
    -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>

    <script src="assets/js/jquery-2.1.4.min.js"></script>

    <script src="assets/js/bootstrap.min.js"></script>

    <script src="assets/js/main.js"></script>

    <!-- Adobe Typekit Fonts -->
    <script src="https://use.typekit.net/omd6jec.js"></script>
    <script>try{Typekit.load({ async: true });}catch(e){}</script>

</body>
</html>