@extends('layout.main')
@section('title', 'Chiffrage immédiat')
@section('scripts')
    <script src="{{ asset(mix('vendors/js/extensions/jstree.min.js')) }}"></script>
    <script src="{{ asset(mix('js/scripts/extensions/ext-component-tree.js')) }}"></script>
@endsection
@section('additional-head')
    <link rel="stylesheet" href="{{asset('css/defaults/aside.css')}}">
@endsection

@section('content')
    <div data-elementor-type="wp-page" data-elementor-id="593" class="elementor elementor-593" data-elementor-settings="[]">
        <div class="elementor-section-wrap">
            <section class="has_eae_slider ob-is-breaking-bad elementor-section elementor-top-section elementor-element elementor-element-011f5fd elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id="011f5fd" data-element_type="section" data-settings="{&quot;_ob_bbad_use_it&quot;:&quot;yes&quot;,&quot;_ob_bbad_sssic_use&quot;:&quot;no&quot;,&quot;_ob_glider_is_slider&quot;:&quot;no&quot;}">
                <div class="elementor-container elementor-column-gap-no">
                    <div class="has_eae_slider elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-d35921a" data-id="d35921a" data-element_type="column" data-settings="{&quot;_ob_bbad_is_stalker&quot;:&quot;no&quot;,&quot;_ob_teleporter_use&quot;:false,&quot;_ob_column_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_column_has_pseudo&quot;:&quot;no&quot;}">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <section class="has_eae_slider ob-is-breaking-bad ob-bb-inner elementor-section elementor-inner-section elementor-element elementor-element-456b1ac elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="456b1ac" data-element_type="section" data-settings="{&quot;_ob_bbad_use_it&quot;:&quot;yes&quot;,&quot;_ob_bbad_sssic_use&quot;:&quot;no&quot;,&quot;_ob_glider_is_slider&quot;:&quot;no&quot;}">
                                <div class="elementor-container elementor-column-gap-default">
                                    <div class="has_eae_slider elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-012d09e" data-id="012d09e" data-element_type="column" data-settings="{&quot;_ob_bbad_is_stalker&quot;:&quot;no&quot;,&quot;_ob_teleporter_use&quot;:false,&quot;_ob_column_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_column_has_pseudo&quot;:&quot;no&quot;}">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-f2ce95f ob-harakiri-inherit elementor-widget elementor-widget-text-editor" data-id="f2ce95f" data-element_type="widget" data-settings="{&quot;_ob_harakiri_writing_mode&quot;:&quot;inherit&quot;,&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}" data-widget_type="text-editor.default">
                                                <div class="elementor-widget-container">
                                                    <p>Qui sommes-nous</p>						</div>
                                            </div>
                                            <div class="elementor-element elementor-element-f26f720 ob-harakiri-inherit elementor-widget elementor-widget-heading" data-id="f26f720" data-element_type="widget" data-settings="{&quot;_ob_harakiri_writing_mode&quot;:&quot;inherit&quot;,&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}" data-widget_type="heading.default">
                                                <div class="elementor-widget-container">
                                                    <h2 class="elementor-heading-title elementor-size-default">
                                                        {{\App\Helpers\Helper::finder($texts, config('admin.other.sections.about'), config('admin.other.text_type.header'))}}
                                                    </h2>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="has_eae_slider elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-0e529f9" data-id="0e529f9" data-element_type="column" data-settings="{&quot;_ob_bbad_is_stalker&quot;:&quot;no&quot;,&quot;_ob_teleporter_use&quot;:false,&quot;_ob_column_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_column_has_pseudo&quot;:&quot;no&quot;}">
                                        <div class="elementor-widget-wrap">
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <section class="has_eae_slider ob-is-breaking-bad ob-bb-inner elementor-section elementor-inner-section elementor-element elementor-element-70149b3 elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id="70149b3" data-element_type="section" data-settings="{&quot;_ob_bbad_use_it&quot;:&quot;yes&quot;,&quot;_ob_bbad_sssic_use&quot;:&quot;no&quot;,&quot;_ob_glider_is_slider&quot;:&quot;no&quot;}">
                                <div class="elementor-container elementor-column-gap-no">
                                    <div class="has_eae_slider elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-23928d5" data-id="23928d5" data-element_type="column" data-settings="{&quot;_ob_bbad_is_stalker&quot;:&quot;no&quot;,&quot;_ob_teleporter_use&quot;:false,&quot;_ob_column_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_column_has_pseudo&quot;:&quot;no&quot;}">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-5cc6a2e elementor-widget elementor-widget-image" data-id="5cc6a2e" data-element_type="widget" data-settings="{&quot;_ob_photomorph_use&quot;:&quot;no&quot;,&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}" data-widget_type="image.default">
                                                <div class="elementor-widget-container">
                                                    <img width="1920" height="1080"
                                                         src="{{$contentImage->image_src}}"
                                                         class="attachment-full size-full" alt="" loading="lazy" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="has_eae_slider elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-14d4147" data-id="14d4147" data-element_type="column" data-settings="{&quot;_ob_bbad_is_stalker&quot;:&quot;no&quot;,&quot;_ob_teleporter_use&quot;:false,&quot;_ob_column_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_column_has_pseudo&quot;:&quot;no&quot;}">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-6f97245 elementor-widget__width-initial elementor-widget-mobile__width-inherit ob-harakiri-inherit elementor-widget elementor-widget-text-editor" data-id="6f97245" data-element_type="widget" data-settings="{&quot;_ob_harakiri_writing_mode&quot;:&quot;inherit&quot;,&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}" data-widget_type="text-editor.default">
                                                <div class="elementor-widget-container">
                                                    <p>
                                                        {{\App\Helpers\Helper::finder($texts, config('admin.other.sections.about'), config('admin.other.text_type.subText'))}}
                                                    </p>
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
            <section class="has_eae_slider ob-is-breaking-bad elementor-section elementor-top-section elementor-element elementor-element-847bb09 elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id="847bb09" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;_ob_bbad_use_it&quot;:&quot;yes&quot;,&quot;_ob_bbad_sssic_use&quot;:&quot;no&quot;,&quot;_ob_glider_is_slider&quot;:&quot;no&quot;}">
                <div class="elementor-container elementor-column-gap-no">
                    <div class="has_eae_slider elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-90714b4" data-id="90714b4" data-element_type="column" data-settings="{&quot;_ob_bbad_is_stalker&quot;:&quot;no&quot;,&quot;_ob_teleporter_use&quot;:false,&quot;_ob_column_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_column_has_pseudo&quot;:&quot;no&quot;}">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <section class="has_eae_slider ob-is-breaking-bad ob-bb-inner elementor-section elementor-inner-section elementor-element elementor-element-5ac0cea elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="5ac0cea" data-element_type="section" data-settings="{&quot;_ob_bbad_use_it&quot;:&quot;yes&quot;,&quot;_ob_bbad_sssic_use&quot;:&quot;no&quot;,&quot;_ob_glider_is_slider&quot;:&quot;no&quot;}">
                                <div class="elementor-container elementor-column-gap-default">
                                    <div class="has_eae_slider elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-8b1c407" data-id="8b1c407" data-element_type="column" data-settings="{&quot;_ob_bbad_is_stalker&quot;:&quot;no&quot;,&quot;_ob_teleporter_use&quot;:false,&quot;_ob_column_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_column_has_pseudo&quot;:&quot;no&quot;}">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-a8e9e43 elementor-widget__width-auto elementor-widget elementor-widget-counter" data-id="a8e9e43" data-element_type="widget" data-settings="{&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}" data-widget_type="counter.default">
                                                <div class="elementor-widget-container">
                                                    <div class="elementor-counter">
                                                        <div class="elementor-counter-number-wrapper">
                                                            <span class="elementor-counter-number-prefix"></span>
                                                            <span class="elementor-counter-number" data-duration="2000" data-to-value="12" data-from-value="0" data-delimiter=",">0</span>
                                                            <span class="elementor-counter-number-suffix"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-54d6966 ob-harakiri-inherit elementor-widget elementor-widget-text-editor" data-id="54d6966" data-element_type="widget" data-settings="{&quot;_ob_harakiri_writing_mode&quot;:&quot;inherit&quot;,&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}" data-widget_type="text-editor.default">
                                                <div class="elementor-widget-container">
                                                    <p>Années d&#8217;expériences</p>						</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="has_eae_slider elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-8cbd1fd" data-id="8cbd1fd" data-element_type="column" data-settings="{&quot;_ob_bbad_is_stalker&quot;:&quot;no&quot;,&quot;_ob_teleporter_use&quot;:false,&quot;_ob_column_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_column_has_pseudo&quot;:&quot;no&quot;}">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-bf3db39 elementor-widget__width-auto elementor-widget elementor-widget-counter" data-id="bf3db39" data-element_type="widget" data-settings="{&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}" data-widget_type="counter.default">
                                                <div class="elementor-widget-container">
                                                    <div class="elementor-counter">
                                                        <div class="elementor-counter-number-wrapper">
                                                            <span class="elementor-counter-number-prefix"></span>
                                                            <span class="elementor-counter-number" data-duration="2000" data-to-value="50" data-from-value="0" data-delimiter=",">0</span>
                                                            <span class="elementor-counter-number-suffix"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-885d953 ob-harakiri-inherit elementor-widget elementor-widget-text-editor" data-id="885d953" data-element_type="widget" data-settings="{&quot;_ob_harakiri_writing_mode&quot;:&quot;inherit&quot;,&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}" data-widget_type="text-editor.default">
                                                <div class="elementor-widget-container">
                                                    <p>Travaux effectués</p>						</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="has_eae_slider elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-cf07a59" data-id="cf07a59" data-element_type="column" data-settings="{&quot;_ob_bbad_is_stalker&quot;:&quot;no&quot;,&quot;_ob_teleporter_use&quot;:false,&quot;_ob_column_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_column_has_pseudo&quot;:&quot;no&quot;}">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-af168cb elementor-widget__width-auto elementor-widget elementor-widget-counter" data-id="af168cb" data-element_type="widget" data-settings="{&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}" data-widget_type="counter.default">
                                                <div class="elementor-widget-container">
                                                    <div class="elementor-counter">
                                                        <div class="elementor-counter-number-wrapper">
                                                            <span class="elementor-counter-number-prefix"></span>
                                                            <span class="elementor-counter-number" data-duration="2000" data-to-value="50" data-from-value="0" data-delimiter=",">0</span>
                                                            <span class="elementor-counter-number-suffix"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-e128138 ob-harakiri-inherit elementor-widget elementor-widget-text-editor" data-id="e128138" data-element_type="widget" data-settings="{&quot;_ob_harakiri_writing_mode&quot;:&quot;inherit&quot;,&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}" data-widget_type="text-editor.default">
                                                <div class="elementor-widget-container">
                                                    <p>Clients satisfaits</p>						</div>
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
                                                        <h3 class="elementor-heading-title elementor-size-default">Un expert
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
                                                            <form id="wpforms-form-1217"
                                                                  class="wpforms-validate wpforms-form wpforms-ajax-form"
                                                                  data-formid="1217" method="post"
                                                                  enctype="multipart/form-data"
                                                                  action="/">
                                                                <noscript class="wpforms-error-noscript">Please enable
                                                                    JavaScript in your browser to complete this form.
                                                                </noscript>
                                                                <div class="wpforms-field-container">
                                                                    <div id="wpforms-1217-field_1-container"
                                                                         class="wpforms-field wpforms-field-name"
                                                                         data-field-id="1"><label
                                                                            class="wpforms-field-label"
                                                                            for="wpforms-1217-field_1">Nom
                                                                            <span
                                                                                class="wpforms-required-label">*</span></label><input
                                                                            type="text" id="wpforms-1217-field_1"
                                                                            class="wpforms-field-large wpforms-field-required"
                                                                            name="wpforms[fields][1]"
                                                                            placeholder="Votre nom"
                                                                            required></div>
                                                                    <div id="wpforms-1217-field_2-container"
                                                                         class="wpforms-field wpforms-field-email"
                                                                         data-field-id="2"><label
                                                                            class="wpforms-field-label"
                                                                            for="wpforms-1217-field_2">Email
                                                                            <span
                                                                                class="wpforms-required-label">*</span></label><input
                                                                            type="email" id="wpforms-1217-field_2"
                                                                            class="wpforms-field-large wpforms-field-required"
                                                                            name="wpforms[fields][2]"
                                                                            placeholder="Votre adresse mail" required></div>
                                                                    <div id="wpforms-1217-field_3-container"
                                                                         class="wpforms-field wpforms-field-date-time"
                                                                         data-field-id="3"><label
                                                                            class="wpforms-field-label"
                                                                            for="wpforms-1217-field_3">Date
                                                                            / Heure <span
                                                                                class="wpforms-required-label">*</span></label>
                                                                        <div class="wpforms-field-row wpforms-field-large">
                                                                            <div
                                                                                class="wpforms-field-row-block wpforms-one-half wpforms-first">
                                                                                <div class="wpforms-datepicker-wrap"><input
                                                                                        type="text"
                                                                                        id="wpforms-1217-field_3"
                                                                                        class="wpforms-field-date-time-date wpforms-datepicker wpforms-field-required"
                                                                                        data-date-format="d/m/Y"
                                                                                        data-input="true"
                                                                                        name="wpforms[fields][3][date]"
                                                                                        placeholder="Date" required><a
                                                                                        title="Clear Date" data-clear
                                                                                        class="wpforms-datepicker-clear"
                                                                                        style="display:none;"></a></div>
                                                                                <label for="wpforms-1217-field_3"
                                                                                       class="wpforms-field-sublabel after wpforms-sublabel-hide">Date</label>
                                                                            </div>
                                                                            <div
                                                                                class="wpforms-field-row-block wpforms-one-half">
                                                                                <input type="text"
                                                                                       id="wpforms-1217-field_3-time"
                                                                                       class="wpforms-field-date-time-time wpforms-timepicker wpforms-field-required"
                                                                                       data-rule-time24h="true"
                                                                                       data-time-format="H:i" data-step="30"
                                                                                       name="wpforms[fields][3][time]"
                                                                                       placeholder="Heure" required><label
                                                                                    for="wpforms-1217-field_3-time"
                                                                                    class="wpforms-field-sublabel after wpforms-sublabel-hide">Time</label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div id="wpforms-1217-field_4-container"
                                                                         class="wpforms-field wpforms-field-phone"
                                                                         data-field-id="4">

                                                                        <label class="wpforms-field-label" for="wpforms-1217-field_4">Téléphone
                                                                            <span class="wpforms-required-label">*</span>
                                                                        </label>

                                                                        <input id="wpforms-1217-field_4" type="tel" placeholder="Votre numéro de téléphone" required>
                                                                    </div>
                                                                    {{--                                                                <div id="wpforms-1217-field_4-container"--}}
                                                                    {{--                                                                     class="wpforms-field wpforms-field-phone"--}}
                                                                    {{--                                                                     data-field-id="4"><label--}}
                                                                    {{--                                                                        class="wpforms-field-label"--}}
                                                                    {{--                                                                        for="wpforms-1217-field_4">Téléphone--}}
                                                                    {{--                                                                        <span--}}
                                                                    {{--                                                                            class="wpforms-required-label">*</span></label><input--}}
                                                                    {{--                                                                        type="tel" id="wpforms-1217-field_4"--}}
                                                                    {{--                                                                        class="wpforms-field-large wpforms-field-required wpforms-smart-phone-field"--}}
                                                                    {{--                                                                        data-rule-smart-phone-field="true"--}}
                                                                    {{--                                                                        name="wpforms[fields][4]"--}}
                                                                    {{--                                                                        placeholder="Votre numéro de téléphone"--}}
                                                                    {{--                                                                        required>--}}
                                                                    {{--                                                                </div>--}}
                                                                    <div id="wpforms-1217-field_5-container"
                                                                         class="wpforms-field wpforms-field-textarea"
                                                                         data-field-id="5"><label
                                                                            class="wpforms-field-label"
                                                                            for="wpforms-1217-field_5">Message</label><textarea
                                                                            id="wpforms-1217-field_5"
                                                                            class="wpforms-field-small"
                                                                            name="wpforms[fields][5]"
                                                                            placeholder="Un commentaire ?"></textarea></div>
                                                                </div>
                                                                <div class="wpforms-submit-container"><input type="hidden"
                                                                                                             name="wpforms[id]"
                                                                                                             value="1217"><input
                                                                        type="hidden" name="wpforms[author]"
                                                                        value="1"><input
                                                                        type="hidden" name="wpforms[post_id]" value="593">
                                                                    <button type="submit" name="wpforms[submit]"
                                                                            class="wpforms-submit call__back-button"
                                                                            id="wpforms-submit-1217" value="wpforms-submit"
                                                                            aria-live="assertive"
                                                                            data-alt-text="Envoi en cours..."
                                                                            data-submit-text="Envoyer">Envoyer
                                                                    </button>
                                                                    <img
                                                                        src="https://kelia-travaux.com/wp-content/plugins/wpforms/assets/images/submit-spin.svg"
                                                                        class="wpforms-submit-spinner"
                                                                        style="display: none;"
                                                                        width="26" height="26" alt=""></div>
                                                            </form>
                                                        </div>  <!-- .wpforms-container -->        </div>
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
        <div data-elementor-type="popup" data-elementor-id="1305" class="elementor elementor-1305 elementor-location-popup" data-elementor-settings="{&quot;entrance_animation&quot;:&quot;fadeInUp&quot;,&quot;entrance_animation_duration&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0.7,&quot;sizes&quot;:[]},&quot;prevent_close_on_background_click&quot;:&quot;yes&quot;,&quot;open_selector&quot;:&quot;#infos&quot;,&quot;timing&quot;:[]}">
            <div class="elementor-section-wrap">
                <section class="has_eae_slider ob-is-breaking-bad elementor-section elementor-top-section elementor-element elementor-element-67e6ec4d elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="67e6ec4d" data-element_type="section" data-settings="{&quot;_ob_bbad_use_it&quot;:&quot;yes&quot;,&quot;_ob_bbad_sssic_use&quot;:&quot;no&quot;,&quot;_ob_glider_is_slider&quot;:&quot;no&quot;}">
                    <div class="elementor-container elementor-column-gap-default">
                        <div class="has_eae_slider elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-6586c079" data-id="6586c079" data-element_type="column" data-settings="{&quot;_ob_bbad_is_stalker&quot;:&quot;no&quot;,&quot;_ob_teleporter_use&quot;:false,&quot;_ob_column_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_column_has_pseudo&quot;:&quot;no&quot;}">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <section class="has_eae_slider ob-is-breaking-bad ob-bb-inner elementor-section elementor-inner-section elementor-element elementor-element-65abfaa7 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="65abfaa7" data-element_type="section" data-settings="{&quot;_ob_bbad_use_it&quot;:&quot;yes&quot;,&quot;_ob_bbad_sssic_use&quot;:&quot;no&quot;,&quot;_ob_glider_is_slider&quot;:&quot;no&quot;}">
                                    <div class="elementor-container elementor-column-gap-default">
                                        <div class="has_eae_slider elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-22a6259b" data-id="22a6259b" data-element_type="column" data-settings="{&quot;_ob_bbad_is_stalker&quot;:&quot;no&quot;,&quot;_ob_teleporter_use&quot;:false,&quot;_ob_column_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_column_has_pseudo&quot;:&quot;no&quot;}">
                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                <div class="elementor-element elementor-element-74c3ee67 ob-harakiri-inherit elementor-widget elementor-widget-heading" data-id="74c3ee67" data-element_type="widget" data-settings="{&quot;_ob_harakiri_writing_mode&quot;:&quot;inherit&quot;,&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}" data-widget_type="heading.default">
                                                    <div class="elementor-widget-container">
                                                        <h3 class="elementor-heading-title elementor-size-default">Adresse</h3>		</div>
                                                </div>
                                                <div class="elementor-element elementor-element-07df43c elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list" data-id="07df43c" data-element_type="widget" data-settings="{&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}" data-widget_type="icon-list.default">
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
                                        <div class="has_eae_slider elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-39f48a2" data-id="39f48a2" data-element_type="column" data-settings="{&quot;_ob_bbad_is_stalker&quot;:&quot;no&quot;,&quot;_ob_teleporter_use&quot;:false,&quot;_ob_column_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_column_has_pseudo&quot;:&quot;no&quot;}">
                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                <div class="elementor-element elementor-element-f640327 elementor-widget elementor-widget-google_maps" data-id="f640327" data-element_type="widget" data-settings="{&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}" data-widget_type="google_maps.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-custom-embed">
                                                            <iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0"
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
