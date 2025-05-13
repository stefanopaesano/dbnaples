@extends('layouts.app')

@section('title', 'Programma')

@section('main-content')


   <!-- CONTENUTO -->


  <!-- HEADER -->
<header class="bg-dark text-white py-3">
  <div class="container d-flex justify-content-between align-items-center">
    <h1 class="mb-0 fs-4 text-uppercase">keyfest</h1>
  </div>
</header>

<!-- CONTENUTO PAGINA CONTATTI -->

<!-- Sezione full width: Contattaci -->
<section class="container-fluid bg-white py-5">
  <div class="container text-center">
    <h1 class="display-5 text-warning">Contattaci per l'Evento!</h1>
    <p class="text-secondary">Siamo sponsor ufficiali: scopri come partecipare</p>
  </div>
</section>

<!-- Sezione 2 colonne: Info + Mappa -->
<section class="container-fluid bg-light py-5">
  <div class="container">
    <div class="row g-4">
      <!-- Colonna sinistra: Info contatti -->
      <div class="col-md-6">
        <div class="bg-white p-4 rounded shadow-sm h-100">
          <h5 class="text-dark mb-3">📍 Dove siamo</h5>
          <p class="text-muted">Via degli Esempi, 123<br>Milano, MI</p>

          <h5 class="text-dark mt-4 mb-3">📞 Contatti</h5>
          <p class="text-muted">Email: info@azienda.com<br>Tel: +39 012 345 6789</p>
        </div>
      </div>

      <!-- Colonna destra: Mappa -->
      <div class="col-md-6">
        <div class="ratio ratio-4x3 rounded shadow-sm overflow-hidden">
          <iframe 
            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d48242.21090582413!2d14.304895!3d40.912716!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x133ba9adbbb6d78d%3A0xe70a853b0b9d033a!2sMasseria%20Antonio%20Esposito%20Ferraioli!5e0!3m2!1sit!2sus!4v1747151579573!5m2!1sit!2sus" 
            style="border:0;" 
            allowfullscreen="" 
            loading="lazy" 
            referrerpolicy="no-referrer-when-downgrade">
          </iframe>
        </div>
      </div>
    </div>
  </div>
</section>





@endsection