<?php $host="";?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Ping Pwn</title>

    <meta name="description" content="Source code generated using layoutit.com">
    <meta name="author" content="LayoutIt!">

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

  </head>
  <body>
<h1>Network Diagnostics</h1>
    <div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<form role="form" method="POST" action="./index.php">
				
				<div class="form-group">
					 
					<label for="host">
						Enter host to ping:
					</label>
					<input type="text" class="form-control" id="host" name="host" value="www.google.com">
					
				</div>
				
				<button type="submit" class="btn btn-primary" >
					Submit
				</button>
				<br>
			</form>
			<?php
            if (isset($_POST["host"])) {
	            $host = $_POST["host"];
            }
			?>
			<br>
			<div class="jumbotron">
				<h2>
					ping result:<?php echo $host;?>
				</h2>
				<p>
					<?php echo shell_exec("ping -c 1" . $host);?>
				</p>
		
			</div>
		</div>
	</div>
</div>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
  </body>
</html>
