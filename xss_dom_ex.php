<?php include 'includes.php';?>
<body>	
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li>
					<a href="index.php">
						<em class="fa fa-home"></em>
					</a>
				</li>
				<li class="active"><a href="xss_index.php">XSS</a></li>
				<li class="active"><a href="xss_dom.php">DOM-based XSS</a></li>
				<li class="active">Hack</li>
			</ol>
		</div>
		<div class="row">
			<div class="col-lg-12">
				<hr>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="divider"></div>
				<div class="panel panel-primary">
					<div class="panel-body">
						<div class="col-md-6">
						<h2>Set Timer</h2>
							<div class="panel-footer">
								<div class="input-group">
									<input id="btn-input" type="text" class="form-control input-md" placeholder="Seconds" /><span class="input-group-btn">
										<button OnClick="redirURL();" class="btn btn-primary btn-md" id="btn-todo">Create Timer</button>
										<script type="text/javascript">
											function redirURL()
											{
												window.location = "xss_dom_JS.php";
											}
										</script>
									</span>
								</div>
							</div>
						</div>
					</div>
					</div>
				</div>
			</div>
		</div>
	</div>