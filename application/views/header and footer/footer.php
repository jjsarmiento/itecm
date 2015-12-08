
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
                            Not registered yet?<br/>Start shopping and Register <a href="<?=base_url()?>main/register">here</a>!
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
    </body>
</html>