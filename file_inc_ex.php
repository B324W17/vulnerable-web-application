<?php include 'includes.php';
	$file = "";

	if(isset($_GET["file"]))
	{
	    switch($_COOKIE["security_level"])
	    {
	        case "0" :
	            $file = $_GET["file"];
	            break;
	        case "1" :
	            $file = $_GET["file"].'.php';
	            $file = str_replace( array( "http://", "https://" ), "", $file );
				$file = str_replace( array( "../", "..\"" ), "", $file );
	            break;
	        case "2" :
	            $server_files = array("file_1.php", "file_2.php");  
	            $file = $_GET["file"] . ".php";
	            break;
	        default :
	            $file = $_GET["file"];         
	            break;
	    }
	}
	include('file_inc_html.php');
?>
		<?php		
		if(isset($_GET["file"]))
		{
			if($_COOKIE["security_level"]=="2")
			{
				if(in_array($file, $server_files)) 
				echo '<div class="panel-body">';
				include($file);
				echo '</div>';
			}
			else
			{
				echo '<div class="panel-body">';
				include($file);
				echo '</div>';
				
			}
			
		}
	?>	
						</form>													
					</div>
				</div>
			</div>
		</div>	
	</div>

	<div class="col-sm-12">
		<p class="back-link">Sandwich Vulnerable Web app (SVWA) by <a href="#">SecurityGeeks</a></p>
	</div>	