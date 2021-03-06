@extends('components.layout')

@section('title', 'Bombas')

@section('content')

     <!-- Conteúdo da página --> 
 <div id="conteudo" class="container">

    <div id="box" class="d-flex mx-4 my-2 fs-5 justify-content-center">
        <ul class="list-group">
            <li class="list-group">ID:                   {{ $posto->id }}                  </li>
            <li class="list-group">CNPJ:                 {{ $posto->cnpj }}                </li>
            <li class="list-group">Nome:                 {{ $posto->name }}                </li>
            <li class="list-group">Contrato - CNPJ:      {{ $posto->contrato->cnpj }}      </li>
            <li class="list-group">Contrato - Nome:      {{ $posto->contrato->name }}      </li>
            <li class="list-group">Contrato - ID:        {{ $posto->contrato->id }}        </li>
            <li class="list-group">Email:                {{ $posto->email }}               </li>
            <li class="list-group">Celular:              {{ $posto->cell }}                </li>
            <li class="list-group">Telefone:             {{ $posto->tel }}                 </li>
            <li class="list-group">Endereço:             {{ $posto->address }}             </li>
            
            <li class="list-group">
            @foreach ($posto->bomba as $value)
                {{ $value->name }} :
    
                <li class="list-group">
                @foreach ($value->bico as $value2 )
                    {{ $value2->name }} </br>
                @endforeach
                </li>
            @endforeach
            </li>

            <li class="list-group">Ciclo do Turno:       {{ $posto->cicloTurno }}          </li>
            <li class="list-group">Criação:              {{ Carbon\Carbon::parse($posto->create_at)->format('d/m/Y H:i') }} </li>
            <li class="list-group">Última modificação:   {{ Carbon\Carbon::parse($posto->update_at)->format('d/m/Y H:i') }} </li>
        </ul>
        </div>

<div class="container w-75">
        <div id="box" class="d-flex justify-content-lg-around">
                <a href="{{ URL::to('contrato/') }}" class="btn bg-navy-blue text-magnolia col-4">Contratos</a>
        <!-- Botões para editar e excluir -->
        <div id="box" class="d-flex">
            <!-- botão de editar-->
            <a class="text-decoration-none align-self-center" href="{{ URL::to('posto/' . $posto->id . '/edit') }}">
                <svg width="20" height="22" viewBox="0 0 20 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M18.8423 0.921977C17.3961 -0.394177 15.1486 -0.288647 13.8318 1.15818L2.54694 13.5931L0 21.6201L7.76626 18.3597L19.0778 5.93202C20.3942 4.48589 20.2885 2.23841 18.8423 0.921977V0.921977ZM12.0145 4.70254L12.7003 5.32675L4.4085 14.4366L3.73719 13.8234L12.0145 4.70254ZM13.4665 6.02422L14.267 6.75278L5.97259 15.8656L5.17352 15.1355L13.4665 6.02422ZM1.66548 19.7971L2.34714 17.6487L3.71219 18.9379L1.66548 19.7971ZM4.75692 18.4993L2.69502 16.5521L3.25527 14.7865L6.51246 17.7623L4.75692 18.4993ZM7.42639 17.1937L6.73754 16.5644L15.0332 7.45026L15.7232 8.07826L7.42639 17.1937ZM18.3116 5.23454L16.4207 7.31199L12.7108 3.93524L14.5986 1.8551C15.5304 0.831365 17.1212 0.756569 18.1449 1.68831C19.1685 2.62006 19.2433 4.21095 18.3116 5.23454Z" fill="#060A6F"/>
                </svg>
            </a>
            <!-- botão de excluir -->
            {{ Form::open(array('url' => 'posto/' . $posto->id, 'onsubmit' => 'return ConfirmDelete()','class' => 'align-self-center' ))}}     
            {{ Form::hidden('_method', 'DELETE') }}
            {{ Form::button('<svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M20.3015 2.83579H16.201V2.14326C16.2011 0.961426 15.2396 0 14.0578 0H10.9419C9.76011 0 8.79863 0.961426 8.79863 2.14326V2.83584H4.69824C3.26562 2.83584 2.1001 4.00137 2.1001 5.43398V6.92158C2.1001 7.19121 2.31875 7.40986 2.58838 7.40986H3.97495L5.21313 22.1123C5.27964 22.902 5.6375 23.6321 6.2209 24.1684C6.80425 24.7046 7.56187 25 8.3543 25H16.6455C17.4379 25 18.1955 24.7046 18.7789 24.1684C19.3622 23.6321 19.7201 22.9019 19.7866 22.1123L21.0248 7.40986H22.4113C22.681 7.40986 22.8996 7.19121 22.8996 6.92158V5.43398C22.8996 4.00132 21.7341 2.83579 20.3015 2.83579V2.83579ZM9.7752 2.14326C9.7752 1.49995 10.2986 0.976562 10.9419 0.976562H14.0578C14.7011 0.976562 15.2245 1.49995 15.2245 2.14326V2.83584H9.7752V2.14326ZM21.923 6.43325H14.663C14.3934 6.43325 14.1747 6.6519 14.1747 6.92153C14.1747 7.19116 14.3934 7.40981 14.663 7.40981H20.0447L18.8134 22.0304C18.7193 23.148 17.767 24.0234 16.6455 24.0234H8.3543C7.23271 24.0234 6.28042 23.1479 6.18633 22.0304L4.95503 7.40981H10.3663C10.6359 7.40981 10.8546 7.19116 10.8546 6.92153C10.8546 6.6519 10.6359 6.43325 10.3663 6.43325H3.07666V5.43394C3.07666 4.53975 3.80405 3.81235 4.69824 3.81235H20.3015C21.1957 3.81235 21.9231 4.53975 21.9231 5.43394V6.43325H21.923Z" fill="#060A6F"/>
                <path d="M9.71444 11.2008C9.52372 11.0102 9.21464 11.0102 9.02386 11.2008C8.83319 11.3915 8.83319 11.7006 9.02386 11.8914L11.8091 14.6766L9.02386 17.4618C8.83319 17.6524 8.83319 17.9616 9.02386 18.1523C9.11923 18.2477 9.24418 18.2954 9.36913 18.2954C9.49408 18.2954 9.61903 18.2477 9.71439 18.1523L12.4996 15.3671L15.2848 18.1523C15.3802 18.2476 15.5052 18.2953 15.6301 18.2953C15.7551 18.2953 15.88 18.2476 15.9754 18.1523C16.1661 17.9616 16.1661 17.6524 15.9754 17.4617L13.1902 14.6765L15.9754 11.8913C16.1661 11.7006 16.1661 11.3915 15.9754 11.2007C15.7847 11.0101 15.4756 11.0101 15.2848 11.2007L12.4996 13.986L9.71444 11.2008Z" fill="#060A6F"/>
                <path d="M12.098 7.10839C12.2004 7.35395 12.489 7.47421 12.7352 7.37255C12.9813 7.27094 13.1009 6.98046 12.9994 6.7348C12.8978 6.48886 12.6075 6.36894 12.3617 6.47064C12.1151 6.5727 11.9973 6.86249 12.098 7.10839Z" fill="#060A6F"/>
                </svg>
                ', ['type' => 'submit', 'class' => 'btn btn-warning btn-sm'] )  }}
            {{ Form::close() }}
            </div>
    </div>

</div>

@endsection