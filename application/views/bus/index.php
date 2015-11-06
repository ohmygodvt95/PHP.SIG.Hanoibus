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

        .info {
            margin-top: 60px;
        }

        #map {
            height: 500px;
        }

        .bus-stop {
            height: 430px;
            overflow-y: scroll;
        }

        .bus-stop ul li:hover {
            background-color: #337ab7;
            border-color: #337ab7;
            color: #fff;
            cursor: pointer;
            padding-left: 20px;
        }
    </style>
</head>

<body>
    <!-- menu-no-logged -->
    <?php $this->load->view('module/menu/menu-no-login');?>
        <div class="container info">
        <h1 class="text-center"> Quản lý dữ liệu</h1>
        <hr>
            <div class="row">
            <nav class="navbar navbar-inverse" role="navigation">
            	<!-- Brand and toggle get grouped for better mobile display -->
            	<div class="navbar-header">
            		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex2-collapse">
            			<span class="sr-only">Toggle navigation</span>
            			<span class="icon-bar"></span>
            			<span class="icon-bar"></span>
            			<span class="icon-bar"></span>
            		</button>
            		<a class="navbar-brand" href="#">Manager</a>
            	</div>

            	<!-- Collect the nav links, forms, and other content for toggling -->
            	<div class="collapse navbar-collapse navbar-ex2-collapse">
            		<form class="navbar-form navbar-left" role="search">
            			<div class="form-group">
            				<input type="text" class="form-control" placeholder="Search">
            			</div>
            			<button type="submit" class="btn btn-default">Search</button>
            		</form>
            		<ul class="nav navbar-nav navbar-right">
            			<li class="dropdown">
            				<a href="#" class="dropdown-toggle" data-toggle="dropdown">Thêm mới dữ liệu <b class="caret"></b></a>
            				<ul class="dropdown-menu">
            					<li><a href="#">Thêm mới tuyến</a></li>
            					<li><a href="#"></a></li>
            					<li><a href="#">Thêm mới điểm dừng</a></li>
            					<li><a href="#">Thêm mới điểm dừng với tuyến và chiều đang chọn</a></li>
            				</ul>
            			</li>
            		</ul>
            	</div><!-- /.navbar-collapse -->
            </nav>
            </div>
            <div class="row">
                <div class="col-sm-4">
                <div class="row">
                	<div class="col-sm-9">
                		<h5>Tuyến bus:</h5>
                    <select name="" id="" class="form-control busline">
                        <option value="0">--Chọn tuyến--</option>
                        <?php
foreach ($data as $item) {?>
                            <option value="<?php echo $item->code;?>">Tuyến
                                <?php echo $item->code;?>:
                                    <?php echo $item->name;?>
                            </option>
                            <?php
}
?>
                    </select>
                	</div>
                	<div class="col-sm-3">
                		<h5>Chiều</h5>
                    <select name="" id="" class="form-control bus-way">
                        <option value="0">Đi</option>
                        <option value="1">Về</option>
                    </select>
                	</div>
                </div>

                    <h5>Điểm dừng:</h5>
                    <div class="bus-stop">
                    </div>
                </div>
                <div class="col-sm-8">
                    <h5>Bản đồ</h5>
                    <div class="col-sm-12">
                        <div id="map" class="col-sm-12"></div>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <?php $this->load->view('module/footer');?>
            <!-- Load jQuery -->
            <script type="text/javascript" src="<?php echo base_url();?>asset/js/jquery.min.js"></script>
            <script type="text/javascript" src="<?php echo base_url();?>asset/js/bootstrap.min.js"></script>
            <script type="text/javascript" src="<?php echo base_url();?>asset/js/sweetalert.min.js"></script>
            <!-- // google maps -->
            <script type="text/javascript" src="<?php echo base_url();?>asset/js/bus/showbus.js"></script>
            <script async defer src="https://maps.googleapis.com/maps/api/js??signed_in=true&key=AIzaSyBqRFfIm_4HCJezsvRIRaLf0VTT_lRWnUY&callback=initMap">
            </script>
            <script>
            	$(document).on('click', '.bus-stop .edit', function() {
            		var code = $(this).attr("code");
            		var urlAjax =  $('.navbar-brand').attr('href');
            		urlAjax += "ajax/getbusstop/" + code;
            		$.post(urlAjax,{
            			code: code
            		}, function(data, textStatus, xhr) {
            			swal({
						    title: 'Thông tin điểm',
						   	html: data,
						    showCancelButton: true,
						    confirmButtonColor: '#3085d6',
						    cancelButtonColor: '#d33',
						    confirmButtonText: 'Yes, edit it!',
						    closeOnConfirm: false
						}, function() {
							var old_code = code;
						    var edit_code = $('.edit-code').val();
						    var edit_passby = $('.edit-passby').val();
						    var edit_name = $('.edit-address-name').val();
						    var edit_longlat = $('.edit-longlat').val();
						    var edit_urlAjax =  $('.navbar-brand').attr('href');
            				edit_urlAjax += "ajax/editbusstop/";
						    $.post(edit_urlAjax,{
						    	old_code: old_code,
						    	edit_code: edit_code,
						    	edit_passby: edit_passby,
						    	edit_name: edit_name,
						    	edit_longlat: edit_longlat
						    }, function(data, textStatus, xhr) {
						    	if(data == "success"){
						    		swal(   'Good job!',   'Bạn đã sửa thành công!',   data );
						    		changeData();
						    	}
						    });
						});
            		});
            	});
            	$(document).on('click', '.bus-stop .del', function() {
            		var code = $(this).attr("code");
            		swal({
					    title: 'Are you sure?',
					    html: 'Bạn có muốn xóa địa điểm này? CODE: ' + code +'<br> nó sẽ ảnh hưởng đến rất nhiều dữ liệu khác...',
					    type: 'warning',
					    showCancelButton: true,
					    confirmButtonColor: '#3085d6',
					    cancelButtonColor: '#d33',
					    confirmButtonText: 'Yes, delete it!',
					    closeOnConfirm: false
					}, function() {
					    swal('Error!', 'Tạm thời chưa mở chức năng này', 'warning');
					});
            	});
            </script>
            <!-- loading -->
            <script type="text/javascript" src="<?php echo base_url();?>asset/js/loading.js"></script>
</body>

</html>