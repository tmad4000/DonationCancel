<?php 
require_once('./config.inc.php'); 
require_once('./stripe_config.php'); 

$barMaxAmt = 100000;
$demAmt = 70000;
$repAmt = 80000;
$demBarPercent = 100 * $demAmt/$barMaxAmt;
$repBarPercent = 100 * $repAmt/$barMaxAmt;
$charityAmt = abs($demAmt-$repAmt);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Campaign Donation Clearinghouse asf</title>

    <!-- Bootstrap Core CSS -->
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet" type="text/css">

    <link rel="stylesheet" type="text/css" href="../styles/bootstrap-progressbar-3.1.1.css">

    <!-- Fonts -->
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>

    <!-- Custom Theme CSS -->
    <link href="less/grayscale.less" rel="stylesheet/less">
    <style>
        .progress .progress-bar.six-sec-ease-in-out { -webkit-transition: width 6s ease-in-out; -moz-transition: width 6s ease-in-out; -ms-transition: width 6s ease-in-out; -o-transition: width 6s ease-in-out; transition: width 6s ease-in-out; }
        .progress.vertical .progress-bar.six-sec-ease-in-out { -webkit-transition: height 6s ease-in-out; -moz-transition: height 6s ease-in-out; -ms-transition: height 6s ease-in-out; -o-transition: height 6s ease-in-out; transition: height 6s ease-in-out; }
        .progress.wide { width: 60px; }
        .bs-example.vertical { height: 250px; }
        .col-centered{ float: none; width:60px; margin: 0 auto;}
        .charity-amount{             color: green;         }
        .donate-col {}
        h2.candidate{
            margin-bottom: 10px;
        }
    </style>
    <!-- Core JavaScript Files -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/less.js/1.7.0/less.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type='text/javascript' src="../js/bootstrap-progressbar.js"></script>

    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

    <!-- Google Maps API Key - You will need to use your own API key to use the map feature -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCRngKslUGJTlibkQ3FkfTxj3Xss1UlZDA&sensor=false"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/grayscale.js"></script>
    <script type='text/javascript'>
        $(document).ready(function() {
            $('.v-bottom-basic .progress-bar').progressbar();

        });
    </script>
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-custom">

    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="#page-top">
                    <span class="light">Campaign Donation Clearinghouse</span>
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li class="page-scroll">
                        <a href="#about">About</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#download">Download</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <section class="intro">
        <div class="intro-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <!-- <h1 class="brand-heading">Grayscale</h1> -->
                        <h3 class="intro-text">Your donations cancel out contributions to the opposing party. The cancelled money goes to deserving charities</h3>
                        
                        <div class="row" height="400">

                            <div class="col-md-2 text-left" style="margin: 0; padding: 0" >
                                <h1> $<?= number_format($demAmt) ?> </h1>
                            </div>
                            <div class="col-md-3 donate-col" style="padding-left: 0" id="dem-col">
                                <div class="bs-example vertical bottom v-bottom-basic col-centered">
                                    <div class="progress vertical bottom wide">
                                        <div class="progress-bar" role="progressbar" aria-valuetransitiongoal="<?= $demBarPercent ?>"></div>
                                    </div>
                                </div>
                                <h2 class="candidate">OBAMA</h2>
                                <form action="charge.php" method="post">
                                  <script src="https://checkout.stripe.com/checkout.js" class="stripe-button"
                                  data-key="<?php echo $stripe['publishable_key']; ?>"
                                  data-amount="5000" data-description="Support the Democratic Candidate" data-label="DONATE"></script>
                              </form>
                          </div>
                          <div class="col-md-2">
                            <h1><span class="charity-amount">$<?= number_format($charityAmt) ?></span><br/> to Charity</h1>
                          </div>

                          <div class="col-md-3 donate-col" style="padding-right: 0" id="rep-col">
                            <div class="bs-example vertical bottom v-bottom-basic col-centered">
                                <div class="progress vertical bottom wide">
                                    <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuetransitiongoal="<?= $repBarPercent ?>"></div>
                                </div>
                            </div>
                            <h2 class="candidate">ROMNEY</h2>
                            <form action="charge.php" method="post">
                              <script src="https://checkout.stripe.com/checkout.js" class="stripe-button"
                              data-key="<?php echo $stripe['publishable_key']; ?>"
                              data-amount="1000" data-description="Support the Republican Candidate" data-label="DONATE"></script>
                          </form>
                      </div>
                        <div class="col-md-2 text-right" style="margin: 0; padding: 0">
                            <h1> $<?= number_format($repAmt) ?> </h1>
                        </div>
                  </div>



                  <div class="page-scroll">
                    <a href="#about" class="btn btn-circle">
                        <i class="fa fa-angle-double-down animated"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
</section>

<section id="about" class="container content-section text-center">
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2">
            <h2>About Grayscale</h2>
            <p>Grayscale is a premium quality, free Bootstrap 3 theme created by Start Bootstrap. It can be yours right now, all you need to do is download the template on the preview page. You can use this template for any purpose, personal or commercial.</p>
            <p>This striking, black and white theme features stock photographs by <a href="http://gratisography.com/">Gratisography</a> along with a custom Google Map skin courtesy of <a href="http://snazzymaps.com/">Snazzy Maps</a>.</p>
            <p>With this template, just the slightest splash of color can make a huge impact on the overall presentation and design.</p>
        </div>
    </div>
</section>

<section id="download" class="content-section text-center">
    <div class="download-section">
        <div class="container">
            <div class="col-lg-8 col-lg-offset-2">
                <h2>Download Grayscale</h2>
                <p>You can download Grayscale for free on the download page at Start Bootstrap. You can also get the source code directly from GitHub if you prefer. Additionally, Grayscale is the first Start Bootstrap theme to come with a LESS file for easy color customization!</p>
                <a href="http://startbootstrap.com/grayscale" class="btn btn-default btn-lg">Visit Download Page</a>
            </div>
        </div>
    </div>
</section>

<section id="contact" class="container content-section text-center">
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2">
            <h2>Contact Start Bootstrap</h2>
            <p>Feel free to email us to provide some feedback on our templates, give us suggestions for new templates and themes, or to just say hello!</p>
            <p>feedback@startbootstrap.com</p>
            <ul class="list-inline banner-social-buttons">
                <li><a href="https://twitter.com/SBootstrap" class="btn btn-default btn-lg"><i class="fa fa-twitter fa-fw"></i> <span class="network-name">Twitter</span></a>
                </li>
                <li><a href="https://github.com/IronSummitMedia/startbootstrap" class="btn btn-default btn-lg"><i class="fa fa-github fa-fw"></i> <span class="network-name">Github</span></a>
                </li>
                <li><a href="https://plus.google.com/+Startbootstrap/posts" class="btn btn-default btn-lg"><i class="fa fa-google-plus fa-fw"></i> <span class="network-name">Google+</span></a>
                </li>
            </ul>
        </div>
    </div>
</section>

<div id="map"></div>

</body>

</html>
