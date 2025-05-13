@extends('layouts.app')

@section('page-title', 'home')

@section('main-content')
<main>


  <!-- Hero Section -->
  <section class="section-fixed bg-dark text-white">
    <div class="section-content">
      <h1 class="display-6 mb-3">Festa alla Masseria</h1>
      <p class="lead mb-4">Una giornata di musica, arte e cultura ad Afragola</p>
      <a href="{{ route('programma') }}" class="btn btn-warning btn-lg shadow">Scopri il Programma</a>
    </div>
  </section>

  <!-- Highlights Section -->
  <section class="section-fixed bg-light text-dark">
    <div class="section-content">
      <h2 class="text-warning fw-bold mb-4">Cosa troverai</h2>
      <div class="d-flex flex-column gap-3">
        <div class="p-3 bg-white rounded shadow-sm">
          <h3>🎵 Musica</h3>
          <p>DJ set, live band, jam session per tutto il giorno.</p>
        </div>
        <div class="p-3 bg-white rounded shadow-sm">
          <h3>🖌️ Arte</h3>
          <p>Installazioni, performance e workshop creativi.</p>
        </div>
        <div class="p-3 bg-white rounded shadow-sm">
          <h3>🌿 Natura</h3>
          <p>Un’oasi verde per rilassarsi, ballare e condividere.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- CTA Section -->
  <section class="section-fixed bg-dark text-white">
    <div class="section-content">
      <h2 class="fw-bold mb-3">Ti aspettiamo!</h2>
      <p class="lead mb-4">Scopri come partecipare, cosa portare, e come arrivare alla Masseria.</p>
      <a href="{{ route('contatti') }}" class="btn btn-warning btn-lg shadow">i nostri contatti</a>
    </div>
  </section>

</main>


@endsection
