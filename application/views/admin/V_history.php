<html>
	<head>
		<!-- Standard Meta -->
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1" />
		<!-- <meta name="viewport" content="width=device-width, initial-state=1.0, maximum-scale=1.0"> -->

	    <meta name="description" content="Developed By RnD Lab. @JK - Informatics ITS">
	    <meta name="author" content="RnD @JK">
	    <meta name="keywords" content="Buku Tamu, Ganteng, Keren, Aplikasi, Panutan">
	    <title>
	    	<?php
	    		echo isset($page_title) ? $page_title.' | ':'';
	    		echo $this->config->item('site_name');
	    	?>
	    </title>

	    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets'); ?>/semantic.min.css">
	    <script src="<?php echo base_url('assets'); ?>/jquery-2.1.4.min.js"></script>
		<script src="<?php echo base_url('assets'); ?>/semantic.min.js"></script>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets'); ?>/components/style.css">
		<link href="<?php echo base_url('assets'); ?>/components/hover.css" rel="stylesheet" media="all">
		<script src="<?php echo base_url('assets'); ?>/sweetalert.min.js"></script> 
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets'); ?>/sweetalert.css">
		<script src="https://cdn.datatables.net/1.10.10/js/jquery.dataTables.min.js"></script>
		<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.10/css/jquery.dataTables.min.css">

		<!-- SIDEBAR FUNCTION-->
		<script type="text/javascript">
  		$(function() 
  		{
    		$('#show-sidebar').click(function() 
    		{
    			$('#particles-js').show();
    			$('.menu.sidebar').sidebar('setting', 'transition', 'overlay')
      			$('.menu.sidebar').sidebar('toggle');
    		});

    		$('#hide-sidebar').click(function() 
    		{
    			$('#particles-js').show();
      			$('#show-sidebar').show();
      			$('.menu.sidebar').sidebar('setting', 'transition', 'overlay')
      			$('.menu.sidebar').sidebar('toggle');
    		});
  		});
		</script>
		<!-- END SIDEBAR -->
	</head>
  	<body>
  		<!-- SIDEBAR -->
  		<div class="ui left inverted vertical menu sidebar ">
      		<div class="item">
        		<div id="hide-sidebar" class="button">
          			<i class="sidebar icon"></i>BUKU TAMU
        		</div>
      		</div>
      		<a href="<?php echo site_url('home')?>" class="item">
	        	<i class="user icon"></i> Home Lab
	        </a>
      		<a href="<?php echo site_url('home/history')?>" class="item active">
	        	<i class="history icon"></i> Riwayat
	        </a>
	        <a href="<?php echo site_url('C_auth/logout')?>" class="item">
	        	<i class="sign out icon"></i> Logout
	        </a>
    	</div>
    	<!-- SIDEBAR END-->

	  	<div class="dimmed pusher">
	  		<div id="show-sidebar" class="ui button overlay fixed hvr-buzz" style="position: fixed; top: 10px; left: 10; z-index: 1; background-color : rgba(0,0,0,.0);">
        		<i id="sidebar-btn" class="sidebar huge inverted icon"></i>
      		</div>    

	  		<div id="particles-js"></div>

	  		<div class="ui middle aligned center aligned grid">
	  			<div class="double column-history">
	  				<h2 class="ui inverted header">
	  					<div class="content">PENGUNJUNG LAB. AJK</div>
	  				</h2>
	  				<div class="ui large segment" style="margin-bottom : 50px;">
	  					<table class="ui celled padded table" id="example" cellspacing="0" width="100%">
		  					<thead style="text-align:center;">
		  						<tr>
		  							<th>No</th>
		  							<th>Pengunjung</th>
		  							<th>Instansi</th>
		  							<th>Tanggal</th>
		  							<th>Waktu</th>
		  							<th>Keperluan</th>
		  						</tr>
		  					</thead>
		  					<tbody>
		  					<?php 
		  						$i=1;
		  						foreach ($history as $r)
		  						{
		  							echo '<tr>';
		  							echo '<td>'.$i.'</td>';
		  							echo '<td>'. $r['nama_pengunjung'].'</td>';
		  							echo '<td>'. $r['nama_instansi'].'</td>';
		  							echo '<td>'. $r['tanggal'].'</td>';
		  							echo '<td>'. $r['jam'].'</td>';
		  							echo '<td>'. $r['keperluan'].'</td>';
		  							echo '</tr>';
		  							$i = $i + 1;
		  						}
		  					?>
		  					</tbody>
		  				</table>
	  				</div>
	  			</div>
	  		</div>
	  	</div>
  	</body>
  	<footer>
  	</footer>

	<!-- PARTICLE-->
	<script src="<?php echo base_url('assets/particles');?>/particles.js"></script>
	<script src="<?php echo base_url('assets/particles');?>/demo/js/app.js"></script>
	<!--END PARTICLE-->
	<script>
		$('#show-sidebar').click(function() 
		{
	      		// $('#show-sidebar').hide();
	  		$('.ui.labeled.icon.sidebar').sidebar('toggle');
		});  


		$(document).ready(function() {
		    $('#example').DataTable( {
		        "pagingType": "full_numbers"
		    } );
		} );


	//$('#menu-sidebar').sidebar('toggle');
	</script>

</html>