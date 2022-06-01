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
				<li class="active">Exercise 1</li>

			</ol>
		</div>
		
		<div class="row">
			<div class="col-md-12">
				<div class="divider"></div>
				<div class="panel panel-primary">
					<div class="panel-heading">Take a small bite!</div>
					<div class="panel-body">
						<p><span class="glyphicon glyphicon-hand-right"></span> <b>Task:</b> Find out if there is a book named <em>Unknown</em> in the bookstore.</p>
						<p><span class="glyphicon glyphicon-hand-right"></span> <b>Spoiler:</b> Make a syntax error and observe what it says. </p><hr>
						<p>
							<b>Low:</b> The input given is not validated thus results in a full disclosure of the hidden information.<br>	
						</p><hr>
						<p>
							<b>Medium:</b> A mechanism is used to slash out certain characters restraining them from being used for exploitation. 
						</p><hr>
						<p>
							<b>High:</b> 
						</p><hr>
						<p><span class="glyphicon glyphicon-hand-right"></span>
							<b> Links: </b> <a href="https://www.google.com">Google Search</a>
						</p>
					</div>
				</div>
			</div>
		</div>	
	</div>	
	<div class="col-sm-12">
		<p class="back-link">Sandwich Vulnerable Web app (SVWA) by <a href="#">SecurityGeeks</a></p>
	</div>