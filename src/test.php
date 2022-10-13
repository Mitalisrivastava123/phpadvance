<?php
$products = array(
    "Electronics" => array(
      "Television" => array(
        array(
        "id" => "PR001",
        "name" => "MAX-001",
        "brand" => "Samsung"
        ),
        array(
        "id" => "PR002",
        "name" => "BIG-301",
        "brand" => "Bravia"
        ),
        array(
        "id" => "PR003",
        "name" => "APL-02",
        "brand" => "Apple"
        )
      ),
      "Mobile" => array(
        array(
        "id" => "PR004",
        "name" => "GT-1980",
        "brand" => "Samsung"
        ),
        array(
        "id" => "PR005",
        "name" => "IG-5467",
        "brand" => "Motorola"
        ),
        array(
        "id" => "PR006",
        "name" => "IP-8930",
        "brand" => "Apple"
        )
      )
    ),
    "Jewelry" => array(
      "Earrings" => array(
        array(
        "id" => "PR007",
        "name" => "ER-001",
        "brand" => "Chopard"
        ),
        array(
        "id" => "PR008",
        "name" => "ER-002",
        "brand" => "Mikimoto"
        ),
        array(
        "id" => "PR009",
        "name" => "ER-003",
        "brand" => "Bvlgari"
        )
      ),
      "Necklaces" => array(
        array(
        "id" => "PR010",
        "name" => "NK-001",
        "brand" => "Piaget"
        ),
        array(
        "id" => "PR011",
        "name" => "NK-002",
        "brand" => "Graff"
        ),
        array(
        "id" => "PR012",
        "name" => "NK-003",
        "brand" => "Tiffany"
        )
      )));
      echo "<table border='1px'>";
      foreach($products as $k=> $v){
        echo "<tr><th>category</th><th>subcategory</th><th>Id</th><th>name</th><th>brand</th></tr>";
        echo "<tr><td>" .$k. "</td>";

          foreach($v as $k1=> $v1){
            echo "<td>" .$k1. "</td>";
            echo "<tr><th>Category</th><th>Subcategory</th><th>Id</th><th>Name</th><th>Brand</th></tr>";

           
              foreach($v1 as $k2=> $v2){
                       echo "<tr><td>" .$k. "</td>";
                       echo "<td>" .$k1. "</td>";
                        echo " <td>".$products[$k][$k1][$k2]["id"]."</td>" ; 
                      echo "<td>".$products[$k][$k1][$k2]["name"]."</td>"; 
                      echo "<td> " .$products[$k][$k1][$k2]["brand"]."</td></tr>";

            }
         }
         
        
               
              }
              echo "</table>"; 
              foreach($products as $k=> $v){
                foreach($v as $k1=> $v1){
                    foreach($v1 as $k2=> $v2){

                    foreach($v2 as $k3=>$v3)
                    if($v3== "Samsung")
                   {
                   echo "<th><h3>samsung products</h3></th>";
                    echo " <ul><li>" .$products[$k][$k1][$k2]["id"]."</li>" ; 
                    echo "<li>" .$products[$k][$k1][$k2]["name"]."</li>";
                    echo "<li>" .$products[$k][$k1][$k2]["brand"]."</li></ul>";
                   
                   }
                }
            }
        }
        
        foreach($products as $k=> $v){
            foreach($v as $k1=> $v1){
                foreach($v1 as $k2=> $v2){

               
                if($k1== "Mobile")
               {
               echo "<th><h3>Mobile Products</h3></th>";
                echo " <ul><li>" .$products[$k][$k1][$k2]["id"]."</li>" ; 
                echo "<li>" .$products[$k][$k1][$k2]["name"]."</li>";
                echo "<li>" .$products[$k][$k1][$k2]["brand"]."</li></ul>";
               
               }
            }
        }
    }

    foreach($products as $k=> $v){
        foreach($v as $k1=> $v1){
            foreach($v1 as $k2=> $v2){
                foreach($v2 as $k3=>$v3){
           
            if($v3== "Bravia")
           {
            echo "<th><h3>Updated value of BIG-301 With Big 555</h3></th>";
            echo "<ul><li>" .$products[$k][$k1][$k2]["id"];
            echo "<li>" .$products[$k][$k1][$k2]["name"] = "BIG-555" ;
            echo "<li>" .$products[$k][$k1][$k2]["brand"]."</li></ul>";
           }
           
           }
        }
    }
}

foreach($products as $k=> $v){
 
  foreach($v as $k1=> $v1){
      foreach($v1 as $k2=> $v2){
          foreach($v2 as $k3=>$v3){
      
      if($v3== "PR003")
     {
      echo "<h2>deleted id PR003</h2>";
      unset($products[$k][$k1][$k2]);
     }
   
     echo "<table>";
     echo " <td>".$products[$k][$k1][$k2]["id"]."</td>" ; 
     echo "<td>".$products[$k][$k1][$k2]["name"]."</td>"; 
     echo "<td> " .$products[$k][$k1][$k2]["brand"]."</td>";
     echo "</table>";

   
     
     }
  }
}
}


    

         
              
            
         
     
       
      
?>