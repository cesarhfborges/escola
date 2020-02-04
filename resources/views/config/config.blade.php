@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row d-flex justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <form method="post" action="{{ route('config.update', $config->id) }}" autocomplete="off">
                        @csrf
                        @method('PATCH')
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
                            <div class="tab-content">
                                <div class="tab-pane active show" id="sistema">
                                    <div class="row">
                                        <label class="col-sm-2 col-form-label">Logotipo</label>
                                        <div class="col-sm-6">
                                            <div class="form-group form-file-upload form-file-multiple">
                                                <input type="file" name="avatar" class="inputFileHidden" accept="image/*">
                                                <div class="input-group">
                                                    <input type="text" class="form-control inputFileVisible" placeholder="Upload Avatar" value="{{ $config->avatar }}" readonly>
                                                    <span class="input-group-btn">
                                                        <button type="button" id="selectLogo" class="btn btn-fab btn-round btn-primary">
                                                            <i class="material-icons">attach_file</i>
                                                        </button>
                                                        <button type="button" id="removelogo" class="btn btn-fab btn-round btn-danger">
                                                            <i class="material-icons">delete</i>
                                                        </button>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label class="col-sm-2 col-form-label">Favicon</label>
                                        <div class="col-sm-6">
                                            <div class="form-group form-file-upload form-file-multiple">
                                                <input type="file" name="favicon" class="inputFileHidden" accept="image/*">
                                                <div class="input-group">
                                                    <input type="text" class="form-control inputFileVisible" placeholder="Upload Favicon" value="{{ $config->favicon }}" readonly>
                                                    <span class="input-group-btn">
                                                        <button type="button" class="btn btn-fab btn-round btn-primary">
                                                            <i class="material-icons">attach_file</i>
                                                        </button>
                                                        <button type="button" class="btn btn-fab btn-round btn-danger">
                                                            <i class="material-icons">delete</i>
                                                        </button>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <label class="col-sm-2 col-form-label">Nome do Site</label>
                                        <div class="col-sm-10">
                                            <div class="form-group bmd-form-group">
                                                <input type="text" name="nomesite" class="form-control" autocomplete="off" value="{{ $config->nome_site }}">
                                                <span class="bmd-help">Nome do sistema que ficará visivel no menu, navegador e etc.</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label class="col-sm-2 col-form-label">regiao</label>
                                        <div class="col-sm-6">
                                            <div class="form-group bmd-form-group">
                                                <select class="selectpicker" name="regiao" data-live-search="true" data-style="select-with-transition form-control col-12 mt-0" data-size="7">
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
                                                <input type="text" class="form-control text-center" name="monetario" minlength="1" maxlength="3" placeholder="R$" value="{{ $config->monetario }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label class="col-sm-2 col-form-label">Rodapé</label>
                                        <div class="col-sm-10">
                                            <div class="form-group bmd-form-group">
                                                <textarea class="form-control" name="rodape" rows="5">{{ $config->rodape }}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="messages">
                                    <div class="row">
                                        <div class="col-2">
                                            <div class="form-group bmd-form-group">
                                                <label for="cep" class="bmd-label-static">Cep</label>
                                                <input type="text" class="form-control" id="cep" name="cep" placeholder="71.000-000" value="{{ $config->cep }}">
                                            </div>
                                        </div>
                                        <div class="col-8">
                                            <div class="form-group bmd-form-group">
                                                <label for="endereco" class="bmd-label-static">Endereço</label>
                                                <input type="text" class="form-control" name="endereco" id="endereco" placeholder="Ade Conjunto 22 loja 10" value="{{ $config->endereco }}">
                                            </div>
                                        </div>
                                        <div class="col-2">
                                            <div class="form-group bmd-form-group">
                                                <label for="numero" class="bmd-label-static">Numero</label>
                                                <input type="text" class="form-control" name="numero" id="numero" placeholder="Apto 10">
                                            </div>
                                        </div>
                                        <div class="col-5">
                                            <div class="form-group bmd-form-group">
                                                <label for="bairro" class="bmd-label-static">Bairro</label>
                                                <input type="text" class="form-control" name="bairro" id="bairro" placeholder="Taguatinga" value="{{ $config->bairro }}">
                                            </div>
                                        </div>
                                        <div class="col-5">
                                            <div class="form-group bmd-form-group">
                                                <label for="cidade" class="bmd-label-static">Cidade</label>
                                                <input type="text" class="form-control" name="cidade" id="cidade" placeholder="Brasilia" value="{{ $config->cidade }}">
                                            </div>
                                        </div>
                                        <div class="col-2">
                                            <div class="form-group bmd-form-group">
                                                <label for="uf" class="bmd-label-static">UF</label>
                                                <input type="text" class="form-control" name="uf" id="uf" placeholder="DF" value="{{ $config->uf }}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="settings">
                                    <div class="row">
                                        <div class="col-4">
                                            <div class="form-group bmd-form-group">
                                                <label for="smtpHost" class="bmd-label-static">Host</label>
                                                <input type="text" class="form-control" name="smtpHost" id="smtpHost" placeholder="smtp.gmail.com" value="{{ $config->smtp_host }}">
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="form-group bmd-form-group">
                                                <label for="smtpPorta" class="bmd-label-static">Porta</label>
                                                <input type="number" class="form-control" name="smtpPorta" id="smtpPorta" min="1" max="65535" placeholder="587" value="{{ $config->smtp_porta }}">
                                            </div>
                                        </div>
                                        <div class="col-2">
                                            <div class="form-group bmd-form-group">
                                                <label for="crypto" class="bmd-label-static">Criptografia</label>
                                                <input type="text" class="form-control" name="cripto" id="crypto" placeholder="TLS" value="{{ $config->smtp_cripto }}">
                                            </div>
                                        </div>
                                        <div class="col-2">
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" type="checkbox" name="smtpAtivo" value="" @if($config->smtp_ativo) checked @endif> Ativar
                                                    <span class="form-check-sign">
                                                    <span class="check"></span>
                                                </span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group bmd-form-group">
                                                <label for="smtpEmail" class="bmd-label-static">E-Mail</label>
                                                <input type="email" class="form-control" name="smtpEmail" id="smtpEmail" placeholder="nome@gmail.com" value="{{ $config->smtp_email }}">
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group bmd-form-group">
                                                <label for="smtpSenha" class="bmd-label-static">Senha</label>
                                                <input type="password" class="form-control" name="smtpSenha" id="smtpSenha" placeholder="******" value="{{ $config->smtp_senha }}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer border-top">
                            <hr>
                            <button class="btn btn-lg btn-success float-right" type="submit">Salvar Alterações</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- end row -->
    </div>
