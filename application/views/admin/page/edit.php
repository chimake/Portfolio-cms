<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="card">
            <div class="header">
                <h2><?= empty($page->id) ? 'Add a new page' : 'Edit page ' . $page->title; ?></h2>
                <?php echo validation_errors(); ?>
            </div>
            <div class="body">
                <?php echo form_open(); ?>
                <label for="title">Parent</label>
                <div class="form-group">
                    <?php echo form_dropdown('parent_id', $pages_no_parents, $this->input->post('parent_id') ? $this->input->post('parent_id') : $page->parent_id,'class="form-control"'); ?>
                </div>

                <label for="title">Tite</label>
                <div class="form-group">
                    <input type="text" id="title" name="title" value="<?= empty($page->id) ? '' : $page->title ?>"
                           placeholder="Please enter the title of the page" class="form-control">
                </div>

                <label for="email_address">Slug</label>
                <div class="form-group">
                    <input type="text" id="slug" name="slug" value="<?= empty($page->id) ? '' : $page->slug ?>"
                           class="form-control" placeholder="Enter your slug of the page">
                </div>
                <label for="body">Body</label>
                <div class="form-group">
                    <textarea rows="3" class="form-control tinymce" name="body"
                              id="body"><?= empty($page->id) ? '' : $page->body ?></textarea>

                </div>

                <button type="submit" name="submit" class="btn btn-raised btn-primary btn-round waves-effect">Save
                </button>
                <?php echo form_close(); ?>
            </div>
        </div>
    </div>
</div>