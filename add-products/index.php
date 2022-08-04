<?php

include "add-modal.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Store Management</title>
    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
    <script defer src="../script/myScript.js"></script>
</head>
<body>
 
    
    <div class="container">
        <h1>Store Blog Management</h1> 
        <div class="table">
        <div class="a-tags">
            <button data-modal-target="#addProduct" class="newProduct">New Product</button>
            <a href="../index.php#header" class="viewWebsite">View Website</a>
        </div>

            <?php
                session_start();
                if(isset($_SESSION["message"])){
            ?>
            <div class="alert">
                <?php echo $_SESSION['message'];?>
            </div>
            <?php
                unset($_SESSION['message']);
            }
            ?>

            <table>
                <thead>
                    <th>Product Id</th>
                    <th>Product Name</th>
                    <th>Release Date</th>
                    <th>Action</th>
                </thead>
                <tbody>

                <?php
                    $file = simplexml_load_file("../files/store-website.xml");

                    foreach($file->product as $rows){
                ?> 
                <tr>
                    <td><?php echo $rows->product_id; ?></td>
                    <td><?php echo $rows->product_name; ?></td>
                    <td><?php echo $rows->product_date; ?></td>
                    <td>
                        <a data-edit-open-button="#editProduct" href="#edit_<?php echo $rows->product_id; ?>" onclick="" class="edit">Edit</a>
                        <a data-delete-open-button="#Delete" href="#delete_<?php echo $rows->product_id; ?>" class="delete">Delete</a>

                    </td>
                    <?php include "edit-delete-modal.php"; ?>
                </tr>
                <?php   
                }
                ?>

                </tbody>
                <tfoot>
                    <th>Product Id</th>
                    <th>Product Name</th>
                    <th>Release Date</th>
                    <th>Action</th>
                </tfoot>
            </table>
        </div>

    </div>
</body>
</html>

