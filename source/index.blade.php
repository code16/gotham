@extends('_layouts.master')

@section('body')
    <div class="container">
        <div class="content">
            <div class="header">
                <div class="mb-4">
                    <img src="/assets/images/bat.png" alt="Gotham" width="57" height="22">
                </div>
                <h1 class="title colored-container">
                <span class="colored colored-primary">
                     Gotham
                </span>
                </h1>
                <h2 class="subtitle colored-container">
                    <span class="colored colored-primary">
                        design
                    </span>
                </h2>
                <h2 class="subtitle colored-container">
                    <span class="colored colored-primary">
                        développement web
                    </span>
                </h2>
                <h2 class="subtitle colored-container">
                    <span class="colored colored-primary">
                        édition
                    </span>
                </h2>
                <h2 class="subtitle colored-container">
                    <span class="colored colored-primary">
                        graphisme
                    </span>
                </h2>
                <h2 class="subtitle colored-container">
                    <span class="colored colored-primary">
                        infographie 3D
                    </span>
                </h2>
                <p class="item colored-container">
                    <a href="mailto:contact@gothamscm.com" class="colored colored-secondary">
                        contact@gothamscm.com
                    </a>
                </p>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="group">
                        <h2 class="subtitle colored-container">
                            <span class="colored colored-primary">Code 16</span>
                        </h2>
                        <p class="item colored-container">
                        <span class="colored colored-secondary">
                            Développement web
                        </span>
                        </p>
                        <p class="item colored-container">
                            <a class="colored colored-secondary" href="https://code16.fr/">
                                code16.fr
                            </a>
                        </p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="group">
                        <h2 class="subtitle colored-container">
                        <span class="colored colored-primary">
                             Rhinocéros
                        </span>
                        </h2>
                        <p class="item colored-container">
                        <span class="colored colored-secondary">
                            Art contemporain, etc.
                        </span>
                        </p>
                        <p class="item colored-container">
                            <a class="colored colored-secondary" href="http://www.r-diffusion.org/">
                                r-diffusion.org
                            </a>
                        </p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="group">
                        <h2 class="subtitle colored-container">
                        <span class="colored colored-primary">
                            Studio Lumen
                        </span>
                        </h2>
                        <p class="item colored-container">
                        <span class="colored colored-secondary">
                            Infographie 3D
                        </span>
                        </p>
                        <p class="item colored-container">
                            <a class="colored colored-secondary" href="https://studio-lumen.fr/">
                                studio-lumen.fr
                            </a>
                        </p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="group">
                        <h2 class="subtitle colored-container">
                        <span class="colored colored-primary">
                            Stéphane Riedinger
                        </span>
                        </h2>
                        <p class="item colored-container">
                        <span class="colored colored-secondary">
                            Graphiste
                        </span>
                        </p>
                        <p class="item colored-container">
                            <a class="colored colored-secondary" href="http://www.rdngr.com/">rdngr.com</a>
                        </p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="group">
                        <h2 class="subtitle colored-container">
                        <span class="colored colored-primary">
                            Atelier Poste 4
                        </span>
                        </h2>
                        <p class="item colored-container">
                            <span class="colored colored-secondary">Agence de graphisme</span>
                        </p>
                        <p class="item colored-container">
                            <a class="colored colored-secondary" href="http://www.atelierposte4.com/">atelierposte4.com</a>
                        </p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="group">
                        <h2 class="subtitle colored-container">
                            <span class="colored colored-primary">
                                V8 designers
                            </span>
                        </h2>
                        <p class="item colored-container">
                            <a class="colored colored-secondary" href="http://www.v8designers.com/">v8designers.com</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="background">
        <video class="background-video" autoplay loop muted playsinline webkit-playsinline src="/assets/videos/bats.mp4"></video>
        <div class="background-pattern"></div>
    </div>
@endsection