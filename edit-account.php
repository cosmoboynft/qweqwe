<?php session_start(); 
include("server.php");
 
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
  	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=1280px", initial-scale=1, shrink-to-fit="no">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=1280px", initial-scale=1, shrink-to-fit="no">
<title>fury-trades.com</title>
     <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

<!----------- fonts ----------->
<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Oswald:400,500,600,700|Titillium+Web:400,600,700" rel="stylesheet">
<link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css'>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
<!----------- fonts ----------->

<link rel="stylesheet" href="style.css" type="text/css"/>
<link rel="stylesheet" href="wind.css" type="text/css"/>
<link rel="stylesheet" href="faqstyle.css" type="text/css"/>
<link rel="shortcut icon" type="image/png" href="images/favicon.png"/>
<link rel="stylesheet" href="animate.css" type="text/css"/>
<link rel="stylesheet" type="text/css" href="calcpopupstyle.css"/>
<link rel="stylesheet" href="animate.css">
<link rel="stylesheet" href="hover.css" type="text/css"/>
<link rel="stylesheet" href="plan-slide.css" type="text/css"/>
<link rel="stylesheet" href="lity.css" type="text/css"/>
<link rel="stylesheet" href="style-admin.css" type="text/css"/>
<link rel="stylesheet" href="responsive-admin.css" type="text/css"/>
<link rel="stylesheet" type="text/css" href="owl.carousel.min.css">
<link rel="stylesheet" href="clock-analog.css">
<link rel="stylesheet" type="text/css" href="owl.theme.default.min.css">
<link rel="stylesheet" href="cube.css">
<link rel="stylesheet" href="popup.css">
<link rel="stylesheet" href="jquery.simplyscroll.css" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Bai+Jamjuree:200,200i,300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Titillium+Web:200,200i,300,300i,400,400i,600,600i,700,700i,900" rel="stylesheet">

<!--<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css?family=Comfortaa:700|Muli|Roboto+Slab:300,400,700|Source+Sans+Pro:400,600,700" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/forexStyle.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>-->
  <meta charset="utf-8">
<meta name="viewport" content="width=1280px", initial-scale=1, shrink-to-fit="no">
  
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">  
<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Saira+Condensed:100,200,300,400,500,600,700,800,900" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Asap|Poppins:300,400,500,600,700,800,900|Source+Sans+Pro:300,400,600,700,900" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  
  
  <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Rajdhani:300,400,500,600,700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Cairo:200,300,400,600,700,900&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Josefin+Sans:100,300,400,600,700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Comfortaa:300,400,500,600,700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Fira+Sans:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Exo+2:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Bai+Jamjuree:200,200i,300,300i,400,400i,500,500i,600,600i,700,700i&display=swap" rel="stylesheet">

<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">


<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="js/detect.min.js"></script>
<script type="text/javascript" src="js/clock.js"></script>
<script type="text/javascript" src="js/vue.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>




  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  

    <!-- Bootstrap core -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="ie10-viewport-bug-workaround.css" rel="stylesheet">
    <script src="images/js/ie-emulation-modes-warning.js"></script>
    
    
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    

    <!-- Custom styles for this template -->
	<link href="style.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    


<!---- calc script --->

<script type="text/javascript" src="https://code.jquery.com/jquery-latest.min.js"></script>
<script type="text/javascript" src="images/js/calcs.js"></script>

<!---- calc script --->


<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/0.1.12/wow.min.js"></script>
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


<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/0.1.12/wow.min.js"></script><!--<mouse cursor>-->
<script src="images/js/wow.js"></script><!--<mouse cursor>-->

<script type="text/javascript">window.$crisp=[];window.CRISP_WEBSITE_ID="f4cff861-6e59-4ce1-9c43-931959b644d0";(function(){d=document;s=d.createElement("script");s.src="https://client.crisp.chat/l.js";s.async=1;d.getElementsByTagName("head")[0].appendChild(s);})();</script>




</head>

<body><script type='text/javascript' src='https://check.ddos-guard.net/f.js' async defer></script>


<style>
header {
    border-bottom: none;
}
</style>
<div class="banner-bg" style="padding: 30px 0px 0px;">

	<div class="container">

        <div class="row">

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

            	

                <div class="top">

                	<div class="row">

                    

                    	<div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">

                        	<div class="banner-logo">

                            	<a href="?a=home"><img src="images/logo.png" class="img-responsive hvr-shrink"></a>

                            </div>

                        </div>

                        <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                        </div>



                        

                        <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">

                        	<div class="top-but">

                            	
                                    <a href="?a=logout" class="top-but1">Logout</a>

                                
                                
                                    <a href="?a=account" class="top-but2">Account</a>

                                
                            </div>

                        </div>

                        

                    </div>

				</div>






