<?php include_once("Controller/resources.php"); ?>
<!DOCTYPE html>
<html lang="en">

  <head>
    <?php include("header_references_auth.php");

    // $_SESSION["id_user"] = 1;
    //var_dump($_SESSION);
    //var_dump($_SESSION["email"]);
    //$_SESSION["id_user"] = 1;

    //echo "<pre>";
    //var_dump($_POST);
    //echo "</pre>";

    if (sizeof($_POST)>0) {
      $result = getModuleData($linkDB, $_POST["module"], $_POST["id_patient"]);
      //var_dump($result);

      if ($_POST["form_answered"]=="true") {
          if ($result[0]["id_data"] != "") {
            $realized = saveAdultVaccinatonData($linkDB, "UPDATE", $_POST, $_SESSION["id_user"]);
          }else{
            $realized = saveAdultVaccinatonData($linkDB, "INSERT", $_POST, $_SESSION["id_user"]);
          }
          if ($realized) {
            header('Location: patient_pass.php?m=adultVaccination'); exit;
          }
      }

      $result = getModuleData($linkDB, $_POST["module"], $_POST["id_patient"]);
    } else {
      header('Location: home.php'); exit;
    }

    //echo "<pre>";
    //var_dump($result);
    //echo "</pre>";

   ?>
    <script>
      jQuery(document).ready(function(e) {
        jQuery('#dptc').click(function(e){
            if(jQuery(e.target).is('input')) return;
            jQuery('#dptc').toggleClass('bg-gray')
            jQuery('#dptc').toggleClass('bg-pentav')
            jQuery('#dptc_').toggle()
            jQuery('input[name="dptc"]').prop('checked', function(_, checked) {
                return !checked;
            })
        })
        jQuery('#dptc1').click(function(e){
            if(jQuery(e.target).is('input')) return;
            jQuery('#dptc1').toggleClass('bg-gray')
            jQuery('#dptc1').toggleClass('bg-pentav')
            jQuery('#dptc1_').toggle()
            jQuery('input[name="dptc1"]').prop('checked', function(_, checked) {
                return !checked;
            })
        })
        jQuery('#dptc2').click(function(e){
            if(jQuery(e.target).is('input')) return;
            jQuery('#dptc2').toggleClass('bg-gray')
            jQuery('#dptc2').toggleClass('bg-pentav')
            jQuery('#dptc2_').toggle()
            jQuery('input[name="dptc2"]').prop('checked', function(_, checked) {
                return !checked;
            })
        })
        jQuery('#dpti1').click(function(e){
            if(jQuery(e.target).is('input')) return;
            jQuery('#dpti1').toggleClass('bg-gray')
            jQuery('#dpti1').toggleClass('bg-pentav')
            jQuery('#dpti1_').toggle()
            jQuery('input[name="dpti1"]').prop('checked', function(_, checked) {
                return !checked;
            })
        })
        jQuery('#dpti2').click(function(e){
            if(jQuery(e.target).is('input')) return;
            jQuery('#dpti2').toggleClass('bg-gray')
            jQuery('#dpti2').toggleClass('bg-pentav')
            jQuery('#dpti2_').toggle()
            jQuery('input[name="dpti2"]').prop('checked', function(_, checked) {
                return !checked;
            })
        })
        jQuery('#dpti3').click(function(e){
            if(jQuery(e.target).is('input')) return;
            jQuery('#dpti3').toggleClass('bg-gray')
            jQuery('#dpti3').toggleClass('bg-pentav')
            jQuery('#dpti3_').toggle()
            jQuery('input[name="dpti3"]').prop('checked', function(_, checked) {
                return !checked;
            })
        })
        jQuery('#dptp').click(function(e){
            if(jQuery(e.target).is('input')) return;
            jQuery('#dptp').toggleClass('bg-gray')
            jQuery('#dptp').toggleClass('bg-pentav')
            jQuery('#dptp_').toggle()
            jQuery('input[name="dptp"]').prop('checked', function(_, checked) {
                return !checked;
            })
        })
        jQuery('#influenzap').click(function(e){
            if(jQuery(e.target).is('input')) return;
            jQuery('#influenzap').toggleClass('bg-gray')
            jQuery('#influenzap').toggleClass('bg-influenza')
            jQuery('#influenzap_').toggle()
            jQuery('input[name="influenzap"]').prop('checked', function(_, checked) {
                return !checked;
            })
        })
        jQuery('#influenza').click(function(e){
            if(jQuery(e.target).is('input')) return;
            jQuery('#influenza').toggleClass('bg-gray')
            jQuery('#influenza').toggleClass('bg-influenza')
            jQuery('#influenza_').toggle()
            jQuery('input[name="influenza"]').prop('checked', function(_, checked) {
                return !checked;
            })
        })
        jQuery('#influenza2').click(function(e){
            if(jQuery(e.target).is('input')) return;
            jQuery('#influenza2').toggleClass('bg-gray')
            jQuery('#influenza2').toggleClass('bg-influenza')
            jQuery('#influenza2_').toggle()
            jQuery('input[name="influenza2"]').prop('checked', function(_, checked) {
                return !checked;
            })
        })
        jQuery('#influenza3').click(function(e){
            if(jQuery(e.target).is('input')) return;
            jQuery('#influenza3').toggleClass('bg-gray')
            jQuery('#influenza3').toggleClass('bg-influenza')
            jQuery('#influenza3_').toggle()
            jQuery('input[name="influenza3"]').prop('checked', function(_, checked) {
                return !checked;
            })
        })
        jQuery('#influenza4').click(function(e){
            if(jQuery(e.target).is('input')) return;
            jQuery('#influenza4').toggleClass('bg-gray')
            jQuery('#influenza4').toggleClass('bg-influenza')
            jQuery('#influenza4_').toggle()
            jQuery('input[name="influenza4"]').prop('checked', function(_, checked) {
                return !checked;
            })
        })
        jQuery('#influenza5').click(function(e){
            if(jQuery(e.target).is('input')) return;
            jQuery('#influenza5').toggleClass('bg-gray')
            jQuery('#influenza5').toggleClass('bg-influenza')
            jQuery('#influenza5_').toggle()
            jQuery('input[name="influenza5"]').prop('checked', function(_, checked) {
                return !checked;
            })
        })
        jQuery('#influenza6').click(function(e){
            if(jQuery(e.target).is('input')) return;
            jQuery('#influenza6').toggleClass('bg-gray')
            jQuery('#influenza6').toggleClass('bg-influenza')
            jQuery('#influenza6_').toggle()
            jQuery('input[name="influenza6"]').prop('checked', function(_, checked) {
                return !checked;
            })
        })
        jQuery('#sarampion').click(function(e){
            if(jQuery(e.target).is('input')) return;
            jQuery('#sarampion').toggleClass('bg-gray')
            jQuery('#sarampion').toggleClass('bg-sarampion')
            jQuery('#sarampion_').toggle()
            jQuery('input[name="sarampion"]').prop('checked', function(_, checked) {
                return !checked;
            })
        })
        jQuery('#sarampionsa1').click(function(e){
            if(jQuery(e.target).is('input')) return;
            jQuery('#sarampionsa1').toggleClass('bg-gray')
            jQuery('#sarampionsa1').toggleClass('bg-sarampion')
            jQuery('#sarampionsa1_').toggle()
            jQuery('input[name="sarampionsa1"]').prop('checked', function(_, checked) {
                return !checked;
            })
        })
        jQuery('#sarampionsa2').click(function(e){
            if(jQuery(e.target).is('input')) return;
            jQuery('#sarampionsa2').toggleClass('bg-gray')
            jQuery('#sarampionsa2').toggleClass('bg-sarampion')
            jQuery('#sarampionsa2_').toggle()
            jQuery('input[name="sarampionsa2"]').prop('checked', function(_, checked) {
                return !checked;
            })
        })

        var date_input = $('.date'); //our date input has the name "date"
        var container = $('.bootstrap-iso form').length > 0 ? $('.bootstrap-iso form').parent() : "body";
        var options = {
            format: 'yyyy-mm-dd',
            container: container,
            todayHighlight: true,
            autoclose: true,
            language: 'es',
        };
        date_input.datepicker(options);
      })
    </script>
  </head>

