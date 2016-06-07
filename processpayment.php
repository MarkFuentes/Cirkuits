<?php
require_once("util/DAO.php");
session_start();
require_once("conekta-php/conekta-php/lib/Conekta.php");
Conekta::setApiKey("key_CXCwvWvrrSbdLEn5Pwzjyg");

$charge = Conekta_Charge::create(array(
'description'=> 'Stogies',
'reference_id'=> '9839-wolf_pack',
'amount'=> 20000,
'currency'=>'MXN',
'card'=> 'tok_test_visa_4242',
'details'=> array(
'name'=> 'Arnulfo Quimare',
'phone'=> '403-342-0642',
'email'=> 'logan@x-men.org',
'customer'=> array(
  'logged_in'=> true,
  'successful_purchases'=> 14,
  'created_at'=> 1379784950,
  'updated_at'=> 1379784950,
  'offline_payments'=> 4,
  'score'=> 9
),
'line_items'=> array(
  array(
    'name'=> 'Box of Cohiba S1s',
    'description'=> 'Imported From Mex.',
    'unit_price'=> 20000,
    'quantity'=> 1,
    'sku'=> 'cohb_s1',
    'category'=> 'food'
  )
),
'billing_address'=> array(
  'street1'=>'77 Mystery Lane',
  'street2'=> 'Suite 124',
  'street3'=> null,
  'city'=> 'Darlington',
  'state'=>'NJ',
  'zip'=> '10192',
  'country'=> 'Mexico',
  'tax_id'=> 'xmn671212drx',
  'company_name'=>'X-Men Inc.',
  'phone'=> '77-777-7777',
  'email'=> 'purshasing@x-men.org'
  )
  )
));

  if($charge->status == "paid")
  {
    $str_reg_card = "UPDATE usuarios SET estatus_usuario = 2 where id_usuario = ".$_SESSION["user"]["id_usuario"];
    //echo $str_reg_card;
    mysqli_query($conn, $str_reg_card);
    $str_get_info = "SELECT * FROM usuarios WHERE id_usuario = ".$_SESSION["user"]["id_usuario"];
    //echo $str_get_info;
    $result = mysqli_query($conn, $str_get_info);
    $row = mysqli_fetch_assoc($result);
    $_SESSION["user"] = $row;
    header("Location:dashboard.php");
  }
 ?>
