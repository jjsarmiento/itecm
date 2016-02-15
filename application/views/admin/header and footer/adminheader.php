<html>
<head>
    <title><?=$title?></title>

    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/bootstrap-3.3.5-dist/css/bootstrap.min.css" />
    <link href="<?=base_url()?>assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="<?=base_url()?>assets/css/heroic-features.css" rel="stylesheet" type="text/css">
    <link href="<?=base_url()?>assets/css/itecm_custom.css" rel="stylesheet" type="text/css">

    <!-- SCRIPTS - START -->
    <script type="text/javascript" src="<?=base_url()?>assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="<?=base_url()?>assets/bootstrap-3.3.5-dist/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?=base_url()?>assets/js/itecm_custom.js"></script>
    <!-- SCRIPTS - END -->
</head>
<body>
<!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?=base_url()?>admin/home">
                <?php
                if(isset($_SESSION['logged_in'])){
                    echo '<i class="fa fa-user"></i> '.$_SESSION['firstname'];
                }
                ?>
            </a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
<!--                <li>-->
<!--                    <a href="#">About</a>-->
<!--                </li>-->
<!--                <li>-->
<!--                    <a href="#">Services</a>-->
<!--                </li>-->
<!--                <li>-->
<!--                    <a href="#">Contact</a>-->
<!--                </li>-->
                <li>
                    <a href="<?=base_url()?>admin/logout"><i class="fa fa-power-off"></i> Logout</a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>