<body id="bootstrap_overrides">
  <noscript>You need to enable JavaScript to run this app.</noscript>
  <?php include("navigator.php"); ?>
  <div class="container-fluid">

    <div class="row custom-vertical-padding">
      <div class="offset-0 offset-md-2 offset-sm-2 offset-lg-3 col-12 col-sm-8 col-md-8 col-lg-6 text-center">
        <button class="btn my-2 my-sm-0 custom-btn-disabled" type="submit">
          <span>
            <i class="fas fa-vial custom-icon icon-behind"></i>
            <h4 class="text-white bold-font text-forward"><?php echo ADULT_VACCINATION; ?></h4>
          </span>
        </button>
      </div>
    </div>

    <div class="row">
        <div class="offset-1 offset-lg-2 offset-md-1 offset-sm-1 col-12 col-sm-10 col-md-10 col-lg-10">
          <section class="instructions vertical-margin-bottom">
            <p class="instructions-paragraph regular-font text-royal-blue">
              Marca el recuadro de cada vacuna que haya sido administrada.
            </p>
          </section>
        </div>

        <div class="offset-0 offset-lg-3 offset-md-2 offset-sm-2 col-12 col-sm-8 col-md-8 col-lg-6 text-center">
          <h2 class="text-royal-blue bold-font custom-full-name-big vertical-margin-bottom"><?php echo $result[0]["firstLastName"]." ".$result[0]["secondLastName"]." ".$result[0]["name"]; ?></h2>
        </div>
    </div>

    <div class="row">
        <div class="offset-1 offset-lg-2 offset-md-1 offset-sm-1 col-10 col-sm-10 col-md-10 col-lg-8">
            <form method="POST">
                <input type="hidden" name="module" value="<?php echo $_POST['module']; ?>">
                <input type="hidden" name="id_patient" value="<?php echo $_POST['id_patient']; ?>">
                <input type="hidden" name="form_answered" value="true">
                
                <div class="row text-center">
                    <div class="col-12 p-2 border-head">
                        <span class="text-royal-blue bold-font custom-form-label-element">
                            Esquema de Vacunación
                        </span>
                    </div>
                </div>

                <div class="row">
                    <div class="col-5 col-sm-6 col-md-4 p-2 border-head">
                        <span class="text-royal-blue bold-font">Sarampión y Rubéola </span><span class="text-royal-blue">(Los que no han sido vacunados o tienen esquema incompleto, hasta los 39 años de edad)</span>
                    </div>
                    <div class="col-7 col-sm-6 col-md-4 border-mid">
                        <div class="row text-center">
                            <div class="col-12 bg-green border-row">
                                <span class="bold-font">SIN ANTECEDENTE</span>
                            </div>
                            <div id="sarampionsa1" class="col-12 p-2 border-row <?php if($result[0]['sarampionsa1']=='1') { echo 'bg-sarampion'; } else { echo 'bg-gray';} ?>">
                                <span>Primera</span><br />
                                <span>al primer contacto</span>
                                <div id="sarampionsa1_" <?php if($result[0]['sarampionsa1']!='1') { echo 'style="display: none;"'; } ?> class="mt-2">
                                    <input type="checkbox" <?php if($result[0]['sarampionsa1']=='1') { echo 'checked="checked"'; } ?> style="display: none;" name="sarampionsa1">
                                    <input placeholder="Fecha de vacunación" name="sarampionsa1_date" value="<?php echo $result[0]["sarampionsa1_date"]; ?>" class="form-control custom-input date" autocomplete="off" />
                                    <input type="text" class="form-control custom-input mt-1" name="sarampionsa1_desc" value="<?php echo utf8_encode($result[0]["sarampionsa1_desc"]); ?>" placeholder="Efectos adversos" autocomplete="off" />
                                </div>
                            </div>
                            <div id="sarampionsa2" class="col-12 p-2 <?php if($result[0]['sarampionsa2']=='1') { echo 'bg-sarampion'; } else { echo 'bg-gray';} ?>">
                                <span>Segunda</span><br />
                                <span>4 semanas depués de la primera</span>
                                <div id="sarampionsa2_" <?php if($result[0]['sarampionsa2']!='1') { echo 'style="display: none;"'; } ?> class="mt-2">
                                    <input type="checkbox" <?php if($result[0]['sarampionsa2']=='1') { echo 'checked="checked"'; } ?> style="display: none;" name="sarampionsa2">
                                    <input placeholder="Fecha de vacunación" name="sarampionsa2_date" value="<?php echo $result[0]["sarampionsa2_date"]; ?>" class="form-control custom-input date" autocomplete="off" />
                                    <input type="text" class="form-control custom-input mt-1" name="sarampionsa2_desc" value="<?php echo utf8_encode($result[0]["sarampionsa2_desc"]); ?>" placeholder="Efectos adversos" autocomplete="off" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-5 col-sm-6 border-headmid d-md-none"></div>
                    <div class="col-7 col-sm-6 col-md-4 border-mid">
                        <div class="row text-center">
                            <div class="col-12 bg-green border-row">
                                <span class="bold-font">ESQ. INCOMPLETO</span>
                            </div>
                            <div id="sarampion" class="col-12 p-2 border-row <?php if($result[0]['sarampion']=='1') { echo 'bg-sarampion'; } else { echo 'bg-gray';} ?>">
                                <span>Dosis única</span><br />
                                <span>al primer contacto</span>
                                <div id="sarampion_" <?php if($result[0]['sarampion']!='1') { echo 'style="display: none;"'; } ?> class="mt-2">
                                    <input type="checkbox" <?php if($result[0]['sarampion']=='1') { echo 'checked="checked"'; } ?> style="display: none;" name="sarampion">
                                    <input placeholder="Fecha de vacunación" name="sarampion_date" value="<?php echo $result[0]["sarampion_date"]; ?>" class="form-control custom-input date" autocomplete="off" />
                                    <input type="text" class="form-control custom-input mt-1" name="sarampion_desc" value="<?php echo utf8_encode($result[0]["sarampion_desc"]); ?>" placeholder="Efectos adversos" autocomplete="off" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-5 col-sm-6 col-md-4 p-2 border-head">
                        <span class="text-royal-blue bold-font">Tétanos y Difteria</span>
                    </div>
                    <div class="col-7 col-sm-6 col-md-4 border-mid">
                        <div class="row text-center">
                            <div class="col-12 bg-green border-row">
                                <span class="bold-font">ESQ. COMPLETO</span>
                            </div>
                            <div id="dptc" class="col-12 p-2 border-row <?php if($result[0]['dptc']=='1') { echo 'bg-pentav'; } else { echo 'bg-gray';} ?>">
                                <span>Refuerzo</span><br />
                                <span>cada 10 años</span>
                                <div id="dptc_" <?php if($result[0]['dptc']!='1') { echo 'style="display: none;"'; } ?> class="mt-2">
                                    <input type="checkbox" <?php if($result[0]['dptc']=='1') { echo 'checked="checked"'; } ?> style="display: none;" name="dptc">
                                    <input placeholder="Fecha de vacunación" name="dptc_date" value="<?php echo $result[0]["dptc_date"]; ?>" class="form-control custom-input date" autocomplete="off" />
                                    <input type="text" class="form-control custom-input mt-1" name="dptc_desc" value="<?php echo utf8_encode($result[0]["dptc_desc"]); ?>" placeholder="Efectos adversos" autocomplete="off" />
                                </div>
                            </div>
                            <div id="dptc1" class="col-12 p-2 border-row <?php if($result[0]['dptc1']=='1') { echo 'bg-pentav'; } else { echo 'bg-gray';} ?>">
                                <span>Refuerzo</span><br />
                                <span>cada 10 años</span>
                                <div id="dptc1_" <?php if($result[0]['dptc1']!='1') { echo 'style="display: none;"'; } ?> class="mt-2">
                                    <input type="checkbox" <?php if($result[0]['dptc1']=='1') { echo 'checked="checked"'; } ?> style="display: none;" name="dptc1">
                                    <input placeholder="Fecha de vacunación" name="dptc1_date" value="<?php echo $result[0]["dptc1_date"]; ?>" class="form-control custom-input date" autocomplete="off" />
                                    <input type="text" class="form-control custom-input mt-1" name="dptc1_desc" value="<?php echo utf8_encode($result[0]["dptc1_desc"]); ?>" placeholder="Efectos adversos" autocomplete="off" />
                                </div>
                            </div>
                            <div id="dptc2" class="col-12 p-2 <?php if($result[0]['dptc2']=='1') { echo 'bg-pentav'; } else { echo 'bg-gray';} ?>">
                                <span>Refuerzo</span><br />
                                <span>cada 10 años</span>
                                <div id="dptc2_" <?php if($result[0]['dptc']!='1') { echo 'style="display: none;"'; } ?> class="mt-2">
                                    <input type="checkbox" <?php if($result[0]['dptc2']=='1') { echo 'checked="checked"'; } ?> style="display: none;" name="dptc2">
                                    <input placeholder="Fecha de vacunación" name="dptc2_date" value="<?php echo $result[0]["dptc2_date"]; ?>" class="form-control custom-input date" autocomplete="off" />
                                    <input type="text" class="form-control custom-input mt-1" name="dptc2_desc" value="<?php echo utf8_encode($result[0]["dptc2_desc"]); ?>" placeholder="Efectos adversos" autocomplete="off" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-5 col-sm-6 border-headmid d-md-none"></div>
                    <div class="col-7 col-sm-6 col-md-4 border-mid">
                        <div class="row text-center">
                            <div class="col-12 bg-green border-row">
                                <span class="bold-font">ESQ. INCOMPLETO</span>
                            </div>
                            <div id="dpti1" class="col-12 p-2 border-row <?php if($result[0]['dpti1']=='1') { echo 'bg-pentav'; } else { echo 'bg-gray';} ?>">
                                <span>Primera</span><br />
                                <span>dosis inicial</span>
                                <div id="dpti1_" <?php if($result[0]['dpti1']!='1') { echo 'style="display: none;"'; } ?> class="mt-2">
                                    <input type="checkbox" <?php if($result[0]['dpti1']=='1') { echo 'checked="checked"'; } ?> style="display: none;" name="dpti1">
                                    <input placeholder="Fecha de vacunación" name="dpti1_date" value="<?php echo $result[0]["dpti1_date"]; ?>" class="form-control custom-input date" autocomplete="off" />
                                    <input type="text" class="form-control custom-input mt-1" name="dpti1_desc" value="<?php echo utf8_encode($result[0]["dpti1_desc"]); ?>" placeholder="Efectos adversos" autocomplete="off" />
                                </div>
                            </div>
                            <div id="dpti2" class="col-12 p-2 border-row <?php if($result[0]['dpti2']=='1') { echo 'bg-pentav'; } else { echo 'bg-gray';} ?>">
                                <span>Segunda</span><br />
                                <span>1 mes depués de la primera dosis</span>
                                <div id="dpti2_" <?php if($result[0]['dpti2']!='1') { echo 'style="display: none;"'; } ?> class="mt-2">
                                    <input type="checkbox" <?php if($result[0]['dpti2']=='1') { echo 'checked="checked"'; } ?> style="display: none;" name="dpti2">
                                    <input placeholder="Fecha de vacunación" name="dpti2_date" value="<?php echo $result[0]["dpti2_date"]; ?>" class="form-control custom-input date" autocomplete="off" />
                                    <input type="text" class="form-control custom-input mt-1" name="dpti2_desc" value="<?php echo utf8_encode($result[0]["dpti2_desc"]); ?>" placeholder="Efectos adversos" autocomplete="off" />
                                </div>
                            </div>
                            <div id="dpti3" class="col-12 p-2 <?php if($result[0]['dpti3']=='1') { echo 'bg-pentav'; } else { echo 'bg-gray';} ?>">
                                <span>Tercera</span><br />
                                <span>12 meses posteriores a la primera dosis</span>
                                <div id="dpti3_" <?php if($result[0]['dpti3']!='1') { echo 'style="display: none;"'; } ?> class="mt-2">
                                    <input type="checkbox" <?php if($result[0]['dpti3']=='1') { echo 'checked="checked"'; } ?> style="display: none;" name="dpti3">
                                    <input placeholder="Fecha de vacunación" name="dpti3_date" value="<?php echo $result[0]["dpti3_date"]; ?>" class="form-control custom-input date" autocomplete="off" />
                                    <input type="text" class="form-control custom-input mt-1" name="dpti3_desc" value="<?php echo utf8_encode($result[0]["dpti3_desc"]); ?>" placeholder="Efectos adversos" autocomplete="off" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-5 col-sm-6 col-md-4 p-2 border-head">
                        <span class="text-royal-blue bold-font">Tétanos, Difteria y Tos ferina</span>
                    </div>
                    <div class="col-7 col-sm-6 col-md-8 border-mid">
                        <div class="row text-center">
                            <div id="dptp" class="col-12 p-2 <?php if($result[0]['dptp']=='1') { echo 'bg-hepatb'; } else { echo 'bg-gray';} ?>">
                                <span>Única</span><br />
                                <span>A partir de la semana 20 del embarazo</span>
                                <div class="row text-center">
                                    <div id="dptp_" <?php if($result[0]['dptp']!='1') { echo 'style="display: none;"'; } ?> class="offset-md-3 col-md-6 mt-2">
                                        <input type="checkbox" <?php if($result[0]['dptp']=='1') { echo 'checked="checked"'; } ?> style="display: none;" name="dptp">
                                        <input placeholder="Fecha de vacunación" name="dptp_date" value="<?php echo $result[0]["dptp_date"]; ?>" class="form-control custom-input date" autocomplete="off" />
                                        <input type="text" class="form-control custom-input mt-1" name="dptp_desc" value="<?php echo utf8_encode($result[0]["dptp_desc"]); ?>" placeholder="Efectos adversos" autocomplete="off" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-5 col-sm-6 col-md-4 p-2 border-head">
                        <span class="text-royal-blue bold-font">Influenza</span>
                    </div>
                    <div class="col-7 col-sm-6 col-md-8 border-mid">
                        <div class="row h-100 text-center">
                            <div id="influenzap" class="col-12 p-2 <?php if($result[0]['influenzap']=='1') { echo 'bg-influenza'; } else { echo 'bg-gray';} ?>">
                                <span>Única</span><br />
                                <span>Cualquier trimestre del embarazo</span>
                                <div class="row h-100 text-center">
                                    <div id="influenzap_" <?php if($result[0]['influenzap']!='1') { echo 'style="display: none;"'; } ?> class="offset-md-3 col-md-6 mt-2">
                                        <input type="checkbox" <?php if($result[0]['influenzap']=='1') { echo 'checked="checked"'; } ?> style="display: none;" name="influenzap">
                                        <input placeholder="Fecha de vacunación" name="influenzap_date" value="<?php echo $result[0]["influenzap_date"]; ?>" class="form-control custom-input date" autocomplete="off" />
                                        <input type="text" class="form-control custom-input mt-1" name="influenzap_desc" value="<?php echo utf8_encode($result[0]["influenzap_desc"]); ?>" placeholder="Efectos adversos" autocomplete="off" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-5 col-sm-6 col-md-4 p-2 border-headmid"></div>
                    <div class="col-7 col-sm-6 col-md-8 border-mid">
                        <div class="row text-center">
                            <div class="col-12 bg-green border-row">
                                <span class="bold-font">FACTORES DE RIESGO</span>
                            </div>
                            <div id="influenza" class="col-12 p-2 <?php if($result[0]['influenza']=='1') { echo 'bg-influenza'; } else { echo 'bg-gray';} ?>">
                                <span>Una dosis</span><br />
                                <span>anual</span>
                                <div id="influenza_" <?php if($result[0]['influenza']!='1') { echo 'style="display: none;"'; } ?> class="mt-2">
                                    <input type="checkbox" <?php if($result[0]['influenza']=='1') { echo 'checked="checked"'; } ?> style="display: none;" name="influenza">
                                    <div class="row text-center">
                                        <div class="col-md-6">
                                            <input placeholder="Fecha de vacunación" name="influenza_date" value="<?php echo $result[0]["influenza_date"]; ?>" class="form-control custom-input date" autocomplete="off" />
                                            <input type="text" class="form-control custom-input mt-1" name="influenza_desc" value="<?php echo utf8_encode($result[0]["influenza_desc"]); ?>" placeholder="Efectos adversos" autocomplete="off" />
                                        </div>
                                        <div class="col-md-6 mt-4 mt-md-0">
                                            <input placeholder="Fecha de vacunación" name="influenza2_date" value="<?php echo $result[0]["influenza2_date"]; ?>" class="form-control custom-input date" autocomplete="off" />
                                            <input type="text" class="form-control custom-input mt-1" name="influenza2_desc" value="<?php echo utf8_encode($result[0]["influenza2_desc"]); ?>" placeholder="Efectos adversos" autocomplete="off" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-5 col-sm-6 col-md-4 p-2 border-headmid"></div>
                    <div class="col-7 col-sm-6 col-md-8 border-mid">
                        <div class="row text-center">
                            <div id="influenza2" class="col-12 p-2 <?php if($result[0]['influenza2']=='1') { echo 'bg-influenza'; } else { echo 'bg-gray';} ?>">
                                <span>Una dosis</span><br />
                                <span>anual</span>
                                <div id="influenza2_" <?php if($result[0]['influenza2']!='1') { echo 'style="display: none;"'; } ?> class="mt-2">
                                    <input type="checkbox" <?php if($result[0]['influenza2']=='1') { echo 'checked="checked"'; } ?> style="display: none;" name="influenza2">
                                    <div class="row text-center">
                                        <div class="col-md-6">
                                            <input placeholder="Fecha de vacunación" name="influenza3_date" value="<?php echo $result[0]["influenza3_date"]; ?>" class="form-control custom-input date" autocomplete="off" />
                                            <input type="text" class="form-control custom-input mt-1" name="influenza3_desc" value="<?php echo utf8_encode($result[0]["influenza3_desc"]); ?>" placeholder="Efectos adversos" autocomplete="off" />
                                        </div>
                                        <div class="col-md-6 mt-4 mt-md-0">
                                            <input placeholder="Fecha de vacunación" name="influenza4_date" value="<?php echo $result[0]["influenza4_date"]; ?>" class="form-control custom-input date" autocomplete="off" />
                                            <input type="text" class="form-control custom-input mt-1" name="influenza4_desc" value="<?php echo utf8_encode($result[0]["influenza4_desc"]); ?>" placeholder="Efectos adversos" autocomplete="off" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-5 col-sm-6 col-md-4 p-2 border-headmid"></div>
                    <div class="col-7 col-sm-6 col-md-8 border-mid">
                        <div class="row text-center">
                            <div id="influenza3" class="col-12 p-2 <?php if($result[0]['influenza3']=='1') { echo 'bg-influenza'; } else { echo 'bg-gray';} ?>">
                                <span>Una dosis</span><br />
                                <span>anual</span>
                                <div id="influenza3_" <?php if($result[0]['influenza3']!='1') { echo 'style="display: none;"'; } ?> class="mt-2">
                                    <input type="checkbox" <?php if($result[0]['influenza3']=='1') { echo 'checked="checked"'; } ?> style="display: none;" name="influenza3">
                                    <div class="row text-center">
                                        <div class="col-md-6">
                                            <input placeholder="Fecha de vacunación" name="influenza5_date" value="<?php echo $result[0]["influenza5_date"]; ?>" class="form-control custom-input date" autocomplete="off" />
                                            <input type="text" class="form-control custom-input mt-1" name="influenza5_desc" value="<?php echo utf8_encode($result[0]["influenza5_desc"]); ?>" placeholder="Efectos adversos" autocomplete="off" />
                                        </div>
                                        <div class="col-md-6 mt-4 mt-md-0">
                                            <input placeholder="Fecha de vacunación" name="influenza6_date" value="<?php echo $result[0]["influenza6_date"]; ?>" class="form-control custom-input date" autocomplete="off" />
                                            <input type="text" class="form-control custom-input mt-1" name="influenza6_desc" value="<?php echo utf8_encode($result[0]["influenza6_desc"]); ?>" placeholder="Efectos adversos" autocomplete="off" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-5 col-sm-6 col-md-4 p-2 border-headmid"></div>
                    <div class="col-7 col-sm-6 col-md-8 border-mid">
                        <div class="row text-center">
                            <div id="influenza4" class="col-12 p-2 <?php if($result[0]['influenza4']=='1') { echo 'bg-influenza'; } else { echo 'bg-gray';} ?>">
                                <span>Una dosis</span><br />
                                <span>anual</span>
                                <div id="influenza4_" <?php if($result[0]['influenza4']!='1') { echo 'style="display: none;"'; } ?> class="mt-2">
                                    <input type="checkbox" <?php if($result[0]['influenza4']=='1') { echo 'checked="checked"'; } ?> style="display: none;" name="influenza4">
                                    <div class="row text-center">
                                        <div class="col-md-6">
                                            <input placeholder="Fecha de vacunación" name="influenza7_date" value="<?php echo $result[0]["influenza7_date"]; ?>" class="form-control custom-input date" autocomplete="off" />
                                            <input type="text" class="form-control custom-input mt-1" name="influenza7_desc" value="<?php echo utf8_encode($result[0]["influenza7_desc"]); ?>" placeholder="Efectos adversos" autocomplete="off" />
                                        </div>
                                        <div class="col-md-6 mt-4 mt-md-0">
                                            <input placeholder="Fecha de vacunación" name="influenza8_date" value="<?php echo $result[0]["influenza8_date"]; ?>" class="form-control custom-input date" autocomplete="off" />
                                            <input type="text" class="form-control custom-input mt-1" name="influenza8_desc" value="<?php echo utf8_encode($result[0]["influenza8_desc"]); ?>" placeholder="Efectos adversos" autocomplete="off" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-5 col-sm-6 col-md-4 p-2 border-headmid"></div>
                    <div class="col-7 col-sm-6 col-md-8 border-mid">
                        <div class="row text-center">
                            <div id="influenza5" class="col-12 p-2 <?php if($result[0]['influenza5']=='1') { echo 'bg-influenza'; } else { echo 'bg-gray';} ?>">
                                <span>Una dosis</span><br />
                                <span>anual</span>
                                <div id="influenza5_" <?php if($result[0]['influenza5']!='1') { echo 'style="display: none;"'; } ?> class="mt-2">
                                    <input type="checkbox" <?php if($result[0]['influenza5']=='1') { echo 'checked="checked"'; } ?> style="display: none;" name="influenza5">
                                    <div class="row text-center">
                                        <div class="col-md-6">
                                            <input placeholder="Fecha de vacunación" name="influenza9_date" value="<?php echo $result[0]["influenza9_date"]; ?>" class="form-control custom-input date" autocomplete="off" />
                                            <input type="text" class="form-control custom-input mt-1" name="influenza9_desc" value="<?php echo utf8_encode($result[0]["influenza9_desc"]); ?>" placeholder="Efectos adversos" autocomplete="off" />
                                        </div>
                                        <div class="col-md-6 mt-4 mt-md-0">
                                            <input placeholder="Fecha de vacunación" name="influenza10_date" value="<?php echo $result[0]["influenza10_date"]; ?>" class="form-control custom-input date" autocomplete="off" />
                                            <input type="text" class="form-control custom-input mt-1" name="influenza10_desc" value="<?php echo utf8_encode($result[0]["influenza10_desc"]); ?>" placeholder="Efectos adversos" autocomplete="off" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-5 col-sm-6 col-md-4 p-2 border-headend"></div>
                    <div class="col-7 col-sm-6 col-md-8 border-mid">
                        <div class="row text-center">
                            <div id="influenza6" class="col-12 p-2 border-row <?php if($result[0]['influenza6']=='1') { echo 'bg-influenza'; } else { echo 'bg-gray';} ?>">
                                <span>Una dosis</span><br />
                                <span>anual</span>
                                <div id="influenza6_" <?php if($result[0]['influenza6']!='1') { echo 'style="display: none;"'; } ?> class="mt-2">
                                    <input type="checkbox" <?php if($result[0]['influenza6']=='1') { echo 'checked="checked"'; } ?> style="display: none;" name="influenza6">
                                    <div class="row text-center">
                                        <div class="col-md-6">
                                            <input placeholder="Fecha de vacunación" name="influenza11_date" value="<?php echo $result[0]["influenza11_date"]; ?>" class="form-control custom-input date" autocomplete="off" />
                                            <input type="text" class="form-control custom-input mt-1" name="influenza11_desc" value="<?php echo utf8_encode($result[0]["influenza11_desc"]); ?>" placeholder="Efectos adversos" autocomplete="off" />
                                        </div>
                                        <div class="col-md-6 mt-4 mt-md-0">
                                            <input placeholder="Fecha de vacunación" name="influenza12_date" value="<?php echo $result[0]["influenza12_date"]; ?>" class="form-control custom-input date" autocomplete="off" />
                                            <input type="text" class="form-control custom-input mt-1" name="influenza12_desc" value="<?php echo utf8_encode($result[0]["influenza12_desc"]); ?>" placeholder="Efectos adversos" autocomplete="off" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="offset-0 offset-lg-3 offset-md-2 offset-sm-2 col-12 col-sm-8 col-md-8 col-lg-6 mt-4 vertical-margin-bottom">
                        <center>
                            <button class="btn my-2 my-sm-0 custom-btn-save" type="submit">
                                <span class="text-white bold-font custom-btn-save-text">Guardar</span>
                            </button>
                        </center>
                    </div>
                </div>
            </form>
        </div>
    </div>
  </div>
</body>

</html>