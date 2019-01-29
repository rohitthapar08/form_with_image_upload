
<?php

session_start();
// header('location:login.php');

$con = mysqli_connect('localhost','epic','Epic#123','upwork');

if($con){
	 "Connection successful";
}else{
	echo "No Connection";
}

$username = $con->real_escape_string($_POST['username']);
        if(isset($_POST['username'])){

            $filename = $_FILES["avatar"]["name"][0];
            $filename1 = $_FILES["avatar"]["name"][1];
            $filename2 = $_FILES["avatar"]["name"][2];

             $filepath = "images/".$filename;
             $filepath1 = "images/".$filename1;
             $filepath2 = "images/".$filename2;

            // move_uploaded_file($filetmp, $filepath);
            $q = "select * from test where name ='$username'  ";

            $result = mysqli_query($con ,$q);

            $num = mysqli_num_rows($result);

                if($num==1){
                    echo "Duplicate data";

                }else{
                    $qy = "insert into test(name,image_1,image_2,image_3 ) values('$username','$filepath','$filepath1','$filepath2')";
                    mysqli_query($con , $qy);
                    // header('location:home.php');
                    $_SESSION['username'] = $username;
                    $_SESSION['avatar'] = $filepath;
                    // print_r($filepath);
                    header('location:home.php');
                }
     
           

        }


?>


