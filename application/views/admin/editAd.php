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
                <form method="POST" action="<?=base_url()?>admin/doEdit/<?=$prod['id']?>">
                    <h3>
                        <div class="form-group">
                            <span style="color: red;">*</span>Title
                            <input type="text" class="form-control" value="<?=$prod['title']?>" required="required" id="bookTitle" name="bookTitle" />
                        </div>

                        <div class="form-group">
                            <span style="color: red;">*</span>Author
                            <input type="text" class="form-control" value="<?=$prod['author']?>" required="required" id="bookAuthor" name="bookAuthor" />
                        </div>
                    </h3>
                    <!--                <a href="#"><i class="fa fa-edit"></i></a>-->
                    <!--                <a href="#"><i class="fa fa-trash"></i></a>-->
                    <hr/>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="thumbnailx" style="height: 250px;">
                                <img class="prod-img" src="<?=$prod['img']?>">
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="row">
                                <div class="col-md-9">
                                    <span style="color: red;">*</span>Description
                                    <textarea class="form-control" rows="10" id="bookDesc" name="bookDesc"><?=trim($prod['description'])?></textarea>
                                </div>
                                <div class="col-md-3">
                                    <span style="color: red;">*</span>Price
                                    <input type="text" class="form-control" value="<?=$prod['price']?>" name="bookPrice" id="bookPrice" />
                                </div>
                            </div>
                            <hr/>
                            <span class="pull-right">
                                <button type="submit" class="btn btn-success"><i class="fa fa-edit"></i> Save Edit</button>
                            </span>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>