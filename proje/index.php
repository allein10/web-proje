  





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>VFX Studio Website </title>
    <!-- Css -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
<link rel="shortcut icon" type="png" href="/logo.png"/>
	
</head>
<body>
	<script type="text/javascript" src="js/sweetalert2.all.min.js"></script>
 <?php

 include("baglan.php");

if(isset($_POST["kaydet"]))
{
    $name=$_POST["isim"];
    $tel=$_POST["tel"];
    $email=$_POST["email"];
     $kart=$_POST["kart"];
    $cvc=$_POST["cvc"];
    $son=$_POST["son"];

 
    
    if(empty($name) or empty($tel) or empty($email) or empty($kart)or empty($cvc) or empty($son)  )
{
    
    	 echo '<script>Swal.fire("Başarısız", "Lütfen gerekli alanları doldurun!", "error"); </script>';
}
else {
$ekle="INSERT INTO kullanici (kullanici_adi,kullanici_tel,kullanici_email,kullanici_kart,kullanici_cvc,kullanici_son) VALUES('$name','$tel','$email','$kart','$cvc','$son')" ;
    $calistirekle = mysqli_query($baglanti,$ekle);
 echo '<script>Swal.fire("Başarılı", "En kısa sürede paketiniz mail adresinize gönderilecektir!", "success"); </script>';

    

 mysqli_close($baglanti);

}
}
    
   


?>

    <!-- Header -->
    <header id="header">
	
        <div class="container">
			<a href="index.php"><img class="logo" src="img/logo1.png" alt="Website Logo"></a>
           
        	<div class="header-icerik">
				<h1><font color="">Aradığınız Görsel Efekt Eklentileri Burada!</font></h1>
			<span class="daire"></span>
				<p><font color="#FFFFFF"> Plugin (Eklenti), bir ana programa normalde sahip olmadığı ekstra özellikleri kazandıran işlevsel yazılımlardır. Plugin'lerin hiçbiri kendi başına bir program işlevi göremez ve ana programdan bağımsız olarak tek başına çalışamaz.  Birçok yazılım geliştiricilerin önünü açmak ve kendi düşünemedikleri noktalarda geliştiricilerin yardımda bulunması amacıyla VFX studio hizmetinizdedir. </font> </p> <br>
			
				<div class="cizgi">
				<span class="cizgi1"></span><br/>
					<span class="cizgi2"></span><br/>
					<span class="cizgi3"></span><br/>
				
				</div>
			</div>	
			</div>
    </header>
     
    <!-- Kenar nav -->
    <nav id="sideNav">
		<ul>
		<li><a href="#header" onMouseOver="renk2(this,'purple')" onMouseOut="renk3(this)" >Ana Sayfa</a></li>
			<li><a href="#aboutUs" onMouseOver="renk2(this,'blue')" onMouseOut="renk3(this)">Hakkımıda</a></li>
			<li><a href="#features" onMouseOver="renk2(this,'red')" onMouseOut="renk3(this)">Özellikler</a></li>
			<li><a href="#courses" onMouseOver="renk2(this,'purple')" onMouseOut="renk3(this)">Ürünler</a></li>
			<li><a href="#offer" onMouseOver="renk2(this,'blue')" onMouseOut="renk3(this)">Teklif</a></li>
			<li><a href="#contact" onMouseOver="renk2(this,'red')" onMouseOut="renk3(this)">İletişim</a></li>
		
		
		</ul>
		<img src="img/menu.png" alt="Menu" id="menuBtn">
      
    </nav>
   

