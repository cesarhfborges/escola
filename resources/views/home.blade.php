@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card card-stats">
                    <div class="card-header card-header-primary card-header-icon">
                        <div class="card-icon">
                            <i class="material-icons">supervised_user_circle</i>
                        </div>
                        <p class="card-category">Usuários</p>
                        <h3 class="card-title">{{ $dados['usuarios_total'] }}</h3>
                    </div>
                    <div class="card-footer">
                        <div class="stats">
                            <i class="material-icons">date_range</i>&nbsp;
                            <script>
                                document.write(new Date().toLocaleString())
                            </script>.
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card card-stats">
                    <div class="card-header card-header-secondary card-header-icon">
                        <div class="card-icon">
                            <i class="material-icons">category</i>
                        </div>
                        <p class="card-category">Categorias</p>
                        <h3 class="card-title">{{ $dados['categorias_total'] }}</h3>
                    </div>
                    <div class="card-footer">
                        <div class="stats">
                            <i class="material-icons">date_range</i>
                            <script>
                                document.write(new Date().toLocaleString())
                            </script>.
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card card-stats">
                    <div class="card-header card-header-secondary card-header-icon">
                        <div class="card-icon">
                            <i class="material-icons">menu_book</i>
                        </div>
                        <p class="card-category">Cursos</p>
                        <h3 class="card-title">{{ $dados['cusos_total'] }}</h3>
                    </div>
                    <div class="card-footer">
                        <div class="stats">
                            <i class="material-icons">local_offer</i>
                            <script>
                                document.write(new Date().toLocaleString())
                            </script>.
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card card-stats">
                    <div class="card-header card-header-secondary card-header-icon">
                        <div class="card-icon">
                            <i class="material-icons">class</i>
                        </div>
                        <p class="card-category">Turmas</p>
                        <h3 class="card-title">{{ $dados['turmas_total'] }}</h3>
                    </div>
                    <div class="card-footer">
                        <div class="stats">
                            <i class="material-icons">update</i>
                            <script>
                                document.write(new Date().toLocaleString())
                            </script>.
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card card-stats">
                    <div class="card-header card-header-warning card-header-icon">
                        <div class="card-icon">
                            <i class="material-icons">weekend</i>
                        </div>
                        <p class="card-category">Cursos</p>
                        <h3 class="card-title">{{ $dados['cursos_total'] }}</h3>
                    </div>
                    <div class="card-footer">
                        <div class="stats">
                            <i class="material-icons text-danger">warning</i>
                            <a href="#pablo">Get More Space...</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card card-stats">
                    <div class="card-header card-header-danger card-header-icon">
                        <div class="card-icon">
                            <i class="material-icons">equalizer</i>
                        </div>
                        <p class="card-category">Reprovados</p>
                        <h3 class="card-title">33</h3>
                    </div>
                    <div class="card-footer">
                        <div class="stats">
                            <i class="material-icons">local_offer</i> Tracked from Google Analytics
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card card-stats">
                    <div class="card-header card-header-info card-header-icon">
                        <div class="card-icon">
                            <i class="fa fa-twitter"></i>
                        </div>
                        <p class="card-category">Cursando</p>
                        <h3 class="card-title">114</h3>
                    </div>
                    <div class="card-footer">
                        <div class="stats">
                            <i class="material-icons">update</i> Just Updated
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card card-stats">
                    <div class="card-header card-header-success card-header-icon">
                        <div class="card-icon">
                            <i class="material-icons">store</i>
                        </div>
                        <p class="card-category">Aprovados</p>
                        <h3 class="card-title">2402</h3>
                    </div>
                    <div class="card-footer">
                        <div class="stats">
                            <i class="material-icons">date_range</i> Last 24 Hours
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="card ">
                    <div class="card-header card-header-success card-header-icon">
                        <div class="card-icon">
                            <i class="material-icons"></i>
                        </div>
                        <h4 class="card-title">Cursos com mais Usuários</h4>
                    </div>
                    <div class="card-body ">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="table-responsive table-sales">
                                    <table class="table">
                                        <tbody>
                                        <tr>
                                            <td>
                                                <div class="flag">
                                                    <img src="{{ asset('assets/img/flags/US.png') }}" <="" div="">
                                                </div>
                                            </td>
                                            <td>USA</td>
                                            <td class="text-right">
                                                2.920
                                            </td>
                                            <td class="text-right">
                                                53.23%
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="flag">
                                                    <img src="{{ asset('assets/img/flags/DE.png') }}" <="" div="">
                                                </div></td>
                                            <td>Germany</td>
                                            <td class="text-right">
                                                1.300
                                            </td>
                                            <td class="text-right">
                                                20.43%
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="flag">
                                                    <img src="../assets/img/flags/AU.png" <="" div="">
                                                </div></td>
                                            <td>Australia</td>
                                            <td class="text-right">
                                                760
                                            </td>
                                            <td class="text-right">
                                                10.35%
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="flag">
                                                    <img src="../assets/img/flags/GB.png" <="" div="">
                                                </div></td>
                                            <td>United Kingdom</td>
                                            <td class="text-right">
                                                690
                                            </td>
                                            <td class="text-right">
                                                7.87%
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="flag">
                                                    <img src="../assets/img/flags/RO.png" <="" div="">
                                                </div></td>
                                            <td>Romania</td>
                                            <td class="text-right">
                                                600
                                            </td>
                                            <td class="text-right">
                                                5.94%
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="flag">
                                                    <img src="../assets/img/flags/BR.png" <="" div="">
                                                </div></td>
                                            <td>Brasil</td>
                                            <td class="text-right">
                                                550
                                            </td>
                                            <td class="text-right">
                                                4.34%
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header card-header-icon card-header-info">
                        <div class="card-icon">
                            <i class="material-icons">timeline</i>
                        </div>
                        <h4 class="card-title">Coloured Line Chart
                            <small> - Rounded</small>
                        </h4>
                    </div>
                    <div class="card-body">
                        <div id="colouredRoundedLineChart" class="ct-chart"><svg xmlns:ct="http://gionkunz.github.com/chartist-js/ct" width="100%" height="300px" class="ct-chart-line" style="width: 100%; height: 300px;"><g class="ct-grids"><line y1="265" y2="265" x1="50" x2="715" class="ct-grid ct-vertical"></line><line y1="240" y2="240" x1="50" x2="715" class="ct-grid ct-vertical"></line><line y1="215" y2="215" x1="50" x2="715" class="ct-grid ct-vertical"></line><line y1="190" y2="190" x1="50" x2="715" class="ct-grid ct-vertical"></line><line y1="165" y2="165" x1="50" x2="715" class="ct-grid ct-vertical"></line><line y1="140" y2="140" x1="50" x2="715" class="ct-grid ct-vertical"></line><line y1="115" y2="115" x1="50" x2="715" class="ct-grid ct-vertical"></line><line y1="90" y2="90" x1="50" x2="715" class="ct-grid ct-vertical"></line><line y1="65" y2="65" x1="50" x2="715" class="ct-grid ct-vertical"></line><line y1="40" y2="40" x1="50" x2="715" class="ct-grid ct-vertical"></line><line y1="15" y2="15" x1="50" x2="715" class="ct-grid ct-vertical"></line></g><g><g class="ct-series ct-series-a"><path d="M 50 193.25 C 60.076 185.208 90.303 145.125 110.455 145 C 130.606 144.875 150.758 195.583 170.909 192.5 C 191.061 189.417 211.212 143.167 231.364 126.5 C 251.515 109.833 271.667 98.167 291.818 92.5 C 311.97 86.833 332.121 84.583 352.273 92.5 C 372.424 100.417 392.576 142.583 412.727 140 C 432.879 137.417 453.03 83.25 473.182 77 C 493.333 70.75 513.485 108.667 533.636 102.5 C 553.788 96.333 573.939 52.25 594.091 40 C 614.242 27.75 644.47 30.833 654.545 29" class="ct-line"></path><line x1="50" y1="193.25" x2="50.01" y2="193.25" class="ct-point" ct:value="287" opacity="1"></line><line x1="110.45454545454545" y1="145" x2="110.46454545454546" y2="145" class="ct-point" ct:value="480" opacity="1"></line><line x1="170.9090909090909" y1="192.5" x2="170.9190909090909" y2="192.5" class="ct-point" ct:value="290" opacity="1"></line><line x1="231.36363636363637" y1="126.5" x2="231.37363636363636" y2="126.5" class="ct-point" ct:value="554" opacity="1"></line><line x1="291.8181818181818" y1="92.5" x2="291.8281818181818" y2="92.5" class="ct-point" ct:value="690" opacity="1"></line><line x1="352.27272727272725" y1="92.5" x2="352.28272727272724" y2="92.5" class="ct-point" ct:value="690" opacity="1"></line><line x1="412.72727272727275" y1="140" x2="412.73727272727274" y2="140" class="ct-point" ct:value="500" opacity="1"></line><line x1="473.1818181818182" y1="77" x2="473.1918181818182" y2="77" class="ct-point" ct:value="752" opacity="1"></line><line x1="533.6363636363636" y1="102.5" x2="533.6463636363636" y2="102.5" class="ct-point" ct:value="650" opacity="1"></line><line x1="594.0909090909091" y1="40" x2="594.1009090909091" y2="40" class="ct-point" ct:value="900" opacity="1"></line><line x1="654.5454545454545" y1="29" x2="654.5554545454545" y2="29" class="ct-point" ct:value="944" opacity="1"></line></g></g><g class="ct-labels"><foreignObject style="overflow: visible;" x="50" y="270" width="60.45454545454545" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 60px; height: 20px;">'06</span></foreignObject><foreignObject style="overflow: visible;" x="110.45454545454545" y="270" width="60.45454545454545" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 60px; height: 20px;">'07</span></foreignObject><foreignObject style="overflow: visible;" x="170.9090909090909" y="270" width="60.45454545454547" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 60px; height: 20px;">'08</span></foreignObject><foreignObject style="overflow: visible;" x="231.36363636363637" y="270" width="60.45454545454544" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 60px; height: 20px;">'09</span></foreignObject><foreignObject style="overflow: visible;" x="291.8181818181818" y="270" width="60.45454545454544" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 60px; height: 20px;">'10</span></foreignObject><foreignObject style="overflow: visible;" x="352.27272727272725" y="270" width="60.454545454545496" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 60px; height: 20px;">'11</span></foreignObject><foreignObject style="overflow: visible;" x="412.72727272727275" y="270" width="60.45454545454544" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 60px; height: 20px;">'12</span></foreignObject><foreignObject style="overflow: visible;" x="473.1818181818182" y="270" width="60.45454545454544" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 60px; height: 20px;">'13</span></foreignObject><foreignObject style="overflow: visible;" x="533.6363636363636" y="270" width="60.454545454545496" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 60px; height: 20px;">'14</span></foreignObject><foreignObject style="overflow: visible;" x="594.0909090909091" y="270" width="60.45454545454538" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 60px; height: 20px;">'15</span></foreignObject><foreignObject style="overflow: visible;" x="654.5454545454545" y="270" width="60.454545454545496" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 60px; height: 20px;"></span></foreignObject><foreignObject style="overflow: visible;" y="240" x="10" height="25" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 25px; width: 30px;">0</span></foreignObject><foreignObject style="overflow: visible;" y="215" x="10" height="25" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 25px; width: 30px;">100</span></foreignObject><foreignObject style="overflow: visible;" y="190" x="10" height="25" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 25px; width: 30px;">200</span></foreignObject><foreignObject style="overflow: visible;" y="165" x="10" height="25" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 25px; width: 30px;">300</span></foreignObject><foreignObject style="overflow: visible;" y="140" x="10" height="25" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 25px; width: 30px;">400</span></foreignObject><foreignObject style="overflow: visible;" y="115" x="10" height="25" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 25px; width: 30px;">500</span></foreignObject><foreignObject style="overflow: visible;" y="90" x="10" height="25" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 25px; width: 30px;">600</span></foreignObject><foreignObject style="overflow: visible;" y="65" x="10" height="25" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 25px; width: 30px;">700</span></foreignObject><foreignObject style="overflow: visible;" y="40" x="10" height="25" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 25px; width: 30px;">800</span></foreignObject><foreignObject style="overflow: visible;" y="15" x="10" height="25" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 25px; width: 30px;">900</span></foreignObject><foreignObject style="overflow: visible;" y="-15" x="10" height="30" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 30px; width: 30px;">1000</span></foreignObject></g></svg></div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header card-header-icon card-header-rose">
                        <div class="card-icon">
                            <i class="material-icons">insert_chart</i>
                        </div>
                        <h4 class="card-title">Multiple Bars Chart
                            <small>- Bar Chart</small>
                        </h4>
                    </div>
                    <div class="card-body">
                        <div id="multipleBarsChart" class="ct-chart"><svg xmlns:ct="http://gionkunz.github.com/chartist-js/ct" width="100%" height="300px" class="ct-chart-bar" style="width: 100%; height: 300px;"><g class="ct-grids"><line y1="265" y2="265" x1="50" x2="715" class="ct-grid ct-vertical"></line><line y1="237.22222222222223" y2="237.22222222222223" x1="50" x2="715" class="ct-grid ct-vertical"></line><line y1="209.44444444444446" y2="209.44444444444446" x1="50" x2="715" class="ct-grid ct-vertical"></line><line y1="181.66666666666669" y2="181.66666666666669" x1="50" x2="715" class="ct-grid ct-vertical"></line><line y1="153.88888888888889" y2="153.88888888888889" x1="50" x2="715" class="ct-grid ct-vertical"></line><line y1="126.11111111111111" y2="126.11111111111111" x1="50" x2="715" class="ct-grid ct-vertical"></line><line y1="98.33333333333334" y2="98.33333333333334" x1="50" x2="715" class="ct-grid ct-vertical"></line><line y1="70.55555555555554" y2="70.55555555555554" x1="50" x2="715" class="ct-grid ct-vertical"></line><line y1="42.77777777777777" y2="42.77777777777777" x1="50" x2="715" class="ct-grid ct-vertical"></line><line y1="15" y2="15" x1="50" x2="715" class="ct-grid ct-vertical"></line></g><g><g class="ct-series ct-series-a"><line x1="72.70833333333333" x2="72.70833333333333" y1="265" y2="114.44444444444446" class="ct-bar" ct:value="542" opacity="1"></line><line x1="128.125" x2="128.125" y1="265" y2="141.94444444444446" class="ct-bar" ct:value="443" opacity="1"></line><line x1="183.54166666666666" x2="183.54166666666666" y1="265" y2="176.11111111111111" class="ct-bar" ct:value="320" opacity="1"></line><line x1="238.95833333333334" x2="238.95833333333334" y1="265" y2="48.33333333333334" class="ct-bar" ct:value="780" opacity="1"></line><line x1="294.37499999999994" x2="294.37499999999994" y1="265" y2="111.38888888888889" class="ct-bar" ct:value="553" opacity="1"></line><line x1="349.79166666666663" x2="349.79166666666663" y1="265" y2="139.16666666666669" class="ct-bar" ct:value="453" opacity="1"></line><line x1="405.2083333333333" x2="405.2083333333333" y1="265" y2="174.44444444444446" class="ct-bar" ct:value="326" opacity="1"></line><line x1="460.62499999999994" x2="460.62499999999994" y1="265" y2="144.44444444444446" class="ct-bar" ct:value="434" opacity="1"></line><line x1="516.0416666666666" x2="516.0416666666666" y1="265" y2="107.22222222222223" class="ct-bar" ct:value="568" opacity="1"></line><line x1="571.4583333333334" x2="571.4583333333334" y1="265" y2="95.55555555555554" class="ct-bar" ct:value="610" opacity="1"></line><line x1="626.875" x2="626.875" y1="265" y2="55" class="ct-bar" ct:value="756" opacity="1"></line><line x1="682.2916666666666" x2="682.2916666666666" y1="265" y2="16.388888888888886" class="ct-bar" ct:value="895" opacity="1"></line></g><g class="ct-series ct-series-b"><line x1="82.70833333333333" x2="82.70833333333333" y1="265" y2="150.55555555555554" class="ct-bar" ct:value="412" opacity="1"></line><line x1="138.125" x2="138.125" y1="265" y2="197.5" class="ct-bar" ct:value="243" opacity="1"></line><line x1="193.54166666666666" x2="193.54166666666666" y1="265" y2="187.22222222222223" class="ct-bar" ct:value="280" opacity="1"></line><line x1="248.95833333333334" x2="248.95833333333334" y1="265" y2="103.88888888888889" class="ct-bar" ct:value="580" opacity="1"></line><line x1="304.37499999999994" x2="304.37499999999994" y1="265" y2="139.16666666666669" class="ct-bar" ct:value="453" opacity="1"></line><line x1="359.79166666666663" x2="359.79166666666663" y1="265" y2="166.94444444444446" class="ct-bar" ct:value="353" opacity="1"></line><line x1="415.2083333333333" x2="415.2083333333333" y1="265" y2="181.66666666666669" class="ct-bar" ct:value="300" opacity="1"></line><line x1="470.62499999999994" x2="470.62499999999994" y1="265" y2="163.88888888888889" class="ct-bar" ct:value="364" opacity="1"></line><line x1="526.0416666666666" x2="526.0416666666666" y1="265" y2="162.77777777777777" class="ct-bar" ct:value="368" opacity="1"></line><line x1="581.4583333333334" x2="581.4583333333334" y1="265" y2="151.11111111111111" class="ct-bar" ct:value="410" opacity="1"></line><line x1="636.875" x2="636.875" y1="265" y2="88.33333333333334" class="ct-bar" ct:value="636" opacity="1"></line><line x1="692.2916666666666" x2="692.2916666666666" y1="265" y2="71.94444444444446" class="ct-bar" ct:value="695" opacity="1"></line></g></g><g class="ct-labels"><foreignObject style="overflow: visible;" x="50" y="270" width="55.416666666666664" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 55px; height: 20px;">Jan</span></foreignObject><foreignObject style="overflow: visible;" x="105.41666666666666" y="270" width="55.416666666666664" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 55px; height: 20px;">Feb</span></foreignObject><foreignObject style="overflow: visible;" x="160.83333333333331" y="270" width="55.41666666666667" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 55px; height: 20px;">Mar</span></foreignObject><foreignObject style="overflow: visible;" x="216.25" y="270" width="55.41666666666666" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 55px; height: 20px;">Apr</span></foreignObject><foreignObject style="overflow: visible;" x="271.66666666666663" y="270" width="55.41666666666666" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 55px; height: 20px;">Mai</span></foreignObject><foreignObject style="overflow: visible;" x="327.0833333333333" y="270" width="55.416666666666686" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 55px; height: 20px;">Jun</span></foreignObject><foreignObject style="overflow: visible;" x="382.5" y="270" width="55.41666666666663" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 55px; height: 20px;">Jul</span></foreignObject><foreignObject style="overflow: visible;" x="437.91666666666663" y="270" width="55.416666666666686" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 55px; height: 20px;">Aug</span></foreignObject><foreignObject style="overflow: visible;" x="493.3333333333333" y="270" width="55.416666666666686" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 55px; height: 20px;">Sep</span></foreignObject><foreignObject style="overflow: visible;" x="548.75" y="270" width="55.41666666666663" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 55px; height: 20px;">Oct</span></foreignObject><foreignObject style="overflow: visible;" x="604.1666666666666" y="270" width="55.41666666666663" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 55px; height: 20px;">Nov</span></foreignObject><foreignObject style="overflow: visible;" x="659.5833333333333" y="270" width="55.41666666666674" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 55px; height: 20px;">Dec</span></foreignObject><foreignObject style="overflow: visible;" y="237.22222222222223" x="10" height="27.77777777777778" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 28px; width: 30px;">0</span></foreignObject><foreignObject style="overflow: visible;" y="209.44444444444446" x="10" height="27.77777777777778" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 28px; width: 30px;">100</span></foreignObject><foreignObject style="overflow: visible;" y="181.66666666666669" x="10" height="27.77777777777777" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 28px; width: 30px;">200</span></foreignObject><foreignObject style="overflow: visible;" y="153.8888888888889" x="10" height="27.777777777777786" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 28px; width: 30px;">300</span></foreignObject><foreignObject style="overflow: visible;" y="126.11111111111111" x="10" height="27.77777777777777" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 28px; width: 30px;">400</span></foreignObject><foreignObject style="overflow: visible;" y="98.33333333333334" x="10" height="27.77777777777777" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 28px; width: 30px;">500</span></foreignObject><foreignObject style="overflow: visible;" y="70.55555555555554" x="10" height="27.7777777777778" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 28px; width: 30px;">600</span></foreignObject><foreignObject style="overflow: visible;" y="42.77777777777777" x="10" height="27.77777777777777" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 28px; width: 30px;">700</span></foreignObject><foreignObject style="overflow: visible;" y="15" x="10" height="27.77777777777777" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 28px; width: 30px;">800</span></foreignObject><foreignObject style="overflow: visible;" y="-15" x="10" height="30" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 30px; width: 30px;">900</span></foreignObject></g></svg></div>
                    </div>
                </div>
            </div>
            <div class="col-md-7">
                <div class="card">
                    <div class="card-header card-header-icon card-header-info">
                        <div class="card-icon">
                            <i class="material-icons">timeline</i>
                        </div>
                        <h4 class="card-title">Coloured Bars Chart
                            <small> - Rounded</small>
                        </h4>
                    </div>
                    <div class="card-body">
                        <div id="colouredBarsChart" class="ct-chart"><svg xmlns:ct="http://gionkunz.github.com/chartist-js/ct" width="100%" height="300px" class="ct-chart-line" style="width: 100%; height: 300px;"><g class="ct-grids"><line y1="265" y2="265" x1="50" x2="848.328125" class="ct-grid ct-vertical"></line><line y1="240" y2="240" x1="50" x2="848.328125" class="ct-grid ct-vertical"></line><line y1="215" y2="215" x1="50" x2="848.328125" class="ct-grid ct-vertical"></line><line y1="190" y2="190" x1="50" x2="848.328125" class="ct-grid ct-vertical"></line><line y1="165" y2="165" x1="50" x2="848.328125" class="ct-grid ct-vertical"></line><line y1="140" y2="140" x1="50" x2="848.328125" class="ct-grid ct-vertical"></line><line y1="115" y2="115" x1="50" x2="848.328125" class="ct-grid ct-vertical"></line><line y1="90" y2="90" x1="50" x2="848.328125" class="ct-grid ct-vertical"></line><line y1="65" y2="65" x1="50" x2="848.328125" class="ct-grid ct-vertical"></line><line y1="40" y2="40" x1="50" x2="848.328125" class="ct-grid ct-vertical"></line><line y1="15" y2="15" x1="50" x2="848.328125" class="ct-grid ct-vertical"></line></g><g><g class="ct-series ct-series-a"><path d="M 50 193.25 C 62.096 189.167 98.384 177.208 122.575 168.75 C 146.767 160.292 170.959 149.542 195.151 142.5 C 219.342 135.458 243.534 130.5 267.726 126.5 C 291.918 122.5 316.109 124.5 340.301 118.5 C 364.493 112.5 388.685 95.042 412.876 90.5 C 437.068 85.958 461.26 93.5 485.452 91.25 C 509.643 89 533.835 80.875 558.027 77 C 582.219 73.125 606.411 71.917 630.602 68 C 654.794 64.083 678.986 60 703.178 53.5 C 727.369 47 763.657 33.083 775.753 29" class="ct-line"></path><line x1="50" y1="193.25" x2="50.01" y2="193.25" class="ct-point" ct:value="287" opacity="1"></line><line x1="122.5752840909091" y1="168.75" x2="122.5852840909091" y2="168.75" class="ct-point" ct:value="385" opacity="1"></line><line x1="195.1505681818182" y1="142.5" x2="195.16056818181818" y2="142.5" class="ct-point" ct:value="490" opacity="1"></line><line x1="267.72585227272725" y1="126.5" x2="267.73585227272724" y2="126.5" class="ct-point" ct:value="554" opacity="1"></line><line x1="340.3011363636364" y1="118.5" x2="340.31113636363636" y2="118.5" class="ct-point" ct:value="586" opacity="1"></line><line x1="412.8764204545455" y1="90.5" x2="412.8864204545455" y2="90.5" class="ct-point" ct:value="698" opacity="1"></line><line x1="485.45170454545456" y1="91.25" x2="485.46170454545455" y2="91.25" class="ct-point" ct:value="695" opacity="1"></line><line x1="558.0269886363636" y1="77" x2="558.0369886363636" y2="77" class="ct-point" ct:value="752" opacity="1"></line><line x1="630.6022727272727" y1="68" x2="630.6122727272727" y2="68" class="ct-point" ct:value="788" opacity="1"></line><line x1="703.1775568181819" y1="53.5" x2="703.1875568181819" y2="53.5" class="ct-point" ct:value="846" opacity="1"></line><line x1="775.752840909091" y1="29" x2="775.762840909091" y2="29" class="ct-point" ct:value="944" opacity="1"></line></g><g class="ct-series ct-series-b"><path d="M 50 248.25 C 62.096 244.708 98.384 230.167 122.575 227 C 146.767 223.833 170.959 234.875 195.151 229.25 C 219.342 223.625 243.534 201.25 267.726 193.25 C 291.918 185.25 316.109 187.417 340.301 181.25 C 364.493 175.083 388.685 160.5 412.876 156.25 C 437.068 152 461.26 160.083 485.452 155.75 C 509.643 151.417 533.835 134.625 558.027 130.25 C 582.219 125.875 606.411 129.708 630.602 129.5 C 654.794 129.292 678.986 133.375 703.178 129 C 727.369 124.625 763.657 107.542 775.753 103.25" class="ct-line"></path><line x1="50" y1="248.25" x2="50.01" y2="248.25" class="ct-point" ct:value="67" opacity="1"></line><line x1="122.5752840909091" y1="227" x2="122.5852840909091" y2="227" class="ct-point" ct:value="152" opacity="1"></line><line x1="195.1505681818182" y1="229.25" x2="195.16056818181818" y2="229.25" class="ct-point" ct:value="143" opacity="1"></line><line x1="267.72585227272725" y1="193.25" x2="267.73585227272724" y2="193.25" class="ct-point" ct:value="287" opacity="1"></line><line x1="340.3011363636364" y1="181.25" x2="340.31113636363636" y2="181.25" class="ct-point" ct:value="335" opacity="1"></line><line x1="412.8764204545455" y1="156.25" x2="412.8864204545455" y2="156.25" class="ct-point" ct:value="435" opacity="1"></line><line x1="485.45170454545456" y1="155.75" x2="485.46170454545455" y2="155.75" class="ct-point" ct:value="437" opacity="1"></line><line x1="558.0269886363636" y1="130.25" x2="558.0369886363636" y2="130.25" class="ct-point" ct:value="539" opacity="1"></line><line x1="630.6022727272727" y1="129.5" x2="630.6122727272727" y2="129.5" class="ct-point" ct:value="542" opacity="1"></line><line x1="703.1775568181819" y1="129" x2="703.1875568181819" y2="129" class="ct-point" ct:value="544" opacity="1"></line><line x1="775.752840909091" y1="103.25" x2="775.762840909091" y2="103.25" class="ct-point" ct:value="647" opacity="1"></line></g><g class="ct-series ct-series-c"><path d="M 50 259.25 C 62.096 255.5 98.384 238.583 122.575 236.75 C 146.767 234.917 170.959 251.458 195.151 248.25 C 219.342 245.042 243.534 224.667 267.726 217.5 C 291.918 210.333 316.109 210.125 340.301 205.25 C 364.493 200.375 388.685 191.125 412.876 188.25 C 437.068 185.375 461.26 193.5 485.452 188 C 509.643 182.5 533.835 159.5 558.027 155.25 C 582.219 151 606.411 161.292 630.602 162.5 C 654.794 163.708 678.986 166.625 703.178 162.5 C 727.369 158.375 763.657 141.875 775.753 137.75" class="ct-line"></path><line x1="50" y1="259.25" x2="50.01" y2="259.25" class="ct-point" ct:value="23" opacity="1"></line><line x1="122.5752840909091" y1="236.75" x2="122.5852840909091" y2="236.75" class="ct-point" ct:value="113" opacity="1"></line><line x1="195.1505681818182" y1="248.25" x2="195.16056818181818" y2="248.25" class="ct-point" ct:value="67" opacity="1"></line><line x1="267.72585227272725" y1="217.5" x2="267.73585227272724" y2="217.5" class="ct-point" ct:value="190" opacity="1"></line><line x1="340.3011363636364" y1="205.25" x2="340.31113636363636" y2="205.25" class="ct-point" ct:value="239" opacity="1"></line><line x1="412.8764204545455" y1="188.25" x2="412.8864204545455" y2="188.25" class="ct-point" ct:value="307" opacity="1"></line><line x1="485.45170454545456" y1="188" x2="485.46170454545455" y2="188" class="ct-point" ct:value="308" opacity="1"></line><line x1="558.0269886363636" y1="155.25" x2="558.0369886363636" y2="155.25" class="ct-point" ct:value="439" opacity="1"></line><line x1="630.6022727272727" y1="162.5" x2="630.6122727272727" y2="162.5" class="ct-point" ct:value="410" opacity="1"></line><line x1="703.1775568181819" y1="162.5" x2="703.1875568181819" y2="162.5" class="ct-point" ct:value="410" opacity="1"></line><line x1="775.752840909091" y1="137.75" x2="775.762840909091" y2="137.75" class="ct-point" ct:value="509" opacity="1"></line></g></g><g class="ct-labels"><foreignObject style="overflow: visible;" x="50" y="270" width="72.5752840909091" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 73px; height: 20px;">'06</span></foreignObject><foreignObject style="overflow: visible;" x="122.5752840909091" y="270" width="72.5752840909091" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 73px; height: 20px;">'07</span></foreignObject><foreignObject style="overflow: visible;" x="195.1505681818182" y="270" width="72.5752840909091" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 73px; height: 20px;">'08</span></foreignObject><foreignObject style="overflow: visible;" x="267.72585227272725" y="270" width="72.5752840909091" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 73px; height: 20px;">'09</span></foreignObject><foreignObject style="overflow: visible;" x="340.3011363636364" y="270" width="72.57528409090912" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 73px; height: 20px;">'10</span></foreignObject><foreignObject style="overflow: visible;" x="412.8764204545455" y="270" width="72.57528409090907" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 73px; height: 20px;">'11</span></foreignObject><foreignObject style="overflow: visible;" x="485.45170454545456" y="270" width="72.57528409090907" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 73px; height: 20px;">'12</span></foreignObject><foreignObject style="overflow: visible;" x="558.0269886363636" y="270" width="72.57528409090912" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 73px; height: 20px;">'13</span></foreignObject><foreignObject style="overflow: visible;" x="630.6022727272727" y="270" width="72.57528409090912" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 73px; height: 20px;">'14</span></foreignObject><foreignObject style="overflow: visible;" x="703.1775568181819" y="270" width="72.57528409090912" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 73px; height: 20px;">'15</span></foreignObject><foreignObject style="overflow: visible;" x="775.752840909091" y="270" width="72.57528409090901" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 73px; height: 20px;"></span></foreignObject><foreignObject style="overflow: visible;" y="240" x="10" height="25" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 25px; width: 30px;">0</span></foreignObject><foreignObject style="overflow: visible;" y="215" x="10" height="25" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 25px; width: 30px;">100</span></foreignObject><foreignObject style="overflow: visible;" y="190" x="10" height="25" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 25px; width: 30px;">200</span></foreignObject><foreignObject style="overflow: visible;" y="165" x="10" height="25" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 25px; width: 30px;">300</span></foreignObject><foreignObject style="overflow: visible;" y="140" x="10" height="25" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 25px; width: 30px;">400</span></foreignObject><foreignObject style="overflow: visible;" y="115" x="10" height="25" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 25px; width: 30px;">500</span></foreignObject><foreignObject style="overflow: visible;" y="90" x="10" height="25" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 25px; width: 30px;">600</span></foreignObject><foreignObject style="overflow: visible;" y="65" x="10" height="25" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 25px; width: 30px;">700</span></foreignObject><foreignObject style="overflow: visible;" y="40" x="10" height="25" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 25px; width: 30px;">800</span></foreignObject><foreignObject style="overflow: visible;" y="15" x="10" height="25" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 25px; width: 30px;">900</span></foreignObject><foreignObject style="overflow: visible;" y="-15" x="10" height="30" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 30px; width: 30px;">1000</span></foreignObject></g></svg></div>
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <div class="card card-chart">
                    <div class="card-header card-header-icon card-header-danger">
                        <div class="card-icon">
                            <i class="material-icons">pie_chart</i>
                        </div>
                        <h4 class="card-title">Pie Chart</h4>
                    </div>
                    <div class="card-body">
                        <div id="chartPreferences" class="ct-chart"><svg xmlns:ct="http://gionkunz.github.com/chartist-js/ct" width="100%" height="230px" class="ct-chart-pie" style="width: 100%; height: 230px;"><g class="ct-series ct-series-a"><path d="M223.028,195.187A110,110,0,1,0,298.328,5L298.328,115Z" class="ct-slice-pie" ct:value="62"></path></g><g class="ct-series ct-series-b"><path d="M257.834,12.725A110,110,0,0,0,223.308,195.449L298.328,115Z" class="ct-slice-pie" ct:value="32"></path></g><g class="ct-series ct-series-c"><path d="M298.328,5A110,110,0,0,0,257.478,12.867L298.328,115Z" class="ct-slice-pie" ct:value="6"></path></g><g><text dx="349.46583172385385" dy="135.24685039765728" text-anchor="middle" class="ct-label">62%</text><text dx="244.30232620992211" dy="104.6940276977852" text-anchor="middle" class="ct-label">32%</text><text dx="288.0221526977851" dy="60.974201209922136" text-anchor="middle" class="ct-label">6%</text></g></svg></div>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col-md-12">
                                <h6 class="card-category">Legend</h6>
                            </div>
                            <div class="col-md-12">
                                <i class="fa fa-circle text-info"></i> Apple
                                <i class="fa fa-circle text-warning"></i> Samsung
                                <i class="fa fa-circle text-danger"></i> Windows Phone
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{{--<div class="container">--}}
{{--    <div class="row justify-content-center">--}}
{{--        <div class="col-md-8">--}}
{{--            <div class="card">--}}
{{--                <div class="card-header">Dashboard</div>--}}

{{--                <div class="card-body">--}}
{{--                    @if (session('status'))--}}
{{--                        <div class="alert alert-success" role="alert">--}}
{{--                            {{ session('status') }}--}}
{{--                        </div>--}}
{{--                    @endif--}}

{{--                    You are logged in!--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
@endsection
