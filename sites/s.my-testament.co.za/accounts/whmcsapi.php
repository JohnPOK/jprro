<?php
class WHMCSAPI {
  private $username;
  private $password;
  private $whmcs_url;
  public  $response;

  function __construct(){
    $this->username = "zgrqrBb9V6XXjV7zzOAx8XRbKAUUyWcu";
    $this->password = "gTyImEaF8eiKz9Eq0fimDg8Jzp4W0TS6";
    $this->whmcs_url = "https://accounts.my-testament.co.za/accounts/includes/api.php";
  }

  function sendwhmcsemail($userid, $messagename){
    $query = http_build_query(
      array(
        'action' => 'SendEmail',
        'username' => $this->username,
        'password' => $this->password,
        'messagename' => $messagename,
        'id' => $userid,
        'responsetype' => 'json'
      )
    );
    $this-> execute($this->channel(), $query);
  }

  function channel(){
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $this->whmcs_url);
    curl_setopt($ch, CURLOPT_POST, 1);
    return $ch;
  }

  function execute($ch, $query){
    curl_setopt($ch, CURLOPT_POSTFIELDS, $query);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    debuglog("executing:".$query);
    $this->response = curl_exec($ch);
    debuglog("1111".$this->response);
    curl_close($ch);
  }

  function ensure_active(){
    if ($this->active($_SESSION["id"]) == false){
        $this->autoauth_cart();
    }
  }

  function freetrial($client_id){
    $query = http_build_query(
      array(
        'action' => 'AddOrder',
        'username' => $this->username,
        'password' => $this->password,
        'clientid' => $client_id,
        'paymentmethod' => 'paypal',
        'pid' => array(2) ,
        'promocode' => 'freetrial',
        'promooverride' => true,
        'responsetype' => 'json'
      )
    );
    $this-> execute($this->channel(), $query);
    $data = json_decode($this->response);
  }

  function voucher($client_id, $voucher){
    $query = http_build_query(
      array(
        'action' => 'AddOrder',
        'username' => $this->username,
        'password' => $this->password,
        'clientid' => $client_id,
        'paymentmethod' => 'paypal',
        'pid' => array(2) ,
        'promocode' => $voucher,
        'promooverride' => true,
        'responsetype' => 'json'
      )
    );
    $this-> execute($this->channel(), $query);
    $data = json_decode($this->response);
  }

  function autoauth_account(){
    $this->autoauth('clientarea.php?action=details');
  }

  function autoauth_support(){
    $this->autoauth('submitticket.php?step=2&deptid=1');
  }

  function autoauth_cart(){
    $this->autoauth('cart.php');
  }

  function autoauth($goto='cart.php?a=add&pid=1'){
    $whmcsurl = "https://accounts.my-testament.co.za/accounts/dologin.php";
    $autoauthkey = "nnvkjadfbnflghdalfglkadhfgadhlkfhkladbbvdjfl";

    $timestamp = time();
    $this->detailsbyid($_SESSION['id']);
    $data = json_decode($this->response);
    $email = $data->{"email"};
    $hash = sha1($email . $timestamp . $autoauthkey);

    $url = $whmcsurl . "?email=$email&timestamp=$timestamp&hash=$hash&goto=" . urlencode($goto);
    header("Location: $url");
  }

  function sso($destination = 'clientarea:services'){
    $query = http_build_query(
      array(
        'action' => 'CreateSsoToken',
        'username' => $this->username,
        'password' => $this->password,
        'client_id' => $_SESSION['id'],
        'destination' => 'clientarea:services',
        'responsetype' => 'json'
      )
    );
    $this-> execute($this->channel(), $query);
    $data = json_decode($this->response);
    echo "[-[".print_r($data)."]-]";
    $auth = $data{'auth_token'};
    $url = $data{'redirect_url'};
    echo "auth[".$auth."][url{".$url."}]";
    //header('Authorization: Bearer '.$auth);
    //header('Location: '.$url);
  }

  function register(
    $firstname,
    $lastname,
    $email,
    $address1,
    $city,
    $state,
    $postcode,
    $country,
    $phonenumber,
    $password2,
    $securephrase){
    $query = http_build_query(
      array(
        'action' => 'AddClient',
        'username' => $this->username,
        'password' => $this->password,
        'firstname' => $firstname,
        'lastname' => $lastname,
        'email' => $email,
        'address1' => $address1,
        'city' => $city,
        'state' => $state,
        'postcode' => $postcode,
        'country' => $country,
        'phonenumber' => $phonenumber,
        'password2' => $password2,
        'securityqid' => 1,
        'securityqans' => $securephrase,
        'responsetype' => 'json'
      )
    );
    $this-> execute($this->channel(), $query);
  }

  function active($clientid){
    $this->products($clientid);
    debuglog("PRODUCTS:".$this->response);

    $data = json_decode($this->response);
    if ($data->{'result'} == 'error') {
      return false;
    }

    if ($data->{'products'} == null) {
      return false;
    }

    foreach ($data->{'products'}->{'product'} as $product){
      if (($product->{'status'} == 'Active') || ($product->{'status'} == 'Pending')){
        return true;
      }
    }
    return false;
  }

  function products($clientid){
    $query = http_build_query(
      array(
        'action' => 'GetClientsProducts',
        'username' => $this->username,
        'password' => $this->password,
        'clientid' => $clientid,
        'responsetype' => 'json',
      )
    );
    $this-> execute($this->channel(), $query);
  }

  function details($email){
    $query = http_build_query(
      array(
        'action' => 'GetClientsDetails',
        'username' => $this->username,
        'password' => $this->password,
        'email' => $email,
        'responsetype' => 'json',
      )
    );
    $this-> execute($this->channel(), $query);
  }

  function detailsbyid($id){
    $query = http_build_query(
      array(
        'action' => 'GetClientsDetails',
        'username' => $this->username,
        'password' => $this->password,
	'clientid' => $id,
        'responsetype' => 'json',
      )
    );
    $this-> execute($this->channel(), $query);
  }

  function update($clientid, $password2){
    $query = http_build_query(
      array(
        'action' => 'UpdateClient',
        'username' => $this->username,
        'password' => $this->password,
        'clientid' => $clientid,
        'password2' => $password2,
        'responsetype' => 'json',
      )
    );
    $this-> execute($this->channel(), $query);
  }

  function validate($email, $password2){
    $query = http_build_query(
      array(
        'action' => 'ValidateLogin',
        'username' => $this->username,
        'password' => $this->password,
        'email' => $email,
        'password2' => $password2,
        'responsetype' => 'json',
      )
    );
    $this-> execute($this->channel(), $query);
  }
}
?>
