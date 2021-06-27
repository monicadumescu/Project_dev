<?php
/**
 * Create a form and display the list of products to allow users to save one or more products as favorite.
 * For each product display checkbox and name of the product as label
 * The form will have a 'Save as favorite button'. When pressing the button, use TypeScript or JavaScript (your choice)
 * and write a script that sends to the server the ID's of the products selected by the user. For simplicity, the PHP script that receives the data
 * will just print the received data.
 * Implement fallback: if the user disables JavaScript in the browser, the form can still be submitted.
 */
$products = [
    [
        'id' => '2534',
        'name' => 'Revitalash Advanced Sérum Cils 2ml',
    ],
    [
        'id' => '3425',
        'name' => 'Bioderma Sensibio (Créaline) H2O Eau Micellaire Démaquillante Nettoyante Peaux Sensibles 500ml',
    ],
    [
        'id' => '76547',
        'name' => 'Somatoline Cosmetic Amincissant 7 Nuits Ultra Intensif Crème 400ml',
    ],
    [
        'id' => '95845',
        'name' => 'Nuxe Crème Prodigieuse Boost Baume-Huile Récupérateur Nuit Toutes Peaux Pot 50ml',
    ],
    [
        'id' => '3457',
        'name' => 'Zincotabs 60 Comprimés',
    ],
    [
        'id' => '9078l3',
        'name' => 'Forté Pharma Expert Cheveux Format 3 Mois 3x28 Comprimés Promo 1 Mois Offert',
    ]
];
echo '<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"><h1>Products</h1>';
for ($i=0; $i<6; $i++)
{   echo '<fieldset>
<div class="col-md-12 mt-1">',
           '<legend>',$products[$i]["name"],'</legend></br>
<button class="btn btn-outline-success my-2 my-sm-0" type="button" onclick="saveprod()">Save as favorite</button>
<script>
 var newElement ="";
function saveprod()
{
 jQuery("#js_person_list").prepend(newElement)
}
</script>
          </div></fieldset>';
}




?>