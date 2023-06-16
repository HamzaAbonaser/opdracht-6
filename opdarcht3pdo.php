<?php
$servername = "localhost:3307";
$username = "root";
$password = "";
$dbname = "winkel";

try {
       $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
       $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       if ($_SERVER["REQUEST_METHOD"] == "POST") {
           $product_naam = $_POST["product_naam"];
           $prijs_per_stuk = $_POST["prijs_per_stuk"];
           $omschrijving = $_POST["omschrijving"];
           $sql = "INSERT INTO producten (product_naam, prijs_per_stuk, omschrijving) VALUES (:product_naam, :prijs_per_stuk, :omschrijving)";
           $stmt = $conn->prepare($sql);
           $stmt->bindParam(":product_naam", $product_naam);
           $stmt->bindParam(":prijs_per_stuk", $prijs_per_stuk);
           $stmt->bindParam(":omschrijving", $omschrijving);
           $stmt->execute();
           echo "Product toegevoegd: $product_naam";
       }
   } catch(PDOException $e) {
       echo "Fout bij het verbinden met de database: " . $e->getMessage();
   }
   $conn = null;
?>
<!DOCTYPE html>
<html lang="en">
<head>
       <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <title>Product toevoegen</title>
</head>
<body>
<h2>Product toevoegen</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="product_naam">Productnaam:</label>
        <input type="text" name="product_naam" required><br><br>
        <label for="prijs_per_stuk">Prijs per stuk:</label>
        <input type="number" name="prijs_per_stuk" required><br><br>
        <label for="omschrijving">Omschrijving:</label>
        <textarea name="omschrijving" required></textarea><br><br>
        <input type="submit" value="Toevoegen">
</body>
</html>