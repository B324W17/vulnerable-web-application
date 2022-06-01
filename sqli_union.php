<?php include 'includes.php';?>

<body>
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="index.php">
					<em class="fa fa-home"></em>
				</a></li>
				<li><a href="sqli_index.php">SQLi</a></li>
				<li class="active">Union-based SQLi</li>

			</ol>
		</div>
		
		<div class="row"><div class="col-lg-12"></div></div>
		
		<div class="row">
			<div class="col-md-12">
				<div class="divider"></div>
				<div class="panel panel-primary">
					<div class="panel-heading">List of Union-based SQLi Exercises
						
					</div>
					<div class="panel-body">
						<table class="table">
							<tbody>
								<tr>
									<td>1</td>
									<td>Access unauthorized information</td>
									<td>
									<a href="sqli_union_hint_1.php">
										<span class="pull-right ">
										<button type="button" class="btn btn-md btn-success">Hint</button>
										</span>
										</a>
									</td>
									<td>
										<a href="sqli_union_ex.php">
											<span class="pull-right ">
											<button type="button" class="btn btn-md btn-success">GO</button>
											</span>		
										</a>		
									</td>																
								</tr>
								<tr>
									<td>2</td>
									<td>Authentication bypass</td>
									<td>
									<a href="sqli_union_hint_2.php">
										<span class="pull-right ">
										<button type="button" class="btn btn-md btn-success">Hint</button>
										</span>
										</a>
									</td>
									<td>
										<a href="sqli_login.php">
											<span class="pull-right ">
											<button type="button" class="btn btn-md btn-success">GO</button>
											</span>		
										</a>		
									</td>																
								</tr>
								<tr>
									<td>3</td>
									<td>Determine the number of columns</td>
									<td>
									<a href="sqli_union_hint_3.php">
										<span class="pull-right ">
										<button type="button" class="btn btn-md btn-success">Hint</button>
										</span>
										</a>
									</td>
									<td>
										<a href="sqli_union_ex_2.php">
											<span class="pull-right ">
											<button type="button" class="btn btn-md btn-success">GO</button>
											</span>		
										</a>		
									</td>																
								</tr>
								<tr>
									<td>4</td>
									<td>Determining the vulnerable columns</td>
									<td>
									<a href="sqli_union_hint_4.php">
										<span class="pull-right ">
										<button type="button" class="btn btn-md btn-success">Hint</button>
										</span>
										</a>
									</td>
									<td>
										<a href="sqli_union_ex_2.php">
											<span class="pull-right ">
											<button type="button" class="btn btn-md btn-success">GO</button>
											</span>		
										</a>		
									</td>																
								</tr>
								<tr>
									<td>5</td>
									<td>Discover the database table and column names</td>
									<td>
									<a href="sqli_union_hint_5.php">
										<span class="pull-right ">
										<button type="button" class="btn btn-md btn-success">Hint</button>
										</span>
										</a>
									</td>
									<td>
										<a href="sqli_union_ex_2.php">
											<span class="pull-right ">
											<button type="button" class="btn btn-md btn-success">GO</button>
											</span>		
										</a>		
									</td>																
								</tr>
								<tr>
									<td>6</td>
									<td>Extracting data from the database</td>
									<td>
									<a href="sqli_union_hint.php">
										<span class="pull-right ">
										<button type="button" class="btn btn-md btn-success">Hint</button>
										</span>
										</a>
									</td>
									<td>
										<a href="sqli_union_ex_2.php">
											<span class="pull-right ">
											<button type="button" class="btn btn-md btn-success">GO</button>
											</span>		
										</a>		
									</td>																
								</tr>
								
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>		
	</div>	
<div class="col-sm-12">
		<p class="back-link">Sandwich Vulnerable Web app (SVWA) by <a href="#">SecurityGeeks</a></p>
	</div>