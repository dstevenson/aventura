<?php
/*
Template Name: Projects > General Construction
*/
global $post, $wp_query;
get_header();
$project_tag_title = the_title('', '', false);
$page_id = $wp_query->query_vars['page'];
?>

        <div id="content">
            
            <div id="leftContent">
                <ul>
                <?php
                    $tag_name = $post->post_name;
                    $args = array(
                        'tag' => $tag_name,
                        'post_type' => 'galleryfolder'
                    );
                    $query = new WP_Query( $args );
                    $ids = array();
                    while ( $query->have_posts() ) {
                        $query->the_post();
                        $id = get_the_ID();
                        echo '<li><a href="/aventura-projects/' . $tag_name . '/' . $id . '">' . get_the_title() . '</a></li>';
                        $ids[] = $id;
                    };
                ?>
                </ul>
            </div> 
            
            <div id="rightContent">

                <?php
                    if (!is_numeric($page_id) || $page_id <= 0) {
                        $page_id = current($ids);
                        $title = "Most Recent " . substr($project_tag_title, 0, -1);
                    }

                    if (is_numeric($page_id) && $page_id > 0) {
                        $args = array(
                            'p' => $page_id,
                            'post_type' => 'galleryfolder'
                        );
                        $query = new WP_Query($args);
                        $query->the_post();
                        if (isset($title)) {
                        ?>
                        <h5><?php echo $title; ?></h5>
                        <?php
                        } else {
                        ?>
                        <h5><?php the_title(); ?></h5>
                        <?php
                        }
                        ?>

                        <div id="project-slides">
                            <?php

                            $size = "611x400";

                            $path = dirname(realpath(__FILE__))."/../../uploads/projects/{$post->post_name}/";
                            $dir = new DirectoryIterator($path);

                            /**
                             * @var $fileinfo SplFileInfo
                             */
                            foreach ($dir as $fileinfo) {
                                if ($fileinfo->isFile()) {
                                    $ext = pathinfo($fileinfo->getFilename(), PATHINFO_EXTENSION);
                                    $thumb_path = "_cache/{$fileinfo->getBasename(".$ext")}-$size.$ext";
                                    $real_thumb_path = "{$path}_cache/{$fileinfo->getBasename(".$ext")}-$size.$ext";
                                    if (file_exists($real_thumb_path)) {
                                        echo '<img src="/wp-content/uploads/projects/'.$post->post_name.'/' . $thumb_path . '" border="0" />';
                                    } else {
                                        echo '<img src="/wp-content/uploads/projects/'.$post->post_name.'/' . $fileinfo->getFilename() . '" border="0" />';
                                    }
                                }
                            }
                            ?>
                        </div>
                <?php
                    } else {
                ?>
                        <h5><?php echo "No Recent $project_tag_title"; ?></h5>
                <?php
                    }
                ?>
            </div> 
        
        </div>
        
        <div style="clear:both;"></div>
<?php get_footer(); ?>