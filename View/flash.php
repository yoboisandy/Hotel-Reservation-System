<?php
if (hasFlash('message')) {
    $falshError = getFlash('message');
    foreach ($falshError as $fe) {
?>
        <div class="container-fluid" style="min-height:50px;">
            <div class="alert alert-<?php echo $fe['type']; ?> fade in alert-dismissable" role="alert">
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                <?php
                echo empty($fe['title']) ? '' : "<strong>" . $fe['title'] . "</strong> ";
                echo $fe['body'];
                ?>
            </div>
    <?php
    }
}
    ?>