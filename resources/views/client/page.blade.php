@extends('layout.main')
@section('title', $serviceItem['head_title'] ?? 'Combles - Kelia Travaux')
@section('seo')
    <meta name="description"
          content="Aménagement combles Aménager vos combles peut être une rénovation utile afin de gagner de l’espace. Il faut néanmoins connaître leurs structures afin de savoir si vos travaux sont envisageables. En effet, il existe deux types de combles en France : les combles à fermettes industrielles (structure « en W ») réputés pour être difficilement aménageables […]"/>
    <meta name="robots" content="max-image-preview:large"/>
    <meta property="og:locale" content="en_US"/>
    <meta property="og:site_name" content="Kelia Travaux -"/>
    <meta property="og:type" content="article"/>
    <meta property="og:title" content="Combles - Kelia Travaux"/>
    <meta property="og:description"
          content="Aménagement combles Aménager vos combles peut être une rénovation utile afin de gagner de l’espace. Il faut néanmoins connaître leurs structures afin de savoir si vos travaux sont envisageables. En effet, il existe deux types de combles en France : les combles à fermettes industrielles (structure « en W ») réputés pour être difficilement aménageables […]"/>
    <meta property="article:published_time" content="2021-06-04T02:46:56+00:00"/>
    <meta property="article:modified_time" content="2021-06-22T12:16:49+00:00"/>
    <meta name="twitter:card" content="summary"/>
    <meta name="twitter:domain" content="kelia-travaux.com"/>
    <meta name="twitter:title" content="Combles - Kelia Travaux"/>
    <meta name="twitter:description"
          content="Aménagement combles Aménager vos combles peut être une rénovation utile afin de gagner de l’espace. Il faut néanmoins connaître leurs structures afin de savoir si vos travaux sont envisageables. En effet, il existe deux types de combles en France : les combles à fermettes industrielles (structure « en W ») réputés pour être difficilement aménageables […]"/>
@endsection
@section('additional-head')
    <link rel='stylesheet' id='elementor-post-778-css'
          href='{{asset('css/defaults/custom_page/arrangement_attic.css')}}' type='text/css' media='all'/>
    <link rel="stylesheet" href="{{ asset(mix('css/base/plugins/forms/form-quill-editor.css')) }}">

    <!-- vendor css files -->
    <link rel="stylesheet" href="{{ asset(mix('vendors/css/editors/quill/katex.min.css')) }}">
    <link rel="stylesheet" href="{{ asset(mix('vendors/css/editors/quill/monokai-sublime.min.css')) }}">
    <link rel="stylesheet" href="{{ asset(mix('vendors/css/editors/quill/quill.snow.css')) }}">

    <style>
        .middle-image-container {
            height: 80%;
        }

        .h-100 {
            height: 100% !important;
        }

        .middle-image {
            height: 100% !important;
            object-fit: cover;
        }

        .head-immage {
            width: 100%;
            top: 0;
            left: 0;
            position: absolute;
            object-fit: cover;
            height: 574px !important;
        }
    </style>
@endsection
@section('scripts')
    <script src="{{ asset(mix('vendors/js/editors/quill/katex.min.js')) }}"></script>
    <script src="{{ asset(mix('vendors/js/editors/quill/highlight.min.js')) }}"></script>
    <script src="{{ asset(mix('vendors/js/editors/quill/quill.min.js')) }}"></script>
    <script src="{{ asset(mix('vendors/js/forms/select/select2.full.min.js')) }}"></script>

    <script>

        const serviceItem = {!! $serviceItem->toJson() !!};
        const body_text_head = JSON.parse(serviceItem['body_text_head']);
        const body_text_bottom = JSON.parse(serviceItem['body_text_bottom']);


        const Font = Quill.import('formats/font');
        Font.whitelist = ['sofia', 'slabo', 'roboto', 'inconsolata', 'ubuntu'];
        Quill.register(Font, true);

        const quillHead = new Quill('#text-head');
        const quillBottom = new Quill('#text-bottom');

        quillHead.setContents(body_text_head);
        quillBottom.setContents(body_text_bottom);

        quillHead.disable();
        quillBottom.disable();
    </script>
