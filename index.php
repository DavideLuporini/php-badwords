<?php
/* 
|Creare una variabile con un paragrafo di testo a vostra scelta.
|Stampare a schermo il paragrafo e la sua lunghezza.
|Una parola da censurare viene passata dall'utente tramite parametro GET.
|Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare. 
*/
$bad_word = $_GET ? $_GET['word'] : '';

$exercise = 'php-badwords';
$text = 'La mia anima è pervasa da una mirabile serenità, simile a queste belle mattinate di maggio che io godo con tutto il cuore. Sono solo e mi rallegro di vivere in questo luogo che sembra esser creato per anime simili alla mia. Sono così felice, mio caro, così immerso nel sentimento della mia tranquilla esistenza che la mia arte ne soffre. Non potrei disegnare nulla ora, neppure un segno potrei tracciare; eppure mai sono stato così gran pittore come in questo momento. Quando l\'amata valle intorno a me si avvolge nei suoi vapori, e l\'alto sole posa sulla mia foresta impenetrabilmente oscura, e solo alcuni raggi si spingono nell\'interno sacrario, io mi stendo nell\'erba alta presso il ruscello che scorre, e più vicino alla terra osservo mille multiformi erbette; allora sento più vicino al mio cuore brulicare tra gli steli il piccolo mondo degli innumerevoli, infiniti vermiciattoli e moscerini, e sento la presenza dell\'Onnipossente che ci ha creati a sua immagine e ci tiene in una eterna gioia. Amico mio, quando dinanzi ai miei occhi si stende il crepuscolo e posa intorno a me il mondo e il cielo tutto nell\' anima mia come la sembianza di donna amata, allora spesso';
$censure = '<span style="color: red">***</span>';
$text_censured = str_replace($bad_word, $censure , $text);

?>
<!DOCTYPE html>
<html lang="it">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title><?php echo $exercise ?></title>
</head>
<body>
    <h1>
    <?php echo strtoupper($exercise) ?>
    </h1>
   <form action="index.php" method="GET">
   <input type="text" placeholder="Scrivi la parola da censurare" name="word">
   <button type="submit">Invia</button>   
   </form>
   <p><?php echo $text ?></p>
   <p>Lunghezza: <?php echo strlen($text) ?></p>
   <p><?php echo $text_censured ?></p>
   <p>Lunghezza totale: <?php echo strlen($text_censured)?></p>
   <p>Numero bad words: <?php echo substr_count($text_censured, '***')?></p>
   <p>Numero lettere senza censure: <?php echo  strlen($text_censured) - substr_count($text_censured, '***') ?></p>



</body>
</html>