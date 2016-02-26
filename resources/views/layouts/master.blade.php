<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]> <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]> <html class="no-js lt-ie9"> <![endif]-->
<html class='no-js'>
<head>
  <meta charset='utf-8'>
  <meta content='IE=edge,chrome=1' http-equiv='X-UA-Compatible'>
  <title>Leeds Vs. London - London be pricey, yo</title>
  <meta content="Leeds is great and so, I'm told is London but where would you live? Allow us to give you a hand." name='description'>
  <meta content='width=device-width' name='viewport'>
  <script src="{{asset('/js/vendor/modernizr-2.6.1.min.js')}}"></script>
  <link href="{{asset('/css/styles.css')}}" rel="stylesheet" />
  <!-- typekit -->
  <script src="https://use.typekit.net/pgw2qlz.js"></script>
  <script>
    try{Typekit.load({ async: true });}catch(e){}
  </script>
</head>
<body>
<div class='pageContainer'>
    <header class='siteHeader'>
        <div class='container'>
            <h1>Leeds Vs. London</h1>
        </div>
    </header>
    <div class='main' role='main'>
        <section class='container'>
            @yield('content')
        </section>
    </div>
    <footer>
        <ul>
            <li>
                <a href='{{url('about')}}'>About</a>
            </li>
            <li>
                Made for fun in Leeds by
                <a href='https://flodesign.co.uk/'>Flo Design</a>
            </li>
        </ul>
        <a href="http://www.zoopla.co.uk/"><img src="http://www.zoopla.co.uk/static/images/mashery/powered-by-zoopla-150x73.png" width="150" height="73" title="Property information powered by Zoopla" alt="Property information powered by Zoopla" border="0"></a>
    </footer>
</div>
</body>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
<script>
    window.jQuery || document.write('<script src="{{asset('javascripts/vendor/jquery-1.8.0.min.js')}}"><\/script>')
</script>
<script src="{{asset('/js/main.js')}}"></script>
<script type="text/javascript" src="https://platform.twitter.com/widgets.js"></script>
<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');​
    ga('create', 'UA-13017909-8', 'auto');
    ga('send', 'pageview');
</script>
</html>