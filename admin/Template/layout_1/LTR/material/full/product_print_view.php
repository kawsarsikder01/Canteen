
<?php include_once($_SERVER['DOCUMENT_ROOT'].DIRECTORY_SEPARATOR.'config.php');

$productsJson = file_get_contents($adminSources.'products.json');
$products = json_decode($productsJson);
session_start();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Campus Canteen</title>

    <!-- Global stylesheets -->
    
    <!-- /theme JS files -->

</head>

<body>

<!-- Main navbar -->



           
        <!-- /page header -->

        <!-- Content area -->
        <div class="content" style="text-align:center;">
            
        <!-- <div class="card-body">
                    The <code>DataTables</code> is a highly flexible tool, based upon the foundations of progressive enhancement, and will add advanced interaction controls to any HTML table. DataTables has most features enabled by default, so all you need to do to use it with your own tables is to call the construction function. Searching, ordering, paging etc goodness will be immediately added to the table, as shown in this example. <strong>Datatables support all available table styling.</strong>
                </div> -->

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
                        <?php foreach($products as $product){

                         ?>
                    <tr role="row" class="odd">
                        <td style="border:1px solid;" class="sorting_1"><?=$product->name?></td>
                        <td style="border:1px solid;">
                            <img src="<?=$webroot.$product->img?>" alt="Image of biscuit" style="height:100px; width: 100%;">
                        </td>
                        <td style="border:1px solid;"><?=$product->category?></td>
                        <td style="border:1px solid;">Tk <?=$product->costPrice?></td>
                        
                        <td style="border:1px solid;"><span>Tk <?=$product->sellPrice?></span></td>
                        <td style="border:1px solid;"><span class="badge badge-success"><?php if(isset($product->esale)){ echo "Enabled"; }else{ echo "Disabled"; } ?></span></td>
                        <td style="border:1px solid;"><span class="badge badge-success"><?php if(isset($product->outdoor)){ echo "Enabled"; }else{ echo "Disabled"; } ?></span></td>
                        
                       
                    </tr>
                    <?php } ?>
                    </tbody>
                </table></div>
<!-- /page content -->

</body>
</html>
