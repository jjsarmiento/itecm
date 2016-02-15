<!-- Page Content -->
<div class="container">

    <div class="row">

        <div class="col-md-3">
<!--            <p class="lead">Shop Name</p>-->
            <div class="list-group">
                <a href="<?=base_url()?>admin/home" class="list-group-item"><i class="fa fa-cubes"></i> Manage Advertisments</a>
<!--                <a href="--><?//=base_url()?><!--admin/addProduct" class="list-group-item"><i class="fa fa-plus"></i> Add Product</a>-->
                <a href="<?=base_url()?>admin/manageUsers" class="list-group-item"><i class="fa fa-users"></i> Manage Users</a>

                <hr/>
                <form method="POST" action="<?=base_url()?>admin/searchBook">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search for Title/Author" name="adSearch" id="adSearch" required="required">
                        <div class="input-group-btn">
                            <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i> Go</button>
                        </div>
                    </div>
                </form>

                <form method="POST" action="<?=base_url()?>admin/searchBook">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search for users" name="userSearch" id="userSearch" required="required">
                        <div class="input-group-btn">
                            <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i> Go</button>
                        </div>
                    </div>
                </form>

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
                        </div>
                    </div>
                <?php
                    }
                ?>

            </div>

        </div>

    </div>

</div>
<!-- /.container -->