  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        รายการการแข่งขัน
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">รายการการแข่งขัน</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-6">
          <div class="box">
            <div class="box-header border-box-bottom" id="compet-name">
              <h3>Walailak's Day</h3>
            </div>
            <div class="box-body" id="compet-detail">
              <strong> เปิดรับ : </strong>
                <span class="label label-info">U9</span>
                <span class="label label-info">U11</span>
                <span class="label label-info">U13</span>
                <span class="label label-info">U15</span>
                <span class="label label-info">U17</span>
                <span class="label label-success">N</span>
                <span class="label label-success">S-</span>
                <span class="label label-success">S+</span>
                <span class="label label-success">P-</span>
                <span class="label label-success">P+C</span>
              <br>
              <strong> เริ่มการแข่งขัน : </strong><p class="detail" id="compet-start">05/04/2020</p> 
              <br>
              <strong> สิ้นสุดการแข่งขัน : </strong><p class="detail" id="compet-end">10/04/2020</p>              
              <br>
              <strong> สถานที่แข่งขัน : </strong><p class="detail" id="compet-end">10/04/2020</p>              
              <br>
              <strong> เปิดรับสมัคร : </strong><p class="detail" id="start">12/03/2020</p>
              <br>
              <strong> ปิดรับสมัคร : </strong><p class="detail" id="end">22/03/2020</p>
              <br>
              <strong> ค่าสมัคร : </strong><p class="detail" id="prize">600฿</p>
              <br>
              <strong> สิ้นสุดจ่ายค่าสมัคร : </strong><p class="detail" id="pay-end">25/03/2020</p>
              <br><br>
              <a href="#" type="button" class="btn btn-primary">รายละเอียด</a>
              <a href="<?php echo base_url('staff/Competition/editCompetition') ?>" type="button" class="btn btn-warning">แก้ไข</a>

              <a href="#" type="button" class="btn btn-danger" data-toggle="modal" data-target="#myModal">ลบ</a>

              <!-- Modal -->
              <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title" id="myModalLabel">ลบการแข่งขัน</h4>
                    </div>
                    <div class="modal-body">
                     <p>คุณต้องการลบการแข่งขันหรือไม่</p>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">ยกเลิก</button>
                      <button type="button" class="btn btn-danger">ลบ</button>
                    </div>
                  </div>
                </div>
              </div>

              <a href="<?php echo base_url('staff/Grouptable/index') ?>" type="button" class="btn btn-default">ตารางแบ่งกลุ่ม</a>


            </div>
            <div class="box-footer border-box-top">
              Post By : <p class="detail" id="auth">Admin</p> 
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="box">
            <div class="box-header border-box-bottom" id="compet-name">
              <h3>Walailak's Day2</h3>
            </div>
            <div class="box-body" id="compet-detail">
              <strong> เปิดรับ : </strong>
                <span class="label label-info">U9</span>
                <span class="label label-info">U11</span>
                <span class="label label-info">U13</span>
                <span class="label label-info">U15</span>
                <span class="label label-info">U17</span>
                <span class="label label-success">N</span>
                <span class="label label-success">S-</span>
                <span class="label label-success">S+</span>
                <span class="label label-success">P-</span>
                <span class="label label-success">P+C</span>
              <br>
              <strong> เริ่มการแข่งขัน : </strong><p class="detail" id="compet-start">05/04/2020</p> 
              <br>
              <strong> สิ้นสุดการแข่งขัน : </strong><p class="detail" id="compet-end">10/04/2020</p>              
              <br>
              <strong> สถานที่แข่งขัน : </strong><p class="detail" id="compet-end">10/04/2020</p>              
              <br>
              <strong> เปิดรับสมัคร : </strong><p class="detail" id="start">12/03/2020</p>
              <br>
              <strong> ปิดรับสมัคร : </strong><p class="detail" id="end">22/03/2020</p>
              <br>
              <strong> ค่าสมัคร : </strong><p class="detail" id="prize">600฿</p>
              <br>
              <strong> สิ้นสุดจ่ายค่าสมัคร : </strong><p class="detail" id="pay-end">25/03/2020</p>
              <br><br>
              <a href="#" type="button" class="btn btn-primary">รายละเอียด</a>
              <a href="<?php echo base_url('staff/Competition/editCompetition') ?>" type="button" class="btn btn-warning">แก้ไข</a>
              <a href="#" type="button" class="btn btn-danger">ลบ</a>
            </div>
            <div class="box-footer border-box-top">
              Post By : <p class="detail" id="auth">Admin</p> 
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->