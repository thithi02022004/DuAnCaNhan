<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Quản lý trang đơn</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item"><a href="index.php?option=single_page">trang đơn</a></li>
                        <li class="breadcrumb-item active">Cập nhật</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <form action="index.php?option=single_page&act=update" method="post" enctype="multipart/form-data">
            <div class="card card-primary">
                <div class="card-header">
                    <div class="d-flex justify-content-between">
                        <h3 class="card-title font-weight-bold py-2">Cập nhật trang đơn</h3>
                        <div class="card-tools">
                            <button type="submit" name="UPDATE" class="btn btn-success"><i class="fa fa-save"></i> Lưu[CẬP NHẬT]</button>
                            <a class="btn btn-secondary" href="index.php?option=single_page">
                                <i class="fa fa-arrow-left"></i> Thoát
                            </a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-9">
                            <div class="form-group">
                                <label for="title">Tên trang đơn</label>
                                <input type="hidden" name="id" value="<?= $row['id'] ?>">
                                <input type="text" id="title" name="title" value="<?= $row['title'] ?>" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="detail">Chi tiết trang đơn</label>
                                <textarea id="detail" name="detail" class="form-control" rows="4"><?= $row['detail'] ?></textarea>
                            </div>
                            <div class="form-group">
                                <label for="metakey">Metakey(SEO)</label>
                                <input type="text" id="metakey" name="metakey" value="<?= $row['metakey'] ?>" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="metadesc">Metadesc(SEO)</label>
                                <input type="text" id="metadesc" name="metadesc" value="<?= $row['metadesc'] ?>" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group align-items-center">
                                <label for="img">Hình ảnh trang đơn:</label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="img" name="img">
                                    <label class="custom-file-label" for="img">Choose file</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="status">Trạng thái </label>
                                <select id="status" name="status" class="form-control custom-select">
                                    <option selected>[--Trạng thái trang đơn--]</option>
                                    <option value="1" <?php if ($row['status'] == 1) {
                                                            echo "selected";
                                                        } ?>>Xuất bản</option>
                                    <option value="2" <?php if ($row['status'] == 2) {
                                                            echo "selected";
                                                        } ?>>Không xuất bản</option>
                                    <option value="0" <?php if ($row['status'] == 0) {
                                                            echo "selected";
                                                        } ?>>Lưu trữ</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="d-flex justify-content-between">
                        <h3 class="card-title font-weight-bold py-2"></h3>
                        <div class="card-tools">
                            <button type="submit" name="UPDATE" class="btn btn-success">
                                <i class="fa fa-save"></i> Lưu[CẬP NHẬT]
                            </button>
                            <a class="btn btn-secondary" href="index.php?option=single_page">
                                <i class="fa fa-arrow-left"></i> Thoát
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.card -->
        </form>
    </section>
    <!-- /.content -->
</div>
<script>
    $(function() {
        //Initialize Elements
        $('.select2').select2()
    });
    $("input[data-bootstrap-switch]").each(function() {
        $(this).bootstrapSwitch('state', $(this).prop('checked'));
    })
</script>