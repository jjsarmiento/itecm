<div class="container">
    <div class="row">
        <?php
            if(count($by_authors) == 0 && count($by_title) == 0){
                echo "<center><h3><i class='fa fa-search'></i> No search results for <span style='color: blue; text-decoration : underline;'>".$keyword."</span></h3></center>";
            }else{

                if(count($by_authors) > 0){
                    echo "<div class='col-md-12'>";
                    echo "<h3>Search results for <span style='color: blue; text-decoration: underline;'>".$keyword."</span> by author</h3><hr/>";
                    foreach($by_authors as $ba){
                        ?>
                        <div class="col-sm-3 col-lg-3 col-md-3">
                            <div class="thumbnail">
                                <div class="thumbnailx">
                                    <img src="<?=$ba->img?>" style="" alt="">
                                </div>
                                <div class="caption-ownad">
                                    <h4><a href="<?=base_url().'shop/viewProduct/'.$ba->id?>"><?=$ba->title?></a></h4>
                                    <span style="font-weight: bold;">by <?=$ba->author?></span><br/>
                                    <span style="font-weight: bold;">P<?=$ba->price?>.00</span>
                                    <p style="margin-top: 0.3em;"><?=$ba->description?></p>
                                </div>
                            </div>
                        </div>
                    <?php
                    }
                    echo "</div>";
                }


                if(count($by_title) > 0){
                    echo "<div class='col-md-12'>";
                    echo "<h3>Search results for <span style='color: blue; text-decoration: underline;'>".$keyword."</span> by title</h3><hr/>";

                    foreach($by_title as $ba){
                        ?>
                        <div class="col-sm-3 col-lg-3 col-md-3">
                            <div class="thumbnail">
                                <div class="thumbnailx">
                                    <img src="<?=$ba->img?>" style="" alt="">
                                </div>
                                <div class="caption-ownad">
                                    <h4><a href="<?=base_url().'shop/viewProduct/'.$ba->id?>"><?=$ba->title?></a></h4>
                                    <span style="font-weight: bold;">by <?=$ba->author?></span><br/>
                                    <span style="font-weight: bold;">P<?=$ba->price?>.00</span>
                                    <p style="margin-top: 0.3em;"><?=$ba->description?></p>
                                </div>
                            </div>
                        </div>
                    <?php
                    }
                    echo "</div>";
                }

            }
        ?>
    </div>
</div>