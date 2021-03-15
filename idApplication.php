<!DOCTYPE html>
<html>
    <head>
        <title>ID application page</title>
        <link rel="stylesheet" href="idApplication.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
		<form>
			<div class="body">
				<h1>ID application</h1>
                <p>* Please put N/A in a field where it is not applicable</p>
				<p>
					<input type="text" name="fullName" placeholder="Full Name" class="txt" required autocomplete="off" value="abc">
				</p>
				<p>
					<input type="date" name="dob" placeholder="Date of birth" class="txt" required  autocomplete="off">
				</p>
				<p class="label">
                    <label for="gender">Gender:</label><br>
                    <input type="radio" id="gender" name="gender" value="Male">Male<br>
                    <input type="radio" id="gender" name="gender" value="Female">Female
                </p>
                <p>
					<input type="text" name="fatherName" placeholder="Father's Name" class="txt" required autocomplete="off">
				</p>
                <p>
					<input type="text" name="motherName" placeholder="Mother's Name" class="txt" required autocomplete="off">
				</p>
                <p>
					<input type="text" name="guardianName" placeholder="Guardian's Name" class="txt" required autocomplete="off">
				</p>
                <p class="label">
                    <label for="maritalStatus">Marital Status:</label><br>
                    <input type="radio" id="maritalStatus" name="maritalStatus" value="Single">Single<br>
                    <input type="radio" id="maritalStatus" name="maritalStatus" value="Married">Married<br>
                    <input type="radio" id="maritalStatus" name="maritalStatus" value="Widowed">Widowed<br>
                    <input type="radio" id="maritalStatus" name="maritalStatus" value="Divorced">Divorced<br>

				</p>
                <p>
					<input type="text" name="spouseName" placeholder="Spouse Name" class="txt" required autocomplete="off">
				</p>
                <p>
					<input type="number" name="spouseId" placeholder="Spouse Id" class="txt" required autocomplete="off">
				</p>
                <p>
					<input type="text" name="placeOfBirth" placeholder="Place of birth" class="txt" required autocomplete="off">
				</p>
                <p>
					<input type="text" name="HomeAddress" placeholder="Home address" class="txt" required autocomplete="off">
				</p>
                <p class="label">
                    <label for="passportPhoto">Passport photo:</label>
                    <input type="file" id="passportPhoto" name="passportPhoto">
                </p>
                <p class="label">
                    <label for="birthCertificate">Birth certificate copy:</label>
                    <input type="file" id="birthCertificate" name="birthCertificate">
                </p>
                <p class="label">
                    <label for="parentIdCopy">Copy of parent's/guardian's Id:</label>
                    <input type="file" id="parentIdCopy" name="parentIdCopy">
                </p>
				<p>
					<button type="submit" name="submit" class="btn">Submit</button>
					<input type="hidden" name="event" value="register">
				</p>
			</div>
		</form>
	</body>
</html>