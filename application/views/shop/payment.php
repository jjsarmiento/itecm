<div class="container">
    <div class="row">
        <div class="col-md-5 well">
            <form method="POST" action="<?=base_url()?>shop/doPayment">
                <p>Please enter your credit card details.</p>
                <input min="15" required="required" type="number" placeholder="Enter your credit card details" class="form-control" name="ccDetails" id="ccDetail"/>
                <hr/>
                <p>Current acount status : <span style="color: blue; font-weight: bold"><?=$user->type?></span></p>
                <?php
                    if($user->type == 'PREMIUM_USER'){
                        ?>

                        <p>Premium Services expires at <span style="color: red;"><?=$expiry->expires_at?></span></p>
                        <?php
                    }
                ?>

                <p>
                    <strong>Rates :</strong><br/>
                    Package1 : P100 for 1 Month (30 days)<Br/>
                    Packgage2 : P1000 for 1 Year (365 days)<Br/>
                </p>
                <hr/>
                <h3>Purchase Premium</h3>
                <select class="form-control" required="required" name="payPackage" id="payPackage">
                    <option value="PACK1">Package 1</option>
                    <option value="PACK2">Package 2</option>
                </select>
                <br/>
                <button type="submit" class="btn btn-primary btn-xs pull-right">Purchase</button>
            </form>
        </div>

        <div class="col-md-7">
            <h3><i class="fa fa-credit-card"></i> Payment History</h3>
            <hr/>
            <table class="table table-striped table-condensed table-hover">
                <thead>
                    <tr>
                        <th>Details</th>
                        <th>Date</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        foreach($payments as $p){
                           ?>
                            <tr>
                                <td><?=$p->details?></td>
                                <td><?=$p->created_at?></td>
                            </tr>
                           <?php
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>