<!--






  <tr> 



    <td valign="top">



	 <table cellspacing=0 cellpadding=1 border=0 width=100% height=100%  class=line>



	   <tr>



	     <td>



           <table width="100%" height="100%" border="0" cellpadding="0" cellspacing="0">



             <tr class=bgcolorleft valign="top"> 



              <td width=300 align=center><img src="images/q.gif" width=180 height=1>



				   <!-- Image Table: Start -->

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
  <ul style="padding:0;" class="menu_list">
    <li class="subject">
      <p><img src="images/memnav1.png" class="heartbeat">&nbsp;&nbsp;Dash Board</p>
      <ul style="margin:0;">
        <li><a href=?a=account class="menutxt">My Dash Board</a></li>
        <li><a href=?a=edit_account class=menutxt>Edit Account</a></li>
        <li><a href="security.html" class=menutxt>Security</a></li>
        <li><a href=?a=logout class=menutxt>Logout</a></li>
      </ul>
    </li>
    <li class="subject">
      <p><img src="images/memnav2.png" class="heartbeat">&nbsp;&nbsp;Deposit</p>
      <ul style=" margin:0;">
        <li><a href=?a=deposit class="menutxt">Make Deposit</a></li>
        <li><a href="your-deposit.html" class=menutxt>Your Deposits</a></li>
      </ul>
    </li>
    <li class="subject">
      <p><img src="images/memnav4.png" class="heartbeat">&nbsp;&nbsp;Withdraw</p>
      <ul style=" margin:0;">
        <li><a href="withdraw.html" class=menutxt>Withdraw</a></li>
      </ul>
    </li>
    <li class="subject">
      <p><img src="images/memnav3.png" class="heartbeat">&nbsp;&nbsp;History</p>
      <ul style=" margin:0;">
        <li><a href=?a=deposit_history class=menutxt>Deposits History</a></li>
        <li><a href=?a=earnings class=menutxt>Earnings History</a></li>
        <li><a href=?a=withdraw_history class=menutxt>Withdraw History</a></li>
      </ul>
    </li>
    <li class="subject">
      <p><img src="images/memnav5.png" class="heartbeat">&nbsp;&nbsp;Referral</p>
      <ul style=" margin:0;">
        <li><a href=?a=referals class=menutxt>Your Referrals</a></li>
        <li><a href=?a=referallinks class=menutxt>Referral Links</a></li>
      </ul>
    </li>
  </ul>
</div>
 
<script>



$(document).ready(function(){



    $('.menu_list .subject:first-child').click(function () {



		$('.menu_list .subject:first-child ul').slideToggle(600);



       	$('.menu_list .subject:first-child ul').css('display', ' block');



    });



	$('.menu_list .subject:last-child').click(function () {



		$('.menu_list .subject:last-child ul').slideToggle(600);



       	$('.menu_list .subject:last-child ul').css('display', ' block');



    });



	$('.menu_list .subject:nth-child(2)').click(function () {



		$('.menu_list .subject:nth-child(2) ul').slideToggle(600);



       	$('.menu_list .subject:nth-child(2) ul').css('display', ' block');



    });



	$('.menu_list .subject:nth-child(3)').click(function () {



		$('.menu_list .subject:nth-child(3) ul').slideToggle(600);



       	$('.menu_list .subject:nth-child(3) ul').css('display', ' block');



    });



	$('.menu_list .subject:nth-child(4)').click(function () {



		$('.menu_list .subject:nth-child(4) ul').slideToggle(600);



       	$('.menu_list .subject:nth-child(4) ul').css('display', ' block');



    });



});



</script> 

</div>
</div>
</div>
</div>
<div class="aff-bg1">
	<div class="container">
    	<div class="row">
        	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            </div>
        </div>
    </div>
</div>
<div class="san col-lg-12 col-md-12 col-sm-12 col-xs-12">
<style>

@media only screen and (max-width: 991px){
	.menu_list {
	    background: #304867 !important;
        display: grid !important;
	}
	.menu_list li
	{
		margin:auto;
	}

}

@media only screen and (max-width: 560px){

	.menu_list li p:after {
		left: 70% !important;
		top: 38% !important;
		right: 0% !important;
	}
	.menu_list li p {
		position: relative !important;
		display: block !important;
		width: 100% !important;
		padding-left: 0px !important;
	}

	.menu_list {
	  background: #304867 !important;
    	display: grid !important;
	}

	.menu_list li
	{
		margin:auto;
	}

}
.menu_list {
	position:relative;
	width:100%;
	display: flex;
	justify-content: space-around;
	list-style: none;
    background: #304867;
    border-radius: 30px;
    padding: 15px 0px 0px 0px !important;
    margin: 0px 0px 20px 0px;

}

