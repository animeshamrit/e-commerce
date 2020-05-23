<html>
<head>
	<title>home</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/style1.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<script src="project1.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">OUR-KART</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="kart.php">e-kart</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="wish.php">WISH-LIST</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search for products,brands and more" aria-label="Search" style="font-family:Josefin Sans">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
<?php
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'kartdata');
if(isset($_POST['kart1']))
{
	$a='BLISSTONE Men Cotton Blend Colorblocked Mustard';
	$b=1799;
	$query1 = " INSERT INTO articles(name, price) VALUES ('$a',$b) ";
	mysqli_query($con,$query1);
}
if(isset($_POST['kart2']))
{
	$c='Inddus Women Green Yoke Design Anarkali Kurta';
	$d=4213;
	$query2 = " INSERT INTO articles(name, price) VALUES ('$c',$d) ";
	mysqli_query($con,$query2);
}
if(isset($_POST['kart3']))
{
	$e='Bitiya by Bhama';
	$f=2599;
	$query3 = " INSERT INTO articles(name, price) VALUES ('$e',$f) ";
	mysqli_query($con,$query3);
}
	$result=mysqli_query($con,"SELECT * FROM ARTICLES");
	?>
	<center><div class="row justify-content-center">
		<div class="container">
		<table class="table">
			<thead>
				<tr>
					<th style="font-family:arial black;font-size:30px">Name</th>
					<th style="font-family:arial black;font-size:30px">Price</th>
					<th colspan="5" style="font-family:arial black;font-size:30px">Action</th>
				</tr>
			</thead>	
			<?php 
			$sum=0;
				while($row=$result->fetch_assoc()):?>
					<tr>
						<td style="font-family:jsefin sans"><?php echo $row['name'];?></td>
						<td style="font-family:jsefin sans"><?php echo $row['price'];?></td>
						<?PHP $sum+=$row['price'];?>
						<td>
							<a href="kart2.php?delete=<?php echo $row['name'];?>" class="btn btn-danger" style="font-family:verdana">REMOVE</a>
						</td>
					</tr>
				<?php endwhile;?>
				<td class="mr-5" style="font-family:arial black;font-size:20px">Total sum = Rs <?php echo $sum?></td>
				<?php
				if($sum > 0){
				print '<td><a href="#" class="btn btn-success" style="font-family:verdana">BUY NOW</a></td>';
				}?>
		</table>
		</div>
	</div></center>
	<?php 
		function pre_r($array){
		echo '<pre>';
		print_r($array);
		echo '</pre>';
	}
	
	?>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <footer>
	<h6 class="p-3 bg-dark text-white text-center" style="font-size:15px">@amrit-corporation</h6>
  </footer>
</body>
