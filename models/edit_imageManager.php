<?php
// $msg = '';
// if($_SERVER['REQUEST_METHOD']=='POST'){
  public function editimg($photo_ticket, $photo){

    $edit3 = $conn->prepare("UPDATE from `livres` SET ")
    $ticketname = $_FILES['photo_ticket']['name'];
    $photoname = $_FILES['photo']['name']

    $target_ticket = 'img/'.$ticketname;
    $target_photo = 'img/'.$photoname;


    $file_extension_photo_ticket = pathinfo($target_ticket, PATHINFO_EXTENSION);
    $file_extension_photo = pathinfo($target_photo, PATHINFO_EXTENSION);
    $file_extension_photo_ticket = strtolower($file_extension_photo_ticket);
    $file_extension_photo = strtolower($file_extension_photo);

    $updateimg->execute();
    return $updateimg;

    // $img = file_get_contents($image);
    // $sql = "insert into images (image) values(?)";
    //
    // $stmt = mysqli_prepare($con,$sql);
    //
    // mysqli_stmt_bind_param($stmt, "s",$img);
    // mysqli_stmt_execute($stmt);

    $check = mysqli_stmt_affected_rows($stmt);
    if($check==1){
        $msg = 'Images Updated to the table';
    }else{
        $msg = 'An error about the images occured' ;
    }
    // mysqli_close($con);
}
?>
