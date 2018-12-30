<?php if(! (bool) get_field('featured')): ?>
    <section class="filters">
        <div class="main-inner">
            <p><?= the_sub_field('text'); ?></p>
            <form id="blog-post-filter">
                <div class="selectors">
                    <div class="select-box">
                        <select name="blog-cat">
                            <option value="">Subject</option>
                            <?php 
                                $cats = get_terms([
                                    'taxonomy' => 'blog-cat',
                                    'hide_empty' => false
                                ]);
                            
                                foreach($cats as $cat){
                                    echo "<option value='$cat->term_id'>$cat->name</option>";
                                }
                            ?>
                        </select>        
                    </div>
        
                    <div class="select-box">
                        <select name="content-type">
                            <option value="">Read &amp listen</option>
                            <?php 
                                $types = get_terms([
                                    'taxonomy' => 'content-type',
                                    'hide_empty' => false
                                ]);
                            
                                foreach($types as $type){
                                    echo "<option value='$type->term_id'>$type->name</option>";
                                }
                            ?>
                        </select>      
                    </div>
                    <div class="select-box">
                        <select name="author">
                            <option value="">Author</option>
                            <?php 
                                $authors = get_posts([
                                    'post_type' => "employee",
                                    'post_per_page' => -1
                                ]);
                            
                                foreach($authors as $author){
                                    echo "<option value='$author->ID'>$author->post_title</option>";
                                }
                            ?>
                        </select>  
                    </div>
                </div>
                <input type="hidden" name="api-url" value="<?php echo site_url("wp-json/naes/v1/blog-posts")?>">
            </form>
        </div>
    </section>
<?php endif; ?>