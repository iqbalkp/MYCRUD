<html>
<head>
<title>IQBAL SHOP</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link rel="stylesheet" href="aset/css/bootstrap.min.css" >
<!-- //bootstrap-css -->
<!-- Custom CSS -->
<link href="aset/css/style.css" rel='stylesheet' type='text/css' />
<link href="aset/css/style-responsive.css" rel="stylesheet"/>
<!-- font CSS -->
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- font-awesome icons -->
<link rel="stylesheet" href="aset/css/font.css" type="text/css"/>
<link href="aset/css/font-awesome.css" rel="stylesheet">
<link rel="stylesheet" href="aset/css/morris.css" type="text/css"/>
<!-- calendar -->
<link rel="stylesheet" href="aset/css/monthly.css">
<!-- //calendar -->
<!-- //font-awesome icons -->
<script src="aset/js/jquery2.0.3.min.js"></script>
<script src="aset/js/raphael-min.js"></script>
<script src="aset/js/morris.js"></script>
</head>
<body>
<section id="container">

<!--header start-->
<header class="header fixed-top clearfix">
<!--logo start-->
<div class="brand">
    <a href="" class="logo">
        IQBAL SHOP
    </a>
    <div class="sidebar-toggle-box">
        <div class="fa fa-bars"></div>
    </div>
</div>
<div class="top-nav clearfix">
    <!--search & user info start-->
    <ul class="nav pull-right top-menu">
        <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="">
                <img alt="" src="aset/images/daskom.png">
                <span class="username"></span>
                <b class="caret"></b>
            </a>
            <ul class="dropdown-menu extended logout">
                <li><a href=""><i class="fa fa-key"></i> Log Out</a></li>
            </ul>
        </li>
        <!-- user login dropdown end -->

    </ul>
    <!--search & user info end-->
</div>
</header>
<!--header end-->
<!--sidebar start-->
<aside>
    <div id="sidebar" class="nav-collapse">
        <!-- sidebar menu start-->
        <div class="leftside-navigation">
            <ul class="sidebar-menu" id="nav-accordion">
                <li><a href=""><i class="fa fa-dashboard"></i><span>Dashboard</span></a></li>
                <li><a href=""><i class="fa fa-book"></i><span>Daftar Product</span></a></li>
            </ul>
          </div>
    </div>
</aside>
<!--sidebar end-->
<!--main content start-->
<section id="main-content">
    <section class="wrapper">
        <div class="container-fluid" style="background-color:white; padding: 10px">
  <h1>DAFTAR PRODUCT</h1>
  <div class="box box-success">
    <div class="box-header with-border">
      <div class="row">
        <div class="container-fluid">
          <div class="pull-right">
            <button type="submit" class="btn btn-success" name="" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus"></i> Tambah Product</button>
            <br>
            <br>
          </div>
        </div>
      </div>
    </div>
    <?php
include 'connect.php';
$getProduct = $connection -> query("SELECT * FROM product");
while ($fetchProduct = $getProduct -> fetch_assoc()) {
	?>
	<div class="box-body no-padding">
      <div class="table-responsive">
        <table class="table" id="example">
          <tr>
            <th>Gambar</th>
            <th>Nama Product</th>
            <th>Harga</th>
            <th>Deskripsi</th>
            <th style="text-align:center">Aksi</th>
          </tr>
          <tr>
            <td style="display:inline-table;width: 50px"><img style="width: 100%" src="<?=$fetchProduct["productImage"]?>"></td>
            <td><strong><?=$fetchProduct["productName"]?></strong></td>
            <td><?=number_format($fetchProduct["productPrice"])?></td>
            <td><?=$fetchProduct["productDescription"]?></td>
            <td style="text-align:center">
					<a data-toggle="modal" data-target="" class="btn btn-info btn-sm" href="update.php?id=<?=$fetchProduct["productID"]?>"><i class="fa fa-pencil"></i>Ubah</a>
					<a class="btn btn-danger btn-sm" onclick="return confirm('Apakah yakin?')" href="delete.php?id=<?=$fetchProduct["productID"]?>"><i class="fa fa-remove"></i>Hapus</a>
				</td>
          </tr>
        </table>
      </div>
    </div>
    <?php
}
?>
  </div>
</div>
  </div>
</div>
</div>
  </div>
</div>
</div>

<script type="text/javascript">
  $(document).ready(function(){
    $('#example').DataTable();
  });

</script>

</section>
 <!-- footer -->
          <div class="footer">
            <div class="wthree-copyright">
              <p>© 2020 Visitors. All rights reserved | Design by <a href="">Iqbal Kurniawan P </a></p>
            </div>
          </div>
</section>
</section>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog">
  <div class="modal-content">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
      <h4 class="modal-title" id="myModalLabel">Tambah Product</h4>
    </div>
    <div class="modal-body">
      <form action="('index.php/buku/tambah')?>" method="post" class="form-horizontal">
        <div class="form-group">
          <label class="col-sm-3 control-label">Nama Product</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" placeholder="Nama Product" name="productName">
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-3 control-label">Deskripsi Product</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" placeholder="Deskripsi Product" name="productDescription">
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-3 control-label">Harga Product</label>
          <div class="col-sm-8">
            <input type="number" class="form-control" placeholder="Harga Product" name="productPrice">
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-3 control-label">Gambar Product</label>
          <div class="col-sm-8">
            <input type="file" class="form-control" placeholder="Gambar Product" name="productImage">
          </div>
        </div>
    </div>
    <div class="modal-footer">
      <input type="submit" class="btn btn-primary" value="Simpan" name="tambahdata">
      </form>
    </div>
    <?php
	if (isset($_SESSION["message"])){
	 	echo $_SESSION["message"];
	 	unset($_SESSION["message"]);
	}
	?>
  </div>
</div>
</div>
<script src="aset/js/bootstrap.js"></script>
<script src="aset/js/jquery.dcjqaccordion.2.7.js"></script>
<script src="aset/js/scripts.js"></script>
<script src="aset/js/jquery.slimscroll.js"></script>
<script src="aset/js/jquery.nicescroll.js"></script>
<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="aset/js/flot-chart/excanvas.min.js"></script><![endif]-->
<script src="aset/js/jquery.scrollTo.js"></script>
</body>
</html>
