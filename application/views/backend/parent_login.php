<!doctype html>
<?php
$system_name = $this->db->get_where('settings', array('type' => 'system_name'))->row()->description;
?>

<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>
            <?php echo get_phrase('login'); ?> | <?php echo $system_name; ?>
        </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/login_page/css/font-awesome.min.css">
        <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="assets/fonts/nastaleeq/font.css">

        <style type="text/css">
            body {
                color: #999;

                font-family:'Noto Nastaliq Urdu Draft', serif;; 
                background-position: 0px;
                background-image: url(uploads/bg.jpg);
            }
            .form-control {
                box-shadow: none;
                border-color: #ddd;
            }
            h1,h2,h3,h4,h5,h6,.h1,.h2,.h3,.h4,.h5,.h6{font-family: 'Noto Nastaliq Urdu Draft', serif;}
            .form-control:focus {
                border-color: #2191bf; 
            }
            .login-form {
                width: 350px;
                margin: 0 auto;
                padding: 30px 0;
            }
            .login-form form {
                color: #434343;
                border-radius: 1px;
                margin-bottom: 15px;
                background: #fff;
                border: 1px solid #f3f3f3;
                box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
                padding: 30px;
            }
            .login-form h4 {
                text-align: center;
                font-size: 22px;
                margin-bottom: 20px;
            }
            .login-form .avatar {
                color: #fff;
                margin: 0 auto 30px;
                text-align: center;
                width: 100px;
                height: 100px;
                border-radius: 50%;
                z-index: 9;
                background: #4aba70;
                padding: 15px;
                box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.1);
            }
            .login-form .avatar i {
                font-size: 62px;
            }
            .login-form .form-group {
                margin-bottom: 20px;
            }
            .login-form .form-control, .login-form .btn {
                min-height: 40px;
                border-radius: 2px; 
                transition: all 0.5s;
            }
            .login-form .close {
                position: absolute;
                top: 15px;
                right: 15px;
            }
            .login-form .btn {
                background: #2191bf;
                border: none;
            }
            .login-form .btn:hover, .login-form .btn:focus {
                background: #126b90;
            }
            .login-form .checkbox-inline {
                float: left;
            }
            .login-form input[type="checkbox"] {
                margin-top: 2px;
            }
            .login-form .forgot-link {
                float: right;
            }
            .login-form .small {
                font-size: 13px;
            }
            .login-form a {
                color: #2191bf;
            }
        </style>

    </head>


    <body>

        <div class="login-form">    
            <form action="<?php echo base_url(); ?>index.php?parent_login/validate_login" method="post">
                <div style="text-align:center;"><image src="uploads/logo.png" width="150" height="150"/></div>

                <h4 class="modal-title" style="margin-top:15px;"><?php echo $system_name; ?></h4>
                <div class="form-group">
                    <input class="form-control" type="text"  name="number" placeholder="<?php echo 'جامعہ سے جاری کیا ہوا نمبر لکھیں'; ?>"
                           required autocomplete="off" style="text-align:center">
                </div>
                
                <input type="submit" class="btn btn-primary btn-block btn-lg" value="<?php echo get_phrase('login') ?>">              
            </form>			
            
        </div>


        <script src="<?php echo base_url(); ?>assets/login_page/js/vendor/jquery-1.12.0.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/bootstrap-notify.js"></script>


        <?php if ($this->session->flashdata('login_error') != '') { ?>
            <script type="text/javascript">
                $.notify({
                    // options
                    title: '<strong><?php echo get_phrase('error'); ?>!!</strong>',
                    message: '<?php echo $this->session->flashdata('login_error'); ?>'
                }, {
                    // settings
                    type: 'danger'
                });
            </script>
        <?php } ?>


    </body>
</html>
