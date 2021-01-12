<!--main-container-part-->
<div id="content">
  <!--breadcrumbs-->
  <div id="content-header">
    <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a></div>
  </div>
  <!--End-breadcrumbs-->
  <div class="container-fluid">

    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon" style="font-size: 14pt;"> จัดการผู้ใช้ </span>

          </div>
          <div class="widget-content">
            <!-- <a id="add-event" data-toggle="modal" href="#modal" class="btn btn-inverse btn-mini"><i class="icon-plus icon-white"></i> Add new event</a> -->
            <div class="row-fluid">
              <div class="span4">
                <label for="name">ชื่อ</label>
                <input type="text" class="span11" name="name" placeholder="กรุณากรอกข้อมูล">
              </div>
              <div class="span4">
                <label for="name">นามสกุล</label>
                <input type="text" class="span11" name="name" placeholder="กรุณากรอกข้อมูล">
              </div>
              <div class="span4">
                <label for="name">รหัสนักศึกษา</label>
                <input type="text" class="span11" name="name" placeholder="กรุณากรอกข้อมูล">
              </div>
            </div>
            <div class="row-fluid">
              <div class="span4">
                <label for="name">ชื่อชมรม</label>
                <input type="text" class="span11" name="name" placeholder="กรุณากรอกข้อมูล">
              </div>
              <div class="span4">
                <label for="name">ชื่อชมรม</label>
                <input type="text" class="span11" name="name" placeholder="กรุณากรอกข้อมูล">
              </div>
              <div class="span4">
                <label for="name">ชื่อชมรม</label>
                <input type="text" class="span11" name="name" placeholder="กรุณากรอกข้อมูล">
              </div>
            </div>
            <div class="row-fluid">
              <div class="span12" align="center">
              <button class="btn btn-success">btn-success</button>
              <button class="btn btn-inverse">btn-inverse</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
  <div class="modal hide in" id="modal" aria-hidden="true" style="display: none;">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal">×</button>
      <h3>Add a new event</h3>
    </div>
    <div class="modal-body">
      <p>Enter event name:</p>
      <p>
        <input id="event-name" type="text">
      </p>
    </div>
    <div class="modal-footer"> <a href="#" class="btn" data-dismiss="modal">Cancel</a> <a href="#" id="add-event-submit" class="btn btn-primary">Add event</a> </div>
  </div>

</div>

<!--end-main-container-part-->