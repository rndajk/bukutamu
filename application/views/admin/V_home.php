<html>
	<head>
		<!-- Standard Meta -->
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1" />
		<!-- <meta name="viewport" content="width=device-width, initial-state=1.0, maximum-scale=1.0"> -->

	    <meta name="description" content="Developed By RnD Lab. @JK - Informatics ITS">
	    <meta name="author" content="RnD @JK">
	    <meta name="keywords" content="Buku Tamu, Ganteng, Keren, Aplikasi, Panutan">
	    <link rel="shortcut icon" href="<?php echo base_url('assets'); ?>/images/favicon.ico">
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
      		<a href="<?php echo site_url('home')?>" class="item active">
	        	<i class="user icon"></i> Home Lab
	        </a>
      		<a href="<?php echo site_url('home/history')?>" class="item">
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
	  			<div class="column-home">
	  				<h2 class="ui inverted header">
	  					<div class="content">SELAMAT DATANG DI LAB. AJK</div>
	  				</h2>
	  				<form id="form_masuk"name="form-penggunjung" action="<?php echo site_url('C_Pengunjungterdaftar/add');?>" method='POST' class="ui large form segment error">
	  					<div class="ui stacked">
	  						<div class="field">
								<label>Instansi</label>
								<select id="instansi" name="v_instansi" class="ui dropdown">
									<option value="">Pilih Instansi</option>
									<?php
										// echo site_url('C_Pengunjungterdaftar/get_instansi');
										foreach ($instansi as $row) 
										{
											if($row->idinstansi==1)
											{
												echo '<option value="'.$row->idinstansi.'" selected="">'.$row->nama_instansi.'</option>';	
											}
											else 
											echo '<option value="'.$row->idinstansi.'">'.$row->nama_instansi.'</option>';
										}
									?>
									<option value=0>Lainnya</option>
								</select>
							</div>
							<!-- NON ITS -->
							<div id="nonits" class="field">
								<label>Nama Instansi</label>
								<div>
									<input type="text" name="v_newinstansi" placeholder="eg : Universitas Indonesia">
								</div>
							</div>
							<!--END NON ITS-->
							<div id="id" class="field">
								<label>Nomor Identitas (NIP/NRP/NIM/KTP/SIM)</label>
								<div class="five fields">
		    						<div class="field">	
		    							<div class="ui radio checkbox">
											<input type="radio" name="idPengenal" value="nrp" checked="checked"><label>NRP</label>
		    							</div>
		    						</div>
									<div class="field">
									   	<div class="ui radio checkbox">
											<input type="radio" name="idPengenal" value="nip"><label>NIP</label>
										</div>
									</div>
									<div class="field">
									   	<div class="ui radio checkbox">
											<input type="radio" name="idPengenal" value="ktp"><label>KTP</label>
										</div>
									</div>
									<div class="field">
									   	<div class="ui radio checkbox">
											<input type="radio" name="idPengenal" value="sim"><label>SIM</label>
										</div>
									</div>
									<div class="field">
									   	<div class="ui radio checkbox">
											<input type="radio" name="idPengenal" value="nim"><label>NIM</label>
										</div>
									</div>	
						  		</div>	
								<div class="ui input">
									<input type="text" name="v_nrp" placeholder="eg : 5113100999" id="autocomplete-ajax">
								</div>
							</div>
							<div id="name" class="field">
								<label>Nama Lengkap</label>
								<div class="ui input">
									<input type="text" name="v_nama" placeholder="eg : Lionel Messi" id="nama">
								</div>
							</div>
							<div class="field">
								<label>Tahun Lahir</label>
								<div class="ui input">
									<input type="text" name="v_tahun" placeholder="eg : 1995" id="ttl">
								</div>
							</div>
							<div class="field">
								<label>Kota Asal</label>
								<div class="ui input">
									<input type="text" name="v_kota" placeholder="eg : Surabaya" id="kota">
								</div>
							</div>
							<div class="field">
								<label>Nomor HP</label>
								<div class="ui input">
									<input type="text" name="v_telp" placeholder="eg : 081234567890" id="hp">
								</div>
							</div>
							<div id="keperluan" class="field">
								<label for="v_keperluan">Keperluan</label>
								<select id="d_keperluan" name="v_keperluan" class="ui dropdown">
									<option value="">Pilih Keperluan Anda</option>
									<option value="Praktikum">Praktikum</option>
									<option value="Buat Tugas">Buat Tugas</option>
									<option value="Cari Internet">Cari Internet</option>
									<option value="Mengerjakan TA">Mengerjakan TA</option>
									<option value="Lainnya">Lainnya</option>
								</select>
							</div>
							<div id="nkeperluan" class="field">
								<div class="ui input">
									<input type="text" name="v_nkeperluan" placeholder="Keperluan Lainnya (eg : Mencuci Motor)">
								</div>
							</div>
							<button type="submit" class="ui fluid large blue submit button">
								Masuk Lab.</button>
	  					</div>
					</form>
					<!-- MODAL BERHASIL -->

					<div id="berhasil" class="ui basic small modal">
					  	<div class="ui content" style="text-align : center; ">
					  		<h2>TERIMA KASIH!</h2>
					  		<!-- <div class="ui image">
					  			<img src="<?php echo base_url('assets/images');?>/yes.gif"> 
					  		</div> -->
					    	<div class="ui description" style="text-align : center;">
					    		<img src="<?php echo base_url('assets/images');?>/yes.gif" style="margin-bottom : 10px;"> 
					      		<p style="font-size:16pt;">Selamat menikmati fasilitas Lab :)</p>
					    	</div>
					  	</div>
					  	<div id="oke" class="actions" style="text-align : center;">
					    	<div class="ui blue right icon center aligned button" onclick="close_berhasil();">
					        	<i class="checkmark icon"></i>
					        	OKAY
					    	</div>
					  	</div>
					</div>
					<!-- END MODAL-->
	  			</div>
	  		</div>
  		</div>
  	</body>
  	<footer>
  	</footer>

  	<!--CACING
	<script type="text/javascript" src="<?php echo base_url('assets/background');?>/libs/sketch.js"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/background');?>/src/glassyWorms.js"></script>
	<script type="text/javascript">
		$(function(){
			$('#bg').glassyWorms({
				colors: ['#fff', '#00ccff'], 
				useStyles: true
			});
		});
	</script>
	END CACING-->

	<!-- PARTICLE-->
	<script src="<?php echo base_url('assets/particles');?>/particles.js"></script>
	<script src="<?php echo base_url('assets/particles');?>/demo/js/app.js"></script>
	<!--END PARTICLE-->

	<!-- AUTO COMPLETE -->


    <!-- END AUTO COMPLETE -->

  	<script>	
  		$("#nonits").hide();
  		$('#nkeperluan').hide();
  		$("#instansi").change(function () 
  		{
	        if ($("#instansi").val() == 0) 
	        {
	        		
	        	$("#nonits").show();	
	        }
	        else if ($("#instansi").val()==1) 
	        {
	        	
	        	$("#nonits").hide();
	        }
	        else
	        {
	        		
	        	$("#nonits").hide();
	        }
	    });

	    $('#d_keperluan').change(function ()
	    {
	    	if ($('#d_keperluan').val() == 'Lainnya')
	    	{
	    		$('#nkeperluan').show();
	    	}
	    	else
	    	{
	    		$('#nkeperluan').hide();
	    	}
	    });

  		$('#instansi').dropdown();
  		$('#d_keperluan').dropdown();

  		$("berhasil").hide();

  		function submitForm()
  		{
  			$('#form_masuk').submit();
  		}

  		$(document).ready(function(){
  			<?php if ($this->session->flashdata('notif')) { ?>
  				berhasil();
  			<?php } ?>
  		});

  		function berhasil()
  		{
  			$('.basic.small.modal').modal({
    			blurring: true
  			}).
  			modal('setting', 'transition', 'bounce').
  			modal('show');
  		}

  		function close_berhasil()
  		{
  			$('.basic.small.modal').modal({
    			blurring: true
  			}).modal('hide');
  		}
  		
    	var validationRule={
		      v_nama: {
		        identifier: 'v_nama',
		        rules: [
		          {
		            type   : 'empty',
		            prompt : 'Please enter your name'
		          }
		        ]
		      },
		      v_nrp: {
		        identifier: 'v_nrp',
		        rules: [
		          {
		            type   : 'empty',
		            prompt : 'Please enter your id'
		          },
		          {
		            type   : 'minLength[10]',
		            prompt : 'Your id must be at least {ruleValue} characters'
		          }
		        ]
		      },
		      v_telp: {
		        identifier: 'v_telp',
		        rules: [
		          {
		            type   : 'empty',
		            prompt : 'Please enter your phone number'
		          }
		        ]
		      },
		      v_tahun: {
		        identifier: 'v_tahun',
		        rules: [
		          {
		            type   : 'empty',
		            prompt : 'Please enter your birth year'
		          }
		        ]
		      },
		       v_keperluan: {
		        identifier: 'v_keperluan',
		        rules: [
		          {
		            type   : 'empty',
		            prompt : 'Please enter your bussines matter'
		          }
		        ]
		      },
		      v_kota: {
		        identifier: 'v_kota',
		        rules: [
		          {
		            type   : 'empty',
		            prompt : 'Please enter your home city'
		          }
		        ]
		      }
		    }

		    $('[name=v_instansi]').change(function(){
		    	if($('[name=v_newinstansi').is(":visible"))
		    	{
		    		validationRule.v_newinstansi={}
			    	validationRule.v_newinstansi.rules=[]
			    	validationRule.v_newinstansi.rules[0]=
			    	{
			    		type   : 'empty',
			            prompt : 'Plese enter your institute'	
			    	}
			    	$('[name=v_newinstansi').val("")	
		    	}
		  			else delete validationRule.v_newinstansi	
		    
		    	$('.ui.form').unbind();
		    	$('.ui.form')
				  .form({
				  	on: 'blur',
				  	inline : true,
				    fields: validationRule
				  });
			 })

	
		    $('[name=v_keperluan]').change(function(){
		    	if($('[name=v_nkeperluan').is(":visible"))
		    	{
		    		validationRule.v_nkeperluan={}
			    	validationRule.v_nkeperluan.rules=[]
			    	validationRule.v_nkeperluan.rules[0]=
			    	{
			    		type   : 'empty',
			            prompt : 'Plese enter your bussines matter'	
			    	}
			    	$('[name=v_nkeperluan').val("")	
		    	}
		    	else delete validationRule.v_nkeperluan

		    	$('.ui.form').unbind();
		    	$('.ui.form')
				  .form({
				  	on: 'blur',
				  	inline : true,
				    fields: validationRule
				  });
			 })

		    $('[name=idPengenal]').change(function(){
		    	if($('[name=idPengenal]:checked').val()=='nrp')
		    	validationRule.v_nrp.rules[1]=
		          {
		            type   : 'minLength[10]',
		            prompt : 'NRP must be at least {ruleValue} characters'
		          }
		        else if($('[name=idPengenal]:checked').val()=='nip')
		    	validationRule.v_nrp.rules[1]=
		          {
		            type   : 'minLength[18]',
		            prompt : 'NIP must be at least {ruleValue} characters'
		          }
		        else if($('[name=idPengenal]:checked').val()=='ktp')
		    	validationRule.v_nrp.rules[1]=
		          {
		            type   : 'minLength[18]',
		            prompt : 'KTP must be at least {ruleValue} characters'
		          }
		        else if($('[name=idPengenal]:checked').val()=='sim')
		    	validationRule.v_nrp.rules[1]=
		          {
		            type   : 'minLength[18]',
		            prompt : 'SIM must be at least {ruleValue} characters'
		          }
		        else if($('[name=idPengenal]:checked').val()=='nim')
		    	validationRule.v_nrp.rules[1]=
		          {
		            type   : 'minLength[18]',
		            prompt : 'NIM must be at least {ruleValue} characte	rs'
		          }
		         $('.ui.form').unbind();
		       	 $('.ui.form')
				  .form({
				  	on: 'blur',
				  	inline : true,
				    fields: validationRule
				  });
		    });
		   ;
	    $('.ui.form')
		  .form({
		  	on: 'blur',
		  	inline : true,
		    fields: validationRule
		  });


  	//PUNYA RISMA
  	// 	$('[name=v_nrp]').change(function(){
  			// var val = ""
  			// $("input:radio[name=idPengenal]").click(function() {
			//     val = $(this).val();
			// });
  	// 		var val = $('[name=idPengenal]').val();
  	// 		console.log(val);
  	// 		if(val == 'nip')
  	// 		{
  	// 			if($('[name=v_nrp]').val().length!=18)
  	// 			{
  	// 				sweetAlert('Karakter NIP Tidak Sesuai','Panjang NIP harus 18 karakter','error');
  	// 			}
  	// 		}
  	// 		else if(val == 'nrp')
  	// 		{
  	// 			if($('[name=v_nrp]').val().length!=10)
  	// 			{
  	// 				sweetAlert('Karakter NRP Tidak Sesuai','Panjang NRP harus 10 karakter','error');
  	// 			}
  	// 		}
  	// 		else if(val == 'ktp')
  	// 		{
  	// 			if($('[name=v_nrp]').val().length!=16)
  	// 			{
  	// 				sweetAlert('Karakter KTP Tidak Sesuai','Panjang KTP harus 16 karakter','error');
  	// 			}
  	// 		}
  	// 		else if(val == 'sim')
  	// 		{
  	// 			if($('[name=v_nrp]').val().length!=17)
  	// 			{
  	// 				sweetAlert('Karakter SIM Tidak Sesuai','Panjang SIM harus 17 karakter','error');
  	// 			}
  	// 		}
  	// 	});
		var countries = {
			<?php 
				$count = sizeof($pengunjung);
				foreach ($pengunjung as $i => $idPengunjung) 
				{
					if ($count-1 == $i) echo '"'.$idPengunjung['idpengunjung'].'" : "'.$idPengunjung['nrp_pengunjung'].'"';
					else echo '"'.$idPengunjung['idpengunjung'].'" : "'.$idPengunjung['nrp_pengunjung'].'",';
				}
			?>
		}
  	</script>

  	<script>
	document.getElementById("autocomplete-ajax").onkeyup = function() {completeAll()};

	function completeAll() 
    {
    	var nrp = document.getElementById("autocomplete-ajax").value;
    	nrp_length = nrp.length;
    	if (nrp_length==10) 
    	{
    		var request = $.ajax(
	        {
	          url: "<?php echo site_url('C_Pengunjungterdaftar/getPengunjungByNrp/');?>/"+nrp,
	          method: "GET"
	        });
	         
	        request.done(function(detail) 
	        {
	        	// console.log(detail.nama_pengunjung);
	        	if (detail!=null)
	        	{
	        		$("#nama").val(detail.nama_pengunjung)
	        		$("#ttl").val(detail.tahun_lahir)
	        		$("#kota").val(detail.kota_asal)
	        		$("#hp").val(detail.telp_pengunjung)
	        	}

	        	console.log(detail);
	        	// console.log(detail);
	        	// console.log(dataUser);
	        });
	         
	        request.fail(function( jqXHR, textStatus ) 
	        {
	          alert( "Request failed: " + textStatus );
	        });
    	}
    }

	</script>

</html>