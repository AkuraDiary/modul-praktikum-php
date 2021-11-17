<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>:login</title>
		<style media="screen">
			.link{
				font-family: sans-serif ;
				color: blue;
			}
		</style>
	</head>
	<body>
		<fieldset style="display: inline-block;">
		<legend>Form Login</legend>
		<form action="proses_login.php" method="post">
			<table>
				<tr>
					<td>Username</td>
					<td>:</td>
					<td> <input type="text" name="username" value="" placeholder="Username"> </td>
				</tr>
				<tr>
					<td>Password</td>
					<td>:</td>
					<td> <input type="password" name="password" value="" placeholder="Password"> </td>
				</tr>
				<tr>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					<td colspan="3">
						<input type="submit" value="Login"> ||
						<input type="reset" name="" value="Reset"> ||
						<a href="daftar.php">Daftar</a>
					</td>
				</tr>
			</table>
		</form>
		</fieldset>
	</body>
</html>