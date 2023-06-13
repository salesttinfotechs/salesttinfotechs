<?php
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $subject = $_POST['subject'];
        $message=$_POST['message'];  
       
        $to = "salesttinfotechs@gmail.com";
        $headers[] = 'MIME-Version: 1.0';
        $headers[] = 'Content-type: text/html; charset=iso-8859-1';
        
        $message = '<html><body>';
        $message .= '<table border="1">
        <tr>
          <th>Name</th>
          <th>email</th> 
          <th>phone number</th>
          <th>message</th>
        </tr>
        <tr>
          <td>'.$name.'</td>
          <td>'.$email.'</td>
          <td>'.$phone.'</td>
          <td>'.$message.'</td>
        </tr>
      </table>';
        $response = mail($to, 'New enquiry from tt infotechs website', $message,implode("\r\n",$headers));
      print_r($response); 
    
    echo "<script>alert('Your message successfully sent');
window.location.https://www.ttinfotechs.com/contact.html;
</script>";  
?>