.menu_list li {
	position: relative;
    color: #ffffff;
    text-align: center;
    text-transform: uppercase;
    margin-bottom: 10px;
    transition: 0.8s;
    border: transparent;
    border-radius: 0px;
    width: 201px;
}
.menu_list li p {
	position: relative;
    display: inline-block;
    width: 100%;
    font-size: 14px !important;
    font-weight: bold;
    text-align: left;
    padding-left: 30px;
    box-sizing: border-box;
    color: #f1f1f1;
    float: none;
    line-height: 34px;
    transition: 0.8s;
    cursor: pointer;
}
.menu_list li p:after {

    position: absolute;
    content: "";
    top: 35%;
    right: 0%;
    width: 0;
    height: 0;
    border-left: 6px solid transparent;
    border-right: 6px solid transparent;
    border-top: 9px solid #7788f8;

}
.menu_list li:hover {
	border: transparent;
	transition:0.8s;
}

.menu_list li p:hover {
 	color: #7788f8;
	transition:0.8s;
}
.menu_list li p:hover:after {
    border-top: 9px solid #f7f7f7;
	transition:0.8s;
}
.menu_list li ul {

	position: absolute;
    top: 60px;
    left: 0;
    padding: 15px;
    box-sizing: border-box;
    background-color: #222744;
    border-radius: 6px;
    display: none;
    z-index: 6;
    box-shadow: 1px 1px 0px #7788f8;

}
.menu_list li ul li a , .menu_list li ul li {
	display:block;
	padding:0;

}

.menu_list li ul li {
	border:none;
	width:180px;

}
.menu_list li ul li a {

    width: 100%;
    border-bottom: 1px solid #fff;
    line-height: 25px;
    color: #fff;
    text-align: left;
    transition: 0.8s;
    font-weight: 600;
    font-size: 12px;

}
.menu_list li ul li:hover {

	border:none;
}
.menu_list li ul li a:after {
	display:none;
}
.menu_list li a:hover {
	color: #7788f8;
	transition:0.8s;
}

</style>

<!-- <li><a href="?a=account"><i class="fas fa-tachometer"></i>Dash Board</a></li>
                        <li><a href="?a=deposit"><i class="fab fa-bitcoin"></i>Make Deposit</a></li>
                        <li><a href="?a=deposit_list"><i class="fa fa-tasks"></i>Your Deposits</a></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li><a href="?a=withdraw_history"><i class="fa fa-history"></i>Withdrawal History</a></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li><a href="?a=logout"><i class="fa fa-edit"></i>Logout</a></li>
--> 

 
				   

                                   




					<!-- Stats Table: End -->
					<!-- Image Table: End -->





              </td>



              <td class=line valign="top" width=1><img src=images/q.gif width=1 height=1></td>          



              <td class=bgcolormain valign="top" width=99%>            <!-- Main: Start -->



           <!-- <table width="100%" height="100%" border="0" cellpadding="10" cellspacing="0" class="forTexts">



              <tr>



                <td width=100% height=100% valign=top>



<div class=framebody>



-->
<style>

::placeholder { 

    color: #fff;
    opacity: 1; 
}

</style>


          <div class="row">
                    <div class="col-sm-12">
                        <div class="main_title text-center mb-40">
                            <h3 id="formname_main" style="width:97%;">EDIT ACCOUNT</h3>
                        </div>
                    </div>
                </div>        
             

<div class="container">



<script language=javascript>
function IsNumeric(sText) {
  var ValidChars = "0123456789.";
  var IsNumber=true;
  var Char;
  if (sText == '') return false;
  for (i = 0; i < sText.length && IsNumber == true; i++) { 
    Char = sText.charAt(i); 
    if (ValidChars.indexOf(Char) == -1) {
      IsNumber = false;
    }
  }
  return IsNumber;
}

