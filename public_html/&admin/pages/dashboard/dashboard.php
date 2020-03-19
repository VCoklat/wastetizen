<?php
$person = $db->get("user");
?>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <?php
$status=$_GET['status'];
		if ($status==1){			
?>		
<div class="callout callout-success">
                <h4>Success</h4>

                <p>Data has been saved</p>
              </div>
<?php
		}
?>		
            <h1>
        Data Member
        </h1>
            <!-- Main content -->
            <section class="content">

                    <div class="row">
                        <div class="col-md-12" style="height:20%">
                            <div class="box box-warning">
                                <!-- /.box-header -->
                                <div class="box-body">
                                    <div id="example2_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                                        <div class="row">
                                            <div class="col-sm-6"></div>
                                            <div class="col-sm-6"></div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <table id="example2" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
                                                    <thead>
                                                        <tr role="row">
                                                            <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Name</th>
                                                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Jumlah Plastik</th>
                                                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">Jumlah Token</th>
                                                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Jumlah Manggrove</th>
                                                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Edit</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>

                                                        <?php
if ($db->count > 0)
    foreach ($person as $persons) {
?>
                                                            <tr role="row" class="odd">
                                                                <td class="sorting_1">
                                                                    <?php
        echo $persons['name'];
?>
                                                                </td>
                                                                <td>
                                                                    <?php
        echo $persons['plastik'];
?>
                                                                </td>
                                                                <td>
                                                                    <?php
        echo $persons['token'];
?>
                                                                </td>
                                                                <td>
                                                                    <?php
        echo $persons['manggrove'];
?>
                                                                </td>
                                                                <td>
                                                                    <a href="menu.php?menu=detail&id=<?php
        echo $persons['id'];
?>" <i class="fa fa-pencil" aria-hidden="true"></i>
                                                                    </a>
                                                                </td>
                                                                <td></td>
                                                            </tr>
                                                            <?php
    }
?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.box-body -->
                            </div>
                        </div>
                    </div>

            </section>
    </div>