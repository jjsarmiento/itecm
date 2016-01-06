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
                <div class="caption">
                    <h4><a href="<?=base_url().'Admin/viewProduct/'.$product->id?>"><?=$product->title?></a></h4>
                    <span style="font-weight: bold;">P<?=$product->price?>.00</span>
                    <p style="margin-top: 0.3em;"><?=$product->description?></p>
                </div>
                <div class="ratings">
                    <hr style="margin: 0; margin-top: 0.4em;"/>
                    <p style="padding: 0; margin: 0; margin-top: 0.4em; margin-bottom: 0.4em;">
                        <a class="action-btns action-btns-delete" data-href="<?=base_url()?>Admin/deleteProduct/<?=$product->id?>"><i class="fa fa-trash"></i></a>
                        <a class="action-btns" href="<?=base_url()?>Admin/editProduct/<?=$product->id?>"><i class="fa fa-edit"></i></a>
                    </p>
                </div>
            </div>
        </div>

    <?php
    }
    ?>
</div>