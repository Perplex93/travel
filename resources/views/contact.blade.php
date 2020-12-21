@section('title', 'Kontakt')


<style>
    section#headerSection {
        height: 500px;
    }

    div#headerImg {
        background-image: url('https://images.unsplash.com/photo-1544717301-9cdcb1f5940f?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80');
        background-position: 25% 40%;
        background-attachment: fixed;
        background-repeat: no-repeat;
        background-size: cover;
    }

    h1#top{
        font-size: 48px;
        font-weight: 900;
        background-color:rgba(255, 255, 255, 0.5);
    }

    #faqsearch{
        height: 3rem;
        font-size: 26px;
        color: gray;
    }

</style>

</head>

@extends('layouts.app')
@section('content')
<section id="headerSection">
    <div class="h-100 d-flex justify-content-center " id="headerImg">
        <div class="col-xl-10 mt-auto mb-auto text-center">
            <h1 id="top">Kontakt aufnehmen</h1>
            <form action="" class="">
            <input class="w-25 " type="text" id="faqsearch" name="faqsearch" value="FAQ durchsuchen">
            </form>
        </div>
    </div>
</section>

<div class="row mt-5">
    <div class="col-7 text-right">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3178.4142765841084!2d14.299215391422104!3d48.312680213834625!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x477398265ee68f3b%3A0xc8ef316571b0d60c!2sCodersbay!5e0!3m2!1sde!2sat!4v1608208272238!5m2!1sde!2sat" width="700" height="400" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>    </div>
    <div class="col-3 text-center">
        <h4><strong>Kontaktdaten</strong></h4>
        <p>Coders.Bay</p>
        <p>Peter-Berens-Platz 6</p>
        <p>4020 Linz</p>
    </div>
</div>
@endsection