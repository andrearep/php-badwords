
    <?php 
$paragraph = "Nel mezzo del cammin di nostra vita
mi ritrovai per una selva oscura
ché la diritta via era smarrita.

Ahi quanto a dir qual era è cosa dura
esta selva selvaggia e aspra e forte
che nel pensier rinova la paura!

Tant'è amara che poco è più morte;
ma per trattar del ben ch'i' vi trovai,
dirò de l'altre cose ch'i' v'ho scorte.

Io non so ben ridir com'i' v'intrai,
tant'era pien di sonno a quel punto
che la verace via abbandonai.";

$len = strlen($paragraph);
$bad_word = $_GET['bad'];
var_dump($bad_word);
$new_paragraph = str_replace($_GET['bad'], '***', $paragraph);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Documents</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>canto i inferno</h1>


    <p> 
        <?php echo $paragraph;?> 
    </p>
    <p>
        la lunghezza del paragrafo è: <?php echo $len;
        echo $bad_word?>
     </p>
    <h2>Testo censurato</h2>
    <p><?php echo $new_paragraph?></p>
    <p>La lunghezza del paragrafo censurato è : <?php echo strlen($new_paragraph);?> </p>

</body>
</html>