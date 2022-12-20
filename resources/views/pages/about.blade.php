@extends('pages.layout.app')
@section('content')

    <link rel='stylesheet' id='quantfury-style-css' href='{{ asset('wp-content/themes/quantfury/frontend/public/styles/style.min8878.css?ver=0a394aaf080e680671f88e507eed108c') }}' type='text/css' media='all' />
    <link rel='stylesheet' id='story-block-styles-css' href='{{ asset('wp-content/themes/quantfury/frontend/public/styles/story.minaffa.css?ver=b2ddef7dd8199fe399af54b899c61e24') }}' type='text/css' media='all' />
    <link rel='stylesheet' id='classic-theme-styles-css' href='{{ asset('wp-includes/css/classic-themes.min68b3.css?ver=1') }}' type='text/css' media='all' />

<main style="background-color: #fff0ff" class="t-base__main js-content">


    <section class="s-story">
        <div class="s-story__container">
            <h1 class="s-story__title el-headline">
                Our story
            </h1>

            <div class="s-story__content">
                <div class="s-story__picture">
                    <picture class="el-picture">
                        <source media="(max-width: 374.99px)" srcset="https://quantfury.com/wp-content/uploads/fly-images/14397/our-story-345x345.png 1x, https://quantfury.com/wp-content/uploads/fly-images/14397/our-story-690x690.png 2x" width="345" height="345">
                        <source media="(max-width: 767.99px)" srcset="https://quantfury.com/wp-content/uploads/fly-images/14397/our-story-735x735.png 1x, https://quantfury.com/wp-content/uploads/fly-images/14397/our-story-1470x1470.png 2x" width="540" height="540">
                        <source media="(max-width: 1023.99px)" srcset="https://quantfury.com/wp-content/uploads/fly-images/14397/our-story-270x270.png 1x, https://quantfury.com/wp-content/uploads/fly-images/14397/our-story-540x540.png 2x" width="270" height="270">
                        <source media="(max-width: 1199.99px)" srcset="https://quantfury.com/wp-content/uploads/fly-images/14397/our-story-270x270.png 1x, https://quantfury.com/wp-content/uploads/fly-images/14397/our-story-540x540.png 2x" width="270" height="270">
                        <source media="(max-width: 1599.99px)" srcset="https://quantfury.com/wp-content/uploads/fly-images/14397/our-story-270x270.png 1x, https://quantfury.com/wp-content/uploads/fly-images/14397/our-story-540x540.png 2x" width="270" height="270">
                        <source media="(min-width: 1600px)" srcset="https://quantfury.com/wp-content/uploads/fly-images/14397/our-story-270x270.png 1x, https://quantfury.com/wp-content/uploads/fly-images/14397/our-story-540x540.png 2x" width="270" height="270">
                        <img decoding="async" loading="lazy" class="s-story__img el-image" src="{{ asset('wp-content/uploads/fly-images/14397/our-story-270x270.png') }}" alt="" width="270" height="270">
                    </picture>
                </div>

                <div class="s-story__text el-wysiwyg">
                    <p>TradesExecution story begins almost 3 decades ago, when our founder Lev Mazur read Isaac Asimov’s Foundation series, and learned about the concept of psychohistory and the character of Hari Seldon.</p>
                    <p>The idea of predicting events guided him 10 years later to start working in the financial industry as a trader in the early 90s. Since then, Lev has been a quantitative trader of proprietary capital, forex, futures, commodities and equity markets, working in various financial institutions and has seen the global financial trading industry expanding from serving few, to pretty much everybody with a mobile phone or computer.</p>
                    <p class="p1">Struck by the global brokerage industry practices of quoting incorrect asset prices and charging various fees, promoting greed and churning and burning users, Lev came up with an idea of TradesExecution and the Quantfurian principles based on trading with unmatched conditions, and a unique transparent business model that is shared with Quantfurians as well.</p>

                </div>
            </div>
        </div>
    </section>
</main>


    <script type='text/javascript' src='{{ asset('wp-content/themes/quantfury/frontend/public/js/librariesd198.js?ver=c3ee6f7344dcadc0836ce12f062b5506') }}' id='quantfury-libraries-js'></script>
    <script type='text/javascript' id='quantfury-scripts-js-extra'>
        /* <![CDATA[ */
        var siteLanguage = {"code":"en"};
        /* ]]> */
    </script>
    <script type='text/javascript' src='{{ asset('wp-content/themes/quantfury/frontend/public/js/scripts7c0a.js?ver=f6f77d7bf75cbdf6574645ab18af2db1') }}' id='quantfury-scripts-js'></script>



@endsection
