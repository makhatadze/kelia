<div data-elementor-type="header" data-elementor-id="62" class="elementor elementor-62 elementor-location-header"
     data-elementor-settings="[]">
    <div class="elementor-section-wrap">
        <header
                class="has_eae_slider ob-is-breaking-bad elementor-section elementor-top-section elementor-element elementor-element-354fe0e4 elementor-section-full_width elementor-section-stretched elementor-section-content-middle elementor-section-height-default elementor-section-height-default"
                data-id="354fe0e4"
                data-element_type="section"
                data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;background_background&quot;:&quot;classic&quot;,&quot;sticky&quot;:&quot;top&quot;,&quot;_ob_bbad_use_it&quot;:&quot;yes&quot;,&quot;_ob_bbad_sssic_use&quot;:&quot;no&quot;,&quot;_ob_glider_is_slider&quot;:&quot;no&quot;,&quot;sticky_on&quot;:[&quot;desktop&quot;,&quot;tablet&quot;,&quot;mobile&quot;],&quot;sticky_offset&quot;:0,&quot;sticky_effects_offset&quot;:0}"
        >
            <div class="elementor-container elementor-column-gap-default">
                <div
                        class="has_eae_slider elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-4646c97"
                        data-id="4646c97" data-element_type="column"
                        data-settings="{&quot;_ob_bbad_is_stalker&quot;:&quot;no&quot;,&quot;_ob_teleporter_use&quot;:false,&quot;_ob_column_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_column_has_pseudo&quot;:&quot;no&quot;}">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-4f3b5c1 elementor-widget elementor-widget-image"
                             data-id="4f3b5c1"
                             data-element_type="widget"
                             data-settings="{&quot;_ob_photomorph_use&quot;:&quot;no&quot;,&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}"
                             data-widget_type="image.default"
                        >
                            <div class="elementor-widget-container">
                                <a href="{{route('main')}}">
                                    <img src="https://kelia-travaux.com/wp-content/uploads/2021/05/Kelia.svg"
                                         class="attachment-full size-full"
                                         alt="Kelia.svg"
                                         loading="lazy"
                                    />
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div
                        class="has_eae_slider elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-62242871">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-f86a701">
                            <div class="elementor-widget-container">
                                <div class="elementor-icon-wrapper" style="display: flex;align-items: center">
                                    <a class="elementor-icon" href="{{route('main')}}">
                                        <i aria-hidden="true" class="fas fa-home"></i>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div
                                class="elementor-element elementor-element-67e1f03e elementor-nav-menu--stretch elementor-widget__width-auto elementor-nav-menu__align-right elementor-nav-menu--dropdown-tablet elementor-nav-menu__text-align-aside elementor-nav-menu--toggle elementor-nav-menu--burger elementor-widget elementor-widget-nav-menu"
                                data-id="67e1f03e"
                                data-element_type="widget"
                                data-settings="{&quot;full_width&quot;:&quot;stretch&quot;,&quot;submenu_icon&quot;:{&quot;value&quot;:&quot;fas fa-chevron-down&quot;,&quot;library&quot;:&quot;fa-solid&quot;},&quot;layout&quot;:&quot;horizontal&quot;,&quot;toggle&quot;:&quot;burger&quot;,&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}"
                                data-widget_type="nav-menu.default"
                        >
                            <div class="elementor-widget-container">
                                <nav
                                        migration_allowed="1"
                                        migrated="0"
                                        role="navigation"
                                        class="elementor-nav-menu--main elementor-nav-menu__container elementor-nav-menu--layout-horizontal e--pointer-underline e--animation-slide"
                                >
                                    <ul id="menu-1-67e1f03e" class="elementor-nav-menu">
                                        @foreach($services as $service)
                                            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-1007">
                                                <a href="#" class="elementor-item elementor-item-anchor">
                                                    {{$service['title']}}
                                                </a>

                                                <ul class="sub-menu elementor-nav-menu--dropdown">
                                                    @foreach($service['pages'] as $page)
                                                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-906">
                                                            <a href="{{route('page', ['id' => $page['id']])}}"
                                                               class="elementor-sub-item">
                                                                {{$page['head_title']}}
                                                            </a>
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            </li>
                                        @endforeach

                                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1679">
                                            <a href="{{route('packets_client')}}" class="elementor-item">
                                                Packs
                                            </a>
                                        </li>

                                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1679">
                                            <a href="{{route('about_us')}}" class="elementor-item">
                                                About
                                            </a>
                                        </li>

