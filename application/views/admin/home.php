<!-- Page Content -->
<div class="container">

    <div class="row">

        <div class="col-md-3">
<!--            <p class="lead">Shop Name</p>-->
            <div class="list-group">
                <a href="<?=base_url()?>admin/home" class="list-group-item"><i class="fa fa-cubes"></i> Manage Advertisments</a>
<!--                <a href="--><?//=base_url()?><!--admin/addProduct" class="list-group-item"><i class="fa fa-plus"></i> Add Product</a>-->
                <a href="<?=base_url()?>admin/manageUsers" class="list-group-item"><i class="fa fa-users"></i> Manage Users</a>
            </div>
        </div>

        <div class="col-md-9">
            <div class="row">
                <h3><i class="fa fa-cubes"></i> Manage Advertisments</h3>
                <hr/>
                <?php
                    if(count($products) == 0){
                        echo '<center><i><h3>No data available</h3></i></center>';
                    }

                    foreach($products as $product){
                ?>
                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <div class="thumbnailx">
                                <img src="<?=$product->img?>" alt="">
                            </div>
                            <div class="caption-ownad">
                                <h4 class="pull-right">P<?=$product->price?></h4>
                                <h4><a target="_tab" href="<?=base_url()?>admin/viewProduct/<?=$product->id?>"><?=$product->title?></a>
                                </h4>
                                <p><?=$product->description?></p>
                            </div>
                            <div class="ratings">
                                <hr/>
                                <p class="pull-right">15 reviews</p>
                                <p>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                </p>
                            </div>
                        </div>
                    </div>
                <?php
                    }
                ?>

<!--                <div class="col-sm-4 col-lg-4 col-md-4">-->
<!--                    <div class="thumbnail">-->
<!--                        <img src="--><?//=base_url()?><!--assets/img/320x150.png" alt="">-->
<!--                        <div class="caption">-->
<!--                            <h4 class="pull-right">$24.99</h4>-->
<!--                            <h4><a href="#">First Product</a>-->
<!--                            </h4>-->
<!--                            <p>See more snippets like this online store item at <a target="_blank" href="http://www.bootsnipp.com">Bootsnipp - http://bootsnipp.com</a>.</p>-->
<!--                        </div>-->
<!--                        <div class="ratings">-->
<!--                            <p class="pull-right">15 reviews</p>-->
<!--                            <p>-->
<!--                                <span class="glyphicon glyphicon-star"></span>-->
<!--                                <span class="glyphicon glyphicon-star"></span>-->
<!--                                <span class="glyphicon glyphicon-star"></span>-->
<!--                                <span class="glyphicon glyphicon-star"></span>-->
<!--                                <span class="glyphicon glyphicon-star"></span>-->
<!--                            </p>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->

<!--                <div class="col-sm-4 col-lg-4 col-md-4">-->
<!--                    <h4><a href="#">Like this template?</a>-->
<!--                    </h4>-->
<!--                    <p>If you like this template, then check out <a target="_blank" href="http://maxoffsky.com/code-blog/laravel-shop-tutorial-1-building-a-review-system/">this tutorial</a> on how to build a working review system for your online store!</p>-->
<!--                    <a class="btn btn-primary" target="_blank" href="http://maxoffsky.com/code-blog/laravel-shop-tutorial-1-building-a-review-system/">View Tutorial</a>-->
<!--                </div>-->

            </div>

        </div>

    </div>

</div>
<!-- /.container -->