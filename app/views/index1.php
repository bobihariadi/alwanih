
<!DOCTYPE html>
<html lang="en"> 
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
<link rel="shortcut icon" href="style/images/favicon.png">
<title>ALWANIH & Co.</title>
<!-- Bootstrap core CSS -->
<link rel="icon" href="<?php echo base_url();?>img/favicon.png" type="image/png">
<link href="<?php echo base_url();?>style/css/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo base_url();?>style/css/plugins.css" rel="stylesheet">
<link href="<?php echo base_url();?>style.css" rel="stylesheet">
<link href="<?php echo base_url();?>style/css/color/blue.css" rel="stylesheet">
<link href='http://fonts.googleapis.com/css?family=Raleway:400,300,500,600,700,800,900' rel='stylesheet' type='text/css'>
<link href="<?php echo base_url();?>style/type/icons.css" rel="stylesheet">
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
<script>
 var site_url = '<?php echo site_url();?>';
 var base_url = '<?php echo base_url();?>';


 </script>
<style>
  .pend1 tr th,td{
    padding: 0px;        
  }
  .service_wrapper OL { counter-reset: item }
  .service_wrapper LI { display: block }
  .service_wrapper LI:before { content: counters(item, ".") "."; counter-increment: item; padding-right:10px; margin-left:-20px;}
  .service_wrapper table tr td p {margin-bottom:0px;}
