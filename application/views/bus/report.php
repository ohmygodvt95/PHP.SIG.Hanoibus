<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Lengkeng">
    <META NAME="keywords" CONTENT="LengKeng">
    <meta name="Author" content="LengKeng, E-mail: ohmygodvt95@gmail.com">
    <meta name="copyright" content="Copyright <?php echo date('Y');?> by LengKeng">
    <link rel="shortcut icon" type="image/png" href="<?php echo base_url();?>asset/images/favicon.png" />
    <title>Admin</title>
    <!-- Load CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>asset/css/reset.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>asset/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>asset/css/bootstrap-theme.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>asset/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>asset/css/sweetalert.min.css">
    <!-- Load customize style -->
    <link href="http://allfont.net/css/?fonts=bebas-neue" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Raleway:400,500" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>asset/css/style.css">
    <style type="text/css">
        * {
            transition: 0.1s;
        }
        .head div{
            font-weight: bolder;
            text-transform: uppercase;
            border-bottom: 4px solid gray;
        }
        .dt div{
            line-height: 50px;
            border-bottom: 1px solid rgba(0,0,0, 0.4);
        }
    </style>
</head>

<body>
    <!-- menu-no-logged -->
    <?php $this->load->view('module/menu/menu-no-login');?>
    <div class="container" style="margin-top: 50px; margin-bottom: 50px;">
        <h1 class="text-center">Báo lỗi của người dùng</h1>
        <hr>
        <div class="row">
            <div class="col-sm-12 head">
                <div class="col-sm-1 id">Mã</div>
                <div class="col-sm-2 user">Người báo</div>
                <div class="col-sm-2 time">Thời gian</div>
                <div class="col-sm-2 type">Loại lỗi</div>
                <div class="col-sm-2 line">Thuộc tuyến</div>
                <div class="col-sm-3 status">Hành động</div>
            </div>
            <div class="col-sm-12 dt">
                <div class="col-sm-1 id">1</div>
                <div class="col-sm-2 user">ohmygodvt95</div>
                <div class="col-sm-2 time">13123</div>
                <div class="col-sm-2 type">Sai giá</div>
                <div class="col-sm-2 line">Tuyến</div>
                <div class="col-sm-3 status"><a href="<?php echo site_url('report/xuly/6');?>" title="" class="btn btn-success">Đã xử lý</a></div>
            </div>
            <?php
                echo "<pre>";
                print_r ($data);
                echo "</pre>";
            ?>
        </div>
    </div>
    <?php $this->load->view('module/footer');?>
            <!-- Load jQuery -->
            <script type="text/javascript" src="<?php echo base_url();?>asset/js/jquery.min.js"></script>
            <script type="text/javascript" src="<?php echo base_url();?>asset/js/bootstrap.min.js"></script>
            <script type="text/javascript" src="<?php echo base_url();?>asset/js/sweetalert.min.js"></script>
            <!-- loading -->
            <script type="text/javascript" src="<?php echo base_url();?>asset/js/loading.js"></script>
</body>

</html>