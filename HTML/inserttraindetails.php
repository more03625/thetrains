<!-- dbinserttrain.php file -->

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Insert Train Details</title>
<style>
.mar{
	margin-left: 20vw;
}
</style>
</head>
<body>
	<h1>Insert New Train Details</h1>
<form class="" action="dbinserttrain.php" method="post">

<div class="mar">
	<table border="1" style="border-spacing: 2px;">
		<tr>
			<td>From: Time </td>
			<td><input type="text" name="start" required="required"></td>
			<td><input type="time" name="start_time" required="required"></td>
		</tr>
		<tr>
			<td>To: Time </td>
			<td><input type="text" name="destination" required="required"></td>
			<td><input type="time" name="destination_time" required="required" title="time"></td>
		</tr>
		<tr>
			<td rowspan="5">Line </td>
		</tr>
		<tr>
			<td colspan="2"><input type="radio" name="line" value="h" required="required">Harbour </td>
		</tr>
		<tr>
			<td colspan="2"><input type="radio" name="line" value="c">Central</td>
		</tr>
		<tr>
			<td colspan="2"><input type="radio" name="line" value="w">Western </td>
		</tr>
		<tr>
			<td colspan="2"><input type="radio" name="line" value="th">Trans-Harbour </td>
		</tr>
		<tr>
			<td> ON Sunday? </td>
			<td colspan="2"> <input type="radio" name="on_sunday" value="1">Yes
                      <input type="radio" name="on_sunday" value="0">No  </td>
		</tr>
		<tr>
			<td colspan="3"><center><input type="submit" name="insert" value="Insert"></center></td>
		</tr>
	</table>
</div>
</form>
<h3> Note: insert Train rank according to station number example: cst-1,masjid bandar-2........khandeshwar-24,panvel-25  like this.</h3>
</body>
</html>
