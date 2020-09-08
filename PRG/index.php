<!DOCTYPE>
<html>
    <head>
        <title>Zkouška</title>
        <meta charset='UTF-8'>
        <link rel='stylesheet' type='text/css' href='Zkouška.html'
    </head>
    <body>
        <h1>Zkouška</h1><hr>
        <p><span style='font-size: 35'>Z</span>kouškaZkouškaZkouškaZkouškaZkouškaZkouškaZkouškaZkouškaZkouškaZkouškaZkouškaZkouška<br>ZkouškaZkouškaZkouškaZkouškaZkouškaZkouškaZkouškaZkouškaZkouškaZkouškaZkouška<br>ZkouškaZkouškaZkouškaZkouškaZkouškaZkouškaZkouškaZkouškaZkouškaZkouškaZkouškaZkouškaZkouškaZkouškaZkouškaZkouškaZkouškaZkouška</p>
        <img src='obrazek.jpg' alt='Obrazek' width="500">
        <ul>
            <li>Zkouška</li>
            <li>Zkouška</li>
            <li>Zkouška</li>
        </ul>
        <ol>
            <li>Zkouška</li>
            <li>Zkouška</li>
            <li>Zkouška</li>
        </ol>
        <form>
            <input type='checkbox' name='Zkouška'>Zkouška
            <input type='checkbox' name='Zkouška1'>Zkouška1
            <input type='checkbox' name='Zkouška2'>Zkouška2
        </form>
        <div>
             <input type='radio' name='Zkouška'>Zkouška
             <input type='radio' name='Zkouška1'>Zkouška1
             <input type='radio' name='Zkouška2'>Zkouška2
        </div>
        <br>
        <div>
            <input type="password" name='Zkouška &nbsp'>
            <input type="submit" name='Zkouška1' value="Odeslat">
        </div>
        <select name='Zkouška'>
            <option value='1'>Zkouška</option>
            <option value='2'>Zkouška1</option>
            <option value='3'>Zkouška2</option>
        </select>
        <br><br>
        <table>
            <thead>
               <th>Zkouška</th>
            </thead>
                <tr>Zkouška1</tr>
                <tr>Zkouška2</tr>
            
        </table>
        
        <?PHP
        $a = 11;
        $b = 7;
        
        /*Aritmetické operace */
        
        var_dump($a + $b);
        var_dump($a - $b);
        var_dump($a / $b);
        var_dump($a * $b);
        var_dump($a - $b);
        echo "<br>";
        
        /*Přirovnávající operace*/
        
        var_dump($a++);
        var_dump($a--);
        var_dump($a+=$b);
        var_dump($a-=$b);
        var_dump($a/=$b);
        var_dump($a*=$b);
        echo "<br>";
        
        /*Porovnávací operátory*/
        
        var_dump($a==$b);
        var_dump($a!=$b);
        var_dump($a>=$b);
        var_dump($a<=$b);
        echo "<br>";
        
        /*Logické operátory*/

        var_dump($a||$b);
        var_dump($a&&$b);
        var_dump(!$a);
        
        echo "<br>";
        echo "<br>";
        
        /*Řetězcové funkce*/
        
        $test = "Jsem ve škole";
        
        echo strtolower($test);
        echo "<br>";
        echo ucwords($test);
        echo "<br>";
        echo strlen($test);
        
        echo "<br>";
        echo "<br>";
        
        /*Matematické funkce*/
        
        $c = 34;
        $d = -13;
        $e = 19.2342;
        
        echo abs($e);
        echo "<br>";
        echo max($c, $d, $e);
        echo "<br>";
        echo min($c, $d, $e);
        echo "<br>";
        echo rand(); 
        
        /*POLE*/
        
        /*1. Typ pole*/
        
        $pole1 = array('Cibule', 'Paprika', 'Petržel');
        var_dump($pole1);
            
        $pole2 = array('Úterý'=>array('TV', 'TV', 'PRG', 'PRG', 'ZSV', 'ČJL', 'FY'), 'Středa'=>array(1=>'FY', 'ČT', 'ČT', 'HAW'));
        var_dump($pole2);
        
        /*2. Typ pole*/
        
        $pole3 ['Pátek'] ['17:30'] = 1;
        $pole3 ['Sobota'] ['14:00'] = "Match";
        var_dump($pole3);
        
        /*Vlastní funkce*/ 
        
        /*Základní funkce 1*/
        
        $cena_bez_dph = 10232144235.3214;
        $dph1 = 1.21;
        $mena1 = "CZK";
        
        $cena_s_dph = $cena_bez_dph * $dph1;
        $cena_s_dph = round($cena_s_dph, 1);
        $cena_s_dph = number_format($cena_s_dph, 2, '.', ',');
        $cena_s_dph = $cena_s_dph . " " .$mena1;
        
        var_dump($cena_s_dph);
        
        /*Základní funkce 2*/
        /*
         * @todo Připraavaí měnu a přičte DPH
         * @param float $cena cena zboží
         * @author Askarov Yokubjon
         * @param float $DPH DPH pro výpočet ceny
         * @paran string $mena Měna pro tvorbu ceny
         * @return string
         */
        
        echo mena(123, 1.32, "EUR");
        
        function mena($cena, $dph, $mena){
            $cena *= $dph;
            $cena = round($cena, 2);
            return number_format($cena, 2, ",", " ") . " " . $mena;
        }
             
        var_dump(mena(431312331.414324, 1.21, "CZK"));
        
        /*Funkce 1*/
        
        function cislo($cislo){
            $soucin = 4;
            $soucet = 24;
            $podíl = 4;
            $vysledek = ($cislo * $soucin + $soucet) / $podíl - $cislo; 
            return number_format($vysledek);
        }
        
        var_dump(cislo(4));
        
        /*Funkce 2*/
        
        function lidi($jmeno, $vek){
            $min_vek = 18;
            
            if($vek < $min_vek){
                echo "<p>Váš věk je nedostačující</p>";
            }
            else if($vek >= $min_vek){
                echo "<p>Váš věk je dostačující</p>";
            }
        }
        
        $jmeno = "Mirek";
        $vek = 20;
        
        var_dump(lidi($jmeno, " ", $vek));      
     
        
        /*Anotace*/
        /**
         * 
         * @todo Dela neco
         * @param array $param1 Pole slova
         * @param string $param2 Retezec na kontrolu
         * @return boolean
         */
        function neco(array $param1, string $param2){
            return true;
        }
        
        
        
        
        
        
        /*Cviceni 1*/
        $veta = "Petr šlápl na hovno a utřel si to o tyčku.";
        $zakazanaSlova = array('idiot', 'hovno');
        /**
         * @author Askarov Yokubjon
         * @todo Napíše true pokud ty zakazana slova jsou ve vete, pokud ne tak napise false
         * 
         */
        function isValid($veta, $zakazanaSlova){
            foreach($zakazanaSlova as $hodnota){
                if(strpos($veta, $hodnota) !== false){
                    return true;
                }
            }
            return false;
            
        }
        
        var_dump(isValid($veta, $zakazanaSlova));
        
        
        
        
        
        
      
        
        
        
        
        
        
        
        
        

        
        
        

        ?>
    </body>
<p>HELLO how are u</p>
</html> 