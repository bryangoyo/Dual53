
<li class="{{ Request::is('industrias*') ? 'active' : '' }}">
    <a href="{!! route('industrias.index') !!}"><i class="fa fa-edit"></i><span>industrias</span></a>
</li>

<li class="{{ Request::is('testings*') ? 'active' : '' }}">
    <a href="{!! route('testings.index') !!}"><i class="fa fa-edit"></i><span>testings</span></a>
</li>

<li class="{{ Request::is('ofertas*') ? 'active' : '' }}">
    <a href="{!! route('ofertas.index') !!}"><i class="fa fa-edit"></i><span>ofertas</span></a>
</li>

<li class="{{ Request::is('ofertaAlumnos*') ? 'active' : '' }}">
    <a href="{!! route('ofertaAlumnos.index') !!}"><i class="fa fa-edit"></i><span>ofertaAlumnos</span></a>
</li>

