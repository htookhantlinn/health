@extends('admin-layouts.master')

@section('content')
<div class="content-wrapper ">
    <div class="container  ">
        <div class="row ">
            <div class="col-md-3"></div>
            <div class="col-md-6 p-5 mt-5 shadow">
                <form method="POST" action="{{route('doctors.store')}}" enctype="multipart/form-data" autocomplete="off">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Name</label>
                        <input type="text" name="name" class="form-control" placeholder="Enter Name">
                        @error('name')
                        <span class=" text-danger"> {{$message}} </span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Field</label>

                        <select class="form-control" name="field" id="field">
                            @foreach ($fields as $field)
                            <option value="{{$field->id}}">{{$field->name}}</option>
                            @endforeach

                        </select>
                        @error('field')
                        <span class=" text-danger"> {{$message}} </span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Phone Number</label>
                        <input type="tel" name="phone" class="form-control" placeholder="123-45-678">
                        @error('phone')
                        <span class=" text-danger"> {{$message}} </span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Image</label>
                        <div class=" mb-3">
                            {{-- preview image  --}}
                            <div class="py-8">
                                <!-- If you wish to reference an existing file (i.e. from your database), pass the url into imageData() -->
                                <div x-data="imageData()" class="file-input flex items-center">
                                    <!-- Preview Image -->
                                    <div class="h-12 w-12 rounded-full overflow-hidden bg-gray-100">
                                        <!-- Placeholder image -->
                                        <div x-show="!previewPhoto">
                                            <svg class="h-full w-full text-gray-300" fill="currentColor" viewBox="0 0 24 24">
                                                <path d="M24 20.993V24H0v-2.996A14.977 14.977 0 0112.004 15c4.904 0 9.26 2.354 11.996 5.993zM16.002 8.999a4 4 0 11-8 0 4 4 0 018 0z" />
                                            </svg>
                                        </div>
                                        <!-- Show a preview of the photo -->
                                        <div x-show="previewPhoto" class="h-12 w-12 rounded-full overflow-hidden">
                                            <img :src="previewPhoto" alt="" class="h-12 w-12 object-cover">
                                        </div>
                                    </div>
                                    <div class="flex items-center">
                                        <!-- File Input -->
                                        <div class="ml-5 rounded-md shadow-sm">
                                            <!-- Replace the file input styles with our own via the label -->
                                            <input @change="updatePreview($refs)" x-ref="input" type="file" accept="image/*,capture=camera" name="image" id="photo" class="custom">
                                            <label for="photo" class="py-2 px-3  rounded-md text-sm leading-4 font-medium text-gray-700 hover:text-indigo-500 hover:border-black-300 focus:outline-none focus:border-indigo-300 focus:shadow-outline-indigo active:bg-gray-50 active:text-indigo-800 transition duration-150 ease-in-out">
                                                Upload Photo
                                            </label>
                                        </div>
                                        <div class="flex items-center text-sm text-gray-500 mx-2">
                                            <!-- Display the file name when available -->
                                            <span x-text="fileName || emptyText"></span>
                                            <!-- Removes the selected file -->
                                            <button x-show="fileName" @click="clearPreview($refs)" type="button" aria-label="Remove image" class="mx-1 mt-1">
                                                <svg viewBox="0 0 20 20" fill="currentColor" class="x-circle w-4 h-4" aria-hidden="true" focusable="false">
                                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd"></path>
                                                </svg>
                                            </button>
                                        </div>

                                    </div>

                                </div>
                                @error('image')
                                <span class="text-danger"> {{$message}} </span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
</div>
@endsection
