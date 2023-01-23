@extends('dashboard.layout.app')
@section('content')

    <div class="content-wrapper">
        <div class="container-full">
            <div class="col-xl-12 col-12">

                <div class="row">
                    <div class="col-lg-3 col-12">
                        <div class="box pull-up">
                            <div class="box-body">
                                <h5 class="mb-0">
                                    <span class="text-uppercase font-size-18"><i class="cc BTC" title="BTC"></i>Balance</span>
                                </h5>
                                <br>
                                <div class="d-flex justify-content-between">
                                    <p class="font-size-24">$@convert(auth()->user()->balance)</p>
                                </div>
                            </div>
                            <div class="box-body p-0">
                                <div id="spark1"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-12">
                        <div class="box pull-up">
                            <div class="box-body">
                                <h5 class="mb-0">
                                    <span class="text-uppercase font-size-18"><i class="cc USDT" title="USDT"></i>Profit</span>
                                </h5>
                                <br>
                                <div class="d-flex justify-content-between">
                                    <p class="font-size-24">$@convert(auth()->user()->profit)</p>
                                </div>
                            </div>
                            <div class="box-body p-0">
                                <div id="spark2"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-12">
                        <div class="box pull-up">
                            <div class="box-body">
                                <h5 class="mb-0">
                                    <span class="text-uppercase font-size-18"><i class="cc USDT-alt" title="BTC"></i>Traded</span>
                                </h5>
                                <br>
                                <div class="d-flex justify-content-between">
                                    <p class="font-size-24">$@convert($trade)</p>
                                </div>

                            </div>
                            <div class="box-body p-0">
                                <div id="spark3"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-12">
                        <div class="box pull-up">
                            <div class="box-body">
                                <h5 class="mb-0">
                                    <span class="text-uppercase font-size-18"><i class="cc USDT-alt" title="BTC"></i>Loss</span>
                                </h5>
                                <br>
                                <div class="d-flex justify-content-between">
                                    <p class="font-size-24 text-danger">$@convert($loss)</p>
                                </div>

                            </div>
                            <div class="box-body p-0">
                                <div id="spark3"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-4 col-12">
                        <div class="box pull-up">
                            <div class="box-body">
                                <h5 class="mb-0">
                                    <span class="text-uppercase font-size-18">
{{--                                          <i class="fa fa-badg text-primary fa-2x"></i> --}}
                                        <img height="50" width="50" src="{{ asset('img/usd.png') }}" alt="">
                                        Total Deposits
                                    </span>
                                </h5>
                                <br>
                                <div class="d-flex justify-content-between">
                                    <p class="font-size-24">$@convert($deposits)</p>
                                </div>
                            </div>
                            <div class="box-body p-0">
                                <div id="spark1"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-12">
                        <div class="box pull-up">
                            <div class="box-body">
                                <h5 class="mb-0">
                                    <span class="text-uppercase font-size-18">
                                        <img height="50" width="50" src="{{ asset('img/usd.png') }}" alt="">
                                        Withdrawal</span>
                                </h5>
                                <br>
                                <div class="d-flex justify-content-between">
                                    <p class="font-size-24">$@convert($withdrawal)</p>
                                </div>
                            </div>
                            <div class="box-body p-0">
                                <div id="spark2"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-12">
                        <div class="box pull-up">
                            <div class="box-body">
                                <h5 class="mb-0">
                                    <span class="text-uppercase font-size-18">
                                        <img height="50" width="50" src="{{ asset('img/usd.png') }}" alt="">
                                        Total Bonus</span>
                                </h5>
                                <br>
                                <div class="d-flex justify-content-between">
                                    <p class="font-size-24">$@convert($bonus + $bonus2)</p>
                                </div>

                            </div>
                            <div class="box-body p-0">
                                <div id="spark3"></div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <div class="col-xl-8 col-12">
                        <div class="box">
                            <div class="box-body">
                                <iframe src="https://widget.coinlib.io/widget?type=horizontal_v2&amp;theme=dark&amp;pref_coin_id=1505&amp;invert_hover=no" width="100%" height="36px" scrolling="no" marginwidth="0" marginheight="0" frameborder="0" border="0" style="border:0;margin:0;padding:0;"></iframe>
                            </div>
                        </div>
                        <div class="box">
                            <div class="box-body px-0">
                                <!-- TradingView Widget BEGIN -->
                                <div style="height: 500px" class="tradingview-widget-container">
                                    <div id="tradingview_f3e19"></div>
                                    <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/symbols/NASDAQ-AAPL/" rel="noopener" target="_blank"><span class="blue-text">AAPL stock chart</span></a> by TradingView</div>
                                    <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
                                    <script type="text/javascript">
                                        new TradingView.widget(
                                            {
                                                "autosize": true,
                                                "symbol": "NASDAQ:AAPL",
                                                "interval": "D",
                                                "timezone": "Etc/UTC",
                                                "theme": "dark",
                                                "style": "1",
                                                "locale": "en",
                                                "toolbar_bg": "#f1f3f6",
                                                "enable_publishing": false,
                                                "allow_symbol_change": true,
                                                "container_id": "tradingview_f3e19"
                                            }
                                        );
                                    </script>
                                </div>
                                <!-- TradingView Widget END -->
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-12">
                        <div class="box">
                            <div class="box-body">
                                <iframe src="https://widget.coinlib.io/widget?type=full_v2&amp;theme=dark&amp;cnt=3&amp;pref_coin_id=1505&amp;graph=yes" width="100%" scrolling="no" marginwidth="0" marginheight="0" frameborder="0" border="0" style="border:0;margin:0;padding:0; min-height: 212px;"></iframe>
                            </div>
                        </div>
                        <div class="box">
                            <div class="box-body">
                                <iframe src="https://widget.coinlib.io/widget?type=converter&amp;theme=dark" scrolling="no" marginwidth="0" marginheight="0" frameborder="0" border="0" style="border:0;margin:0;padding:0;" class="min-h-300 w-p100"></iframe>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-12">
                        <div class="box">
                            <div class="box-body">
                                <iframe src="https://widget.coinlib.io/widget?type=single_v2&amp;theme=dark&amp;coin_id=859&amp;pref_coin_id=1505" scrolling="no" marginwidth="0" marginheight="0" frameborder="0" border="0" style="border:0;margin:0;padding:0;line-height:14px;" class="min-h-200 w-p100"></iframe>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-12">
                        <div class="box">
                            <div class="box-body">
                                <iframe src="https://widget.coinlib.io/widget?type=single_v2&amp;theme=dark&amp;coin_id=145&amp;pref_coin_id=1505" scrolling="no" marginwidth="0" marginheight="0" frameborder="0" border="0" style="border:0;margin:0;padding:0;line-height:14px;" class="min-h-200 w-p100"></iframe>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-12">
                        <div class="box">
                            <div class="box-body">
                                <iframe src="https://widget.coinlib.io/widget?type=single_v2&amp;theme=dark&amp;coin_id=619&amp;pref_coin_id=1505" scrolling="no" marginwidth="0" marginheight="0" frameborder="0" border="0" style="border:0;margin:0;padding:0;line-height:14px;" class="min-h-200 w-p100"></iframe>
                            </div>
                        </div>
                    </div>

                </div>
            </section>
            <!-- /.content -->
        </div>
    </div>

@endsection
