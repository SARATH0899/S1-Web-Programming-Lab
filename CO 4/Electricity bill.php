<?php
    if(isset($_POST["sub"]))
    {
        $u = $_POST["uni"];
        function calbill($u)
        {
            if ($u<=50)
            {
                $bill = $u * 3.50;

            }
            else if($u>50 && $u<=150)
            {
                $b1 = 50 * 3.50;
                $rem = $u - 50;
                $bill = $rem * 4 + $b1;
            }
            else if($u>150 && $u<=250)
            {
                $b1 = 50 * 3.50;
                $b2 = 100*4;
                $rem = $u - 150;
                $bill = $rem * 5.20 + $b1 + $b2;
            }
            else
            {
                $b1 = 50 * 3.50;
                $b2 = 100*4;
                $b3 = 100*5.20;
                $rem = $u - 250;
                $bill = $rem * 6.50 + $b1 + $b2 + $b3;
            }
            return $bill;
        }

       $total=calbill($u);
    }

?>
<html>
    <head><title>Electricity Bill</title></head>
    <body>
        <form action="#" method="post">
            <table>
                <tr><th colspan="2">Electricity Bill</th></tr>
                <tr><td>No of Units:</td><td><input type="text" name="uni"></td></tr>
                <tr><td><input type="submit" value="submit" name="sub"></td></tr>
            </table>
        </form>
        <p><?php echo "Total price is ",$total," rupees."; ?></p>
    </body>
</html>