function checkform() {
  if (document.editform.fullname.value == '') {
    alert("Please type your full name!");
    document.editform.fullname.focus();
    return false;
  }


  if (document.editform.password.value != document.editform.password2.value) {
    alert("Please check your password!");
    document.editform.fullname.focus();
    return false;
  }




  if (document.editform.email.value == '') {
    alert("Please enter your e-mail address!");
    document.editform.email.focus();
    return false;
  }



  for (i in document.editform.elements) {
    f = document.editform.elements[i];
    if (f.name && f.name.match(/^pay_account/)) {
      if (f.value == '') continue;
      var notice = f.getAttribute('data-validate-notice');
      var invalid = 0;
      if (f.getAttribute('data-validate') == 'regexp') {
        var re = new RegExp(f.getAttribute('data-validate-regexp'));
        if (!f.value.match(re)) {
          invalid = 1;
        }
      } else if (f.getAttribute('data-validate') == 'email') {
        var re = /^[^\@]+\@[^\@]+\.\w{2,4}$/;
        if (!f.value.match(re)) {
          invalid = 1;
        }
      }
      if (invalid) {
        alert('Invalid account format. Expected '+notice);
        f.focus();
        return false;
      }
    }
  }

  return true;
}
</script>
<?php 
 if(isset($_POST['edit']))
 {
    $username=$_SESSION['id'];
    $fullname=$_POST['fullname'];
    $walletadres=$_POST['walletadres'];
    $email=$_POST['email'];
    $password=$_POST['password'];

    $select= "select * from users where id='$username'";
    $sql = mysqli_query($conn,$select);
    $row = mysqli_fetch_assoc($sql);
    $res= $row['id'];
    if($res === $username)
    {
   
       $update = "update users set fullname='$fullname',walletadres='$password',password='$walletadres',email='$email' where id='$username'";
       $sql2=mysqli_query($conn,$update);
if($sql2)
       { 
           /*Successful*/
           header('location:edit-account.php');
       }
       else
       {
           /*sorry your profile is not update*/
           header('location:index.htm');
       }
    }
    else
    {
        /*sorry your id is not match*/
        header('location:deposit.html');
    }
 }
?>

?>

<form action="" method=post onsubmit="return checkform()" name=editform><input type="hidden" name="form_id" value="16499474786799"><input type="hidden" name="form_token" value="affdf8c1a01d8006195ee95e6f5474c4">
<input type=hidden name=a value=edit_account>
<input type=hidden name=action value=edit_account>
<input type=hidden name=say value="">

<table cellspacing=0 cellpadding=2 border=0>
<tr>
 <td>Account Name:</td>
 <td>
   
<?php echo $_SESSION["username"]?>

 </td>
</tr><tr>
 <td>Registration date:</td>
 <td>Apr-14-2022 10:32:46 AM</td>
</tr><tr>
 <td>Your Full Name:</td>
 <td><input type=text name=fullname value="" class=inpts size=30>
</tr>

<tr>
 <td>New Password:</td>
 <td><input type=password name=password value="" class=inpts size=30></td>
</tr><tr>
</tr>
<tr>
 <td>Your Bitcoin Wallet address:</td>
 <td><input type=text class=inpts size=30 name="pay_account[1000][Wallet address]" value=""></td>
</tr>
<tr>
 <td>Your E-mail address:</td>
 <td><input type=text name=email value='' class=inpts size=30></td>
</tr>

<tr>
 <td>&nbsp;</td>
 <td><input type=submit value="Change Account data" class=sbmt></td>
</tr></table>
</form>
</div>
</div>

</div>
</div></div>

</div></div><div class="clearfix"></div>

 
            
            
        </div>
        
        
<div class="aff-bg2">
	<div class="container">
    	<div class="row">
        	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            </div>
        </div>
    </div>
</div>        
        <section class="ftr-btm">
<div class="container">

<div class="row">

<div class="col-md-6 col-sm-6 col-xs-12">
<div class="ftr-btm-left">

<span>Copyright &copy; 2021. fury-trades.com ALL RIGHTS RESERVED</span>

</div>

</div>
<div class="col-md-6 col-sm-6 col-xs-12">
<div class="ftr-btm-right">

<ul class="social-links ">
       
        
        <li><a href="" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
        <li><a href="" target="_blank"><i class="fab fa-twitter"></i></a></li>
        <li><a href="" target="_blank"><i class="fab fa-instagram"></i></a></li>
        <li><a href="" target="_blank"><i class="fab fa-youtube"></i></a></li>
      </ul>

</div>

</div>





</div>
</div>
</section>
        
     </div>



</wrapper>

<script src="js/home.js"></script>
</body>



<!--button-copy-->

<script>
function myFunction() {
  var copyText = document.getElementById("myInput");
  copyText.select();
  document.execCommand("copy");


}
</script>


<script>
$(".err_msg").on("click", function() {
    $(".alert").removeClass("in").show();
	$(".alert").delay(200).addClass("in").fadeOut(2000);
});
</script>


<!--high-charts-->
<script src="images/js/highcharts.js"></script>
<script src="images/js/highcharts-more.js"></script>
<script src="images/js/exporting.js"></script>
<script src="images/js/area-chart.js"></script>

<!--carousel-->
<script src="js/owl.carousel.min.js"></script>


<script>
$(document).ready(function(){
  $('.package_carousel').owlCarousel({
    loop:true,
    margin:10,
	autoplay:true,
    autoplayTimeout:3000,
    autoplayHoverPause:true,
    nav:false,
    responsive:{
        0:{
            items:1
        },
		320:{
            items:1
        },
		480:{
            items:1
        },
		520:{
            items:2
        },
        600:{
            items:2
        },
		768:{
            items:2
        },
		991:{
            items:3
        },
        1200:{
            items:4
        }
    }
});
});	
</script>


</html>
