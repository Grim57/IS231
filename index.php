<?php


function validateEmail($inputString)
{
    if (!filter_var($inputString, FILTER_VALIDATE_EMAIL)) {
        throw new InvalidArgumentException("Некорректный формат email.");
    }
    
    return "Email корректен.";
}

try {
    echo validateEmail("example@example.com") . "\n";
    
    echo validateEmail("not-an-email") . "\n";   
    
    echo validateEmail("") . "\n";
} catch (InvalidArgumentException $e) {
    echo 'Ошибка: ' . $e->getMessage() . "\n";
}