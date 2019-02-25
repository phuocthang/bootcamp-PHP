<h2>Cập nhật thông tin khách hàng</h2>
<form method="post" action="./productIndex.php?page=edit">
    <input type="text" name="id" value="<?php echo $Product->id; ?>"/>
    <div class="form-group">
        <label>Name product</label>
        <input type="text" name="namepr" value="<?php echo $Product->Nameproduct; ?>" class="form-control"/>
    </div>
    <div class="form-group">
        <label>Price product</label>
        <input name="pricepr" type="text" class="form-control" value="<?php echo $Product->Priceproduct; ?>">
    </div>
    <div class="form-group">
        <label>desecribe</label>
        <textarea name="despr" class="form-control"><?php echo $Product->Desproduct; ?></textarea>
    </div>
    <div class="form-group">
        <label>Producer</label>
        <textarea name="propr" class="form-control"><?php echo $Product->Spproducer; ?></textarea>
    </div>
    <div class="form-group">
        <input type="submit" value="Update" class="btn btn-primary"/>
        <a href="index.php" class="btn btn-default">Cancel</a>
    </div>
</form>