<div class="add-modal-box" id="addProduct">
    <div class="add-modal-header">
        <center><h4>Add New Product</h4></center>
        <button data-close-button>&times;</button>
    </div>
    <form method="POST" action="add-blog.php">
    <div class="add-modal-body">
        <div class="add-modal-body-id">
            <div class="add-modal-body-label">
                <label>ID: </label>
            </div>
            <div class="add-modal-body-input">
                <input type="text" placeholder="id" value="<?php echo  strtotime(date('Y-m-d H:i:s')); ?>" readonly name="product-id">
            </div>
        </div>
        <div class="add-modal-body-name">
            <div class="add-modal-body-label">
                <label>Name: </label>
            </div>
            <div class="add-modal-body-input">
                <input id="required-name" type="text" placeholder="name" value="<?php echo "name" ?>" name="product-name">
            </div>
        </div>
        <div class="add-modal-body-date">
            <div class="add-modal-body-label">
                <label>Date: </label>
            </div>
            <div class="add-modal-body-input">
                <input type="text" placeholder="date" value="<?php echo date('M/d/Y'); ?>" readonly name="product-date">
            </div>
        </div>
    </div>
    <div class="add-modal-footer">
        <button id="cancel-button">Cancel</button>
        <button type="submit" name="publishProduct" id="publish-button">Publish</button>
    </div>
    </form>
</div>


<div id="overlay"></div>