<div class="row">
    <div class="col-md-4 col-lg-4 col-sm-4 col-xs-4 well" style="text-align: justify; border : 1px solid #f5f5f5 !important;">
        <h2><?=$_SESSION['firstname']?> <?=$user->lastname?></h2>
        <div class="thumbnailx"  style="height: 170px;">
            <img class="prod-img" src="<?=$user->disp_pic?>" />
        </div>

        <div class="form-group" style="text-align: justify;">
            <?=$user->about?>
        </div>

        <div class="form-group">
            <i class="fa fa-map-marker" style="color: #3498DB;"></i> <?=$user->address?>
        </div>

        <div class="form-group">
            <i class="fa fa-phone" style="color: #3498DB;"></i> <?=$user->contact?>
        </div>

        <span style="color: #3498DB; font-size: 2em;">
            <?php
                if($user->gender == 'MALE'){
                    echo "<i class='fa fa-male'></i>";
                }else{
                    echo "<i class='fa fa-female'></i>";

                }
            ?>
        </span>
    </div>

    <div class="col-md-8 col-lg-8 col-sm-8 col-xs-8">
        <?=form_open_multipart('shop/doEditProfile')?>
            <h3><i class="fa fa-edit"></i> Edit Information</h3>
            <hr/>
            <?php
                if(@$_SESSION['errorMsg']){
                    echo "<center><h3 style='color: red;'><i class='fa fa-warning'></i>".$_SESSION['errorMsg']."</h3></center>";
                }

                if(@$_SESSION['successMsg']){
                    echo "<center><h3 style='color: green;'><i class='fa fa-check'></i>".$_SESSION['successMsg']."</h3></center>";
                }
            ?>
            <div class="row">
                <div class="col-md-6 col-lg-6 col-sm-6">
                    <center><h4><i class="fa fa-user"></i> Personal Information</h4></center>
                    <div class="form-group">
                        <label for="editFname">First Name</label>
                        <input class="form-control" type="text" id="editFname" name="editFname" value="<?=$user->firstname?>" required="required" />
                    </div>
                    <div class="form-group">
                        <label for="editLname">Last Name</label>
                        <input class="form-control" type="text" id="editLname" name="editLname" value="<?=$user->lastname?>" required="required" />
                    </div>
                    <div class="form-group">
                        <label for="editAbout">About you</label>
                        <textarea id="editAbout" name="editAbout" class="form-control" rows="8" required="required"><?=$user->about?></textarea>
                    </div>
                    <div class="form-group">
                        <label for="editAddress">Address</label>
                        <textarea id="editAddress" name="editAddress" class="form-control" rows="8" required="required"><?=$user->address?></textarea>
                    </div>
                    <div class="form-group">
                        <label for="editContact">Contact Number</label>
                        <input class="form-control" type="text" id="editContact" name="editContact" value="<?=$user->contact?>"  required="required"/>
                    </div>
                    <div class="form-group">
                        <label for="editGender">Gender</label>
                        <select id="editGender" name="editGender" class="form-control" required="required">
                            <option value="FEMALE" <?php if($user->gender == 'FEMALE'){echo "selected='selected'";} ?>>Female</option>
                            <option value="MALE" <?php if($user->gender == 'MALE'){echo "selected='selected'";} ?>>Male</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="editBdate">Birth Date</label>
                        <input type="text" class="form-control" id="editBdate" name="editBdate" placeholder="Birthdate" value="<?=$user->birthday?>" readonly />
                    </div>
                    <div class="well">
                        <?php
                        if(isset($_SESSION['errorMsg'])){
                            echo '<span style="color: red;"><i class="fa fa-warning"></i> '.$_SESSION['errorMsg'].'</span><br/><br/>';
                            unset($_SESSION['errorMsg']);
                        }
                        ?>
                        Upload Profile Picture<Br/>
                        <span style="color: #7F8C8D; font-size: 0.9em;">
                            <span style="color:red">*</span> Image file size must be below 4mb<br/>
                            <span style="">*</span> Recommended dimensions must be 320x150 Width = 320, Height = 150
                        </span>
                        <br/>
                        <br/>
                        <input class="form-control" name="editDPic" type="file" accept="image/*"/>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-sm-6 well">

                    <center><h4><i class="fa fa-globe"></i> Account Information</h4></center>
                    <div class="form-group">
                        <label for="editEmail">Email</label>
                        <input class="form-control" type="text" id="editEmail" name="editEmail" value="<?=$user->email?>"  required="required" />
                    </div>
                    <a href="#" data-toggle="modal" data-target="#changePass">Change Password</a>
                </div>
            </div>
            <button type="submit" class="btn pull-right btn-primary">Save Edit</button>
        </form>
    </div>
</div>