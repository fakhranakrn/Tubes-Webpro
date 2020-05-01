<div style="padding-left: 30%">
		<h2>Profile</h2>
		<?php $dataakun = $this->session->userdata('data_akun'); ?>
		<form action="<?php echo site_url('AkunController/editData') ?>" method="post">
			<table>
				<tbody>
					<tr>
						<td>First Name</td>
					</tr>
				
					<tr>
						<td><input type="text" name="fnameP" class="textlog" style="padding: 5px; padding-right: 225px;" value="<?= $dataakun['firstname']; ?>"></td>
					</tr>
					
					<tr>
						<td style="padding-top: 10px">Last Name</td>
					</tr>

					<tr>
						<td><input type="text" name="lnameP" class="textlog"style="padding: 5px; padding-right: 225px" value="<?= $dataakun['lastname']; ?>"></td>	
					</tr>

					<tr>
						<td style="padding-top: 10px">Email</td>
					</tr>

					<tr>
						<td><input type="text" name="emailP" class="textlog"style="padding: 5px; padding-right: 225px" value="<?= $dataakun['email']; ?>"></td>	
					</tr>

					<tr>
						<td style="padding-top: 10px">Password</td>
					</tr>

					<tr>
						<td><input type="password" name="passP" class="textlog"style="padding: 5px; padding-right: 225px" value="<?= $dataakun['password']; ?>"></td>	
					</tr>

					<tr>
						<td style="padding-top: 10px">
								<input type="submit" class="sign" value="OK">
						</td>
						<!-- <td style="padding-top: 10px"> -->
								
						<!-- </td> -->
					</tr>

				</tbody>
				
			</table>
		</form>
		
		<br>

		<a style="text-decoration: none; color: white" href="<?php echo site_url('AkunController/delete');  ?>">Delete Account</a>
		<br>
		<a style="text-decoration: none; color: white" href="<?php echo site_url('AkunController/logout'); ?>">Log Out</a>
		<br>
		<br>
	</div>