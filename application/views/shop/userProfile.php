<div class="row">
    <div class="col-md-4 col-lg-4 col-sm-4 col-xs-4 well" style="text-align: justify; border : 1px solid #f5f5f5 !important;">
<!--        <h3><i class="fa fa-user"></i> Profile</h3>-->
<!--        <hr/>-->
        <div class="thumbnailx"  style="height: 170px;">
            <img class="prod-img" src="<?=$user->disp_pic?>" />
        </div>

        <center>
            <h2>
                <?=$user->firstname?> <?=$user->lastname?>
                <?php
                if($_SESSION['id'] == $user->id){
                    echo '<button class="btn btn-xs btn-default pull-right"><i class="fa fa-edit"></i> Edit Profile</button>';
                }
                ?>
            </h2>
        </center>



        <div class="form-group" style="text-align: justify;">
            <?=$user->about?>
        </div>

        <div class="form-group">
            <i class="fa fa-map-marker" style="color: #3498DB;"></i> <?=$user->address?>
        </div>

        <div class="form-group">
            <i class="fa fa-phone" style="color: #3498DB;"></i> <?=$user->contact?>
        </div>

        <hr/>
        <h3>
            <i class="fa fa-pencil"></i> Reviews
            <?php
            if($_SESSION['id'] != $user->id){
                echo '<button data-target="#reviewUser" data-toggle="modal" class="btn btn-xs btn-default pull-right"><i class="fa fa-edit"></i> Give '. $user->firstname.' '. $user->lastname .' a review</button>';
            }
            ?>
        </h3>
        <?php
        if(count($reviews) == 0){
            echo "<i>No user reviews available.</i>";
        }
        foreach($reviews as $r){
            ?>
            <div class="form-group" style="text-align: justify; background-color: white; padding: 0.6em;">
                <?php
                if(@$_SESSION['id'] == $r['reviewer_id'] || @$_SESSION['id'] == $r['reviewee_id']){
                    ?>
                    <span class="pull-right">
                                                        <a href="<?=base_url()?>shop/deleteUserReview/<?=$r['id']?>"><i class="fa fa-trash"></i></a>
                                                    </span>
                    <hr style="margin: .5em; visibility: hidden;"/>
                <?php
                }
                ?>
                <span class="review-name-tag"><a href="<?=base_url()?>shop/viewUser/<?=$r['reviewer_id']?>"><?=$r['reviewer_fullname']?></a></span>
                <?=$r['content']?>
                <Hr style="margin-top: 0.3em; margin-bottom: 0.3em;"/>
                <span class="review-name-tag" style="font-size: 0.8em;"><i class="fa fa-clock-o"></i> <?=$r['created_at']?></span>
            </div>
        <?php
        }
        ?>
    </div>

    <div class="col-md-8 col-lg-8 col-sm-8 col-xs-8">
        <?php
        if(isset($_SESSION['successMsg'])){
            echo '<div style="padding : 0.8em;"><span style="color: #2ECC71; font-size : 1.4em;">'.$_SESSION['successMsg'].'</span></div>';
            unset($_SESSION['successMsg']);
        }
        ?>
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
                            <h4><a href="<?=base_url().'shop/viewProduct/'.$product->id?>"><?=$product->title?></a></h4>
                            <span style="font-weight: bold;">P<?=$product->price?>.00</span>
                            <p style="margin-top: 0.3em;"><?=$product->description?></p>
                        </div>
                        <?php
                            if($_SESSION['id'] == $user->id){
                                ?>
                                <div class="ratings">
                                    <hr style="margin-bottom: 0.3em; margin-top: 0.4em;"/>
                                    <div class="btn-group btn-group-justified" role="group">
                                        <a href="<?=base_url()?>shop/editAd/<?=$product->id?>" class="btn btn-success btn-block btn-xs"><i class="fa fa-edit"></i></a>
                                        <a href="<?=base_url()?>shop/deleteAd/<?=$product->id?>" class="btn btn-danger btn-block btn-xs"><i class="fa fa-trash"></i></a>
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
</div>