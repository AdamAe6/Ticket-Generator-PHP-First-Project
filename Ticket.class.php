<?php
class Ticket
{
    protected $date;
    protected $firstChoiceLettre;
    protected $firstChoiceNumber;
    protected $tarif;
    protected $id;

    public function __construct($date, $firstChoiceLettre, $firstChoiceNumber, $tarif)
    {
        $this->date = $date;
        $this->firstChoiceLettre = $firstChoiceLettre;
        $this->firstChoiceNumber = $firstChoiceNumber;
        $this->tarif = $tarif;
        $this->id = "Mars - 2023 - " . uniqid();
    }
}

?>