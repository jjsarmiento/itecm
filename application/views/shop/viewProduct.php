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
                <h3><?=$prod['title']?></h3>
                <!--                <a href="#"><i class="fa fa-edit"></i></a>-->
                <!--                <a href="#"><i class="fa fa-trash"></i></a>-->
                <hr/>
                <div class="row">
                    <div class="col-md-4">
                        <img class="prod-img" src="<?=$prod['img']?>">
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
                            <a class="action-btns action-btns-delete" data-href="<?=base_url()?>Admin/deleteProduct/<?=$prod['id']?>"><i class="fa fa-trash"></i></a>
                            <a class="action-btns" href="<?=base_url()?>Admin/editProduct/<?=$prod['id']?>"><i class="fa fa-edit"></i></a>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>