<div class="row">
    @section('title', trans('admin.countries'))

    @section('main-title', trans('admin.countries'))
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title" id="row-separator-colored-controls">{{ trans('admin.countries') }}
                </h4>
                <a class="heading-elements-toggle"><i class="la la-ellipsis-h font-medium-3"></i></a>
                <div class="heading-elements">
                    <ul class="list-inline mb-0">
                        <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                    </ul>
                </div>
            </div>
            @include('livewire.admins.countries.create')

            <div class="card-content collapse show">
                <div class="card-body">
                    <h4 class="form-section">
                        <i class="fas fa-info-circle text-primary"></i>
                        {{ trans('admin.service') }}
                    </h4>
                    <div class="mb-3 row ">
                        <label for="Search" class="form-label col-md-1">Search</label>
                        <input wire:model="search" name="search" type="search" class="form-control col-md-11"
                            id="Search">
                    </div>
                    <div class="table-responsive">
                        <table class="table text-center" id="countryTable">
                            <thead class="bg-info white">
                                <tr>
                                    <th>#</th>
                                    <th>
                                        <div wire:click="sortBy('name','ar')">{{ trans('interface.nameArabic') }}
                                            @if ($sortField !== 'name')

                                            @elseif($sortAsc && $lang == 'ar')
                                                <i class="la la-dot-circle-o success font-medium-1 mr-1"></i>
                                            @elseif(!$sortAsc && $lang == 'ar')
                                                <i class="la la-dot-circle-o danger font-medium-1 mr-1"></i>
                                            @endif


                                        </div>
                                    </th>
                                    <th>
                                        <div wire:click="sortBy('name','en')">{{ trans('interface.nameEnglish') }}
                                            @if ($sortField !== 'name')

                                            @elseif($sortAsc && $lang == 'en')
                                                <i class="la la-dot-circle-o success font-medium-1 mr-1"></i>
                                            @elseif(!$sortAsc && $lang == 'en')
                                                <i class="la la-dot-circle-o danger font-medium-1 mr-1"></i>
                                            @endif
                                        </div>
                                    </th>
                                    <th>{{ trans('interface.countryCode') }}</th>
                                    <th>{{ trans('interface.countryNumberLength') }}</th>
                                    <th>{{ trans('interface.actions') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($items as $item)
                                    <tr class="item{!! $item->id !!}">
                                        <td>{{ $items->firstItem() + $loop->index }}</td>
                                        <td>{!! $item->{'name:ar'} !!}</td>
                                        <td>{!! $item->{'name:en'} !!}</td>
                                        <td>{!! $item->{'code'} !!}</td>
                                        <td>{!! $item->{'phone_length'} !!}</td>
                                        <td>
                                            <button wire:click="edit({{ $item->id }})"
                                                class="edit-modal btn btn-info">
                                                <span class="fa fa-pencil-square-o"></span>
                                                {{ trans('interface.edit') }}
                                            </button>
                                            <button wire:click="delete({{ $item->id }})"
                                                class="delete-modal btn btn-danger">
                                                <span class="fa fa-trash"></span> Delete
                                            </button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </div>
                    <div class="row">
                        <div class="col-12 text-center m-2">
                            {{ $items->links() }}
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    @include('livewire.admins.countries.edit')

    @include('livewire.admins.countries.delete')
    <script>
        window.addEventListener('click', function(e) {
            if (document.getElementById('modalbody').contains(e.target)) {

                if (document.getElementById('innerbox').contains(e.target)) {


                } else {
                    Livewire.emit('closemodel')
                }
            }
        });
    </script>
    <script>
        window.addEventListener('click', function(e) {
            if (document.getElementById('modalbodydel').contains(e.target)) {

                if (document.getElementById('innerboxdel').contains(e.target)) {


                } else {
                    Livewire.emit('closemodel')
                }
            }
        });
    </script>
</div>
