<?php
session_start();
?>
<?php 
	if (isset($_GET["pageKM"])) {
			$_SESSION['checkKM'] = 'chuyentrangKM';
			header('Location: checkKM.php');
	}		
?>
<!DOCTYPE html>
<html>
<head>
	<title>cnf_hts</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1"><link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="mystyle/mystyle.css">
	<link rel="icon" href="picture\chan-cho.png" type="image/png" sizes="16x16">
			
</head>
<body>
	<div class="container ">
		<div class="center centerMain">
			<div>
				<form method="GET" action="index.php">
					<button type="submit" name="pageKM" class="btn btn-success" style="width:300px; height:150px;">
					<h4><i class="fas fa-tags mx-3"></i>Check khuyến mãi</h4>
					</button>
				</form>
			
			</div>
			<div class="duoicung"><p class="text-secondary">---  hts ---</p></div>
		</div>
		
	</div>
</body>
</html>