<select>
    <option>Escolha o Dia</option>

    <?php
    for ($i = 1; $i <= 31; $i++) {
        echo "<option>{$i} Dia</option>"; 
    }
    ?>

</select>

<select>
    <option>Escolha o mês</option>

    <?php
    $meses = [
        1 => "Janeiro",
        2 => "Fevereiro",
        3 => "Março",
        4 => "Abril",
        5 => "Maio",
        6 => "Junho",
        7 => "Julho",
        8 => "Agosto",
        9 => "Setembro",
        10 => "Outubro",
        11 => "Novembro",
        12 => "Dezembro"
    ];

    
    for ($i = 1; $i <= 12; $i++) {
        echo "<option>{$meses[$i]}</option>";
    }
    ?>
</select>

<select>

    <option>Escolha o Ano</option>

    <?php

    for ($i = 2022; $i >= 1900; $i--) {
        echo "<option>{$i} Anos</option>";
    }
    ?>
</select>