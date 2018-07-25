<?php  
   use Orm\Model;
   namespace model; 
   class Employee extends Orm\Model { 
      protected static $_connection = 'production'; 
      protected static $_table_name = 'table1'; 
          protected static $_properties = array ( 
         'Latitude' => array ( 
            'data_type' => 'int', 
            'label' => 'numbers', 
            'form' => array (
               'type' => 'text' 
            ), 
         ),  
         
         'Longtitude' => array ( 
            'data_type' => 'int', 
            'label' => 'some_string', 
            'form' => array ( 
               'type' => 'text' 
            ), 
         ),  
      ); 
   } 