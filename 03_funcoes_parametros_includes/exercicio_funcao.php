<?php

function weekDayInPortuguese($date)
{
    $weekDay = date('l', strtotime($date));

    $arr_days = array(
        'Sunday' => 'Domingo',
        'Monday' => 'Segunda-feira',
        'Tuesday' => 'Terça-feira',
        'Wednesday' => 'Quarta-feira',
        'Thursday' => 'Quinta-feir',
        'Friday' => 'Sexta-feira',
        'Saturday' => 'Sábado'
    );
    return date('d/m/Y', strtotime($date)) . ' - ' . $arr_days[$weekDay];
}

echo weekDayInPortuguese('2023-07-25');