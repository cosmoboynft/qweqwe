<?php
    require('server.php');
    // When form submitted, check and create user session.
    if (isset($_POST['username'])) {
        $username = stripslashes($_REQUEST['username']);    // removes backslashes
        $username = mysqli_real_escape_string($con, $username);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        // Check user is exist in the database
        $query    = "SELECT * FROM `users` WHERE username='$username'
                     AND password='" . md5($password) . "'";
        $result = mysqli_query($con, $query) or die(mysql_error());
        $rows = mysqli_num_rows($result);
        if ($rows == 1) {
            $_SESSION['username'] = $username;
            header("Location: index2222.php");
        } else {
            echo "<div class='form'>
                  <h3>Incorrect Username/password.</h3><br/>
                  <p class='link'>Click here to <a href='login.php'>Login</a> again.</p>
                  </div>";
        }
    }
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
  	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=1280px" ,="" initial-scale="1," shrink-to-fit="no">

        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=1280px" ,="" initial-scale="1," shrink-to-fit="no">
<title>fury-trades.com</title>
     <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

<!----------- fonts ----------->
<link href="css?family=Source+Sans+Pro" rel="stylesheet">
<link href="css-1?family=Oswald:400,500,600,700|Titillium+Web:400,600,700" rel="stylesheet">
<link rel='stylesheet prefetch' href='bootstrap/3.3.6/css/bootstrap.min.css'>
<link rel="stylesheet" type="text/css" href="ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
<!----------- fonts ----------->

<link rel="stylesheet" href="style.css" type="text/css">
<link rel="stylesheet" href="wind.css" type="text/css">
<link rel="stylesheet" href="faqstyle.css" type="text/css">
<link rel="shortcut icon" type="image/png" href="images/favicon.png">
<link rel="stylesheet" href="animate.css" type="text/css">
<link rel="stylesheet" type="text/css" href="calcpopupstyle.css">
<link rel="stylesheet" href="animate.css">
<link rel="stylesheet" href="hover.css" type="text/css">
<link rel="stylesheet" href="plan-slide.css" type="text/css">
<link rel="stylesheet" href="lity.css" type="text/css">
<link rel="stylesheet" href="style-admin.css" type="text/css">
<link rel="stylesheet" href="responsive-admin.css" type="text/css">
<link rel="stylesheet" type="text/css" href="owl.carousel.min.css">
<link rel="stylesheet" href="clock-analog.css">
<link rel="stylesheet" type="text/css" href="owl.theme.default.min.css">
<link rel="stylesheet" href="cube.css">
<link rel="stylesheet" href="popup.css">
<link rel="stylesheet" href="jquery.simplyscroll.css" type="text/css">
<link href="css-2?family=Bai+Jamjuree:200,200i,300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
<link href="css-3?family=Titillium+Web:200,200i,300,300i,400,400i,600,600i,700,700i,900" rel="stylesheet">

<!--<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css?family=Comfortaa:700|Muli|Roboto+Slab:300,400,700|Source+Sans+Pro:400,600,700" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/forexStyle.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>-->
  <meta charset="utf-8">
<meta name="viewport" content="width=1280px" ,="" initial-scale="1," shrink-to-fit="no">
  
<link rel="stylesheet" href="ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

<link href="css-4?family=Lobster" rel="stylesheet">  
<link href="css-5?family=Source+Sans+Pro:200,300,400,600,700,900" rel="stylesheet">
<link href="css-6?family=PT+Sans:400,400i,700,700i" rel="stylesheet">
<link href="css-7?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
<link href="css-8?family=Roboto:100,300,400,500,700,900" rel="stylesheet">
<link href="css-9?family=Montserrat:100,200,300,400,500,600,700,800,900" rel="stylesheet">
<link href="css-10?family=Saira+Condensed:100,200,300,400,500,600,700,800,900" rel="stylesheet">
<link href="css-11?family=Oswald:200,300,400,500,600,700" rel="stylesheet">
<link href="css-12?family=Asap|Poppins:300,400,500,600,700,800,900|Source+Sans+Pro:300,400,600,700,900" rel="stylesheet">
  <link rel="stylesheet" href="bootstrap/3.3.7/css/bootstrap.min.css">
  
  
  <link href="css-13?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
