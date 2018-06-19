
        <div class="block-header">
            <div class="row clearfix">
                <div class="col-lg-5 col-md-5 col-sm-12">
                    <h2>Manage pages</h2>
                    </ul>
                </div>
                <div class="col-lg-7 col-md-7 col-sm-12">
                    <div class="input-group m-b-0">
                        <input type="text" class="form-control" placeholder="Search...">
                        <span class="input-group-addon">
                            <i class="zmdi zmdi-search"></i>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <!-- Basic Examples -->
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card">
                    <div class="header">
                        <h2><strong>Page </strong>List <a href="page/edit/" class="btn btn-success btn-round">Create New page</a></h2>

                    </div>
                    <div class="body">
                        <div class="table-responsive">

                            <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                <thead>
                                    <tr>
                                        <th>Title</th>
                                        <th>Parent</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                if (count($pages)):foreach ($pages as $page): ?>
                                    <tr>
                                        <td><?= anchor('admin/page/edit/'.$page->id,$page->title) ?></td>
                                        <td><?= $page->parent_slug ?></td>
                                        <td><a href="page/edit/<?=$page->id ?>" class="btn-round btn btn-primary">Edit</a></td>
                                        <td><a href="page/delete/<?=$page->id ?>" class="btn-round btn btn-danger delete_entry" >Delete</a></td>
                                    </tr>
                                <?php endforeach; ?>
                                    <?php else:?>
                                    <tr>
                                        <td colspan="4">We couldn't find a record </td>
                                    </tr>
                                <?php endif; ?>
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>Title</th>
                                    <th>Parent</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Basic Examples -->



