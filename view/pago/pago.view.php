<!DOCTYPE html>

<html lang="en">

<head>
    <?php include 'mod/includes.php'; ?>
    <title>Saltarin</title>
    <meta charset = "utf-8">
    
    <link rel="stylesheet" href="css/pago/pago.css">
</head>
<body>
    <?php include 'mod/nav.php'; ?>
    <br>
    <br>
    <div class="container">
        <div class="col-md-12">
            <div class="creditCardForm">
            <div class="heading">
                <h1>Pago</h1>
            </div>
            <div class="payment">
                <form id="regiration_form" novalidate action="view/agregarCasa/action.php"  method="post">
                    <div class="form-group owner">
                        <label for="owner">Nombre de titular</label>
                        <input type="text" class="form-control" id="owner">
                    </div>
                    <div class="form-group" id="card-number-field">
                        <label for="cardNumber">Numero de tarjeta</label>
                        <input type="text" class="form-control" name="data[titular]" id="cardNumber">
                    </div>
                    <div class="form-group CVV">
                        <label for="cvv">CVV</label>
                        <input type="text" class="form-control" name="data[cvv]" id="cvv">
                    </div>
                    
                    <div class="form-group" id="expiration-date">
                        <label>Vencimiento</label>
                        <select name="data[mes]">
                            <option value="01">Enero</option>
                            <option value="02">Febrero </option>
                            <option value="03">Marzo</option>
                            <option value="04">Abril</option>
                            <option value="05">Mayo</option>
                            <option value="06">Junio</option>
                            <option value="07">Julio</option>
                            <option value="08">Augusto</option>
                            <option value="09">Septiembre</option>
                            <option value="10">Octubre</option>
                            <option value="11">Noviembre</option>
                            <option value="12">Diciembre</option>
                        </select>
                        <select name="data[ano]">
                            <option value="18"> 2018</option>
                            <option value="19"> 2019</option>
                            <option value="20"> 2020</option>
                            <option value="21"> 2021</option>
                            <option value="22"> 2022</option>
                            <option value="23"> 2023</option>
                        </select>
                    </div>
                    <div class="form-group" id="credit_cards">
                        <img src="img/visa.jpg" id="visa">
                        <img src="img/mastercard.jpg" id="mastercard">
                        <img src="img/amex.jpg" id="amex">
                    </div>
                    <div class="form-group" id="pay-now">
                        <button type="submit" class="btn btn-default" id="submit_data">Pagar</button>
                    </div>
                </form>
                
            </div>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
            <script src="script/pago/jquery.payform.min.js" charset="utf-8"></script>
            <script src="script/pago/script.js"></script>
            
        </div>
        </div>
    </div>
    
    
</body>
</html>
