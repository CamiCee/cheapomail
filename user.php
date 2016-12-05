<?php
    $host = getenv('IP');
    $username = getenv('C9_USER');
    $password = '';
    $dbname = 'test';
    
    if (isset ($_POST['username']) && isset ($_POST['password']) && !empty ($_POST['username']) && !empty ($_POST['password']) && preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$/", $_POST['password']))
    {
        $pdo_dsn="mysql:dbname=$dbname;host=$host";
        $pdo_user=$username; 
        $pdo_password=$password; 
        
        try
        {
            $conn = new PDO($pdo_dsn, $pdo_user, $pdo_password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $qry=$conn->prepare('INSERT INTO User (firstname,lastname,password,username) VALUES (:firstname,:lastname,md5(:password),:username)');
            $qry->execute(Array(
                ':firstname' => $_POST[firstname]=filter_input (INPUT_POST, 'firstname', FILTER_SANITIZE_STRING),
                ':lastname' => $_POST[lastname]=filter_input (INPUT_POST, 'lastname', FILTER_SANITIZE_STRING),
                ':password' => $_POST[password],
                ':username' => $_POST[username]=filter_input (INPUT_POST, 'username', FILTER_SANITIZE_STRING)
                ));
                 echo "Account created!";
                 echo "<p><a href='index.php#getinput'>Login Here</a></p>";
            
        }
        catch (PDOException $e) 
        {
           if ($e->errorInfo[1] == 1062) 
           {
               echo "Username already exists! Please enter a different username <a href='no-refresh.php'>Go Back</a>";
            }
            else
            {
            echo "Could not connect to the database!";
            echo 'Error: ' . $e->getMessage() . " file: " . $e->getFile() . " line: " . $e->getLine();
            exit;
            }
        }
       
    }
?>