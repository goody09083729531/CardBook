<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CardBook Checkout</title>
    <link rel="stylesheet" href="/GOTV and DSTV stuff/paymentcheckoutforgotv.css">
</head>
<body>
    <div class="container">
        <form action="">
        <h1>CardBook Checkout</h1>
        <div class="row">
            <div class="col">
                <div class="inputBox" style="padding-bottom: 53px;">
                    <span>Provider: </span>
                    <select id="multichoiceselect" onchange="myFunction()">
                        <option value="1">Select Decoder Type..</option>
                        <option value="2">GOTV</option>
                        <option value="3">DSTV</option>
                    </select>
                </div>
                <div id="inputBox" class="inputBox" style="padding-bottom: 150px;">
                    <span>Package: </span>
                    <select id="mySelect"></select>
                </div>
            </div>
        </div>
        <p style="padding-bottom: 10px; font-weight: 900; font-family: var(--Abel);" id="demo"></p>
        <input onclick="secondFunction()" type="button" value="Proceed to Payment" class="submit-btn">
        <input onclick="window.location.href='/index.php'" type="button" value="Back to Home" class="home-btn">
        </form>
    </div>

    <script src="/GOTV and DSTV stuff/paymentcheckoutforgotv.js"></script>
</body>
</html>