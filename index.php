<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Caculator</title>
    <link rel="stylesheet" href="index.css">
</head>

<body>
    <div class="container">
        <h2><b>Caculator</b></h2>
        <form action="" method="post">
            <table>
                <thead>
                    <tr>
                        <td>First Operand:</td>
                        <td><input type="number" name="firstNumber"></td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Operator:</td>
                        <td><select name="operator">
                                <option value="plus">Plus</option>
                                <option value="minus">Minus</option>
                                <option value="multiply">Multiply</option>
                                <option value="division">Division</option>
                            </select></td>
                    </tr>
                    <tr>
                        <td>Second Operand:</td>
                        <td><input type="number" name="secondNumber"></td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="2"><input type="submit" value="Calculate"></td>
                    </tr>
                </tfoot>
            </table>
        </form>
        <?php
        if ($_SERVER['REQUEST_METHOD'] = 'POST') {
            $firstnumber = $_POST['firstNumber'];
            $operator = $_POST['operator'];
            $secondnumber = $_POST['secondNumber'];
            $result = 0;
            if ($operator == 'plus') {
                $result = $firstnumber + $secondnumber;
            } elseif ($operator == 'minus') {
                $result = $firstnumber - $secondnumber;
            } elseif ($operator == 'multiply') {
                $result = $firstnumber * $secondnumber;
            } elseif ($operator == 'division') {
                if ($secondnumber != 0) {
                    $result = $firstnumber / $secondnumber;
                } else {
                    echo  "Division by zero is not allowed";
                }
            } else {
                echo 'Please enter a number';
            }
            echo '<p><b>Result:</b></p>' . $result;
        };
        ?>
    </div>

</body>

</html>