<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Create for the competition
        <small>walailak university</small>
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">สร้างการแข่งขัน</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form">
              <div class="box-body">
                <div class="col-lg-12">
                  <label for="competition_name">ชื่อการแข่งขัน</label>
                  <input type="text" class="form-control" id="name" name="name" placeholder="ชื่อรายการการแข่งขัน">
                </div>
                <div class="col-lg-6">
                  <label for="compet_start">วันที่เริ่มการแข่งขัน</label>
                    <input type="text" class="form-control" name="compet_start" id="compet_start" placeholder="วว/ดด/ปปปป">
                </div>
                <div class="col-lg-6">
                  <label for="compet_end">วันที่สุดการแข่งขัน</label>
                    <input type="text" class="form-control" name="compet_end" id="compet_end" placeholder="วว/ดด/ปปปป">
                </div>
                <div class="col-lg-6">
                  <label for="palce">สถานที่แข่งขัน</label>
                    <input type="text" class="form-control" name="palce" id="palce" placeholder="สถานที่แข่ง">
                </div>       
                <div class="col-lg-6">
                  <label for="startPay">วันที่เริ่มจ่ายเงิน(01/01/2556)</label>
                  <input type="text" class="form-control" id="startPay" placeholder="วว/ดด/ปปปป">
                </div>
                <div class="col-lg-6">
                  <label for="endPay">วันที่เริ่มจ่ายเงิน(01/02/2556)</label>
                  <input type="text" class="form-control" id="endPay" placeholder="วว/ดด/ปปปป">
                </div>
                <div class="col-lg-6">
                  <label for="telephone">โทร</label>
                  <input type="text" class="form-control" id="telephone" placeholder="โทร">
                </div>
                <div class="col-lg-6">
                  <label for="line_id">line ID</label>
                  <input type="text" class="form-control" id="line_id" placeholder="id">
                </div>
                <div class="col-lg-12">
                  <label>รายละเอียดการแข่งขัน</label>
                  <textarea rows="4" cols="85" id="detail" name="detail" form="usrform" placeholder="รายละเอียดเพิ่มเติม...."></textarea>
                </div>
                <div class="col-lg-6">
                  <label>รุ่น</label>
                  <select class="form-control" id="compet_type" name="compet_type">
                    <option value="none">--select--</option>
                    <option value="youth">รุ่นเยาวชน</option>
                    <option value="people">รุ่นประชาชน</option>
                  </select>
                </div>
                <div class="col-lg-6" id="gen">
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
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
          <!-- /.box -->
        </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->