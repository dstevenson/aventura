<?php
/*
Template Name: Projects > Environmental Services
*/
global $post, $wp_query;
get_header();
$project_tag_title = the_title('', '', false);
$page_id = $wp_query->query_vars['page'];
?>

<script>
    $(function(){
        $("#project-slides").slidesjs({
            width: 619,
            height: 284,
            navigation: true,
            play: {
                active: false,
                // [boolean] Generate the play and stop buttons.
                // You cannot use your own buttons. Sorry.
                effect: "slide",
                // [string] Can be either "slide" or "fade".
                interval: 4000,
                // [number] Time spent on each slide in milliseconds.
                auto: false,
                // [boolean] Start playing the slideshow on load.
                swap: false,
                // [boolean] show/hide stop and play buttons
                pauseOnHover: false,
                // [boolean] pause a playing slideshow on hover
                restartDelay: 2500
                // [number] restart delay on inactive slideshow
            }
        });
    });
</script>

<div id="content">

    <div id="leftContent">
        <ul>
            <?php
            $args = array(
                'tag' => $post->post_name,
                'post_type' => 'galleryfolder'
            );
            $query = new WP_Query( $args );
            while ( $query->have_posts() ) {
                $query->the_post();
                echo '<li><a href="' . get_the_ID() . '">' . get_the_title() . '</a></li>';
            };
            ?>
        </ul>
    </div>

    <div id="rightContent">

        <?php

        if (is_numeric($page_id) && $page_id > 0) {
            $args = array(
                'p' => $page_id,
                'post_type' => 'galleryfolder'
            );
            $query = new WP_Query($args);
            $query->the_post();
            ?>
            <h5><?php the_title(); ?></h5>

            <div id="project-slides">
                <?php


                $dir = new DirectoryIterator(dirname(realpath(__FILE__))."/../../uploads/projects/{$post->post_name}/");

                /**
                 * @var $fileinfo SplFileInfo
                 */
                foreach ($dir as $fileinfo) {
                    if ($fileinfo->isFile()) {
                        echo '<img src="/wp-content/uploads/projects/'.$post->post_name.'/_cache/'.$fileinfo->getBasename(".{$fileinfo->getExtension()}").'-619x284.' . $fileinfo->getExtension() . '" border="0" />';
                    }
                }
                ?>
            </div>
        <?php
        } else {
            ?>
            <h5><?php echo $project_tag_title ?></h5>
        <?php
        }

        ?>

    </div>

</div>

<div style="clear:both;"></div>