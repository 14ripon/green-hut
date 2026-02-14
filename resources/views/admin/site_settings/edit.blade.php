@extends('admin.layouts.app')

@section('title', 'Home - Admin')

@section('content')


    <div class="content-wrapper px-4">
        <!-- Main content -->
        <div class="content">
            <div class="content-header">
                <div class="header-icon">
                    <i class="pe-7s-note2"></i>
                </div>
                <div class="header-title">
                    <h1>Site Settings</h1>
                    <small class="">A simple and user-friendly Basic form</small>
                    <ul class="breadcrumb">
                        <li><a class="pr-2" href="{{ route('explore-sliders.index') }}"><i class="pe-7s-home"></i> Home</a>/</li>
                        <li><a class="px-2" href="#">Forms</a>/</li>
                        <li class="active px-2">Basic Form</li>
                    </ul>
                </div>
            </div>

            <div class="clearfix"></div>

            <!-- this page conntent-->
            <div class="card lobicard lobicard-sortable" data-sortable="true" data-inner-id="x5dGz22KYW" data-index="4" style="display: block;">
                <div class="card-header ui-sortable-handle">
                    <div class="card-title" style="max-width: calc(100% - 210px);">
                        Testimonial data
                    </div>
                    <div class="dropdown"></div>
                </div>
                <div class="card-block p-3 basic-forms">

                @if($setting)
                    <form method="POST"
                          action="{{ route('site.settings.update') }}"
                          enctype="multipart/form-data">

                        @csrf

                        {{-- ================= GENERAL INFO ================= --}}
                        <h4 class="mt-4">General Information</h4>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label>Site Name</label>
                                <input type="text" name="site_name" class="form-control"
                                       value="{{ old('site_name', $setting->site_name) }}">
                            </div>

                            <div class="col-md-6 mb-3">
                                <label>Site Tagline</label>
                                <input type="text" name="site_tagline" class="form-control"
                                       value="{{ old('site_tagline', $setting->site_tagline) }}">
                            </div>
                        </div>

                        {{-- ================= LOGOS ================= --}}
                        <h4 class="mt-4">Logos & Branding</h4>

                        <div class="row">
                            <div class="col-md-3 mb-3">
                                <label>Main Logo</label>
                                <input type="file" name="logo" class="form-control">
                                @if($setting->logo)
                                    <img src="{{ asset('storage/'.$setting->logo) }}" class="img-fluid mt-2" style="max-height:80px;">
                                @endif
                            </div>

                            <div class="col-md-3 mb-3">
                                <label>Sticky Logo</label>
                                <input type="file" name="logo_sticky" class="form-control">
                                @if($setting->logo_sticky)
                                    <img src="{{ asset('storage/'.$setting->logo_sticky) }}" class="img-fluid mt-2" style="max-height:80px;">
                                @endif
                            </div>

                            <div class="col-md-3 mb-3">
                                <label>Footer Logo</label>
                                <input type="file" name="footer_logo" class="form-control">
                                @if($setting->footer_logo)
                                    <img src="{{ asset('storage/'.$setting->footer_logo) }}" class="img-fluid mt-2" style="max-height:80px;">
                                @endif
                            </div>

                            <div class="col-md-3 mb-3">
                                <label>Favicon</label>
                                <input type="file" name="favicon" class="form-control">
                                @if($setting->favicon)
                                    <img src="{{ asset('storage/'.$setting->favicon) }}" class="img-fluid mt-2" style="max-height:40px;">
                                @endif
                            </div>
                        </div>

                        {{-- ================= CONTACT INFO ================= --}}
                        <h4 class="mt-4">Contact Information</h4>

                        <div class="row">
                            <div class="col-md-4 mb-3">
                                <label>Phone</label>
                                <input type="text" name="phone" class="form-control"
                                       value="{{ old('phone', $setting->phone) }}">
                            </div>

                            <div class="col-md-4 mb-3">
                                <label>Email</label>
                                <input type="email" name="email" class="form-control"
                                       value="{{ old('email', $setting->email) }}">
                            </div>

                            <div class="col-md-4 mb-3">
                                <label>WhatsApp</label>
                                <input type="text" name="whatsapp" class="form-control"
                                       value="{{ old('whatsapp', $setting->whatsapp) }}">
                            </div>
                        </div>

                        {{-- ================= MAP ================= --}}
                        <div class="mb-3">
                            <label>Google Map Embed Code</label>
                            <textarea name="map_embed" rows="3" class="form-control">{{ old('map_embed', $setting->map_embed) }}</textarea>
                        </div>

                        {{-- ================= SOCIAL LINKS ================= --}}
                        <h4 class="mt-4">Social Links</h4>

                        <div class="row">
                            <div class="col-md-4 mb-3">
                                <label>Facebook</label>
                                <input type="text" name="facebook" class="form-control"
                                       value="{{ old('facebook', $setting->facebook) }}">
                            </div>

                            <div class="col-md-4 mb-3">
                                <label>Instagram</label>
                                <input type="text" name="instagram" class="form-control"
                                       value="{{ old('instagram', $setting->instagram) }}">
                            </div>

                            <div class="col-md-4 mb-3">
                                <label>LinkedIn</label>
                                <input type="text" name="linkedin" class="form-control"
                                       value="{{ old('linkedin', $setting->linkedin) }}">
                            </div>

                            <div class="col-md-4 mb-3">
                                <label>YouTube</label>
                                <input type="text" name="youtube" class="form-control"
                                       value="{{ old('youtube', $setting->youtube) }}">
                            </div>
                        </div>

                        {{-- ================= FOOTER ================= --}}
                        <h4 class="mt-4">Footer</h4>

                        <div class="mb-3">
                            <label>Footer Text</label>
                            <textarea name="address" rows="3" class="form-control">{{ old('address', $setting->address) }}</textarea>
                        </div>

                        <div class="mb-3">
                            <label>Copyright Text</label>
                            <textarea name="copyright_text" rows="2" class="form-control">{{ old('copyright_text', $setting->copyright_text) }}</textarea>
                        </div>

                        {{-- ================= SEO ================= --}}
                        <h4 class="mt-4">SEO Settings</h4>

                        <div class="mb-3">
                            <label>Meta Title</label>
                            <input type="text" name="meta_title" class="form-control"
                                   value="{{ old('meta_title', $setting->meta_title) }}">
                        </div>

                        <div class="mb-3">
                            <label>Meta Description</label>
                            <textarea name="meta_description" rows="3" class="form-control">{{ old('meta_description', $setting->meta_description) }}</textarea>
                        </div>

                        <div class="mb-4">
                            <label>Meta Keywords</label>
                            <textarea name="meta_keyword" rows="2" class="form-control">{{ old('meta_keyword', $setting->meta_keyword) }}</textarea>
                        </div>

                        {{-- ================= SUBMIT ================= --}}
                        <div class="text-end">
                            <button type="submit" class="btn btn-base px-4">
                                Update Settings
                            </button>
                        </div>

                    </form>
                    @endif



                </div>
            </div>


        </div><!-- /content -->
    </div><!-- /content-wrapper -->

@endsection
