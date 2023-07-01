@extends('dashboard.app')

@section("title") Edit Software @endsection

@section('content')

    @component("component.breadcrumb",["data"=>[
        "Software" => route("software.index"),
    ]])
        @slot("last") Edit Software @endslot
    @endcomponent

    <div class="row">
        <div class="col-12 col-xl-10">
            @component("component.card")
                @slot('icon') <i class="feather-file text-primary"></i> @endslot
                @slot('title') Edit Software @endslot
                @slot('button')
                    <a href="{{ route('software.index') }}" class="btn btn-sm btn-outline-primary">
                        <i class="fas fa-list fa-fw"></i>
                    </a>
                @endslot
                @slot('body')
                    <div>
                        <form action="{{ route('software.update',$software->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-row">
                                <div class="col-md-6 form-group">
                                    <div class="form-group">
                                        <label for="name">Software Name</label>
                                        <input required type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name" value="{{ $software->name }}" placeholder="Software Name">
                                        @error('name')
                                        <small class="invalid-feedback font-weight-bold" role="alert">
                                            {{ $message }}
                                        </small>
                                        @enderror
                                    </div>
                                    {{-- <div class="form-group">
                                        <label for="name">Software Slug</label>
                                        <input required type="text" class="form-control @error('slug') is-invalid @enderror" name="slug" id="slug" value="{{ $software->slug }}" placeholder="Software Slug">
                                        @error('slug')
                                        <small class="invalid-feedback font-weight-bold" role="alert">
                                            {{ $message }}
                                        </small>
                                        @enderror
                                    </div> --}}
                                    
                                    <div class="form-group d-flex flex-wrap mb-0">
                                        <div class="form-group col-md-6 pl-lg-0 pl-md-0">
                                            <div class="form-group justify-content-center align-items-center">
                                                <label for="logo" class="">Software Logo</label>
                                                <input type="file" accept="image/png, .jpeg, .jpg, image/gif,image/webp" class="form-control d-none  p-1 @error('logo') is-invalid @enderror" name="logo" id="logo" value="{{old('logo')}}" placeholder="Ads Logo" onchange="readURL(this);">
                                                @error('logo')
                                                <small class="invalid-feedback font-weight-bold" role="alert">
                                                    {{ $message }}
                                                </small>
                                                @enderror
                                                <a onclick="$('#logo').trigger('click');" class="btn text-white btn-primary btn-sm" style="position:absolute; right: 22px; top: 42px">
                                                    <i class="fas fa-edit "></i>
                                                </a>
                                                <img id="blah" onclick="$('#logo').trigger('click');" class="w-100 rounded" src="{{ asset("/storage/logo/".$software->logo)}}" alt="your image" />
                                            </div>
                                        </div>
                                        <div class="col-md-6 pr-lg-0 pr-md-0 ">
                                            <div class="form-group">
                                                <label for="type">Software Type</label>
                                                <input required type="text" class="form-control @error('type') is-invalid @enderror" name="type" id="type" value="{{ $software->type }}" placeholder="Software Type">
                                                @error('type')
                                                <small class="invalid-feedback font-weight-bold" role="alert">
                                                    {{ $message }}
                                                </small>
                                                @enderror
                                            </div>
                                          
                                            <div class="form-group">
                                                <label for="updated">Updated</label>
                                                <input required type="text" class="form-control @error('updated') is-invalid @enderror" name="updated" id="updated" value="{{ $software->updated }}" placeholder="Updated">
                                                @error('updated')
                                                <small class="invalid-feedback font-weight-bold" role="alert">
                                                    {{ $message }}
                                                </small>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="size">Size</label>
                                            <input required type="text" class="form-control @error('size') is-invalid @enderror" name="size" id="size" value="{{ $software->size }}" placeholder="Size">
                                            @error('size')
                                            <small class="invalid-feedback font-weight-bold" role="alert">
                                                {{ $message }}
                                            </small>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="requirement">Requirement</label>
                                            <input required type="text" class="form-control @error('requirement') is-invalid @enderror" name="requirement" id="requirement" value="{{ $software->requirement }}" placeholder="Requirement">
                                            @error('requirement')
                                            <small class="invalid-feedback font-weight-bold" role="alert">
                                                {{ $message }}
                                            </small>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="version">Version</label>
                                            <input required type="text" class="form-control @error('version') is-invalid @enderror" name="version" id="version" value="{{ $software->version }}" placeholder="Version">
                                            @error('version')
                                            <small class="invalid-feedback font-weight-bold" role="alert">
                                                {{ $message }}
                                            </small>
                                            @enderror
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label for="developer">Developer Company</label>
                                            <input required type="text" class="form-control @error('developer') is-invalid @enderror" name="developer" id="developer" value="{{ $software->developer }}" placeholder="Developer Company">
                                            @error('developer')
                                            <small class="invalid-feedback font-weight-bold" role="alert">
                                                {{ $message }}
                                            </small>
                                            @enderror
                                        </div>
                                    </div>                                 
                                    <div class="form-group">
                                        <!--<label for="link3">Download Apk</label>-->
                                         <input type="text" class="form-control @error('name_1') is-invalid @enderror" name="name_1" id="name_1" value="{{ $software->name_1 }}" placeholder="d">
                                        
                                        <input type="text" class="form-control mt-1 @error('link1') is-invalid @enderror" name="link1" id="link1" value="{{ $software->link1 }}" placeholder="မထည့်လည်းရပါတယ်">
                                        @error('link1')
                                        <small class="invalid-feedback font-weight-bold" role="alert">
                                            {{ $message }}
                                        </small>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <!--<label for="link2">Download Obb</label>-->
                                         <input type="text" class="form-control @error('name_2') is-invalid @enderror" name="name_2" id="name_2" value="{{ $software->name_2 }}" placeholder="d">
                                        
                                        <input type="text" class="form-control mt-1 @error('link2') is-invalid @enderror" name="link2" id="link2" value="{{ $software->link2 }}" placeholder="မရှိရင်ထည့်စရာမလိုပါ">
                                        @error('link2')
                                        <small class="invalid-feedback font-weight-bold" role="alert">
                                            {{ $message }}
                                        </small>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <!--<label for="link3">Download Apk</label>-->
                                         <input type="text" class="form-control @error('name_3') is-invalid @enderror" name="name_3" id="name_3" value="{{ $software->name_3 }}" placeholder="d">
                                        
                                        <input type="text" class="form-control mt-1 @error('link3') is-invalid @enderror" name="link3" id="link3" value="{{ $software->link3 }}" placeholder="မထည့်လည်းရပါတယ်">
                                        @error('link3')
                                        <small class="invalid-feedback font-weight-bold" role="alert">
                                            {{ $message }}
                                        </small>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6 form-group">
                                    <div class="form-group">
                                        <label for="features">Mod Features</label>
                                        <textarea rows="9" required class="form-control @error('features') is-invalid @enderror" name="features"  id="features">{!! $software->features !!}</textarea>
                                        @error('features')
                                        <small class="invalid-feedback font-weight-bold" role="alert">
                                            {{ $message }}
                                        </small>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="description">Description</label>
                                        <textarea rows="26" required class="form-control @error('description') is-invalid @enderror" name="description"  id="description">{!! $software->description !!}</textarea>
                                        @error('description')
                                        <small class="invalid-feedback font-weight-bold" role="alert">
                                            {{ $message }}
                                        </small>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary " ><i class="fas fa-plus-square mr-1"></i> Update Software</button>
                        </form>
                    </div>
                @endslot
            @endcomponent
        </div>
        <div class="col-12 col-md-6">
            @component("component.card")
                @slot('icon') <i class="feather-file text-primary"></i> @endslot
                @slot('title') Software Photo @endslot
                @slot('button')

                @endslot
                @slot('body')
                    <form action="{{ route('photo.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" value="{{ $software->id }}" name="software_id">
                        <div class="form-group input-field">
{{--                            <label class="active" for="images">Software Photos</label>--}}
                            <div class="input-images-1" style="padding-top: .5rem;"></div>
                            {{--                                        <input required type="file" accept="image/png, .jpeg, .jpg, image/gif" multiple class="input-images-1 p-1 form-control @error('images') is-invalid @enderror" name="images[]" id="images" value="{{old('images')}}" style="padding-top: .5rem;">--}}
                            @error('images')
                            <small class="invalid-feedback font-weight-bold" role="alert">
                                {{ $message }}
                            </small>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary " ><i class="fas fa-plus-square mr-1"></i> Upload Photos</button>

                    </form>
                    <div class="d-flex mt-3" style="overflow-x: scroll;" >
                        @foreach($software->getPhoto as $photo)
                            <div class="mr-2" >
                                <img src="{{ asset("/storage/software/".$photo->name) }}" alt="" >
                                <form action="{{ route('photo.destroy',$photo->id) }}"  method="post">
                                    @csrf
                                    @method("DELETE")
                                    <button onClick="return confirm('Are you sure you want to delete?')" class="btn  btn-sm btn-danger text-left" style="margin-top: -330px; margin-left: 8px">
                                        <i class="feather-trash-2"></i>
                                    </button>
                                </form>
                            </div>

                        @endforeach
                    </div>
                @endslot
            @endcomponent
        </div>
    </div>
@endsection
@section('foot')
    <script>
        $('.input-images-1').imageUploader();
        $('#description').summernote({
            height: 200,                 // set editor height
            minHeight: null,             // set minimum height of editor
            maxHeight: null,             // set maximum height of editor
            focus: true
        });
    </script>
@endsection
