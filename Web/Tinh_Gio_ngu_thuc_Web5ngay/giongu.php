<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Tính Giờ Ngủ</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<style>
	body {
	  background: url(banner1.jpg) no-repeat center center fixed;
	  background-size: cover;
	  padding: 5%;
	}


	.background{
		
		text-align: center;
		border: 1px solid #ccc;
		background-image: radial-gradient(circle, #7e0490, #95075d, #8c323e, #764a3a, #61584f);
	}

	.title-dn
	{
		text-align: center;
		color: white;
		font-size: 25px;
	}

	.form{
		color: yellow;
		text-align: center;
	}

	.title-form
	{
		width: 30%;
	}

	.delete-td
	{
		width:10%;
	}

</style>
<body class="container-fluid">
	<div class="container background col-xs-10 col-sm-6 col-md-4 col-xs-offset-2 col-sm-offset-3 col-md-offset-4"> <br />
		<div class="title-dn">Chương Trình Tính Giờ Ngủ 
			<a href="giongu2.php">
				<button class="btn btn-warning">
				switch
				</button>
			</a>
		</div> <br />
		<div class="form container">
			<form  action="giongu.php" method="post">
				<table class="container">
					<tr>
						<td class="title-form">Giờ: </td>
						<td ><input class="form-control" type="number" name="gio" size="5" required autofocus max="23" min="0"> </td>
					</tr>
					<tr>
						<td  class="title-form">Phút: </td>
						<td><input class="form-control" type="number" name="phut" size="5" required max="59" min="0"></td>
					</tr>
					<tr>
						<td  class="title-form">Số Chu Kỳ: </td>
						<td><input class="form-control" type="number" name="chuky" size="5" required min="0"></td>
					</tr>
					<tr>
						<td colspan="2"><br /><input class="btn btn-info" type="submit" name="dangNhap" value="Xem Kết Quả"></td>
					</tr>
				</table>
			</form>	 <br />
			<?php 
				if(isset($_POST['dangNhap']))
				{
					$gNgu =(int) $_POST['gio'];
					$pNgu =(int) $_POST['phut'];
            		$tam = $gNgu * 60 + $pNgu + 90 * (int)$_POST['chuky'] + 14;
                	$gThuc = (int)($tam / 60);
                	$pThuc = ($tam % 60);


               		while ($gThuc > 24)
              		{
                		$gThuc -= 24;
             		}

              		echo "Giờ Bạn Thức: <b>".$gThuc."</b> giờ <b>".$pThuc."</b> phút (14 phút vào giấc ngủ)";
				}

			?>
		</div>
	</div>
</body>
</html>