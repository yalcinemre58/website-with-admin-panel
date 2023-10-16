
 <!-- bradcam_area  -->
 <div class="bradcam_area bradcam_bg_2">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="bradcam_text text-center">
                                <h3>İletişim</h3>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/ bradcam_area  -->
            
    <!-- about_mission  -->
    <div class="explorer_europe">
        <div class="container" style="padding-top:20px;">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <?php
                        if ($_POST) 
                        {
                            if (!empty($_POST["adsoyad"]) && !empty($_POST["mail"]) && !empty($_POST["konu"]) && !empty($_POST["mesaj"])) 
                            {
                                $adsoyad=$VT->filter($_POST["adsoyad"]);
                                $mail=$VT->filter($_POST["mail"]);
                                $konu=$VT->filter($_POST["konu"]);
                                $mesaj=$VT->filter($_POST["mesaj"]);
                                $telefon=$VT->filter($_POST["telefon"]);
                                $metin="Ad Soyad : ".$adsoyad.' Mail Adresi : '.$mail." Telefon : ".$telefon." Mesaj : ".$mesaj;
                                $maililet=$VT->MailGonder("kendimailadresim@hotmail.com",$konu,$metin);
                                if($maililet!=false)
                                {
                                    echo '<div class="alert alert-success">Mesajınız başarıyla iletildi.</div>';
                                }
                                else
                                {
                                    echo '<div class="alert alert-danger">Lütfen daha sonra tekrar deneyiniz.</div>';    
                                }
                            }
                            else
                            {
                                echo '<div class="alert alert-danger">Boş bıraktığınız alanları doldurunuz.</div>';
                            }
                        }
                    ?>
                <form action="#" method="post">
                    <table class="table" style="margin-top: 50px;">
                        <tr>
                            <td>Adınız Soyadınız</td>
                            <td><input type="text" name="adsoyad" class="form-control" required></td>
                        </tr>
                        <tr>
                            <td>Mail Adresi</td>
                            <td><input type="email" name="mail" class="form-control" required></td>
                        </tr>
                        <tr>
                            <td>Telefon</td>
                            <td><input type="text" name="telefon" class="form-control" maxlength="11"></td>
                        </tr>
                        <tr>
                            <td>Konu</td>
                            <td><input type="text" name="konu" class="form-control" required></td>
                        </tr>
                        <tr>
                            <td>Mesajınız</td>
                            <td><textarea name="mesaj" class="form-control" required></textarea></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><input type="submit" name="ilet" class="form-control" value="Gönder"></td>
                        </tr>
                    </table>
                </form>
                </div>
                <div class="col-md-4">
                    <h3>Bize Ulaşın</h3>
                    <p>Telefon : <?=$sitetelefon?></p>
                    <p>Fax : <?=$sitefax?></p>
                    <p>E-Posta : <?=$sitemail?></p>
                    <p>Adres : <?=$siteadres?></p>
                </div>
            </div>
        </div>
    </div>
    <!--/ about_mission -->