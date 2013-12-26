<?php
/**
 * This class provides methods to handle emailing
 *
 * @author Open Dynamics <info@o-dyn.de>
 * @name emailer
 * @version 0.4.8
 * @package Collabtive
 * @link http://www.o-dyn.de
 * @license http://opensource.org/licenses/gpl-license.php GNU General Public License v3 or later
 */
class gmail
{
  /*  private $from;
    private $mailsettings;

    function __construct($settings)
    {
        $this->mailsettings = $settings;
    }


    /**
     * Send an email to a member
     *
     * @param string $to Recipient's email address
     * @param string $subject Subjectline of the mail
     * @param string $text Textbody of the mail, HTML allowed
     * @return bool
     */
    public function send_mail($to, $subject, $text, $name)
    {
			//error_reporting(E_ALL);
	error_reporting(E_STRICT);

	date_default_timezone_set('America/Toronto');
//echo $to;die();
	require_once('../PHPMailer_5.2.0/class.phpmailer.php');
	//include("class.smtp.php"); // optional, gets called from within class.phpmailer.php if not already loaded

	$mail             = new PHPMailer();
	$body 		=$text;
	//$body             = file_get_contents('contents.html');
	//$body             = eregi_replace("[\]",'',$body);

	$mail->IsSMTP(); // telling the class to use SMTP
	//$mail->Host       = "mail.yourdomain.com"; // SMTP server
	$mail->SMTPDebug  = 2;                     // enables SMTP debug information (for testing)
		                                   // 1 = errors and messages
		                                   // 2 = messages only
	$mail->SMTPAuth   = true;                  // enable SMTP authentication
	$mail->SMTPSecure = "ssl";                 // sets the prefix to the servier
	$mail->Host       = "smtp.gmail.com";      // sets GMAIL as the SMTP server
	$mail->Port       = 465;                   // set the SMTP port for the GMAIL server
	$mail->Username   = "kuspms@gmail.com";  // GMAIL username
	$mail->Password   = "kuspms1234";            // GMAIL password

	$mail->SetFrom($to, 'KU-SPMS');

	$mail->AddReplyTo($to,'KU-SPMS');

	$mail->Subject    = $subject;

	//$mail->AltBody    = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test

	$mail->MsgHTML($body);

	$address = $to;
	$mail->AddAddress($address, $name);

	//$mail->AddAttachment("images/phpmailer.gif");      // attachment
	//$mail->AddAttachment("images/phpmailer_mini.gif"); // attachment

		if(!$mail->Send()) {
		  echo "Mailer Error: " . $mail->ErrorInfo;
		} else {
		  return true;
		}
	}
}

?>
