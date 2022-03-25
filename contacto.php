<?php
include_once('header.php');
?>

<!--Start Banner-->
<div class="sub-banner" style="margin-top: 10px;">

    <!--    <img class="banner-img" src="images/sub-banner.jpg" alt="">-->

    <div class="detail">
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <div class="paging">
                        <h2>Contactanos</h2>
                        <ul>
                            <li><a href="index.php">Home</a></li>
                            <li><a>Contactanos</a></li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>

</div>

<!--End Banner-->


<!--Start Content-->
<div class="content">

    <div class="contact-us">

        <!-- formulario-->
        <div class="leave-msg dark-back">
            <div class="container">

                <div class="rox">

                    <div class="col-md-12">

                        <div class="main-title">
                            <h2><span>Dejanos tu</span> consulta</h2>
                        </div>

                        <div class="form" text-align="center">
                            <div class="row">
                                <p class="success" id="success" style="display:none;"></p>
                                <p class="error" id="error" style="display:none;"></p>
                                <form name="contact_form" id="contact_form" method="post" action="#" onSubmit="return false" text-align="center">
                                    <div class="col-md-6 ">Nombre y apellido<input type="text" data-delay="300" placeholder="Nombre y apellido" name="contact_name" id="contact_name" class="input"></div>
                                    <div class="col-md-6">Teléfono<input type="number" data-delay="300" placeholder="Teléfono" name="contact_phone" id="contact_phone" class="input"></div>
                                    <div class="col-md-6">Email<input type="email" data-delay="300" placeholder="Email" name="contact_email" id="contact_email" class="input"></div>
                                    <div class="col-md-6">
                                        <select data-delay="300" name="contact_service" id="contact_service" class="custom-select input">
                                            <option selected value="0">Seleccionar servicio</option>
                                            <option value="Linti">Linti</option>
                                            <option value="Exámenes de salud">Exámenes de salud</option>
                                            <option value="Control de ausentismo">Control de ausentismo</option>
                                            <option value="Medicina legal">Medicina legal</option>
                                            <option value="Otros">Otros</option>
                                        </select>
                                    </div>
                                    <div class="col-md-12">¿En qué podemos ayudarte?<textarea data-delay="500" class="required valid" placeholder="¿En qué podemos ayudarte?" name="message" id="message"></textarea></div>
                                    <div class="col-md-4"><input name=" " type="submit" value="Enviar" onClick="validateContact();"></div>
                                </form>

                            </div>
                        </div>


                    </div>
        <!-- Mapa-->
        <div class="container">

            <div class="row">
                <div class="col-md-12">

                    <div class="our-location">
                    <div class="main-title">
                            <h4>Dónde estamos</h4>
                            </div>
                        <div class="map">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13129.432769326482!2d-58.373279!3d-34.6456559!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xa15a8c2894379447!2sADS+SALUD!5e0!3m2!1sen!2sar!4v1455805186651" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div>
                    </div>

                </div>
            </div>

        </div>
        <!-- cierra mapa-->
                    <div class="col-md-12" align="justify">
                        <br>
                        <br>
                        <br>
                        <hr>
                        <div class="contact-get">
                            <div class="main-title">
                            <h4>Contacto</h4>
                            </div>
                            <div class="get-in-touch">
                                <div class="detail">
                                    <span><b>Direcci&oacute;n:</b> Av. Montes de Oca 1615/19 - Ciudad Autónoma de Buenos Aires.</span>
                                    <span><b>Tel&eacute;fono:</b> (011) 4303-2070/68</span>
                                    <span><b>Fax:</b> (+5411) 4303-2070</span>
                                    <span><b>Horario de atenci&oacute;n:</b> Lunes a Viernes de 7:00 a 17:00 hs</span>
                                    <span><b>Email:</b> <a href="#.">info@adssalud.com.ar /adssalud@gmail.com</a></span>

                                </div>

                            </div>
                        </div>


                    </div>

                </div>
            </div>

        </div>

    </div>
    <!--End Content-->




</div>

<a href="#0" class="cd-top"></a>


<?php
include_once('scripts.php')
?>
<script>
    $("#contacto").addClass("item-select")
</script>
</body>

</html>