<?php
function getAll($tbl){
  $pdo = Database::getInstance()->getConnection();

  $queryAll = 'SELECT * FROM '.$tbl;
  $results= $pdo->query($queryAll);

  if($results){
    return $results;
  } else{
    return 'There was a problem accessing this info';
  }
}

function getSingleMovie($tbl, $col, $id){
  //1. TODO: finish the function based on getAll, this time only return
  //one movie's field   ; all fields from one movie
  $pdo = Database::getInstance()->getConnection();
  $querySingle = 'SELECT * FROM '.$tbl.' WHERE '.$col.' = '.$id;
  //$querySingle = "SELECT * FROM $tbl WHERE $col = $id";
  $resultSingle= $pdo->query($querySingle);

  if($resultSingle) {
    return $resultSingle;
  }else {
    return 'There was a problem getting this information';
  }
}

function getMoviesByFilter($args){
  $pdo = Database::getInstance()->getConnection();

  $filterQuery = 'SELECT * FROM '.$args['tbl'].' AS t, '.$args['tbl2'].' AS t2, '.$args['tbl3'] .' AS t3';
  $filterQuery .= ' WHERE t.'.$args['col'].' = t3.'.$args['col'];
  $filterQuery .= ' AND t2.'.$args['col2'].' = t3.'.$args['col2'];
  $filterQuery .= ' AND t2.'.$args['col3'].' = "'.$args['filter'].'"';

  // echo $filterQuery;
  // exit;

  $results = $pdo->query($filterQuery);

  if($results) {
    return $results;
  }else{
    return 'There was a problem accessing this info';
  }
}



//3functions being used