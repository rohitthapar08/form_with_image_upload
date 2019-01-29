
<?php

session_start();
// header('location:login.php');
$_SESSION['message']='';
$con = mysqli_connect('localhost','epic','Epic#123','upwork');

if($con){
	 "Connection successful";
}else{
	echo "No Connection";
}

// mysqli_select_db($con,'upwork');

// $name = $_POST['username'];
$username = $con->real_escape_string($_POST['username']);
// $avatar_path = $con->real_escape_string('images/'.$_FILES['avatar']['name']);
        if(isset($_POST['username'])){
            // echo ("<pre>");
            // print_r($_FILES['avatar']['name']);
            // echo ("</pre>");
            // for ($i=0; $i < count($_FILES["file_img"]["name"]); $i++) { 
               // echo  $filetmp = $_FILES["file_img"]["tmp_name"][$i];
                     $filename = $_FILES["avatar"]["name"][0];
                    $filename1 = $_FILES["avatar"]["name"][1];
                    $filename2 = $_FILES["avatar"]["name"][2];
               // echo $filetype = $_FILES["file_img"]["type"][$i];
                     $filepath = "images/".$filename;
                     $filepath1 = "images/".$filename1;
                     $filepath2 = "images/".$filename2;

            // move_uploaded_file($filetmp, $filepath);

             $qy = "insert into test(name,image_1,image_2,image_3 ) values('$username','$filepath','$filepath1','$filepath2')";
                mysqli_query($con , $qy);
                header('location:home.php');

            // }
           

        }
        
 // if (preg_match("!image!",$_FILES['avatar']['type'])) 
 //     {         
 //         //copy image to images/ folder 
 //         if (copy($_FILES['avatar']['tmp_name'], $avatar_path)) 
 //         {

 //            // $_SESSION['username'] = $name;
 //            $_SESSION['username'] = $username;
 //            $_SESSION['avatar'] = $avatar_path;

 //            $q = "select * from test where name ='$username'  ";

 //             $result = mysqli_query($con ,$q);

 //            $num = mysqli_num_rows($result);

 //            if($num==1){
 //                echo "Duplicate data";

 //            }else{
 //                $qy = "insert into test(name,image_1 ) values('$username','$avatar_path')";
 //                mysqli_query($con , $qy);
 //                // $_SESSION['message'] = "Registration succesful!";
 //                // $_SESSION['username'] = $name;
 //                header('location:home.php');
 //            }
 //         }
 //     }
// $avatar_path = ('images/'.$_FILES['avatar1']['name']);
// $target_dir = "images/";
// $target_file = $target_dir . basename($_FILES["avatar"]["name"]);
// $uploadOk = 1;
// $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// // Check if image file is a actual image or fake image
// if(isset($_POST["submit"])) {
//     $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
//     if($check !== false) {
//         echo "File is an image - " . $check["mime"] . ".";
//         $uploadOk = 1;
//     } else {
//         echo "File is not an image.";
//         $uploadOk = 0;
//     }
// }

// $q = "select * from test where name ='$name'  ";

//  $result = mysqli_query($con ,$q);

// $num = mysqli_num_rows($result);

// if($num==1){
// 	echo "duplicate data";

// }else{
// 	$qy = "insert into test(name,image_1 ) values('$name','$avatar_path')";
// 	mysqli_query($con , $qy);
// 	$_SESSION['username'] = $name;
// 	header('location:home.php');
// }

?>


