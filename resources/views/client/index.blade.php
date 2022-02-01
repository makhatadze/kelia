@extends('layout.main')
@section('title', 'Accueil - Kelia Travaux')

@section('content')
    <div data-elementor-type="wp-page" data-elementor-id="593" class="elementor elementor-593"
         data-elementor-settings="[]">
        <div class="elementor-section-wrap">
            <section
                style="background-image: none"
                class="has_eae_slider ob-is-breaking-bad elementor-section elementor-top-section elementor-element elementor-element-334886e elementor-section-height-min-height elementor-section-items-stretch elementor-section-content-middle elementor-section-stretched elementor-section-boxed elementor-section-height-default"
            >


                <style>
                    .main-image {
                        position: absolute;
                        z-index: 0;
                        top: 0;
                        width: 100%;
                    }

                    .main-image img {
                        width: 100%;
                        height: 100vh;
                        object-fit: cover;
                        object-position: top center;
                    }
                </style>\
                <div class="main-image">
                    <img src="{{ $contentImage->image_src }}"
                        alt="">
                </div>

                <div class="elementor-background-overlay"></div>
                <div class="elementor-container elementor-column-gap-default">
                    <div
                        class="has_eae_slider elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-5352333"
                        data-id="5352333" data-element_type="column"
                        data-settings="{&quot;_ob_bbad_is_stalker&quot;:&quot;no&quot;,&quot;_ob_teleporter_use&quot;:false,&quot;_ob_column_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_column_has_pseudo&quot;:&quot;no&quot;}">
                        <div class="elementor-widget-wrap elementor-element-populated">

                            <section
                                class="has_eae_slider ob-is-breaking-bad ob-bb-inner elementor-section elementor-inner-section elementor-element elementor-element-544cbb4 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                data-id="544cbb4" data-element_type="section"
                                data-settings="{&quot;_ob_bbad_use_it&quot;:&quot;yes&quot;,&quot;_ob_bbad_sssic_use&quot;:&quot;no&quot;,&quot;_ob_glider_is_slider&quot;:&quot;no&quot;}">

                                <div class="elementor-container elementor-column-gap-default">
                                    <div
                                        class="has_eae_slider elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-c839a27"
                                        data-id="c839a27" data-element_type="column"
                                        data-settings="{&quot;_ob_bbad_is_stalker&quot;:&quot;no&quot;,&quot;_ob_teleporter_use&quot;:false,&quot;_ob_column_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_column_has_pseudo&quot;:&quot;no&quot;}">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div
                                                class="elementor-element elementor-element-1572d22 ob-harakiri-inherit elementor-widget elementor-widget-heading"
                                                data-id="1572d22" data-element_type="widget"
                                                data-settings="{&quot;_ob_harakiri_writing_mode&quot;:&quot;inherit&quot;,&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}"
                                                data-widget_type="heading.default">
                                                <div class="elementor-widget-container">
                                                    <h1 class="elementor-heading-title elementor-size-default">
                                                    {{\App\Helpers\Helper::finder($texts, config('admin.other.sections.head'), config('admin.other.text_type.header'))}}
                                                </div>
                                                <div
                                                    class="elementor-element elementor-element-267829f elementor-widget__width-initial elementor-widget-mobile__width-inherit ob-harakiri-inherit elementor-widget elementor-widget-text-editor">
                                                    <div class="elementor-widget-container">
                                                        <p>
                                                            {{\App\Helpers\Helper::finder($texts, config('admin.other.sections.head'), config('admin.other.text_type.subText'))}}
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            </section>

                            <section
                                class="has_eae_slider ob-is-breaking-bad ob-bb-inner elementor-section elementor-inner-section elementor-element elementor-element-69212d5 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                data-id="69212d5" data-element_type="section"
                                data-settings="{&quot;_ob_bbad_use_it&quot;:&quot;yes&quot;,&quot;_ob_bbad_sssic_use&quot;:&quot;no&quot;,&quot;_ob_glider_is_slider&quot;:&quot;no&quot;}">
                                <div class="elementor-container elementor-column-gap-default">
                                    <div
                                        class="has_eae_slider elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-cb1f048"
                                        data-id="cb1f048" data-element_type="column"
                                        data-settings="{&quot;_ob_bbad_is_stalker&quot;:&quot;no&quot;,&quot;_ob_teleporter_use&quot;:false,&quot;_ob_column_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_column_has_pseudo&quot;:&quot;no&quot;}">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div
                                                class="elementor-element elementor-element-7debee6 elementor-widget__width-auto elementor-mobile-align-justify elementor-widget-mobile__width-inherit elementor-widget elementor-widget-button"
                                                data-id="7debee6" data-element_type="widget"
                                                data-settings="{&quot;_ob_butterbutton_use_it&quot;:&quot;no&quot;,&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}"
                                                data-widget_type="button.default">
                                                <div class="elementor-widget-container">
                                                    <div class="elementor-button-wrapper">
                                                        <a href="{{route('immediate')}}"
                                                           class="elementor-button-link elementor-button elementor-size-sm"
                                                           role="button">
                                                                <span class="elementor-button-content-wrapper">
                                                                    <span class="elementor-button-text">Estimez mon projet</span>
                                                                </span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="elementor-element elementor-element-a86ba9c elementor-widget__width-auto elementor-widget elementor-widget-button"
                                                data-id="a86ba9c" data-element_type="widget"
                                                data-settings="{&quot;_ob_butterbutton_use_it&quot;:&quot;no&quot;,&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}"
                                                data-widget_type="button.default">
                                                <div class="elementor-widget-container">
                                                    <div class="elementor-button-wrapper">
                                                        <a href="{{route('packets_client')}}"
                                                           class="elementor-button-link elementor-button elementor-size-xs"
                                                           role="button">
                                                            <span class="elementor-button-content-wrapper">
                                                                <span class="elementor-button-text">Nos packs</span>
                                                            </span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </section>
            <section
                class="has_eae_slider ob-is-breaking-bad elementor-section elementor-top-section elementor-element elementor-element-5d363b5 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
            >
                <div class="elementor-container elementor-column-gap-default">
                    <div
                        class="has_eae_slider elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-e960502">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <section
                                class="has_eae_slider ob-is-breaking-bad ob-bb-inner elementor-section elementor-inner-section elementor-element elementor-element-6d26390 elementor-section-boxed elementor-section-height-default elementor-section-height-default">
                                <div class="elementor-container elementor-column-gap-default">
                                    <div
                                        class="has_eae_slider elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-d20f668">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div
                                                class="elementor-element elementor-element-2459333 ob-harakiri-inherit elementor-widget elementor-widget-text-editor">
                                                <div class="elementor-widget-container">
                                                    <p>
                                                        {{\App\Helpers\Helper::finderSimple($texts, config('admin.other.sections.subfirst'))}}
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="has_eae_slider elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-229f44e"
                                        data-id="229f44e" data-element_type="column"
                                        data-settings="{&quot;_ob_bbad_is_stalker&quot;:&quot;no&quot;,&quot;_ob_teleporter_use&quot;:false,&quot;_ob_column_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_column_has_pseudo&quot;:&quot;no&quot;}">
                                        <div class="elementor-widget-wrap">
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <section
                                class="has_eae_slider ob-is-breaking-bad ob-bb-inner elementor-section elementor-inner-section elementor-element elementor-element-b17563b elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                data-id="b17563b" data-element_type="section"
                                data-settings="{&quot;_ob_bbad_use_it&quot;:&quot;yes&quot;,&quot;_ob_bbad_sssic_use&quot;:&quot;no&quot;,&quot;_ob_glider_is_slider&quot;:&quot;no&quot;}">
                                <div class="elementor-container elementor-column-gap-extended">
                                    <div
                                        class="has_eae_slider elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-f8a12ce"
                                        data-id="f8a12ce" data-element_type="column"
                                        data-settings="{&quot;_ob_bbad_is_stalker&quot;:&quot;no&quot;,&quot;_ob_teleporter_use&quot;:false,&quot;_ob_column_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_column_has_pseudo&quot;:&quot;no&quot;}">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div
                                                class="elementor-element elementor-element-d20a808 ob-harakiri-inherit elementor-widget elementor-widget-heading"
                                                data-id="d20a808" data-element_type="widget"
                                                data-settings="{&quot;_ob_harakiri_writing_mode&quot;:&quot;inherit&quot;,&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}"
                                                data-widget_type="heading.default">
                                                <div class="elementor-widget-container">
                                                    <span
                                                        class="elementor-heading-title elementor-size-default">01</span>
                                                </div>
                                            </div>
                                            <div
                                                class="elementor-element elementor-element-090796e ob-harakiri-inherit elementor-widget elementor-widget-heading">
                                                <div class="elementor-widget-container">
                                                    <h4 class="elementor-heading-title elementor-size-default">
                                                        {{\App\Helpers\Helper::finder($texts, config('admin.other.sections.middle-1'), config('admin.other.text_type.header'))}}
                                                    </h4>
                                                </div>
                                            </div>
                                            <div
                                                class="elementor-element elementor-element-f8445d7 ob-harakiri-inherit elementor-widget elementor-widget-text-editor"
                                                data-id="f8445d7" data-element_type="widget"
                                                data-settings="{&quot;_ob_harakiri_writing_mode&quot;:&quot;inherit&quot;,&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}"
                                                data-widget_type="text-editor.default">
                                                <div class="elementor-widget-container">
                                                    <p>
                                                        {{\App\Helpers\Helper::finder($texts, config('admin.other.sections.middle-1'), config('admin.other.text_type.subText'))}}
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="has_eae_slider elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-eaa2184"
                                        data-id="eaa2184" data-element_type="column"
                                        data-settings="{&quot;_ob_bbad_is_stalker&quot;:&quot;no&quot;,&quot;_ob_teleporter_use&quot;:false,&quot;_ob_column_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_column_has_pseudo&quot;:&quot;no&quot;}">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div
                                                class="elementor-element elementor-element-76b4577 ob-harakiri-inherit elementor-widget elementor-widget-heading"
                                                data-id="76b4577" data-element_type="widget"
                                                data-settings="{&quot;_ob_harakiri_writing_mode&quot;:&quot;inherit&quot;,&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}"
                                                data-widget_type="heading.default">
                                                <div class="elementor-widget-container">
                                                    <span
                                                        class="elementor-heading-title elementor-size-default">02</span>
                                                </div>
                                            </div>
                                            <div
                                                class="elementor-element elementor-element-7b43b1c ob-harakiri-inherit elementor-widget elementor-widget-heading"
                                                data-id="7b43b1c" data-element_type="widget"
                                                data-settings="{&quot;_ob_harakiri_writing_mode&quot;:&quot;inherit&quot;,&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}"
                                                data-widget_type="heading.default">
                                                <div class="elementor-widget-container">
                                                    <h4 class="elementor-heading-title elementor-size-default">
                                                        {{\App\Helpers\Helper::finder($texts, config('admin.other.sections.middle-2'), config('admin.other.text_type.header'))}}
                                                    </h4>
                                                </div>
                                            </div>
                                            <div
                                                class="elementor-element elementor-element-b3ce597 ob-harakiri-inherit elementor-widget elementor-widget-text-editor"
                                                data-id="b3ce597" data-element_type="widget"
                                                data-settings="{&quot;_ob_harakiri_writing_mode&quot;:&quot;inherit&quot;,&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}"
                                                data-widget_type="text-editor.default">
                                                <div class="elementor-widget-container">

                                                    <p>
                                                        {{\App\Helpers\Helper::finder($texts, config('admin.other.sections.middle-2'), config('admin.other.text_type.subText'))}}
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="has_eae_slider elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-ae46a87"
                                        data-id="ae46a87" data-element_type="column"
                                        data-settings="{&quot;_ob_bbad_is_stalker&quot;:&quot;no&quot;,&quot;_ob_teleporter_use&quot;:false,&quot;_ob_column_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_column_has_pseudo&quot;:&quot;no&quot;}">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div
                                                class="elementor-element elementor-element-f5ebce0 ob-harakiri-inherit elementor-widget elementor-widget-heading"
                                                data-id="f5ebce0" data-element_type="widget"
                                                data-settings="{&quot;_ob_harakiri_writing_mode&quot;:&quot;inherit&quot;,&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}"
                                                data-widget_type="heading.default">
                                                <div class="elementor-widget-container">
                                                    <span
                                                        class="elementor-heading-title elementor-size-default">03</span>
                                                </div>
                                            </div>
                                            <div
                                                class="elementor-element elementor-element-fc9ad34 ob-harakiri-inherit elementor-widget elementor-widget-heading"
                                                data-id="fc9ad34" data-element_type="widget"
                                                data-settings="{&quot;_ob_harakiri_writing_mode&quot;:&quot;inherit&quot;,&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}"
                                                data-widget_type="heading.default">
                                                <div class="elementor-widget-container">
                                                    <h4 class="elementor-heading-title elementor-size-default">
                                                        {{\App\Helpers\Helper::finder($texts, config('admin.other.sections.middle-3'), config('admin.other.text_type.header'))}}
                                                    </h4>
                                                </div>
                                            </div>
                                            <div
                                                class="elementor-element elementor-element-f92bf7e ob-harakiri-inherit elementor-widget elementor-widget-text-editor"
                                                data-id="f92bf7e" data-element_type="widget"
                                                data-settings="{&quot;_ob_harakiri_writing_mode&quot;:&quot;inherit&quot;,&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}"
                                                data-widget_type="text-editor.default">
                                                <div class="elementor-widget-container">
                                                    <p>
                                                        {{\App\Helpers\Helper::finder($texts, config('admin.other.sections.middle-3'), config('admin.other.text_type.subText'))}}
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <section
                                class="has_eae_slider ob-is-breaking-bad ob-bb-inner elementor-section elementor-inner-section elementor-element elementor-element-fa09722 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                data-id="fa09722" data-element_type="section"
                                data-settings="{&quot;_ob_bbad_use_it&quot;:&quot;yes&quot;,&quot;_ob_bbad_sssic_use&quot;:&quot;no&quot;,&quot;_ob_glider_is_slider&quot;:&quot;no&quot;}">
                                <div class="elementor-container elementor-column-gap-default">
                                    <div
                                        class="has_eae_slider elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-806b42d"
                                        data-id="806b42d" data-element_type="column"
                                        data-settings="{&quot;_ob_bbad_is_stalker&quot;:&quot;no&quot;,&quot;_ob_teleporter_use&quot;:false,&quot;_ob_column_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_column_has_pseudo&quot;:&quot;no&quot;}">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div
                                                class="elementor-element elementor-element-db8eb5c elementor-widget__width-auto elementor-widget elementor-widget-global elementor-global-320 elementor-widget-button"
                                                data-id="db8eb5c" data-element_type="widget"
                                                data-settings="{&quot;_ob_butterbutton_use_it&quot;:&quot;no&quot;,&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}"
                                                data-widget_type="button.default">
                                                <div class="elementor-widget-container">
                                                    <div class="elementor-button-wrapper">
                                                        <a href="{{route('immediate')}}"
                                                           class="elementor-button-link elementor-button elementor-size-sm"
                                                           role="button">
                                                            <span class="elementor-button-content-wrapper">
                                                                <span
                                                                    class="elementor-button-text">Chiffrage immédiat</span>
                                                            </span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </section>
            <section
                class="has_eae_slider ob-is-breaking-bad elementor-section elementor-top-section elementor-element elementor-element-730f322 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                data-id="730f322" data-element_type="section"
                data-settings="{&quot;_ob_bbad_use_it&quot;:&quot;yes&quot;,&quot;_ob_bbad_sssic_use&quot;:&quot;no&quot;,&quot;_ob_glider_is_slider&quot;:&quot;no&quot;}">
                <div class="elementor-container elementor-column-gap-default">
                    <div
                        class="has_eae_slider elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-ee5d314"
                        data-id="ee5d314" data-element_type="column"
                        data-settings="{&quot;_ob_bbad_is_stalker&quot;:&quot;no&quot;,&quot;_ob_teleporter_use&quot;:false,&quot;_ob_column_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_column_has_pseudo&quot;:&quot;no&quot;}">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <section
                                class="has_eae_slider ob-is-breaking-bad ob-bb-inner elementor-section elementor-inner-section elementor-element elementor-element-d2cf4bd elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                data-id="d2cf4bd" data-element_type="section"
                                data-settings="{&quot;_ob_bbad_use_it&quot;:&quot;yes&quot;,&quot;_ob_bbad_sssic_use&quot;:&quot;no&quot;,&quot;_ob_glider_is_slider&quot;:&quot;no&quot;}">
                                <div class="elementor-container elementor-column-gap-default">
                                    <div
                                        class="has_eae_slider elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-7c6fc5b"
                                        data-id="7c6fc5b" data-element_type="column"
                                        data-settings="{&quot;_ob_bbad_is_stalker&quot;:&quot;no&quot;,&quot;_ob_teleporter_use&quot;:false,&quot;_ob_column_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_column_has_pseudo&quot;:&quot;no&quot;}">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div
                                                class="elementor-element elementor-element-9e9b1c2 ob-harakiri-inherit elementor-widget elementor-widget-text-editor"
                                                data-id="9e9b1c2" data-element_type="widget"
                                                data-settings="{&quot;_ob_harakiri_writing_mode&quot;:&quot;inherit&quot;,&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}"
                                                data-widget_type="text-editor.default">
                                                <div class="elementor-widget-container">
                                                    <p>Ce que nous faisons</p></div>
                                            </div>
                                            <div
                                                class="elementor-element elementor-element-dcc7739 ob-harakiri-inherit elementor-widget elementor-widget-heading"
                                                data-id="dcc7739" data-element_type="widget"
                                                data-settings="{&quot;_ob_harakiri_writing_mode&quot;:&quot;inherit&quot;,&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}"
                                                data-widget_type="heading.default">
                                                <div class="elementor-widget-container">
                                                    <h2 class="elementor-heading-title elementor-size-default">
                                                        {{\App\Helpers\Helper::finder($texts, config('admin.other.sections.service'), config('admin.other.text_type.header'))}}
                                                    </h2>
                                                </div>
                                            </div>
                                            <div
                                                class="elementor-element elementor-element-0cf090b ob-harakiri-inherit elementor-widget elementor-widget-text-editor"
                                                data-id="0cf090b" data-element_type="widget"
                                                data-settings="{&quot;_ob_harakiri_writing_mode&quot;:&quot;inherit&quot;,&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}"
                                                data-widget_type="text-editor.default">
                                                <div class="elementor-widget-container">
                                                    <p>
                                                        {{\App\Helpers\Helper::finder($texts, config('admin.other.sections.service'), config('admin.other.text_type.subText'))}}
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="has_eae_slider elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-13cef77 elementor-hidden-tablet elementor-hidden-phone"
                                        data-id="13cef77" data-element_type="column"
                                        data-settings="{&quot;_ob_bbad_is_stalker&quot;:&quot;no&quot;,&quot;_ob_teleporter_use&quot;:false,&quot;_ob_column_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_column_has_pseudo&quot;:&quot;no&quot;}">
                                        <div class="elementor-widget-wrap">
                                        </div>
                                    </div>
                                </div>
                            </section>

                            <section
                                class="has_eae_slider ob-is-breaking-bad ob-bb-inner elementor-section elementor-inner-section elementor-element elementor-element-c143550 elementor-section-boxed elementor-section-height-default elementor-section-height-default">
                                @foreach($services as $service)
                                    <div
                                        class="has_eae_slider elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-0dcf4c7">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div
                                                class="elementor-element elementor-element-267c17d ob-harakiri-inherit elementor-widget elementor-widget-heading">
                                                <div class="elementor-widget-container">
                                                    <h4 class="elementor-heading-title elementor-size-default">
                                                        {{$service['title']}}
                                                    </h4>
                                                </div>
                                            </div>

                                            @if($service['pages'])
                                                @foreach($service['pages'] as $page)
                                                    <div
                                                        class="elementor-element elementor-element-3421ce3 elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list">
                                                        <div class="elementor-widget-container">
                                                            <ul class="elementor-icon-list-items">
                                                                <li class="elementor-icon-list-item">
                                                                    <a href="{{route('page', ['id' => $page['id']])}}">
                                                                            <span class="elementor-icon-list-icon">
                                                                                <i aria-hidden="true"
                                                                                   class="fas fa-chevron-right"></i>
                                                                            </span>
                                                                        <span class="elementor-icon-list-text">
                                                                                {{$page['title']}}
                                                                            </span>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            @endif
                                        </div>
                                    </div>
                                @endforeach
                            </section>

                        </div>
                    </div>
                </div>
            </section>
            <section
                class="has_eae_slider ob-is-breaking-bad elementor-section elementor-top-section elementor-element elementor-element-8215f0b elementor-section-full_width elementor-section-height-min-height elementor-section-items-top elementor-section-height-default"
                data-id="8215f0b" data-element_type="section"
                data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;_ob_bbad_use_it&quot;:&quot;yes&quot;,&quot;_ob_bbad_sssic_use&quot;:&quot;no&quot;,&quot;_ob_glider_is_slider&quot;:&quot;no&quot;}">
                <div class="elementor-container elementor-column-gap-no">
                    <div
                        class="has_eae_slider elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-952c647"
                        data-id="952c647" data-element_type="column"
                        data-settings="{&quot;_ob_bbad_is_stalker&quot;:&quot;no&quot;,&quot;_ob_teleporter_use&quot;:false,&quot;_ob_column_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_column_has_pseudo&quot;:&quot;no&quot;}">
                        <div class="elementor-widget-wrap">
                        </div>
                    </div>
                </div>
            </section>

            <section
                class="has_eae_slider ob-is-breaking-bad elementor-section elementor-top-section elementor-element elementor-element-2019252 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                data-id="2019252" data-element_type="section"
                data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;_ob_bbad_use_it&quot;:&quot;yes&quot;,&quot;_ob_bbad_sssic_use&quot;:&quot;no&quot;,&quot;_ob_glider_is_slider&quot;:&quot;no&quot;}">
                <div class="elementor-container elementor-column-gap-wider">
                    <div
                        class="has_eae_slider elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-c856893">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div
                                class="elementor-element elementor-element-915698b ob-harakiri-inherit elementor-widget elementor-widget-heading">
                                <div class="elementor-widget-container">
                                    <h2 class="elementor-heading-title elementor-size-default">
                                        {{\App\Helpers\Helper::finder($texts, config('admin.other.sections.finance'), config('admin.other.text_type.header'))}}
                                    </h2>
                                </div>
                            </div>
                            <div
                                class="elementor-element elementor-element-b0e9f6d ob-harakiri-inherit elementor-widget elementor-widget-text-editor"
                                data-id="b0e9f6d" data-element_type="widget"
                                data-settings="{&quot;_ob_harakiri_writing_mode&quot;:&quot;inherit&quot;,&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}"
                                data-widget_type="text-editor.default">
                                <div class="elementor-widget-container">
                                    <p>
                                        {{\App\Helpers\Helper::finder($texts, config('admin.other.sections.finance'), config('admin.other.text_type.subText'))}}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div
                        class="has_eae_slider elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-85febdf"
                        data-id="85febdf" data-element_type="column"
                        data-settings="{&quot;_ob_bbad_is_stalker&quot;:&quot;no&quot;,&quot;_ob_teleporter_use&quot;:false,&quot;_ob_column_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_column_has_pseudo&quot;:&quot;no&quot;}">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div
                                class="elementor-element elementor-element-00c5ccf elementor-widget elementor-widget-eael-feature-list"
                                data-id="00c5ccf" data-element_type="widget"
                                data-settings="{&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}"
                                data-widget_type="eael-feature-list.default">
                                <div class="elementor-widget-container">
                                    <div
                                        class="-icon-position-left -tablet-icon-position-left -mobile-icon-position-left">
                                        <ul id="eael-feature-list-00c5ccf"
                                            class="eael-feature-list-items circle stacked ">
                                            <li class="eael-feature-list-item elementor-repeater-item-4b7c3fb">
                                                <div class="eael-feature-list-icon-box">
                                                    <div class="eael-feature-list-icon-inner">
                                                        <span class="eael-feature-list-icon fl-icon-0">
                                                            <i aria-hidden="true" class="fas fa-check"></i>
                                                        </span>
                                                    </div>
                                                </div>

                                                <div class="eael-feature-list-content-box">
                                                    <h3 class="eael-feature-list-title">
                                                        {{\App\Helpers\Helper::finder($texts, config('admin.other.sections.finance-1'), config('admin.other.text_type.header'))}}
                                                    </h3>
                                                    <p class="eael-feature-list-content">
                                                        {{\App\Helpers\Helper::finder($texts, config('admin.other.sections.finance-1'), config('admin.other.text_type.subText'))}}
                                                    </p>
                                                </div>
                                            </li>
                                            <li class="eael-feature-list-item elementor-repeater-item-d3c6a33">
                                                <div class="eael-feature-list-icon-box">
                                                    <div class="eael-feature-list-icon-inner">
                                                        <span class="eael-feature-list-icon fl-icon-1">
                                                            <i aria-hidden="true" class="fas fa-times"></i>
                                                        </span>
                                                    </div>
                                                </div>

                                                <div class="eael-feature-list-content-box">
                                                    <h3 class="eael-feature-list-title">
                                                        {{\App\Helpers\Helper::finder($texts, config('admin.other.sections.finance-2'), config('admin.other.text_type.header'))}}
                                                    </h3>
                                                    <p class="eael-feature-list-content">
                                                        {{\App\Helpers\Helper::finder($texts, config('admin.other.sections.finance-2'), config('admin.other.text_type.subText'))}}
                                                    </p>
                                                </div>
                                            </li>
                                            <li class="eael-feature-list-item elementor-repeater-item-97e42e1">
                                                <div class="eael-feature-list-icon-box">
                                                    <div class="eael-feature-list-icon-inner">
                                                        <span class="eael-feature-list-icon fl-icon-2">
                                                             <i aria-hidden="true" class="fas fa-anchor"></i>
                                                        </span>
                                                    </div>
                                                </div>

                                                <div class="eael-feature-list-content-box">
                                                    <h3 class="eael-feature-list-title">
                                                        {{\App\Helpers\Helper::finder($texts, config('admin.other.sections.finance-3'), config('admin.other.text_type.header'))}}
                                                    </h3>
                                                    <p class="eael-feature-list-content">
                                                        {{\App\Helpers\Helper::finder($texts, config('admin.other.sections.finance-3'), config('admin.other.text_type.subText'))}}
                                                    </p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        {{-- Aside content --}}
        <aside
            class="has_eae_slider ob-is-breaking-bad elementor-section elementor-top-section elementor-element elementor-element-12349b6e elementor-section-full_width elementor-section-height-default elementor-section-height-default"
            data-id="12349b6e" data-element_type="section"
            data-settings="{&quot;_ob_bbad_use_it&quot;:&quot;yes&quot;,&quot;_ob_bbad_sssic_use&quot;:&quot;no&quot;,&quot;_ob_glider_is_slider&quot;:&quot;no&quot;}">
            <div class="elementor-container elementor-column-gap-default">
                <div
                    class="has_eae_slider elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-11f89e59"
                    data-id="11f89e59" data-element_type="column"
                    data-settings="{&quot;_ob_bbad_is_stalker&quot;:&quot;no&quot;,&quot;_ob_teleporter_use&quot;:false,&quot;_ob_column_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_column_has_pseudo&quot;:&quot;no&quot;}">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <section
                            class="has_eae_slider ob-is-breaking-bad ob-bb-inner elementor-section elementor-inner-section elementor-element elementor-element-31a89aca elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                            data-id="31a89aca" data-element_type="section"
                            data-settings="{&quot;_ob_bbad_use_it&quot;:&quot;yes&quot;,&quot;_ob_glider_is_slider&quot;:&quot;no&quot;}">
                            <div class="elementor-container elementor-column-gap-default">
                                <div
                                    class="has_eae_slider ob-is-stalker elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-3ea74ee"
                                    data-id="3ea74ee" data-element_type="column"
                                    data-settings="{&quot;_ob_bbad_is_stalker&quot;:&quot;yes&quot;,&quot;_ob_teleporter_use&quot;:false,&quot;_ob_column_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_column_has_pseudo&quot;:&quot;no&quot;}">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div
                                            class="elementor-element elementor-element-7ac42c9 elementor-align-justify elementor-widget elementor-widget-button"
                                            data-id="7ac42c9" data-element_type="widget"
                                            data-settings="{&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}"
                                            data-widget_type="button.default">
                                            <div class="elementor-widget-container">
                                                <div class="elementor-button-wrapper">
                                                    <a href="#elementor-action%3Aaction%3Dpopup%3Aopen%26settings%3DeyJpZCI6IjEyMjAiLCJ0b2dnbGUiOmZhbHNlfQ%3D%3D"
                                                       class="elementor-button-link elementor-button elementor-size-xl"
                                                       role="button">
                            <span class="elementor-button-content-wrapper">
                            <span class="elementor-button-icon elementor-align-icon-left">
                    <i aria-hidden="true" class="fas fa-calendar-alt"></i>			</span>
                            <span class="elementor-button-text">RDV</span>
            </span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="elementor-element elementor-element-d95aac3 elementor-align-justify elementor-widget elementor-widget-button"
                                            data-id="d95aac3" data-element_type="widget"
                                            data-settings="{&quot;_ob_butterbutton_use_it&quot;:&quot;no&quot;,&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}"
                                            data-widget_type="button.default">
                                            <div class="elementor-widget-container">
                                                <div class="elementor-button-wrapper">
                                                    <a href="tel:0650042520"
                                                       class="elementor-button-link elementor-button elementor-size-xl"
                                                       role="button">
                            <span class="elementor-button-content-wrapper">
                            <span class="elementor-button-icon elementor-align-icon-left">
                    <i aria-hidden="true" class="fas fa-phone-alt"></i>			</span>
                            <span class="elementor-button-text">Appel</span>
            </span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="elementor-element elementor-element-76e0421 elementor-align-justify elementor-widget elementor-widget-button"
                                            data-id="76e0421" data-element_type="widget"
                                            data-settings="{&quot;_ob_butterbutton_use_it&quot;:&quot;no&quot;,&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}"
                                            data-widget_type="button.default">
                                            <div class="elementor-widget-container">
                                                <div class="elementor-button-wrapper">
                                                    <a href="mailto:contact@kelia-travaux.com"
                                                       class="elementor-button-link elementor-button elementor-size-xl"
                                                       role="button">
                            <span class="elementor-button-content-wrapper">
                            <span class="elementor-button-icon elementor-align-icon-left">
                    <i aria-hidden="true" class="fas fa-envelope-open"></i>			</span>
                            <span class="elementor-button-text">Email</span>
            </span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="elementor-element elementor-element-12f0c55 elementor-align-justify elementor-widget elementor-widget-button"
                                            data-id="12f0c55" data-element_type="widget"
                                            data-settings="{&quot;_ob_butterbutton_use_it&quot;:&quot;no&quot;,&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}"
                                            data-widget_type="button.default">
                                            <div class="elementor-widget-container">
                                                <div class="elementor-button-wrapper">
                                                    <a href="#elementor-action%3Aaction%3Dpopup%3Aopen%26settings%3DeyJpZCI6IjEzMDUiLCJ0b2dnbGUiOmZhbHNlfQ%3D%3D"
                                                       class="elementor-button-link elementor-button elementor-size-xl"
                                                       role="button">
                            <span class="elementor-button-content-wrapper">
                            <span class="elementor-button-icon elementor-align-icon-left">
                    <i aria-hidden="true" class="fas fa-map-marker-alt"></i>			</span>
                            <span class="elementor-button-text">Adresse</span>
            </span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </aside>
        <div data-elementor-type="popup" data-elementor-id="1220"
             class="elementor elementor-1220 elementor-location-popup"
             data-elementor-settings="{&quot;entrance_animation&quot;:&quot;fadeInUp&quot;,&quot;entrance_animation_duration&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0.7,&quot;sizes&quot;:[]},&quot;prevent_close_on_background_click&quot;:&quot;yes&quot;,&quot;open_selector&quot;:&quot;a[href=\&quot;#rdv-form\&quot;]&quot;,&quot;prevent_close_on_esc_key&quot;:&quot;yes&quot;,&quot;prevent_scroll&quot;:&quot;yes&quot;,&quot;avoid_multiple_popups&quot;:&quot;yes&quot;,&quot;timing&quot;:[]}">
            <div class="elementor-section-wrap">
                <section
                    class="has_eae_slider ob-is-breaking-bad elementor-section elementor-top-section elementor-element elementor-element-5ae2c81 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                    data-id="5ae2c81" data-element_type="section"
                    data-settings="{&quot;_ob_bbad_use_it&quot;:&quot;yes&quot;,&quot;_ob_bbad_sssic_use&quot;:&quot;no&quot;,&quot;_ob_glider_is_slider&quot;:&quot;no&quot;}">
                    <div class="elementor-container elementor-column-gap-default">
                        <div
                            class="has_eae_slider elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-08a7222"
                            data-id="08a7222" data-element_type="column"
                            data-settings="{&quot;_ob_bbad_is_stalker&quot;:&quot;no&quot;,&quot;_ob_teleporter_use&quot;:false,&quot;_ob_column_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_column_has_pseudo&quot;:&quot;no&quot;}">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <section
                                    class="has_eae_slider ob-is-breaking-bad ob-bb-inner elementor-section elementor-inner-section elementor-element elementor-element-a3b2d56 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                    data-id="a3b2d56" data-element_type="section"
                                    data-settings="{&quot;_ob_bbad_use_it&quot;:&quot;yes&quot;,&quot;_ob_bbad_sssic_use&quot;:&quot;no&quot;,&quot;_ob_glider_is_slider&quot;:&quot;no&quot;}">
                                    <div class="elementor-container elementor-column-gap-default">
                                        <div
                                            class="has_eae_slider elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-6ee4fa5"
                                            data-id="6ee4fa5" data-element_type="column"
                                            data-settings="{&quot;_ob_bbad_is_stalker&quot;:&quot;no&quot;,&quot;_ob_teleporter_use&quot;:false,&quot;_ob_column_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_column_has_pseudo&quot;:&quot;no&quot;}">
                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                <div
                                                    class="elementor-element elementor-element-72dcf1b ob-harakiri-inherit elementor-widget elementor-widget-heading"
                                                    data-id="72dcf1b" data-element_type="widget"
                                                    data-settings="{&quot;_ob_harakiri_writing_mode&quot;:&quot;inherit&quot;,&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}"
                                                    data-widget_type="heading.default">
                                                    <div class="elementor-widget-container">
                                                        <h3 class="elementor-heading-title elementor-size-default">Un
                                                            expert
                                                            me
                                                            rappelle</h3></div>
                                                </div>
                                                <div
                                                    class="elementor-element elementor-element-2fda597 ob-harakiri-inherit elementor-widget elementor-widget-text-editor"
                                                    data-id="2fda597" data-element_type="widget"
                                                    data-settings="{&quot;_ob_harakiri_writing_mode&quot;:&quot;inherit&quot;,&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}"
                                                    data-widget_type="text-editor.default">
                                                    <div class="elementor-widget-container">
                                                        <p>Laissez-nous vos coordonnées et un expert Kelia vous
                                                            rappellera.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>

                                <section
                                    class="has_eae_slider ob-is-breaking-bad ob-bb-inner elementor-section elementor-inner-section elementor-element elementor-element-8ed9461 elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                    data-id="8ed9461" data-element_type="section"
                                    data-settings="{&quot;_ob_bbad_use_it&quot;:&quot;yes&quot;,&quot;_ob_bbad_sssic_use&quot;:&quot;no&quot;,&quot;_ob_glider_is_slider&quot;:&quot;no&quot;}">
                                    <div class="elementor-container elementor-column-gap-default">
                                        <div
                                            class="has_eae_slider elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-76971cc"
                                            data-id="76971cc" data-element_type="column"
                                            data-settings="{&quot;_ob_bbad_is_stalker&quot;:&quot;no&quot;,&quot;_ob_teleporter_use&quot;:false,&quot;_ob_column_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_column_has_pseudo&quot;:&quot;no&quot;}">
                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                <div
                                                    class="elementor-element elementor-element-72e6863 elementor-widget elementor-widget-wp-widget-wpforms-widget"
                                                    data-id="72e6863" data-element_type="widget"
                                                    data-settings="{&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}"
                                                    data-widget_type="wp-widget-wpforms-widget.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="wpforms-container wpforms-container-full call__back"
                                                             id="wpforms-1217">

                                                            @include('components.client.contactus_form')
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <div data-elementor-type="popup" data-elementor-id="1305"
             class="elementor elementor-1305 elementor-location-popup"
             data-elementor-settings="{&quot;entrance_animation&quot;:&quot;fadeInUp&quot;,&quot;entrance_animation_duration&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0.7,&quot;sizes&quot;:[]},&quot;prevent_close_on_background_click&quot;:&quot;yes&quot;,&quot;open_selector&quot;:&quot;#infos&quot;,&quot;timing&quot;:[]}">
            <div class="elementor-section-wrap">
                <section
                    class="has_eae_slider ob-is-breaking-bad elementor-section elementor-top-section elementor-element elementor-element-67e6ec4d elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                    data-id="67e6ec4d" data-element_type="section"
                    data-settings="{&quot;_ob_bbad_use_it&quot;:&quot;yes&quot;,&quot;_ob_bbad_sssic_use&quot;:&quot;no&quot;,&quot;_ob_glider_is_slider&quot;:&quot;no&quot;}">
                    <div class="elementor-container elementor-column-gap-default">
                        <div
                            class="has_eae_slider elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-6586c079"
                            data-id="6586c079" data-element_type="column"
                            data-settings="{&quot;_ob_bbad_is_stalker&quot;:&quot;no&quot;,&quot;_ob_teleporter_use&quot;:false,&quot;_ob_column_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_column_has_pseudo&quot;:&quot;no&quot;}">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <section
                                    class="has_eae_slider ob-is-breaking-bad ob-bb-inner elementor-section elementor-inner-section elementor-element elementor-element-65abfaa7 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                    data-id="65abfaa7" data-element_type="section"
                                    data-settings="{&quot;_ob_bbad_use_it&quot;:&quot;yes&quot;,&quot;_ob_bbad_sssic_use&quot;:&quot;no&quot;,&quot;_ob_glider_is_slider&quot;:&quot;no&quot;}">
                                    <div class="elementor-container elementor-column-gap-default">
                                        <div
                                            class="has_eae_slider elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-22a6259b"
                                            data-id="22a6259b" data-element_type="column"
                                            data-settings="{&quot;_ob_bbad_is_stalker&quot;:&quot;no&quot;,&quot;_ob_teleporter_use&quot;:false,&quot;_ob_column_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_column_has_pseudo&quot;:&quot;no&quot;}">
                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                <div
                                                    class="elementor-element elementor-element-74c3ee67 ob-harakiri-inherit elementor-widget elementor-widget-heading"
                                                    data-id="74c3ee67" data-element_type="widget"
                                                    data-settings="{&quot;_ob_harakiri_writing_mode&quot;:&quot;inherit&quot;,&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}"
                                                    data-widget_type="heading.default">
                                                    <div class="elementor-widget-container">
                                                        <h3 class="elementor-heading-title elementor-size-default">
                                                            Adresse</h3></div>
                                                </div>
                                                <div
                                                    class="elementor-element elementor-element-07df43c elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list"
                                                    data-id="07df43c" data-element_type="widget"
                                                    data-settings="{&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}"
                                                    data-widget_type="icon-list.default">
                                                    <div class="elementor-widget-container">
                                                        <ul class="elementor-icon-list-items">
                                                            <li class="elementor-icon-list-item">
											<span class="elementor-icon-list-icon">
							<i aria-hidden="true" class="fas fa-map-marker-alt"></i>						</span>
                                                                <span class="elementor-icon-list-text">7 RUE JACQUARD 93310 LE PRE-SAINT-GERVAIS</span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="has_eae_slider elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-39f48a2"
                                            data-id="39f48a2" data-element_type="column"
                                            data-settings="{&quot;_ob_bbad_is_stalker&quot;:&quot;no&quot;,&quot;_ob_teleporter_use&quot;:false,&quot;_ob_column_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_column_has_pseudo&quot;:&quot;no&quot;}">
                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                <div
                                                    class="elementor-element elementor-element-f640327 elementor-widget elementor-widget-google_maps"
                                                    data-id="f640327" data-element_type="widget"
                                                    data-settings="{&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}"
                                                    data-widget_type="google_maps.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-custom-embed">
                                                            <iframe frameborder="0" scrolling="no" marginheight="0"
                                                                    marginwidth="0"
                                                                    src="https://maps.google.com/maps?q=7%20RUE%20JACQUARD%2093310%20LE%20PRE-SAINT-GERVAIS&#038;t=m&#038;z=14&#038;output=embed&#038;iwloc=near"
                                                                    title="7 RUE JACQUARD 93310 LE PRE-SAINT-GERVAIS"
                                                                    aria-label="7 RUE JACQUARD 93310 LE PRE-SAINT-GERVAIS"
                                                            ></iframe>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
@endsection
