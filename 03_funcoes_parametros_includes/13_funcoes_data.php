<?php

echo time() . '<br>';

echo date('d/m/Y H:i:s') . '<br>';


$data = '2023-07-25';

echo date('d/m/Y', strtotime($data));