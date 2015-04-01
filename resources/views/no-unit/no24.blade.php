@extends('layout.master-module')
@section('content')
	
		<div class="col-lg-12 col-md-12">
            <h4 class="text-center"><u>แบบขออนุญาตนำสินค้าขาออกผ่านท่า เข้ามาในเขต กทส.ฐท.สส เพื่อส่งออกโดยเรือเดินทะเลต่างประเทศ</u></h4>
        </div>
		<br>
        <div class="col-lg-12 col-md-12">
            <p>เรื่อง สินค้าขาออกผ่านท่า</p>
            <p>เรียน ผู้อำนวยการ การท่าเรือสัตหีบ ฐานทัพเรือสัตหีบ</p>
        </div>
		<div class="col-md-10 col-md-offset-1">
			<div class="col-md-1">
				<label class="control-label">ด้วยบริษัท, ห้าง  </label>
			</div>
			<div class="col-md-9">
				<input type="text" class="form-control"><button type="button" class="btn btn-default">Search</button>
			</div>
		</div><br>
		<div class="row">
		<div class="col-lg-12 col-md-12">
			<label class="col-md-3 text-right">ได้มีสินค้าขาออกผ่านท่า รายการสินค้าเป็น : &nbsp;</label>
			<div class="col-md-6">
				<input type="text" class="form-control">
			</div>	
		</div>
		</div>
		<br>
		<form class="form-inline">
			<div class="form-group">
				<label>จำนวน</label>
				<input type="text" class="form-control"><b>ห่อหีบ</b>
			</div>
			<div class="form-group">
				<label>น้ำหนัก</label>
				<input type="text" class="form-control"><b>กิโลกรัม</b>
			</div>
		</form><br>
		<div class="col-md-2 text-right"><b>๑.&nbsp;</b>
		<label>
          <input type="checkbox"> นำไปขึ้นเรือ&nbsp;
        </label>
		</div>
		<div class="col-md-7">
			<input type="text" class="form-control">
		</div><br><br>
		<form class="form-inline">
			<div class="form-group">
				<label>วันที่</label>
				<input type="text" class="form-control">
			</div>
			<div class="form-group">
				<label>เดือน</label>
				<input type="text" class="form-control">
			</div>
			<div class="form-group">
				<label>พ.ศ</label>
				<input type="text" class="form-control">
			</div>
			<div class="form-group">
				<label>ระหว่างเวลา</label>
				<input type="text" class="form-control"><b>น.</b>
			</div>
			<div class="form-group">
				<label>&nbsp;&nbsp;ถึง</label>
				<input type="text" class="form-control"><b>น.</b>
			</div>
		</form><br>
		<div class="col-md-offset-1">
		<b>๒.&nbsp;</b>
		<label>
          <input type="checkbox"> นำไปบรรจุในตู้สินค้า (CONTAINER) ที่ลานพักสินค้า &nbsp;
        </label>
		</div>
		<form class="form-inline">
			<div class="form-group">
				<label>วันที่</label>
				<input type="text" class="form-control">
			</div>
			<div class="form-group">
				<label>เดือน</label>
				<input type="text" class="form-control">
			</div>
			<div class="form-group">
				<label>พ.ศ</label>
				<input type="text" class="form-control">
			</div>
			<div class="form-group">
				<label>ระหว่างเวลา</label>
				<input type="text" class="form-control"><b>น.</b>
			</div>
			<div class="form-group">
				<label>&nbsp;&nbsp;ถึง</label>
				<input type="text" class="form-control"><b>น.</b>
			</div>
		</form><br>
		<form class="form-inline">
			<div class="form-group">
				<label>แล้วนำขึ้นเรือ</label>
				<input type="text" class="form-control">
			</div>
			<div class="form-group">
				<label>ในวันที่</label>
				<input type="text" class="form-control">
			</div>
			<div class="form-group">
				<label>เดือน</label>
				<input type="text" class="form-control">
			</div>
			<div class="form-group">
				<label>พ.ศ</label>
				<input type="text" class="form-control">
			</div>
		</form><br>	
			<div class="col-md-12">
				<label class="col-md-1">หมายเลขตู้สินค้า</label>
				<div class="col-md-9">
				<input type="text" class="form-control"><br>
				</div>
			</div>
		<div class="row">
			<div class="col-md-offset-1 col-md-4"><b>จึงเรียนมาเพื่อโปรดพิจารณาอนุญาต</b></div>
		</div> 
		<div class="row">
			<div class="col-md-1 col-md-offset-2 text-right" ><b>(ลงชื่อ) &nbsp;</b></div>
			<div class="col-md-3"><input type="text" class="form-control"></div>
		</div>
		<div class="row">		
			<div class="col-md-3 col-md-offset-3"><input type="text" class="form-control"></div>
		</div>
		<div class="row">
			<div class="col-md-1 col-md-offset-2 text-right" ><b>ผู้แทนบริษัท, ห้าง &nbsp;</b></div>
			<div class="col-md-3"><input type="text" class="form-control"></div>
		</div>
			<hr>
		<b>- อนุญาต</b>
		<br>
		<b>- แผนกต่างๆ ดำเนินการดังนี้</b>
		<br>
		<div class="col-md-offset-1 col-md-12">
		<label>
          <input type="checkbox"> หมวดตรวจสอบ (สถานีตรวจสอบสินค้า) จัดทำ S of M เสนอแผนกผลประโยชน์ฯ คืดค่าธรรมเนียม
        </label>
		<br>
		<label>
          <input type="checkbox"> แผนกคลังพักสินค้าฯ ดำเนินการในส่วนที่เกี่ยวข้อง
        </label>
		<br>
		<label>
          <input type="checkbox"> แผนกบรรทุก และ ขนถ่ายฯ ดำเนินการเรื่องแรงงานบรรจุสินค้าเสนอ แผนกผลประโยชน์
        </label>
		</div>
			

			
	
		
		
            
        
		

        
    
@stop