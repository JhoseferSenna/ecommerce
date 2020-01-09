<?php

namespace Hcode;

use Rain\Tpl;
use \PHPMailer;

class Mailer
{
  const USERNAME = "ecommerce.projeto.email@gmail.com";
  const PASSWORD = "projetophp7";
  const NAME_FROM = "Ecommerce";
  private $mail;
  public function __construct($toAddress, $toName, $subject, $tplName, $data = array())
  {

    // config
    $config = array(
      "tpl_dir"       => $_SERVER["DOCUMENT_ROOT"] . "/views/email/",
      "cache_dir"     => $_SERVER["DOCUMENT_ROOT"] . "/views/cache/",
      "debug"         => false // set to false to improve the speed
    );

    Tpl::configure($config);

    // create the Tpl object
    $tpl = new Tpl;

    foreach ($data as $key => $value) {
      $tpl->assign($key, $value);
    }
    $html = $tpl->draw($tplName, true);
    $this->mail = new \PHPMailer;
    $this->mail->isSMTP();
    $this->mail->SMTPDebug = 2;
    $this->mail->Debugoutput = 'html';
    $this->mail->Host = 'smtp.gmail.com';
    $this->mail->Port = 587;
    $this->mail->SMTPSecure = "tls";
    $this->mail->SMTPAuth = true;
    $this->mail->Username = Mailer::USERNAME;
    $this->mail->Password = Mailer::PASSWORD;
    $this->mail->setFrom(Mailer::USERNAME, Mailer::NAME_FROM);
    $this->mail->addAddress($toAddress, $toName);
    $this->mail->Subject = $subject;
    $this->mail->msgHTML($html);
    $this->mail->AltBody = "This is a plain-text message body";
  }
  public function send()
  {
    return $this->mail->send();
  }
}
