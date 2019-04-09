<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Konvertor valuta</title>
    <style>
        body {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin: 20px 10px;
        }
        
        form {
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        
        input {
            width: 300px;
            margin: 5px;
        }
        select {
            width: 145px;
            margin: 5px;
        }
        
    </style>
</head>
<body>
   
   <form action="index.php" method="post">
        <div>
            <input type="number" name="amount" value="unesi vrednost" required> 
        </div>
        <div>
            <select name="currency1" id="from">
              <option value="">Iz valute</option>
               <option value="rsd">RSD - Srpski dinar</option>
               <option value="eur">EUR - Evro</option>
               <option value="usd">USD - Americki dolar</option>
               <option value="chf">CHF - Svajcarski franak</option>
            </select>
             <select name="currency2" id="to">
              <option value="">U valutu</option>
               <option value="rsd">RSD - Srpski dinar</option>
               <option value="eur">EUR - Evro</option>
               <option value="usd">USD - Americki dolar</option>
               <option value="chf">CHF - Svajcarski franak</option>
            </select>
        </div>
        <div>
           <input type="submit" name="submit" value="Convert">
       </div>
   </form>

<?php
    
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
       $amount = $_POST['amount'];
        $cur1 = $_POST['currency1'];
        $cur2 = $_POST['currency2']; 
    
        $currencies = [
            'eur' => 1,
            'rsd' => 118.0172,
            'usd' => 1.133,
            'chf' => 1.1328
        ];
        
        $rezultat = round(($amount/$currencies[$cur1])*$currencies[$cur2],2);
       
        echo "<h3>".$rezultat."</h3>";
    }
?>
    
</body>
</html>