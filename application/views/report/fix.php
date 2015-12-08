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
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>asset/css/style1.css">
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
        /*footer*/
        footer{min-height:80px;background-color:#254F75;}
        footer h3{font-weight:100;font-family:"Roboto";font-size:20px;color:#fff;line-height:80px;}

    </style>
</head>

<body>
    <!-- menu-no-logged -->
    <?php $this->load->view('module/menu/menu-no-login');?>
    <div class="container" style="margin-top: 50px; margin-bottom: 50px;">
        <h1 class="text-center">Thông tin báo lỗi số: <span class="text-danger id"><?php echo $data->_id;?></span>  </h1>
        <h1 class="text-center"> Tình trạng: <span class="text-info"><?php if($data->status == 0) echo "Lỗi mới";
                                                    else if($data->status == 1) echo "Đã xem";
                                                    if($data->status == 2) echo "Đã giải quyết";?></span></h1>
        <h3 class="text-center"> User: <span class="text-primary"><?php echo $stringdata->userEmail;?></span></h3>
        <hr>
        <h3>Thông tin cần sửa:</h3>
        <hr>
        <h3>Tuyến: <span class="code"><?php echo $stringdata->busLine->code;?></span></h3>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Trường dữ liệu</th>
                    <th>Giá trị</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach ($stringdata->busLine as $key => $val) {
                        if($val != NULL){
                            echo '<tr>
                                    <td>'.$key.'</td>
                                    <td>'.$val.'</td>
                                    ';
                            if($key != 'code') echo '<td class="fix"><button class="btn btn-danger" key = "'.$key.'" val = "'.$val.'"><i class="fa fa-fw fa-wrench"></i>Sửa ngay</button></td>';
                            else echo "<td><td>";

                                echo '</tr>';
                        }

                    }
                ?>
            </tbody>
        </table>
        <hr>
        <div class="col-sm-3 col-sm-offset-3"><button class="btn btn-success fixed btn-lg btn-block">Đã sửa xong</button></div>
        <div class="col-sm-3"><a href="<?php echo site_url();?>/report" class="btn btn-warning btn-lg btn-block">Quay lại</a></div>
    </div>
    <?php $this->load->view('module/footer');?>
            <!-- Load jQuery -->
            <script type="text/javascript" src="<?php echo base_url();?>asset/js/jquery.min.js"></script>
            <script type="text/javascript" src="<?php echo base_url();?>asset/js/bootstrap.min.js"></script>
            <script type="text/javascript" src="<?php echo base_url();?>asset/js/sweetalert.min.js"></script>
            <!-- loading -->
            <script>
            $(document).ready(function() {
                var code = $('.code').text();
                $('.fix button').click(function(event) {
                    var btn = $(this);
                    var key = $(this).attr('key');
                    var val = $(this).attr('val');
                    $.post('<?php echo site_url()."/report/fix";?>', {
                        code: code,
                        key: key,
                        val: val
                    }, function(data, textStatus, xhr) {

                        if(textStatus == "success" && data == "TRUE"){
                            btn.html('<i class="fa fa-fw fa-check"></i> Đã sửa');
                            btn.removeClass('btn-danger');
                            btn.addClass('btn-success');
                            alert('Sửa thành công');
                        }
                    });
                });
                $('.fixed').click(function(event) {
                    var id = $('.id').text();
                    $.post('<?php echo site_url()."/report/fixed";?>', {code: id}, function(data, textStatus, xhr) {
                        if(textStatus == "success" && data == "TRUE"){
                            window.location = '<?php echo site_url();?>/report';
                        }
                    });
                });
            });
            </script>
            <script type="text/javascript" src="<?php echo base_url();?>asset/js/loading.js"></script>
</body>

</html>