<li>
    <a class="dropdown-item" data-value="item-<?php echo $id_categoria; ?>">
        <div class="form-check">
            <input class="checkCategories form-check-input" type="checkbox" value="<?php echo $id_categoria; ?>" id="flexCheckCategories" name="<?php echo $id_categoria; ?>" onclick="countCheckCategories();">
            <label class="form-check-label" for="flexCheckCategories">
                <?php echo $nombre; ?>
            </label>
        </div>
    </a>
</li>