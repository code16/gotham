@extends('_layouts.master')

@section('body')
    <video id="bgvid" autoplay loop muted src="/assets/videos/bats.mp4"></video>

    <div class="panel">
        <div class="header clearfix">
            <img src="/assets/images/bat.png" alt="Gotham" width="57px" height="22px">
            <h1>Gotham</h1>
            <h2>design</h2>
            <h2>développement internet</h2>
            <h2>édition</h2>
            <h2>graphisme</h2>
            <h2>infographie 3D</h2>
            <p><a href="mailto:contact@gothamscm.com">contact@gothamscm.com</a></p>
        </div>

        <ul class="structures clearfix">
            <li>
                <h2>Code 16</h2>
                <p>Développement logiciel et internet</p>
                <p><a href="https://code16.fr/">code16.fr</a></p>
            </li>
            <li>
                <h2>Rhinocéros</h2>
                <p>Art contemporain, etc.</p>
                <p><a href="http://www.r-diffusion.org/">r-diffusion.org</a></p>
            </li>
            <li>
                <h2>Julien Stievenard</h2>
                <p>Infographie 3D</p>
                <p><a href="https://js-infographie.com/">js-infographie.com</a></p>
            </li>
            <li>
                <h2>Stéphane Riedinger</h2>
                <p>Graphiste</p>
                <p><a href="http://www.rdngr.com/">rdngr.com</a></p>
            </li>
            <li>
                <h2>Atelier Poste 4</h2>
                <p>Agence de graphisme</p>
                <p><a href="http://www.atelierposte4.com/">atelierposte4.com</a></p>
            </li>
            <li>
                <h2>V8 designers</h2>
                <p><a href="http://www.v8designers.com/">v8designers.com</a></p>
            </li>
        </ul>
    </div>

    <div class="background-pattern position-fixed w-100 h-100"></div>
@endsection