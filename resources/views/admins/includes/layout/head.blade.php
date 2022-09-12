<?php
/**
 * Created by PhpStorm.
 * User: Mohamed Gomaa
 * Date: 10/19/2020
 * Time: 11:50 PM
 */ ?>

{!! Html::style('https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Quicksand:300,400,500,700') !!}
@if(Config::get('app.locale') == "ar")
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
@endif
{!! Html::style('https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css') !!}
{!! Html::style('admins/app-assets/images/ico/apple-icon-120.png') !!}
{!! Html::style('admins/app-assets/images/ico/favicon.ico') !!}

@if(Config::get('app.locale') == "en")
    {!! Html::style('admins/app-assets/css/vendors.css') !!}
    {!! Html::style('admins/app-assets/css/app.css') !!}
    {!! Html::style('admins/app-assets/css/core/menu/menu-types/vertical-menu-modern.css') !!}
    {!! Html::style('admins/app-assets/css/core/colors/palette-gradient.css') !!}
    {!! Html::style('admins/app-assets/css/m-style.css') !!}
@else
    {!! Html::style('admins/app-assets/css-rtl/vendors.css') !!}
    {!! Html::style('admins/app-assets/css-rtl/app.css') !!}
    {!! Html::style('admins/app-assets/css-rtl/core/menu/menu-types/vertical-menu-modern.css') !!}
    {!! Html::style('admins/app-assets/css-rtl/core/colors/palette-gradient.css') !!}
    {!! Html::style('admins/app-assets/css-rtl/m-style-rtl.css') !!}
@endif

{!! Html::style('admins/app-assets/css/core/colors/palette-gradient.css') !!}
{!! Html::style('admins/app-assets/vendors/css/charts/jquery-jvectormap-2.0.3.css') !!}
{!! Html::style('admins/app-assets/vendors/css/charts/morris.css') !!}
{!! Html::style('admins/app-assets/css/pages/gallery.css') !!}
{!! Html::style('admins/assets/css/style.css') !!}

{!! Html::style('admins/app-assets/css/jqueryui.css') !!}
{!! Html::style('admins/app-assets/css/jquery-ui.min.css') !!}
{{--toastr--}}
{!! Html::style('//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css') !!}
{{--Dropzone--}}
{!! Html::style('https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.7.0/min/dropzone.min.css') !!}
{!! Html::style('admins/app-assets/vendors/css/forms/selects/select2.min.css') !!}
{{-- intro  the page guide --}}
{!! Html::style('admins/app-assets/css/plugins/intro/shepherd.css') !!}
<style>
    .selected {
        background-color: #666;
        color: #fff;
    }
		.assistant{
			color: #fff;
	   	    background-color: #ff7318;
			border-color: #ff7318;
			min-width: 7.5rem;
		}
		.assistant:hover{
			color: #FFFFFF;
			background-color: #e76714;
  			border-color: #e76714;
		}

		button.assistant{
			position: relative;
			min-width: 8.5rem;
			padding: 0.7rem 1.3rem 0.85rem 3.75rem;
		}
		button.assistant span{
			position: absolute;
			left: 0;
			top: 0;
			bottom: 0;
			width: 2.95rem;
			line-height: 2.7rem;
			font-size: 1.6em;
			text-align: center;
			border-right: 1px solid rgba(0, 0, 0, 0.2);
		}
</style>
<style>
    .btn assistant::after {
        content: "\f105";
        font-family: "Line Awesome Free";
        font-weight: 900;
        font-size: 1rem;
        display: inline-block;
        position: absolute;
        right: 5px;
        top: 13px;
        transform: rotate( 90deg);
        transition: -webkit-transform 0.2s ease-in-out;
        border: 0;
    }
    .extra-class , .shepherd-arrow::before{
        color: #fff;
        background: #464646;
    }
    .shepherd-text{
        color: #fff !important;
    }
    .extra-class .shepherd-button {
        background: none;
        border: 1px solid #fff !important;
        border-radius: 30px;
        color: #fff;
    }
    .extra-class .shepherd-button:not(:disabled):hover {
        background: #ffffff;
        color: #000;
    }
    .extra-class img{
        width: 100%;
        height: auto;
        margin-bottom: 10px;
    }
</style>
{!! Html::style('admins/app-assets/css/style.css') !!}
