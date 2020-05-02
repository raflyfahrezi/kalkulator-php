<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Kalkulator</title>
</head>
<body>

    <?php
        if(isset($_POST['Hitung'])) {
            $no1 = $_POST["firstNumber"];
            $no2 = $_POST["secondNumber"];
            $operation = $_POST["operator"];
            switch ($operation) {
                case '+':
                        $hasil = $no1 + $no2;
                    break;
                case '-':
                        $hasil = $no1 - $no2;
                    break;
                case '/':
                        $hasil = $no1 / $no2;
                    break;
                case 'x':
                        $hasil = $no1 * $no2;
                    break;
            }
        }
    ?>

    <div class="calculator__header">
        <p class="calculator__header--modifier">Kalkulator</p>
    </div>
    <div class="calculator__container">
        <form action="index.php" method="post">
            <div class="calculator__input">
                <?php if(isset($_POST['Hitung'])) { ?>
                    <input type="text" name="firstNumber" value="<?php echo $no1 ?>" id="firstNumber" class="input" placeholder="Input first number" autocomplete="off">
                <?php } else { ?>
                    <input type="text" name="firstNumber" value="" id="firstNumber" class="input" placeholder="Input first number" autocomplete="off">
                <?php } ?>
            </div>
            <div class="calculator__input">
                <?php if(isset($_POST['Hitung'])) { ?>
                    <input type="text" name="secondNumber" value="<?php echo $no2 ?>" id="secondNumber" class="input" placeholder="Input second number" autocomplete="off">
                <?php } else { ?>
                    <input type="text" name="secondNumber" value="" id="secondNumber" class="input" placeholder="Input second number" autocomplete="off">
                <?php } ?>
            </div>
            <div class="wrapper">
                <div class="calculator__operator">
                    <select name="operator" id="operator" class="operator">
                        <option value="+">+ (Tambah)</option>
                        <option value="-">- (Kurang)</option>
                        <option value="/">/ (Bagi)</option>
                        <option value="x">x (Kali)</option>
                    </select>
                </div>
                <div class="calculator__button">
                    <input type="submit" value="Hitung" name="Hitung" class="button">
                </div>
            </div>
            <div class="calculator__input">
                <?php if(isset($_POST['Hitung'])) { ?>
                    <input type="text" name="result" id="result" value="<?php echo $hasil ?>" class="input">
                <?php } else { ?>
                    <input type="text" name="result" id="result" value="0" class="input">
                <?php } ?>
            </div>
        </form>
    </div>
</body>
</html>