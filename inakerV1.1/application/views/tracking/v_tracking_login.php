<!DOCTYPE html>
<html class="bg-purple">
    <head>
        <meta charset="UTF-8">
        <title>Admin Koperasi Login</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="<?php echo base_url();?>assets/css/AdminLTE.css" rel="stylesheet" type="text/css" />
    </head>
    <body class="bg-purple">
        <div class="form-box" id="login-box">
            <div class="header bg-blue">Sistem Informasi Koperasi Pusat</div>
            <form action="<?php echo base_url();?>login/user/login/" method="post">
                <div class="body bg-gray">
                    <div class="form-group">
                        <input type="text" name="username" class="form-control" placeholder="Username" required/>
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" class="form-control" placeholder="Password" required/>
                    </div>          
                </div>
                <div class="footer">                                                               
                    <button type="submit" class="btn bg-blue btn-block">Login</button>  
                    
                </div>
            </form>
        </div>
    </body>
</html>