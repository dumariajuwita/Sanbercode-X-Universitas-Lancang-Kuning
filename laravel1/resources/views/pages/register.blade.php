<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Buat Account Baru</h1>
    <h2>Sign Up Form</h2>
    <form action="/send" method="post"> 
        @csrf
        <label for="fname">First name:</label><br><br>
        <input type="text" id="fname" name="fname"><br><br>
        <label for="lname">Last name:</label><br><br>
        <input type="text" id="lname" name="lname"><br><br>
        <label >Gender:</label> <br>
        <input type="radio" name="Gender"> Male <br>
        <input type="radio" name="Gender"> Famale <br>
        <input type="radio" name="Gender"> Other <br> <br> 
        <label >Nationaly:</label> <br>
        <select name="Nationality:">
            <option value="">Indonesian</option>
            <option value="">Singapore</option>
            <option value="">Malaysia</option>
            <option value="">Automation</option>
        </select> <br> <br>
        <label >Language Spoken:</label> <br>
        <input type="checkbox" name="Language Spoken"> Bahasa Indonesia <br>
        <input type="checkbox" name="Language Spoken"> English <br>
        <input type="checkbox" name="Language Spoken"> Other <br> <br>
        <label >Bio:</label> <br>
        <textarea cols="30" rows="10"></textarea> <br> <br>
       <input type="submit" value="sign Up">
    </form>
    <a href="/">kembali</a>
</body>
</html>