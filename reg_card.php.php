<?php
include_once("util/utilities.php");
require_once("conekta-php/conekta-php/lib/Conekta.php");
Conekta::setApiKey("key_CXCwvWvrrSbdLEn5Pwzjyg");
session_start();
$strServerMsg = "";

if(isset($_SESSION["user"]))
{
  /*if(isset($_POST["name"]))
  {
    $name       = strip_tags(filter_var($_POST["name"], FILTER_SANITIZE_STRING));
    $lstName    = strip_tags(filter_var($_POST["lastName"], FILTER_SANITIZE_STRING));
    $cardNumber = strip_tags(filter_var($_POST["cardNumber"], FILTER_SANITIZE_STRING));
    $cardMonth  = strip_tags(filter_var($_POST["cardValidMonth"], FILTER_SANITIZE_NUMBER_INT));
    $cardYear   = strip_tags(filter_var($_POST["cardValidYear"], FILTER_SANITIZE_NUMBER_INT));
    $cvc        = strip_tags(filter_var($_POST["cvc"], FILTER_SANITIZE_NUMBER_INT));

    $strServerMsg .= $name;
    $strServerMsg .= "|";
    $strServerMsg .= $lstName;
    $strServerMsg .= "|";
    $strServerMsg .= $cardNumber;
    $strServerMsg .= "|";
    $strServerMsg .= $cardMonth;
    $strServerMsg .= "|";
    $strServerMsg .= $cardYear;
    $strServerMsg .= "|";
    $strServerMsg .= $cvc;
    $strServerMsg .= "|";

    write_console($strServerMsg);

    if(check_card_number($cardNumber) <= 0)
    {
      insert_tarjeta($name, $lstName, $cardNumber, $cardMonth, $cardYear, $cvc);
      echo '<script>alert("Tarjeta registrada con exito");</script>';
      session_start();
      $_SESSION["active_card"] = 1;
    }
    else {
      echo '<script>alert("Ya hay una tarjeta registrada con ese numero")</script>';
    }
  }*/
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

}
else {
  header("Location:login.php");
}

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Payment</title>
  <link rel="stylesheet" href="css/bootstrap.css"  />
  <link rel="stylesheet" href="css/master.css" />
  <link rel="stylesheet" href="css/validationEngine.jquery.css"  />
  <script src="js/sanitizer.js"></script>
  <script src="js/jquery-1.12.3.min.js"></script>
  <script type="text/javascript" src="https://conektaapi.s3.amazonaws.com/v0.5.0/js/conekta.js"></script>
  <script src="js/jquery.validationEngine-es.js"></script>
  <script src="js/jquery.validationEngine.js"></script>
  <script>

  // Conekta Public Key
  Conekta.setPublishableKey('key_FxXdQxHd4Fm4vMhHHUsfYeA');

  $(document).ready( function(){ $('#regpayment_form').validationEngine(); } );
    function salir()
    {
      window.location.href = "dashboard.php";
    }
    $(function () {
      $("#card-form").submit(function(event) {
        var $form = $(this);

        // Previene hacer submit más de una vez
        $form.find("button").prop("disabled", true);
        Conekta.token.create($form, conektaSuccessResponseHandler, conektaErrorResponseHandler);

    // Previene que la información de la forma sea enviada al servidor
        return false;
      });
    });
    var conektaSuccessResponseHandler = function(token) {
      var $form = $("#card-form");

      /* Inserta el token_id en la forma para que se envíe al servidor */
      $form.append($("<input type='hidden' name='conektaTokenId'>").val(token.id));

      /* and submit */
      $form.get(0).submit();
    };
    var conektaErrorResponseHandler = function(response) {
    var $form = $("#card-form");

    /* Muestra los errores en la forma */
    $form.find(".card-errors").text(response.message);
    $form.find("button").prop("disabled", false);
  };
  </script>
</head>
<body>
  <div class="container container-fluid">
    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <div class="navbar-header">
          <a href="dashboard.php" class="navbar-brand">
            <img src="img/logo2.png" alt="Cikuits Logo" />
          </a>
        </div>
        <div class="navbar-right">
          <ul class="nav navbar-nav ">
            <li><a href="infosubscription.php">Subscription</a></li>
            <li><a href="payment.php">Payment</a></li>
            <li><a href="exit.php"><span class="label label-danger">Exit</span></a></li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="" id="userSession">
      <label for="">
        <h3>
          <?php echo '<a href="infouser.php?user='.base64_encode($_SESSION["user"]["nombre_usuario"]).'">'; ?><img src="img/avatars/person-flat.png" alt="avatar.png" class="img img-rounded" width="100px" /></a>
          <?php echo '<a href="infouser.php?user='.base64_encode($_SESSION["user"]["nombre_usuario"]).'" class="label label-primary">'; ?><span id="userName"><?php  echo $_SESSION["user"] ?></span></a>
        </h3>
    </label>
    </div>
    <br>
    <div class="contenidoPayment">
      <div class="col-md-4"></div>
      <div class="col-md-4 text-center" id="paymentContent">
        <h3>Payment</h3>
        <form action="payment.php" method="post" id="card-form">
          <span class="card-errors"></span>
          <div class="form form-group">
            <input type="text" class="form-control"
             data-conekta="card[name]"
             data-validation-engine="validate[required, custom[onlyLetterSp]]"
             data-errormessage-value-missing="Name is required"
             data-errormessage-custom-error="Invalid, let me give you a hint: Andrew"
             name="name" id="name" placeholder="Name"/>
          </div>
          <div class="form form-group">
            <input type="text" class="form-control" name="lastName" id="lastName"
             data-validation-engine="validate[required, custom[onlyLetterSp]]"
             data-errormessage-value-missing="Last name is required"
             data-errormessage-custom-error="Invalid, let me give you a hint: Garfield"
             placeholder="Last name" />
          </div>
          <div class="form form-group">
            <input type="text" class="form-control" name="cardNumber" id="cardNumber"
            data-conekta="card[number]"
            data-validation-engine="validate[required, custom[number]]"
            data-errormessage-value-missing="Card number is required"
            data-errormessage-custom-error="Invalid, let me give you a hint: 5504909923086138"
            placeholder="Card number" />
          </div>
          <div class="form form-group">
            <input type="number" class="form-control" id="cardValidMonth"
            data-conekta="card[exp_month]"
            data-validation-engine="validate[required, custom[number]]"
            data-errormessage-value-missing="Month is required"
            data-errormessage-custom-error="Invalid, let me give you a hint: 01"
             name="cardValidMonth" placeholder="MM" />
            <input type="number" class="form-control" id="cardValidYear"
            data-conekta="card[exp_year]"
            data-validation-engine="validate[required, custom[number]]"
            data-errormessage-value-missing="Year is required"
            data-errormessage-custom-error="Invalid, let me give you a hint: 20"
            name="cardValidYear" placeholder="YY" />
          </div>
          <div class="form form-group">
            <input type="text" class="form-control" name="cvc" id="cvc"
             data-conekta="card[cvc]"
             data-validation-engine="validate[required, custom[number], length[0,2]]"
             data-errormessage-value-missing="cvc is required"
             data-errormessage-custom-error="Invalid, let me give you a hint: 000"
             placeholder="cvc" />
          </div>
          <div class="btn-group btn-group-lg" role="group">
            <input type="submit" class="btn btn-success" value="Pay" />
            <input type="button" class="btn btn-success" onclick="salir()" value="Back" />
          </div>
          <br>
        </form>
    </div>
    <div class="col-md-4"></div>
  </div>
</body>
</html>
