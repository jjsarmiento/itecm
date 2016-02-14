<div class="container">
    <div class="row">
        <h3 style="margin-bottom: 0;"><?=$prod['title']?></h3>
        <span>by <?=$prod['author']?></span>
        <hr/>
        <div class="col-md-8">
            <div class="row">
                <div class="row">
                    <div class="col-md-4">
                        <div class="thumbnailx"  style="height: 250px;">
                            <img class="prod-img" src="<?=$prod['img']?>">
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-md-9">
                                <?=$prod['description']?>
                            </div>
                            <div class="col-md-3">
                                <span style="color: #2980B9; font-weight: bold; font-size: 1.4em;">P<?=$prod['price']?><br/></span>
                            </div>
                        </div>
                        <hr/>

                        <?php
                            if(count($reviews) == 0){
                                echo "<i>No Reviews Yet.</i>";
                            }

                        //var_dump($reviews);
                            for($i = 0; $i < count($reviews); $i++){
                                ?>
                                <div class="row">
                                    <div class="col-md-12" style="margin-bottom: 0.8em;">
                                        <div style="background-color : #ECF0F1; padding: 0.6em; text-align: justify;">
                                            <span class="review-name-tag"><a href="<?=base_url()?>shop/viewUser/<?=$reviews[$i]['user_id']?>"><?=$reviews[$i]['user_fullname']?></a></span>
                                            <?=$reviews[$i]['content']?>
                                            <Hr style="margin-top: 0.3em; margin-bottom: 0.3em;"/>
                                            <span class="review-name-tag"><i class="fa fa-clock-o"></i> <?=$reviews[$i]['created_at']?></span>
                                        </div>
                                    </div>
                                </div>
                                <?php
                            }
                        ?>

                        <!--
                        <div class="row">
                            <div class="col-md-12" style="margin-bottom: 0.8em;">
                                <div style="background-color : #ECF0F1; padding: 0.6em;">
                                    <span class="review-name-tag">Jan Sarmiento</span>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
                                    <Hr style="margin-top: 0.3em; margin-bottom: 0.3em;"/>
                                    <span class="review-name-tag"><i class="fa fa-clock-o"></i> 20:18:10</span>
                                </div>
                            </div>
                        </div>
                        -->
                        <div class="row" style="margin-top: 1em;">
                        <span class="pull-right">
                            <?php
                            if($prod['user_id'] == @$_SESSION['id']){
                                ?>
                                <a href="<?=base_url()?>shop/editAd/<?=$prod['id']?>" class="btn btn-success"><i class="fa fa-edit"></i> EDIT AD</a>
                                <a href="<?=base_url()?>shop/deleteAd/<?=$prod['id']?>" class="btn btn-danger"><i class="fa fa-trash"></i> DELETE AD</a>
                            <?php
                            }
                            ?>
                        </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <form method="POST" action="<?=base_url()?>shop/addReview/<?=$prod['id']?>">
            <div class="col-md-4">
                <div class="form-group">
                    <textarea class="form-control" rows="15" placeholder="Add A Review for <?=$prod['title']?>" id="review" name="review"></textarea>
                </div>
                <button type="submit" class="btn btn-primary btn-xs pull-right">Post Review</button>
            </div>
        </form>
    </div>
</div>