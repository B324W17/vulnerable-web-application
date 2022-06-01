<?php include 'includes.php'; ?>

<body>	
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="index.php">
					<em class="fa fa-home"></em>
				</a></li>
				<li><a href="sqli_index.php">SQLi</a></li>
				<li><a href="sqli_union.php">Union-based SQLi</a></li>
				<li class="active">Exercise 4</li>
			</ol>
		</div>
		
		<div class="row">
			<div class="col-lg-12">
				
			</div>
		</div>

		<div class="row">
			<div class="col-md-12">
				<div class="divider"></div>
				<div class="panel panel-primary">
					<div class="panel-heading">Take a small bite!</div>
					<div class="panel-body">
						<p><span class="glyphicon glyphicon-hand-right"></span> <b>Task:</b> Find out if there are columns that the database doesn't want data to be printed from. </p>

						<p><span class="glyphicon glyphicon-hand-right"></span> <b>Spoiler:</b> Use <em>UNION SELECT</em> or <em>UNION ALL SELECT</em></p>
						
						<p><span class="glyphicon glyphicon-hand-right"></span> <b>Extra:</b> 
						To fingerprint a database we use: <em>' AND 1=0 UNION ALL SELECT 1,version(),user(),database(),5,6--+</em>.</p>
						<hr>
						<p>
							<b>Low:</b> The input given is not validated thus results in a full disclosure of the hidden information. Craft an input that can comment out the rest of the query and make the hidden information visible.<br>	
						</p><hr>
						<p>
							<b>Medium:</b> A mechanism is used to slash out certain characters restraining them from being used for exploitation. 
						</p><hr>
						<p>
							<b>High:</b> Bypass mysqli_real_escape_string() function.
						</p><hr>
						<p><span class="glyphicon glyphicon-hand-right"></span>
							<b> Links: </b> <!--<a href="https://www.youtube.com/watch?v=GLPgq0WLkVY">Help!</a>-->
							<a href="#">Help!</a>
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="col-sm-12">
	<p class="back-link">Sandwich Vulnerable Web app (SVWA) by <a href="#">SecurityGeeks</a></p>
</div>