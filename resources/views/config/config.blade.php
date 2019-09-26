@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row d-flex justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header card-header-tabs card-header-info">
                        <div class="nav-tabs-navigation">
                            <div class="nav-tabs-wrapper">
                                <span class="nav-tabs-title font-weight-bold text-dark">Configurações:</span>
                                <ul class="nav nav-tabs" data-tabs="tabs">
                                    <li class="nav-item">
                                        <a class="nav-link active show" href="#sistema" data-toggle="tab">
                                            <i class="material-icons">code</i> Website
                                            <div class="ripple-container"></div>
                                            <div class="ripple-container"></div>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#messages" data-toggle="tab">
                                            <i class="material-icons">phone</i> Contato
                                            <div class="ripple-container"></div>
                                            <div class="ripple-container"></div>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#settings" data-toggle="tab">
                                            <i class="material-icons">mail</i> E-Mail
                                            <div class="ripple-container"></div>
                                            <div class="ripple-container"></div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="/" autocomplete="off">
                            @csrf
                            @method('PUT')
                            <div class="tab-content">
                                <div class="tab-pane active show" id="sistema">
                                    <div class="row">
                                        <label class="col-sm-2 col-form-label">Nome do Site</label>
                                        <div class="col-sm-10">
                                            <div class="form-group bmd-form-group">
                                                <input type="text" name="nomesite" class="form-control" autocomplete="off">
                                                <span class="bmd-help">Nome do sistema que ficará visivel no menu, navegador e etc.</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label class="col-sm-2 col-form-label">Logotipo</label>
                                        <div class="col-sm-10">
                                            <div class="form-group bmd-form-group">
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label class="col-sm-2 col-form-label">Favicon</label>
                                        <div class="col-sm-10">
                                            <div class="form-group bmd-form-group">
                                                <input type="text" class="form-control" placeholder="placeholder">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label class="col-sm-2 col-form-label">Região</label>
                                        <div class="col-sm-6">
                                            <div class="form-group bmd-form-group">
                                                <select class="selectpicker" name="uf" data-live-search="true" data-style="select-with-transition form-control col-12 mt-0" data-size="7">
                                                    <option value="-12:00">(GMT -12:00) Eniwetok, Kwajalein</option>
                                                    <option value="-11:00">(GMT -11:00) Midway Island, Samoa</option>
                                                    <option value="-10:00">(GMT -10:00) Hawaii</option>
                                                    <option value="-09:50">(GMT -9:30) Taiohae</option>
                                                    <option value="-09:00">(GMT -9:00) Alaska</option>
                                                    <option value="-08:00">(GMT -8:00) Pacific Time (US &amp; Canada)</option>
                                                    <option value="-07:00">(GMT -7:00) Mountain Time (US &amp; Canada)</option>
                                                    <option value="-06:00">(GMT -6:00) Central Time (US &amp; Canada), Mexico City</option>
                                                    <option value="-05:00">(GMT -5:00) Eastern Time (US &amp; Canada), Bogota, Lima</option>
                                                    <option value="-04:50">(GMT -4:30) Caracas</option>
                                                    <option value="-04:00">(GMT -4:00) Atlantic Time (Canada), Caracas, La Paz</option>
                                                    <option value="-03:50">(GMT -3:30) Newfoundland</option>
                                                    <option value="-03:00" selected="selected">(GMT -3:00) São Paulo, Buenos Aires, Georgetown</option>
                                                    <option value="-02:00">(GMT -2:00) Mid-Atlantic</option>
                                                    <option value="-01:00">(GMT -1:00) Azores, Cape Verde Islands</option>
                                                    <option value="+00:00">(GMT) Western Europe Time, London, Lisbon, Casablanca</option>
                                                    <option value="+01:00">(GMT +1:00) Brussels, Copenhagen, Madrid, Paris</option>
                                                    <option value="+02:00">(GMT +2:00) Kaliningrad, South Africa</option>
                                                    <option value="+03:00">(GMT +3:00) Baghdad, Riyadh, Moscow, St. Petersburg</option>
                                                    <option value="+03:50">(GMT +3:30) Tehran</option>
                                                    <option value="+04:00">(GMT +4:00) Abu Dhabi, Muscat, Baku, Tbilisi</option>
                                                    <option value="+04:50">(GMT +4:30) Kabul</option>
                                                    <option value="+05:00">(GMT +5:00) Ekaterinburg, Islamabad, Karachi, Tashkent</option>
                                                    <option value="+05:50">(GMT +5:30) Bombay, Calcutta, Madras, New Delhi</option>
                                                    <option value="+05:75">(GMT +5:45) Kathmandu, Pokhara</option>
                                                    <option value="+06:00">(GMT +6:00) Almaty, Dhaka, Colombo</option>
                                                    <option value="+06:50">(GMT +6:30) Yangon, Mandalay</option>
                                                    <option value="+07:00">(GMT +7:00) Bangkok, Hanoi, Jakarta</option>
                                                    <option value="+08:00">(GMT +8:00) Beijing, Perth, Singapore, Hong Kong</option>
                                                    <option value="+08:75">(GMT +8:45) Eucla</option>
                                                    <option value="+09:00">(GMT +9:00) Tokyo, Seoul, Osaka, Sapporo, Yakutsk</option>
                                                    <option value="+09:50">(GMT +9:30) Adelaide, Darwin</option>
                                                    <option value="+10:00">(GMT +10:00) Eastern Australia, Guam, Vladivostok</option>
                                                    <option value="+10:50">(GMT +10:30) Lord Howe Island</option>
                                                    <option value="+11:00">(GMT +11:00) Magadan, Solomon Islands, New Caledonia</option>
                                                    <option value="+11:50">(GMT +11:30) Norfolk Island</option>
                                                    <option value="+12:00">(GMT +12:00) Auckland, Wellington, Fiji, Kamchatka</option>
                                                    <option value="+12:75">(GMT +12:45) Chatham Islands</option>
                                                    <option value="+13:00">(GMT +13:00) Apia, Nukualofa</option>
                                                    <option value="+14:00">(GMT +14:00) Line Islands, Tokelau</option>
                                                </select>
                                            </div>
                                        </div>
                                        <label class="col-sm-2 col-form-label">Simbolo Monetário</label>
                                        <div class="col-sm-2">
                                            <div class="form-group bmd-form-group">
                                                <input type="text" class="form-control text-center" minlength="1" maxlength="3" placeholder="R$">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label class="col-sm-2 col-form-label">Rodapé</label>
                                        <div class="col-sm-10">
                                            <div class="form-group bmd-form-group">
                                                <textarea class="form-control" rows="5"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    {{--                                <div class="row">--}}
                                    {{--                                    <label class="col-sm-2 col-form-label">Disabled</label>--}}
                                    {{--                                    <div class="col-sm-10">--}}
                                    {{--                                        <div class="form-group bmd-form-group is-filled">--}}
                                    {{--                                            <input type="text" class="form-control" value="Disabled input here.." disabled="">--}}
                                    {{--                                        </div>--}}
                                    {{--                                    </div>--}}
                                    {{--                                </div>--}}
                                    {{--                                <div class="row">--}}
                                    {{--                                    <label class="col-sm-2 col-form-label">Static control</label>--}}
                                    {{--                                    <div class="col-sm-10">--}}
                                    {{--                                        <div class="form-group">--}}
                                    {{--                                            <p class="form-control-static">hello@creative-tim.com</p>--}}
                                    {{--                                        </div>--}}
                                    {{--                                    </div>--}}
                                    {{--                                </div>--}}
                                    {{--                                <div class="row">--}}
                                    {{--                                    <label class="col-sm-2 col-form-label label-checkbox">Checkboxes and radios</label>--}}
                                    {{--                                    <div class="col-sm-10 checkbox-radios">--}}
                                    {{--                                        <div class="form-check">--}}
                                    {{--                                            <label class="form-check-label">--}}
                                    {{--                                                <input class="form-check-input" type="checkbox" value=""> First Checkbox--}}
                                    {{--                                                <span class="form-check-sign">--}}
                                    {{--                              <span class="check"></span>--}}
                                    {{--                            </span>--}}
                                    {{--                                            </label>--}}
                                    {{--                                        </div>--}}
                                    {{--                                        <div class="form-check">--}}
                                    {{--                                            <label class="form-check-label">--}}
                                    {{--                                                <input class="form-check-input" type="checkbox" value=""> Second Checkbox--}}
                                    {{--                                                <span class="form-check-sign">--}}
                                    {{--                              <span class="check"></span>--}}
                                    {{--                            </span>--}}
                                    {{--                                            </label>--}}
                                    {{--                                        </div>--}}
                                    {{--                                        <div class="form-check">--}}
                                    {{--                                            <label class="form-check-label">--}}
                                    {{--                                                <input class="form-check-input" type="radio" name="exampleRadios" value="option2" checked=""> First Radio--}}
                                    {{--                                                <span class="circle">--}}
                                    {{--                              <span class="check"></span>--}}
                                    {{--                            </span>--}}
                                    {{--                                            </label>--}}
                                    {{--                                        </div>--}}
                                    {{--                                        <div class="form-check">--}}
                                    {{--                                            <label class="form-check-label">--}}
                                    {{--                                                <input class="form-check-input" type="radio" name="exampleRadios" value="option1"> Second Radio--}}
                                    {{--                                                <span class="circle">--}}
                                    {{--                              <span class="check"></span>--}}
                                    {{--                            </span>--}}
                                    {{--                                            </label>--}}
                                    {{--                                        </div>--}}
                                    {{--                                    </div>--}}
                                    {{--                                </div>--}}
                                    {{--                                <div class="row">--}}
                                    {{--                                    <label class="col-sm-2 col-form-label label-checkbox">Inline checkboxes</label>--}}
                                    {{--                                    <div class="col-sm-10 checkbox-radios">--}}
                                    {{--                                        <div class="form-check form-check-inline">--}}
                                    {{--                                            <label class="form-check-label">--}}
                                    {{--                                                <input class="form-check-input" type="checkbox" value=""> a--}}
                                    {{--                                                <span class="form-check-sign">--}}
                                    {{--                              <span class="check"></span>--}}
                                    {{--                            </span>--}}
                                    {{--                                            </label>--}}
                                    {{--                                        </div>--}}
                                    {{--                                        <div class="form-check form-check-inline">--}}
                                    {{--                                            <label class="form-check-label">--}}
                                    {{--                                                <input class="form-check-input" type="checkbox" value=""> b--}}
                                    {{--                                                <span class="form-check-sign">--}}
                                    {{--                              <span class="check"></span>--}}
                                    {{--                            </span>--}}
                                    {{--                                            </label>--}}
                                    {{--                                        </div>--}}
                                    {{--                                        <div class="form-check form-check-inline">--}}
                                    {{--                                            <label class="form-check-label">--}}
                                    {{--                                                <input class="form-check-input" type="checkbox" value=""> c--}}
                                    {{--                                                <span class="form-check-sign">--}}
                                    {{--                              <span class="check"></span>--}}
                                    {{--                            </span>--}}
                                    {{--                                            </label>--}}
                                    {{--                                        </div>--}}
                                    {{--                                    </div>--}}
                                    {{--                                </div>--}}
                                </div>
                                <div class="tab-pane" id="messages">
                                    sdfkhasdhklfhaskldfsf
                                </div>
                                <div class="tab-pane" id="settings">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-group bmd-form-group">
                                                <label for="smtpHost" class="bmd-label-static">Host</label>
                                                <input type="text" class="form-control" id="smtpHost" placeholder="smtp.gmail.com">
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="form-group bmd-form-group">
                                                <label for="smtpPorta" class="bmd-label-static">Host</label>
                                                <input type="number" class="form-control" id="smtpPorta" min="1" max="65535" placeholder="587">
                                            </div>
                                        </div>
                                        <div class="col-2">
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" type="checkbox" value=""> Ativar
                                                    <span class="form-check-sign">
                                                <span class="check"></span>
                                            </span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group bmd-form-group">
                                                <label for="smtpEmail" class="bmd-label-static">E-Mail</label>
                                                <input type="email" class="form-control" id="smtpEmail" placeholder="nome@gmail.com">
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group bmd-form-group">
                                                <label for="smtpSenha" class="bmd-label-static">Senha</label>
                                                <input type="password" class="form-control" id="smtpSenha" placeholder="******">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer border-top">
                        <hr>
                        <a class="btn btn-lg btn-success float-right" href="{{ route('cursos.create') }}">Salvar Alterações</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- end row -->
    </div>
