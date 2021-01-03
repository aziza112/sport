<?php 
require 'config2.php';

if(isset($_POST['action'])){
    $sql = "SELECT *FROM produits WHERE categorie !=''";

    if (isset($_POST['categorie'])){
        $categorie = implode("','", $_POST['categorie']);
        $sql .="AND categorie IN('".$categorie."')";
    } 
    
    

    $result = $conn->query($sql);
    $output='';

    if ($result->num_rows>0){
    
        $output = '<div class="col-md-3 mb-2">
        <div class="card-deck">
            <div class="card border-secondary">
           
                <div class="card-img-overlay">
                    <h6 class="text-light bg-info text-center rounded p-1">'.$row['name'].'</h6>
                </div>
                <div class="card-body">
                    <h4 class="card-title text-danger">Price : '.number_format($row['prix']).' Dt</h4>
                    <p>
                        categorie: '.$row['categorie'].' <br> 
                       

                        <p>
                            <a href="#" class="btn btn-success btn-block">Add to cart</a>
                        </p>

                    </p>
                </div>
            </div>
        </div>
    </div>';

    }
    else {
        echo "<script>console.log('No Products Found !' );</script>";
        $output = "<h3>No Products Found !</h3>";
    }
    echo $output;
}
?>