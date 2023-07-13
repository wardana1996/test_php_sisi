<html>
    <body>
        <form method="post">
            <label>Soal No.1</label>
            <input type="number" name="input1" placeholder="masukkan input..."/>
            <button type="submit" name="submit1">Oke</button>
            <br/>
        </form>
        <form method="post">
            <label >Masukkan angka:</label>
            <input type="number" name="input2" placeholder="masukkan input...">
            <button type="submit" name="submit2">Oke</button>
        </form>
        <?php
            function nomor_1 () {
                if (isset($_POST['submit1'])) {
                    $input1 = $_REQUEST['input1'];
        
                        for ($a=$input1; $a>0; $a--) {
                            for($i=1; $i<=$a; $i++){
                                echo "&nbsp";
                            }
                            for($a1=$input1;$a1>=$a;$a1--){
                                echo"*";
                            }
                            echo"<br>";
                        }
                }
            }
            
            nomor_1();

            function cekPrima($angka) {
                if ($angka < 2) {
                    return false;
                }
        
                for ($i = 2; $i <= sqrt($angka); $i++) {
                    if ($angka % $i == 0) {
                        return false;
                    }
                }
        
                return true;
            }
        
            function hasil() {
                if (isset($_POST['submit2'])) {
                    $input = $_POST["input2"];
            
                    if (!empty($input) && is_numeric($input) && $input > 0) {
                        $count = 0;
                        $bilangan = 2;
                        $hasil = array();
            
                        while ($count < $input) {
                            if (cekPrima($bilangan)) {
                                $hasil[] = $bilangan;
                                $count++;
                            }
            
                            $bilangan++;
                        }
            
                        echo "<h3>Hasil:</h3>";
                        echo implode(", ", $hasil);
                    } else {
                        echo "<p>Masukkan angka yang valid!</p>";
                    }
                }
            }
            
            hasil();

        ?>
    </body>
</html>