<div class="container">    
    <!-- Hakkımızda -->
    <section id="aboutUs">
		<div class="about-left text-left">
		<img src="img/giphy.gif" alt="About"></div>
	  <div class="about-right text-right">
		<div class="about-content">
		<h1><b>H</b>akkımızda</h1>
			<span class="daire"></span>
			<p class="text-right">Dünya dizi ve film sektöründe, profesyonel stüdyo ekipmanları ve hifi ürünleri konusunda son derece başarılı bir çok firmanın distribütörlüğünü bünyesinde toplayan VFX Studio, profesyonelleri, amatörleri ve sinama severleri içeren geniş bir kesime hizmet vermektedir.

				VFX studio’yu diğer firmalardan ayıran en önemli özellik, her iki ortağın da “sinama sektöründe” olmasıdır. Bu bilgi birikimini uzman kadrosu ile destekleyen VFX studio,sayısız eklenti ve paketleri sizlerin daha kolay ulaşabilmesi eklentileri ve paketleri  toplu paket haline getirdi.</p><br/>
			<div class="cizgi">
				<span class="cizgi1"></span><br/>
					<span class="cizgi2"></span><br/>
					<span class="cizgi3"></span><br/>
				
				</div>
			
		</div>
		
		</div>
       
    </section>
    
    <!-- Features -->
    <section id="features">
		<div class="features-row">
		<div class="features-col" alt="">
			<img src="img/features-1.png">
			<h4>Ucuz Fiyat</h4>	
			<p>Sizlerin cebinizi düşündüğümüz için paket haline getirdik ve uygun bir fiyat seçtik.</p>
			
			</div>
			<div class="features-col" alt="">
			<img src="img/features-2.png">
			<h4>Sayısız Eklenti</h4>	
			<p>Uzmanlar tarafından hazırlanan ihtiyacınız olan herşey burada !</p>
			
			</div>
			<div class="features-col" alt="">
			<img src="img/features-3.png">
			<h4>Hızlı Öğrenin</h4>	
			<p>Kolay ve anlaşılır kullanımıyla sizlerin daha rahat çalışmasını hedefledik.</p>
			
			</div>
		
		</div>
		<div class="features-btn">
			<div class="cizgi">
				<span class="cizgi1"></span><br/>
					<span class="cizgi2"></span><br/>
					<span class="cizgi3"></span><br/>
				
				</div>
			<button class="btn" ><a href="#form">14 Gün Dene</a></button>
		
		
		
		
		</div>
       
    </section>

    
    <!-- Courses  -->
    <section id="courses">
		<div class="courses-row">
			<div class="courses-left">
		<div class="courses-content">
		<h1><b>İ</b>stediğiniz Eklentiyi Bulun</h1>
			<span class="daire"></span>
			<p>İhtiyaçlarınıza uygun plugin ve 3D eklentilerini <br> VFX studio'nun linaslı ürünleriyle keşfedin...</p><br/><br>
			<a href="present.php" class="btn" >Tüm Ürünleri Görüntüle</a>
			<br><br>
			<div class="cizgi">
				<span class="cizgi1"></span><br/>
					<span class="cizgi2"></span><br/>
					<span class="cizgi3"></span><br/>
				
				</div>
			
		</div>
		
		</div>
		<div class="courses-right text-right">
		<img src="img/2.gif" alt="Course"></div>
		
		
		
		
		</div>
		
		
       
    </section>
    
    
   
    <!-- Offer -->
    <section id="offer">
		<div class="about-left text-left">
		<img src="img/3d.gif" style="" alt="offer"></div>
		<div class="about-right text-right">
		<div class="about-content">
		<h1><b>S</b>ayısız 3D paket <br> &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<b>S</b>ayısız Eklenti <b>S</b>adece 40₺/Ay</h1>
			<span class="daire"></span>
			<p class="text-right">
				• Adobe Premiere&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; • Optical Flares <br>
				• Adobe After Effects&nbsp; &nbsp;&nbsp;&nbsp;• Action Essentials 2 <br>
				• Adobe Audition&nbsp;  &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;• JetStrike <br>
				• Final Cut Pro&nbsp;  &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;• Metropolitan <br>
				• Pro Tools&nbsp;  &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;• Crossfire Particle FX! <br>
				• Logic Pro&nbsp;  &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;• Element 3D V2.2 <br>
				• Sony Vegas&nbsp;  &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;• Optical Flares </p><br/>
			<button class="btn"><a href="#form">14 Gün Dene</a></button>
			<div class="cizgi">
				<span class="cizgi1"></span><br/>
					<span class="cizgi2"></span><br/>
					<span class="cizgi3"></span><br/>
				
				</div>
			
		</div>
		
		</div>
       
    
    
    </section>
 
    <!-- Contant - same course--> 
    <section id="contact">
		<div class="contact-row">
			<div class="contact-left">
		<div class="contact-content">
		<h1 id="form"><b>B</b>ize Katılın <br/><br>İlk 14 gün ücretsiz sonrasında sadece 40₺/Ay 
			<form action="index.php" method="post">
				<input type="text"  name="isim" placeholder="İsminizi Girin">
				<input type="email" name="email" placeholder="Mail Girin">
				<input type="number" name="tel" pattern="\d*" placeholder="Telefonu Girin">
				<input type="number" name="kart" placeholder="Kart Numaranızı Girin">
				<div class="kutu"><input type="number" name="cvc" placeholder="CVC "></div>
				<div class="kutu1"><input type="tel" name="son" placeholder="AA/YY"></div>
				<div class="btn-box">
					<input type="submit" name="kaydet" value="Denemeyi Başlat" class="btn">
				</div></form>
				 
				
				
				
				
		
			<div class="cizgi">
				<span class="cizgi1"></span><br/>
					<span class="cizgi2"></span><br/>
					<span class="cizgi3"></span><br/>
				
				</div>
			
			
		</div>
		
		</div>
		<div class="contact-right text-right">
		<img src="img/topluluk.gif" alt="contact"></div>
		
		
		
		
		
		
		
    
    </section>

 
    <!-- Footer -->
    <footer id="footer">
		<div class="footer-row">
			<hr/>
			<div class="footer-left">
				<div class="copyright">
					<a href="index.php"><img class="logo" src="img/logo.png" alt="Website Logo"></a>
				<small>
				@copyright 2022 by
				<a href="#" target="_blank">	vfxstudio</a>
				
				   </small>
				
				</div>
			
			</div>
			<div class="footer-right">
			<div class="footer-links">
				<div class="link-title">
				<h4>Gizlilik Ve Güvenlik</h4>
				<small><a href="https://sartlar.com/kullanim-kosullari-nedir#:~:text=Kullan%C4%B1m%20ko%C5%9Fullar%C4%B1%20s%C3%B6zle%C5%9Fmesi%2C%20ba%C5%9Fta%20web,taahh%C3%BCtlerini%20i%C3%A7eren%2C%20yasal%20bir%20s%C3%B6zle%C5%9Fmedir."target="_blank">Kullanım Koşulları</a> </small>
				<small><a href="https://www.mevzuat.gov.tr/mevzuat?MevzuatNo=20239&MevzuatTur=7&MevzuatTertip=5" target="_blank">Tüketici Yasası</a> </small>
				</div>
				<div class="link-title">
				<h4>Adres</h4>
				<large><a href="https://www.google.com/maps/place/Mersin+%C3%9Cniversitesi/@36.7847439,34.4980628,12.75z/data=!4m13!1m7!3m6!1s0x1527f4a4c0be6e9f:0x4dbef2b1f81e7d77!2sMersin,+Akdeniz%2FMersin!3b1!8m2!3d36.8121041!4d34.6414811!3m4!1s0x15278ac93d5a3f71:0x7eb846bcbf77920e!8m2!3d36.7875032!4d34.5247267" target="_blank"><i class="fa-solid fa-location-dot"></i></a> </large>
				<small>Mersin Üniversitesi</small>
				</div>
				
				<div class="link-title">
				<h4>Bize Ulaşın</h4>
				<large><a href="https://tr-tr.facebook.com/" target="_blank"><i class="fa-brands fa-facebook"></i></a></large><br>
				<large><a href="https://www.instagram.com/?hl=tr" target="_blank"><i class="fa-brands fa-instagram-square"></i></a></large>
				</div>
				<div class="link-title">
				<h4>İletişim</h4>
				<small><a href="mailto:vfxstudio@gmail.com">vfxstudio@gmail.com</a> </small>
				<small><a href="tel:0500 000 00 00">+90 500 000 00 00</a> </small>
				</div>
				
				
				
				</div>
			</div>
		
		
		
		
		
		</div>
    
    </footer>

    <!-- Social Icon -->
    <div class="social-icon">
		<a href="https://tr-tr.facebook.com/"><i class="bx bxl-facebook"></i></a>
		<a href="#"><i class="bx bxl-instagram"></i></a>
		<a href="#"><i class="bx bxl-twitter"></i></a>
		<a href="#"><i class="bx bxl-linkedin"></i></a>
		<a href="#"><i class="bx bxl-youtube"></i></a>
    </div>
 
    <!-- Script --> 
    <script>
		let menuBtn=document.getElementById("menuBtn" ) ;
	    let sideNav=document.getElementById("sideNav" ) ;
		sideNav.style.right="-250px" ;
		menuBtn.onclick=function() {
			if(sideNav.style.right==="-250px") {
				sideNav.style.right="0px";
			   
			   }
			   else {
			   sideNav.style.right="-250px";
			   }
		}
     
	
		function renk(a) {
			document.bgColor=a ;	
		}
		function renk2(a,b) {
			
			a.style.backgroundColor=b ;
		}
	function renk3(a) {
		a.style.backgroundColor="" ;
	}
	
	
	
	

	
	

	
	
	
	
	
	
	
	
	</script>    

</body>
    


</html>