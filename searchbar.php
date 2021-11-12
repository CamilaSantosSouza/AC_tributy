<?php 
    $con = new PDO("mysql:host=localhost;dbname=CodeFlix", 'root', '');

    if (isset($_POST['submit'])) {
        $str = $_POST['search'];
        $str = $con->prepare("SELECT * FROM `search` WHERE Name = '$str'");

        $str->setFetchMode(PDO:: FETCH_OBJ);
        $str -> execute();

        if($row = $str->fetch())
        {
            ?>
            <br><br><br>
            <table>
                <tr>
                    <td><?php echo $row->Name; ?></td>
                    <td><?php echo $row->Description;?></td>
                </tr>
            </table>
        <?php
        } else {
            echo "Name Does not exist";
        }
    }
?>