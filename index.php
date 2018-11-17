<html>
<?php
/*
 * Questo è un commento. Altri modi per commentare sono i simboli // e #
 * Questo tipo di commenti non ha bisogno degli asterischi (*) all'inizio
 * di ogni riga, ma lo si fa per convenzione. I simboli // e #
 * commentano solo il testo che si trova dopo di essi e fino alla fine della riga;
 * non c'è bisogno di finire il commento con qualche carattere speciale.
 */

/*
 * Prima definiamo una funzione chiamata "plural".
 * Restituisce una "s" se l'argomento passato non è 1.
 */
function plural($number) {
	// L'operatore ternario (!= ? :) è una struttura condizionale 
	// simile a if-else: (condizione ? true : false)
	return ($number != 1 ) ? 's' : '';
}

// Definiamo una variabile chiamata $a_capo che contiene un a capo HTML,
// un carattere di ritorno e uno di nuova riga:
$a_capo = "<br />\r\n";

for($i=99; $i>0; $i--) {
	echo "$i bottle" . plural($i) . " of beer on the wall,$a_capo";
	// Non abbiamo bisogno di ripetere il comando echo per ogni riga:
	echo "$i bottle" . plural($i) . " of beer . $a_capo
	Take one down, pass it around,$a_capo" .
	((($i - 1) != 0) ? $i - 1 : 'no more') .
	' bottle' . plural($i - 1) . " of beer on the wall.$a_capo$a_capo";
	/*
	 * PHP permette di creare stringhe su più righe, finché
	 * trova un punto e virgola (;) che termina l'istruzione.
	 * Un punto (.) concatena insieme più stringhe.
	 * Le variabili, che iniziano con il carattere "$", sono interpretate
	 * anche dentro i doppi apici ("), ma non dentro gli apici singoli (').
	 * Le funzioni, come plural(), non sono interpretate fra gli apici.
	 */
}
echo "Go to the store, $a_capo buy some more, $a_capo 99 bottles of beer on the wall!";
?>
</html>