</style>
</head>
<body class="onepage">
<div class="body-wrapper">
  <nav class="yamm navbar navbar-default default" role="navigation">
    <div class="container">
      <div class="navbar-header">
        <div class="basic-wrapper"> <a class="btn responsive-menu" data-toggle="collapse" data-target=".navbar-collapse"><i></i></a>
          <div class="navbar-brand"> <a href="onepage.html"><img src="<?php echo base_url();?>img/logo1.png" alt="" height="35"  data-src="<?php echo base_url();?>img/logo1.png" data-ret="<?php echo base_url();?>style/images/logo@2x.png" class="retina" /></a></div>
        </div>
        <!-- /.basic-wrapper --> 
      </div>
      <!-- /.navbar-header -->
      <div class="collapse navbar-collapse">
        <ul class="nav navbar-nav">
          <li class="current"><a href="index.php">Beranda</a></li>
          <li><a href="tentang.php">Tentang Kami</a></li>
          <li><a href="profile.php">Profile</a></li>
          <li><a href="nonlitigatie.php">Service</a>
          </li>
          <li><a href="client.php">Our Client</a></li>
          <li><a href="#hubungi">Hubungi Kami</a></li>
        </ul>
        <!-- /.navbar-nav --> 
      </div>
      <!-- /.navbar-collapse --> 
    </div>
    <!-- /.container --> 
  </nav>
  <!-- /.navbar -->
    
  <div class="parallax inverse-wrapper parallax2" id="hubungi">
    <div class="container inner text-center">
      <div class="thin">
        <h3 class="main-title text-center">HUBUNGI KAMI</h3>
        <p><span style="font-size:25px">Office Center</span><br> Jl. Mulya Baru No. 67, Karang Mulya,Karang Tengah, Kota Tangerang 15157</p>
        <p><span style="font-size:25px">Branch Office 1</span><br> Villa Rizky Ilami blok.a11 No.1 Bojong Nangka, Kelapa Dua Tangerang</p>
        <p><span style="font-size:25px">Branch Office 2</span><br> Jl.Raya Kresek No.4 Kp.Pulo Rt.004 Rw.013  Kel.Duri Kosambi Kec.Cengkareng Jakarta Barat 11750</p>
				<p><a href="https://gramosphere.com/user/al_advokat/1584501780/" ><img src="<?php echo base_url();?>img/instagram.png"> &nbsp; ALWANIH & Co.</a> &nbsp;&nbsp; <a href="https://www.facebook.com/alwanihadvokat" ><img src="<?php echo base_url();?>img/icon-fb.png"> &nbsp; ALWANIH & Co.</a> &nbsp;&nbsp; <a href="https://twitter.com/al_advocate" ><img src="<?php echo base_url();?>img/twitter-icon.png" width="28px;"> &nbsp; @al_advocate</a> &nbsp;&nbsp; <a href="mailto:alwanihlaw@gmail.com" ><img src="<?php echo base_url();?>img/email.png" width="28px;"> &nbsp; alwanihlaw@gmail.com</a> &nbsp;&nbsp;<a href="#"><img src="<?php echo base_url();?>img/phone.png" width="28px;"> &nbsp; 082111999875</a></p>        
       </div> 
       
       <div class="divide20"></div>
       <div class="divide20"></div>
       <h3 class="main-title text-center">FORM KONSULTASI HUKUM</h3>
       <div class="form">
        <form name="kontak" id="kontak" method="post" onsubmit="sendpesan(); return false;">
        
              <input class="input-text" type="text" name="nama" id="nama" value="" placeholder="Nama Lengkap">
        <input class="input-text" type="text" name="umur" id="umur" value="" placeholder="Umur">
        <input class="input-text" type="text" name="alamat" id="alamat" value="" placeholder="Alamat">
              <input class="input-text" type="text" name="email" id="email" value="" placeholder="email">
        <input class="input-text" type="text" name="telp" id="telp" value="" placeholder="Telp/HP">
              <textarea class="input-text text-area" name="pesan" id="pesan" cols="0" rows="0" placeholder="Konsultasi" ></textarea>
              <input class="btn col-sm-2" type="submit" value="Kirim"  > &nbsp;<div class="col-md-9 loadings" style="margin-top:15px;"></div>
        </form>
      </div>

      <!-- /.thin --> 
    </div>
    <!-- /.container --> 
  </div>
  <!-- /.parallax -->
  
  
  <footer class="footer inverse-wrapper">
    <div class="container inner">
        <div class="col-sm-8">
          <div class="widget">
            <h4 class="widget-title">Categories</h4>
            <ul class="circled">
              <li><a href="http://www.peradi.or.id" target="_blank" title="www.peradi.or.id">www.peradi.or.id</a></li>
              <li><a href="http://www.mahkamahagung.go.id" target="_blank" title="www.mahkamahagung.go.id" >www.mahkamahagung.go.id</a></li>
              <li><a href="http://www.mahkamahkonstitusi.go.id" target="_blank" title="www.mahkamahkonstitusi.go.id">www.mahkamahkonstitusi.go.id</a></li>
              <li><a href="http://putusan.mahkamahagung.go.id" target="_blank" title="putusan.mahkamahagung.go.id">putusan.mahkamahagung.go.id</a></li>
              <li><a href="http://www.hukumonline.com" target="_blank" title="www.hukumonline.com">www.hukumonline.com</a></li>
              <li><a href="http://dpn-apsi.or.id/" target="_blank" title="apsi">www.dpn-apsi.or.id</a></li>
            </ul>
          </div>
          <!-- /.widget --> 
          
        </div>
        <div class="col-sm-4">
            <a href="https://play.google.com/store?id=com.pw" target="_blank"><img src="<?php echo base_url();?>img/download.png"></a>
        </div>
        <!-- /column -->
        
        
    </div>
    <!-- .container -->
    
    <div class="sub-footer">
      <div class="container">
        <p class="pull-left">© <?php echo date('Y'); ?> by  <a href="javascript:void(0)">alwanih.com</a>.<br><text>Total Pengunjung : <?php echo $counter;?></text></p>
        <ul class="social pull-right">          
          <!--<li><a href="https://gramosphere.com/user/al_advokat/1584501780/" ><img src="<?php echo base_url();?>img/instagram.png" width="28px;">&nbsp;</a></li>
          <li><a href="https://twitter.com/al_advocate"><i class="icon-s-twitter"></i></a></li>
          <li><a href="https://www.facebook.com/alwanihadvokat"><i class="icon-s-facebook"></i></a></li>
          <li><a href="#"><i class="icon-s-pinterest"></i></a></li>
          <li><a href="mailto:alwanihlaw@gmail.com" ><img src="<?php echo base_url();?>img/email.png" width="28px;"> &nbsp; alwanihlaw@gmail.com</a></li>-->
        </ul>
        <!-- .social --> 
      </div>
      <!-- .container --> 
    </div>
    <!-- .sub-footer --> 
  </footer>
  <!-- /footer --> 
  
  
  