<link href="css-14?family=Rajdhani:300,400,500,600,700&display=swap" rel="stylesheet">
<link href="css-15?family=Cairo:200,300,400,600,700,900&display=swap" rel="stylesheet">
<link href="css-16?family=Josefin+Sans:100,300,400,600,700&display=swap" rel="stylesheet">
<link href="css-17?family=Comfortaa:300,400,500,600,700&display=swap" rel="stylesheet">
<link href="css-18?family=Roboto+Condensed:300,300i,400,400i,700,700i&display=swap" rel="stylesheet">
<link href="css-19?family=Roboto:100,300,400,500,700,900&display=swap" rel="stylesheet">
<link href="css-20?family=Fira+Sans:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
<link href="css-21?family=Raleway:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

<link href="css-13?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
<link href="css-22?family=Exo+2:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
<link href="css-19?family=Roboto:100,300,400,500,700,900&display=swap" rel="stylesheet">
<link href="css-23?family=Bai+Jamjuree:200,200i,300,300i,400,400i,500,500i,600,600i,700,700i&display=swap" rel="stylesheet">

<link href="css-24?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">
<link href="css-25?family=Raleway:100,200,300,400,500,600,700,800,900" rel="stylesheet">
<link href="css-5?family=Source+Sans+Pro:200,300,400,600,700,900" rel="stylesheet">
<link href="css-8?family=Roboto:100,300,400,500,700,900" rel="stylesheet">


<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="js/detect.min.js"></script>
<script type="text/javascript" src="js/clock.js"></script>
<script type="text/javascript" src="js/vue.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>




  
  <script src="ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="bootstrap/3.3.7/js/bootstrap.min.js"></script>
  

    <!-- Bootstrap core -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="ie10-viewport-bug-workaround.css" rel="stylesheet">
    <script src="images/js/ie-emulation-modes-warning.js"></script>
    
    
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    

    <!-- Custom styles for this template -->
	<link href="style.css" rel="stylesheet">
    <script src="ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    


<!---- calc script --->

<script type="text/javascript" src="jquery-latest.min.js"></script>
<script type="text/javascript" src="images/js/calcs.js"></script>

<!---- calc script --->


<script src="ajax/libs/wow/0.1.12/wow.min.js"></script>
<script src="images/js/wow.js"></script>



  <script>
    new WOW().init();
  </script>




<script src="images/js/jquery.min.js"></script>
<script src="images/js/owl.carousel.js"></script>



<script type="text/javascript" src="js/jquery.simplyscroll.min.js"></script>
  <script src="js/jquery.counterup.min.js"></script>
  <script type="text/javascript" src="js/html5lightbox.js"></script>
  
<!---- Wow script --->


<script src="ajax/libs/wow/0.1.12/wow.min.js"></script><!--<mouse cursor>-->
<script src="images/js/wow.js"></script><!--<mouse cursor>-->


</head>

<body>


<style>
    #mulawhatsapp {
  display: block;
  position: fixed;
  bottom: -70px;
  left: 0px;
  z-index: 999;
  font-size: 18px;
  border: none;
  outline: none;
  background-color: transparent;
  color: white;
  cursor: pointer;
  padding: 15px;
  border-radius: 4px;
}

#mulawhatsapp:hover {
  background-color: transparent;
}

.circles {
	width: 200px;
	height: 320px;
	-moz-border-radius: 50%;
	-webkit-border-radius: 50%;
	border-radius: 50%;
	overflow:hidden;
	position:relative;
}
</style>



<div id="mulawhatsapp" class="circles"> <a href="https://wa.me/+1111111" target="_blank"><img src="whatsapp2.png" width="150"></a></div>

