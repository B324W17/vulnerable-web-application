<?php

						if(isset($_POST["submit"]))
						{

	   						$name = $_POST["name"];
	   						$name = xss($name);

	    					$message = $_POST["message"];
	    					$message = xss($message);

	   						if($name == "" || $message=="")
		    				{
								echo '<div class="panel-body">
										<label class="col-md-3 control-label">Please fill both fields.</label>
									</div>';
		    				}
	    					else            
	    					{ 
	    						$sql = "INSERT INTO comments(commenter,message) VALUES('".xss($name)."','".xss($message)."')";

	        					$result = mysqli_query($connection,$sql);

						        if(!$result)
						        {
						        	echo '<div class="panel-body">
												';
									echo die("Error: ".mysqli_error($connection));
									
									echo '</div>';
						        }
							    else
							    {
								  echo '<div class="panel-body">Thank you for your participation.</div>';
								}
							}		       
						}
					
						if(isset($_POST["show_all"]))
						{
							$name = $_POST["name"];
							$name = xss($name);
							
		    				$message = $_POST["message"];
		    				$message = xss($message);
		    				
							$sql = "SELECT * FROM comments";
							
							$result = mysqli_query($connection,$sql);

							if(!$result)
							{
								
								echo '<div class="panel-body">';
								
								echo die("Error: ".mysqli_error($connection));
										
								echo '</div>';
							}
							
							if(mysqli_num_rows($result)!= 0)
							{
									    		
								while($row=mysqli_fetch_array($result))
								{
									echo  '<div class="panel-body">
												<ul>
													<li class="left clearfix">
														<div class="chat-body clearfix">
															<div class="header">
																<strong class="primary-font">'.xss($row["commenter"]).'</strong> 
															</div>
															<p><i>'.xss($row["message"]).'</i></p>
														</div>
													</li>
												</ul>
											</div>';
								}
							}
							else
							{
								echo '<div class="panel-body">No book reviews submitted.</div>';
							}
						}

						mysqli_close($connection);
					