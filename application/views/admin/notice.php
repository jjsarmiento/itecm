<html>
    <head>
        <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/bootstrap-3.3.5-dist/css/bootstrap.min.css" />
        <link href="<?=base_url()?>assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href="<?=base_url()?>assets/css/heroic-features.css" rel="stylesheet" type="text/css">
        <link href="<?=base_url()?>assets/css/itecm_custom.css" rel="stylesheet" type="text/css">
        <style>
            body {
                background-color: #333333;
            }
        </style>
    </head>
    <body>
        <div class="col-md-6 col-md-offset-3 well" style="margin-top: 10em; text-align: center;">
            <h3><i class="fa fa-warning" style="color: firebrick"></i> Logged in as <span style="color: #2980B9">Administrator <?=$_SESSION['firstname'].' '.$_SESSION['lastname']?></span></h3>
            You are now about to access a USER privileged page.<br/>
            You must logout as admin to proceed.<br/>
            <hr/>
            Click <a href="<?=base_url()?>Admin/home">here</a> to return to Administrator Panel
        </div>
    </body>
</html>