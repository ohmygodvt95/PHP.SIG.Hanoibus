<div class="row">
	<div class="col-sm-4" style="line-height: 30px;">Mã địa điểm</div>
	<div class="col-sm-8"><input type="text" class="form-control edit-code" disabled placeholder="Nhập mã điểm dừng" value="<?php echo $data->code;?>"></div>
</div>
<br>
<div class="row">
	<div class="col-sm-4" style="line-height: 30px;">Tên tuyến</div>
	<div class="col-sm-8"><input type="text" class="form-control edit-address-name" placeholder="Nhập tên tuyến" value="<?php echo $data->address_name;?>"></div>
</div>
<br>
<div class="row">
	<div class="col-sm-4" style="line-height: 30px;">Tuyến đi qua</div>
	<div class="col-sm-8"><input type="text" class="form-control edit-passby" placeholder="Nhập các tuyến đi qua: 0x,1x.." value="<?php echo $data->busPassBy;?>"></div>
</div>
<br>
<div class="row">
	<div class="col-sm-4" style="line-height: 30px;">Giá trị Long|lat</div>
	<div class="col-sm-8"><input type="text" class="form-control edit-longlat" placeholder="Nhập 'long|lat long|lat ..'" value="<?php echo $data->location;?>"></div>
</div>
