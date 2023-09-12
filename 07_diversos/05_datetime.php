<?php

$date = new DateTime();
$date2 = new DateTime('2023-01-01');
$date->setTimezone(new DateTimeZone('America/Sao_Paulo'));

$date->add(DateInterval::createFromDateString('2 days'));
$date->sub(DateInterval::createFromDateString('2 days'));

$diff = $date->diff($date2);

echo $date->format('d/m/Y H:i:s') . PHP_EOL;
echo $diff->format('%a dias');