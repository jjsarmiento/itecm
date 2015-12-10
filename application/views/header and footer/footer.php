
    <div class="modal fade" tabindex="-1" role="dialog" id="loginModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Discipulus Bookshop - Login</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" class="form-control" id="loginUsername" placeholder="Username">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" id="loginPassword" placeholder="Password">
                    </div>

                    <center>
                        <span style="font-size: 0.9em;">
                            Not registered yet?<br/>Start shopping and Register <a href="#" data-toggle="modal" data-target="#registerModal">here</a>!
                        </span>
                    </center>
                    <!--                    <p>One fine body&hellip;</p>-->
                </div>
                <div class="modal-footer">
                    <!--                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>-->
                    <button type="button" class="btn btn-primary">Login</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

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
                                <input type="text" class="form-control" id="regFirstname" placeholder="First Name">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="regLastname" placeholder="Last Name">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="regBirthdate" placeholder="Birthdate">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <center><h4><i class="fa fa-list"></i> Account Information</h4></center>
                            <div class="form-group">
                                <input type="text" class="form-control" id="regUsername" placeholder="Username">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" id="regPassword" placeholder="Password">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" id="regCPassword" placeholder="Confirm Password">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <!--                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>-->
                    <button type="button" class="btn btn-primary">Register</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    </body>
</html>