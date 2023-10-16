
 <!-- bradcam_area  -->
 <div class="bradcam_area bradcam_bg_2">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="bradcam_text text-center">
                                <h3>Bloglar</h3>
                                <div class="search_form" style="margin-top: 30px; margin-left: 150px;">
                                <form action="#" method="post">
                                    <div class="row align-items-center">
                                        <div class="col-xl-8 col-md-8">
                                            <div class="input_field">
                                                <input type="text" class="form-control" name="kelime" placeholder="Arama yapmak istediğiniz bilgiyi yazınız." required>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-md-4">
                                            <div class="button_search" style="text-align: left;">
                                                <button class="boxed-btn2" type="submit">ARAMA YAP</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                </div>
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

                <?php 
                    if ($_POST) 
                    {
                        if (!empty($_POST["kelime"])) 
                        {
                            $kelime=$VT->filter($_POST["kelime"]);
                            $hizmetler=$VT->VeriGetir("bloglar","WHERE durum=? AND (baslik LIKE ? OR metin LIKE ?)",array(1,'%'.$kelime.'%','%'.$kelime.'%'),"ORDER BY sirano ASC");
                        }
                        else
                        {
                            $hizmetler=$VT->VeriGetir("bloglar","WHERE durum=?",array(1),"ORDER BY sirano ASC");
                        }
                    }
                    else
                    {
                        $hizmetler=$VT->VeriGetir("bloglar","WHERE durum=?",array(1),"ORDER BY sirano ASC");
                    }
                    if ($hizmetler!=false) 
                    {
                        for ($i=0; $i < count($hizmetler); $i++) 
                        { 
                            if (!empty($hizmetler[$i]["resim"])) {$resim=$hizmetler[$i]["resim"];}else{$resim='varsayilan.jpg';}
                            ?>
                            <div class="col-xl-4 col-lg-4 col-md-6">
                            <div class="single_explorer">
                                <div class="thumb">
                                    <img src="<?=SITE?>images/bloglar/<?=$resim?>" alt="<?=stripslashes($hizmetler[$i] ["baslik"])?>">
                                </div>
                                <div class="explorer_bottom d-flex">
                                    <div class="explorer_info">
                                        <h3><a href="<?=SITE?>blog-detay/<?=$hizmetler[$i]["seflink"]?>"><?=stripslashes($hizmetler[$i] ["baslik"])?></a></h3>
                                        <p><?=mb_substr(strip_tags(stripslashes($hizmetler[$i] ["metin"])),0,120,"UTF-8")?>...</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                            <?php
                        }
                    }
                ?>
                
            </div>
        </div>
    </div>
    <!--/ about_mission -->