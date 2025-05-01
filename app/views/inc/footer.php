<!--**********************************
            Footer start
        ***********************************-->
       
        <!--**********************************
            Footer end
        ***********************************-->

		<!--**********************************
           Support ticket button start
        ***********************************-->

        <!--**********************************
           Support ticket button end
        ***********************************-->


        </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="<?php echo URLROOT; ?>/assets2/vendor/global/global.min.js"></script>
	<script src="<?php echo URLROOT; ?>/assets2/vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
	<script src="<?php echo URLROOT; ?>/assets2/vendor/chart.js/Chart.bundle.min.js"></script>
	
	<!-- Counter Up -->
    <script src="<?php echo URLROOT; ?>/assets2/vendor/waypoints/jquery.waypoints.min.js"></script>
    <script src="<?php echo URLROOT; ?>/assets2/vendor/jquery.counterup/jquery.counterup.min.js"></script>	
	
	<!-- Apex Chart -->
	<script src="<?php echo URLROOT; ?>/assets2/vendor/apexchart/apexchart.js"></script>
	
	<script src="<?php echo URLROOT; ?>/assets2/vendor/owl-carousel/owl.carousel.js"></script>
	<script src="<?php echo URLROOT; ?>/assets2/vendor/bootstrap-touchspin/js/jquery.bootstrap-touchspin.min.js"></script>
	<!-- Dashboard 1 -->
	<script src="<?php echo URLROOT; ?>/assets2/js/dashboard/dashboard.js"></script>
    <script src="<?php echo URLROOT; ?>/assets2/js/custom.min.js"></script>
	<script src="<?php echo URLROOT; ?>/assets2/js/kodsnav-init.js"></script>
	
</body>
</html>




<input id="play_sound" type="button" value="PLAY" onclick="play()">

    
<script>
      function play() {
        alert("New Order");
        var audio = new Audio('<?php echo URLROOT; ?>/assets/hellowcart.mp3');
        audio.play();
      }
</script>


<?php
$model = New Page;
$orders = count($model->get_vendor_orders_all());
$cur_order = $_SESSION['notify_orders'];
$_SESSION['notify_orders'] = $orders;
if($orders = $cur_order){
?>
	<script>
	play();
    </script>
<?php
}
?>
