<?php
try {
  $db = new POD("sqlite:".__DIR__."/database.db");
  $db->setAttribute(POD::ATTR_ERRMODE,POD::ERRNODE_EXCEPTION);
} catch (Exception $e) {
  echo "Unable to connect"
  echo $e->getMessage();
  exit;
}

echo "Connection to the database";