</div>
<!--/.body-wrapper --> 
<script src="<?php echo base_url();?>style/js/jquery.min.js"></script> 
<script src="<?php echo base_url();?>style/js/bootstrap.min.js"></script> 
<script src="<?php echo base_url();?>style/js/plugins.js"></script> 
<script src="<?php echo base_url();?>style/js/jquery.themepunch.tools.min.js"></script> 
<script src="<?php echo base_url();?>style/js/scripts.js"></script>
<!-- DEMO ONLY -->
<link rel="alternate stylesheet" property="stylesheet" type="text/css" href="<?php echo base_url();?>switcher/aqua.css" title="kwoonnewaqua-color" media="screen" />
<link rel="alternate stylesheet" property="stylesheet" type="text/css" href="<?php echo base_url();?>switcher/blue.css" title="kwoonnewblue-color" media="screen" />
<link rel="alternate stylesheet" property="stylesheet" type="text/css" href="<?php echo base_url();?>switcher/brown.css" title="kwoonnewbrown-color" media="screen" />
<link rel="alternate stylesheet" property="stylesheet" type="text/css" href="<?php echo base_url();?>switcher/gray.css" title="kwoonnewgray-color" media="screen" />
<link rel="alternate stylesheet" property="stylesheet" type="text/css" href="<?php echo base_url();?>switcher/green.css" title="kwoonnewgreen-color" media="screen" />
<link rel="alternate stylesheet" property="stylesheet" type="text/css" href="<?php echo base_url();?>switcher/lime.css" title="kwoonnewlime-color" media="screen" />
<link rel="alternate stylesheet" property="stylesheet" type="text/css" href="<?php echo base_url();?>switcher/mint.css" title="kwoonnewmint-color" media="screen" />
<link rel="alternate stylesheet" property="stylesheet" type="text/css" href="<?php echo base_url();?>switcher/navy.css" title="kwoonnewnavy-color" media="screen" />
<link rel="alternate stylesheet" property="stylesheet" type="text/css" href="<?php echo base_url();?>switcher/orange.css" title="kwoonneworange-color" media="screen" />
<link rel="alternate stylesheet" property="stylesheet" type="text/css" href="<?php echo base_url();?>switcher/pink.css" title="kwoonnewpink-color" media="screen" />
<link rel="alternate stylesheet" property="stylesheet" type="text/css" href="<?php echo base_url();?>switcher/purple.css" title="kwoonnewpurple-color" media="screen" />
<link rel="alternate stylesheet" property="stylesheet" type="text/css" href="<?php echo base_url();?>switcher/red.css" title="kwoonnewred-color" media="screen" />
<link rel="alternate stylesheet" property="stylesheet" type="text/css" href="<?php echo base_url();?>switcher/rose.css" title="kwoonnewrose-color" media="screen" />
<link rel="alternate stylesheet" property="stylesheet" type="text/css" href="<?php echo base_url();?>switcher/yellow.css" title="kwoonnewyellow-color" media="screen" />
<script type="text/javascript" src="<?php echo base_url();?>switcher/switchstylesheet.js"></script>
<script type="text/javascript">
$(document).ready(function(){ 
	$(".changecolor").switchstylesheet( { seperator:"color"} );
});


function sendpesan(){
	if (cekInputPermohonan())
		{
			$(".loadings").html('<i class="fa fa-refresh fa-spin"></i>');
			var theurl = site_url + "home/kirim_pesan/"+Math.random();
			$.ajax({
				type: 'POST',
				url: theurl,
				data: $("#kontak").serialize(),
				dataType: 'json',
				success: function(data) {	
					if(data.nil==1){
						$('.loadings').html('<i class="fa fa-check" style="font-size:1.2em;color:green">&nbsp;'+data.txt+'</i>')
						setTimeout(function() {
							$('.loadings .fa').fadeOut();							
						  }, 3000);					  
					}else{
						$('.loadings').html('<i class="fa fa-times" style="font-size:1.2em;color:red" >&nbsp;'+data.txt+'</i>');
						setTimeout(function() {
							$('.loadings .fa').fadeOut();						
						  }, 3000);
					}
					
				}
			})	
			return false;
		}return false;
}

function cekInputPermohonan()
	{
		var errorString = "Silahkan melengkapi data berikut:";
		var panjangAwal = errorString.length;
		
		if ($('[name="nama"]').val() == "")
			errorString += "\n- Nama Harus diisi";
		if ($('[name="email"]').val() == "")
			errorString += "\n- Alamat Email harus diisi";
		if ($('[name="email"]').val() != ""){		
				if(!checkemail($('[name="email"]').val()))
					errorString += "\n- Alamat email tidak valid.";	
			}
		if ($('[name="pesan"]').val() == "")
			errorString += "\n- Pesan Harus diisi";
		
		var panjangAkhir = errorString.length;
		
		if (panjangAwal == panjangAkhir)
		{
			return true;
		}
		else
		{
			alert(errorString);
			return false;
		} 
	}
	
function checkemail(str)
{
	var filter=/^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i
	if (filter.test(str))
		testresults=true;
	else
		testresults=false;
	return (testresults);
}
</script>
</body>
</html>
