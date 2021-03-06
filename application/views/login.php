<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>MariTeam | A Project Management Tool for Your Team</title>

        <!-- Bootstrap Core CSS -->
        <?php echo css_asset('bootstrap/css/bootstrap.min.css'); ?>

        <!-- Custom CSS -->
        <link href="<?php echo base_url(); ?>/dist/css/sb-admin-2.css" rel="stylesheet">
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>

    <body>

        <div class="container">
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <div class="login-panel panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Please Sign In</h3>
                        </div>
                        <div class="panel-body">
                            <?php echo form_open('auth/login'); ?>
                            <fieldset>
                                <?php echo form_error('token', '<div class="form-group has-error"><label class="control-label">', '</label></div>'); ?>
                                <div class="form-group">
                                    <input class="form-control" placeholder="E-mail" name="email" type="email" autofocus value="<?php echo set_value('email'); ?>">
                                    <?php echo form_error('email', '<div class="has-error"><label class="control-label">', '</label></div>'); ?>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" type="password" value="">
                                    <?php echo form_error('password', '<div class="has-error"><label class="control-label">', '</label></div>'); ?>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input name="remember" type="checkbox" value="Remember Me">Remember Me
                                    </label>
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                <button type=submit class="btn btn-lg btn-success btn-block">Login</button>
                            </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </body>

</html>
