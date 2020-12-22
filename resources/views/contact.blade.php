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

    h1#top {
        font-size: 48px;
        font-weight: 900;
        background-color: rgba(255, 255, 255, 0.5);
    }

    #faqsearch {
        height: 3rem;
        font-size: 26px;
        color: gray;
    }
</style>

</head>

@extends('layouts.app')
@section('content')
<section id="headerSection">
    <div class="h-100 d-flex justify-content-center" id="headerImg">
        <div class="col-xl-10 mt-auto mb-auto text-center">
            <h1 id="top">Kontakt aufnehmen</h1>
            <form action="">
                <input class="w-25" type="text" id="faqsearch" name="faqsearch" value="FAQ durchsuchen">
            </form>
        </div>
    </div>
</section>

<div class="form-content bg-white">
    
<h1 class="text-center pt-5">Senden Sie uns eine Nachricht</h1>
    <div class="form-group">

        <div class="row m-auto justify-content-center">
            <div class="col-sm-4 mt-5">
                <label for="cname">Ihr Name</label>
                <input type="text" name="cname" id="cname" required="true" class="form-control textfield" value="">
            </div>
        </div>
        <div class="row m-auto justify-content-center">
            <div class="col-sm-4">
                <label for="email">Ihre Email Adresse</label>
                <input type="email" name="email" id="email" required="true" class="form-control textfield" value="">
            </div>
        </div>

        <div class="row m-auto justify-content-center">
            <div class="col-sm-4">
                <label for="csubject">Betreff</label>
                <input type="text" name="csubject" id="csubject" required="true" class="form-control textfield" value="">
            </div>
        </div>

        <div class="row m-auto justify-content-center">
            <div class="col-sm-4">
                <label for="cmessage">Nachricht</label>
                <textarea rows="6" name="cmessage" id="cmessage" required="true" class="form-control textfield"></textarea>
            </div>
        </div>
        <div class="row m-auto justify-content-center">
            <div class="col-sm-2 mt-3 mb-5">
                        <button type="submit" class="btn btn-warning " id="msgsubmit">Anfrage absenden</button>
        <input type="hidden" name="lang" value="de">
        <input type="hidden" name="call" value="submitcontact">
            </div>
        </div>

    </div>

</div>

<div class="row align-items-center m-auto bg-white">
    <div class="col-7 text-right mb-5 mt-5">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3178.4142765841084!2d14.299215391422104!3d48.312680213834625!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x477398265ee68f3b%3A0xc8ef316571b0d60c!2sCodersbay!5e0!3m2!1sde!2sat!4v1608208272238!5m2!1sde!2sat" width="700" height="400" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe> </div>
    <div class="col-3 text-center">
        <h4><strong>Kontaktdaten</strong></h4>
        <p>Coders.Bay</p>
        <p>Peter-Berens-Platz 6</p>
        <p>4020 Linz</p>
    </div>
</div>
@endsection