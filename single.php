<?php get_header(); ?>
<body <?php body_class(); ?>>
<?php get_template_part( "/template-parts/common/hero" ); ?>
    <div class="container">
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <div class="posts">
                    <?php
                    while ( have_posts() ) :
                        the_post();
                        ?>
                        <p class="text-center text-success">
                            <em><?php the_author(); ?></em><br/>
                          <?php echo get_the_date(); ?>
                        </p>
                        <div <?php post_class(); ?>>
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <h2 class="post-title text-center">
                                            <?php the_title(); ?>
                                        </h2>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <p>
                                            <?php
                                            if ( has_post_thumbnail() ) {
                                                $thumbnail_url = get_the_post_thumbnail_url(null,"large");
                                                printf( '<a class="popup" href="%s" data-featherlight="image">',$thumbnail_url);
                                                the_post_thumbnail( "large", array( "class" => "img-fluid" ) );
                                                echo '</a>';
                                            }

                                            the_content();
                                            echo '<br/>';
                                            wp_link_pages();
                                            echo '<br/>';

                                            ?>
                                        </p>
                                    </div>
                                    <div class="col-md-12 author-section">
                                        <div class="row">
                                            <div class="col-md-2 author-image">

                                              <?php
                                                  echo get_avatar(get_the_author_meta("id"));
                                              ?>
                                            </div>
                                            <div class="col-md-10 author-info">
                                                <h4>
                                                 <?php echo ucwords(get_the_author_meta("display_name"));?>
                                                </h4>
                                                <p>
                                                 <?php echo get_the_author_meta("description");?>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <?php if ( comments_open() ): ?>
                                        <div class="col-md-12">
                                            <?php
                                             comments_template();
                                            ?>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    <?php
                    endwhile;
                    ?>

                    <div class="container post-pagination">
                        <div class="row">
                            <div class="col-md-4"></div>
                            <div class="col-md-8">
                                <?php
                                the_posts_pagination( array(
                                    "screen_reader_text" => ' ',
                                    "prev_text"          => "New Posts",
                                    "next_text"          => "Old Posts"
                                ) );
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php get_footer(); ?>