<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      แก้ไขการแข่งขัน
      <small>walailak university</small>
    </h1>
  </section>

    <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-md-6">
        <div class="box box-primary">
            <!-- form start -->
          <form role="form">
            <div class="box-body">
              <div class="row">
                <div class="col-md-12">
                  <label for="competition_name">ชื่อการแข่งขัน</label>
                  <input type="text" class="form-control" id="name" name="name" placeholder="ชื่อรายการการแข่งขัน">
                </div>
              </div>
              <br>
              <div class="row">
                <div class="col-md-6">
                  <label for="compet_start">วันที่เริ่มการแข่งขัน <small>(01/01/2556)</small></label>
                    <input type="text" class="form-control" name="compet_start" id="compet_start" placeholder="วว/ดด/ปปปป">
                </div>
                <div class="col-md-6">
                  <label for="compet_end">วันที่สุดการแข่งขัน <small>(01/01/2556)</small></label>
                    <input type="text" class="form-control" name="compet_end" id="compet_end" placeholder="วว/ดด/ปปปป">
                </div>
              </div>
              <br>
              <div class="row">
                <div class="col-md-12">
                  <label for="palce">สถานที่แข่งขัน</label>
                  <input type="text" class="form-control" name="palce" id="palce" placeholder="สถานที่แข่ง">
                </div> 
              </div>
              <br>
              <div class="row">
                <div class="col-md-6">
                  <label for="start">วันที่เริ่มรับสมัคร<small>(01/01/2556)</small></label>
                  <input type="text" class="form-control" id="start" placeholder="วว/ดด/ปปปป">
                </div>
                <div class="col-md-6">
                  <label for="end">วันที่สิ้นสุดรับสมัคร<small>(01/02/2556)</small></label>
                  <input type="text" class="form-control" id="end" placeholder="วว/ดด/ปปปป">
                </div>
              </div>
              <br>
              <div class="row">
                <div class="col-md-6">
                  <label for="startPay">ค่าสมัคร<small>(500)</small></label>
                  <input type="text" class="form-control" id="payCost" placeholder="จำนวนเงิน">
                </div>      
              <div class="col-md-6">
                  <label for="startPay">วันที่สิ้นสุดจ่ายเงิน<small>(01/02/2556)</small></label>
                  <input type="text" class="form-control" id="endtPay" placeholder="วว/ดด/ปปปป">
                </div>
              </div>
              <br>
              <div class="row">
                <div class="col-md-12">
                  <label>รายละเอียดการแข่งขัน</label>
                  <textarea rows="4" class="form-control" id="detail" name="detail" form="usrform" placeholder="รายละเอียดเพิ่มเติม...."></textarea>
                </div>
              </div>
              <br>
              <div class="row">
                <div class="col-md-6">
                  <label>รุ่น</label>
                  <select class="form-control" id="compet_type" name="compet_type">
                    <option value="none">--select--</option>
                    <option value="youth">รุ่นเยาวชน</option>
                    <option value="people">รุ่นประชาชน</option>
                  </select>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6" id="gen">
                  <label>อายุ</label>
                  <select class="form-control" id="compet_gen" name="compet_gen">
                     <option value="none">--select--</option>
                        <!-- <option value = "U9">U9</option>
                        <option value = "U11">U11</option>
                        <option value = "U13">U13</option>
                        <option value = "U15">U15</option>
                        <option value = "U17">U17</option> -->
                        <!-- <option value = "N">N</option>
                        <option value = "S-">S-</option>
                        <option value = "S+">S+</option>
                        <option value = "P-">P-</option>
                        <option value = "P+C">P+C</option> -->
                  </select>
                </div>
              </div>
                               
                <!-- <div class="form-group">
                  <label for="exampleInputFile">File input</label>
                  <input type="file" id="exampleInputFile">
                  <p class="help-block">Example block-level help text here.</p>
                </div> -->
                <!-- <div class="checkbox">
                  <label>
                    <input type="checkbox"> Check me out
                  </label>
                </div> -->
              <!-- </div> -->
              <!-- /.box-body -->
              <div class="box-footer">
                <div class="row pull-right">
                  <div class="col-md-12">
                    <a href="<?php echo base_url('staff/Competition/index') ?>" type="button" class="btn btn-warning">ยกเลิก</a>
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