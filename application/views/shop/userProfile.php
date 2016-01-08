<div class="row">
        <h3><i class="fa fa-heart"></i> My Ads</h3>
        <hr/>
    <?php
    if(isset($_SESSION['successMsg'])){
        echo '<div style="padding : 0.8em;"><span style="color: #2ECC71; font-size : 1.4em;">'.$_SESSION['successMsg'].'</span></div>';
        unset($_SESSION['successMsg']);
    }
    ?>

    <?php
    if(count($products) == 0){
        echo '<center><i><h3>No data available</h3></i></center>';
    }

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
                        <a href="<?=base_url()?>shop/editAd/<?=$product->id?>" class="btn btn-success btn-block"><i class="fa fa-edit"></i> EDIT</a>
                        <a href="<?=base_url()?>shop/deleteAd/<?=$product->id?>" class="btn btn-danger btn-block"><i class="fa fa-trash"></i> DELETE</a>
                    </div>
                </div>
            </div>
        </div>

    <?php
    }
    ?>
</div>