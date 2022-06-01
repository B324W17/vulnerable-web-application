<?php include 'includes.php';?>

<body>	
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="index.php">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">File Inclusion</li>	
			</ol>
		</div>

		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-primary">
					<div class="panel-heading">Local File Inclusion/Remote File Inclusion
						<a href="file_inclusion.php">
							<span class="pull-right ">
								<button type="button" class="btn btn-md btn-success">Exercise Here</button>
							</span>
						</a>
					</div>
					<div class="panel-body">
						<p>File inclusion vulnerabilities can also be included in the category of input validation vulnerabilities. File inclusion vulnerabilities are mostly common with PHP. Just like in other languages, PHP also contains built-in functions that allow dynamic file inclusions; if the data passed through those functions are not checked, it may allow an attacker to execute a code of his choice. </p>
						<p>In PHP, we will find four major functions that can be used to include files to be the cause of 
						most of the file inclusion vulnerabilities. The functions are “include()”, “include _ once()”, 
						“require()”, and “require _ once()”, However, there are several other functions such as 
						“file _ get _ contents( )”, “file()”, and “fop e n()” that can be abused as well.</p>
						<p>
						File inclusion vulnerabilities can be divided into two categories, namely, <b>remote file inclusion</b> 
						and <b>local file inclusion</b>. Both of them are pretty much the same; the only difference is in the file 
						that we will try to include.</p>
					</div>
				</div>
			</div>
		</div>	
	</div>
	<div class="col-sm-12">
		<p class="back-link">Sandwich Vulnerable Web app (SVWA) by <a href="#">SecurityGeeks</a></p>
	</div>