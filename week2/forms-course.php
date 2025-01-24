<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forms Course</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h2>Forms</h2>
    <form action="receive-form.php" method="post">
        <label for="name">Name</label>
        <input type="text" id="name" name="name">
        <fieldset>
            <legend>Address</legend>
            <label for="address">Street</label>
            <input type="text" id="address" name="address">
            <label for="cnumber">Civic Number</label>
            <input type="number" id="cnumber" step="0.01" name="cnumber">
            <label for="city">City</label>
            <select id="city" name="city">
                <option value="1">Montreal</option>
                <option value="2">Quebec</option>
                <option value="3">Laval</option>
            </select>      
        </fieldset>
        <label for="dob">Birthday</label>
        <input type="date" id="dob" name="dob">
        <label for="email">Email</label>
        <input type="email" id="email" name="email">
        <label for="pwd">Password</label>
        <input type="password" id="pwd" name="password">
        <label for="age">Age</label>
        <input type="range" id="age" min="0" max="10" name="age">
        <fieldset>
            <legend>Programming Languages (Checkbox)</legend>
            <label>HTML
                <input type="checkbox" name="html">
            </label>
            <label>CSS
                <input type="checkbox" name="css">
            </label>
            <label>PHP
                <input type="checkbox" name="php">
            </label>
        </fieldset>
        <fieldset>
            <legend>How was weather today? (Radio)</legend>
            <label>Cold
                <input type="radio" name="weather" value="cold">
            </label>
            <label>Warm
                <input type="radio" name="weather" value="warm">
            </label>
            <label>Hot
                <input type="radio" name="weather" value="hot">
            </label>
        </fieldset>
        <label for="msg">Message</label>
        <textarea id="msg" rows="15" cols="80" name="message"></textarea>
        <input type="submit">
    </form>
</body>
</html>

<!-- 
receive-form.php?weather=on 
receive-form.php?name=&address=&cnumber=
receive-form.php?name=Peter&address=Pie+Ix&cnumber=1010
receive-form.php?name=Peter&address=Pie+Ix&cnumber=1010&city=2&dob=2016-01-23&email=peter%40gmail.com&password=123456&age=9&css=on&weather=on&message=hello%21+folks


-->