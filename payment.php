<?php
  include_once("util/utilities.php");
  session_start();
  $strServerMsg = "";

  if(!isset($_SESSION["user"]))
  {
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

   $(document).ready( function(){ $('#card-form').validationEngine(); } );
     function limpiar()
     {
       $('#name').val('');
       $('#lastName').val('');
       $('#cardNumber').val('');
       $('#cardValidMonth').val('');
       $('#cardValidYear').val('');
       $('#cvc').val('');
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
     <div class="header text-center">
       <h1>Payment</h1>
       <hr>
     </div>
     <div class="form row">
       <div class="col-md-4">

       </div>
       <div class="col-md-4">
         <form action="processpayment.php" method="post" id="card-form">
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
             <input type="number" class="form-control" name="" id="cardValidMonth"
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
             <button type="submit" class="btn btn-success" value="Pay">Pay</button>
             <input type="button" class="btn btn-success" onclick="limpiar()" value="Cancel" />
           </div>
           <br>
         </form>
       </div>
       <div class="col-md-4">
       </div>
     </div>
   </div>
 </body>
 </html>
