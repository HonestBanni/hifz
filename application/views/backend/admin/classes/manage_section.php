<hr />
<style>
    li{text-align: right;}
</style>
<a href="javascript:;" onclick="showAjaxModal('<?php echo base_url(); ?>index.php?modal/popup/classes/modal_section_add/');" 
   class="btn btn-primary pull-right">
    <i class="entypo-plus-circled"></i>
    <?php echo get_phrase('add_new_section'); ?>
</a> 
<br><br><br>

<div class="row">
    <div class="col-md-12">

        <div class="tabs-vertical-env">

            <ul class="nav tabs-vertical">
                <?php
                $classes = $this->db->get_where('class', array('branch_id' => $branch_id))->result_array();


                foreach ($classes as $row):
                    $branch_name = $this->db->get_where('branches', array('branch_id' => $branch_id))->row()->name;
                    ?>
                    <li class="<?php if ($row['class_id'] == $class_id) echo 'active'; ?>">
                        <a href="<?php echo base_url(); ?>index.php?admin/manage_section/<?php echo $row['class_id']; ?>">
                            <i class="entypo-dot"></i>
                            <?php echo get_phrase('class'); ?> <?php echo $row['name'] . ' / ' . $branch_name; ?>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>

            <div class="tab-content">

                <div class="tab-pane active">
                    <table class="table table-bordered responsive">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th><?php echo get_phrase('section_name'); ?></th>
                                <th><?php echo get_phrase('nick_name'); ?></th>
                                <th><?php echo get_phrase('options'); ?></th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php
                            $count = 1;
                            $sections = $this->db->get_where('section', array(
                                        'class_id' => $class_id
                                    ))->result_array();
                            foreach ($sections as $row):
                                ?>
                                <tr>
                                    <td><?php echo $count++; ?></td>
                                    <td><?php echo $row['name']; ?></td>
                                    <td><?php echo $row['nick_name']; ?></td>
                                    <td>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">
                                                <?php echo get_phrase('action') ?> <span class="caret"></span>
                                            </button>
                                            <ul class="dropdown-menu dropdown-default pull-right" role="menu">

                                                <!-- EDITING LINK -->
                                                <li>
                                                    <a href="#" onclick="showAjaxModal('<?php echo base_url(); ?>index.php?modal/popup/classes/modal_edit_section/<?php echo $row['section_id']; ?>');">
                                                        <i class="entypo-pencil"></i>
                                                        <?php echo get_phrase('edit'); ?>
                                                    </a>
                                                </li>
                                                <li class="divider"></li>

                                                <!-- DELETION LINK -->
                                                <li>
                                                    <a href="#" onclick="confirm_modal('<?php echo base_url(); ?>index.php?admin/sections/delete/<?php echo $row['section_id']; ?>');">
                                                        <i class="entypo-trash"></i>
                                                        <?php echo get_phrase('delete'); ?>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                            <?php endforeach; ?>

                        </tbody>
                    </table>
                </div>

            </div>

        </div>	

    </div>
</div>