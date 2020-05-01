<div style="padding-left: 30%">
		<h2>Login</h2>
		<form action="<?= site_url('Login')?>" method="post" accept-charset="utf-8">
			<table>
				<tbody>
					<tr>
						<td>Email</td>
					</tr>
				
					<tr>
						<td><input type="email" name="emailL" class="textlog" style="padding: 5px; padding-right: 225px;"></td>
					</tr>
					
					<tr>
						<td style="padding-top: 10px">Password</td>
					</tr>

					<tr>
						<td><input type="password" name="passL" class="textlog" style="padding: 5px; padding-right: 225px"></td>	
					</tr>

					<tr>
						<td style="padding-top: 10px"><input type="submit" value="Sign In" id="signin" class="sign"></td>
					</tr>
					<!-- <tr>
						<td style="padding-top: 10px">
							<a href="<?php echo site_url('HomeController/loginAdmin'); ?>" style="color: white; text-decoration: none;">Sign In as Admin</a>	
						</td>
					</tr> -->

					<tr>
						<td style="padding-top: 10px">New customer? Sign up for an account</td>
					</tr>
				</tbody>
			</table>
		</form>
		<!-- <?php echo $error ?> -->
	</div>