<?php
@include "assets/php/templates/layout/head.php";
@include "assets/php/templates/layout/navbar.php";
?>
	<link rel="stylesheet" href="/ACAD_MMI/assets/css/pages/contact_style.css">
<section id="contact">
            <div class="container">

                <div class="row" id="info">
                    <div class="col">
                        <div>
                            <i class="bx bx-map"></i>
                            <h3>Notre Adresse</h3>
                            <p>France, Nancy, 54000</p>
                        </div>
                    </div>

                    <div class="col">
                        <div>
                            <i class="bx bx-envelope"></i>
                            <h3>Email</h3>
                            <a href="mailto:alteretcomm.contact@gmail.com">alteretcomm.contact@gmail.com</a>
                        </div>
                    </div>

                    <div class="col">
                        <div>
                            <i class="bx bx-phone-call"></i>
                            <h3>Pour nous contacter</h3>
                            <a href="tel:+330632141688">+33 06 32 14 16 88</a>
                        </div>
                    </div>

                </div>

                <div class="row">

                    <div class="col">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d21070.806416789845!2d6.162109090912707!3d48.68921711829581!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4794986e17a692cd%3A0x4ed671b10d82498d!2sNancy!5e0!3m2!1sfr!2sfr!4v1713518909425!5m2!1sfr!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>


                    <div class="col" id="formulaire">
                        <div>
                            <h2>Envoyez moi un message</h2>
                        </div>
                        <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                            <div class="row">
                                <div class=" form-group">
                                    <input type="text" name="name" class="form-control" id="name" placeholder="Votre nom" required>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="text" id="sujet" class="form-control" name="subject" id="subject" placeholder="Sujet" required>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                            </div>
                            <div class="text-center"><button type="submit">Send Message</button></div>
                        </form>
                    </div>

                </div>

            </div>
        </section>

<?php
@include "assets/php/templates/layout/footer.php";
?>