<!DOCTYPE html>
<html lang="en-US">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <title>DesaKu</title>
      <link rel="stylesheet" href="css/components.css">
      <link rel="stylesheet" href="css/responsee.css">
      <link rel="stylesheet" href="owl-carousel/owl.carousel.css">
      <link rel="stylesheet" href="owl-carousel/owl.theme.css">
      <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
      <script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
      <script type="text/javascript" src="js/jquery-ui.min.js"></script>    
      <script type="text/javascript" src="js/modernizr.js"></script>
      <script type="text/javascript" src="js/responsee.js"></script>
      <!--[if lt IE 9]>
	      <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
      <![endif]-->
   </head>
   <body class="size-960">
      <!-- HEADER -->
      <header>
         <div class="line">
            <div class="box">
               <div class="s-6 l-2">
                  <img src="img/Logo.png">
               </div>
               </div>
<div id="top_tgl"><?php $hari=getdate(); echo $hari['weekday'].", ".$hari['mday']." ".$hari['month']." ".$hari['year'];?>
               <marquee behavior="alternate" ><h6>Semboyan Desa !!!</h6></marquee>
              <div style="float:right; width:230px; padding-top:3px;">
	<form class="quick_search">
	<input type="text" placeholder="Form Pencarian....">
	<input type="submit" value="CARI &raquo;" />
	</form>	</div>
            </div>
         </div>
         <!-- TOP NAV -->  
         <div class="line">
            <nav class="margin-bottom">
               <p class="nav-text">Custom menu text</p>
               <div class="top-nav s-12 l-10">
                  <ul>
                     <li><a>Beranda</a></li>
                     <li>
                        <a>Profil Desa</a>
                        	<ul>
                           		<li><a>Sejarah Desa</a></li>
                           		<li><a>Visi Dan Misi</a></li>
                           		<li><a>Staff Desa</a></li>
                                <li><a>Produk Desa</a></li>
                           		<li><a>Kontak </a></li>
                           		</ul>
                     		</li>
                    	 <li>
                    </li>
                    <li>
                    	<a>Galeri</a></li>
                  	</ul>
                  	<li>
                      	<a>Informasi Kegiatan</a>
                              <ul>
                                 <li><a>Kegiatan 1</a></li>
                                 <li><a>Kegiatan 2</a></li>
                                 <li><a>Kegiatan 3</a></li>
                      
                                
                              </ul>
                           </li>
                     	<li>
                        <a>Berita</a>
                         </li>
                     <li>
                     </li>
                     <li><a>Pariwisata</a></li>
                     </li>
                  </ul>
               </div>
               <div class="hide-s hide-m l-2">
                  <i class="icon-facebook_circle icon2x right padding"></i>
               </div>
            </nav>
         </div>
      </header>
      <section>
         <!-- CAROUSEL -->  
         <div class="line">
            <div id="owl-demo" class="owl-carousel owl-theme  margin-bottom">
               <div class="item"><img src="img/940x380.jpg" alt=""></div>
               <div class="item"><img src="img/940x380-2.jpg" alt=""></div>
               <div class="item"><img src="img/940x380-3.jpg" alt=""></div>
            </div>
         </div>
         <!-- HOME PAGE BLOCK -->      
         <div class="line">
            <div class="margin">
               <div class="s-12 m-6 l-4 margin-bottom">
                  <div class="box">
                     <h2>Tentang Desa</h2>
                     <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                  </div>
               </div>
               <div class="s-12 m-6 l-4 margin-bottom">
                  <div class="box">
                     <h2>Company</h2>
                     <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                  </div>
               </div>
               <div class="s-12 m-12 l-4 margin-bottom">
                  <div class="box">
                     <h2>Services</h2>
                     <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                  </div>
               </div>
            </div>
         </div>
         <!-- ASIDE NAV AND CONTENT -->
         <div class="line">
            <div class="box margin-bottom">
               <div class="margin">
                  <!-- CONTENT -->
                  <article class="s-12 m-7 l-8">
                     <h1>Content</h1>
                     <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet 
                        dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit 
                        lobortis nisl ut aliquip ex ea commodo consequat.
                     </p>
                     <h3>Sub Header</h3>
                     <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore 
                        eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril 
                        delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue 
                        nihil imperdiet doming id quod mazim placerat facer possim assum. 
                     </p>
                  </article>
                  <!-- ASIDE NAV -->
                  <div class="s-12 m-5 l-4">
                     <h3>Navigation</h3>
                     <div class="aside-nav">
                        <ul>
                           <li><a>Beranda</a></li>
                           <li>
                        		<a>Profil</a>
                        			<ul>
                           				<li><a>Sejarah </a></li>
                           				<li><a>Visi Dan Misi</a></li>
                           				<li><a>Struktur Organisasi</a></li>
                           				<li><a>Kontak </a></li>
                           			</ul>
                     			</li>
                            <li>
                   			</li>
                    		<li>
                    			<a>Galeri</a></li>
                  	<li>
                              <a>Informasi Kegiatan</a>
                              <ul>
                                 <li><a>Kegiatan 1</a></li>
                                 <li><a>Kegiatan 2</a></li>
                                 <li>
                                    <a>Kegiatan 3</a>
                                    <ul>
                                       <li><a>Product 3-1</a></li>
                                       <li><a>Product 3-2</a></li>
                                       <li><a>Product 3-3</a></li>
                                    </ul>
                                 </li>
                              </ul>
                           </li>
                           <li>
                           <li>
                        <a>Video</a>
                         </li>
                     <li>
                     </li>
                           <li><a>Buku Tamu</a></li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- GALLERY CAROUSEL -->
         <div class="line">
            <h2>Gallery</h2>
            <div id="owl-demo2" class="owl-carousel margin-bottom">
               <div class="item"><img class="lazyOwl" data-src="img/330x190.jpg" alt=""></div>
               <div class="item"><img class="lazyOwl" data-src="img/330x190-2.jpg" alt=""></div>
               <div class="item"><img class="lazyOwl" data-src="img/330x190-3.jpg" alt=""></div>
               <div class="item"><img class="lazyOwl" data-src="img/330x190.jpg" alt=""></div>
               <div class="item"><img class="lazyOwl" data-src="img/330x190-2.jpg" alt=""></div>
               <div class="item"><img class="lazyOwl" data-src="img/330x190-3.jpg" alt=""></div>
               <div class="item"><img class="lazyOwl" data-src="img/330x190.jpg" alt=""></div>
               <div class="item"><img class="lazyOwl" data-src="img/330x190-2.jpg" alt=""></div>
               <div class="item"><img class="lazyOwl" data-src="img/330x190-3.jpg" alt=""></div>
               <div class="item"><img class="lazyOwl" data-src="img/330x190.jpg" alt=""></div>
               <div class="item"><img class="lazyOwl" data-src="img/330x190-2.jpg" alt=""></div>
               <div class="item"><img class="lazyOwl" data-src="img/330x190-3.jpg" alt=""></div>
               <div class="item"><img class="lazyOwl" data-src="img/330x190.jpg" alt=""></div>
               <div class="item"><img class="lazyOwl" data-src="img/330x190-2.jpg" alt=""></div>
               <div class="item"><img class="lazyOwl" data-src="img/330x190-3.jpg" alt=""></div>
               <div class="item"><img class="lazyOwl" data-src="img/330x190.jpg" alt=""></div>
            </div>
         </div>
      </section>
      <!-- FOOTER -->
      <footer class="line">
         <div class="box">
            <div class="s-12 l-6">
               <p>Copyright 2016, Vision Design - graphic zoo</p>
            </div>
            <div class="s-12 l-6">
               <a class="right" href="http://www.myresponsee.com" title="Responsee - lightweight responsive framework">Design and coding by Responsee Team</a>
            </div>
         </div>
      </footer>
      <script type="text/javascript" src="owl-carousel/owl.carousel.js"></script>  
      <script type="text/javascript">
         jQuery(document).ready(function($) {	  
           $("#owl-demo").owlCarousel({		
         	navigation : true,
         	slideSpeed : 300,
         	paginationSpeed : 400,
         	autoPlay : true,
         	singleItem:true
           });
           $("#owl-demo2").owlCarousel({
         	items : 4,
         	lazyLoad : true,
         	autoPlay : true,
         	navigation : true,
         	pagination : false
           });
         });	 
      </script>
   </body>
</html>