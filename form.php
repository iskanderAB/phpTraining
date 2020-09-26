<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home</title>
    <link rel="stylesheet" href="home.css"/>
    <link rel="stylesheet" href="form.css"/>
</head>
<body>
<nav class="nav">
    <div class="items">
        <a href="https://www.facebook.com" class="navItem"> facebook </a>
        <a href="https://www.google.com" class="navItem"> google </a>
        <a href="https://www.youtube.com" class="navItem"> youtube </a>
    </div>
</nav>
<aside class="sideBar">
    <a href="index.html" target="_blank" class="aSidebar"> Index </a>
    <a href="index.html" target="_blank" class="aSidebar"> Index </a>
    <a href="index.html" target="_blank" class="aSidebar"> Index </a>
</aside>
<div class="container">
    <form action="index.php" method="get">
        <label> Nom </label>
        <input type="text" name="nom" required ><br>
        <label> Prenom </label>
        <input type="text" name="prenom" required ><br>
        <label> Date de naissance </label>
        <input type="date" name="date">
        <label> Cin </label>
        <input type="number" name="cin" max="999999999" min="10000000"  required ><br>
        <label> Salaire </label>
        <input type="number" name="salaire" min="400" max="3000" required  ><br>
        <label style="display: inline" > femme  </label>
        <input type="radio" name="sex" value="femme" class="radio" >
        <label style="display: inline" > homme  </label>
        <input type="radio" name="sex" value="homme" class="radio" ><br>
        <button type="submit"> Ajouter</button>
    </form>
</div>
<script>
    // code ...
</script>
</body>
</html>