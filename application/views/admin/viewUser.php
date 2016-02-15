<div class="container">
    <div class="row">
        <div class="col-md-4 col-sm-4 col-lg-4">
            <h3>
                <i class="fa fa-user"></i> Profile for <span style="color: #3498DB;"><?=$user->firstname?> <?=$user->lastname?></span>
                <?php
                if($user->status == 'DEACTIVATED'){
                    echo '<span style="color: #C0392B;">[ACCOUNT DEACTIVATED]</span>';
                }
                ?>
            </h3>
            <hr/>
            <div class="thumbnailx"  style="height: 170px;">
                <img class="prod-img" src="<?=$user->disp_pic?>" />
            </div>
            <i style="color: #2980B9;" class="fa fa-envelope"></i> <?=$user->email?><br/><br/>
            <i style="color: #2980B9;" class="fa fa-key"></i> <?=$user->type?><br/><br/>
            <i style="color: #2980B9;" class="fa fa-map-marker"></i> <?=$user->address?><br/><br/>
            <i style="color: #2980B9;" class="fa fa-mobile"></i> <?=$user->contact?><br/><br/>
            <i style="color: #2980B9;" class="fa fa-info"></i> <?=$user->about?>
            <hr/>

            <a href="#" class="btn btn-default btn-block" data-toggle="modal" data-target="#changePass">Change Password</a>
            <?php
            if($user->status == 'ACTIVATED'){
                ?>
                <a href="<?=base_url()?>admin/deactivate/<?=$user->id?>" class="btn btn-danger btn-block">DEACTIVATE ACCOUNT</a>
            <?php
            }else{
                ?>
                <a href="<?=base_url()?>admin/activate/<?=$user->id?>" class="btn btn-success btn-block">ACTIVATE ACCOUNT</a>
            <?php
            }
            ?>
        </div>
        <div class="col-md-4 col-sm-4 col-lg-4">
            <h3><i class="fa fa-pencil"></i> User reviews received <span style="background-color: firebrick;" class="badge"><?=count($for_reviews)?></span></h3>
            <hr/>

            <?php
            if(count($for_reviews) == 0){
                echo "<i>No user reviews available.</i>";
            }
            foreach($for_reviews as $r){
                ?>
                <div class="form-group" style="text-align: justify; background-color: #ECF0F1; padding: 0.6em; margin-bottom: 0.6em;">
                    <span class="pull-right">
                        <a href="<?=base_url()?>admin/deleteUserReview/<?=$r['id']?>"><i class="fa fa-close"></i></a>
                    </span>
                    <hr style="margin: .5em; visibility: hidden;"/>
                    <span class="review-name-tag"><a href="<?=base_url()?>admin/viewUser/<?=$r['reviewer_id']?>"><?=$r['firstname'].' '.$r['lastname']?></a></span>
                    <?=$r['content']?>
                    <Hr style="margin-top: 0.3em; margin-bottom: 0.3em;"/>
                    <span class="review-name-tag" style="font-size: 0.8em;"><i class="fa fa-clock-o"></i> <?=$r['created_at']?></span>
                </div>
            <?php
            }
            ?>
        </div>

        <div class="col-md-4 col-sm-4 col-lg-4">
            <h3><i class="fa fa-pencil"></i> User reviews made <span style="background-color: firebrick;" class="badge"><?=count($by_reviews)?></span></h3>
            <hr/>
            <?php
            if(count($by_reviews) == 0){
                echo "<i>No user reviews available.</i>";
            }
            foreach($by_reviews as $r){
                ?>
                <div class="form-group" style="text-align: justify; background-color: #ECF0F1; padding: 0.6em; margin-bottom: 0.6em;">
                    <span class="pull-right">
                        <a href="<?=base_url()?>admin/deleteUserReview/<?=$r['id']?>"><i class="fa fa-close"></i></a>
                    </span>
                        <hr style="margin: .5em; visibility: hidden;"/>
                    <span class="review-name-tag"><a href="<?=base_url()?>admin/viewUser/<?=$r['reviewee_id']?>">@<?=$r['firstname'].' '.$r['lastname']?></a></span>
                    <?=$r['content']?>
                    <Hr style="margin-top: 0.3em; margin-bottom: 0.3em;"/>
                    <span class="review-name-tag" style="font-size: 0.8em;"><i class="fa fa-clock-o"></i> <?=$r['created_at']?></span>
                </div>
            <?php
            }
            ?>
        </div>
    </div>
    <hr/>
    <div class="row">
        <div class="col-md-6 col-lg-6 col-sm-6">
            <h3><i class="fa fa-book"></i> Ads Posted</h3>
            <hr/>
            <?php
            if(count($products) == 0){
                echo '<center><i><h3>No data available</h3></i></center>';
            }else{
                foreach($products as $product){
                    ?>
                    <div class="col-sm-3 col-lg-3 col-md-3">
                        <div class="thumbnail">
                            <div class="thumbnailx">
                                <img src="<?=$product->img?>" style="" alt="">
                            </div>
                            <div class="caption-ownad">
                                <h4><a href="<?=base_url().'admin/viewProduct/'.$product->id?>"><?=$product->title?></a></h4>
                                <span style="font-weight: bold;">P<?=$product->price?>.00</span>
                                <p style="margin-top: 0.3em;"><?=$product->description?></p>
                            </div>
                            <?php
                            if($_SESSION['id'] == $user->id){
                                ?>
                                <div class="ratings">
                                    <hr style="margin-bottom: 0.3em; margin-top: 0.4em;"/>
                                    <div class="btn-group btn-group-justified" role="group">
                                        <a href="<?=base_url()?>admin/editAd/<?=$product->id?>" class="btn btn-success btn-block btn-xs"><i class="fa fa-edit"></i></a>
                                        <a href="<?=base_url()?>admin/deleteAd/<?=$product->id?>" class="btn btn-danger btn-block btn-xs"><i class="fa fa-trash"></i></a>
                                    </div>
                                </div>
                            <?php
                            }
                            ?>
                        </div>
                    </div>

                <?php
                }
            }
            ?>
        </div>
        <div class="col-md-6 col-lg-6 col-sm-6">
            <h3><i class="fa fa-bookmark"></i> Bookmarked Ads</h3>
            <hr/>
            <?php
            if(count($ads) == 0){
                echo '<center><i>No data available</i></center>';
            }

            foreach($ads as $ad){
                ?>
                <div class="col-sm-3 col-lg-3 col-md-3">
                    <div class="thumbnail">
                        <div class="thumbnailx">
                            <img src="<?=$ad['img']?>" style="" alt="">
                        </div>
                        <div class="caption-ownad">
                            <h4><a href="<?=base_url().'admin/viewProduct/'.$ad['ad_id']?>"><?=$ad['title']?></a></h4>
                            <span style="font-weight: bold;">P<?=$ad['price']?>.00</span>
                            <p style="margin-top: 0.3em;"><?=$ad['description']?></p>
                        </div>
                    </div>
                </div>

            <?php
            }
            ?>
        </div>
    </div>
</div>