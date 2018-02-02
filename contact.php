<?php
define('RECIPIENT', 'sales@poly-med.com');
//define('SUBJECT', 'Comment from digitalmarauders.com');
$response = array("errors" => array(), "response" => "error");

if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
  //define fields
  $name = "";
  $email = "";
  $message = "";

  //check name field
  $errorMessages = array();
  if (empty($_POST['name'])) {
    $response['errors'][] = "Please enter your name.";
  } else {
    $name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
  }

  //check email field
  if (empty($_POST['email'])) {
    $response['errors'][] = "Please enter your email.";
  } else if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
    $response['errors'][] = "Please enter a valid email address.";
  } else {
    $email = $_POST['email'];
  }

  //check message field
  if(empty($_POST['message'])) {
    $response['errors'][] = "Please enter a message.";
  } else {
    $message = filter_var($_POST['message'], FILTER_SANITIZE_STRING);
  }

  //get all other messages
  $subject = filter_var($_POST['subject'], FILTER_SANITIZE_STRING);
  $title = filter_var($_POST['title'], FILTER_SANITIZE_STRING);
  $company = filter_var($_POST['company'], FILTER_SANITIZE_STRING);
  $address = filter_var($_POST['address'], FILTER_SANITIZE_STRING);
  $zip = filter_var($_POST['zip'], FILTER_SANITIZE_STRING);
  $city = filter_var($_POST['city'], FILTER_SANITIZE_STRING);
  $country = filter_var($_POST['country'], FILTER_SANITIZE_STRING);
  $telephone = filter_var($_POST['telephone'], FILTER_SANITIZE_STRING);
  $website = filter_var($_POST['website'], FILTER_SANITIZE_STRING);
  $industry = filter_var($_POST['industry'], FILTER_SANITIZE_STRING);
  $howdidyouhear = filter_var($_POST['howdidyouhear'], FILTER_SANITIZE_STRING);
  $combinedMessage = <<<EOT
  <table width="700" style="font-family: Arial, Helvetica, san-serif; font-size: 14px;" cellspacing="10">
  <tr>
    <td colspan="2">
      <h1>$subject</h1>
    </td>
  </tr>
  <tr>
    <td width="150"><strong>Name</strong></td>
    <td>$name</td>
  </tr>
  <tr>
    <td width="150"><strong>Email</strong></td>
    <td>$email</td>
  </tr>
  <tr>
    <td width="150"><strong>Message</strong></td>
    <td>$message</td>
  </tr>
  <tr>
    <td width="150"><strong>Title</strong></td>
    <td>$title</td>
  </tr>
  <tr>
    <td width="150"><strong>Company</strong></td>
    <td>$company</td>
  </tr>
  <tr>
    <td width="150"><strong>Address</strong></td>
    <td>$address</td>
  </tr>
  <tr>
    <td width="150"><strong>Zip</strong></td>
    <td>$zip</td>
  </tr>
  <tr>
    <td width="150"><strong>City</strong></td>
    <td>$city</td>
  </tr>
  <tr>
    <td width="150"><strong>Country</strong></td>
    <td>$country</td>
  </tr>
  <tr>
    <td width="150"><strong>Telephone</strong></td>
    <td>$telephone</td>
  </tr>
  <tr>
    <td width="150"><strong>Website</strong></td>
    <td>$website</td>
  </tr>
  <tr>
    <td width="150"><strong>Industry</strong></td>
    <td>$industry</td>
  </tr>
  <tr>
    <td width="150"><strong>How did you hear about us?</strong></td>
    <td>$howdidyouhear</td>
  </tr>
</table>
EOT;

  //if no errors, send email
  if (count($response['errors']) === 0) {
    $headers = 'From: ' . $email . "\r\n" .
               'Reply-To: ' . $email . "\r\n" .
               'MIME-Version: 1.0' . "\r\n" .
               'Content-type:text/html;charset=UTF-8' . '\r\n' .
               'X-Mailer: PHP/' . phpversion();
    $sent = mail(RECIPIENT, $subject, $combinedMessage, $headers);
    if ($sent) {
      $response["response"] = "success";
    }
  }
}
echo json_encode($response);
?>