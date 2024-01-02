@extends('layouts.website')

@section('content')

<section class="hero bg-neutral-900 clr-neutral-100 text-center">
    <div class="container">
        <h1 class="fs-900 ff-accent mx-auto margin-block-end-24">Homecooked meal delivered straight to your door</h1>
        <div class="flex-group mx-auto">
            <button class="button" data-type="accent">Place order</button>
            <a href="#about" class="button" data-type="outline">About</a>

        </div>
    </div>
</section>

<section class="section" id="about">
    <div class="container">
        <div class="even-columns">
            <div>
                <picture>
                    <source srcset="../images/about.avif" type="image/avif">
                    <source srcset="../images/about.webp" type="image/webp">
                    <img class="box-shadow-1 shift-up" src="../images/about.jpg" alt="" srcset="">
                </picture>
            </div>
            <div class="flow">
                <header class="section-header">
                    <h2 class=" fs-800 clr-primary-500 ff-accent">This is a nice big heading</h2>
                    <p class="fs-600 uppercase">THIS IS A SUBHEAD WHICH MENTIONS SOME INTERESTING THINGS</p>
                </header>
                <p class="lead">THIS INTRODUCES THE FOLLOWING TEXT</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam egestas egestas dignissim. Quisque pretium nisi a rhoncus posuere.
                </p>
                <p>Ut posuere mauris nisl, sed consequat orci ultrices ac. Fusce et elit et nisl eleifend hendrerit. Nulla ac aliquam mauris. Aenean quam lacus, auctor eu lacus vitae, egestas elementum turpis. Morbi sed justo justo. </p>
            </div>

        </div>
    </div>
</section>
<section class="section bg-neutral-200">
    <div class="container">
        <div>
            <header class="section-header" data-decoration="true">
                <h3 class=" fs-800 clr-primary-500 ff-accent text-center">This is a nice big heading</h3>
                <p class="fs-600 uppercase text-center">THIS IS A SUBHEAD WHICH MENTIONS SOME INTERESTING THINGS</p>
            </header>
        </div>
        <div class="grid-auto-fit">
            <div>
                <p class="fs-500 fw-bold clr-neutral-900 uppercase">This is a subtitle</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam egestas egestas dignissim. Quisque pretium nisi a rhoncus posuere.</p>
            </div>
            <div>
                <p class="fs-500 fw-bold clr-neutral-900 uppercase">This is a subtitle</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam egestas egestas dignissim. Quisque pretium nisi a rhoncus posuere.</p>
            </div>
            <div>
                <p class="fs-500 fw-bold clr-neutral-900 uppercase">This is a subtitle</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam egestas egestas dignissim. Quisque pretium nisi a rhoncus posuere.</p>
            </div>
            <div>
                <p class="fs-500 fw-bold clr-neutral-900 uppercase">This is a subtitle</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam egestas egestas dignissim. Quisque pretium nisi a rhoncus posuere.</p>
            </div>
        </div>
    </div>
</section>

<section class="section bg-neutral-900 clr-neutral-100" id="meals">
    <div class="container" data-type="wide">
        <header class="section-header text-center" data-decoration="true">
            <h3 class=" fs-800">This is a nice big heading</h3>
            <p class="fs-600 uppercase">THIS IS A SUBHEAD WHICH MENTIONS SOME INTERESTING THINGS</p>
        </header>
        <div class="grid-auto-fit">
            <div>
                <figure class="interactive-figure">
                    <picture>
                        <source srcset="../images/meal-01.avif" type="image/avif">
                        <source srcset="../images/meal-01.webp" type="image/avif">
                        <img class="" src="../images/meal-01.jpg" alt="" srcset="" loading="lazy">
                    </picture>
                    <figcaption class="padding-32">
                        <h4 class="fs-500 fw-bold uppercase">About this meal</h4>
                        <p>Lorem ipsum dolor sit amet consectetur. Sapiente.</p>
                    </figcaption>
                </figure>

            </div>
            <div>
                <figure class="interactive-figure">
                    <picture>
                        <source srcset="../images/meal-02.avif" type="image/avif">
                        <source srcset="../images/meal-02.webp" type="image/avif">
                        <img class="" src="../images/meal-02.jpg" alt="" srcset="" loading="lazy">
                    </picture>
                    <figcaption class="padding-32">
                        <h4 class="fs-500 fw-bold uppercase">About this meal</h4>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
                    </figcaption>
                </figure>
            </div>
            <div>
                <figure class="interactive-figure">
                    <picture>
                        <source srcset="../images/meal-03.avif" type="image/avif">
                        <source srcset="../images/meal-03.webp" type="image/avif">
                        <img class="" src="../images/mea3-01.jpg" alt="" srcset="" loading="lazy">
                    </picture>
                    <figcaption class="padding-32">
                        <h4 class="fs-500 fw-bold uppercase">About this meal</h4>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
                    </figcaption>
                </figure>
            </div>

        </div>
    </div>
</section>

<section class="section" id="testimonials">
    <div class="container" data-type="wide">
        <div class="grid-auto-fit">
            <div class="card box-shadow-1" data-type="testimonial">
                <picture>
                    <source srcset="../images/testimonial-01.avif" type="image/avif">
                    <source srcset="../images/testimonial-01.webp" type="image/avif">
                    <img class="" src="../images/testimonial-01.jpg" alt="" srcset="" loading="lazy">
                </picture>
                <div class="card__body">
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quam culpa nulla consectetur, reiciendis possimus, animi atque deserunt eos ipsa ullam excepturi, amet delectus a commodi. Voluptas mollitia animi quos beatae.</p>
                </div>
                <div class="card__footer text-center bg-neutral-200">
                    <p class="fs-500 clr-primary-400">
                        John Deer
                    </p>
                    <p>Lore ipsum dolor sit amet</p>
                </div>
            </div>
            <div class="card box-shadow-1" data-type="testimonial">
                <picture>
                    <source srcset="../images/testimonial-02.avif" type="image/avif">
                    <source srcset="../images/testimonial-02.webp" type="image/avif">
                    <img class="" src="../images/testimonial-02.jpg" alt="" srcset="" loading="lazy">
                </picture>
                <div class="card__body">
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quam culpa nulla consectetur, reiciendis possimus, animi atque deserunt eos ipsa ullam excepturi, amet delectus a commodi. Voluptas mollitia animi quos beatae.</p>
                </div>
                <div class="card__footer text-center bg-neutral-200">
                    <p class="fs-500 clr-primary-400">
                        John Deer
                    </p>
                    <p>Lore ipsum dolor sit amet</p>
                </div>
            </div>
            <div class="card box-shadow-1" data-type="testimonial">
                <picture>
                    <source srcset="../images/testimonial-02.avif" type="image/avif">
                    <source srcset="../images/testimonial-02.webp" type="image/avif">
                    <img class="" src="../images/testimonial-02.jpg" alt="" srcset="" loading="lazy">
                </picture>
                <div class="card__body">
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quam culpa nulla consectetur, reiciendis possimus, animi atque deserunt eos ipsa ullam excepturi, amet delectus a commodi. Voluptas mollitia animi quos beatae.</p>
                </div>
                <div class="card__footer text-center bg-neutral-200">
                    <p class="fs-500 clr-primary-400">
                        John Deer
                    </p>
                    <p>Lore ipsum dolor sit amet</p>
                </div>
            </div>

        </div>
    </div>
</section>

@endsection