<?php
class StatementHandler {
private $stmt;

public function __construct($stmt) {
$this->stmt = $stmt;
}

public function execute($params = []) {
$this->stmt->execute($params);
}

public function fetchColumn() {
return $this->stmt->fetchColumn();
}

public function fetchAssoc() {
return $this->stmt->fetch(PDO::FETCH_ASSOC);
}

public function closeCursor() {
$this->stmt->closeCursor();
}
}
?>
