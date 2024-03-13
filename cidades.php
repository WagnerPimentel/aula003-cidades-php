<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Times Capeonato Paulista</title>
    <link rel="stylesheet" href="reset.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <header>
        <h1>☀ Climatempo ⛈</h1>
    </header>

    <div class="pesquisador">
        <textarea name="" id="" cols="30" rows="10"></textarea>
        <img src="lupa.png" alt="">
    </div>

    <div class="lista">
        <?php
        $cidades = ["Rio Branco","Maceió","Macapá","Manaus","Salvador","Fortaleza","Brasília","Vitória","Goiânia","São Luís","Cuiabá","Campo Grande","Belo Horizonte","Belém","João Pessoa","Curitiba","Recife","Teresina","Rio de Janeiro","Natal","Porto Alegre","Porto Velho","Boa Vista","Florianópolis","São Paulo","Aracaju","Palmas"];
        $temperatura = ["31","27","28","29","26","28","22","24","26","27","30","29","23","29","28","18","28","30","27","28","20","30","31","22","23","28","31"];
        $foto_clima = ["muito-quente.png","quente.png","ok.png","frio.png"];
        

        $numero_cidades = count($cidades);
        $contador = 0;
        $contador_temperaturas = 0;
        while($contador < $numero_cidades){
            echo "<div class='card'>";
            echo "<span class='titulo-cidade'> <br> $cidades[$contador] </span> <br>";
            echo "<span class='temperatura'> <br> $temperatura[$contador]°c  </span>";
            $contador++;
            $contador_temperaturas++;
                if ($temperatura[$contador_temperaturas] > 30) {
                echo "<img src='$foto_clima[0]'>";
                } elseif($temperatura[$contador_temperaturas] > 24 && $temperatura[$contador_temperaturas] < 31) {
                    echo "<img src='$foto_clima[1]'>";
                } elseif($temperatura[$contador_temperaturas] >19 && $temperatura[$contador_temperaturas] < 25) {
                    echo "<img src='$foto_clima[2]'>";
                } else{
                    echo "<img src='$foto_clima[3]'>";
                }
                
            echo "</div>";    
            
        }
        ?>
    </div>

</body>
</html>