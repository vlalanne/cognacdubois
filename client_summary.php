		<table cellspacing="10px">
			<tr>
				<td>Nom :</td>
				<td><?php echo $_POST['lastname']; ?></td>
				<td>Prénom :</td>
				<td><?php echo $_POST['firstname']; ?></td>
			</tr>
			<tr>
				<td>Adresse :</td>
				<td colspan="3"><?php echo $_POST['address_street']; ?>
				</td>
			</tr>
			<tr>
				<td>Code Postal :</td>
				<td><?php echo $_POST['address_zip_code']; ?>
				</td>
				<td>Ville :</td>
				<td><?php echo $_POST['address_city']; ?></td>
			</tr>
			<tr>
				<td>E-mail :</td>
				<td><?php echo $_POST['email']; ?></td>
				<td>Téléphone :</td>
				<td><?php echo $_POST['phone']; ?></td>
			</tr>
		</table>