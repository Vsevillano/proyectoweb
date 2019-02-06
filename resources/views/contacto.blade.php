@extends('master')
  @section('title', 'Inicio')
  @section('content')  
    <!-- Page Content -->
    <div class="container">

      <!-- Page Heading/Breadcrumbs -->
      <h1 class="mt-4 mb-3">Contacto
        <small>Vsevillano</small>
      </h1>

      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="/">Inicio</a>
        </li>
        <li class="breadcrumb-item active">Contacto</li>
      </ol>

      <!-- Content Row -->
      <div class="row">
        <!-- Map Column -->
        <div class="col-lg-8 mb-4">
          <!-- Embedded Google Map -->
          <iframe width="100%" height="400px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d50378.5958948592!2d-4.8195047640926285!3d37.89158081286656!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd6cdf26f95e0aef%3A0x4df1d2e8108456c3!2zQ8OzcmRvYmE!5e0!3m2!1ses!2ses!4v1549441239419"></iframe>
        </div>
        <!-- Contact Details Column -->
        <div class="col-lg-4 mb-4">
          <h3>Detalles de contacto</h3>
          <p>
            Calle Rivas y Palma, Córdoba (14001)
            <br>
          </p>
          <p>
            <abbr title="Teléfono">T</abbr>: 647742589
          </p>
          <p>
            <abbr title="Email">E</abbr>:
            <a href="mailto:victorianosevillano@gmail.com">victorianosevillano@gmail.com
            </a>
          </p>
          <p>
            <abbr title="Fecha de nacimiento">F.N</abbr>: 27 de Abril de 1991
          </p>
        </div>
      </div>
      <!-- /.row -->

      <!-- Contact Form -->
      <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
      <div class="row">
        <div class="col-lg-8 mb-4">
          <h3>Enviar correo electrónico</h3>
          <form name="sentMessage" id="contactForm" novalidate>
            <div class="control-group form-group">
              <div class="controls">
                <label>Nombre completo:</label>
                <input type="text" class="form-control" id="name" required data-validation-required-message="Por favor, escriba su nombre.">
                <p class="help-block"></p>
              </div>
            </div>
            <div class="control-group form-group">
              <div class="controls">
                <label>Teléfono:</label>
                <input type="tel" class="form-control" id="phone" required data-validation-required-message="Por favor, escriba su número de teléfono.">
              </div>
            </div>
            <div class="control-group form-group">
              <div class="controls">
                <label>Correo electrónico:</label>
                <input type="email" class="form-control" id="email" required data-validation-required-message="Por favor, escriba su correo electrónico.">
              </div>
            </div>
            <div class="control-group form-group">
              <div class="controls">
                <label>Mensaje:</label>
                <textarea rows="10" cols="100" class="form-control" id="message" required data-validation-required-message="Por favor, escriba su mensaje." maxlength="999" style="resize:none"></textarea>
              </div>
            </div>
            <div id="success"></div>
            <!-- For success/fail messages -->
            <button type="submit" class="btn btn-primary" id="sendMessageButton">Enviar mensaje</button>
          </form>
        </div>

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->
@endsection