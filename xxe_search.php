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
				<li><a href="xxe_index.php">XML External Entity</a></li>
				<li><a href="xxe_exe.php">List of exercises</a></li>
				<li class="active">Hack 1</li>

			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				
			</div>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-md-12">
				<div class="divider"></div>
				<div class="panel panel-primary">
					<div class="panel-body">
						<div class="col-md-6">
							<label>Check out our bookstore: </label>
							<form role="search" action="<?php echo($_SERVER["SCRIPT_NAME"]);?>" method="POST">
								<div class="form-group">
									<input type="text" name="book" action="search" class="form-control" placeholder="Search">
									
								</div>
							</form>
							<hr>
							<table class="table">
								<tbody>
									<tr bgcolor="#30a5ff">
										<td class="fixed-table-container tbody td">Title</td>
										<td class="fixed-table-container tbody td">Author</td>
										<td class="fixed-table-container tbody td">Publisher</td>
									</tr>
									<?php
									if(isset($_POST["book"]))
									{
										$book = $_POST["book"];
										//$book = xxe($book);

										//Loads the XML file
										$library = simplexml_load_file('library.xml');
										//$result = new SimpleXMLElement("library.xml");

										foreach ($library->book as $row) {
											echo '<tr>';
											echo '<td class="fixed-table-container tbody td">'.$row->title.'</td>';
											echo '<td class="fixed-table-container tbody td">'.$row->author.'</td>';
											echo '<td class="fixed-table-container tbody td">'.$row->publisher.'</td></tr>';
									}
									
								}
									?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="col-sm-12">
		<p class="back-link">Sandwich Vulnerable Web app (SVWA) by <a href="#">SecurityGeeks</a></p>
	</div>