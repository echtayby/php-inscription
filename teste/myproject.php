<?php
if(isset($_POST['send'])){
  extract($_POST);
  if(isset($nom) && $nom !="" && isset($prenom) && $prenom!="" && isset($telephone) && $telephone !="" && 
          isset($email) && $email !=""){
       // envoie email
       
$to = "gsqiabiinscription@gmail.com";
$subject = "Vous avez reçu un email de :".$email;

$message = "
<p>Vous avez reçu un message de <strong> ".$email."</strong></p>
<p><strong> Nom</strong>".$nom."</p>
<p><strong> Prenom</strong>".$prenom."</p>
<p><strong> Telephone</strong>".$telephone."</p>
<p><strong> email</strong>".$email."</p>




";
// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: '.$email.'>'. "\r\n";
//envoyer d'email
$send = mail($to,$subject,$message,$headers);}
   //verifictaion de l'envoi
   if($send){
    $info ="message envoye";
   }else{
    $info="message non envoye";
   }
  
  
  }
?>
<!DOCTYPE html>
<html>

<head>
  <title>Formulaire d'inscription</title>
  <style>
    body {
      background-color: #F3FAF9;
      background-repeat: no-repeat;
      background-attachment: fixed;
      background-size: 1400px 900px;

    }

    .formulaire {
      padding: 20px;
      position: absolute;
      top: -20%;
      left: 70%;
      font-style: italic;
      font-size: 15px;
      color: #0e2bd3 width: 700px;
      height: 500px;
      margin-top: 100px;
      margin-left: -300px;
      border-radius: 8px 8px;

      display: flex;
      justify-content: space-between;
      flex-direction: column;
    }

    .title {
      font-style: unset;
      font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
      color: #1E2774;
    }

    .envoyer {
      width: 110px;
      height: 30px
    }

    .bienvenue {
      margin: 10px;
    }

    .photo {
      float: left;
      width: 600px;
      height: 700px;
      margin-right: 20px;


    }

    .envoyer {
      background-color: #fc0505;
    }

    .logo {
      float: left;
      margin-right: 0px;
      width: 100px;
      height: 100px;

    }
  </style>
</head>

<body>


  <img src="Image/logo.jpeg" alt="" class="photo">


  <div class="formulaire">
    <label class="text">
      <h2> Pré-inscription &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        التسجيل المسبق </h2>
    </label><br>

    <form action="" method="post" >
      <label for="nom">Nom :
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
      <input type="text" id="nom" name="nom"
        required>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="text" id="nom" name="nom" lang="ar" required> <label for="nom">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:الإسم العائلي </label> <br><br><br>
      <label for="nom">Prénom
        :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
      <input type="text" id="prenom" name="prenom"
        required>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text"
        id="nom" name="nom" lang="ar" required> <label for="nom"> &nbsp;&nbsp;&nbsp;&nbsp;:لإسم الشخصي
      </label><br><br><br>
      <label for="lieu">Lien de naissance :</label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

      <input type="text" id="lieu" name="lieu"
        required>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text"
        id="nom" name="nom" lang="ar" required> <label
        for="nom">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :مكان
        الإزدياد</label><br><br><br>
      <label for="date_de_naissance">date de naissance
        :</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

      <input type="date" id="date_naissance" name="date_naissance" required>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <label for="nom"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:تاريخ الإزدياد </label><br><br><br><br>



      <label for="nom">Sexe
        :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
      <label for="contactChoice2">Masculin </label>

      <input type="radio" id="contactChoice1" name="contact" value="email">
      <label
        for="contactChoice1">ذكر&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
      <label for="contactChoice2">Féminin </label>
      <input type="radio" id="contactChoice2" name="contact" value="telephone"><label for="contactChoice2">
        :الجنس</label>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label
        for="nom">أنثى </label>
      <br><br>

      <label for="niveau_acces">Niveau d'accès
        :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
      <input type="text" id="niveau_acces" name="niveau_acces" required>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="text" id="niveau_acces" name="niveau_acces" lang="ar" required> <label for="niveau_acces">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:المستوى المطلوب</label> <br><br><br>
      <label for="nom">Téléphone
        :</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="number" id="telephone" name="telephone" required>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <label for="nom"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:الهاتف</label><br><br>

      <label for="nom">Email
        :</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="email" id="email" name="email" required><br><br><br>
      <label
        for="nom">Confirmation-email:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="email" id="email" name="email" required><br><br><br>
      <label for="nom">Voulez-vous prendre un rendez-vous
        ?&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
      <input type="datetime-local" value=" Cliquer içi/إضغط هنا"
        style="background-color:#6DC4F6; border-color:#6DC4F6;"> <label for="nom">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; هل تريد أن تأخد موعد ؟ </label><br><br><br>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" value="Envoyer"
       name="send" class="envoyer">
    </form>


  </div>
  
</body>

</html>