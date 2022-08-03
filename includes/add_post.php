<div class="form_container" enctype="multipart/form-data">
        <form method=" POST" id="post_form">

                <div class="input_box">
                        <label for="post_title">Post Title </label>
                        <input type="text" name="post_title" class="form_input" id="post_title">
                </div>

                <div class="input_box">
                        <label for="post_category">Post Category</label>
                        <select name="post_category" class="form_input" id="post_category">
                                <option value="">Select</option>
                                <?php echo fetch_post_categories(); ?>
                        </select>
                </div>

                <div class="input_box">
                        <label for="author">Author</label>
                        <input type="text" name="author" class="form_input" id="author">
                </div>

                <div class="input_box">
                        <label for="post_content">Post Content</label>
                        <textarea name="post_content" id="post_content" class="form_input" cols="20"
                                rows="15"></textarea>
                </div>

                <div class="input_box">
                        <label for="post_image">Post Image</label>
                        <small>ALLOWED: jpg, gif, png, JPEG</small>
                        <input type="file" name="post_image" class="form_input" id="post_image">
                </div>
                <div class="input_box">
                        <label for="post_tags">Post Tags</label>
                        <input type="text" name="post_tags" class="form_input" id="post_tags">
                </div>

                <div class="input_box">
                        <label for="post_status">Post Status</label>
                        <select name="post_status" class="form_input" id="post_status">
                                <option value="">Select</option>
                                <option value="">Published</option>
                                <option value="">Draft</option>
                        </select>
                </div>



                <div class="input_box">
                        <button type="submit" name="submit" id="post_button" class="form_button">Insert Post</button>
                </div>


        </form>

</div>