@endsection


@section('jsimport')
    <script>
        $(document).ready(function () {
        {{--    $.ajaxSetup({--}}
        {{--        headers: {--}}
        {{--            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')--}}
        {{--        }--}}
        {{--    });--}}

        {{--    $('.remove').on('click', function (event) {--}}
        {{--        swal({--}}
        {{--            title               : 'Excluir usuário ?',--}}
        {{--            text                : "Atenção, esta ação não poderá ser desfeita!",--}}
        {{--            type                : 'warning',--}}
        {{--            showCancelButton    : true,--}}
        {{--            confirmButtonColor  : '#3085d6',--}}
        {{--            cancelButtonColor   : '#d33',--}}
        {{--            confirmButtonText   : 'Sim, delete!',--}}
        {{--            cancelButtonText    : 'Cancelar',--}}
        {{--            reverseButtons: true,--}}
        {{--        }).then((response) => {--}}
        {{--            if (response) {--}}
        {{--                $.ajax({--}}
        {{--                    url : "{{ url('cursos')}}" + '/' + $(this).attr('data-delete'),--}}
        {{--                    type : "POST",--}}
        {{--                    data : {'_method' : 'DELETE'},--}}
        {{--                    success: function(){--}}
        {{--                        swal({--}}
        {{--                            type    : 'success',--}}
        {{--                            title   : "Success!",--}}
        {{--                            text    : "Usuário removido com sucesso.",--}}
        {{--                            icon    : "success",--}}
        {{--                            timer   : '1500'--}}
        {{--                        }).then(() => {--}}
        {{--                            location.reload();--}}
        {{--                        })--}}

        {{--                    },--}}
        {{--                    error : function(data){--}}
        {{--                        swal({--}}
        {{--                            title   : 'Opps...',--}}
        {{--                            text    : data.message,--}}
        {{--                            type    : 'error',--}}
        {{--                            timer   : '1500'--}}
        {{--                        })--}}
        {{--                    }--}}
        {{--                })--}}
        {{--            } else {--}}
        {{--                swal("Your imaginary file is safe!");--}}
        {{--            }--}}
        {{--        });--}}
        {{--    });--}}
        });
    </script>
@endsection
