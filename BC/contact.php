<?php
/**
 * Created by PhpStorm.
 * User: ELABOUSSI
 * Date: 9/2/2015
 * Time: 20:54
 */
if(isset($_POST["mesform"])) {
    if((isset($_POST['name'])) && (isset($_POST['email'])) && (isset($_POST['message']))) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];
        //
        // Le message
        $message = '
        <html>
        <head><title>Bull-Creation</title></head>
        <body>
        <hr>
        <h3><u>Email :</u> '.$email.'</h3>
        <h3><u>Nom   :</u> '.$name.'</h3>
        <h3><u>Message :<u></h3>
        <h3>'.$message.'</h3>
        <hr>
        </body>
        </html>
        ';
        $headers  = 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
        // Dans le cas où nos lignes comportent plus de 70 caractères, nous les coupons en utilisant wordwrap()
        //$message = wordwrap($message, 70, "\r\n");

        // Envoi du mail
        if(mail('mhamdi.youssef@gmail.com', 'BullCreation Contact Formulaire', $message,$headers))
            echo '<script type="text/javascript">alert("Message a été envoyé avec succès, nous vous répondrons bientôt.")</script>';
        else
            echo '<script type="text/javascript">alert("Désolé, le message ne nous est pas parvenu, il pourrait être un problème de circulation. ou une erreur de côté client.")</script>';
        //liberer variable
        unset($_POST["mesform"]);
    }
    else{
        header("location: index.php");
    }

}
if(isset($_POST["demander"])) {
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $gsm = $_POST["gsm"];
    $fix = $_POST["fix"];
    $email = $_POST["email"];
    $objet = $_POST["objet"];
    $ste = $_POST["societe"];
    $msg = $_POST["message"];
    if (isset($_POST["packs"]))
    {
        $pack = $_POST["packs"];
    }
    $devise='<html>
        <head><title>Bull-Creation</title></head>
        <body>
        <hr>
        <p>
            <h2>Client</h2><h3>Nom: '. $nom . ', Prenom: ' . $prenom .'</h3>
            <h3><u>Information :</u><br>Objet: '. $objet . ', Société: ' . $ste .'</h3>
            <h3>Gsm: '. $gsm . ', Fix: ' . $fix .'</h3>
            <h3>Email: '. $email . ', Message: ' . $msg .'</h3>
        </p>
        <hr>
        <h2> Devise Demandé </h2>
        <h3><u>Pack Choisi est :</u><br> * '.$pack.'</h3>
        ';
    if(isset($_POST["services"]))
    {
        $devise .= '<h3><u>Les Services Choisi Sont :</u></h3>';
        foreach($_POST["services"] as $service)
        {
            $devise .= '<h3>* '. $service .'</h3>';
        }
        $devise .= '<hr></body></html>';
    }

    $headers  = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    if(mail('mhamdi.youssef@gmail.com', 'Demande de devise', $devise,$headers))
        echo '<script type="text/javascript">alert("Vote demande a été envoyé avec succès, nous vous répondrons bientôt.")</script>';
    else
        echo '<script type="text/javascript">alert("Désolé, le demande ne nous est pas parvenu, il pourrait être un problème de circulation. ou une erreur de côté client.")</script>';
    //liberer variable
    unset($_POST["demander"]);

}







