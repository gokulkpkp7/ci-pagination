<!DOCTYPE html>
<html>
<head>
	<title>Search Result</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<style type="text/css">
		
		.cont{

			margin-top: 40px;
			padding: 20px;
			
		}

		.page{

			padding-right: 5px;
		}
		.pagination {
		    display: inline-block;
		}

		.pagination a {
		    color: black;
		    float: left;
		    padding: 8px ;
		    text-decoration: none;
		}

		.pagination a.active {
		    background-color: #4CAF50;
		    color: white;
		    border-radius: 5px;
		}

		.pagination a:hover:not(.active) {
		    background-color: #ddd;
		    border-radius: 5px;
		}
		
	</style>
</head>
<body style="background-color: #66b2ff;">

	<div class="container cont">
		<div class="row" style="box-shadow: -0 0 10px 10px rgba(0,0,0,0.15); padding: 20px;">
			<div class="col-xs-12">
				<?php
					echo "<table class='table'>
				    <thead>
				      <tr>";
					foreach ($result as $key => $value) {
						
						foreach ($value as $x => $x_val) {
							
							echo "<th style='text-align:center'>$x</th>";

						}
						break;
					}
					echo "</tr>
						</thead>
							<tbody>
								<tr>";
					foreach ($result as $key => $value) {
						
						foreach ($value as $x => $x_val) {
							
							echo "<td style='text-align:center'>$x_val</td>";
						}
						echo "</tr></tbody>";
					}
				  	echo "</table>";
				?>	
			</div>
			
		</div>
		<div class="pagination">
			<?php
				foreach ($links as $link) {?>

					<a><?php echo $link ?>	
				<?php } ?>       
        </div>
	</div>
</body>
</html>