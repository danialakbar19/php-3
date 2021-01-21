<?php
function tukar_besar_kecil($string)
{
    $output = "";

    for ($i = 0; $i < strlen($string); $i++) {
        if ($string[$i] >= 'a' && $string[$i] <= 'z')
            $output[$i] = chr(ord($string[$i]) - 32);

        else if ($string[$i] >= 'A' && $string[$i] <= 'Z')
            $output[$i] = chr(ord($string[$i]) + 32);

        else
            $output[$i] = $string[$i];
    }

    return "$output <br>";
}

// TEST CASES
echo tukar_besar_kecil('Hello World'); // "hELLO wORLD"
echo tukar_besar_kecil('I aM aLAY'); // "i Am Alay"
echo tukar_besar_kecil('My Name is Bond!!'); // "mY nAME IS bOND!!"
echo tukar_besar_kecil('IT sHOULD bE me'); // "it Should Be ME"
echo tukar_besar_kecil('001-A-3-5TrdYW'); // "001-a-3-5tRDyw"

?>
