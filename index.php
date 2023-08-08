<?php

//% Espressioni regolari

//$ Delimitatori + preg_quote()
/* $string = ". * + ? ^ $ [ ] { } ( ) | \ / # ~";
$string = preg_quote($string, "/");
echo $string;
// \. \* \+ \? \^ \$ \[ \] \{ \} \( \) \| \\ \/ \# ~ */


//$ Metacaratteri + modificatori + preg_match()

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


//$ Ancore + preg_grep()
//* Es1 con ^
/* $array = ["Ciao Mondo", "Ciao Italia",
"Buongiorno Mondo", "Arrivederci Mondo"];
$results = preg_grep("/^Ciao/", $array);
echo '<pre>';
print_r($results);
echo '</pre>'; */

//* Es2 con $
/* $array = ["Ciao Mondo!", "Ciao Italia.",
"Buongiorno Mondo!", "Arrivederci Mondo"];
$results = preg_grep("/!$/", $array);
echo '<pre>';
print_r($results);
echo '</pre>'; */


//$ Classi + Classi predefinite

//* preg_replace()
/* $string = 'Ciao mondo!';
$pattern = '/mondo/';
$replacement = 'universo';
$replaced_string = preg_replace($pattern, $replacement, $string);
echo $replaced_string;  // Ciao universo!
 */


//* preg_split() base
/* $string = 'Ciao-mondo-universo';
$pattern = '/-/';
$split_string = preg_split($pattern, $string);
print_r($split_string); */
// Array ([0] => 'Ciao' [1] => 'mondo' [2] => 'universo')


//* preg_split() con Limits e Flags
/* $string = 'One, Two, Three, Four, Five';
$pattern = '/, /';
$limit = 3;
$split_string = preg_split($pattern, $string, $limit);
print_r($split_string); */
// Array ([0] => 'One' [1] => 'Two' [2] => 'Three, Four, Five')


//$ Quantificatori + preg_match_all()

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


//$ Gruppi e Riferimento all'indietro
/* $string = 'abc abc abc';
$pattern = '/(abc) \1/';  // \1 si riferisce al primo gruppo
$replacement = '$1-def';  // $1 si riferisce al primo gruppo
echo preg_replace($pattern, $replacement, $string); */
// abc-def abc



//$ Confine di parola
/* $string = 'casa casamata casalinga';
$pattern = '/\bcasa\b/';  // Cerca esattamente la parola 'casa'
echo preg_match($pattern, $string) ? 'Trovato' : 'Non trovato';  // Trovato */



//$ Lookahead e Lookbehind
//* Lookahead positivo
/* $string = 'casa3';
$pattern = '/casa(?=3)/'; // Cerca 'casa' solo se è seguito da '3'
echo preg_match($pattern, $string) ? 'Trovato' : 'Non trovato'; // Trovato */

//* Lookbehind positivo
/* $string = '3casa';
$pattern = '/(?<=3)casa/'; // Cerca 'casa' solo se è preceduto da '3'
echo preg_match($pattern, $string) ? 'Trovato' : 'Non trovato'; // Trovato */

//* Lookahead negativo
/* $string = 'casa3';
$pattern = '/casa(?!3)/'; // Cerca 'casa' solo se NON è seguito da '3'
echo preg_match($pattern, $string) ? 'Trovato' : 'Non trovato'; // Non trovato */

//* Lookbehind negativo
/* $string = '3casa';
$pattern = '/(?<!3)casa/'; // Cerca 'casa' solo se NON è preceduto da '3'
echo preg_match($pattern, $string) ? 'Trovato' : 'Non trovato'; // Non trovato */


//% Esempi di espressioni regolari
/*
$nome = '[A-Z][a-z]+';
$targa = '[A-Z]{2}[0-9]{3}[a-z]{2}';
$data = '\d{2}\/\d{2}\/\d{4}';
$email = '/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/';
$telefono = '/^(\+?\d{1,4})?[-.\s]?\(?\d{1,3}?\)?[-.\s]?\d{1,4}[-.\s]?\d{1,9}$/';
$rgb = '/^#[0-9a-fA-F]{6}$/';
$password = '/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$/';
$indirizzo_ip = '/\b(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\b/';
*/
