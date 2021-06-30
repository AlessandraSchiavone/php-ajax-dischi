<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    <title>Dischi</title>
</head>
<body>
    <?php 
        include __DIR__. "/partials/header.php"
    ?>
    <main>
        <section class="disks ">
            <div class="content container">
                        <?php 
                            include __DIR__. "/database.php";
                            foreach ($dischi as $disco) {
                                echo "<div class='card-disk'>";
                                echo "<div class='disk text-center'>";
                                echo "<img class='img-fluid' src='".$disco["poster"]."'.>";
                                echo "<h3>".$disco["title"]."</h3>";
                                echo "<div>".$disco["author"]."<br>".$disco["year"]."</div>";
                                echo "</div>";
                                echo "</div>";
                            };
                        ?>
                
            </div>
        </section>
    </main>
</body>
</html>