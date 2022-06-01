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
				<li class="active">Exercise 3</li>
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
						<p><span class="glyphicon glyphicon-hand-right"></span> <b>Task:</b> The number one rule to apply the UNION statement in SQLi is knowing the number of columns. </p>

						<p><span class="glyphicon glyphicon-hand-right"></span> <b>Spoiler:</b> <em>' ORDER BY #number--'</em> If present, it would return with no error. </p>
						
						<p><span class="glyphicon glyphicon-hand-right"></span> <b>Elaboration:</b> 
						You can easily determine the number of columns by using the <em>"ORDER BY"</em> or <em>"GROUP BY"</em>  keyword. This keyword is used in SQL to display the result of sorted columns. In this case, use the order by keyword and ask the database to sort for a higher number of columns.</p>
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