<!--Footer-part-->

<div class="row-fluid">
  <div id="footer" class="span12"> 2013 &copy; Matrix Admin. Brought to you by <a href="http://themedesigner.in">Themedesigner.in</a> </div>
</div>

<!--end-Footer-part-->

<script src="<?php echo base_url() . 'theme/matrix-admin/' ?>js/excanvas.min.js"></script> 
<script src="<?php echo base_url() . 'theme/matrix-admin/' ?>js/jquery.min.js"></script> 
<script src="<?php echo base_url() . 'theme/matrix-admin/' ?>js/jquery.ui.custom.js"></script> 
<script src="<?php echo base_url() . 'theme/matrix-admin/' ?>js/bootstrap.min.js"></script> 
<script src="<?php echo base_url() . 'theme/matrix-admin/' ?>js/jquery.flot.min.js"></script> 
<script src="<?php echo base_url() . 'theme/matrix-admin/' ?>js/jquery.flot.resize.min.js"></script> 
<script src="<?php echo base_url() . 'theme/matrix-admin/' ?>js/jquery.peity.min.js"></script> 
<script src="<?php echo base_url() . 'theme/matrix-admin/' ?>js/fullcalendar.min.js"></script> 
<script src="<?php echo base_url() . 'theme/matrix-admin/' ?>js/matrix.js"></script> 
<script src="<?php echo base_url() . 'theme/matrix-admin/' ?>js/matrix.dashboard.js"></script> 
<script src="<?php echo base_url() . 'theme/matrix-admin/' ?>js/jquery.gritter.min.js"></script> 
<script src="<?php echo base_url() . 'theme/matrix-admin/' ?>js/matrix.interface.js"></script> 
<script src="<?php echo base_url() . 'theme/matrix-admin/' ?>js/matrix.chat.js"></script> 
<script src="<?php echo base_url() . 'theme/matrix-admin/' ?>js/jquery.validate.js"></script> 
<script src="<?php echo base_url() . 'theme/matrix-admin/' ?>js/matrix.form_validation.js"></script> 
<script src="<?php echo base_url() . 'theme/matrix-admin/' ?>js/jquery.wizard.js"></script> 
<script src="<?php echo base_url() . 'theme/matrix-admin/' ?>js/jquery.uniform.js"></script> 
<script src="<?php echo base_url() . 'theme/matrix-admin/' ?>js/select2.min.js"></script> 
<script src="<?php echo base_url() . 'theme/matrix-admin/' ?>js/matrix.popover.js"></script> 
<script src="<?php echo base_url() . 'theme/matrix-admin/' ?>js/jquery.dataTables.min.js"></script> 
<script src="<?php echo base_url() . 'theme/matrix-admin/' ?>js/matrix.tables.js"></script> 

<script type="text/javascript">
  // This function is called from the pop-up menus to transfer to
  // a different page. Ignore if the value returned is a null string:
  function goPage (newURL) {

      // if url is empty, skip the menu dividers and reset the menu selection to default
      if (newURL != "") {
      
          // if url is "-", it is this page -- reset the menu:
          if (newURL == "-" ) {
              resetMenu();            
          } 
          // else, send page to designated URL            
          else {  
            document.location.href = newURL;
          }
      }
  }

// resets the menu selection upon entry to this page:
function resetMenu() {
   document.gomenu.selector.selectedIndex = 2;
}
</script>
</body>
</html>
