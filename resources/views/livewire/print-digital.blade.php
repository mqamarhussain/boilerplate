<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="breadcrumb-main">
                <h4 class="text-capitalize breadcrumb-title">Calculează un preț</h4>
            </div>
        </div>
    </div>
    <div class="form-element">
        <div class="row">
            <div class="col-lg-6">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card card-default card-md mb-4">
                            <div class="card-header">
                                <h6>Input Groups</h6>
                            </div>
                            <div class="card-body py-md-30">
                                <form wire:submit.prevent="calculateCost">
                                        <div class="form-group ">
                                            <label for="paper_type" class="il-gray fs-14 fw-500 align-center mb-10">Tip hârtie:</label>
                                            <select id="paper_type" 
                                            class="form-control select2 ih-medium ip-gray radius-xs b-light px-15" 
                                            wire:model="paper_type"
                                            wire:change="getFormatesByPaperType"
                                            >
                                                <option value="">Tip hârtie</option>
                                                @foreach($paper_type_dropdown as $paper_type)
                                                <option value=" {{ $paper_type->id }} "> {{ $paper_type->name }} </option>
                                                @endforeach
                                            </select>
                                        @error('paper_type') <span class="invalid-feedback d-block">{{ $message }}</span> @enderror
                                    </div>
                                    <div class="form-group">
                                            <label for="format" class="il-gray fs-14 fw-500 align-center mb-10">Alegeți dimensiunea</label>
                                            <select id="format" 
                                            class="form-control select2" 
                                            wire:model = "format"
                                            wire:change = "getThicknessByFormat"
                                            >
                                                <option value="">Alegeți dimensiunea</option>
                                                @foreach($formats_dropdown as $format)
                                                <option value="{{ $format->dimensions }}">
                                                    {{ $format->dimensions }}
                                                </option>
                                                @endforeach
                                            </select>
                                        @error('format') <span class="invalid-feedback d-block">{{ $message }}</span> @enderror
                                    </div>
                                    <div class="form-group">
                                            <label for="paper_thickness" class="il-gray fs-14 fw-500 align-center mb-10">Alegeți gramajul:</label>
                                            <select id="paper_thickness"  
                                            class="form-control select2 ih-medium ip-gray radius-xs b-light px-15" 
                                            wire:model="paper_thickness">
                                                <option value="">Alegeți gramajul</option>
                                                .
                                                @foreach($paper_thickness_dropdown as $paper_thickness)
                                                <option value="{{ $paper_thickness->thickness }}">
                                                    {{ $paper_thickness->thickness }}
                                                </option>
                                                @endforeach
                                            </select>
                                        @error('paper_thickness') <span class="invalid-feedback d-block"> {{ $message }}</span> @enderror
                                    </div>

                                    <div class="form-group ">
                                        <label for="sides" class="il-gray fs-14 fw-500 align-center mb-10">
                                            Sides:
                                        </label>
                                        <select wire:model="sides" id="sides" class="form-control form-control-lg">
                                            <option value="" > Sides? </option>
                                            <option value="1" >1 ({{ $productionCost }}) </option>
                                            <option value="2" >2 ({{ $productionCost * 2 }})</option>
                                        </select>
                                        @error('sides') <span class="invalid-feedback d-block"> {{ $message }}</span> @enderror
                                    </div>

                                    <div class="form-group ">
                                        <label for="quantity" class="il-gray fs-14 fw-500 align-center mb-10">
                                            quantity:
                                        </label>
                                        <input type="number" class="form-control form-control-lg" id="quantity" placeholder="quantity" wire:model="quantity" />
                                        @error('quantity') <span class="invalid-feedback d-block"> {{ $message }} </span> @enderror
                                    </div>



                                    <button type="submit" class="btn btn-primary btn-default btn-squared px-30">Calculeaza</button>
                                </form>
                                <div>
                                    @if(isset($cost))
                                    <p>Costul estimat este de {{ $cost }} lei.</p>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@push('scripts')
<script>
    $(document).ready(function () {
       
        $("#paper_type").on('change', function(e) {
           let id = $(this).val()
           @this.set('paper_type', id);
           livewire.emit('getFormatesByPaperType');
       })
    

        $("#format").on('change', function(e) {
            let id = $(this).val()
            @this.set('format', id);
            livewire.emit('getThicknessByFormat', id);
        })

        $("#paper_thickness").on('change', function(e) {
            let id = $(this).val()
            @this.set('paper_thickness', id);
        })

    });
</script>
@endpush
