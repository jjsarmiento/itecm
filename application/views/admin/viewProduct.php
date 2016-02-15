<div class="container">
    <div class="row">
        <h3 style="margin-bottom: 0;"><?=$prod['title']?></h3>
        <span><?=$prod['author']?></span><br/>
        ad posted by <a href="<?=base_url()?>admin/viewUser/<?=$prod['user_id']?>"><?=$prod['firstname']?> <?=$prod['lastname']?></a>
        <hr/>
        <div class="col-md-8">
            <div class="row">
                <div class="row">
                    <div class="col-md-4">
                        <div class="thumbnailx"  style="height: 250px;">
                            <img class="prod-img" src="<?=$prod['img']?>">
                        </div>
                        <a href="<?=base_url()?>admin/editAd/<?=$prod['id']?>" class="btn btn-success btn-xs"><i class="fa fa-edit"></i> Edit</a>
                        <a href="<?=base_url()?>admin/deleteAd/<?=$prod['id']?>" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i> Delete</a>
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
                                    <div style="background-color : #ECF0F1; padding: 0.8em; text-align: justify;">
                                        <span class="pull-right">
                                                    <a href="<?=base_url()?>admin/deleteComment/<?=$reviews[$i]['id']?>"><i class="fa fa-close"></i></a>
                                                </span>
                                        <hr style="margin: .5em; visibility: hidden;"/>
                                        <span class="review-name-tag"><a href="<?=base_url()?>admin/viewUser/<?=$reviews[$i]['user_id']?>"><?=$reviews[$i]['firstname'].' '.$reviews[$i]['lastname']?></a></span>
                                        <?=$reviews[$i]['content']?>
                                        <Hr style="margin-top: 0.3em; margin-bottom: 0.3em;"/>
                                        <span class="review-name-tag" style="font-size: 0.8em;"><i class="fa fa-clock-o"></i> <?=$reviews[$i]['created_at']?></span>
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

                        </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>