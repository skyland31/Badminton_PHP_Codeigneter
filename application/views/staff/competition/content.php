
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
      <a href="<?php echo base_url('api/Competition/allCompetation') ?>" type="button" class="btn btn-primary">Json Competetion</a>
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="row">
      <?php 
        $json = file_get_contents(base_url('api/Competition/allCompetation'));
        $obj = json_decode($json);
        $i = 0;
        foreach ($obj as $value) {
      ?>
        <div class="col-md-6">
          <div class="box">
            <div class="box-header border-box-bottom" id="compet-name">
              <h3><?php echo $value->name ?></h3>
            </div>
            <div class="box-body" id="compet-detail">
            <?php echo "<strong> เปิดรับประเภท :  </strong>";
              foreach($value->compet_type as $type){ 
                echo " ".$type." ";
                echo "<strong> รุ่น : </strong>";
                if($i==0){
                  foreach($value->compet_gen1 as $gen) {
                    echo "<span class='label label-info'>".$gen."</span>";
                  } 
                  $i = $i+1;
                }
                else{
                  foreach($value->compet_gen2 as $gen) {
                    echo "<span class='label label-success'>".$gen."</span>";
                  } 
                  $i = 0;
                }
              }?>
              <br>
              <strong> เริ่มการแข่งขัน : </strong><p class="detail" id="compet-start"><?php echo $value->compet_start ?></p> 
              <br>
              <strong> สิ้นสุดการแข่งขัน : </strong><p class="detail" id="compet-end"><?php echo $value->compet_end ?></p>              
              <br>
              <strong> สถานที่แข่งขัน : </strong><p class="detail" id="compet-end"><?php echo $value->place ?></p>              
              <br>
              <strong> เปิดรับสมัคร : </strong><p class="detail" id="start"><?php echo $value->start ?></p>
              <br>
              <strong> ปิดรับสมัคร : </strong><p class="detail" id="end"><?php echo $value->end ?></p>
              <br>
              <strong> ค่าสมัคร : </strong><p class="detail" id="prize"><?php echo $value->prize ?> บาท</p>
              <br>
              <strong> สิ้นสุดจ่ายค่าสมัคร : </strong><p class="detail" id="pay-end"><?php echo $value->pay_end ?></p>
              <br><br>
              <a href="#" type="button" class="btn btn-primary" data-toggle="modal" data-target="#desciptionModal">รายละเอียด</a>
              <!-- Modal -->
              <div class="modal fade" id="desciptionModal" tabindex="-1" role="dialog" aria-labelledby="desciption">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title" id="desciption">รายละเอียด <?php echo $value->name ?></h4>
                    </div>
                    <div class="modal-body">
                     <p><?php echo $value->detail ?></p>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">ปิด</button>
                    </div>
                  </div>
                </div>
              </div>

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
      <?php 
      }
      ?>
      </div>

    </section>
    
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->