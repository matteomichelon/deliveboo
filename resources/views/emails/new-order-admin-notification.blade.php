<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Email for Admin</title>
</head>
<body>
    
    <h1>Salve Ristoratore</h1>

    <h2>Ecco i dati riepilogo ordine:</h2>

    <ul>

        <li>Mail: {{ $order['email'] }}</li>
        <li>Nome: {{ $order['name'] }}</li>
        <li>Cognome: {{ $order['surname'] }}</li>
        <li>Data Ordine: {{ $order['date'] }}</li>
        <li>Prezzo totale: {{ $order['price'] }}</li>
        <li>Codice Ordine: {{ $order['code'] }}</li>
        <li>Note per il rider: {{ $order['notes'] }}</li>
        
    </ul>
   

</body>
</html>