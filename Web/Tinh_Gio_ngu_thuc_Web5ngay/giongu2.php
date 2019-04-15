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
			<a href="giongu.php">
				<button class="btn btn-warning">
				switch
				</button>
			</a>
		</div> <br />
		<div class="form container">
			<form  action="giongu2.php" method="post">
				<table class="container">
					<tr>
						<td class="title-form">Giờ Ngủ: </td>
						<td ><input class="form-control" type="text" name="gioN" size="5" required autofocus max="23" min="0"> </td>
					</tr>
					<tr>
						<td  class="title-form">Phút Ngủ: </td>
						<td><input class="form-control" type="text" name="phutN" size="5" required max="59" min="0"></td>
					</tr>
					<tr>
						<td class="title-form">Giờ Thức: </td>
						<td ><input class="form-control" type="text" name="gioT" size="5" required max="23" min="0"> </td>
					</tr>
					<tr>
						<td  class="title-form">Phút Thức: </td>
						<td><input class="form-control" type="text" name="phutT" size="5" required max="59" min="0"></td>
					</tr>
					<tr>
						<td colspan="2"><br /><input class="btn btn-info" type="submit" name="dangNhap" value="Xem Kết Quả"></td>
					</tr>
				</table>
			</form>	 <br />
			<?php 
				if(isset($_POST['dangNhap']))
				{
					$gNgu =(int) $_POST['gioN'];
					$pNgu =(int) $_POST['phutN'];
					$gThuc =(int) $_POST['gioT'];
					$pThuc =(int) $_POST['phutT'];

					$tamGio = 0; $tamPhut = 0;

					if($gThuc>$gNgu)
						$tamGio = $gThuc - $gNgu;
					else $tamGio = (24+$gThuc - $gNgu);

					if($pThuc > $pNgu)
						$tamPhut = $pThuc - $pNgu;
					else
					{
						$tamGio--;
						$tamPhut = 60-($pNgu - $pThuc);
					}
					$tam = (int)(($tamGio * 60 + $tamPhut) / 90);
            		
              		echo "Số Chu Kỳ là <b>".$tam."</b>";
				}

			?>
		</div>
	</div>
</body>
</html>