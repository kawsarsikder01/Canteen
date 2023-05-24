
<?php include_once($_SERVER['DOCUMENT_ROOT'].DIRECTORY_SEPARATOR.'config.php');

$productsJson = file_get_contents($adminSources.'products.json');
$products = json_decode($productsJson);

$ProductsHTMLStart=<<<Product
<table style="border:1px solid;">
<tr role="row">
    <th style="border:1px solid;">Name</th>
    <th style="border:1px solid;">Image</th>
    <th style="border:1px solid;">Category</th>
    <th style="border:1px solid;">Cost Price</th>
    
    <th style="border:1px solid;" >Sell Price</th>
    <th style="border:1px solid;" >E-sale</th>
    <th style="border:1px solid;" >Outdore</th>
    </tr>
    
</thead>
<tbody>

Product;
?>
                   <?php      
                        foreach($products as $product):
                            $ProductsHTMLContent .=<<<TR
                                            <tr>
                                                <td style="border:1px solid;">$product->name</td>
                                                <td style="border:1px solid;"><img src="$webroot.$product->img" style="height:100px; width: 100%"></td>
                                                <td style="border:1px solid;"> $product->category</td>
                                                <td style="border:1px solid;"> $product->costPrice</td>
                                                <td style="border:1px solid;"> $product->sellPrice</td>
                                                <td style="border:1px solid;">$product->esale</td>
                                                <td style="border:1px solid;">$product->outdoor</td>
                                            </tr>
                        TR ;

                        endforeach; 

    $ProductsHTMLEnd = <<<EOF

                    </tbody>
                </table>

                EOF;
$productsHtmlList = $ProductsHTMLStart.$ProductsHTMLContent.$ProductsHTMLEnd;
$mpdf = new \Mpdf\Mpdf();
$mpdf->WriteHTML($productsHtmlList);
$mpdf->Output();