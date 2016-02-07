<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="row">
                <h3 style="margin-bottom: 0;"><?=$prod['title']?></h3>
                <span>by <?=$prod['author']?></span>
                <hr/>
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
                        <span class="pull-right">
                            <?php
                                if($prod['user_id'] == $_SESSION['id']){
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
</div>