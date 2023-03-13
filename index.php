<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="style.css" />
</head>

<body>
<form action="" method="POST">
  <div class="form-group">
    <label for="firstChoice">Choisissez une représentation :</label>
    <select name="firstChoice" class="form-control" required>
      <option>Théâtre</option>
      <option>Cinéma</option>
    </select>
  </div>
  <div class="form-group">
    <label for="date">Choisissez une date :</label>
    <input type="date" name="date" class="form-control" required />
  </div>
  <div class="form-group">
    <label for="place">Choisissez une place :</label>
    <div class="form-inline">
      <select name="firstChoiceLettre" class="form-control mr-2">
        <option>A</option>
        <option>B</option>
        <option>C</option>
        <option>D</option>
        <option>E</option>
      </select>
      <select name="firstChoiceNumber" class="form-control" required>
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
      </select>
    </div>
  </div>
  <div class="form-group">
    <label for="tarif">Choisissez un tarif :</label>
    <select name="tarif" class="form-control" required>
      <option>Adulte</option>
      <option>Enfant</option>
    </select>
  </div>
  <button type="submit" class="btn btn-primary">Valider</button>
</form>



    <?php
    require "TicketCine.class.php";
    require "TicketTheatre.class.php";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if ($_POST["firstChoice"] == "Cinéma") { ?>
            <?php



            $ticketCine = new TicketCinema(
                $_POST["date"],
                $_POST["firstChoiceLettre"],
                $_POST["firstChoiceNumber"],
                $_POST["tarif"],
            );
        
            echo $ticketCine->afficheInfo();

            ?>

        <?php } else {
            $ticketTheatre = new TicketTheatre(
                $_POST["date"],
                $_POST["firstChoiceLettre"],
                $_POST["firstChoiceNumber"],
                $_POST["tarif"],
            );

         
            echo $ticketTheatre->afficheInfo();
        }
    }
    ?>




</body>

</html>