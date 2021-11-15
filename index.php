<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pole - oblečení</title>
</head>
<body>
<?php
// módní přehlídka vyvolených příšerek //
$costume[0]['hat'] = "Černá kšiltovka FILA";
$costume[0]['pants'] = "Černé krásné rifle";
$costume[0]['shirt'] = "Černé Calvin Klein tričko";
$costume[0]['boxers'] = "Černé boxerky";

$costume[1]['hat'] = "Bílá kšiltovka FILA";
$costume[1]['pants'] = "Bílé krásné rifle";
$costume[1]['shirt'] = "Bílé Calvin Klein tričko";
$costume[1]['boxers'] = "Bílé boxerky";

$costume[2]['hat'] = "Fialová kšiltovka FILA";
$costume[2]['pants'] = "Fialové krásné rifle";
$costume[2]['shirt'] = "Fialové Calvin Klein tričko";
$costume[2]['boxers'] = "Fialové boxerky";

$costume[3]['hat'] = "Šedá kšiltovka FILA";
$costume[3]['pants'] = "Šedé krásné rifle";
$costume[3]['shirt'] = "Šedé Calvin Klein tričko";
$costume[3]['boxers'] = "Šedé boxerky";

$monsters[0]['name'] = "Zlobr Ondra";
$monsters[0]['skill'] = "Intenzivní zápach";
$monsters[0]['atractivity'] = "-5/10";
$monsters[0]['strenght'] = "9/10"; 
$monsters[0]['fear'] = "10/10";
$monsters[0]['costume'] = $costume[0];

$monsters[1]['name'] = "Skřítek Jarda";
$monsters[1]['skill'] = "Je malý, proleze všude";
$monsters[1]['atractivity'] = "1/10";
$monsters[1]['strenght'] = "-12/10";
$monsters[1]['fear'] = "2/10";
$monsters[1]['costume'] =$costume[1];

$monsters[2]['name'] = "Mike Wazovski";
$monsters[2]['skill'] = "Roztomilý";
$monsters[2]['atractivity'] = "5/10";
$monsters[2]['strenght'] = "0/10";
$monsters[2]['fear'] = "-2/10";
$monsters[2]['costume'] = $costume[2];

$monsters[3]['name'] ="Sulley";
$monsters[3]['skill'] ="Dobře straší";
$monsters[3]['atractivity'] ="3/10";
$monsters[3]['strenght'] ="15/10";
$monsters[3]['fear'] ="12/10";
$monsters[3]['costume'] =$costume[3];

$monsters[4]['name'] = "Randall";
$monsters[4]['skill'] = "Nechutnost";
$monsters[4]['atractivity'] = "-11/10";
$monsters[4]['strenght'] = "15/10";
$monsters[4]['fear'] = "100/10";
$monsters[4]['costume'] = $costume[3];

for ($i=0; $i < count($monsters); $i++) { ?>
    <h2><?= $monsters[$i]['name'];?></h2>
    <p><strong>Jméno: </strong><?= $monsters[$i]['name'];?></p>
    <p><strong>Vlastnosti: </strong><?= $monsters[$i]['skill'];?></p>
    <p><strong>Atraktivnost: </strong><?= $monsters[$i]['atractivity'];?></p>
    <p><strong>Síla: </strong><?= $monsters[$i]['strenght'];?></p>
    <p><strong>Strach z příšerky: </strong><?= $monsters[$i]['fear'];?></p>
    <p><strong>Kšiltovka: </strong><?= $monsters[$i]['costume']['hat'];?></p>
    <p><strong>Rifle: </strong><?= $monsters[$i]['costume']['pants'];?></p>
    <p><strong>Tričko: </strong><?= $monsters[$i]['costume']['shirt'];?></p>
    <p><strong>Boxerky: </strong><?= $monsters[$i]['costume']['boxers'];?></p>

<?php
    
}
?>
</body>
</html>