<!-- Page Content -->
<div class="container">

    <div class="row">

        <div class="col-md-3">
            <!--            <p class="lead">Shop Name</p>-->
            <div class="list-group">
                <a href="<?=base_url()?>admin/home" class="list-group-item"><i class="fa fa-cubes"></i> Manage Advertisments</a>
                <!--                <a href="--><?//=base_url()?><!--admin/addProduct" class="list-group-item"><i class="fa fa-plus"></i> Add Product</a>-->
                <a href="<?=base_url()?>admin/manageUsers" class="list-group-item"><i class="fa fa-users"></i> Manage Users</a>

                <hr/>
                <form method="POST" action="<?=base_url()?>admin/searchBook">
                    <div class="input-group">
                        <input  type="text" class="form-control" placeholder="Search for Title/Author" name="adSearch" id="adSearch" required="required">
                        <div class="input-group-btn">
                            <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i> Go</button>
                        </div>
                    </div>
                </form>

                <form method="POST" action="<?=base_url()?>admin/searchUser">
                    <div class="input-group">
                        <input value="<?=@$keyword?>" type="text" class="form-control" placeholder="Search for users" name="adSearch" id="adSearch" required="required">
                        <div class="input-group-btn">
                            <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i> Go</button>
                        </div>
                    </div>
                </form>

            </div>
        </div>

        <div class="col-md-9">
            <div class="row">
                <?php
                if(count($users) == 0){
                    echo '<center><i><h3>No data available</h3></i></center>';
                }else{
                    ?>
                    <h3><i class="fa fa-users"></i> Showing user search results for <span style="color: blue; text-decoration: underline;"><?=@$keyword?></span></h3>
                    <hr/>
                    <table class="table table-responsive table-condensed table-striped table-hover">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Contact</th>
                            <th>Email</th>
                            <th>Acct Type</th>
                            <th>Date Added</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        foreach($users as $user){
                            ?>

                            <tr>
                                <td><a target="_tab" href="<?=base_url()?>admin/viewUser/<?=$user->id?>"><?=$user->firstname?> <?=$user->lastname?></a></td>
                                <td><?=$user->contact?></td>
                                <td><?=$user->email?></td>
                                <td><?=$user->type?></td>
                                <td><?=$user->date_added?></td>
                            </tr>

                        <?php
                        }
                        ?>
                        </tbody>
                    </table>
                <?php
                }
                ?>
            </div>

        </div>

    </div>

</div>
<!-- /.container -->