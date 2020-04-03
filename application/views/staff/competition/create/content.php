<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      สร้างการแข่งขัน
      <small>walailak university</small>
    </h1>
  </section>

    <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-md-6">
        <div class="box box-primary">
            <!-- form start -->
          <form role="form" id="create-compet" action="<?php echo base_url('api/competition/create'); ?>" method="post">
            <div class="box-body">
              <div class="row">
                <div class="col-md-12">
                  <label for="competition_name">ชื่อการแข่งขัน<sup class="error">*</sup></label>
                  <input type="text" class="form-control error" id="name" name="name" placeholder="ชื่อรายการการแข่งขัน" required>
                </div>
              </div>
              <br>
              <div class="row">
                <div class="col-md-6">
                  <label for="compet_start">วันที่เริ่มการแข่งขัน<sup class="error">*</sup> <small>(01/01/2556)</small></label>
                    <input type="text" class ="datepicker" data-date-format="yyyy-mm-dd" class="form-control error" name="compet_start" id="compet_start" placeholder="วว/ดด/ปปปป" required>
                </div>
                <div class="col-md-6">
                  <label for="compet_end">วันที่สุดการแข่งขัน<sup class="error">*</sup> <small>(01/01/2556)</small></label>
                    <input type="text"class ="datepicker" data-date-format="yyyy-mm-dd" class="form-control error" name="compet_end" id="compet_end" placeholder="วว/ดด/ปปปป" required>
                </div>
              </div>
              <br>
              <div class="row">
                <div class="col-md-12">
                  <label for="palce">สถานที่แข่งขัน<sup class="error">*</sup></label>
                  <input type="text" class="form-control error" name="palce" id="palce" placeholder="สถานที่แข่ง" required>
                </div> 
              </div>
              <br>
              <div class="row">
                <div class="col-md-6">
                  <label for="start">วันที่เปิดรับสมัคร<sup class="error">*</sup><small>(01/01/2556)</small></label>
                  <input type="text" class ="datepicker" data-date-format="yyyy-mm-dd" class="form-control error" name="start" id="start" placeholder="วว/ดด/ปปปป" required>
                </div>
                <div class="col-md-6">
                  <label for="end">วันที่ปิดรับสมัคร<sup class="error">*</sup><small>(01/02/2556)</small></label>
                  <input type="text" class ="datepicker" data-date-format="yyyy-mm-dd" class="form-control error" name="end" id="end" placeholder="วว/ดด/ปปปป" required>
                </div>
              </div>
              <br>
              <div class="row">
                <div class="col-md-6">
                  <label for="startPay">ค่าสมัคร<sup class="error">*</sup><small>(500)</small></label>
                  <input type="text" class="form-control error" name="payCost" id="payCost" placeholder="จำนวนเงิน" required>
                </div>      
              <div class="col-md-6">
                  <label for="startPay">วันที่สิ้นสุดจ่ายเงิน<sup class="error">*</sup><small>(01/02/2556)</small></label>
                  <input type="text" class ="datepicker" data-date-format="yyyy-mm-dd" class="form-control error" name="endPay" id="endPay" placeholder="วว/ดด/ปปปป" required>
                </div>
              </div>
              <br>
              <div class="row">
                <div class="col-md-12">
                  <label>รายละเอียดการแข่งขัน</label>
                  <textarea rows="4" class="form-control error" id="details" name="details"  placeholder="รายละเอียดเพิ่มเติม...."></textarea>
                </div>
              </div>
              <br>
              <div class="row">
                <div class="col-md-6">
                  <label>รุ่น<sup class="error">*</sup></label>
                  <select class="form-control" id="compet_type" name="compet_type">
                    <option value="none">--select--</option>
                    <option value = 1>รุ่นเยาวชน</option>
                    <option value = 2>รุ่นประชาชน</option>
                  </select>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6" id="gen">
                  <label>อายุ<sup class="error">*</sup></label>
                  <select class="form-control" id="compet_gen" name="compet_gen">
                     <option value="none">--select--</option>
                  </select>
                </div>
              </div>
                          
              <div class="box-footer">
                <div class="row pull-right">
                  <div class="col-md-12">
                    <a href="<?php echo base_url('staff/Competition/index') ?>" type="button" class="btn btn-default">ยกเลิก</a>
                    <button type="submit" class="btn btn-primary">บันทึก</button>
                  </div>
                </div>
              </div>
            </div>
          </form>
        </div>
          <!-- /.box -->
      </div>
    </div>  
  </section>
    <!-- /.content -->
</div>
  <!-- /.content-wrapper -->