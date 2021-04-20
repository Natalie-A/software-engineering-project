<!DOCTYPE html>
<html>
    <head>
        <title>Main page</title>
        <link rel="stylesheet" href="register.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
		<table id="myTable">
		<tr>
			<th>Id Number</th>
			<th>Full Name</th>
            <th>Place of birth</th>
            <th>Email address</th>
            <th>Home address</th>
            <th>Date of birth</th>
            <th>Gender</th>
            <th>Marital status</th>
		</tr>

		<?php 
        include "db.php";
        try 
            {  
                session_start(); 
                $stmt = $pdo->prepare ('SELECT full_name,place_of_birth,email_address,home_address,date_of_birth,gender,marital_status,national_id_numer WHERE user_id=?');
                $stmt->execute([$this->getFullName()]);
                $_SESSION["name"]=$this->getFullName();   
                while($row = $stmt->fetch(PDO::FETCH_ASSOC))
                    {
                        $national_id_numer=$row["national_id_numer"];
                        $full_name=$row["full_name"];
                        $place_of_birth=$row["place_of_birth"];
                        $email_address=$row["email_address"];
                        $home_address=$row["home_address"];
                        $date_of_birth=$row["date_of_birth"];
                        $gender=$row["gender"];
                        $marital_status=$row["marital_status"];
                    } 
            }
            catch (PDOException $e) 
            {            	
                return $e->getMessage();        
            }     
		?>
			 <tr>
			 	<td><?php echo $national_id_numer ?></td>
			 	<td><?php echo $full_name ?></td>
			 	<td><?php echo $place_of_birth ?></td>
                <td><?php echo $email_address ?></td>
                <td><?php echo $home_address ?></td>
                <td><?php echo $date_of_birth ?></td>
                <td><?php echo $gender ?></td>
                <td><?php echo $marital_status ?></td>
			 </tr>
		</table>
	</body>
</html>