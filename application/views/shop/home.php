

    <!-- Jumbotron Header -->
    <header class="jumbotron hero-spacer">
        <h1>Read and let read!</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa, ipsam, eligendi, in quo sunt possimus non incidunt odit vero aliquid similique quaerat nam nobis illo aspernatur vitae fugiat numquam repellat.</p>
<!--        <p><a class="btn btn-primary btn-large">Call to action!</a>-->
<!--        </p>-->
    </header>

    <hr>

    <!-- Title -->
<!--    <div class="row">-->
<!--        <div class="col-lg-12">-->
<!--            <h3>Latest Features</h3>-->
<!--        </div>-->
<!--    </div>-->
    <!-- /.row -->

    <!-- Page Features -->
    <div class="row text-center">
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
                </div>
            </div>

        <?php
        }
        ?>
<!---->
<!--        <div class="col-md-3 col-sm-6 hero-feature">-->
<!--            <div class="thumbnail">-->
<!--                <div class="thumbnailx">-->
<!--                    <img src="--><?//=base_url()?><!--assets/uploads/1.jpg" alt="">-->
<!--                </div>-->
<!--                <div class="caption">-->
<!--                    <h3>Feature Label</h3>-->
<!--                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>-->
<!--                    <p>-->
<!--                        <a href="#" class="btn btn-primary">Buy Now!</a> <a href="#" class="btn btn-default">More Info</a>-->
<!--                    </p>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!---->
<!--        <div class="col-md-3 col-sm-6 hero-feature">-->
<!--            <div class="thumbnail">-->
<!--                <div class="thumbnailx">-->
<!--                    <img src="--><?//=base_url()?><!--assets/uploads/2.jpg" alt="">-->
<!--                </div>-->
<!--                <div class="caption">-->
<!--                    <h3>Feature Label</h3>-->
<!--                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>-->
<!--                    <p>-->
<!--                        <a href="#" class="btn btn-primary">Buy Now!</a> <a href="#" class="btn btn-default">More Info</a>-->
<!--                    </p>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!---->
<!--        <div class="col-md-3 col-sm-6 hero-feature">-->
<!--            <div class="thumbnail">-->
<!--                <div class="thumbnailx">-->
<!--                    <img src="--><?//=base_url()?><!--assets/uploads/3.jpg" alt="">-->
<!--                </div>-->
<!--                <div class="caption">-->
<!--                    <h3>Feature Label</h3>-->
<!--                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>-->
<!--                    <p>-->
<!--                        <a href="#" class="btn btn-primary">Buy Now!</a> <a href="#" class="btn btn-default">More Info</a>-->
<!--                    </p>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!---->
<!--        <div class="col-md-3 col-sm-6 hero-feature">-->
<!--            <div class="thumbnail">-->
<!--                <div class="thumbnailx">-->
<!--                    <img src="--><?//=base_url()?><!--assets/uploads/4.jpg" alt="">-->
<!--                </div>-->
<!--                <div class="caption">-->
<!--                    <h3>Feature Label</h3>-->
<!--                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>-->
<!--                    <p>-->
<!--                        <a href="#" class="btn btn-primary">Buy Now!</a> <a href="#" class="btn btn-default">More Info</a>-->
<!--                    </p>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!---->
<!--        <div class="col-md-3 col-sm-6 hero-feature">-->
<!--            <div class="thumbnail">-->
<!--                <img src="--><?//=base_url()?><!--assets/img/800x500sample.png" alt="">-->
<!--                <div class="caption">-->
<!--                    <h3>Feature Label</h3>-->
<!--                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>-->
<!--                    <p>-->
<!--                        <a href="#" class="btn btn-primary">Buy Now!</a> <a href="#" class="btn btn-default">More Info</a>-->
<!--                    </p>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!---->
<!--        <div class="col-md-3 col-sm-6 hero-feature">-->
<!--            <div class="thumbnail">-->
<!--                <img src="--><?//=base_url()?><!--assets/img/800x500sample.png" alt="">-->
<!--                <div class="caption">-->
<!--                    <h3>Feature Label</h3>-->
<!--                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>-->
<!--                    <p>-->
<!--                        <a href="#" class="btn btn-primary">Buy Now!</a> <a href="#" class="btn btn-default">More Info</a>-->
<!--                    </p>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->

    </div>
    <!-- /.row -->
