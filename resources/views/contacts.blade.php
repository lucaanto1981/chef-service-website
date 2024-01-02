@extends('layouts.website')

@section('content')

@if (@isset($result) and $result == "OK")
<section class="hero bg-neutral-900 clr-neutral-100 text-center">
    <div class="container">
        <p class="fs-800 ff-accent clr-primary-400 margin-block-end-24">Thanks, your message has been seent.</p>
        <p class="fs-600 clr-neutral-100">We will get in touch soon!</p>
    </div>
</section>
@elseif (@isset($result) and $result <> "OK")
    <section class="hero bg-neutral-900 clr-neutral-100 text-center">
        <div class="container">
            <p class="fs-800 ff-accent clr-primary-400 margin-block-end-24">Sorry, something went wrong.</p>
            <p class="fs-600 clr-neutral-100">Please, retry to send your message!</p>
        </div>
    </section>
    <x-contact-form />
    @else
    <section class="hero bg-neutral-900 clr-neutral-100 text-center">
        <div class="container">
            <h1 class="fs-900 ff-accent mx-auto margin-block-end-24">Contact us</h1>
            <p class="fs-600 ff-accent clr-primary-400">Fill in the form and you weel be contacted soon</p>
        </div>
    </section>
    <x-contact-form />
    @endif






    @endsection