@endsection


@push('jsimport')

    <script>
        $(document).ready(function() {
            // FileInput
            $('.form-file-simple .inputFileVisible').click(function() {
                $(this).siblings('.inputFileHidden').trigger('click');
            });

            $('.form-file-simple .inputFileHidden').change(function() {
                let filename = $(this).val().replace(/C:\\fakepath\\/i, '');
                $(this).siblings('.inputFileVisible').val(filename);
            });

            $('.form-file-multiple .inputFileVisible, .form-file-multiple .input-group-btn').click(function() {
                $(this).parent().parent().find('.inputFileHidden').trigger('click');
                $(this).parent().parent().addClass('is-focused');
            });

            $('.form-file-multiple .inputFileHidden').change(function() {
                let names = '';
                for (let i = 0; i < $(this).get(0).files.length; ++i) {
                    if (i < $(this).get(0).files.length - 1) {
                        names += $(this).get(0).files.item(i).name + ',';
                    } else {
                        names += $(this).get(0).files.item(i).name;
                    }
                }
                if (names){
                    $(this).siblings('.input-group').find('.inputFileVisible').val(names);
                }
            });

            $('.form-file-multiple .btn').on('focus', function() {
                $(this).parent().siblings().trigger('focus');
            });

            $('.form-file-multiple .btn').on('focusout', function() {
                $(this).parent().siblings().trigger('focusout');
            });
        });
    </script>
@endpush
