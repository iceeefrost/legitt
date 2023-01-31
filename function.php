<?php 
class Contact{
    private $host="localhost";
    private $user="root";
    private $pass="";
    private $db="contact";
    public $mysqli;
    
    public function __construct() {
        return $this->mysqli=new mysqli($this->host, $this->user, $this->pass, $this->db);
    }
    
    public function contact_us($data){
        $Name=$data['name'];
        $Email=$data['email'];
        $Subject=$data['subject'];
        $Message=$data['message'];
        $q="insert into viewmessage_tb set name='$Name', email='$Email', subject='$Subject', message='$Message'";
       $data= $this->mysqli->query($q);
       if($data==true){
           $body="One message received from askus contact us. details are below..<br> name='$Name', email='$Email', subject='$Subject', message='$Message'";
           return $this->sent_mail("mariellesangalang00@gmail.com", "Message received from Hubbunch", $body);
       }
    }
    
    public function sent_mail($to,$subject,$body){
$mailFromName="AskUs";
$mailFrom="mariellesangalang00@gmail.com";
/////////////////////////////////////////////////////////////
//Mail Header
$mailHeader = 'MIME-Version: 1.0'."\r\n";
$mailHeader .= "From: $mailFromName <$mailFrom>\r\n";
$mailHeader .= "Reply-To: $mailFrom\r\n";
$mailHeader .= "Return-Path: $mailFrom\r\n";
//$mailHeader .= "CC: $mailCC\r\n";
//$mailHeader .= "BCC: $mailBCC\r\n";
$mailHeader .= 'X-Mailer: PHP'.phpversion()."\r\n";
$mailHeader .= 'Content-Type: text/html; charset=utf-8'."\r\n";
/////////////////////////////////////////////////////////////
//Email to Admin(optional)
//if(mail($to, $subject, $body, $mailHeader)){
 //return true;
 //}else{
//return false;
 //}
    }
}


?>