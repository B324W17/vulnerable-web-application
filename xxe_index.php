<?php include 'includes.php';?>
<body>
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="index.php">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">XML External Entity</li>

			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				
			</div>
		</div><!--/.row-->
		
		<div class="row">
			<!--/.row-->
			<div class="col-lg-12">
				<div class="divider"></div>
				<div class="panel panel-primary">
					<div class="panel-heading">XML External Entity Injection (XXE)
						<a href="xxe_exe.php">
							<span class="pull-right ">
								<button type="button" class="btn btn-md btn-success">Exercise Here</button>
							</span>
						</a>
					</div>
					<div class="panel-body">
						<p>
							A popular attack type that can be used to exploit partial/full SSRF is known as XXE injection vulnerability; this type of vulnerability targets XML parsers not validating the inputs properly. 
						</p>
						<p>XXE injection vulnerability has been known since the early 2000s; however, recently, there has 
						been an increase in the use of XML documents due to the growing use of the webservices such as 
						REST API and SOAP, which commonly use XML to process the data.</p>
						<p>
						XML has a feature to dynamically create entities; some of the entities are predefined, and they are 
						referenced by using an ampersand (&amp;) and a semicolon (;) at the end. However, XML also allows us 
						to create custom entities, the most popular being the internal and external entities. Internal entities 
						can be used to reference internal data and external entities to reference data from external sources.
						Here is an example of defining an internal entity:</p>
					</div>
				</div>
			</div>
		</div>	
	</div>
		
	<div class="col-sm-12">
		<p class="back-link">Sandwich Vulnerable Web app (SVWA) by <a href="#">SecurityGeeks</a></p>
	</div>