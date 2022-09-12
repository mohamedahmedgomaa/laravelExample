<div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            <li>
                <a href="#"><i class="la la-cubes"></i>
                    <span class="menu-title">{{trans('admin.dashboard')}}</span>
                </a>
                <ul class="menu-content">
                    <li class=" nav-item">
                        <a href="#">
                            <i class="la la-home"></i>
                            <span class="menu-title" data-i18n="nav.dash.main">
                                {{ trans('admin.dashboard') }}
                            </span>
                        </a>
                    </li>
                </ul>
            </li>
            
            <li>
                <a href="#"><i class="la la-cubes"></i>
                    <span class="menu-title">{{trans('admin.country')}}</span>
                </a>
                <ul class="menu-content">
                    <li class="nav-item">
                        <a class="menu-item" href="{{ route('admin.country') }}" data-i18n="nav.dash.countries">
                            <i class="la la-cogs"></i> {{trans('admin.country')}}
                        </a>
                    </li>

                </ul>
            </li>


            {{-- <li>
                <a href="#"><i class="la la-cubes"></i>
                    <span class="menu-title" data-i18n="nav.dash.main">
                            {{trans('superAdministrator.settings')}}
            </span>
            </a>
            <ul class="menu-content">
                <li><a class="menu-item" href="{{ route('administration.externallink') }}" data-i18n="nav.dash.countries">
                        <i class="la la-cogs"></i> {{trans('admin.externallink')}}
                    </a>
                </li>
                <li><a class="menu-item" href="{{ route('administration.generalSettings') }}" data-i18n="nav.dash.countries">
                        <i class="la la-cogs"></i> {{trans('admin.generalSetting')}}
                    </a>
                </li>
            </ul>
            </li> --}}
            {{--            @can('settings')--}}
            {{--            <li class=" nav-item"><a href="{{ route('administration.setting') }}">--}}
            {{--                    <i class="la la-cubes"></i>--}}
            {{--                    <span class="menu-title">{{trans('superAdministrator.settings')}}</span>--}}
            {{--                </a>--}}
            {{--            </li>--}}
            {{--            @endcan--}}
            {{--            @can('app_services')--}}
            {{--            <li class=" nav-item"><a href="{{ route('administration.apps.and.services') }}">--}}
            {{--                    <i class="las la-cogs"></i>--}}
            {{--                    <span class="menu-title">{{ trans('admin.Apps&Services') }}</span>--}}
            {{--                </a>--}}
            {{--            </li>--}}
            {{--            @endcan--}}
            {{--            <li class=" nav-item">--}}
            {{--                <a href="#"><i class="la la-flag"></i>--}}
            {{--                    <span class="menu-title" data-i18n="nav.dash.main">--}}
            {{--                        {{trans('admin.users')}}--}}
            {{--                    </span>--}}
            {{--                </a>--}}
            {{--                <ul class="menu-content">--}}
            {{--                    @can('suppliers')--}}
            {{--                    <li><a class="menu-item" href="{{ route('administration.suppliers.view') }}" data-i18n="nav.dash.countries">{{trans('admin.suppliers')}}</a>--}}
            {{--                    </li>--}}
            {{--                    @endcan--}}
            {{--                    @can('customers')--}}
            {{--                    <li><a class="menu-item" href="{{ route('administration.customer.view') }}" data-i18n="nav.dash.cities">{{trans('admin.customer')}}</a>--}}
            {{--                    </li>--}}
            {{--                    @endcan--}}
            {{--                </ul>--}}
            {{--            </li>--}}
            {{--            <li id="products" id="products"><a href="#"><i class="la la-cubes"></i>--}}
            {{--                    <span class="menu-title" data-i18n="nav.dash.main">--}}
            {{--                        {{trans('admin.products')}}--}}
            {{--                    </span>--}}
            {{--                </a>--}}
            {{--                <ul class="menu-content">--}}
            {{--                    @can('manage_products')--}}
            {{--                    <li><a class="menu-item" href="{{ route('administration.supplier.login') }}" target="_blank">--}}
            {{--                            <i class="la la-cubes"></i> {{trans('admin.manageProducts')}}--}}
            {{--                        </a>--}}
            {{--                    </li>--}}
            {{--                    @endcan--}}
            {{--                    @can('waiting_approval')--}}
            {{--                    <li><a class="menu-item" href="{{ route('administration.products.waiting.approval') }}" data-i18n="nav.dash.countries">--}}
            {{--                            <i class="la la-cogs"></i> {{trans('admin.WaitingApprovalSide')}}--}}
            {{--                        </a>--}}
            {{--                    </li>--}}
            {{--                    @endcan--}}
            {{--                    <li class=" nav-item">--}}
            {{--                        <a href="#"><i class="lab la-creative-commons-remix"></i>--}}
            {{--                            <span class="menu-title" data-i18n="nav.dash.main">--}}
            {{--                                {{trans('admin.tagsAndBrands')}}--}}
            {{--                            </span>--}}
            {{--                        </a>--}}
            {{--                        <ul class="menu-content">--}}
            {{--                            @can('tags')--}}
            {{--                            <li><a class="menu-item" href="{{ route('administration.tags') }}"><i class="la la-tags"></i><span class="menu-title" data-i18n="">{{ trans('admin.mangeTag') }}</span></a>--}}
            {{--                            </li>--}}
            {{--                            @endcan--}}
            {{--                            @can('brands')--}}
            {{--                            <li><a class="menu-item" href="{{ route('administration.brand') }}"><i class="la la-dedent"></i><span class="menu-title" data-i18n="">{{trans('interface.brands')}}</span></a>--}}
            {{--                            </li>--}}
            {{--                            @endcan--}}
            {{--                        </ul>--}}
            {{--                    </li>--}}
            {{--                    <li class=" nav-item" id="categories">--}}
            {{--                        <a href="#"><i class="la la-delicious"></i>--}}
            {{--                            <span class="menu-title" data-i18n="nav.dash.main">{{trans('admin.Categories-Side')}}--}}
            {{--                            </span>--}}
            {{--                        </a>--}}
            {{--                        <ul class="menu-content">--}}
            {{--                            @can('categories')--}}
            {{--                            <li id="category"><a class="menu-item" href="{{ route('administration.product_categories') }}" data-i18n="nav.dash.product_categories">{{trans('admin.mainCategories')}}</a>--}}
            {{--                            </li>--}}
            {{--                            @endcan--}}
            {{--                            @can('sub_categories')--}}
            {{--                            <li id="subCategory"><a class="menu-item" href="{{ route('administration.product_sub_categories') }}" data-i18n="nav.dash.cities">{{trans('admin.SubCategories')}}</a>--}}
            {{--                            </li>--}}
            {{--                            @endcan--}}
            {{--                            @can('sub_sub_categories')--}}
            {{--                            <li><a class="menu-item" href="{{ route('administration.product_sub_sub_categories') }}" data-i18n="nav.dash.cities">{{trans('admin.SubSubCategories')}}</a>--}}
            {{--                            </li>--}}
            {{--                            @endcan--}}
            {{--                        </ul>--}}
            {{--                    </li>--}}

            {{--                    <li class=" nav-item">--}}
            {{--                        <a href="#"><i class="la la-flag"></i>--}}
            {{--                            <span class="menu-title" data-i18n="nav.dash.main">--}}
            {{--                                {{trans('superAdministrator.filtration')}}--}}
            {{--                            </span>--}}
            {{--                        </a>--}}
            {{--                        <ul class="menu-content">--}}
            {{--                            @can('filters')--}}
            {{--                            <li><a class="menu-item" href="{{ route('administration.filters') }}" data-i18n="nav.dash.attributes">{{trans('admin.filters')}}</a>--}}
            {{--                            </li>--}}
            {{--                            @endcan--}}
            {{--                            @can('items')--}}
            {{--                            <li><a class="menu-item" href="{{ route('administration.items') }}" data-i18n="nav.dash.items">{{trans('admin.items')}}</a>--}}
            {{--                            </li>--}}
            {{--                            @endcan--}}
            {{--                        </ul>--}}
            {{--                    </li>--}}
            {{--                </ul>--}}
            {{--            </li>--}}

            {{--            <li class=" nav-item">--}}
            {{--                <a href="#"><i class="las la-broadcast-tower"></i>--}}
            {{--                    <span class="menu-title" data-i18n="nav.dash.main">{{trans('admin.MediaStation')}}--}}
            {{--                    </span>--}}
            {{--                </a>--}}
            {{--                <ul class="menu-content">--}}
            {{--                    <li><a href="{{ route('administration.ad_groups.index') }}"><i class="la la-adn"></i><span class="menu-title" data-i18n="">{{ trans('admin.adGroups') }}</span></a>--}}
            {{--                    </li>--}}
            {{--                </ul>--}}
            {{--            </li>--}}

            {{--            --}}{{-- <li class=" nav-item">--}}
            {{--                <a href="#"><i class="las la-calculator"></i>--}}
            {{--                    <span class="menu-title" data-i18n="nav.dash.main">{{trans('admin.taxAndCurrency')}}--}}
            {{--            </span>--}}
            {{--            </a>--}}
            {{--            <ul class="menu-content">--}}
            {{--                <li><a href="{{ route('administration.taxes.create') }}"><i class="las la-percent"></i><span class="menu-title" data-i18n="">{{ trans('admin.mangeTax') }}</span></a>--}}
            {{--                </li>--}}

            {{--                <li><a href="{{ route('administration.currency.create') }}"><i class="las la-coins"></i><span class="menu-title" data-i18n="">{{ trans('admin.currency') }}</span></a>--}}
            {{--                </li>--}}
            {{--            </ul>--}}
            {{--            </li> --}}


            {{--            --}}{{--<li><a href="{{ route('administration.payment_methods.create') }}"><i class="la la-cc-paypal"></i><span class="menu-title" data-i18n="">{{ trans('admin.mangePaymentMethod') }}</span></a>--}}
            {{--            </li>--}}

            {{--            <li class=" nav-item">--}}
            {{--                <a href="#"><i class="las la-thumbtack"></i>--}}
            {{--                    <span class="menu-title" data-i18n="nav.dash.main">--}}
            {{--                        {{trans('admin.singlePages')}}--}}
            {{--                    </span>--}}
            {{--                </a>--}}
            {{--                <ul class="menu-content">--}}
            {{--                    @can('privacy_policy')--}}
            {{--                        <li><a class="menu-item" href="{{ route('administration.single-page.create',1) }}"--}}
            {{--                               data-i18n="nav.dash.countries">{{trans('admin.privacyPolicy')}}</a>--}}
            {{--                        </li>--}}
            {{--                    @endcan--}}
            {{--                    <li><a class="menu-item" href="{{ route('administration.single-page.create',2) }}"--}}
            {{--                        data-i18n="nav.dash.countries">{{trans('admin.contact-us')}}</a>--}}
            {{--                 </li>--}}
            {{--                 <li><a class="menu-item" href="{{ route('administration.single-page.create',3) }}"--}}
            {{--                    data-i18n="nav.dash.countries">{{trans('admin.about-us')}}</a>--}}
            {{--             </li>--}}
            {{--                </ul>--}}
            {{--            </li>--}}
            {{--            @can('roles')--}}
            {{--            <li class=" nav-item"><a href="{{ route('administration.roles') }}">--}}
            {{--                    <i class="las la-cogs"></i>--}}
            {{--                    <span class="menu-title">{{ trans('admin.roles') }}</span>--}}
            {{--                </a>--}}
            {{--            </li>--}}
            {{--            @endcan--}}
            {{--            @can('admins')--}}
            {{--            <li class=" nav-item"><a href="{{ route('administration.admins') }}">--}}
            {{--                    <i class="las la-cogs"></i>--}}
            {{--                    <span class="menu-title">{{ trans('admin.admins') }}</span>--}}
            {{--                </a>--}}
            {{--            </li>--}}
            {{--            @endcan--}}
        </ul>
    </div>
</div>
