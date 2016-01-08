<div class="container">
    <div class="row">
        <h3>
            <i class="fa fa-user"></i> Profile for <span style="color: #3498DB;"><?=$user->firstname?> <?=$user->lastname?></span>
            <?php
                if($user->status == 'DEACTIVATED'){
                    echo '<span style="color: #C0392B;">[ACCOUNT DEACTIVATED]</span>';
                }
            ?>
        </h3>
        <div class="col-md-8 col-sm-8 col-lg-8">
            <i style="color: #2980B9;" class="fa fa-key"></i> <?=$user->type?><br/>
            <i style="color: #2980B9;" class="fa fa-map-marker"></i> <?=$user->address?><br/>
            <i style="color: #2980B9;" class="fa fa-mobile"></i> <?=$user->contact?><br/>
            <i style="color: #2980B9;" class="fa fa-bookmark"></i> <?=$user->about?>
        </div>
        <div class="col-md-4 col-sm-4 col-lg-4">
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
    </div>
</div>