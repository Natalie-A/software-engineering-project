<!DOCTYPE html>
<html>

<head>
    <title>ID application</title>
    <link rel="stylesheet" href="idApplication.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <div class="content">
        <header>
            <a href="#" class="brand">Kenya</a>
            <div class="menu-btn"></div>
            <div class="navigation">
                <div class="navigation-items">
                    <a href="homePage.php">Home</a>
                    <a href="idApplication.php">Apply for an ID</a>
                    <a href="idReapplication.php">Lost/Stolen ID</a>
                    <a href="profile.php">My Profile</a>
                    <a href="processLogout.php">Logout</a>
                </div>
            </div>
        </header>
    </div>
    <img src="img/apply.svg" class="image" alt="" />
    <form id="application">
        <div class="body">
            <p>
                <input type="text" name="fullName" placeholder="Full Name" class="line" required>
            </p>
            <p>
                <input list="gender" class="line" id="genderr" name="genderr" placeholder="Gender" />
                <datalist id="gender">
                    <option value="Male">
                    <option value="Female">
                    <option value="Other">
                </datalist>
            </p>
            <p>
                <input type="date" name="dob" placeholder="Date of Birth" class="line" required>
            </p>
            <p>
                <input type="text" name="fatherName" placeholder="Father's Name" class="line" required>
            </p>
            <p>
                <input type="text" name="motherName" placeholder="Mother's Name" class="line" required>
            </p>
            <p>
                <input type="text" name="homeAddress" placeholder="Home Address" class="line" required>
            </p>
            <p>
                <input type="text" name="placeOfBirth" placeholder="Place of Birth" class="line" required>
            </p>
            <p>
                <input list="maritalStatus" class="line" id="maritalStat" name="maritalStat" placeholder="Marital Status" />
                <datalist id="maritalStatus">
                    <option value="Single">
                    <option value="Married">
                    <option value="Divorced">
                </datalist>
            </p>
            <p>
                <input type="text" name="spouseName" placeholder="Spouse's Name" class="line" required>
            </p>
            <p>
                <input type="tel" name="spouseID" placeholder="Spouse's Phone Number" class="line" required>
            </p>
            <p>
                <label class="label" for="passport">Passport Photo: </label>
                <input type="file" accept="image/*,.pdf">
            </p>
            <p>
                <label class="label" for="birthCert">Birth Certificate: </label>
                <input type="file" accept="image/*,.pdf">
            </p>
            <p>
                <label class="label" for="parentId">Parents'/Guardians' ID Copy: </label>
                <input type="file" accept="image/*,.pdf">
            </p>
            <p>
                <button type="submit" class="btn" name="Confirm">Submit</button>
                <input type="hidden" name="event" value="changePassword">
            </p>
        </div>
    </form>
</body>

</html>