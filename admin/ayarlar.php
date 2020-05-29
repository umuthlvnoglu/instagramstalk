<?php 
require_once 'header.php';
require_once '../config.php';

?>
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-8">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Link Yönlendirme</h4>
                  <p class="card-category">Yönlendirilcek linki ayarla</p>
                </div>
                <div class="card-body">
                   <?php 
    if ($_GET['islem']=="ok") 
    {
        $deger=htmlspecialchars($_POST['BF_link']);
      $sonuc = $Db->exec("UPDATE bakanlarfake SET BF_link='{$deger}' WHERE BF_id='1' "); ?>
      
         <?php  } ?>
                 

                  <?php  

$listele=$Db->prepare("SELECT * from bakanlarfake");
$listele->execute();
$cek=$listele->fetch(PDO::FETCH_ASSOC);

 ?>
                  <form  action="ayarlar.php?islem=ok" method="POST">
                   
                
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">URL</label>
                          <input type="text" class="form-control" name="BF_link" value=<?php echo $cek['BF_link']?>>
                        </div>
                      </div>
                   
                   
                    </div>
                    <button type="submit" class="btn btn-primary pull-right">Güncelle</button>
                     <?php 
    if ($_GET['islem']=="ok") 
    {
        ?>
       <strong>İşlem Başarılı!</strong>  Link Değiştirilmiştir.
         <?php  } ?>
                    <div class="clearfix"></div>
                  </form>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card card-profile">
                <div class="card-avatar">
                  <a href="#pablo">
                    <img class="img" src="../assets/img/faces/marc.jpg" />
                  </a>
                </div>
                <div class="card-body">
                  <h6 class="card-category text-gray">Wod-Hack</h6>
                  <h4 class="card-title">Coder</h4>
                  <p class="card-description">
                   Masaüstü ve Web Yazılım Geliştirici...
                  </p>
                  <a href="http://www.instagram.com/hakan.karaarslan" class="btn btn-primary btn-round">Takip Et</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    <?php 
require_once 'footer.php';
?>