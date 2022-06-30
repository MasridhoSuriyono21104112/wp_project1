<!DOCTYPE html>
<html>
    <head>
        <title>Menghitung Luas Segitiga</title>
    </head>
    <body>
        <h1>Hitung Luas Segitiga</h1>
        <form action="LuasSegitiga.php" method="post" >
            <table>
                <tr>
                    <td>
                        <label>Alas Segitiga:</label>
                        <br>
                        <input type="number" name="alas">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Tinggi Segitiga :</label>
                        <br>
                        <input type="number" name="tinggi">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Luas</label><br>
                        <textarea name="hasil" id="hasil">
                    
                    <?php
                        if(isset($_POST['submit']))
                        {
                            $alas = $_POST['alas'];
                            $tinggi = $_POST['tinggi'];
                            $luas = 1/2 * $alas * $tinggi;
                            
                            echo ": $luas";
                        }     
                    ?>
                    </textarea>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" name="submit" value="Hitung Luasnya">
                    </td>
                </tr>
            </table>
        </form>

    </body>
</html> 