<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Select Year</title>
</head>
<body>
    <h1>Select a Year</h1>
    <form>
        <label for="year">Choose a year:</label>
        <select id="year" name="year">
            <?php
                $currentYear = date("Y");
                for ($year = 1990; $year <= $currentYear; $year++) {
                    echo "<option value='$year'>$year</option>";
                }
            ?>
        </select>
        <input type="submit" value="Submit">
    </form>
</body>
</html>
