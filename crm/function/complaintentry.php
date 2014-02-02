<?php 
require_once '../db/config.php';
function drop($click)
{
							$sql=mysql_query("SELECT * FROM ".$click."");
							while($row = mysql_fetch_array($sql))
							{
								echo "<option value=\"$row[DATA]\">$row[DATA]</option>";
							}

	
}
?>

<div align="center">
			<div  style="width:80%; " >
			
			<h2>Compliant Entry</h2>
			
			<table id="ctable">
				
				<tr style="height: 40px; ">
															
					<td >
						Customer Name						
					</td>
					
					<td style="padding-right: 50px;">
						<input type="text" id="cusnametxt" name="cusnametxt" required="required" style="width: 195px;"  />
					</td>
					
					<td>
						Compliant Id
					</td>
					<td>
						<input  id="numbertxt" type="text" name="numbertxt" required="required" style="width: 195px;" />
					</td>
					
				</tr>




				<tr style="height: 40px;">
					
					<td>
						Customer Address					
					</td>
					
					<td>
				   <textarea id="cusaddresstxt" name="cusaddresstxt" rows="4" cols="22">

                    </textarea> 
					</td>
					
					<td>
						Compliant Date
					</td>
					<td>
						<input onclick="choosedate();" id="datetxt" type="text" name="datetxt" class="datepicker" required="required" style="width: 195px;" />
					</td>
					
				</tr>
				


				<tr style="height: 40px;">
					
					<td>
						Customer Phone					
					</td>
					
					<td>
						<input type="text" id="cusphonetxt" name="cusphonetxt" required="required" style="width: 195px;" />
					</td>
					
					
					<td>
						Compliant Due date						
					</td>
					
					<td>
						<input id="duedatetxt" type="text" name="duedatetxt" required="required" style="width: 195px;" />
					</td>
					
				</tr>
				
						
				
				
				   <tr style="height: 40px;">
									
					<td>
						Compliant Nature				
					</td>
					
					<td>
				  	
				  	   <select id="naturetxt" name="naturetxt"  required="required" style="width: 195px;" >
						<option value="--Select Compliant--">--Select Compliant--</option>	
						<?php drop(Complaint_Nature); ?>
                        </select> 
				 	</td>
					
					
					<td>
						Technician Name					
					</td>
					
					<td>
						<input type="text" id="technametxt" name="technametxt" required="required" style="width: 195px;" />
					</td>
					
					
				</tr>
				
				
				
				
				<tr>
					
					<td>
						Compliant Status					
					</td>
					
					<td>
						<select id="status" name="status"  required="required" style="width: 195px;" >
						<option value="--Select Status--">--Select Status--</option>	
            		<?php drop(Complaint_Status);?>          
                        </select> 
					</td>
					
					
					
					<td>
						Technician Id				
					</td>
					
					<td>
						<input type="text" id="techidtxt" name="techidtxt" required="required" style="width: 195px;" />
					</td>
					
					
				</tr>
				
				
		   
		    
			</table>
			
						
		</div>
		<div>
			<table>
				<tr>
					<td><button id="bsave" onclick="valid()">Save</button></td>
					</tr>
			</table>
		</div>
		
		</div>
		

	