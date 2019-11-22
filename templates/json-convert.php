<?php
  // php function to convert csv to json format
  function csvToJson( $name ) {
    // open csv file
    if( !($fp = fope( $name, 'r' ))) {
      die( 'Can\'t open file...' );
    }
  }