@endsection
@section('content')
    <div class="elementor elementor-778">
        <div class="elementor-section-wrap">
            <section class="has_eae_slider ob-is-breaking-bad elementor-section elementor-top-section elementor-element elementor-element-74e00fe6 elementor-section-height-min-height elementor-section-boxed elementor-section-height-default elementor-section-items-middle">
                <div>
                <img src="{{url($serviceItem->image_bg_src)}}" alt="" class="head-immage">
                </div>
                <div class="elementor-background-overlay">
                </div>
                <div class="elementor-container elementor-column-gap-default">
                    <div class="has_eae_slider elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-62e349da">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-707e9a57 ob-harakiri-inherit elementor-widget elementor-widget-heading">
                                <div class="elementor-widget-container">
                                    <h1 class="elementor-heading-title elementor-size-default">
                                        {{$serviceItem['title']}}
                                    </h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section
                class="has_eae_slider ob-is-breaking-bad elementor-section elementor-top-section elementor-element elementor-element-549b5ca5 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                data-id="549b5ca5" data-element_type="section"
                data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;_ob_bbad_use_it&quot;:&quot;yes&quot;,&quot;_ob_bbad_sssic_use&quot;:&quot;no&quot;,&quot;_ob_glider_is_slider&quot;:&quot;no&quot;}">
                <div class="elementor-container elementor-column-gap-default">
                    <div
                        class="has_eae_slider elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-5d353eb6"
                        data-id="5d353eb6" data-element_type="column"
                        data-settings="{&quot;_ob_bbad_is_stalker&quot;:&quot;no&quot;,&quot;_ob_teleporter_use&quot;:false,&quot;_ob_column_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_column_has_pseudo&quot;:&quot;no&quot;}">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div
                                class="elementor-element elementor-element-42d37392 ob-harakiri-inherit elementor-widget elementor-widget-text-editor"
                                data-id="42d37392" data-element_type="widget"
                                data-settings="{&quot;_ob_harakiri_writing_mode&quot;:&quot;inherit&quot;,&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}"
                                data-widget_type="text-editor.default">
                                <div class="elementor-widget-container">
                                    <p>
                                        {{$serviceItem['sub_text']}}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section
                class="has_eae_slider ob-is-breaking-bad elementor-section elementor-top-section elementor-element elementor-element-3ebd562a elementor-section-boxed elementor-section-height-default elementor-section-height-default">
                <div class="elementor-container elementor-column-gap-default">
                    <div id="text-head"></div>
                </div>
            </section>

            <section
                class="elementor-section elementor-section-boxed">
                <div class="elementor-container elementor-column-gap-default">

                    <div class="has_eae_slider elementor-column elementor-col-50 elementor-top-column">
                        <div class="elementor-widget-wrap elementor-element-populated middle-image-container">
                            <div class="elementor-container elementor-column-gap-default h-100">
                                <div class="elementor-column elementor-col-100 elementor-inner-column">
                                    <div class="elementor-widget-wrap">
                                        @if($serviceItem->imageFirst)
                                            <img src="{{$serviceItem->image_first_src}}" alt=""
                                                 class="middle-image">
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="has_eae_slider elementor-column elementor-col-50 elementor-top-column">
                        <div class="elementor-widget-wrap elementor-element-populated middle-image-container"
                             style="margin: 22% 0 0 0;">
                            <div class="elementor-container elementor-column-gap-default h-100">
                                <div class="elementor-column elementor-col-100 elementor-inner-column">
                                    <div class="elementor-widget-wrap">
                                        @if($serviceItem->imageSecond)
                                            <img src="{{$serviceItem->image_second_src}}" alt=""
                                                 class="middle-image">
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section
                class="has_eae_slider ob-is-breaking-bad elementor-section elementor-top-section elementor-element elementor-element-3ebd562a elementor-section-boxed elementor-section-height-default elementor-section-height-default">
                <div class="elementor-container elementor-column-gap-default">
                    <div id="text-bottom"></div>
                </div>
            </section>
        </div>
    </div>
@endsection
