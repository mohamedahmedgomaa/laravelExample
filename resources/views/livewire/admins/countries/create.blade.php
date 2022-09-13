<div class="card-content collapse show">
    <div class="card-body">
        <form wire:submit.prevent="create">
            <div class="form-body">
                <h4 class="form-section">
                    <i class="fas fa-info-circle text-primary"></i>
                    {{ trans('admin.addCountry') }}
                </h4>
                <div id="validation-errors"></div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group row mx-1">
                            <label for="code" class="label-control">{{ trans('interface.countryCode') }}</label>
                            <input wire:model.lazy="code"
                                   class="form-control" placeholder="{{ trans('interface.countryCode') }}" name="code"
                                   type="text" id="code">

                            @if($errors->has('code'))
                                <p class="errorCountry text-center text-danger ">{{ $errors->first('code') }}</p>
                            @endif
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group row mx-1">
                            <label for="phone_length"
                                   class="label-control">{{ trans('interface.countryNumberLength') }}</label>
                            <input wire:model.lazy="phone_length"
                                   class="form-control"
                                   placeholder="{{ trans('interface.countryPhonrNumberPlaceHolder') }}"
                                   name="phone_length" type="text" id="phone_length">
                            @if($errors->has('phone_length'))
                                <p class="errorCountry text-center text-danger ">{{ $errors->first('phone_length') }}</p>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group row mx-1">
                            <label for="NameArabic" class="label-control">{{ trans('interface.nameArabic') }}</label>
                            <input wire:model.lazy="name_ar"
                                   class="form-control" placeholder="{{ trans('interface.nameArabic') }}" name="name_ar"
                                   type="text" id="NameArabic">

                            @if($errors->has('name_ar'))
                                <p class="errorCountry text-center text-danger ">{{ $errors->first('name_ar') }}</p>
                            @endif
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group row mx-1">
                            <label for="NameEnglish" class="label-control">{{ trans('interface.nameEnglish') }}</label>
                            <input wire:model.lazy="name_en"
                                   class="form-control" placeholder="{{ trans('interface.nameEnglish') }}"
                                   name="name_en" type="text" id="NameEnglish">
                            @if($errors->has('name_en'))
                                <p class="errorCountry text-center text-danger ">{{ $errors->first('name_en') }}</p>
                            @endif
                        </div>
                    </div>

                </div>
            </div>

            <div class="form-actions right">
                <button wire:loading.attr="disabled" wire:target="create" type="submit" class="btn btn-primary">
                    <i class="la la-check"></i> {{ trans('interface.save') }}
                </button>
            </div>
        </form>
    </div>

</div>
