
    <hr>

    <!-- Footer -->
    <footer>
        <div class="row">
            <div class="col-lg-12">
                <p>Copyright &copy; Discipulus Bookshop 2015</p>
            </div>
        </div>
    </footer>
    </div>
    <!-- /.container -->

    <!--<form method="POST" action="<?=base_url()?>Main/doRegister">-->
    <?=form_open_multipart('Main/doRegister')?>
        <div class="modal fade" tabindex="-1" role="dialog" id="registerModal">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title">Discipulus Bookshop - Register</h4>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-6">
                                <center><h4><i class="fa fa-user"></i> Personal Information</h4></center>
                                <div class="form-group">
                                    <input type="text" min="4" class="form-control" id="regFirstname" name="regFirstname" placeholder="First Name">
                                </div>
                                <div class="form-group">
                                    <input type="text" min="4" class="form-control" id="regLastname" name="regLastname" placeholder="Last Name">
                                </div>
                                <div class="form-group">
                                    <input type="text" min="4" class="form-control" id="regAddress" name="regAddress" placeholder="Address">
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" id="regAbout" name="regAbout" placeholder="About Me"></textarea>
                                </div>
                                <div class="form-group">
                                    Gender&nbsp;&nbsp;&nbsp;&nbsp;
                                    <input type="radio" name="regGender" id="regGender" value="male" required="required"> Male
                                    <input type="radio" name="regGender" id="regGender" value="female" required="required"> Female<br>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="regBdate" name="regBdate" placeholder="Birthdate" readonly />
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
                                    <input class="form-control" name="regDPic" type="file" accept="image/*" required="required"/>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <center><h4><i class="fa fa-list"></i> Account Information</h4></center>
                                <div class="form-group">
                                    <input type="text" min="11" class="form-control" id="regContact" name="regContact" placeholder="Contact Info">
                                </div>
                                <div class="form-group">
                                    <input type="text" min="4" class="form-control" id="regEmail" name="regEmail" placeholder="E-mail">
                                </div>
                                <div class="form-group">
                                    <input type="password" min="4" class="form-control" id="regPassword" name="regPassword" placeholder="Password">
                                </div>
                                <div class="form-group">
                                    <input type="password" min="4" class="form-control" id="regCPassword" name="regCPassword" placeholder="Confirm Password">
                                </div>
                                <div class="form-group">
                                    <input type="checkbox" id="regTOS" name="regTOS" title="You must approve by the terms and conditions of service to register." required="required"> <a href="#" data-toggle="modal" data-target="#TOSModal">Terms of Service</a>
                                </div>
                                <?php $cap_code = $captcha[rand(0, 5)]; ?>
                                <div class="form-group well">
                                    <img id="captchaImg" data-code="<?=$cap_code?>" src="<?=base_url()?>assets/img/captcha/<?=$cap_code?>.gif" style="margin-bottom: 1em;">
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="regCaptcha" name="regCaptcha" placeholder="Enter captcha">
                                    <span class="input-group-btn">
                                        <button class="btn btn-default" type="button" id="captchaBtn">Check</button>
                                    </span>
                                    </div>
                                    <span style="font-size: 0.9em"><span style="color: red;">*</span><i>You must first enter the correct captcha to register</i></span><br/>
                                    <span style="font-size: 0.9em; color: red;" id="errorSpan"></span>
                                    <span style="font-size: 0.9em; color: green;" id="successSpan"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <!--                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>-->
                        <button type="submit" class="btn btn-primary" id="regBtn" disabled>Register</button>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
    </form>

    <form method="POST" action="<?=base_url()?>Main/doLogin">
        <div class="modal fade" tabindex="-1" role="dialog" id="loginModal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title">Discipulus Bookshop - Login</h4>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <input type="text" class="form-control" id="loginEmail" name="loginEmail" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" id="loginPassword" name="loginPassword" placeholder="Password">
                        </div>

                        <center>
                            <span style="font-size: 0.9em;">
                                Not registered yet?<br/>Start shopping and Register <a href="#" data-toggle="modal" data-target="#registerModal">here</a>!<br/>
                            </span>

                            <?php
                            if(@$_SESSION['errorMsg']){
                                echo $_SESSION['errorMsg'];
                                $this->session->sess_destroy();
                            }
                            ?>
                        </center>
                        <!--                    <p>One fine body&hellip;</p>-->
                    </div>
                    <div class="modal-footer">
                        <!--                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>-->
                        <button type="submit" class="btn btn-primary">Login</button>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
    </form>

    <form method="POST" action="<?=base_url()?>shop/reviewUser/<?=@$user->id?>">
    <div class="modal fade" tabindex="-1" role="dialog" id="reviewUser">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Write a review for <?=$user->firstname?> <?=$user->lastname?></h4>
                </div>
                <div class="modal-body">
                    <textarea required="required" name="userReview" class="form-control" placeholder="Be nice.." rows="10"></textarea>
                </div>
                <div class="modal-footer">
                    <!--                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>-->
                    <button type="submit" class="btn btn-primary btn-xs">Post User Review</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    </form>

    <form method="POST" action="<?=base_url()?>shop/changePass/<?=@$user->id?>">
        <div class="modal fade" tabindex="-1" role="dialog" id="changePass">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title"><i class="fa fa-warning"></i> Change Password</h4>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Old Password</label>
                            <input type="password" class="form-control" required="required" id="oldPass" name="oldPass" placeholder="Enter your old password">
                        </div>
                        <div class="form-group">
                            <label>New Password</label>
                            <input type="password" class="form-control" required="required" id="newPass" name="newPass" placeholder="Enter your new password">
                        </div>
                        <div class="form-group">
                            <label>Confirm New Password</label>
                            <input type="password" class="form-control"  required="required" id="confirmNewPass" name="confirmNewPass" placeholder="Confirm your new password">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <!--                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>-->
                        <button type="submit" class="btn btn-primary btn-xs">Change Password</button>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
    </form>

    </body>
</html>