@extends('admin.lands.lands-layout')

@section('title', 'Write Message')

        @section('mail-page-header')
        <div class="col-sm-8 float-right">
            <div class="inbox-toolbar btn-toolbar text-right">
                <!-- <div class="btn-group">
                    <a href="compose.html" class="btn btn-base"><span class="fa fa-pencil-square-o"></span></a>
                </div>
                <div class="btn-group mx-1">
                    <a href="" class="btn btn-default"><span class="fa fa-reply"></span></a>
                    <a href="" class="btn btn-default"><span class="fa fa-reply-all"></span></a>
                    <a href="" class="btn btn-default"><span class="fa fa-share"></span></a>
                </div> -->
                <div class="btn-group ml-1 d-none d-lg-block">
                    <!-- <label class="mb-0 py-2" for="select-all"><input class="btn btn-default" type="checkbox" id="select-all"> Select All</label> -->
                </div>
                <div class="btn-group ml-1">
                    <!-- <button type="button" class="text-center btn btn-danger"><span class="fa fa-exclamation"></span></button> -->
                    
                    <!-- <button type="button" class="btn btn-danger" data-toggle="tooltip" data-original-title="Delete"><span class="fa fa-trash"></span> Delete</button> -->
                </div>
            </div>
        </div>
        @endsection


        
        @section('mail-page-content')
        <div class="col-md-9 border border-right-0 border-top-0 border-bottom-0 pl-md-0">
            <div class="p-0 inbox-mail">
                <div class="mailbox-content">    
                    <div class="mailbox_inner p-3 my-2">
                        <form action="{{ route('lands.sendReply', $land->id) }}" method="POST">
                            @csrf
                            <input type="hidden" name="subject" value="Your Land Submission Has Been Received 📩" required>
                            <table width="100%" cellpadding="0" cellspacing="0" style="padding:20px 0;">
                                <tr>
                                    <td align="center">
                                    <table width="600" cellpadding="0" cellspacing="0" style="background:#f4f6f8; border-radius:8px; overflow:hidden;">
                                        <!-- Header -->
                                        <tr>
                                        <td style="background:#2e7d32; padding:25px; text-align:center;">
                                            <h2 style="color:#ffffff; margin:0;">Green Hut Real Estate</h2>
                                        </td>
                                        </tr>
                                        <!-- Body -->
                                        <tr>
                                        <td style="padding:30px; color:#333; font-size:15px; line-height:1.6;">
                                            <p>Dear <strong>{{ $land->owner_name }}</strong>, </p>
                                            <p> Thank you for submitting your land details to Green Hut Real Estate. Below is a summary of your property submission: </p>
                                            <!-- Property Summary Box -->
                                            <table width="100%" cellpadding="8" cellspacing="0" style="background:#f9f9f9; border:1px solid #e5e5e5; margin:20px 0;">
                                            <tr>
                                                <td>
                                                <strong>Property ID:</strong>
                                                </td>
                                                <td>#{{ $land->id }}</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                <strong>Location:</strong>
                                                </td>
                                                <td>{{ $land->locality }}</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                <strong>Address:</strong>
                                                </td>
                                                <td>{{ $land->address }}</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                <strong>Size:</strong>
                                                </td>
                                                <td>{{ $land->size_in_katha }} Katha</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                <strong>Category:</strong>
                                                </td>
                                                <td>{{ $land->category }}</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                <strong>Road Width:</strong>
                                                </td>
                                                <td>{{ $land->road_width }} Feet</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                <strong>Facing</strong>
                                                </td>
                                                <td>{{ $land->facing }}</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                <strong>Attractive Features</strong>
                                                </td>
                                                <td>{{ $land->attractive_features }}</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                <strong>Contact Number:</strong>
                                                </td>
                                                <td>{{ $land->contact_number }}</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                <strong>Email:</strong>
                                                </td>
                                                <td>{{ $land->email }}</td>
                                            </tr>
                                            </table>
                                            <p> 🔎 <strong>Status:</strong> Your property is currently under review by our valuation team. </p>
                                            <div class="form-group">
                                                <textarea name="message" placeholder="Our team will contact you within 24–48 hours to discuss potential listing opportunities and next steps." class="form-control">Our team will contact you within 24–48 hours to discuss potential listing opportunities and next steps.</textarea>
                                            </div>
                                            <p> If you have additional documents (land deed, mutation certificate, etc.), please reply to this email for faster processing. </p>
                                            <br>
                                            <p> Best Regards, <br>
                                            <strong>Green Hut Real Estate Team</strong>
                                            <br> 📞 {{ $siteSettings->phone ?? '01754720343' }} | ✉ {{ $siteSettings->email ?? 'zhripon97@gmail.com' }}
                                            </p>
                                        </td>
                                        </tr>
                                        <!-- Footer -->
                                        <tr>
                                        <td style="background:#f1f1f1; padding:15px; text-align:center; font-size:12px; color:#777;"> © {{ date('Y') }} Green Hut Real Estate. All rights reserved. </td>
                                        </tr>
                                    </table>
                                    </td>
                                </tr>
                            </table>

                        <div class="text-center my-3">
                            <button class="btn btn-base" type="submit">Send Email</button>
                        </div>
                        </form>
                            
                    </div>
                
                </div>
            </div>
        </div>

        
        @endsection


@push('js')

@endpush
