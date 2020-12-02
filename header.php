<?php 
//session_start();
$now = time();

	if (isset($_SESSION['discard_after']) && $now > $_SESSION['discard_after']) {
	    session_unset('aaaa');
	    session_destroy();
	    session_start();
	    $_SESSION['discard_after'] = $now + 3600;
	}
		
	$file = fopen("counter.txt","r");    
	$aa =  fgets($file);       
	if(empty($_SESSION['aaaa'])) {     	
		$_SESSION["aaaa"] = '1';      
		$aa = $aa+1;
		fclose($file);
		$file = fopen("counter.txt","w");
		fwrite($file,$aa);      
		fclose($file);
	}

?>

<div class="wrapper row1">
    <header id="header" class="hoc clear"> 
      <!-- ################################################################################################ -->
      <div id="logo" class="fl_left">
        <h1><a style="border:2px solid #fff;padding:3px;" href="index.php">ALWANIH & Co.</a></h1>
      </div>
      <div style="padding-top:26px;margin-left:15px;;float:left">
        <img src="https://raw.githubusercontent.com/bobihariadi/alwanih/main/images/logo/b88dbb_9605f4a7eadb406a85a0ac0bcad4ccca-mv2.png" style="width:30px;" >
        <b style="font-size:20px;">082 111 999 875</b>
      </div>
      <!-- ################################################################################################ -->
      <nav id="mainav" class="fl_right" style="margin-right: -7em">
        <ul class="clear">
          <li ><a href="index.php">Beranda</a></li>
          <li><a href="tentang.php">Tentang Kami</a></li>
          <li><a href="profile.php">Profile</a></li>
          <li><a class="drop" href="service.php">Service</a>
            <ul>
              <li><a href="nonlitigatie.php">NON LITIGATIE</a></li>
              <li><a href="perizinan.php">Hukum Perizinan</a></li>
              <li><a href="perusahaan.php">Hukum Perusahaan</a></li>
              <li><a href="pertanahan.php">Hukum Pertanahan</a></li>
              <li><a href="litigatie.php">LITIGATIE</a></li>
            </ul>
          </li>
          <li><a href="client.php">OUR CLIENT</a></li>          
          <li><a class="drop" href="news.php">NEWS</a>
            <ul>
              <li><a href="perceraian.php">Perceraian di Pengadilan</a></li>
              <li><a href="sertipikat.php">Sertipikat Tanah</a></li>
              <li><a href="advocat.php">Profesi Advokat</a></li>
              <li><a href="keluarga.php">Hukum Keluarga</a></li>
              <li><a href="lawyer.php">Lawyer Perusahaan</a></li>
            </ul>
          </li>
          <li><a href="hubungi.php">Hubungi kami</a></li>
        </ul>
      </nav>
      <!-- ################################################################################################ -->
    </header>
  </div>