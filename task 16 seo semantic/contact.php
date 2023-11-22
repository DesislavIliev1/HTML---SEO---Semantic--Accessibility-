<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Megaparts-Contact-Page</title>
    <link rel="shortcut icon" href="" type="image/icon">
    <link rel="stylesheet" href="style.css">

    <!-- Facebook and Instagram -->
    <meta property="og:title" content="Megaparts-Contact-Page">
    <meta property="og:description" content="Website for car parts, car trading, and everything about cars">
    <meta property="og:image" content="/icons/mg-logo.png">
    <meta property="og:url" content="http://localhost:8080/task%2016%20seo%20semantic/contact.php">


    <!-- Twitter -->
    <meta property="twitter:title" content="Megaparts-Contact-Page">
    <meta property="twitter:description" content="Website for car parts, car trading, and everything about cars">
    <meta property="twitter:image" content="/icons/mg-logo.png">
    <meta property="twitter:card" content="">
    <meta property="twitter:site" content="http://localhost:8080/task%2016%20seo%20semantic/contact.php">

    <!-- Google -->
    <meta property="description" content="Megaparts-Contact-Page">
    <meta property="keywords" content="cars, parts, bumper, engine,">
    <meta property="authors" content="author name">
    <meta property="robots" content="index, follow">




</head>

<body>
    <?php include('header.php') ?>

    <main>
        <section class="contacts-section">

            <form>
                <label>
                    Име:
                    <input type="text" />
                </label>
                <br />
                <label>
                    E-mail:
                    <input type="email" />
                </label>
                <br />
                <label>
                    Съобщение:
                    <input type="text">
                </label>
                <br />
                <button class='button-submit' type="submit">Submit</button>
            </form>


        </section>

    </main>
    <?php include('footer.php') ?>

</body>

</html>