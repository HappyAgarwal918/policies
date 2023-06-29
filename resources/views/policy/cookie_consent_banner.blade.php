@extends('layout.master')
@section('css')
  <link rel="stylesheet" type="text/css" href="{{asset('cookieconsent/new.css')}}">
  <link href="{{ asset('cookieconsent/1657722928.css')}}" rel="stylesheet" type="text/css" />
  <link href="{{ asset('cookieconsent/colorpicker.min.css')}}" rel="stylesheet" type="text/css" />
  <link type="text/css" rel="stylesheet" href="{{ asset('cookieconsent/cookieconsent.min.css')}}" />
@endsection

@section('content')
<div id="header-holder" class="inner-header">
  <div id="page-head" class="container-fluid inner-page">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="page-title">Create a cookie consent banner</div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid sfeatures">
    <div class="container">
        <div id="ifeatures" class="row">
            <div class="col-md-12">
                <div class="row-title">Comply with GDPR and EU cookie law with our free cookie consent banner plugin. Simply go through the steps below to customize it and copy the code to your site. Click on the "Preview" button at any time to see how it looks.</div>
                <div class="row-subtitle"></div>
            </div>
        </div>
    </div>
</div>
<div id="policy-head" class="container-fluid">
  <div class="container">
        <div id="content">
            <div class="plugin-policies cookieconsent configure">
                <p class="margin-bottom-large"><a class="button preview" onclick="wpccPreviewShow();return false;" href="#">Preview cookie consent banner</a></p>
                <h3>Configuration wizard</h3>

                <form action="" method="post">
                    <div class="steps">
                        <div class="step step1 position">
                            <a onclick="toggleStep(1);return false;" class="toggler active" href="#">1. Position</a>
                            <div class="panel" style="box-sizing: border-box;">
                                <div class="content">
                                    <p>Choose the display style of the cookie consent banner.</p>
                                    <ul class="display">
                                        <li class="display-tooltip">
                                            <a onclick="wpccPreviewSetDisplay(&#39;tooltip&#39;);return false;" title="Tooltip" href="#"><span class="img"></span><span class="lbl">Tooltip</span></a>
                                        </li>
                                        <li class="display-bar active">
                                            <a onclick="wpccPreviewSetDisplay(&#39;bar&#39;);return false;" title="Bar" href="#"><span class="img"></span><span class="lbl">Bar</span></a>
                                        </li>
                                    </ul>
                                    <p>Choose where you would like to display it.</p>
                                    <ul class="choices positions tooltip row" style="display: none;">
                                        <li class="col-ms-6 col-sm-3 position-bottom-left">
                                            <a onclick="wpccPreviewSetPosition(&#39;bottom-left&#39;);return false;" title="Bottom left" href="#"><span>Bottom left</span></a>
                                        </li>
                                        <li class="col-ms-6 col-sm-3 position-bottom-right">
                                            <a onclick="wpccPreviewSetPosition(&#39;bottom-right&#39;);return false;" title="Bottom right" href="#"><span>Bottom right</span></a>
                                        </li>
                                        <li class="col-ms-6 col-sm-3 position-top-left">
                                            <a onclick="wpccPreviewSetPosition(&#39;top-left&#39;);return false;" title="Top left" href="#"><span>Top left</span></a>
                                        </li>
                                        <li class="col-ms-6 col-sm-3 position-top-right">
                                            <a onclick="wpccPreviewSetPosition(&#39;top-right&#39;);return false;" title="Top right" href="#"><span>Top right</span></a>
                                        </li>
                                    </ul>
                                    <ul class="choices positions bar row" style="">
                                        <li class="col-ms-6 col-sm-3 position-bottom active">
                                            <a onclick="wpccPreviewSetPosition(&#39;bottom&#39;);return false;" title="Bottom" href="#"><span>Bottom</span></a>
                                        </li>
                                        <li class="col-ms-6 col-sm-3 position-top">
                                            <a onclick="wpccPreviewSetPosition(&#39;top&#39;);return false;" title="Top" href="#"><span>Top</span></a>
                                        </li>
                                        <li class="col-ms-6 col-sm-3 position-top-push">
                                            <a onclick="wpccPreviewSetPosition(&#39;top-push&#39;);return false;" title="Pushdown top" href="#"><span>Pushdown top</span></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="step step2 layout">
                            <a onclick="toggleStep(2);return false;" class="toggler" href="#">2. Layout</a>
                            <div class="panel" style="display: none; box-sizing: border-box;">
                                <div class="content">
                                    <fieldset>
                                        <div class="row">
                                            <div class="col-ms-6 col-xs-3 col-sm-2 layout-border">
                                                <div class="control">
                                                    <label for="input_wizard_layout_popup_border">Border</label>
                                                    <div class="field">
                                                        <select class="input-select" id="input_wizard_layout_popup_border" onchange="wpccPreviewSetBorder(this.value)" name="popup_border">
                                                            <option value="none">None</option>
                                                            <option value="thin" selected="selected">Thin</option>
                                                            <option value="normal">Normal</option>
                                                            <option value="thick">Thick</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-ms-6 col-xs-3 col-sm-2 layout-corners">
                                                <div class="control">
                                                    <label for="input_wizard_layout_popup_corners">Corners</label>
                                                    <div class="field">
                                                        <select class="input-select" id="input_wizard_layout_popup_corners" onchange="wpccPreviewSetCorners(this.value)" name="popup_corners">
                                                            <option value="none">None</option>
                                                            <option value="small" selected="selected">Small</option>
                                                            <option value="normal">Normal</option>
                                                            <option value="large">Large</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-ms-6 col-xs-3 col-sm-2 layout-padding">
                                                <div class="control">
                                                    <label for="input_wizard_layout_popup_padding">Padding</label>
                                                    <div class="field">
                                                        <select class="input-select" id="input_wizard_layout_popup_padding" onchange="wpccPreviewSetPadding(this.value)" name="popup_padding">
                                                            <option value="none">None</option>
                                                            <option value="small">Small</option>
                                                            <option value="normal" selected="selected">Normal</option>
                                                            <option value="large">Large</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-ms-6 col-xs-3 col-sm-2 layout-margin">
                                                <div class="control">
                                                    <label for="input_wizard_layout_popup_margin">Margin</label>
                                                    <div class="field">
                                                        <select class="input-select" id="input_wizard_layout_popup_margin" onchange="wpccPreviewSetMargin(this.value)" name="popup_margin">
                                                            <option value="none">None</option>
                                                            <option value="small">Small</option>
                                                            <option value="normal" selected="selected">Normal</option>
                                                            <option value="large">Large</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-ms-6 col-xs-3 col-sm-2 layout-transparency">
                                                <div class="control">
                                                    <label for="input_wizard_layout_popup_transparency">Transparency</label>
                                                    <div class="field">
                                                        <select class="input-select" id="input_wizard_layout_popup_transparency" onchange="wpccPreviewSetTransparency(this.value)" name="popup_transparency">
                                                            <option value="none" selected="selected">None</option>
                                                            <option value="5">5%</option>
                                                            <option value="10">10%</option>
                                                            <option value="15">15%</option>
                                                            <option value="20">20%</option>
                                                            <option value="25">25%</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-ms-6 col-xs-3 col-sm-2 layout-fontsize">
                                                <div class="control">
                                                    <label for="input_wizard_layout_popup_fontsize">Font size</label>
                                                    <div class="field">
                                                        <select class="input-select" id="input_wizard_layout_popup_fontsize" onchange="wpccPreviewSetFontSize(this.value)" name="popup_fontsize">
                                                            <option value="tiny">Tiny</option>
                                                            <option value="small">Small</option>
                                                            <option value="default" selected="selected">Default</option>
                                                            <option value="large">Large</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>
                                </div>
                            </div>
                        </div>
                        <div class="step step3 colors">
                            <a onclick="toggleStep(3);return false;" class="toggler" href="#">3. Colors</a>
                            <div class="panel" style="box-sizing: border-box; display: none;">
                                <div class="content">
                                    <p>Choose the color palette or specify your own colors.</p>
                                    <ul class="colors">
                                        <li class="color-0">
                                            <a onclick="wpccPreviewSetColors(0);return false;" href="#">
                                                <span style="background: #222222;" class="item">
                                                    <span style="background: #ffffff;" class="lbl"></span>
                                                    <span style="background: #ffffff;" class="lbl"></span>
                                                    <span style="background: #fde296;" class="btn"></span>
                                                </span>
                                            </a>
                                        </li>
                                        <li class="color-1">
                                            <a onclick="wpccPreviewSetColors(1);return false;" href="#">
                                                <span style="background: #222222;" class="item">
                                                    <span style="background: #ffffff;" class="lbl"></span>
                                                    <span style="background: #ffffff;" class="lbl"></span>
                                                    <span style="background: #b5e1a0;" class="btn"></span>
                                                </span>
                                            </a>
                                        </li>
                                        <li class="color-2">
                                            <a onclick="wpccPreviewSetColors(2);return false;" href="#">
                                                <span style="background: #222222;" class="item">
                                                    <span style="background: #ffffff;" class="lbl"></span>
                                                    <span style="background: #ffffff;" class="lbl"></span>
                                                    <span style="background: #b4eae4;" class="btn"></span>
                                                </span>
                                            </a>
                                        </li>
                                        <li class="color-3">
                                            <a onclick="wpccPreviewSetColors(3);return false;" href="#">
                                                <span style="background: #222222;" class="item">
                                                    <span style="background: #ffffff;" class="lbl"></span>
                                                    <span style="background: #ffffff;" class="lbl"></span>
                                                    <span style="background: #b3d0e4;" class="btn"></span>
                                                </span>
                                            </a>
                                        </li>
                                        <li class="color-4">
                                            <a onclick="wpccPreviewSetColors(4);return false;" href="#">
                                                <span style="background: #222222;" class="item">
                                                    <span style="background: #ffffff;" class="lbl"></span>
                                                    <span style="background: #ffffff;" class="lbl"></span>
                                                    <span style="background: #afb3e4;" class="btn"></span>
                                                </span>
                                            </a>
                                        </li>
                                        <li class="color-5">
                                            <a onclick="wpccPreviewSetColors(5);return false;" href="#">
                                                <span style="background: #222222;" class="item">
                                                    <span style="background: #ffffff;" class="lbl"></span>
                                                    <span style="background: #ffffff;" class="lbl"></span>
                                                    <span style="background: #d9baea;" class="btn"></span>
                                                </span>
                                            </a>
                                        </li>
                                        <li class="color-6">
                                            <a onclick="wpccPreviewSetColors(6);return false;" href="#">
                                                <span style="background: #222222;" class="item">
                                                    <span style="background: #ffffff;" class="lbl"></span>
                                                    <span style="background: #ffffff;" class="lbl"></span>
                                                    <span style="background: #e6b3b3;" class="btn"></span>
                                                </span>
                                            </a>
                                        </li>
                                        <li class="color-7">
                                            <a onclick="wpccPreviewSetColors(7);return false;" href="#">
                                                <span style="background: #222222;" class="item">
                                                    <span style="background: #ffffff;" class="lbl"></span>
                                                    <span style="background: #ffffff;" class="lbl"></span>
                                                    <span style="background: #f9f9f9;" class="btn"></span>
                                                </span>
                                            </a>
                                        </li>
                                        <li class="color-8">
                                            <a onclick="wpccPreviewSetColors(8);return false;" href="#">
                                                <span style="background: #5c4812;" class="item">
                                                    <span style="background: #ffffff;" class="lbl"></span>
                                                    <span style="background: #ffffff;" class="lbl"></span>
                                                    <span style="background: #fde296;" class="btn"></span>
                                                </span>
                                            </a>
                                        </li>
                                        <li class="color-9">
                                            <a onclick="wpccPreviewSetColors(9);return false;" href="#">
                                                <span style="background: #2a5b12;" class="item">
                                                    <span style="background: #ffffff;" class="lbl"></span>
                                                    <span style="background: #ffffff;" class="lbl"></span>
                                                    <span style="background: #b5e1a0;" class="btn"></span>
                                                </span>
                                            </a>
                                        </li>
                                        <li class="color-10">
                                            <a onclick="wpccPreviewSetColors(10);return false;" href="#">
                                                <span style="background: #1b4b45;" class="item">
                                                    <span style="background: #ffffff;" class="lbl"></span>
                                                    <span style="background: #ffffff;" class="lbl"></span>
                                                    <span style="background: #b4eae4;" class="btn"></span>
                                                </span>
                                            </a>
                                        </li>
                                        <li class="color-11 active">
                                            <a onclick="wpccPreviewSetColors(11);return false;" href="#">
                                                <span style="background: #1a3242;" class="item">
                                                    <span style="background: #ffffff;" class="lbl"></span>
                                                    <span style="background: #ffffff;" class="lbl"></span>
                                                    <span style="background: #b3d0e4;" class="btn"></span>
                                                </span>
                                            </a>
                                        </li>
                                        <li class="color-12">
                                            <a onclick="wpccPreviewSetColors(12);return false;" href="#">
                                                <span style="background: #1c1f4b;" class="item">
                                                    <span style="background: #ffffff;" class="lbl"></span>
                                                    <span style="background: #ffffff;" class="lbl"></span>
                                                    <span style="background: #afb3e4;" class="btn"></span>
                                                </span>
                                            </a>
                                        </li>
                                        <li class="color-13">
                                            <a onclick="wpccPreviewSetColors(13);return false;" href="#">
                                                <span style="background: #351944;" class="item">
                                                    <span style="background: #ffffff;" class="lbl"></span>
                                                    <span style="background: #ffffff;" class="lbl"></span>
                                                    <span style="background: #d9baea;" class="btn"></span>
                                                </span>
                                            </a>
                                        </li>
                                        <li class="color-14">
                                            <a onclick="wpccPreviewSetColors(14);return false;" href="#">
                                                <span style="background: #491b1b;" class="item">
                                                    <span style="background: #ffffff;" class="lbl"></span>
                                                    <span style="background: #ffffff;" class="lbl"></span>
                                                    <span style="background: #e6b3b3;" class="btn"></span>
                                                </span>
                                            </a>
                                        </li>
                                        <li class="color-15">
                                            <a onclick="wpccPreviewSetColors(15);return false;" href="#">
                                                <span style="background: #606060;" class="item">
                                                    <span style="background: #ffffff;" class="lbl"></span>
                                                    <span style="background: #ffffff;" class="lbl"></span>
                                                    <span style="background: #f9f9f9;" class="btn"></span>
                                                </span>
                                            </a>
                                        </li>
                                        <li class="color-16">
                                            <a onclick="wpccPreviewSetColors(16);return false;" href="#">
                                                <span style="background: #fff0ca;" class="item">
                                                    <span style="background: #000000;" class="lbl"></span>
                                                    <span style="background: #000000;" class="lbl"></span>
                                                    <span style="background: #e0bc57;" class="btn"></span>
                                                </span>
                                            </a>
                                        </li>
                                        <li class="color-17">
                                            <a onclick="wpccPreviewSetColors(17);return false;" href="#">
                                                <span style="background: #e2f7d4;" class="item">
                                                    <span style="background: #000000;" class="lbl"></span>
                                                    <span style="background: #000000;" class="lbl"></span>
                                                    <span style="background: #7fc25e;" class="btn"></span>
                                                </span>
                                            </a>
                                        </li>
                                        <li class="color-18">
                                            <a onclick="wpccPreviewSetColors(18);return false;" href="#">
                                                <span style="background: #edfdfa;" class="item">
                                                    <span style="background: #000000;" class="lbl"></span>
                                                    <span style="background: #000000;" class="lbl"></span>
                                                    <span style="background: #5ec2b6;" class="btn"></span>
                                                </span>
                                            </a>
                                        </li>
                                        <li class="color-19">
                                            <a onclick="wpccPreviewSetColors(19);return false;" href="#">
                                                <span style="background: #cff5ff;" class="item">
                                                    <span style="background: #000000;" class="lbl"></span>
                                                    <span style="background: #000000;" class="lbl"></span>
                                                    <span style="background: #5e99c2;" class="btn"></span>
                                                </span>
                                            </a>
                                        </li>
                                        <li class="color-20">
                                            <a onclick="wpccPreviewSetColors(20);return false;" href="#">
                                                <span style="background: #f0edff;" class="item">
                                                    <span style="background: #000000;" class="lbl"></span>
                                                    <span style="background: #000000;" class="lbl"></span>
                                                    <span style="background: #5e65c2;" class="btn"></span>
                                                </span>
                                            </a>
                                        </li>
                                        <li class="color-21">
                                            <a onclick="wpccPreviewSetColors(21);return false;" href="#">
                                                <span style="background: #ffe8ff;" class="item">
                                                    <span style="background: #000000;" class="lbl"></span>
                                                    <span style="background: #000000;" class="lbl"></span>
                                                    <span style="background: #9f5ec2;" class="btn"></span>
                                                </span>
                                            </a>
                                        </li>
                                        <li class="color-22">
                                            <a onclick="wpccPreviewSetColors(22);return false;" href="#">
                                                <span style="background: #ffe4e1;" class="item">
                                                    <span style="background: #000000;" class="lbl"></span>
                                                    <span style="background: #000000;" class="lbl"></span>
                                                    <span style="background: #c25e5e;" class="btn"></span>
                                                </span>
                                            </a>
                                        </li>
                                        <li class="color-23">
                                            <a onclick="wpccPreviewSetColors(23);return false;" href="#">
                                                <span style="background: #f6f6f6;" class="item">
                                                    <span style="background: #000000;" class="lbl"></span>
                                                    <span style="background: #000000;" class="lbl"></span>
                                                    <span style="background: #555555;" class="btn"></span>
                                                </span>
                                            </a>
                                        </li>
                                    </ul>
                                    <p><a onclick="$(&#39;#custom-colors-box&#39;).toggleFadeSlide(250);return false;" href="#">Customize colors</a></p>
                                    <div id="custom-colors-box" class="custom" style="display: none;">
                                        <div class="row">
                                            <div class="col-ms-12 col-xs-4 col-lg-3">
                                                <div class="lbl">Popup background</div>
                                                <div class="colorpick">
                                                    <a id="preview_wizard_color_popup_background" class="colorpick" data-colorpick-hex="#f6f6f6" href="#">
                                                        <span class="preview" style="background: rgb(26, 50, 66);"></span>
                                                    </a>
                                                    <input id="input_wizard_color_popup_background" type="hidden" name="popup_background_color" value="#1a3242" />
                                                </div>
                                            </div>
                                            <div class="col-ms-12 col-xs-4 col-lg-3">
                                                <div class="lbl">Popup text</div>
                                                <div class="colorpick">
                                                    <a id="preview_wizard_color_popup_text" class="colorpick" data-colorpick-hex="#000000" href="#">
                                                        <span class="preview" style="background: rgb(255, 255, 255);"></span>
                                                    </a>
                                                    <input id="input_wizard_color_popup_text" type="hidden" name="popup_text_color" value="#ffffff" />
                                                </div>
                                            </div>
                                            <div class="col-ms-12 col-xs-4 col-lg-3">
                                                <div class="lbl">Popup border</div>
                                                <div class="colorpick">
                                                    <a id="preview_wizard_color_popup_border" class="colorpick" data-colorpick-hex="#555555" href="#">
                                                        <span class="preview" style="background: rgb(179, 208, 228);"></span>
                                                    </a>
                                                    <input id="input_wizard_color_popup_border" type="hidden" name="popup_border_color" value="#b3d0e4" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-ms-12 col-xs-4 col-lg-3" id="input_wizard_color_button_background_control">
                                                <div class="lbl">Button background</div>
                                                <div class="colorpick">
                                                    <a id="preview_wizard_color_button_background" class="colorpick" data-colorpick-hex="#555555" href="#">
                                                        <span class="preview" style="background: rgb(179, 208, 228);"></span>
                                                    </a>
                                                    <input id="input_wizard_color_button_background" type="hidden" name="button_background_color" value="#b3d0e4" />
                                                </div>
                                            </div>
                                            <div class="col-ms-12 col-xs-4 col-lg-3" id="input_wizard_color_button_text_control">
                                                <div class="lbl">Button text</div>
                                                <div class="colorpick">
                                                    <a id="preview_wizard_color_button_text" class="colorpick" data-colorpick-hex="#ffffff" href="#">
                                                        <span class="preview" style="background: rgb(0, 0, 0);"></span>
                                                    </a>
                                                    <input id="input_wizard_color_button_text" type="hidden" name="button_text_color" value="#000000" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="step step4 link">
                            <a onclick="toggleStep(4);return false;" class="toggler" href="#">4. Cookie policy</a>
                            <div class="panel" style="display: none; box-sizing: border-box;">
                                <div class="content">
                                    <fieldset>
                                        <div class="control no-margin-bottom" id="cookie-policy-custom-url-box">
                                            <label for="input_wizard_cookie_policy_url">URL to your cookie policy</label>
                                            <div class="field">
                                                <input id="input_wizard_cookie_policy_url" class="text input-custom-value" placeholder="https://www.yoursite.com/cookie-policy/" type="text" name="cookie_policy_url" value="" />
                                                <span class="help">
                                                    Don’t have a cookie policy? <a target="_blank" href="#" rel="noreferrer noopener external">Create one now</a>, it’s free!
                                                </span>
                                            </div>
                                        </div>
                                    </fieldset>
                                </div>
                            </div>
                        </div>
                        <div class="step step5 text">
                            <a onclick="toggleStep(5);return false;" class="toggler" href="#">5. Custom text</a>
                            <div class="panel" style="display: none; box-sizing: border-box;">
                                <div class="content">
                                    <p class="no-margin-bottom">Customize the text displayed on the cookie consent banner or use default text.</p>
                                    <fieldset>
                                        <div class="control">
                                            <label for="input_wizard_message_text">Main message</label>
                                            <div class="field">
                                                <textarea id="input_wizard_message_text" class="input-custom-value textarea" name="message_text" cols="60" rows="10" placeholder="This website uses cookies to ensure you get the best experience on our website."></textarea>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-ms-12 col-xs-6">
                                                <div class="control">
                                                    <label for="input_wizard_cookie_policy_text">Policy link text</label>
                                                    <div class="field">
                                                        <input id="input_wizard_cookie_policy_text" class="text input-custom-value" type="text" name="cookie_policy_text" value="" placeholder="Learn more" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-ms-12 col-xs-6">
                                                <div class="control">
                                                    <label for="input_wizard_dismiss_button_text">
                                                        Dismiss button text
                                                    </label>
                                                    <div class="field">
                                                        <input id="input_wizard_dismiss_button_text" class="text input-custom-value" type="text" name="button_text" value="" placeholder="Got it!" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>
                                </div>
                            </div>
                        </div>
                        <div class="step step6 code">
                            <a onclick="toggleStep(6);return false;" class="toggler" href="#">6. Copy the code</a>
                            <div class="panel" style="display: block; box-sizing: border-box; display: none;">
                                <div class="content">
                                    <p>Copy the code below to the HTML header section of your website, just above the &lt;/head&gt; tag.</p>
                                    <div class="code">
                                        <pre class="scrollable"><code id="wpccPreviewCode">&lt;script src="https://policies.us.org/cookieconsent/cookieconsent.min.js" defer&gt;&lt;/script&gt;&lt;script&gt;window.addEventListener("load",function(){window.wpcc.init({"border":"thin","corners":"small","colors":{"popup":{"background":"#1a3242","text":"#ffffff","border":"#b3d0e4"},"button":{"background":"#b3d0e4","text":"#000000"}},"position":"bottom"})});&lt;/script&gt;</code></pre>
                                    </div>
                                    <ul class="buttons" style="margin-bottom: 30px;">
                                        <li><a id="input_wizard_wpcc_copy_code_button" class="button" onclick="return false;" data-clipboard-target="#wpccPreviewCode" href="#">Copy code</a></li>
                                        <li><a class="button preview" onclick="wpccPreviewShow();return false;" href="#">Preview</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
    <script src="{{ asset('cookieconsent/cash.min.js')}}"></script>
    <script defer="" src="{{ asset('cookieconsent/1657722928.js')}}"></script>
    <script defer="" src="{{ asset('cookieconsent/clipboard.min.js')}}"></script>
    <script defer="" src="{{ asset('cookieconsent/colorpicker.min.js')}}"></script>
    <script defer="" src="{{ asset('cookieconsent/cookieconsent.min.js')}}"></script>
    <script>
        var wpccPlatform = "";
    </script>
@endsection