<?php
include("server.php");
include("ayar.php");
session_start();
if(!isset($_SESSION["login"])){
echo "Bu sayfayı görüntüleme yetkiniz yoktur.";
}else{
echo "Admin sayfasina hosgeldiniz..<br>";
echo "<a href=logout.php>Çıkış Yap</a>";
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Area | Users</title>
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <!-- <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css" rel="stylesheet"  type='text/css'> -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://cdn.ckeditor.com/4.15.1/standard/ckeditor.js"></script>
</head>
<body>

    <nav class="navbar navbar-default ">
      <div class="container">
        <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
          <span class="sr-only"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">AdminStrap</a>
      </div>
      
        <div class="collapse navbar-collapse" id="navbar">
          <ul class="nav navbar-nav">
            <li>
              <a href="index.html">Dashboard</a>
            </li>
            <li>
              <a href="pages.html">Pages</a>
            </li>
            <li>
                <a href="posts.html">Posts</a>
              </li>
              <li class="active">
                <a href="users.html">Users</a>
              </li>
              </ul>
              <ul class="nav navbar-nav navbar-right">
                <li>
                  <a href="#">Welcome, Uche</a>   
                </li>
                <li>
                    <a href="login.html">Logout</a>
                </li>
              </ul>
                
            
        </div>
      </nav>

      <header id="header">
        <div class="container">
          <div class="row">
            <div class="col-md-10">
               <h1><span class="glyphicon glyphicon-cog" aria-hidden="true"> </span>Users<small>Manage Sites Users</small></h1>
            </div>
            <div class="col-md-2">
              <div class="dropdown create">
                <button
                  class="btn btn-default dropdown-toggle"
                  type="button"
                  id="dropdownMenu1"
                  data-toggle="dropdown"
                  
                >
                  Create Content<span class="caret"></span>
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                  <li><a type="button" data-toggle="modal" data-target="#addPage">Add page</a></li>
                  <li><a href="#">Add Post</a></li>
                  <li><a href="#">Add User</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </header>

      <section id="breadcrumb">
          <div class="container">
              <ol class="breadcrumb">
                  <li><a href="index.html">Dashboard</a></li>
                <li class="active">
                  Users</li>
              </ol>
          </div>
      </section>

      <section id="main">
        <div class="container">
          <div class="row">
            <div class="col-md-3">
              <div class="list-group">
                <a href="index.html" class="list-group-item active main-color-bg"><span class="glyphicon glyphicon-cog" aria-hidden="true"></span>Dashboard</a>
                <a href="page.html" class="list-group-item"><i class="fa fa-book" aria-hidden="true"></i>Pages</span><span class="badge">12</span></a>
                <a href="post.html" class="list-group-item"><i class="fa fa-pencil" aria-hidden="true"></i>Posts<span class="badge">33</span></a>
                <a href="user.html" class="list-group-item"><i class="fa fa-user" aria-hidden="true"></i>Users<span class="badge">20</span></a>
                </div>
                <div class="well">
                   <h4>Disk Space Used</h4>
                   <div class="progress">
                      <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                        60%
                      </div>
                      </div>
                      <h4>Bandwidth Used</h4>
                      <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%;">40%
                   </div>
                   </div>
                   </div>
                </div>
              
            <div class="col-md-9">
              <div class="panel panel-default">
                <div class="panel-heading main-color-bg">
                  <h3 class="panel-title">Users</h3>
                </div>
                <div class="panel-body">
                  <div class="row">
                    <div class="col-md-12">
                      <input class="form-control" type="text" placeholder="filter Users...">
                    </div>
                  </div>
                  <!-- <div class="panel-body"> -->
                  <?php 
$sql="SELECT * FROM users";
$sorgu=mysqli_query($baglanti,$sql);
while( $sonuc=mysqli_fetch_object($sorgu) ){
    echo $sonuc->username.'<br>'.$sonuc->password.'<br><br><br>'; 
}
?>
                  </div>
                  </div>
              
              
            </div>
          </div>
        </div>
      </section>

      <footer id="footer">
        <p>Copyright Administrator, &copy; 2017</p>
      </footer>


      <!---Modals-->

      <!---Add Page-->
      <div class="modal fade" id="addPage" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" id="myModalLabel">Add page</h4>
              </div>
              <div class="modal-body">
                <div class="form-group">
                  <label>Page Title</label>
                  <input type="text" class="form-control" placeholder="Page Title">
                </div>
                <div class="form-group">
                  <label>Page Body</label>
                  <textarea name="editor1" class="form-control" placeholder="Page Body"></textarea>
                </div>
                <div class="checkbox">
                  <label>
                    <input type="checkbox">Published</input>
                  </label>
                </div>
                <div class="form-group">
                  <label>Meta Tags</label>
                  <input type="text" class="form-control" placeholder="Add Some Tags....">
                </div>
                <div class="form-group">
                  <label>Meta Description</label>
                  <input type="text" class="form-control" placeholder="Add Meta Description...">
                </div>

              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
              </div>
            </form>
            </div>
          </div>
        </div>
      </div>



     

      <script>
        CKEDITOR.replace( 'editor1' );
     </script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    </body>
</html>