<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h3><i class="fa fa-bookmark"></i> Bookmarks</h3>

            <div class="row text-center">
                <?php
                if(count($ads) == 0){
                    echo "<center><i>You haven't bookmarked any ads yet</i></center>";
                }

                foreach($ads as $ad){
                    ?>
                    <div class="col-sm-3 col-lg-3 col-md-3">
                        <div class="thumbnail">
                            <div class="thumbnailx">
                                <img src="<?=$ad['img']?>" style="" alt="">
                            </div>
                            <div class="caption-ownad">
                                <h4><a href="<?=base_url().'shop/viewProduct/'.$ad['ad_id']?>"><?=$ad['title']?></a></h4>
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
</div>