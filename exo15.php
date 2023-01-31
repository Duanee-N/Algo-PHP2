<h1>Exercice 15</h1>

<p>En utilisant les ressources de la page http://php.net/manual/fr/book.filter.php, vérifier si une adresse e-mail a le bon format.</p>

<h2>Résultat</h2>

<?php

class Mail
{
    public $_email;
    
    public function __construct($_email)
    {
        $this->_email = $_email;
    }
    public function VerifMail(){
        if(filter_var($this->_email, FILTER_VALIDATE_EMAIL)){
            echo  "L'adresse ".$this->_email." est une adresse e-mail valide. <br>";
        } else{
            echo  "L'adresse ".$this->_email." est une adresse e-mail invalide. <br>";
        }
    }
}
    
    
$mail1=new Mail ("elan@elan-formation.fr");
$mail2=new Mail ("contact@elan");
$mail1->VerifMail();
$mail2->VerifMail();

?>







<!-- // $emails = array(
//     'Test Example <test@example.com>',
//     'test@localhost',
//     'test@localhost.com'
// );

// foreach ($emails as $email) {
//     echo (filter_var($email, FILTER_VALIDATE_EMAIL)) ? 
//         "[+] Email '$email' is valid\n" : 
//         "[-] Email '$email' is NOT valid\n";
// } -->