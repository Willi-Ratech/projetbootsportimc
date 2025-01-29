

<h1>CALCULATEUR D'IMC <h1>
<h2>Calculez votre indice de masse corporelle en indiquant votre poids en kg et votre taille en cm.</h2>

<div class="form">
<form method="POST" action= "">
<label for="age">Age:</label>
<input id="age" type="number" name="age">

<label for="poid">Poid (kg):</label>
<input id= "poid"type="number" name="poid">

<label for="taille">Taille (cm):</label>
<input id="taille" type="number" name="taille">

<button type="submit">Calculez votre IMC </button>

</form>

</div>

<?php
var_dump($_POST);
#ca sert a verifier qu'on a les valeur
if (isset($_POST['age'])&& isset($_POST['poid'])){
#ici on affiche les valeur si ça existe 
  $age= $_POST['age'];
  $poid=$_POST['poid'];
  $taille=$_POST['taille'];
  #ici on traduit la valeur de taille en cm en metre .
  $metre=$taille/100;
#ici on applique la formule d'imc= poid divisé par (taille au carré)
  $result=$poid/($metre*$metre);
  var_dump($result); 
#ici echo ,sert afficher la phrase avec le resultat de l'imc .
  echo 'votre imc est de '. $result;
}
if ($result<18.5){
echo 'Insuffisance pondérale (maigreur)';
} elseif($result>=18.5 && $result<=25) {
echo 'Corpulence normale';
} elseif($result>=25 && $result<=30) {
  echo 'Surpoids';
}elseif($result>=30 && $result<=40) {
  echo 'Obésité sévère';
}elseif($result>=40)
echo 'Obésité morbide ou massive'
?>


