<?php

$config = [
    'separator' => ' '
];

function fullName($firstname, $lastname, $config)
{
    return "{$firstname}{$config['separator']}{$lastname}";
}

$fullName = function ($firstname, $lastname) use ($config) {
    return "{$firstname}{$config['separator']}{$lastname}";
};

echo fullName('Clement', 'Barbaza', $config);
echo $fullName('Clement', 'Barbaza');
