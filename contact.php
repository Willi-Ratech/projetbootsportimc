
<form method="POST" action="">
<label id="name">Name:</label>
<input type="text" name="name">

<label id="age">Age:</label>
<input type="number" name="age">

<label id="email">Email:</label>
<input type="text" name="email">

<label for="sport">choose a sport:</label>
<select id ="sports" name="sports">
    <option value="Football">Football</option>
    <option value="Basketball">Basketbamm</option>
    <option value="Tennis">Tennis</option>
    <option value="Rugby">Rugby</option>
    <option value="golf">Golf</option> 
    <option value="Handball">Handball</option>
</select>  







<textarea name="message" style="width:200px; height:600px;"></textarea>

<button type="submit">Soumettre</button>

</form>

<?php
if (isset($_POST['name'])&& isset($_POST['age'])&&isset($_POST['email'])&&isset($_POST['sports'])  ){
  $name= $_POST['name'];
  echo "<p>". $name . "</p>";
  $age=$_POST['age'];
  echo "<p>" . $age . "</p>";
  $email=$_POST['email'];
  echo "<p>" . $email . "</p>";
  $sports=$_POST['sports'];
  echo "<p>" . $sports . "</p>";

}
?>

</body>
</html>
