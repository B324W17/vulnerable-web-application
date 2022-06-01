<?php 
include 'includes.php';
?>
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="index.php">
					<em class="fa fa-home"></em>
				</a></li>
				<li>
					<a href="file_up_home.php">
						File Upload
					</a>
				</li>
				<li >
					<a href="file_upload.php">
						 Exercises
					</a>
					</li>
				<li class="active">Hint</li>

			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				
			</div>
		</div><!--/.row-->
		
		<div class="row">
			<!--/.row-->
			<div class="col-md-12">
				<div class="divider"></div>
				<div class="panel panel-primary">
					<div class="panel-heading">How to exploit
						
					</div>
					<div class="panel-body">
						<label>About</label><br>
						<p> Blacklisting extension is one of client-side validation. Client side validation is a type 
	                         of validation which takes place before the inputs are actually sent to the server. The main
	                         intention of this validation is to provide better user experience by responding quickly at 
	                         the browser level.
	                    </p>
						<p> Blacklisting file extensions is a type of protection where only a few specific extensions
						    are being rejected from the server.
						</p>
                        <label>Target</label><br>
                        <p> Our target is to alter the file-name validation before the requet goes out of the browser.</p>
                        <label>How To</label><br>
						<p> This type of validation can be bypassed easily by turning off the JavaScript on the browser or by
	                        tampering the HTTP requests after the request goes out of the browser and before it being sent
	                        to the server or uploading some unpopular php extensions.
	                    </p>
	                    <label>Low:</label>
	                    <p> Uploadingn some unpopular php extensions</p>
	                    <label>Medium:</label>
	                    <p> Usecase</p>
	                    <label>Hign:</label>
	                    <p> Using null byte trick</p>
					</div>
				</div>
			</div>
			<!--/.row-->
		</div>