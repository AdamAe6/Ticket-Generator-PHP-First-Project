<?php
require_once "Ticket.class.php";

class TicketTheatre extends Ticket
{
    protected $pieceChoice;
    protected $heurSeance;
    protected $heurEntracte;

    public function __construct($date, $firstChoiceLettre, $firstChoiceNumber, $tarif)
    {
        parent::__construct($date, $firstChoiceLettre, $firstChoiceNumber, $tarif);
        $this->pieceChoice = "L'Avare";
        $this->heurSeance = random_int(10, 23);
        $this->heurEntracte = random_int(13, 20);
    }

    public function afficheInfo()
    {
        echo '<div style="border: 2px solid black; padding: 10px; width: 400px; margin: 10px auto; font-family: Arial, sans-serif;">';
        echo '<h2 style="text-align: center; margin: 0;">Billet de théâtre</h2>';
        echo '<p style="text-align: center; margin: 10px 0 0;">Date : ' . $this->date . '</p>';
        echo '<p style="text-align: center; margin: 0;">Spectacle : ' . $this->pieceChoice . '</p>';
        echo '<p style="text-align: center; margin: 0;">Heure de la représentation : ' . $this->heurSeance . "H" . '</p>';
        echo '<p style="text-align: center; margin: 0;">Heure de l\'entracte : ' . $this->heurEntracte . "H" . '</p>';
        echo '<hr style="margin: 10px 0;">';
        echo '<p style="text-align: center; margin: 0;">Emplacement : ' . $this->firstChoiceLettre . $this->firstChoiceNumber . '</p>';
        echo '<p style="text-align: center; margin: 0;">Tarif : ' . $this->tarif . '</p>';
        echo '<p style="text-align: center; margin: 0;">Numéro de billet : ' . $this->id . '</p>';
        echo '</div>';
    }

}

?>