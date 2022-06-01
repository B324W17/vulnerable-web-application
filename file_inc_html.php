<body>	
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="index.php">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active"><a href="file_inc_home.php">File Inclusion</a></li>
				<li class="active"><a href="file_inclusion.php">List of exercises</a></li>
				<li class="active">Hack me</li>

			</ol>
		</div>
		
		<div class="row">
			<div class="col-lg-10">
				<hr>
			</div>
		</div>
		
	<div class="row">
		<div class="col-md-12">
			<div class="divider"></div>
			<div class="panel panel-primary">		
				<div class="panel-body">
					<div class="col-md-6">
						<form action="<?php echo($_SERVER["SCRIPT_NAME"]);?>" method="GET">
							<div class="form-group">
								<h4>Select a file:</h4>
								<select name="file" class="form-control">
								<?php
								if($_COOKIE["security_level"]=="1" || $_COOKIE["security_level"]=="2")
								{
								?>
									<option value="file_1">File 1</option>
									<option value="file_2">File 2</option>
								<?php
								}
								else
								{
								?>
								<option value="file_1.php">File 1</option>
								<option value="file_2.php">File 2</option>
								<?php
								}
								?>
								</select>
							</div>
								
							<button class="btn btn-primary" type="submit" name="action" value="go">Submit</button>
						</form>
					</div>
				</div>