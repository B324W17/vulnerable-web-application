<table class="table">
	<tbody>
		<tr bgcolor="#30a5ff">
			
			<td class="fixed-table-container tbody td">Author</td>
			<td class="fixed-table-container tbody td">Title</td>
			<td class="fixed-table-container tbody td">Year</td>
			<td class="fixed-table-container tbody td">Publisher</td>
		</tr>
		<?php
		if(isset($_GET["search"]))
		{
			$search=$_GET["search"];
			$search = sqli($search);

			$sql="SELECT * FROM books WHERE title ='" . $search . "'";
			
			$result=mysqli_query($connection, $sql);

			if(!$result)
			{
				?>
					<tr>
					<td><?php die("Error: ".mysqli_error($connection)); ?></td>
					</tr>
			<?php
			}

			if(mysqli_num_rows($result)!= 0)
			{
				while($row=mysqli_fetch_array($result))
				{
			?>
					<tr>
					
					<td class="fixed-table-container tbody td"><?php echo $row["author"]; ?></td>
					<td class="fixed-table-container tbody td"><?php echo $row["title"]; ?></td>
					<td class="fixed-table-container tbody td"><?php echo $row["year"]; ?></td>
					<td class="fixed-table-container tbody td"><?php echo $row["publisher"];?></td>
					</tr>
		<?php
				}
			}
			else {
		?>
				<tr>
					<td ><?php echo "No books found."; ?></td>
				</tr>
		<?php						
			}
		}
			 mysqli_close($connection);
		?>
	</tbody>
</table>