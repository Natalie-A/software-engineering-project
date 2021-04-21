<!DOCTYPE html>
<html>

<head>
    <title>ID Re-application</title>
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
    <img src="img/re-apply.svg" class="image" alt="" />
    <form>
        <div class="body1">
            <p>
                <label class="label" for="userId">National ID Copy: </label>
                <input type="file" accept="image/*,.pdf">
            </p>
            <p>
                <label class="label" for="policeAbstract">Police Abstract Copy: </label>
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