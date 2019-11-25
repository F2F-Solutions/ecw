<?php
	include_once '../../../Resource/AutoMnpRecharge.php';
	include '../../Header/Header.php';
?>
<style>
hr {
	margin-top: 0px;
    margin-bottom: 0px;
	border: 1px solid #3c8dbc;
}
.DeSelectedTap{
	background-color: #dcdcdc;
}
</style>
<div class="content-wrapper">
    <section class="content">
	<div class="row">
        <div class="col-md-12">
          <!-- Custom Tabs -->
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active DeSelectedTap">
				<a href="#AutoRecharge_1" data-toggle="tab"><h5><?php echo $lang['label_auto_recharge']; ?></h5></a>
			</li>
              <li class="DeSelectedTap" >
				<a href="#MNPRecharge_2" data-toggle="tab"><h5><?php echo $lang['label_mnp_recharge']; ?></h5></a>
			  </li>
            </ul>
            <div class="tab-content">
              <div class="tab-pane active" id="AutoRecharge_1">
					<?php include 'AutoRecharge.php'; ?>
              </div>
              <div class="tab-pane " id="MNPRecharge_2">
					<?php include 'MNPRecharge.php'; ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  
<?php
	include '../../Header/Footer.php';
?>
<script src="<?php echo $WebsiteUrl; ?>/Assets/js/AutoMNP/AutoMNPRecharge.js"></script>
<script>
$(function(){		
	$(".select2").select2();
});
</script>