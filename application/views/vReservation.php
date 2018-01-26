<!DOCTYPE html>
<html>
<head>
	<title>Reservation</title>
</head>
<body>
	<form action="" method="POST">
		<table>
			<tr>
				<td>Reservation Code</td>
				<td><input type="text" name="rescode" placeholder="reservation code" disabled></td>
			</tr>
			<tr>
				<td>Reserved at</td>
				<td><input type="date" name="resat" placeholder="reserveat"></td>
			</tr>
			<tr>
				<td>Reservation Date</td>
				<td><input type="date" name="resdate" placeholder="date"></td>
			</tr>
			<tr>
				<td>Seat Code</td>
				<td>
					<select name="seat">
						<option>Seat Code</option>
						<option>1</option>
						<option>2</option>
						<option>3</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>Customer Id</td>
				<td><input type="text" name="cosid" placeholder="customerid"></td>
			</tr>
			<tr>
				<td>Rute</td>
				<td><select name="ruteid">
					<option>Rute</option>
					<option value="1">Indonesia-Singapore-South Korea</option>
				</select></td>
			</tr>
			<tr>
				<td>Depart at</td>
				<td><input type="time" name="departat" placeholder="depart at"></td>
			</tr>
			<tr>
				<td>Price</td>
				<td><input type="text" name="price" placeholder="price"></td>
				</tr>
			<tr>
				<td>User Id</td>
				<td><input type="text" name="userid" placeholder="user id"></td>
			</tr>
			<tr>
				<td colspan="2"><input type="submit" name="submit" value="Log in"></td>
			</tr>
		</table>
	</form>
</body>
</html>