<html>

<head>
    <title>Ans3c</title>
</head>

<body>
    <?php
    $f = simplexml_load_file('data.xml');
    ?>
    <form action="main.php" method="POST">
        <label for="num">Enter Id</label>
        <input type="number" name="id" id="num" value="<?php if (isset($_POST["id"])) {
                                                            echo $_POST["id"];
                                                        } ?>" max="<?php echo $f->count(); ?>">

        <button type="submit">Get Data!</button>
    </form>

    <?php
    if (isset($_POST['id'])) {
        $id = $_POST['id'];

        foreach ($f->score as $s) {
            if ($s->roll == $id) {
                echo "Total Marks: " . $s->total . " Percentage: " . $s->percentage;
            }
        }
    }
    ?>
</body>

</html>
