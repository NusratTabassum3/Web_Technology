 <?php 

if ($_SERVER['REQUEST_METHOD'] === "POST"){

    function test_input($data){
        $data = trim($data);
        $data = stripcslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    $flag = true;

    $firstname = test_input($_POST['fname']);
    $lastname = test_input($_POST['lname']);
    $faname = test_input($_POST['faname']);
    $maname = test_input($_POST['maname']);
    $dob = test_input($_POST['dob']);
    $gender = isset($_POST['gender']) ? test_input($_POST['gender']) : NULL;
   
    $bg = isset($_POST['bg']) ? test_input($_POST['bg']) : NULL;

    $email = test_input($_POST['email']);
    $phone = test_input($_POST['ph']);			
    $website= test_input($_POST['website']);

    $pa = test_input($_POST['pa']);
   
    $uname = test_input($_POST['uname']);
    $pass = test_input($_POST['pass']);
   

    





 
    if(empty($firstname)) {

        echo "First Name is Empty";
        echo "<br>";
    }
   
    if (empty($lastname)) {
        echo "Last Name is Empty";
        echo "<br>";
        $flag = false;

    }
   
    if (empty($faname)) {
        echo "Father Name is Empty";
        echo "<br>";
        $flag = false;
    }
    
    if (empty($maname)) {
        echo "mother Name is Empty";
        echo "<br>";
        $flag = false;
    }
    
    if (empty($gender)) {
        echo "Gender not Selected";
        echo "<br>";
        $flag = false;
    }
    if (empty($dob)) {
        echo "Date of birth empty";
        echo"<br>";
        $flag = false;
    }
    if (empty($bg)) {
        echo"Blood Group not Selected";
        echo"<br>";
        $flag = false;
    }
    if (empty($email)) {
        echo "Email is Empty";
        echo "<br>";
        $flag = false;
    }
    if (empty($phone)) {
        echo "phone is Empty";
        echo "<br>";

        $flag = false;   
     }
    if (empty($website)) {
        echo "Website is Empty";
        echo "<br>";
        $flag = false;
    }
    if (empty($pa)) {
        echo"Street/House/Road is Empty";
        echo "<br>";
        $flag = false;
    }
    
   
    if (empty($phone)) {
        echo "Mobile number is Empty";
        echo "<br>";
        $flag = false;
    }
   

    if(empty($uname)){
        echo "Username can't be Empty";
        echo "<br>";
        $flag = false;
    }

    if(empty($pass)){
        echo "Password can't be Empty";
        echo "<br>";
        $flag = false;
    }
    if ($flag === true) {
        
        echo $firstname;
        echo "<br>";
        echo  $lastname;
        echo "<br>";
        echo   $faname;
        echo "<br>";
        echo $maname;
        echo "<br>";
        echo    $dob;
        echo "<br>";
        echo $gender;
        echo "<br>";
        echo $bg;
        echo "<br>";
        echo $email;
        echo "<br>";
        echo  $phone;
        echo "<br>";
        echo $website;
        echo "<br>";
        echo $pa;
        echo "<br>";
        echo   $uname;
        echo "<br>";
        echo  $pass;
        echo "<br>";
        
    }
}




  ?>
    
   