<?php
							if(isset($_GET['name']))
							{
								$name=$_GET["name"];
								echo '<form class="form-horizontal" action="#" method="GET">
										<h3>Welcome </h3>
										<div class="form-group">
											<p class="control-label col-sm-2" for="name"> Full Name:</p>
											<div class="col-sm-10">'; 
													      
								echo xss($name);
								echo '
											</div>
										</div>
										<div class="form-group">
											<p class="control-label col-sm-2" for="name"> Browser type:</p>
											<div class="col-sm-10"> '; 

								echo $_SERVER['HTTP_USER_AGENT']; 
								echo '
											</div>
										</div>
									</form>';
							}
						?>