@extends('master')

@section('content')

    <div class="bandeau" style="background-image:url(Images/IMG_3289.jpg)">
        <h1 class="white">Ajit Shilpi's Signature Architect</h1>
        <p class="white">Generating your company email signature</p>
    </div>


    <div class="row">
        <div class="card-light col-span-3-6">
            <div>
                <h1>Make Your Own Email Signature</h1>
                <p>Fill this form out correctly to generate an HTML rich-text email signature to use with your new
                    company email ID. Be sure to use good spelling and write your phone number with an international
                    country code. Before you use the signature, check that the preview at the bottom of the page
                    displays correctly!</p>
                <br>
                <h2>Your Information</h2>
                <br>

                <form method="POST" action="/generate"
                      class="uk-form-stacked">

                    {{ csrf_field() }}

                    <label>Name
                        <input class="uk-input" type="text" name="name" value='{{ old('name') }}'>
                    </label>

                    <label>Email Address (Company)
                        <input class="uk-input" type="email" name="email" value='{{ old('email') }}'>
                    </label>

                    <label>Mobile Phone Number (Company)
                        <input class="uk-input" type="tel" name="phone" value='{{ old('phone') }}'>
                    </label>

                    <label>Job Title
                        <select class="uk-select" name="title">
                            @foreach ($jobs AS $key => $value)
                                <option value="{{ $value }}"
                                {{--@if (isset('title') && $value === ['title'])--}}
                                    {{--{{'selected'}}--}}
                                        {{--@endif>--}}
                                >
                                    {{ $key }}
                                </option>
                            @endforeach

                        </select>
                    </label>

                    <label> <input class="uk-checkbox" type="checkbox" name="ifwork" value="ifwork">
                        I confirm that I work at Ajit Shilpi's Office and I am aware that this tool is proprietary.
                    </label>


                    <button type='submit' class="primary" value="submit-true" name="Generate">
                        Generate
                    </button>

                </form>
            </div>
        </div>


        <div class="card-light col-span-3-6">
            <div>

                @if (!isset($_POST['Generate']))
                    <h1>Signature Code</h1>
                    <p>Once you have correctly filled out your form, your html signature code will appear here, and
                        you
                        will be able to preview your signature below to check it before you use it. </p>
                @endif

                @if ((isset($_POST['Generate'])) && !isset($_POST['ifwork']) || (isset($_POST['Generate'])) && $_POST['ifwork'] = "")
                    <h1>Not Cool!</h1>
                    <p>You Must work at Ajit Shilpi Architects to use this. </p>
                @endif

                @if(count($errors) > 0)
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                @endif

                @if (isset($_POST['Generate']) && !$form->hasErrors && isset($_POST['ifwork']))
                    @include("includes/FormFilledCode.php")
                @endif

            </div>
        </div>
    </div>

    @if (isset($_POST['Generate']) && !$form->hasErrors && isset($_POST['ifwork']))
        @include("includes/FormFilledDisplay.php")
    @endif

@endsection
