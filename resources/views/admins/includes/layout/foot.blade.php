<?php
/**
 * Created by PhpStorm.
 * User: Yousef Altaf Wasti
 * Date: 9/28/2020
 * Time: 11:03 PM
 */ ?>
<!-- BEGIN VENDOR JS-->

<!-- BEGIN VENDOR JS-->
<!-- BEGIN PAGE VENDOR JS-->
{!! Html::script('admins/app-assets/vendors/js/vendors.min.js') !!}
{!! Html::script('admins/app-assets/vendors/js/timeline/horizontal-timeline.js') !!}
<!-- END PAGE VENDOR JS-->
<!-- BEGIN MODERN JS-->
{!! Html::script('admins/app-assets/js/core/app-menu.js') !!}
{!! Html::script('admins/app-assets/js/core/app.js') !!}
{!! Html::script('admins/app-assets/js/scripts/customizer.js') !!}

<!-- END MODERN JS-->
{{--Bootstrap Sortable JQuery--}}
{!! Html::script('https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js') !!}
{{--Bootstrap Sortable JQuery--}}
{{--Bootstrap JQuery--}}
{!! Html::script('https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js', ['integrity'=>'sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q', 'crossorigin'=>'anonymous']) !!}
{!! Html::script('//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js') !!}
{{--Dropzone--}}
{!! Html::script('https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.7.0/min/dropzone.min.js') !!}
{!! Html::script('admins/app-assets/vendors/js/forms/select/select2.full.min.js') !!}
{!! Html::script('admins/app-assets/js/scripts/forms/select/form-select2.js') !!}
{{-- livewire-sortable --}}
{!! Html::script('admins/app-assets/js/scripts/livewire-sortable/livewire-sortable.js') !!}
{!! Html::script('admins/app-assets/js/jquery-ui.min.js') !!}
{!! Html::script('admins/app-assets/js/navigations.js') !!}
{{-- intro  the page guide --}}
{!! Html::script('admins/app-assets/js/scripts/intro/shepherd.js') !!}
<!-- END PAGE LEVEL JS-->
<script>
    $(document).ready(function () {
        $('.select2').select2();
    });
</script>
