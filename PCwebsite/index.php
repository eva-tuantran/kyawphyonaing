<?php
include_once 'common.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $lang['PAGE_TITLE']; ?></title>
<meta name="keywords" content="mini social, free download, website templates, CSS, HTML" />
<meta name="description" content="Mini Social is a free website template from templatemo.com" />
<link href="templatemo_style.css" rel="stylesheet" type="text/css" />

<link rel="stylesheet" href="css/coda-slider.css" type="text/css" media="screen" charset="utf-8" />

<script src="js/jquery-1.2.6.js" type="text/javascript"></script>
<script src="js/jquery.scrollTo-1.3.3.js" type="text/javascript"></script>
<script src="js/jquery.localscroll-1.2.5.js" type="text/javascript" charset="utf-8"></script>
<script src="js/jquery.serialScroll-1.2.1.js" type="text/javascript" charset="utf-8"></script>
<script src="js/coda-slider.js" type="text/javascript" charset="utf-8"></script>
<script src="js/jquery.easing.1.3.js" type="text/javascript" charset="utf-8"></script>

</head>
<body>

<div id="slider">
	
  <div id="templatemo_sidebar">
    	<div id="templatemo_header">
        	<h1><?php echo $lang['HEADER_TITLE']; ?></h1>
        </div> <!-- end of header -->
        
        <ul class="navigation">
            <li><a href="#home"><?php echo $lang['HOME']; ?><span class="ui_icon home"></span></a></li>
            <li><a href="#aboutus"><?php echo $lang['ABOUT_ME']; ?><span class="ui_icon aboutus"></span></a></li>
            <li><a href="#gallery"><?php echo $lang['BLOG']; ?><span class="ui_icon gallery"></span></a></li>
            <li><a href="#contactus"><?php echo $lang['CONTACT_ME']; ?><span class="ui_icon contactus"></span></a></li>
        </ul>
      <ul id="social_box">
        	<li><a href="http://www.facebook.com/kyawphyo.naing"><img src="images/facebook.png" alt="facebook" /></a></li>
        	<li><a href="https://twitter.com/kyaw_85"><img src="images/twitter.png" alt="twitter" /></a></li>
      </ul>
    </div> <!-- end of sidebar -->

	<div id="templatemo_main">
    	<div id="languages">
		<a href="index.php?lang=en"><img src="images1/en.jpeg" /></a>
		<a href="index.php?lang=jp"><img src="images1/japan.jpg" /></a>
        </ul>
		</div>
        
        <div id="content">
        
        <!-- scroll -->
        
        	
            <div class="scroll">
                <div class="scrollContainer">
                
                    <div class="panel" id="home">
                    	<div id="gallery_container">
                    	<div class="gallery_box">
                        <h2>My Music Website</h2></br>
          <a href="http://kyawphyonaing.sakura.ne.jp/index.html"><img src="images1/home1.png" alt="01" /></a>
          <p><?php echo $lang['my_music_website']; ?></p>
          				<div class="btn_more"><a href="#aboutus">More <span>&raquo;</span></a></div>
           				<div class="cleaner"></div>
           				</div>
                        <div class="gallery_box">
                        <h2>My Game Website</h2></br>
          <a href="http://www.kyawphyonaing.sakura.ne.jp/game/index.html"><img src="images1/home2.png" alt="02" /></a>
          <p><?php echo $lang['my_game_website']; ?></p>
          				<div class="btn_more"><a href="#aboutus">More <span>&raquo;</span></a></div>
           				<div class="cleaner"></div>
           				</div>
                        <div class="gallery_box">
                        <h2>My Education Website</h2></br>
          <a href="http://www.kyawphyonaing.sakura.ne.jp/education/index.html"><img src="images1/home3.png" alt="03" /></a>
          <p><?php echo $lang['my_education_website']; ?></p>
          				<div class="btn_more"><a href="#aboutus">More <span>&raquo;</span></a></div>
           				<div class="cleaner"></div>
           				</div>
                        </div>
                   </div> 
                    <!-- end of home -->
                    
                    <div class="panel" id="aboutus">
                    <div id="gallery_container">
                    	<div class="gallery_box">
                        <h1><?php echo $lang['about_school_header']; ?></h1>
        <p><em><?php echo $lang['about_school_p_em']; ?></em></p>
        <p><?php echo $lang['about_school_p']; ?></p>
        <p><?php echo $lang['about_school_p_address']; ?></p>
          				<div class="cleaner"></div>
                    	</div>
                    	<div class="gallery_box">
                        <h1><?php echo $lang['about_part_header']; ?></h1>
        <p><?php echo $lang['about_part_p']; ?></p>
                    	<div class="cleaner"></div>
                    	</div>
                    </div>
                   </div><!-- end of about -->
                   
                <div class="panel" id="gallery">
                    	<div id="gallery_container">
                    	<div class="gallery_box">
                        <h2><em><?php echo $lang['blog_h1']; ?></em></h2>
        	<p><?php echo $lang['blog_p1']; ?></p>
          <em>Website:</em> <a href="http://www.kyawphyonaing.blogspot.jp">Kyaw Phyo Naing</a> </p>
           				<div class="cleaner"></div>
           				</div>
                        <div class="gallery_box">
                        <h2><em><?php echo $lang['blog_h2']; ?></em></h2>
                        <p><?php echo $lang['blog_p2']; ?></p>    
      <iframe class="youtube-player" width="450" height="300" src="http://www.youtube.com/embed/kgraBqk8U_Q" frameborder="0"> </iframe>
           				<div class="cleaner"></div>
           				</div>
                        <div class="gallery_box">
      					<p><?php echo $lang['blog_p3']; ?></p>   
      <iframe class="youtube-player" width="450" height="300" src="http://www.youtube.com/embed/uoEtdoXzOCQ" frameborder="0"> </iframe> 
           				<div class="cleaner"></div>
           				</div>
                        <div class="gallery_box">
      					<p><?php echo $lang['blog_p4']; ?></p>   
      <iframe class="youtube-player" width="450" height="300" src="http://www.youtube.com/embed/309-mD-Yar8" frameborder="0"> </iframe>
           				<div class="cleaner"></div>
           				</div>
                        </div>
                  </div> <!-- end of blog -->    
                
                
                    <div class="panel" id="contactus">
                        <h1><?php echo $lang['contact']; ?></h1>
                        <div id="contact_form">
                  <form action="send_mail.php" method="post" name="mainform" enctype="multipart/form-data">
                                
                  <label for="author">Your Name:</label> <input type="text" id="author" name="author" class="required input_field" />
                  <div class="cleaner_h10"></div>
                                
                  <label for="email">Your Email:</label> <input type="text" id="email" name="email" class="validate-email required input_field" />
                  <div class="cleaner_h10"></div>
                                
                  <label for="text">Message:</label> <textarea id="text" name="text" rows="0" cols="0" class="required"></textarea>
                  <div class="cleaner_h10"></div>
                                
                  <input type="submit" class="submit_btn" name="submit" id="submit" value="Send" />
                  <input type="reset" class="submit_btn" name="reset" id="reset" value="Reset" />
                            
                  </form>
						</div>
                    </div>
                
                </div>
			</div>
            
        <!-- end of scroll -->
        
        </div> <!-- end of content -->
        
        <div id="templatemo_footer">

            Copyright © 2014 <a href="#">Kyaw Phyo Naing</a> 
        
        </div> <!-- end of templatemo_footer -->
    
  </div> <!-- end of main -->
</div>

</body>
</html>