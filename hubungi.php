<!DOCTYPE html>
<!--
Template Name: Bronea
Author: <a href="http://www.os-templates.com/">OS Templates</a>
Author URI: http://www.os-templates.com/
Licence: Free to use under our free template licence terms
Licence URI: http://www.os-templates.com/template-terms
-->
<html lang="">
<!-- To declare your language - read more here: https://www.w3.org/International/questions/qa-html-language-declarations -->
<head>
<title>ALWANIH & Co.</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
<style type="text/css">
 
.samping{
  width: 30px;
    right: 0;
    position: fixed;
    top: 33%;
    height: 230px;
    margin-right:10px;
   }
</style>
</head>
<body id="top">
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- Top Background Image Wrapper -->
<div class="bgded overlay" style="background-image:url('https://raw.githubusercontent.com/bobihariadi/alwanih/main/images/logo/background tentang kami.jpg_');background-position: center;  " > 
  <!-- ################################################################################################ -->
  <!-- <div class="wrapper row0">
    <div id="topbar" class="hoc clear"> 
      <!-- ################################################################################################ -->
      <!-- <div class="fl_left">
        <ul class="nospace">
          <li><a href="#"><i class="fa fa-lg fa-home"></i></a></li>
          <li><a href="#">About</a></li>
          <li><a href="#">Contact</a></li>
          <li><a href="#">Login</a></li>
          <li><a href="#">Register</a></li>
        </ul>
      </div>
      <div class="fl_right">
        <ul class="nospace">
          <li><i class="fa fa-phone"></i> +00 (123) 456 7890</li>
          <li><i class="fa fa-envelope-o"></i> info@domain.com</li>
        </ul>
      </div> -->
      <!-- ################################################################################################ -->
    <!-- </div>
  </div> -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <?php include('header.php'); ?>
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <div class="wrapper">
    <div id="pageintro" class="hoc clear" style="max-width:100%;"> 
      <!-- ################################################################################################ -->
      <img src="https://raw.githubusercontent.com/bobihariadi/alwanih/main/images/logo/hub1.png">
      <img src="https://raw.githubusercontent.com/bobihariadi/alwanih/main/images/logo/hub2.png" style="margin-top:-5px">  

      <div style="position:absolute;top:43em;margin-left:56em;width:400px">
      <form name="kontak" id="kontak" method="post" onsubmit="sendpesan(); return false;" style="width:100%; color:#000">
        
        <input class="input-text" type="text" name="nama" id="nama" value="" placeholder="Nama Lengkap" style="width:400px;padding:10px">
        <input class="input-text" type="text" name="umur" id="umur" value="" placeholder="Umur" style="width:400px;padding:10px">
        <input class="input-text" type="text" name="alamat" id="alamat" value="" placeholder="Alamat" style="width:400px;padding:10px">
        <input class="input-text" type="text" name="email" id="email" value="" placeholder="email" style="width:400px;padding:10px">
        <input class="input-text" type="text" name="telp" id="telp" value="" placeholder="Telp/HP" style="width:400px;padding:10px" >
        <textarea class="input-text text-area" name="pesan" id="pesan" style="width:400px;" rows="5" placeholder="  Konsultasi" ></textarea>
              <input class="btn col-sm-2" type="submit" value="Kirim"  > &nbsp;<div class="col-md-9 loadings" style="margin-top:15px;"></div>
        </form>
      </div>

      <div style="position:absolute;top:68em;margin-left:56em; "><center>
      <a href="http://peradi.or.id" target="_blank"><img src="https://raw.githubusercontent.com/bobihariadi/alwanih/main/images/logo/b88dbb_2584920392564525b045416ff3411390-mv2.png" style="width:200px;"></a>
      </center></div>
      <div style="position:absolute;top:73em;margin-left:56em; "><center>
      <a href="http://apsi.web.id" target="_blank"><img src="https://raw.githubusercontent.com/bobihariadi/alwanih/main/images/logo/b88dbb_855de64c6f124b8ea64405a7aa8dc1bc-mv2.png" style="width:200px;"></a>
      </center></div>

      <!-- ################################################################################################ -->
    </div>
  </div>

  <div class="samping" >
   <a target="_blank" href="https://www.youtube.com/channel/UCwUdno3oyowqSlwi_S1ijTw"><img src="https://raw.githubusercontent.com/bobihariadi/alwanih/main/images/logo/6-2-youtube-png-picture.png" ></a>
    <a target="_blank" href="https://www.facebook.com/alwanihadvokat/?fref=ts"><img src="https://raw.githubusercontent.com/bobihariadi/alwanih/main/images/logo/facebook-icon-5.png" style="margin-top:10px;" ></a>
    <a target="_blank" href="https://twitter.com/al_advocate"><img src="https://raw.githubusercontent.com/bobihariadi/alwanih/main/images/logo/twitter-bird-icon-logo-vector-400x400.png" style="margin-top:10px;" ></a>
    <a target="_blank" href="https://plus.google.com/101720369054740362192?hl=id"><img src="https://raw.githubusercontent.com/bobihariadi/alwanih/main/images/logo/74d327d3628e4f14800301f1c61013b0.png" style="margin-top:10px;" ></a>
    <a target="_blank" href="https://www.instagram.com/al_counsellor/"><img src="https://raw.githubusercontent.com/bobihariadi/alwanih/main/images/logo/instagram-Logo-PNG-Transparent-Background-download.png" style="margin-top:10px;" ></a>
  </div>

  <!-- ################################################################################################ -->
</div>
<!-- End Top Background Image Wrapper -->
<div class="wrapper row5" style="max-height:5px;">
  <div id="copyright" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <p class="fl_left">copyright &copy; 2019 - all rights reserved ALWANIH & Co. </p>
    <p class="fl_right">Visited : <b><?php echo number_format($aa,0,",",".");?></b></p>
    <!-- ################################################################################################ -->
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
<!-- JAVASCRIPTS -->
<script src="layout/scripts/jquery.min.js"></script>
<script src="layout/scripts/jquery.backtotop.js"></script>
<script src="layout/scripts/jquery.mobilemenu.js"></script>
<script type="text/javascript">
  function sendpesan(){
    var site_url = 'http://alwanih.com/index_.php/';
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