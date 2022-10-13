<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
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
          )
        )
            );
        

    //   echo "<table>";
      echo "<tr><th>Category</th><th>Subcategory</th><th>Id</th>Name<th>Brand</th></tr>";
    echo '<br>';
      $keys = array_keys($products);
      for($i=0;$i<count($products);$i++)
      {
        echo $keys[$i] ."";
        foreach($products[$keys[$i]] as $key => $value) {
          foreach($value as $key1 =>$value1)
          {
            echo $key1;
          }
            // echo $key . " " ;
        }
    }
    echo "<tr><th>Category</th><th>Subcategory</th><th>Id</th><th>Name</th><th>Brand</th></tr>";
    echo "<br>";
        foreach($products as $k=> $v){
      echo $k;
        foreach($v as $k1=> $v1){
          echo $k1;
            foreach($v1 as $k2=> $v2){
              // echo $v2;
                foreach($v2 as $k3=> $v3){
                  echo $v3;

                  // foreach($v3 as $k4 => $v4){
                  //   echo $v4;
                  // }
                 
                    // if($v3=="Samsung")
                    // echo $products[$k][$k1][$k2]["id"]; 
                    // echo $products[$k][$k1][$k2]["name"]; 
                    // echo $products[$k][$k1][$k2]["brand"]; 
                } 
                die;
                echo "<br>";  
            } 
          
        } 
        echo "<br>";  
    }
    
     

      echo "</table>";

    ?>
</body>
</html>