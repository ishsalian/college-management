<html>
  <head>
     <title>Admission Form</title>
  </head>
  <body>
  <?php include('common/header.php') ?>
  <div class="container-fluid">
		<div class="row pt-2">
			<div class="col-xl-12 col-lg-12 col-md-12 w-100">
				<div class="bg-info text-center">
					<div class="table-one flex-wrap flex-md-no-wrap pt-3 pb-2 mb-3 text-white admin-dashboard pl-3">
						<h4>Online Addmission Form</h4>
					</div>
				</div>
			</div>
		</div>
       <fieldset>
         <legend>Personal Details</legend>
         <table>
            <tr>
		<th>Name: </th>
		<td><input type="text" name="t3"/></td>
            </tr>
            <tr>
		<th>Mother's Name</th>
		<td><input type="text" name="t4"/></td>
	    </tr>
            <tr>
		<th>Father's Name</th>
		<td><input type="text" name="t5"/></td>
	    </tr>
            <tr>
		<td>Date of Birth</td>
		<td><input type="date" name="t6"/></td>
	    </tr>
            <tr>
		<td>Gender</td>
		<td>
		    <input type="radio" name="r1" value="male">Male</input>
		    <input type="radio" name="r1" vale="female">Female</input>
                </td>
	    </tr>
</table>
       </fieldset>
        <fieldset>
         <legend>Contact Details</legend>
          <table>
            <tr>
		<td>Contact Number: </td>
		<td><input type="tel" name="t7"/></td>
            </tr>
            <tr>
		<td>Email ID: </td>
		<td><input type="email" name="t8"/></td>
            </tr>
            <tr>
		<td>Address</td>
		<td><textarea rows="5" cols="30">Enter Address...</textarea></td>
            </tr>
            <tr>
		<td>Country: </td>
		<td>
                   <select name="country">
			<option>India</option>
			<option>USA</option>
			<option>UK</option>
			<option>Australia</option>
                   </select>
                </td>
            </tr>
          </table>

       </fieldset> 
       <fieldset>
         <legend>Academic Details</legend>
         <table>
           <tr>
             <td>10<sup>th</sup> Class Marks:</td>
             <td><input type="number" name="t9"/></td>
             <td>Board: </td>
             <td><input type="text" name="t9_1"/></td>
             <td>School Name: </td>
             <td><input type="text" name="t9_2"/></td>
           </tr>
           <tr>
           <tr>
             <td>12<sup>th</sup> Class Marks:</td>
             <td><input type="number" name="t10"/></td>
             <td>Board: </td>
             <td><input type="text" name="t10_1"/></td>
             <td>School Name: </td>
             <td><input type="text" name="t10_2"/></td>
           </tr>
           </tr>
         </table>
       </fieldset>  
       <div style="margin-top: 20px; padding: 10px;text-align: center;">
           <Button onclick="alert('Form Submitted');">Submit</button>
       </div>  
     </form>
     </div>
  </body>
</html>