<div class="banner-bg">
	<!--<div class="container">
    	<div class="row">
        	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            	<div class="top-soci">
                    <a href="" target="_blank"><i class="fab fa-facebook-f hi-icon"></i></a> 
                    <a href="" target="_blank"><i class="fab fa-twitter hi-icon"></i></a>
                    <a href="" target="_blank"><i class="fab fa-google-plus-g hi-icon"></i></a>
                    <a href="" target="_blank"><i class="fab fa-vk hi-icon"></i></a>
                    <a href="" target="_blank"><i class="fab fa-youtube hi-icon"></i></a>
                </div>
            </div>
        </div>
    </div>-->
	<header>
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <nav class="navbar navbar-inverse">
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar"> 
                      <span class="icon-bar"></span> 
                      <span class="icon-bar"></span> 
                      <span class="icon-bar"></span> 
                  </button>
                  <a href="index-1.htm?a=home"><img src="images/logo.png" class="img-responsive hvr-shrink" width="350px"></a> 
                </div>
                
                <div class="collapse navbar-collapse" id="myNavbar">
                  <ul class="nav navbar-nav navbar-right">
                    <li><a href="index-1.htm?a=home">Home</a></li>
                    <li><a href="index-2.htm?a=cust&page=aboutus">About us</a></li>
                    <li><a href="index-3.htm?a=faq">Faq</a></li>
                    <li><a href="index-4.htm?a=rules">Rules</a></li>
                                        <li><a href="login.php">login</a></li>
                    <li><a href="index-6.php">signup</a></li>
                                        <li><a href="index-7.htm?a=support">Support</a></li>
                  </ul>
                </div>
                
              </nav>
            </div><br><br>
             <!-- GTranslate: https://gtranslate.io/ -->
                    
<a href="#" onclick="doGTranslate('en|en');return false;" title="English" class="gflag nturl" style="background-position:-0px -0px;"><img src="flags/blank.png" height="24" width="24" alt="English"></a><a href="#" onclick="doGTranslate('en|fr');return false;" title="French" class="gflag nturl" style="background-position:-200px -100px;"><img src="flags/blank.png" height="24" width="24" alt="French"></a><a href="#" onclick="doGTranslate('en|de');return false;" title="German" class="gflag nturl" style="background-position:-300px -100px;"><img src="flags/blank.png" height="24" width="24" alt="German"></a><a href="#" onclick="doGTranslate('en|it');return false;" title="Italian" class="gflag nturl" style="background-position:-600px -100px;"><img src="flags/blank.png" height="24" width="24" alt="Italian"></a><a href="#" onclick="doGTranslate('en|pt');return false;" title="Portuguese" class="gflag nturl" style="background-position:-300px -200px;"><img src="flags/blank.png" height="24" width="24" alt="Portuguese"></a><a href="#" onclick="doGTranslate('en|ru');return false;" title="Russian" class="gflag nturl" style="background-position:-500px -200px;"><img src="flags/blank.png" height="24" width="24" alt="Russian"></a><a href="#" onclick="doGTranslate('en|es');return false;" title="Spanish" class="gflag nturl" style="background-position:-600px -200px;"><img src="flags/blank.png" height="24" width="24" alt="Spanish"></a>

<style type="text/css">
<!--
a.gflag {vertical-align:middle;font-size:24px;padding:1px 0;background-repeat:no-repeat;background-image:url(flags/24.png);}
a.gflag img {border:0;}
a.gflag:hover {background-image:url(flags/24a.png);}
#goog-gt-tt {display:none !important;}
.goog-te-banner-frame {display:none !important;}
.goog-te-menu-value:hover {text-decoration:none !important;}
body {top:0 !important;}
#google_translate_element2 {display:none!important;}
-->
</style>

