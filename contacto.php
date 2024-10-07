<?php

include "header.php";
if (isset($_POST['enviar'])){
    print_r($_POST);
    
  }
  
?>

<main class="main">
 


    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">




        <img src="assets/img/fondo-contacto.png" alt="" data-aos="fade-in">

        <div class="container text-center" data-aos="fade-up" data-aos-delay="100">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <br><br>
                    <h2>Contáctanos</h2>
                    <br><br><br><br><br><br><br><br><br><br><br><br>
                    <p>Si tienes alguna pregunta, necesitas asesoramiento personalizado o deseas solicitar un presupuesto para tu proyecto de reforma, no dudes en ponerte en contacto con nosotros. Nuestro equipo de expertos está siempre disponible para brindarte la atención y el soporte que necesitas. ¡Estamos aquí para hacer realidad tus sueños de hogar!</p>

                </div>
            </div>
        </div>

    </section><!-- /Hero Section -->

 <!-- Formulario de CONTACTO -->
 <section id="contact" class="contact section" style="margin-top: -85px;">
            <div class="container section-title" data-aos="fade-up">
                  <!-- Servicios Título-->
  <div class="container section-title" data-aos="fade-up">
        <span class="description-title">Pide tu presupuesto</span>
        <h2>Pide tu presupuesto</h2>
        
      </div><!-- End Servicios Título -->
             
                <p>Llena el fomulario y nos pondremos en contacto contigo lo antes posible</p>
            </div><!-- End Section Title -->
            <!-- Contact Section -->

            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="300">
                    <div class="row gy-4">

                        <div class="col-md-6">
                            <input type="text" name="name" class="form-control" placeholder="Tu nombre" required="">
                        </div>

                        <div class="col-md-6 ">
                            <input type="email" class="form-control" name="email" placeholder="Tu Email" required="">
                        </div>

                        <div class="col-md-12">
                            <input type="text" class="form-control" name="subject" placeholder="Motivo" required="">
                        </div>

                        <div class="col-md-12">
                            <textarea class="form-control" name="message" rows="6" placeholder="Escribe tu mensaje" required=""></textarea>
                        </div>

                        <div class="col-md-12 text-center">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Tu mensaje ha sido enviado con éxito.¡Muchas gracias! En breve nos ponemos en contacto contigo.</div>

                            <button type="submit" name="enviar">Enviar mensaje</button>
                        </div>

                    </div>
                </form><!-- End Contact Form -->

            </div>

        </section><!-- /Contact Section -->


    <!-- Contact Section -->
    <section id="contact" class="contact section">
            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="info-wrap" data-aos="fade-up" data-aos-delay="200">
                    <div class="row gy-5">

                        <div class="col-lg-4">
                            <div class="info-item d-flex align-items-center">
                                <a href="https://www.google.es/maps/place/C.+de+Concha+Velasco,+2,+47007+Valladolid/@41.6351506,-4.741346,17z/data=!3m1!4b1!4m5!3m4!1s0xd476d3a99c80c33:0x870d3f182654efc!8m2!3d41.6351466!4d-4.7387711?entry=ttu&g_ep=EgoyMDI0MDkyOS4wIKXMDSoASAFQAw%3D%3D"><i class="bi bi-geo-alt flex-shrink-0"></i></a>
                                <div>
                                    <h3>Dirección</h3>
                                    <p>Calle Concha Velasco, 2. Valladolid</p>
                                </div>
                            </div>
                        </div><!-- End Info Item -->

                        <div class="col-lg-4">
                            <div class="info-item d-flex align-items-center">
                                <a href="https://web.whatsapp.com/"><i class="bi bi-telephone flex-shrink-0"></i></a>
                                <div>
                                    <h3>LLámanos aquí</h3>
                                    <p>+34 610244470</p>
                                </div>
                            </div>
                        </div><!-- End Info Item -->

                        <div class="col-lg-4">
                            <div class="info-item d-flex align-items-center">
                                <a href="https://accounts.google.com/"><i class="bi bi-envelope flex-shrink-0"></i></a>
                                <div>
                                    <h3>Email</h3>
                                    <p>terceroscarolinan@gmail.com</p>
                                </div>
                            </div>
                        </div><!-- End Info Item -->
                    </div>
                </div>
            </div>
        </section>




</main>
<?php
include "footer.php";

?>