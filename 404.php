<?php
get_header();
?>
    <body <?php body_class(); ?>>
    <div class="container errorview">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center">
                    <?php
                    _e( "<br/><br/><br/>404 ERROR!<br/><br/>Sorry! We couldn't find what you were looking for<br/><br/><br/><br/><br/>", "alpha" );
                    ?>
                </h1>
            </div>
        </div>
    </div>

    </body>

<?php
get_footer();

