<?php


if(isset($_POST['contactSubmit']))
{
 $name = htmlspecialchars(stripslashes(trim($_REQUEST['userName'])));
 
    $email = htmlspecialchars(stripslashes(trim($_REQUEST['userEmail'])));
    $phone = htmlspecialchars(stripslashes(trim($_REQUEST['userPhone'])));
    $subject = htmlspecialchars(stripslashes(trim($_REQUEST['subject'])));
    $message = htmlspecialchars(stripslashes(trim($_REQUEST['userMessage'])));
    $to = "";
    $subject = $subject."-".$name;
    $semail="info.saifevetmed@gmail.com";
    $message = '<table width="100%" border="1">
      <tr>
        <td width="18%"><strong>Name</strong></td>
        <td width="1%"><strong>:</strong></td>
        <td width="81%">'.$name.'</td>
      </tr>
      <tr>
        <td><strong>Email</strong></td>
        <td><strong>:</strong></td>
        <td>'.$email.'</td>
      </tr>
      <tr>
        <td><strong>Phone</strong></td>
        <td><strong>:</strong></td>
        <td>'.$phone.'</td>
      </tr>

      <tr>
        <td><strong>Subject</strong></td>
        <td><strong>:</strong></td>
        <td>'.$subject.'</td>
      </tr>
      <tr>
        <td><strong>Message</strong></td>
        <td><strong>:</strong></td>
        <td><pre>'.$message.'</pre></td>
      </tr>
    </table>';

    // Always set content-type when sending HTML email
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

    // More headers
    $headers .= 'From: <'.$semail.'>' . "\r\n";
    $headers .= 'Cc: ' . "\r\n";

    if(mail($to,$subject,$message,$headers))
    {

    header("Location:index.php?msg=submitsuccess");
    }
    else {
      
       header("Location:index.php?msg=submitfailed");
    }
  

}
if(isset($_POST['applyJob']))
{
$name = $_REQUEST['userName'];
$email = $_REQUEST['userEmail'];
$phone = $_REQUEST['userPhone'];
$subject = $_REQUEST['subject'];
$jobPosition = $_REQUEST['jobPosition'];
$to = "mmp@saifevetmed.com";
$subject = $subject."-".$name;
$semail="info.saifevetmed@gmail.com";

if(isset($_FILES['resume']))
  {
    $file=$_FILES['resume']['name'];
    $filetype=$_FILES['resume']['type'];
    $filetemp=$_FILES['resume']['tmp_name'];
    $fileext=end(explode('.',$file));
    $filesize=$_FILES['resume']['size'];

    $uploadError=0;
    if($filesize>2097152)
    {
      $uploadError=1;
    }
    if($fileext=='pdf' || $fileext=='doc' || $fileext=='docx' || $fileext=='PDF')
    {
      $uploadError=0;
    }
    else
    {
      $uploadError=2;
    }
    if($uploadError==0)
    {
      $filename=date("Ymdhsi").$name.'.'.$fileext;
		$filename=str_replace(' ', '', $filename);
      move_uploaded_file($filetemp,"resumes/".$filename);
     
    }
    elseif($uploadError==1)
    {
      echo "Please upload resume less than 2MB";
    }
    elseif($uploadError==2)
    {
      echo "Please upload resume in PDF or Doc format";
    }
  }

$message = '<table width="100%" border="1">
  <tr>
    <td width="18%"><strong>Name</strong></td>
    <td width="1%"><strong>:</strong></td>
    <td width="81%">'.$name.'</td>
  </tr>
  <tr>
    <td><strong>Email</strong></td>
    <td><strong>:</strong></td>
    <td>'.$email.'</td>
  </tr>
  <tr>
    <td><strong>Phone</strong></td>
    <td><strong>:</strong></td>
    <td>'.$phone.'</td>
  </tr>

  <tr>
    <td><strong>Subject</strong></td>
    <td><strong>:</strong></td>
    <td>'.$subject.'</td>
  </tr>
  <tr>
    <td><strong>Position</strong></td>
    <td><strong>:</strong></td>
    <td><pre>'.$jobPosition.'</pre></td>
  </tr>
  <tr>
    <td><strong>Resume</strong></td>
    <td><strong>:</strong></td>
    <td><pre>'.'http://saifevetmed.in/resumes/'.$filename.'</pre></td>
  </tr>
</table>';

              
// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <'.$semail.'>' . "\r\n";
$headers .= 'Cc: rs2uci@gmail.com' . "\r\n";

if(mail($to,$subject,$message,$headers))
{

header("Location:career.php?msg=submitsuccess");
}
else {
  
   header("Location:career.php?msg=submitfailed");
}
}

?>