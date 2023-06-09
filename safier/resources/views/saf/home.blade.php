@extends('saf.layout')
@section('containt')
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex justify-content-center align-items-center">
    <div class="container position-relative" data-aos="zoom-in" data-aos-delay="100">
      <h1>Doing Today,<br>Achiving Tomorrow</h1>
      <h2>We are team of talented technicians making cutting edge Technology.</h2>
      <a href="courses.html" class="btn-get-started">Get Started</a>
    </div>
  </section><!-- End Hero -->
  @include('saf.about')
  @include('saf.count')
  @include('saf.whyus')
  @include('saf.deal')
  @include('saf.training')
@endsection