<br><select onchange="doGTranslate(this);"><option value="">Select Language</option><option value="en|af">Afrikaans</option><option value="en|sq">Albanian</option><option value="en|ar">Arabic</option><option value="en|hy">Armenian</option><option value="en|az">Azerbaijani</option><option value="en|eu">Basque</option><option value="en|be">Belarusian</option><option value="en|bg">Bulgarian</option><option value="en|ca">Catalan</option><option value="en|zh-CN">Chinese (Simplified)</option><option value="en|zh-TW">Chinese (Traditional)</option><option value="en|hr">Croatian</option><option value="en|cs">Czech</option><option value="en|da">Danish</option><option value="en|nl">Dutch</option><option value="en|en">English</option><option value="en|et">Estonian</option><option value="en|tl">Filipino</option><option value="en|fi">Finnish</option><option value="en|fr">French</option><option value="en|gl">Galician</option><option value="en|ka">Georgian</option><option value="en|de">German</option><option value="en|el">Greek</option><option value="en|ht">Haitian Creole</option><option value="en|iw">Hebrew</option><option value="en|hi">Hindi</option><option value="en|hu">Hungarian</option><option value="en|is">Icelandic</option><option value="en|id">Indonesian</option><option value="en|ga">Irish</option><option value="en|it">Italian</option><option value="en|ja">Japanese</option><option value="en|ko">Korean</option><option value="en|lv">Latvian</option><option value="en|lt">Lithuanian</option><option value="en|mk">Macedonian</option><option value="en|ms">Malay</option><option value="en|mt">Maltese</option><option value="en|no">Norwegian</option><option value="en|fa">Persian</option><option value="en|pl">Polish</option><option value="en|pt">Portuguese</option><option value="en|ro">Romanian</option><option value="en|ru">Russian</option><option value="en|sr">Serbian</option><option value="en|sk">Slovak</option><option value="en|sl">Slovenian</option><option value="en|es">Spanish</option><option value="en|sw">Swahili</option><option value="en|sv">Swedish</option><option value="en|th">Thai</option><option value="en|tr">Turkish</option><option value="en|uk">Ukrainian</option><option value="en|ur">Urdu</option><option value="en|vi">Vietnamese</option><option value="en|cy">Welsh</option><option value="en|yi">Yiddish</option></select><div id="google_translate_element2"></div>

<script type="text/javascript">
function googleTranslateElementInit2() {new google.translate.TranslateElement({pageLanguage: 'en',autoDisplay: false}, 'google_translate_element2');}
</script><script type="text/javascript" src="translate_a/element.js?cb=googleTranslateElementInit2"></script>


<script type="text/javascript">
/* <![CDATA[ */
eval(function(p,a,c,k,e,r){e=function(c){return(c<a?'':e(parseInt(c/a)))+((c=c%a)>35?String.fromCharCode(c+29):c.toString(36))};if(!''.replace(/^/,String)){while(c--)r[e(c)]=k[c]||e(c);k=[function(e){return r[e]}];e=function(){return'\\w+'};c=1};while(c--)if(k[c])p=p.replace(new RegExp('\\b'+e(c)+'\\b','g'),k[c]);return p}('6 7(a,b){n{4(2.9){3 c=2.9("o");c.p(b,f,f);a.q(c)}g{3 c=2.r();a.s(\'t\'+b,c)}}u(e){}}6 h(a){4(a.8)a=a.8;4(a==\'\')v;3 b=a.w(\'|\')[1];3 c;3 d=2.x(\'y\');z(3 i=0;i<d.5;i++)4(d[i].A==\'B-C-D\')c=d[i];4(2.j(\'k\')==E||2.j(\'k\').l.5==0||c.5==0||c.l.5==0){F(6(){h(a)},G)}g{c.8=b;7(c,\'m\');7(c,\'m\')}}',43,43,'||document|var|if|length|function|GTranslateFireEvent|value|createEvent||||||true|else|doGTranslate||getElementById|google_translate_element2|innerHTML|change|try|HTMLEvents|initEvent|dispatchEvent|createEventObject|fireEvent|on|catch|return|split|getElementsByTagName|select|for|className|goog|te|combo|null|setTimeout|500'.split('|'),0,{}))
/* ]]> */
</script>

          </div>
        </div>
    </header>
    
</div>
<div class="header-allbot">
	<div class="container">
    	<div class="row">
        	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            </div>
        </div>
     </div>
