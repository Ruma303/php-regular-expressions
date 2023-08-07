<?php

//% Espressioni regolari

//$ Utilizzo delle Espressioni Regolari
/* $string = "Benvenuto al corso di PHP!";
if (preg_match("/PHP/", $string)) {
    echo "La parola 'PHP' è stata trovata nel testo."; // OK
} else {
    echo "La parola 'PHP' non è stata trovata nel testo.";
} */

//$ Esempi di espressioni regolari
/*
$nome = '[A-Z][a-z]+';
$targa = '[A-Z]{2}[0-9]{3}[a-z]{2}';
$data = '\d{2}\/\d{2}\/\d{4}';
$email = '/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/';
$telefono = '/^(\+?\d{1,4})?[-.\s]?\(?\d{1,3}?\)?[-.\s]?\d{1,4}[-.\s]?\d{1,9}$/';
$rgb = '/^#[0-9a-fA-F]{6}$/';
$password = '/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$/';
$indirizzo_ip = '/\b(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\b/'; */


//% preg_match()

//* Esempio solo con $matches
/* $subject = "Hello, World!";
$pattern = '/world/i'; // Il flag "i" rende la ricerca case-insensitive
preg_match($pattern, $subject, $matches);
print_r($matches); */

//* Esempio con $flags
/* $subject = "Hello, World!";
$pattern = '/world/i';
preg_match($pattern, $subject, $matches, PREG_OFFSET_CAPTURE);
echo '<pre>';
print_r($matches);
echo '</pre>'; */

//* Esempio con $offset
/*  $subject = "Hello, World! Hello again!";
$pattern = '/hello/i';
preg_match($pattern, $subject, $matches, 0, 14);
echo '<pre>';
print_r($matches);
echo '</pre>'; */


//% preg_match_all()

/* $personal_IP = '192.168.1.1';
$pattern = '/[0-9]{1,3}/';
//$pattern = '/[0-9]{1,3}.[0-9]{1,3}.[0-9]{1,3}.[0-9]{1,3}/';
preg_match($pattern, $personal_IP, $r);
var_dump($r); */

/* $personal_IP = '192.168.1.1';
$pattern = '/[0-9]{1,3}/';
preg_match_all($pattern, $personal_IP, $r);
echo '<pre>';
print_r($r);
echo '</pre>'; */