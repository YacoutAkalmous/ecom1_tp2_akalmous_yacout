<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./css/style.css">
    <title>Initial Form</title>
</head>

<body>

    <div class="container">

        <!-- Form to input the number of forms to create -->
        <form action="form-create.php" method="post">
            <label for="num_forms">Number of addresses:</label>
            <input type="number" name="num_forms" required> <!-- Input field for the number of forms with required attribute -->
            <input type="submit" value="valider"> <!-- Submit button to create forms -->
        </form>
    </div>
</body>

</html>