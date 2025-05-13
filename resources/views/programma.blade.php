@extends('layouts.app')

@section('title', 'Programma')

@section('main-content')
<main class="container py-5">
  <!-- Intestazione -->
  <section class="text-center mb-5">
    <h1 class="display-4">Il Programma dell'Evento</h1>
    <p class="lead">Scopri tutte le attività della giornata!</p>
  </section>

  <!-- Layout a due colonne -->
  <div class="container-programma-evento">
    
    <!-- Colonna sinistra: Programma -->
    
      <div class="shadow p-4 bg-white rounded">
        <h3 class="mb-4 text-warning">Programma della Giornata</h3>
        <ul class="list-group list-group-flush">
          <li class="list-group-item"><strong>10:00</strong> - Apertura cancelli</li>
          <li class="list-group-item"><strong>11:00</strong> - Laboratorio artistico</li>
          <li class="list-group-item"><strong>13:00</strong> - Pranzo condiviso</li>
          <li class="list-group-item"><strong>15:00</strong> - DJ set</li>
          <li class="list-group-item"><strong>18:00</strong> - Live band</li>
          <li class="list-group-item"><strong>21:00</strong> - Chiusura</li>
        </ul>
      </div>
    

    <!-- Colonna destra: Immagini -->
    <div class="mappa">
  <div class="img-mappa">
    <img src="https://www.masseriaferraioli.org/wp-content/uploads/2024/09/WhatsApp-Image-2024-09-30-at-16.34.23-1024x732.jpeg" 
         alt="Evento 1" 
         class="img-fluid w-100 rounded shadow-sm">
  </div>
</div>


  </div>

  <div class="footer-logo-container">
    <div class="container">
      <img class="img-ferraioli" src="https://www.masseriaferraioli.org/wp-content/uploads/2024/10/cropped-cropped-cropped-MasseriaFerraioli-2-252x74.png" alt="Logo Masseria Ferraioli">
    </div>
  </div>
</main>
@endsection
