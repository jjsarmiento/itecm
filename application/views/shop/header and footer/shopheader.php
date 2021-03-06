<html>
    <head>
        <title><?=$title?></title>

        <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/bootstrap-3.3.5-dist/css/bootstrap.min.css" />
        <link href="<?=base_url()?>assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href="<?=base_url()?>assets/css/heroic-features.css" rel="stylesheet" type="text/css">
        <link href="<?=base_url()?>assets/css/itecm_custom.css" rel="stylesheet" type="text/css">
        <link href="<?=base_url()?>assets/css/jquery-ui.css" rel="stylesheet">

        <!-- SCRIPTS - START -->
        <script type="text/javascript" src="<?=base_url()?>assets/js/jquery.min.js"></script>
        <script type="text/javascript" src="<?=base_url()?>assets/js/jquery-ui.js"></script>
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
                <a class="navbar-brand" href="<?=base_url()?>shop/userProfile">
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
                    <li>
                        <a href="<?=base_url()?>shop/home"><i class="fa fa-home"></i> Home</a>
                    </li>
                    <?php
                        if(@$_SESSION['logged_in']){
                    ?>
                            <li>
                                <a href="<?=base_url()?>shop/addBook"><span class="nav-item-bold"><i class="fa fa-plus"></i> SELL BOOK</span></a>
                            </li>
                            <li>
                                <a href="<?=base_url()?>shop/logout"><i class="fa fa-power-off"></i> Logout</a>
                            </li>
                    <?php
                        }else{
                    ?>
                            <li>
                                <a href="#" data-toggle="modal" data-target="#loginModal"><i class="fa fa-power-off"></i> Login</a>
                            </li>
                            <li>
                                <a href="#" data-toggle="modal" data-target="#registerModal"><span class="nav-item-bold"><i class="fa fa-plus"></i> SELL A BOOK NOW!</span></a>
                            </li>
                    <?php
                        }
                    ?>

                    <?php
                        if(@$_SESSION['id']){
                            ?>
                            <li>
                                <a href="<?=base_url()?>shop/viewBookMarks">
                                    <i class="fa fa-bookmark"></i>
                                    Bookmarks
                                    <?php
                                    if(@$bookmark_count > 0){
                                        echo '<span style="background-color: firebrick;" class="badge">'.$bookmark_count.'</span>';
                                    }
                                    ?>
                                </a>
                            </li>
                            <li>
                                <a href="<?=base_url()?>shop/payment"><i class="fa fa-credit-card" style="color: gold;"></i> Payment</a>
                            </li>
                            <?php
                        }
                    ?>

                    <li>
                        <a href="<?=base_url()?>"><i class="fa fa-heart" style="color: red;"></i> About Us</a>
                    </li>
                </ul>

                <div class="col-sm-4 col-md-4">
                    <form class="navbar-form" role="search" method="POST" action="<?=base_url()?>shop/search">
                        <div class="input-group">
                            <input value="<?=@$keyword?>" type="text" class="form-control" placeholder="Title / Author" name="searchKeyword" id="searchKeyword" required="required">
                            <div class="input-group-btn">
                                <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i> Search</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    <!-- Page Content -->
    <div class="container">