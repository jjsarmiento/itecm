
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

    <form method="POST" action="<?=base_url()?>Main/doRegister">
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
                                    <input type="text" class="form-control" id="regFirstname" name="regFirstname" placeholder="First Name">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="regLastname" name="regLastname" placeholder="Last Name">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="regAddress" name="regAddress" placeholder="Address">
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" id="regAbout" name="regAbout" placeholder="About Me"></textarea>
                                </div>
                                <div class="form-group">
                                    Gender&nbsp;&nbsp;&nbsp;&nbsp;
                                    <input type="radio" name="regGender" id="regGender" value="male"> Male
                                    <input type="radio" name="regGender" id="regGender" value="female"> Female<br>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="regBdate" name="regBdate" placeholder="Birthdate" readonly />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <center><h4><i class="fa fa-list"></i> Account Information</h4></center>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="regContact" name="regContact" placeholder="Contact Info">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="regEmail" name="regEmail" placeholder="E-mail">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" id="regPassword" name="regPassword" placeholder="Password">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" id="regCPassword" name="regCPassword" placeholder="Confirm Password">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <!--                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>-->
                        <button type="submit" class="btn btn-primary">Register</button>
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
                    <textarea name="userReview" class="form-control" placeholder="Be nice.." rows="10"></textarea>
                </div>
                <div class="modal-footer">
                    <!--                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>-->
                    <button type="submit" class="btn btn-primary btn-xs">Post User Review</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    </form>

    </body>
</html>