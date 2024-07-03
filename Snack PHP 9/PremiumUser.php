<?php
include_once 'User.php';
include_once 'Membership.php';

class PremiumUser extends User {
    private $membership;

    public function __construct($name, $email, Membership $membership) {
        parent::__construct($name, $email);
        $this->membership = $membership;
    }

    // chiamata Getter e Setter
    public function getMembership() {
        return $this->membership;
    }

    public function setMembership(Membership $membership) {
        $this->membership = $membership;
    }
}
?>
