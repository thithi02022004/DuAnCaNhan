<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Quản lý quản trị viên</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active">Danh sách quản trị viên</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="d-flex justify-content-between">
                                <h3 class="card-title font-weight-bold py-2">Danh sách quản trị viên</h3>
                                <div class="card-tools">
                                    <a class="btn btn-primary" href="index.php?option=user&act=insert">
                                        <i class="fa fa-plus"></i> Thêm mới
                                    </a>
                                    <a class="btn btn-secondary" href="index.php?option=user&act=trash">
                                        <i class="fa fa-trash"></i> Thùng rác
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="datatable" style="width:100%" class="display table table-bordered table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th class="text-center" width="10px">#</th>
                                        <th class="text-center" width="100px">Ảnh đại diện</th>
                                        <th class="text-center" width="200px">Thông tin quản trị viên</th>
                                        <th class="text-center">Tài khoản</th>
                                        <th class="text-center">Quyền</th>
                                        <th class="text-center" width="100px">Chức năng</th>
                                        <th class="text-center" width="10px">ID</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($user_list as $row) : ?>
                                        <tr>
                                            <td class="text-center"><input type="checkbox" name="checkid[]" value="<?= $row['id']; ?>"></td>
                                            <td class="text-center">
                                                <img src="<?= '../public/images/user/' . $row['img']; ?>" style="width: 100%;" class="img img-fuild img-thumbnail">
                                            </td>
                                            <td class="text-left">
                                                FullName: <?= $row['fullname']; ?>
                                                <br>
                                                Email: <?= $row['email']; ?>
                                                <br>
                                                Phone: <?= $row['phone']; ?>
                                                <br>
                                                Giới tính: <?= $row['gender'] == 1 ? 'Nam' : 'Nữ'; ?>
                                                <br>
                                                Cấp bậc: <?= $row['bmrank']; ?>
                                            </td>
                                            <td class="text-center">
                                                <?= $row['username']; ?>
                                            </td>
                                            <td class="text-center"><?= $row['role']; ?></td>
                                            <td class="text-center">
                                                <?php if ($row['status'] == 1) : ?>
                                                    <a class="btn btn-sm btn-success" href="index.php?option=user&act=status&id=<?= $row['id']; ?>"><i class="fa fa-toggle-on"></i></a>
                                                <?php else : ?>
                                                    <a class="btn btn-sm btn-danger" href="index.php?option=user&act=status&id=<?= $row['id']; ?>"><i class="fa fa-toggle-off"></i></a>
                                                <?php endif; ?>
                                                <a class="btn btn-sm btn-info" href="index.php?option=user&act=update&id=<?= $row['id']; ?>"><i class="fa fa-edit"></i></a>
                                                <a class="btn btn-sm btn-danger" href="index.php?option=user&act=deltrash&id=<?= $row['id']; ?>"><i class="fa fa-trash"></i></a>
                                            </td>
                                            <td class="text-center"><?= $row['id']; ?></td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->