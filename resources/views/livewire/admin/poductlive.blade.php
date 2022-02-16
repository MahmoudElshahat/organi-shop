<div>
{{-- ################################################################################ --}}
        <div class="col-md-12">
                <label> <h5>Atribute Name</h5></label>

            <div class="form-group">
                    <select style="margin-top: 5px"  name="attrName" wire:model="attrName" id="cars">

                        {{-- <option value=''>select Attribute name</option> --}}
                            @foreach($atributes as $atribute)
                                    <option value="{{$atribute->id}}">{{$atribute->name}}</option>
                            @endforeach
                </select>
                @error("attrName")
                    <span class="text-danger">{{$message}}</span>
                        @enderror
            </div>
        </div>
{{-- #######################################################################################3 --}}


        {{-- {{ dd($attr_name)}} --}}
        <div class="col-md-12">
                <label> <h5>Atribute valu</h5></label>

            <div class="form-group">

                    <select style="margin-top: 5px"   name="artval" id="cars">
                            {{-- <option>select Atribute value</option> --}}
                            @foreach($artval as $attr_val)
                                <option value="{{$attr_val->id}}">{{$attr_val->name}}</option>
                                @endforeach
                    </select>

{{-- {{ dd($artval) }} --}}
                @error("attr_value")
                    <span class="text-danger">{{$message}}</span>
                        @enderror
            </div>
         </div>



{{-- #################################################################################### --}}





</div>
