<div class="row">
    <?=form_open_multipart('shop/doAddProduct')?>
        <div class="col-md-4">
            <h3 style=""><i class="fa fa-bookmark"></i> Book Information</h3>
            <hr/>
                <div class="well">
                    <?php
                    if(isset($_SESSION['errorMsg'])){
                        echo '<span style="color: red;"><i class="fa fa-warning"></i> '.$_SESSION['errorMsg'].'</span><br/><br/>';
                        unset($_SESSION['errorMsg']);
                    }
                    ?>
                    Upload Product Image<Br/>
                                <span style="color: #7F8C8D; font-size: 0.9em;">
                                    <span style="color:red">*</span> Image file size must be below 4mb<br/>
                                    <span style="">*</span> Recommended dimensions must be 320x150 Width = 320, Height = 150
                                </span>
                    <br/>
                    <br/>
                    <input class="form-control" name="prodImg" type="file" accept="image/*" required="required"/>
                </div>
        </div>

        <div class="col-md-8">
            <h3 style="visibility: hidden;"><i class="fa fa-book"></i> Book Information</h3>
            <hr/>
            <div class="form-group">
                <input type="text" class="form-control" id="bookTitle" name="bookTitle" placeholder="Title" required="required">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" id="bookAuthor" name="bookAuthor" placeholder="Author" required="required">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" id="bookPrice" name="bookPrice" placeholder="Price" required="required">
            </div>
            <div class="form-group">
                <textarea name="description" id="description" class="form-control" placeholder="Give a few words about your book!" required="required"></textarea>
            </div>
            <div class="form-group">
                <input type="radio" id="bNew" name="bookStatus"> Brand New
            </div>
            <div class="form-group">
                <input type="radio" id="sHand" name="bookStatus"> Second Hand
            </div>
            <hr/>
            <div class="form-group pull-right">
                <button type="submit" class="btn btn-primary"><i class="fa fa-plus"></i> Post Book Ad</button>
            </div>
        </div>
    </form>
</div>