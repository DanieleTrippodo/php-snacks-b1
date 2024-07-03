<?php
class Membership {
    private $type;
    private $cost;

    public function __construct($type, $cost) {
        $this->type = $type;
        $this->cost = $cost;
    }

    // Getter e Setter
    public function getType() {
        return $this->type;
    }

    public function setType($type) {
        $this->type = $type;
    }

    public function getCost() {
        return $this->cost;
    }

    public function setCost($cost) {
        $this->cost = $cost;
    }
}
?>
