<!doctype html>
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="DynamicLayers">
<title>Charitify || Fundraising NGO</title>
@include('layouts.css')
</head>
<body>
@include('layouts.preloader')
@include('layouts.header-content')
<div class="header-height"></div>
<div class="pager-header">
<div class="container">
<div class="page-content">
<h2>Sponsor</h2>
<p>Lorem Ipsum is simply text of the industry. </p>
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="index.html">Home</a></li>
<li class="breadcrumb-item active">Sponsor Form</li>
</ol>
</div>
</div>
</div>
<section class="testimonial-section bd-bottom padding">
<div class="container">
<div class="section-heading text-center mb-40">
<h2>Download the form from here</h2>
<span class="heading-border"></span>
<p>Download the form ,fill it and then submit it to our office.<br> All the information provided <strong>MUST</strong>  be <strong>True</strong> to avoid inconveniencies.</p>
<div class="hidden-print">

    <div class="">
        <a href="javascript:window.print()" class="btn btn-dark waves-effect waves-light"><i class="fa fa-print"></i></a>
        {{--<a href="#" class="btn btn-primary waves-effect waves-light">Submit</a>--}}
        <a href="./directory/yourfile.pdf" download="newfilename">Download the pdf</a>
    </div>
    <div class="clearfix"></div>
</div>
</div>
</div>
</section>
@include('layouts.footer-content')
@include('layouts.footer')
<a data-scroll href="#header" id="scroll-to-top"><i class="arrow_up"></i></a>
@include('layouts.javascript')
</body>