<?php
include_once "vendor/autoload.php";
use Symfony\Component\Translation\Loader\JsonFileLoader;
use Symfony\Component\Translation\Translator;
$idioma = "en";
$traductor = new Translator($idioma);
$traductor->addLoader("json", new JsonFileLoader());
$traductor->addResource("json", "idioma_es.json", "es");
$traductor->addResource("json", "idioma_en.json", "en");
$traductor->setFallbackLocales(["es"]); // Si no se encuentra el idioma, utilizamos es por defecto

$saludoTraducido = $traductor->trans("saludo");
echo $saludoTraducido;
