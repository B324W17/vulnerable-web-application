<?php 
include 'includes.php';
?>
<body>
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
		<ol class="breadcrumb">
				<li><a href="index.php">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active"><a href="file_up_home.php">File Upload</a></li>
				<li class="active"><a href="file_upload.php">Exercises</a></li>
				<li class="active">Hack</li>

		</ol>
		</div>
		<div class="row">
			<div class="col-lg-12">
				
			</div>
		</div><!--/.row-->
		
		<div class="row">
			<!--/.row-->
			<div class="col-md-12">
				<div class="divider"></div>
				<div class="panel panel-primary">
					
				
			<div class="panel-body">

			<form class="form-horizontal" enctype="multipart/form-data" action="#" method="POST">
			<div class="form-group">
                <label>Select an image to upload:</label><br><br>
		    <div class="col-sm-offset-1 col-sm-10">
				<input name="uploaded" type="file" />
            </div>
			</div>
			<div class="form-group">        
			<div class="col-sm-offset-1 col-sm-10">
			     <input type="submit" value="Upload"  name="Upload"/>
		    </div>
			</div>
            </form>
			<hr>
			<?php "include u3.php"?>
		</div>
</div>
<body>			
																		
					
		