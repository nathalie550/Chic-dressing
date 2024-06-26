<?php

$categories = get_category(get_query_var('cat'));
$category_name = $categories->name;
$category_description = $categories->category_description;

?>

<div class="category-description">

    <h3><?php echo esc_html($category_name); ?></h3>

    <?php
    if (!empty($category_description)) {
        echo '<p>' . $category_description . '</p>';
    }
    ?>

</div>