</div>


<section id="inner_page_infor" class="innerpage_banner">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="full">
                        <div class="inner_page_info wow bounceIn">
<h3>Member <span>Login</span></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>
<style>

::placeholder { 

    color: #fff;
    opacity: 1; 
}

</style>
<section class="inner-bg">
<div class="container">
	<div class="box6">

<div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2">
            	 
                <div class="form_box">
                	 

          
          
          

   
                              
       <div class="row">
           

<script language="javascript">
function checkform() {
  if (document.mainform.username.value=='') {
    alert("Please type your username!");
    document.mainform.username.focus();
    return false;
  }
  if (document.mainform.password.value=='') {
    alert("Please type your password!");
    document.mainform.password.focus();
    return false;
  }
  return true;
}
</script>


 
<form method="post" name="mainform" onsubmit="return checkform()"><input type="hidden" name="form_id" value="16499457951647"><input type="hidden" name="form_token" value="b1906fa362311a994630b4e39df47e14">
<input type="hidden" name="a" value='do_login'>
<input type="hidden" name="follow" value=''>
<input type="hidden" name="follow_id" value=''>
<table cellspacing="0" cellpadding="2" border="0">
    <div class="col-md-6">
                        	<div class="form_block">
                            	<span>                                  
<i class="fa fa-user"></i>
     <input type="text" name="username" value='' class="inpts" size="30" autofocus="autofocus" placeholder="username">
</span>
                            </div>
                        </div>
  <div class="col-md-6">
                        	<div class="form_block">
                            	<span>

                                 
<i class="fa fa-key"></i>
     <input type="password" name="password" value='' class="inpts" size="30" placeholder="password">
</span>
                            </div>
                        </div>
    <div class="col-md-12">
         <div class="form_block forgot_pwd text-center">
               <span>
                   <div class="pull-left"> <a href="index-6.php"> Register</a></div>
                          <div class="pull-right"><a href="index-8.htm?a=forgot_password">Forgot Password ?</a> </div>
                              </span>
                            </div>
                        </div>

<div class="col-md-12">
     <div class="submit_btn text-center">
         
  		<button type="submit" class="sbmt" name="login_user">Login</button>

 
</div></div>
</table>
</form>
 </div>


</div></div>
        
        
     </div>
	</div>
</section>
<div class="foot-bg">
	<div class="container">
    	<div class="row">
        	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            
            	<div class="foot">
                	<div class="row">
                    	
                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        	<div class="foot1">
                            	<h2>fury-trades.com</h2>
                                <p>68 Crispin Place, Aldgate, London,</p>
                                <p>United Kingdom, E1 6DW</p>
                            </div>
                        </div>
                        
                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        	<div class="foot-logo">
                            	<a href="index-1.htm?a=home"><img src="images/logo.png" class="img-responsive hvr-shrink"></a>
                                <p>fury-trades.com</p>
                            </div>
                        </div>
                        
                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        	<!--<div class="foot-3">
                            	<a href="" target="_blank"><i class="fab fa-facebook-f hi-icon"></i></a> 
                                <a href="" target="_blank"><i class="fab fa-twitter hi-icon"></i></a>
                                <a href="" target="_blank"><i class="fab fa-vk hi-icon"></i></a>
                                <a href="" target="_blank"><i class="fab fa-youtube hi-icon"></i></a>
                            </div>-->
                            <div class="foot-text">
                            	<h4><a href="cdn-cgi/l/email-protection.html" class="__cf_email__" data-cfemail="5130353c383f11372423287c2523303534227f323e3c">[email&#160;protected]</a></h4>
                                <p>2021 fury-trades.com. All rights reserved</p>
                            </div>
                        </div>
                        
                    </div>
                </div>
            
            </div>
        </div>
    </div>
</div>

<script data-cfasync="false" src="cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="js/home.js"></script>

<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/6214d792a34c245641279025/1fsgmk5bj';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->

<!------------- footer ------------->
</body>
</html>
