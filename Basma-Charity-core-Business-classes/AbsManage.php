<?php
require_once 'IManage.php';

abstract class AbsManage implements IManage {
    protected $id;

    function __construct($id) {
        $this->id = $id;
    }

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }
}
?>
