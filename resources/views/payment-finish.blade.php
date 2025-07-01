<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Order Details</title>
    <style>
        body,
        html {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            text-align: center;
        }
    </style>
</head>

<body>
    @if ($transaction)
        <div class="container">
            <h1>Payment Detail</h1>
            <div>
                <h2>Status Order :</h2>
                <p>{{ $transaction->status }}</p>
            </div>
            <div>
                <h3>Order ID :</h3>
                <p>{{ $transaction->transaction_code }}</p>
            </div>
        </div>
    @else
        <div class="container">
            <h1>Invalid Order</h1>
        </div>
    @endif
</body>

</html>
