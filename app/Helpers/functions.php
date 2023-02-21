<?php

function formatToCpf($value)
{
    $cpf = preg_replace('/\D/', '', $value);

    return preg_replace('/(\d{3})(\d{3})(\d{3})(\d{2})/', "\$1.\$2.\$3-\$4", $cpf);
}

function formatToCnpj($value)
{
    $cnpj = preg_replace('/\D/', '', $value);

    return preg_replace('/(\d{2})(\d{3})(\d{3})(\d{4})(\d{2})/', "\$1.\$2.\$3/\$4-\$5", $cnpj);
}

function getOnlyNumbers($value)
{
    return preg_replace("/[^0-9]/", "", $value);
}
