<script type="text/javascript">
function surface_qty()
  {
    var x = document.getElementById("field_surface");
    var div = document.getElementById('surface_qty');
    div.innerHTML = x.value;
  }

function drawer_qty()
  {
    var x = document.getElementById("field_drawer");
    var div = document.getElementById('drawer_qty');
    div.innerHTML = x.value;
  }

function cupboard_qty()
  {
    var x = document.getElementById("field_cupboard");
    var div = document.getElementById('cupboard_qty');
    div.innerHTML = x.value;
  }

function vertical_drawer_qty()
  {
    var x = document.getElementById("field_vertical_drawer");
    var div = document.getElementById('vertical_drawer_qty');
    div.innerHTML = x.value;
  }

function name_output()
  {
    var x = document.getElementById("field_name");
    var div = document.getElementById('name_output');
    div.innerHTML = x.value;
  }

function email_output()
  {
    var x = document.getElementById("field_email");
    var div = document.getElementById('email_output');
    div.innerHTML = x.value;
  }
</script>


<div class="container-fluid quote">
  <div class="row">
    <?php echo do_shortcode('[formidable id=3]'); ?>
  </div>
</div>
