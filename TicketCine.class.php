<?php
require_once "Ticket.class.php";

class TicketCinema extends Ticket
{
    protected $movieChoice;
    protected $salle;
    protected $ageMin;
    protected $heurSeance;

    public function __construct($date, $firstChoiceLettre, $firstChoiceNumber, $tarif)
    {
        parent::__construct($date, $firstChoiceLettre, $firstChoiceNumber, $tarif);
        $this->movieChoice = "The Batman";
        $this->salle = random_int(1, 18);
        $this->ageMin = random_int(12, 18);
        $this->heurSeance = random_int(10, 23);
    }

    public function afficheInfo()
    {
        echo "<div style='border: 2px solid black; padding: 20px;'>";
        echo "<h1 style='text-align: center;'>Ticket de Cinéma</h1>";
        echo "<p><strong>Date :</strong> " . $this->date . "</p>";
        echo "<p><strong>Place :</strong> " . $this->firstChoiceLettre . $this->firstChoiceNumber . "</p>";
        echo "<p><strong>Tarif :</strong> " . $this->tarif . "</p>";
        echo "<p><strong>Numéro de ticket :</strong> " . $this->id . "</p>";
        echo "<hr>";
        echo "<h2 style='text-align: center;'>Film</h2>";
        echo "<p><strong>Titre :</strong> " . $this->movieChoice . "</p>";
        echo "<p><strong>Salle :</strong> " . $this->salle . "</p>";
        echo "<p><strong>Age minimum :</strong> " . $this->ageMin . " ans</p>";
        echo "<p><strong>Heure de la séance :</strong> " . $this->heurSeance . "h</p>";
        echo "</div>";
    }

}

?>