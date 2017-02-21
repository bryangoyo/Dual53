@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Industria
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($industria, ['route' => ['industrias.update', $industria->id], 'method' => 'patch']) !!}

                        @include('industrias.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection