<?php
function displayElectricGuitars($productList, $imgBasePath = 'assets/img/')
{
    $electricGuitars = array_filter($productList, function ($guitar) {
        return isset($guitar['category']) && $guitar['category'] === 'Electric';
    });
    displayGuitarCards($electricGuitars, $imgBasePath);
}
function displayAcousticGuitars($productList, $imgBasePath = 'assets/img/')
{
    $AcousticGuitars = array_filter($productList, function ($guitar) {
        return isset($guitar['category']) && $guitar['category'] === 'Acoustic';
    });
    displayGuitarCards($AcousticGuitars, $imgBasePath);
}
