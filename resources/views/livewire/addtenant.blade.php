<div>


    <form wire:submit.prevent="add">
        <div class="container">
        <div class="form-row">
            <div class="form-group">
                <label for="inputAddress">Name</label>
                <input type="text" name="name" value="" wire:model="name"class="form-control" placeholder="name">
                @error('name')
                <span style="color:red">{{$message}}</span>
                @enderror
              </div>
            <div class="form-group col-md-6">
                <label for="inputPassword4">password</label>
                <input type="password" value="" wire:model="password" name="password"class="form-control"  placeholder="">
                @error('password')
                <span style="color:red">{{$message}}</span>
                @enderror
            </div>
          <div class="form-group col-md-6">
            <label for="inputEmail4">Email</label>
            <input type="email" name="email" value="" wire:model="email"  class="form-control"  placeholder="Email">
            @error('email')
            <span style="color:red">{{$message}}</span>
            @enderror
        </div>

        </div>

        <div class="form-group">
          <label for="inputAddress2">Domain</label>
          <input type="text" name="domain" wire:model="domain"value="" class="form-control" placeholder="Domain name">
          @error('domain')
          <span style="color:red">{{$message}}</span>
          @enderror
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
        @include('front.alert.alert')
      </form>












    {{-- <form wire:submit.prevent="add">
    <div class="container">
        <div class="form-group-row">
            <div class="col">
                <input type="text" value="nnn" class="form-control" placeholder="name">
            </div>
            <div class="col">
                <input type="text" value="123"  class="form-control" placeholder="Phone">
            </div>
        </div>
        <div class="form-group-row">
                <div class="col">
                    <input type="text" value="ddd"  class="form-control" placeholder="domain">
                </div>
                <div class="col">
                    <input type="email"  value="mm@gmail" class="form-control" placeholder="email">
                </div>
        </div>
        <div class="form-group-row">
            <div class="col content-center">
                <input type="text"  value="123" class="form-control" placeholder="Password">
            </div>

        </div>
        <div class="form-group-row">
            <input type="submit">

        </div>
    </div>


    </form> --}}

</div>
