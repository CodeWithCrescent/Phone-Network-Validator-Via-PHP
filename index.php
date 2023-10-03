<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>

<body>
    <div class="row col-4 offset-4">
        <form class="row g-3 my-5" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
            <h3 class="text-center">Validate Network</h3>
            <div class="col-12">
                <label for="phone" class="form-label">Phone Number</label>
                <input class="form-control" type="tel" id="phone" name="phone" placeholder="Enter your phone number">
            </div>
            <div class="col-12">
                <button class="btn btn-primary" type="submit">Check</button>
            </div>
        </form>
        <?php

        function validate($number)
        {
            $number = preg_replace('/[^0-9]/', '', $number);
            if (strpos($number, '255') === 0) {
                $number = str_replace('255', '0', $number);
            }
            if (strlen($number) != 10) {
                $network = 'invalid!';
            } else {
                if (strpos($number, '075') === 0 || strpos($number, '076') === 0 || strpos($number, '074') === 0) {
                    $network = 'Vodacom';
                } elseif (strpos($number, '078') === 0 || strpos($number, '079') === 0 || strpos($number, '068') === 0 || strpos($number, '069') === 0) {
                    $network = 'Airtel';
                } elseif (strpos($number, '065') === 0 || strpos($number, '067') === 0 || strpos($number, '071') === 0) {
                    $network = 'Tigo';
                } elseif (strpos($number, '062') === 0) {
                    $network = 'Halotel';
                } elseif (strpos($number, '073') === 0) {
                    $network = 'TTCL';
                } elseif (strpos($number, '077') === 0) {
                    $network = 'Zantel';
                } else {
                    $network = 'Undefined!';
                }
            }
            echo    '
            <div class="alert alert-primary" role="alert">
                Your phone number ' . $number . ' is ' . $network . '
            </div>
            ';
            exit;
        }

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $number = $_POST['phone'];
            validate($number);
        }
        ?>
    </div>
</body>

</html>

FUNCTION validate(number)
    number = RemoveNonDigits(number)

    IF numberStartsWith255(number)
        number = Replace255With0(number)

    IF numberIsValidLengthOf10Digits(number)
        network = DetermineNetworkOperator(number)
    ELSE
        network = 'Invalid'

    OUTPUT 'Your phone number ' + number + ' is ' + network

IF FormIsSubmittedWithPostMethod()
    number = GetnumberFromForm()
    Call validate(number)
