<div class="jltma-modal fade" id="jltma_megamenu_modal">
    <div class="jltma-modal-dialog" role="document">
        <div class="jltma-modal-content">
            <div class="jltma-popup-contents">

                <?php include 'modal-header.php'; ?>

                <?php include 'modal-body.php'; ?>

            </div> <!-- jltma-popup-contents -->
        </div>
    </div>
</div>

<?php include 'modal-iframe.php'; ?>

<script>
    var jltma_megamenu_nonce = `<?php echo esc_attr(wp_create_nonce('wp_rest')); ?>`
</script>
