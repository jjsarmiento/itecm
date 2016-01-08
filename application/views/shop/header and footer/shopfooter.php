
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
    </body>
</html>