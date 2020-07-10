<!DOCTYPE html>
<html lang="en">
<head> 
     <title>form</title>
	
	 <meta charset="UTF-8">
           <meta name="description" content="web page">
	 
	 
</head>
<body>
<?php 
        $name                   = '';
        $email                  = '';
        $phone                  = '';
        $country                = '';
        $address                = '';
        $password               = '';
        $confirm_password       = '';
        
    if(isset($_POST['submit']))
    {
        $name                   = $_POST['name'];
        $email                  = $_POST['email'];
        $phone                  = $_POST['phone'];
        $country                = $_POST['country'];
        $address                = $_POST['address'];
        $password               = $_POST['password'];
        $confirm_password       = $_POST['confirm_password'];
    }
    
    $table = 0;

    if(isset($_POST['tableSubmit'])){
        $table = $_POST['table'];
        
        for($i = 1; $i <= 10; $i++){
            echo $table." x " . $i . " = " . $table*$i . "<br>";
        }

    }

?>
    <form method="POST">
        <input type="text" placeholder="Enter your number" name="table">
        <input type="submit" name="tableSubmit">
    </form>
    <form method="POST">
    <div>    
        <label for="name">Name</label>
        <input type="text" name="name" id="name">
    </div>
    <div>    
        <label for="email">Email</label>
        <input type="email" name="email" id="email">
    </div>
    <div>    
        <label for="phone">Phone</label>
        <input type="text" name="phone" id="phone">
    </div>
    <div>    
        <label for="country">Country</label>
        <input type="text" name="country" id="country">
    </div>
    <div>    
        <label for="address">Address</label>
        <input type="text" name="address" id="address">
    </div>
    <div>    
        <label for="password">Password</label>
        <input type="password" name="password" id="password">
    </div>
    <div>    
        <label for="confirm_password">Confirm Password</label>
        <input type="password" name="confirm_password" id="confirm_password">
    </div>
    <div>
        <input type="submit" name="submit">
    </div>
    </form>
    
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>email</th>
                <th>phone</th>
                <th>country</th>
                <th>address</th>
                <th>Password</th>
            </tr>
            <tr>
                <td><?php echo $name ?></td>
                <td><?php echo $email ?></td>
                <td><?php echo $phone ?></td>
                <td><?php echo $country ?></td>
                <td><?php echo $address ?></td>
                <td><?php echo password_hash($password, PASSWORD_DEFAULT); ?></td>
            </tr>
        </thead>
    </table>
</body>
</html>