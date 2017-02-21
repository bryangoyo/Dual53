@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Oferta Alumno
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($ofertaAlumno, ['route' => ['ofertaAlumnos.update', $ofertaAlumno->id], 'method' => 'patch']) !!}

                        @include('oferta_alumnos.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection