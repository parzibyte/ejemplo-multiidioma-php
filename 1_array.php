<?php
include_once "vendor/autoload.php";
use Symfony\Component\Translation\Loader\ArrayLoader;
use Symfony\Component\Translation\Translator;
$idioma = "en";
$traductor = new Translator($idioma);
$traductor->addLoader("array", new ArrayLoader());
$traductor->addResource("array", [
    "saludo" => "Hola, mundo",
], "es");

$traductor->addResource("array", [
    "saludo" => "Hello world!",
], "en");
$traductor->setFallbackLocales(["es"]); // Si no se encuentra el idioma, utilizamos es por defecto

$saludoTraducido = $traductor->trans("saludo");
echo $saludoTraducido;
