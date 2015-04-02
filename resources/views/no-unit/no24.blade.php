@extends('layout.master-module')
@section('content')
	
<form class="form-horizontal">
    <div class="col-lg-12 col-md-12">
        <h3 class="text-center">แบบขออนุญาตนำสินค้าขาออกผ่านท่า เข้ามาในเขต กทส.ฐท.สสเพื่อส่งออกโดยเรือเดินทะเลต่างประเทศ</h3>
    </div>
    <div class="col-lg-12 col-md-12 hr-topic"></div>
    <div class="row form-group">
        <label class="col-md-2">เรื่อง :&nbsp;</label>
    	<div class="col-md-3">
        	<label>ขอเช่าเครื่องมือทุ่นแรง</label>
    	</div>
    </div>
    <div class="row form-group">
        <label class="col-md-2">เรียน :&nbsp;</label>
        <div class="col-md-3">
            <label>ผอ. กทส. ฐท.สส.</label>
        </div>
	</div>	
    <div class="row form-group">
        <label class="col-md-2">ด้วยบริษัท, ห้าง :&nbsp;</label>
        <div class="col-md-10 right-inner-addon ">
            <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
            <input type="search" class="form-control" placeholder="Search" data-toggle="modal" data-target="#mdDocument"/>
        </div>
    </div>   
    <div class="row form-group">
    	<label class="col-md-3">ได้มีสินค้าขาออกผ่านท่า รายการสินค้าเป็น :&nbsp;</label>
    	<div class="col-md-9">
    		<input type="text" class="form-control">
    	</div>
    </div>
    <div class="row form-group">
    	<div class="col-md-6">
            <label class="col-md-3 text-center">จำนวน :&nbsp;</label>
            <div class="col-md-8">
                <input class="form-control" type="text" >
            </div>    
            <div class="col-md-1">
             <label>&nbsp;&nbsp;หีบ/ห่อ</label>
            </div>
        </div>
        <div class="col-md-6">   
            <label class="col-md-3 text-center">น้ำหนัก :&nbsp;</label>
            <div class="col-md-8">
            	<input class="form-control" type="text">
            </div>
            <div class="col-md-1">
            	<label>&nbsp;&nbsp;กิโลกรัม</label>
            </div>
        </div>          
    </div>
    <div class="row form-group">
    	<label class="col-md-1 text-right" >1 .&nbsp;</label>
    	<div class="col-md-2">
    		<input type="checkbox"> &nbsp; <label>นำไปขึ้นเรือ</label>
    	</div>
    	<div class="col-md-9">
    		<input type="text" class="form-control">
    	</div>
    </div>
    <div class="row form-group">
    	<div class="col-md-6">
    		<label class="col-md-3 text-right">วันที่ :&nbsp;</label>
    		<div class="col-md-9">
    			<div class="input-group">
                <input type="text" class="form-control" placeholder="dd/mm/YY">
               	 	<div class="input-group-btn">
                    	<button type="button" class="btn btn-default" data-toggle="modal" data-target="#"><span class="glyphicon glyphicon-calendar"></span></button> 
                	</div>
            	</div>
    		</div>
    	</div>
    	<div class="col-md-6">
    		<label class="col-md-3 text-right">ระหว่างเวลา :&nbsp;</label>
    		<div class="col-md-9">
    			<input type="text" class="form-control">
    		</div>
    	</div>		
    </div>
    <div class="row form-group">
    	<div class="col-md-6">
    		<label class="col-md-3 text-right">ถึง :&nbsp;</label>
    		<div class="col-md-8">
    			<input type="text" class="form-control">
    		</div>
    		<div class="col-md-1">
    			<label>&nbsp;&nbsp;น.</label>
    		</div>
    	</div>
    </div>	
    <div class="row form-group">
    	<label class="col-md-1 text-right">2 .&nbsp;</label>
    	<div class="col-md-3">
    		<input type="checkbox"> &nbsp; <label>นำไปบรรจุในตู้สินค้า (CONTAINER) ที่ลานพักสินค้า</label>
    	</div>
    	<div class="col-md-8">
    		<input type="text" class="form-control">
    	</div>
    </div>
    <div class="row form-group">
    	<div class="col-md-6">
    		<label class="col-md-3 text-right">วันที่ :&nbsp;</label>
    		<div class="col-md-9">
    			<div class="input-group">
                	<input type="text" class="form-control" placeholder="dd/mm/YY">
                	<div class="input-group-btn">
                    	<button type="button" class="btn btn-default" data-toggle="modal" data-target="#"><span class="glyphicon glyphicon-calendar"></span></button> 
                	</div>
            	</div>
    		</div>
    	</div>
    	<div class="col-md-6">
    		<label class="col-md-3 text-right">ระหว่างเวลา :&nbsp;</label>
    		<div class="col-md-9">
    			<input type="text" class="form-control">
    		</div>
    	</div>
    </div>	
    <div class="row form-group">
    	<div class="col-md-6">
    		<label class="col-md-3 text-right">ถึง :&nbsp;</label>
    		<div class="col-md-8">
    			<input type="text" class="form-control">
    		</div>
    		<div class="col-md-1">
    			<label>&nbsp;&nbsp;น.</label>
    		</div>
    	</div>
    	<div class="col-md-6">
    		<label class="col-md-3 text-right">แล้วนำขึ้นเรือ :&nbsp;</label>
    		<div class="col-md-9">
    			<input type="text" class="form-control">
      		</div>
   		</div>
   	</div>	
    <div class="row form-group">
    	<div class="col-md-6">
    		<label class="col-md-3 text-right">ในวันที่ :&nbsp;</label>
    		<div class="col-md-9">
    			<div class="input-group">
    				<input type="text" class="form-control" placeholder="dd/mm/YY">
    				<div class="input-group-btn">
    					<button type="button" class="btn btn-default" data-toggle="modal" data-target="#"><span class="glyphicon glyphicon-calendar"></span></button>
    				</div>
    			</div>
    		</div>
    	</div>
    </div>	
    <div class="row form-group">
    	<label class="col-md-2">หมายเลขตู้สินค้า :&nbsp;</label>
    	<div class="col-md-10">
    		<input type="text" class="form-control">
    	</div>	
    </div>

			
	
		
		
            
        
		

        
    
@stop