{{--                                        @if (\Illuminate\Support\Facades\Auth::check())--}}
{{--                                            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-1007">--}}
{{--                                                <a href="#" class="elementor-item elementor-item-anchor">--}}
{{--                                                    Profile--}}
{{--                                                </a>--}}

{{--                                                <ul class="sub-menu elementor-nav-menu--dropdown">--}}
{{--                                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-906">--}}
{{--                                                        <a href="{{route('client_profile')}}"--}}
{{--                                                           class="elementor-sub-item">--}}
{{--                                                            {{ \Illuminate\Support\Facades\Auth::user()->name }}--}}
{{--                                                        </a>--}}
{{--                                                    </li>--}}

{{--                                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-906">--}}
{{--                                                        <a class="elementor-sub-item"--}}
{{--                                                           href="#"--}}
{{--                                                           onclick="event.preventDefault(); document.getElementById('logout-form').submit()"--}}
{{--                                                        >--}}
{{--                                                            Signout--}}
{{--                                                        </a>--}}

{{--                                                        <form method="POST" id="logout-form"--}}
{{--                                                              action="{{ route('signout_client') }}">--}}
{{--                                                            @csrf--}}
{{--                                                        </form>--}}
{{--                                                    </li>--}}
{{--                                                </ul>--}}
{{--                                            </li>--}}
{{--                                        @else--}}
{{--                                            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-1007">--}}
{{--                                                <a href="#" class="elementor-item elementor-item-anchor">--}}
{{--                                                    <i class="far fa-user" style="padding-top: 5px"></i>--}}
{{--                                                </a>--}}

{{--                                                <ul class="sub-menu elementor-nav-menu--dropdown">--}}
{{--                                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1679">--}}
{{--                                                        <a href="{{route('register_client_page')}}"--}}
{{--                                                           class="elementor-item">--}}
{{--                                                            register--}}
{{--                                                        </a>--}}
{{--                                                    </li>--}}
{{--                                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1679">--}}
{{--                                                        <a href="{{route('login_client_page')}}" class="elementor-item">--}}
{{--                                                            sign in--}}
{{--                                                        </a>--}}
{{--                                                    </li>--}}
{{--                                                </ul>--}}
{{--                                            </li>--}}
{{--                                        @endif--}}
                                    </ul>
                                </nav>

                                <div class="elementor-menu-toggle" role="button" tabindex="0" aria-label="Menu Toggle"
                                     aria-expanded="false">
                                    <i class="eicon-menu-bar" aria-hidden="true" role="presentation"></i>
                                    <span class="elementor-screen-only">Menu</span>
                                </div>

                                {{-- Mobile nav --}}
                                <nav class="elementor-nav-menu--dropdown elementor-nav-menu__container"
                                     role="navigation"
                                     aria-hidden="true">
                                    <ul id="menu-2-67e1f03e" class="elementor-nav-menu">
                                        @foreach($services as $service)
                                            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-1008">
                                                <a href="#" class="elementor-item elementor-item-anchor" tabindex="-1">
                                                    {{$service['title']}}
                                                </a>

                                                <ul class="sub-menu elementor-nav-menu--dropdown">
                                                    @foreach($service['pages'] as $page)
                                                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1104">
                                                            <a href="{{route('page', ['id' => $page['id']])}}"
                                                               class="elementor-sub-item"
                                                               tabindex="-1">
                                                                {{$page['head_title']}}
                                                            </a>
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            </li>
                                        @endforeach

                                        @if (\Illuminate\Support\Facades\Auth::check())
                                            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-1007">
                                                <a href="#" class="elementor-item elementor-item-anchor">
                                                    Profile
                                                </a>

                                                <ul class="sub-menu elementor-nav-menu--dropdown">
                                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-906">
                                                        <a href="{{route('client_profile')}}"
                                                           class="elementor-sub-item">
                                                            {{ \Illuminate\Support\Facades\Auth::user()->name }}
                                                        </a>
                                                    </li>

                                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-906">
                                                        <a class="elementor-sub-item"
                                                           href="#"
                                                           onclick="event.preventDefault(); document.getElementById('logout-form').submit()"
                                                        >
                                                            Signout
                                                        </a>

                                                        <form method="POST" id="logout-form"
                                                              action="{{ route('signout_client') }}">
                                                            @csrf
                                                        </form>
                                                    </li>
                                                </ul>
                                            </li>
                                        @else
                                            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-1007">
                                                <a href="#" class="elementor-item elementor-item-anchor">
                                                    <i class="far fa-user" style="padding-top: 5px"></i>
                                                </a>

                                                <ul class="sub-menu elementor-nav-menu--dropdown">
                                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1679">
                                                        <a href="{{route('register_client_page')}}"
                                                           class="elementor-item">
                                                            register
                                                        </a>
                                                    </li>
                                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1679">
                                                        <a href="{{route('login_client_page')}}" class="elementor-item">
                                                            sign in
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                        @endif

                                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1679">
                                            <a href="{{route('packets_client')}}" class="elementor-item">
                                                Packs
                                            </a>
                                        </li>

                                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1679">
                                            <a href="{{route('about_us')}}" class="elementor-item">
                                                About
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>

                        <div
                                class="elementor-element elementor-element-5bfd50bf elementor-widget__width-auto elementor-hidden-tablet elementor-hidden-phone elementor-widget elementor-widget-button"
                                data-id="5bfd50bf"
                                data-element_type="widget"
                                data-settings="{&quot;_ob_butterbutton_use_it&quot;:&quot;no&quot;,&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}"
                                data-widget_type="button.default">
                            <div class="elementor-widget-container">
                                <div class="elementor-button-wrapper">
                                    <a href="{{route('immediate')}}"
                                       class="elementor-button-link elementor-button elementor-size-xs"
                                       role="button">
                                        <span class="elementor-button-content-wrapper">
                                            <span class="elementor-button-text">Chiffrage immédiat</span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
    </div>
</div>
