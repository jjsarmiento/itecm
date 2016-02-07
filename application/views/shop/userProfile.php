<div class="row">
    <div class="col-md-4 col-lg-4 col-sm-4 col-xs-4 well" style="text-align: justify; border : 1px solid #f5f5f5 !important;">
<!--        <h3><i class="fa fa-user"></i> Profile</h3>-->
<!--        <hr/>-->
        <div class="thumbnailx"  style="height: 170px;">
            <img class="prod-img" src="<?=$user->disp_pic?>" />
        </div>

        <center><h2><?=$user->firstname?> <?=$user->lastname?></h2></center>



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
        <div class="form-group">
            <?php
            if($user->gender == "FEMALE"){
                echo "<i class='fa fa-female' style='font-size : 2em !important; color: #3498DB;'></i>";
            }else{
                echo "<i class='fa fa-male' style='font-size : 3em !important; color: #3498DB;'></i>";
            }
            ?>
        </div>
        <div class="form-group" style="text-align: justify;">
            <button class="btn btn-xs btn-default pull-right"><i class="fa fa-edit"></i> Edit Profile</button>
        </div>
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
                        <div class="ratings">
                            <hr style="margin-bottom: 0.3em; margin-top: 0.4em;"/>
                            <div class="btn-group btn-group-justified" role="group">
                                <a href="<?=base_url()?>shop/editAd/<?=$product->id?>" class="btn btn-success btn-block"><i class="fa fa-edit"></i></a>
                                <a href="<?=base_url()?>shop/deleteAd/<?=$product->id?>" class="btn btn-danger btn-block"><i class="fa fa-trash"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

            <?php
            }
        }
        ?>
    </div>
</div>