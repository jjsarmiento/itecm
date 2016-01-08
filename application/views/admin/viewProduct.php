<style>
    .prod-img {
        background-color: black;
        max-width: 100%;
        max-height: 30em;
        border: 1px solid #BDC3C7;
        border-radius: 0.3em;
        /*background-color: #000000;*/
    }
</style>
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
                            <a href="<?=base_url()?>admin/editAd/<?=$prod['id']?>" class="btn btn-success"><i class="fa fa-edit"></i> EDIT AD</a>
                            <a href="<?=base_url()?>admin/deleteAd/<?=$prod['id']?>" class="btn btn-danger"><i class="fa fa-trash"></i> DELETE AD</a>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>