<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Modul Ekle</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Anasayfa</a></li>
                        <li class="breadcrumb-item active">Modul Ekle</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <?php
            if ($_POST) {
                $calıstır = $VT->ModulEkle();
                if ($calıstır != false) {
                    echo '<div class="alert alert-success">Modulunüz başarıyla eklenmiştir.</div>';
                    ?>
                    <meta http-equiv="refresh" content="2;url=<?php echo SITE;?>">
                    <?php
                } else {
                    echo '<div class="alert alert-danger">Modul Eklemede Hata Oluştu: Sorunlar Şunlar olabilir:<br>                    
                    -Boş alan olabilir<br>
                    -Aynı isimde zaten kayıtlı modul bulunabilir<br>
                    -Sistemsel sıkıntı oluşmuş olabilir.</div>';
                }
            }
            ?>
            <div class="col-md-6">
                <!-- general form elements -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Modul Tanımlama Ekranı</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form role="form" action="#" method="post">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Başlık</label>
                                <input type="text" id="exampleInputEmail1" class="form-control" name="baslık"
                                       placeholder="Modul ismi Giriniz">
                            </div>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" name="durum" value="1"
                                       checked="checked">
                                <label class="form-check-label" for="exampleCheck1">AKTİF Yap</label>
                            </div>
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Modul Ekle</button>
                        </div>
                    </form>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>


