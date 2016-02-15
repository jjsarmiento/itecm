<div class="container">
<hr>
    <form method="POST" action="<?=base_url()?>admin/changePass/<?=@$user->id?>">
        <div class="modal fade" tabindex="-1" role="dialog" id="changePass">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title"><i class="fa fa-warning"></i> Change Password</h4>
                    </div>
                    <div class="modal-body">
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
</body>
</html>