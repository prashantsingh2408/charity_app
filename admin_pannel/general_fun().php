 <?php
  require 'config.php';
  function create_id($table)
  {
    require 'config.php';
    //Get greatest id in table
    $sql = "SELECT MAX(id) FROM $table";
    $result = $conn->query($sql);
    $rows = $result->fetch_assoc();
    $id = $rows['MAX(id)'];
    
    // create new id
    $id_new = $id +1;

    // insert id column
    $sql = "INSERT INTO $table(id) VALUE($id_new)";
    $conn->query($sql);
    
    return $id_new;
  }
  ?> 