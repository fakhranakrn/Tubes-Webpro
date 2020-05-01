<div style="padding-left: 30%">
		<h2>Admin Login</h2>
		<form action="login_submit" method="get" accept-charset="utf-8">
			<table>
				<tbody>
					<tr>
						<td>Email</td>
					</tr>
				
					<tr>
						<td><input type="user" name="email" class="textlog" style="padding: 5px; padding-right: 225px;"></td>
					</tr>
					
					<tr>
						<td style="padding-top: 10px">Password</td>
					</tr>

					<tr>
						<td><input type="password" name="pass" class="textlog"style="padding: 5px; padding-right: 225px; margin-bottom: 10px"></td>	
					</tr>

					<!-- <tr>
						<td style="padding-top: 10px">Forgot your password?</td>
					</tr> -->

					<tr>
						<!-- <td style="padding-top: 10px" align="left"><a href="<?php echo site_url('Barang/index'); ?>" input type="submit" value="Sign In" class="sign"></td> -->
						<!-- <td style="padding-top: 10px" align="left" action="<?php echo site_url('/Barang/index'); ?>"><input type="submit" value="Sign In" class="sign"></input></td> -->
					</tr>

					<!-- <tr>
						<td style="padding-top: 10px"><a href="<?php echo site_url('HomeController/barang'); ?>" style="color: white; text-decoration: none;">Admin Page</a></td>
					</tr> -->
				</tbody>
			</table>
		</form>
		<a style="padding-top: 0px;margin-top: 10px" align="left" href="<?php echo site_url('/Barang/index'); ?>"><input type="submit" value="Sign In" class="sign"></input></a>
	</div>