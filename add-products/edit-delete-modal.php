<!-- ---- EDIT ---- -->


<div class="edit-modal-box" id="editProduct" id="edit_<?php echo $rows->product_id; ?>">
    <div class="add-modal-header">
        <center><h4>Add New Product</h4></center>
        <button data-edit-close-button>&times;</button>
    </div>
    <form method="POST" action="edit-blog.php">
    <div class="add-modal-body">
        <div class="add-modal-body-id">
            <div class="add-modal-body-label">
                <label>ID: </label>
            </div>
            <div class="add-modal-body-input">
                <input type="text" placeholder="id" name="product-id" value="<?php echo $rows->product_id; ?>" readonly>
            </div>
        </div>
        <div class="add-modal-body-name">
            <div class="add-modal-body-label">
                <label>Name: </label>
            </div>
            <div class="add-modal-body-input">
                <input id="required-name" type="text" placeholder="name" name="product-name" value="<?php echo $rows->product_name; ?>">
            </div>
        </div>
        <div class="add-modal-body-date">
            <div class="add-modal-body-label">
                <label>Date: </label>
            </div>
            <div class="add-modal-body-input">
                <input type="text" placeholder="date" name="product-date" value="<?php echo $rows->product_date; ?>" readonly>
            </div>
        </div>
    </div>
    <div class="add-modal-footer">
        <button id="cancel-button">Cancel</button>
        <button type="submit" name="edit-blog" id="update-button">Update</button>
    </div>
    </form>
</div>


<!-- ---- DELETE ---- -->

<div id="Delete" id="delete_<?php echo $rows->product_id; ?>" class="delete-modal-box">
    <div class="delete-modal-header">
        <center><h4>Are You Sure You Want to Delete Product?</h4></center>
        <button data-delete-close-button>&times;</button>
    </div>
    <div class="delete-modal-body">
        <p>This Action is Irreversable</p>
        <h3><?php echo $rows->product_name; ?></h3>
    </div>
    <div class="delete-modal-footer">
        <button>Cancel</button>
        <a href="delete-product.php?product_id=<?php echo $rows->product_id; ?>">DELETE</a>
    </div>
</div>

<div id="overlay2"></div>


