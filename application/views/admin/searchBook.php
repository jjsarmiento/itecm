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
                        <input value="<?=@$keyword?>" type="text" class="form-control" placeholder="Search for Title/Author" name="adSearch" id="adSearch" required="required">
                        <div class="input-group-btn">
                            <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i> Go</button>
                        </div>
                    </div>
                </form>

                <form method="POST" action="<?=base_url()?>admin/searchUser">
                    <div class="input-group">
                        <input value="" type="text" class="form-control" placeholder="Search for users" name="adSearch" id="adSearch" required="required">
                        <div class="input-group-btn">
                            <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i> Go</button>
                        </div>
                    </div>
                </form>

            </div>
        </div>

        <div class="col-md-9">
            <div class="row">
                <?php
                if(count($by_authors) == 0 && count($by_title) == 0){
                    echo "<center><h3><i class='fa fa-search'></i> No search results for <span style='color: blue; text-decoration : underline;'>".$keyword."</span></h3></center>";
                }else{

                    if(count($by_authors) > 0){
                        echo "<div class='col-md-12'>";
                        echo "<h3>Search results for <span style='color: blue; text-decoration: underline;'>".$keyword."</span> by author</h3><hr/>";
                        foreach($by_authors as $ba){
                            ?>
                            <div class="col-sm-3 col-lg-3 col-md-3">
                                <div class="thumbnail">
                                    <div class="thumbnailx">
                                        <img src="<?=$ba->img?>" style="" alt="">
                                    </div>
                                    <div class="caption-ownad">
                                        <h4><a href="<?=base_url().'admin/viewProduct/'.$ba->id?>"><?=$ba->title?></a></h4>
                                        <span style="font-weight: bold;">by <?=$ba->author?></span><br/>
                                        <span style="font-weight: bold;">P<?=$ba->price?>.00</span>
                                        <p style="margin-top: 0.3em;"><?=$ba->description?></p>
                                    </div>
                                </div>
                            </div>
                        <?php
                        }
                        echo "</div>";
                    }


                    if(count($by_title) > 0){
                        echo "<div class='col-md-12'>";
                        echo "<h3>Search results for <span style='color: blue; text-decoration: underline;'>".$keyword."</span> by title</h3><hr/>";

                        foreach($by_title as $ba){
                            ?>
                            <div class="col-sm-3 col-lg-3 col-md-3">
                                <div class="thumbnail">
                                    <div class="thumbnailx">
                                        <img src="<?=$ba->img?>" style="" alt="">
                                    </div>
                                    <div class="caption-ownad">
                                        <h4><a href="<?=base_url().'admin/viewProduct/'.$ba->id?>"><?=$ba->title?></a></h4>
                                        <span style="font-weight: bold;">by <?=$ba->author?></span><br/>
                                        <span style="font-weight: bold;">P<?=$ba->price?>.00</span>
                                        <p style="margin-top: 0.3em;"><?=$ba->description?></p>
                                    </div>
                                </div>
                            </div>
                        <?php
                        }
                        echo "</div>";
                    }

                }
                ?>
            </div>

        </div>

    </div>

</div>
<!-- /.container -->