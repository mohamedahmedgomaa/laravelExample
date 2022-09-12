<div class="modal fade show @if ($showEditModal) d-block @endif" role="dialog" style="max-height: calc(100vh);
    overflow-y: auto; background-color: #22222255;" id="modalbody">
    <div class="modal-dialog" id="innerbox">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">{{ trans('interface.edit') }}</h4>
                <button wire:click="closemodal" type="button" class="close">&times;</button>
            </div>
            <div class="modal-body">
                <form wire:submit.prevent="update" class="form-horizontal">

                    <div class="form-group">
                        <label class="control-label" for="code">
                            {{ trans('interface.countryCode') }}
                        </label>
                        <input wire:model.lazy="code" type="text" class="form-control" name="code">
                        @error('code')
                            <p class="errorCountry text-center alert alert-danger ">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="phone_length">
                            {{ trans('interface.countryNumberLength') }}
                        </label>
                        <input wire:model.lazy="phone_length" type="text" class="form-control" name="phone_length">
                        @error('phone_length')
                            <p class="errorCountry text-center alert alert-danger ">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="country-name-ar">
                            {{ trans('interface.nameArabic') }}
                        </label>
                        <input wire:model.lazy="name_ar" type="text" class="form-control" name="name_ar">
                        @error('name_ar')
                            <p class="errorCountry text-center alert alert-danger ">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="country-name-en">
                            {{ trans('interface.nameEnglish') }}
                        </label>
                        <input wire:model.lazy="name_en" type="text" class="form-control" name="name_en">
                        @error('name_en')
                            <p class="errorCountry text-center alert alert-danger ">{{ $message }}</p>
                        @enderror
                    </div>


                    <div class="modal-footer">
                        <button wire:loading.attr="disabled" wire:target="update" type="submit" class="btn btn-primary edit">
                            <span class='fa fa-check'>{{ trans('interface.edit') }}</span>
                        </button>
                        <button wire:click="closemodal" type="button" class="btn btn-warning">
                            <span class='fa fa-remove'></span> {{ trans('interface.close') }}
                        </button>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
