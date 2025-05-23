@extends('layouts.app')

@section('title', 'Testimonios')

@section('content')

   <!-- Breadcrumbs -->
   {{ Breadcrumbs::render('testimonios') }}
   <!-- --------- -->

   <h1 class="neon-text" title="TESTIMONIOS">TESTIMONIOS</h1>

   <main>
      <section class="testimonios">
         <div class="testimonios-container">
            <div class="testimonio">
               <img src="images/personas/persona1.jpg" alt="Testimonio 1">
               <div class="contenido">
                  <h2  title="María González">María González</h3>
                  <p>Gracias a Urfuture encontré las velas pacificadoras perfectos para equilibrar mi vida. La compra fue fácil y el servicio excelente.</p>
               </div>
            </div>
            <div class="testimonio">
               <img src="images/personas/persona2.jpg" alt="Testimonio 2">
               <div class="contenido">
                  <h2  title="Carlos Ramirez">Carlos Ramírez</h3>
                  <p>Las perlas aromáticas me ayudaron en mi proceso de meditación. La calidad es increíble y el envío fue rápido.</p>
               </div>
            </div>
            <div class="testimonio">
               <img src="images/personas/persona3.jpg" alt="Testimonio 3">
               <div class="contenido">
                  <h2 title="Ana Lopez">Ana López</h3>
                  <p>Compré un tarot y superó mis expectativas. Definitivamente volveré a comprar en Urfuture.</p>
               </div>
            </div>
            <div class="testimonio">
               <img src="images/personas/persona4.jpg" alt="Testimonio 4">
               <div class="contenido">
                  <h2 title="Javier Martinez">Javier Martínez</h3>
                  <p>Los libros, especificamente "The eye in ur hand" ha cambiado mi vida. Excelente calidad y gran atención al cliente.</p>
               </div>
            </div>
            <div class="testimonio">
               <img src="images/personas/persona5.jpg" alt="Testimonio 5">
               <div class="contenido">
                  <h2 title="Laura Fernandez">Laura Fernández</h3>
                  <p>Las velas pacificadoras que compré en Urfuture me han ayudado a relajarme y atraer buenas energías a mi hogar.</p>
               </div>
            </div>
            <div class="testimonio">
               <img src="images/personas/persona6.jpg" alt="Testimonio 6">
               <div class="contenido">
                  <h2 title="Pedro Sanchez">Pedro Sánchez</h3>
                  <p>Gracias a la guia de tarot que compre en Urfuture, aprendí a interpretar el tarot y ahora ayudo a muchas personas con mis lecturas.</p>
               </div>
            </div>
            <div class="testimonio">
               <img src="images/personas/persona7.jpg" alt="Testimonio 7">
               <div class="contenido">
                  <h2  title="Elena Rivas">Elena Rivas</h3>
                  <p>El agua de afrodita que compré en Urfuture realmente ha sido un "iman de humanos" y me ha ayudado a encontrar a mi persona ideal. ¡Increíble experiencia!</p>
               </div>
            </div>
         </div>
      </section>
   </main>   

   @endsection