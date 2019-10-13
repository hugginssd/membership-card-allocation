<?php
if(!isset($_SESSION)) { 
session_start();
}
// include "auth.php";
 include "header_lanview.php";
?>
<br>
	<center><h3 class="text-success"> Winner  </h3></center>
<br>
<center>
	<div class="form-group col-sm-9">
		<?php
			include "connection.php";
			//get the winner
			$member1 = mysqli_query($con, 'SELECT DISTINCT(`tblapplications`.`applicantid`) AS ApplicantId, `tblapplications`.`applicationdate` AS ApplicationDate, 
													`tblapplications`.`tendernumber` AS TenderNumber, `tblapplications`.`tendername` AS TenderName, `tblapplications`.`referencenumber` AS ReferenceNumber, 
													`tblapplicants`.`companyname` AS CompanyName 
													FROM `tblapplications` 
													INNER JOIN `tblapplicants` 
													ON `tblapplicants`.`id` = `tblapplications`.`applicantid` 
													WHERE `tblapplications`.`budgetestimate` = (SELECT MAX(budgetestimate) AS Winner FROM `tblapplications` WHERE `winner`=0) 
			AND (SELECT MAX(duration) AS Winner FROM `tblapplications` WHERE `winner`=0)' );
			//set the winner in the database
			if (mysqli_num_rows($member1)!= 0 ) {
				while($mb1=mysqli_fetch_object($member1))
							{	
								$applicantid=$mb1->ApplicantId;
								$applicationdate=$mb1->ApplicationDate;
								$tendernumber=$mb1->TenderNumber;
								$tendername=$mb1->TenderName;
								$referencenumber=$mb1->ReferenceNumber;
								$companyname=$mb1->CompanyName;
							}
			$member2 = mysqli_query($con, 'UPDATE `tblapplications` SET `winner`=1 WHERE id='.$applicantid.'');
			if (!$member2) 
			{ 
				die (mysqli_error($con));
			}
			}
			
			$member = mysqli_query($con, 'SELECT `tblapplicants`.`id` AS Id, `tblapplicants`.`companyname` AS CompanyName, 
										 `tblapplications`.`applicationdate` AS DateApplied, `tbltenders`.`tendername` AS TenderName 
										  FROM `tblapplications` 
										  INNER JOIN `tblapplicants` 
										  ON `tblapplicants`.`id` = `tblapplications`.`applicantid` 
										  INNER JOIN `tbltenders`
										  ON `tbltenders`.`tendernumber` = `tblapplications`.`tendernumber`
										  WHERE `tblapplications`.`winner`=1 
										  AND `tblapplications`.`published`=0' );
										  
			if (mysqli_num_rows($member)== 0 ) {
				echo '<font color="red">Selection process underway. Results will be out soon</font>';
			}
			else {
				
					echo '<center>
					<table class="table">
					<thead>
						<tr>
							<th scope="col">ID</td>		
							<th scope="col">Company name</td>
							<th scope="col">Date applied</td>
							<th scope="col">Tender applied</td>
							<th scope="col">Selection process</td>
						</tr>
					</thead>';
					
					while($mb=mysqli_fetch_object($member))
							{	
								$id=$mb->Id;
								$name=$mb->CompanyName;
								$about=$mb->DateApplied;
								$vote=$mb->TenderName;
							}
								echo '
								<tbody>
									<tr>';
										echo '<th scope="row">'.$id.'</th>';		
										echo '<td>'.$name.'</td>';
										echo '<td>'.$about.'</td>';
										echo '<td>'.$vote.'</td>';
										echo '<td>Automated</td>';
							echo "</tr>";
							}
							echo'
							</tbody>
							</table>
						</center>';


						?>

	

	

	</div>
</center>