<?php include 'head.html'?>

      <!-- Breadcrumbs-->
      <section class="breadcrumbs-custom">
        <div class="shell">
          <p class="breadcrumbs-custom-subtitle"></p>
          <p class="heading-1 breadcrumbs-custom-title">Contáctanos</p>
          <ul class="breadcrumbs-custom-path">
            <li><a href="index.php">Inicio</a></li>
            <li class="active">Contáctanos</li>
          </ul>
        </div>
      </section>

      <section class="section section-lg bg-white text-sm-left">
        <div class="shell-wide">
          <div class="range range-sm-center">
            <div class="cell-lg-11 cell-xl-8">
              <div class="range range-sm-center range-lg-justify range-50">
                <div class="cell-sm-10 cell-md-8">
                  <h2>Ponte en contacto</h2>
                  <p>Puedes contactarnos de cualquier manera que sea conveniente para ti. 
				  Estamos disponibles través de número celular o correo electrónico. 
				  También puedes utilizar un formulario de contacto rápido a continuación o visitar nuestra oficina de <a href="https://www.facebook.com/FJNPage/"> facebook.</a></p>
                  <!-- RD Mailform-->
                  <form class="rd-mailform text-left" data-form-output="form-output-global" 
				  data-form-type="contact" method="post" 
				  action="rd-mailform.php" novalidate="novalidate">
                    <div class="range range-15">
                      <div class="cell-sm-6">
                        <div class="form-wrap form-wrap-validation">
                          <label class="form-label form-label-outside rd-input-label" for="forms-name">Primer nombre</label>
                          <input class="form-input form-control-has-validation form-control-last-child" id="forms-name" type="text" name="name" data-constraints="@Required"><span class="form-validation"></span>
                        </div>
                      </div>
                      <div class="cell-sm-6">
                        <div class="form-wrap form-wrap-validation">
                          <label class="form-label form-label-outside rd-input-label" for="forms-last-name">Segundo nombre</label>
                          <input class="form-input form-control-has-validation form-control-last-child" id="forms-last-name" type="text" name="last-name" ><span class="form-validation"></span>
                        </div>
                      </div>
                      <div class="cell-sm-6">
                        <div class="form-wrap form-wrap-validation">
                          <label class="form-label form-label-outside rd-input-label" for="forms-email">E-mail</label>
                          <input class="form-input form-control-has-validation form-control-last-child" id="forms-email" type="email" name="email" data-constraints="@Email"><span class="form-validation"></span>
                        </div>
                      </div>
                      <div class="cell-sm-6">
                        <div class="form-wrap form-wrap-validation">
                          <label class="form-label form-label-outside rd-input-label" for="forms-phone">Teléfono</label>
                          <input class="form-input form-control-has-validation form-control-last-child" id="forms-phone" type="text" name="phone" ><span class="form-validation"></span>
                        </div>
                      </div>
                      <div class="cell-sm-12">
                        <div class="form-wrap form-wrap-validation">
                          <label class="form-label form-label-outside rd-input-label" for="forms-comments">Mensaje</label>
                          <textarea class="form-input form-control-has-validation form-control-last-child" id="forms-comments" name="comments" ></textarea>
						  <span class="form-validation"></span>
                        </div>
                      </div>
                    </div>
                    <div class="form-button">
                      <button class="button button-secondary" type="submit"><span>Enviar</span></button>
                    </div>
                  </form>
                </div>
                <div class="cell-sm-10 cell-md-4 cell-lg-3 text-left">
                  <ul class="list-lg list-contact contact-aside">
                    <li>
                      <h5>Redes Sociales</h5>
                      <ul class="list-inline list-inline-sm">
                        <li><a class="icon icon-sm icon-gray-light fa-facebook" href="https://www.facebook.com/FJNPage/" target="_blank">&nbsp;&nbsp;&nbsp;Facebook</a></li>
                        <!--li><a class="icon icon-sm icon-gray-light fa-twitter" href="https://livedemo00.template-help.com/wt_prod-2269/contacts.html#"></a></li>
                        <li><a class="icon icon-sm icon-gray-light fa-instagram" href="https://livedemo00.template-help.com/wt_prod-2269/contacts.html#"></a></li>
                        <li><a class="icon icon-sm icon-gray-light fa-google-plus" href="https://livedemo00.template-help.com/wt_prod-2269/contacts.html#"></a></li>
                        <li><a class="icon icon-sm icon-gray-light fa-pinterest" href="https://livedemo00.template-help.com/wt_prod-2269/contacts.html#"></a></li>
                        <li><a class="icon icon-sm icon-gray-light fa-linkedin" href="https://livedemo00.template-help.com/wt_prod-2269/contacts.html#"></a></li-->
                      </ul>
                    </li>
                    <li>
                      <h5>Dirección</h5>
                      <div class="box-inline"><span class="icon icon-secondary mdi mdi-map-marker"></span>
                        <ul>
                          <li><a href="">Manzana F casa 10</a></li>
                          <li><a href="">Municipio de Toca</a></li>
						  <li><a href="">Boyacá - Colombia</a></li>
                        </ul>
                      </div>
                    </li>
                    <li>
                      <h5>Telefonos</h5>
                      <div class="box-inline"><span class="icon icon-secondary mdi mdi-phone"></span>
                        <ul>
                          <li><a href="tel:#">Cel (+57) 3124427159</a></li>
                          <li><a href="tel:#">Cel (+57) 3125429709</a></li>
                        </ul>
                      </div>
                    </li>
                    <li>
                      <h5>E-mail</h5>
                      <div class="box-inline"><span class="icon icon-secondary mdi mdi-email-open"></span><a href="mailto:#">fundnazareth0146@gmail.com</a></div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
                
<?php include 'footer.html'?>
