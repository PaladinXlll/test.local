<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TEST</title>
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <script src="JQuery v3.7.1.js"></script>
    <script src="mainain.js"></script>
</head>
<body>
    
    <div style="padding:50px;background-color:#F5F5F7;width:1200px;height:100%;min-height:830px;margin-left:auto;margin-right:auto;margin-top:50px;border-radius:20px;text-align:center;box-shadow: 0px 0px 21px #9c9c9c;">

    <select id="currency-sell" class="currency" name="currency-sell">
        <option value="" disabled selected>--</option>
        <option value="rub" class="select-option-sell">Нал. RUB</option>
        <option value="trc-20" class="select-option-sell usdt_sell">USDT TRC-20</option>
        <option value="erc-20" class="select-option-sell usdt_sell">USDT ERC-20</option>
        <option value="btc" class="select-option-sell">Bitcoin</option>
        <option value="eth" class="select-option-sell">Ethereum</option>
    </select>

    <select id="currency-buy" class="currency" name="currency-buy">
        <option value="" disabled selected>--</option>
        <option value="trc-20" class="select-option-buy usdt_buy">USDT TRC-20</option>
        <option value="erc-20" class="select-option-buy usdt_buy">USDT ERC-20</option>
        <option value="btc" class="select-option-buy">Bitcoin</option>
        <option value="eth" class="select-option-buy">Ethereum</option>
        <option value="sber" class="select-option-buy">Сбербанк</option>
        <option value="sbp" class="select-option-buy">СБП</option>
        <option value="rub" class="select-option-buy">Нал. RUB</option>
        <option value="cash" class="select-option-buy">Наличные</option>
    </select>

    <p id="pair-number">Номер пары: </p>

    </div>

    
</body>
</html>