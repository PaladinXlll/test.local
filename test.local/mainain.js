$(document).ready(function() {
    // Массив для хранения валют
    var sellOptions = ['rub', 'trc-20', 'erc-20', 'btc', 'eth'];
    var buyOptions = ['trc-20', 'erc-20', 'btc', 'eth', 'sber', 'sbp', 'rub', 'cash'];

    // Функция для вычисления номера пары
    function calculatePairNumber() {
        var sellValue = $('#currency-sell').val();
        var buyValue = $('#currency-buy').val();

        // Проверяем, что оба значения выбраны
        if (sellValue && buyValue) {
            // Получаем индексы выбранных значений
            var sellIndex = sellOptions.indexOf(sellValue);
            var buyIndex = buyOptions.indexOf(buyValue);

            // Если оба индекса найдены, вычисляем номер пары
            if (sellIndex !== -1 && buyIndex !== -1) {
                var pairNumber = sellIndex * buyOptions.length + buyIndex + 1;
                $('#pair-number').text('Номер пары: ' + pairNumber);
            }
        } else {
            $('#pair-number').text('Номер пары: --');
        }
    }

    // Отслеживаем изменения в обоих select
    $('#currency-buy, #currency-sell').change(function() {
        calculatePairNumber();  // Обновляем номер пары при каждом изменении
    });
});