@extends('admin.mails.mails-layout')

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
                        <form action="{{ route('messages.sendReply', $message->id) }}" method="POST">
                            @csrf
                            <input type="hidden" name="subject" value="Your Meeting is Confirmed 🎉">
                        <table width="100%" cellpadding="0" cellspacing="0" style="background-color:#f4f6f8; padding:20px 0;">
                            <tr>
                                <td align="center" class="py-3">
                                    
                                    <!-- Main Container -->
                                    <table width="600" cellpadding="0" cellspacing="0" style="background:#ffffff; border-radius:8px; overflow:hidden;">

                                        <!-- Header -->
                                        <tr>
                                            <td style="background:#2e7d32; padding:25px; text-align:center;">
                                                <h1 style="color:#ffffff; margin:0; font-size:24px;">
                                                    Green Hut Real Estate
                                                </h1>
                                            </td>
                                        </tr>

                                        <!-- Body -->
                                        <tr>
                                            <td style="padding:30px; color:#333333; font-size:15px; line-height:1.6;">
                                                
                                                <p style="margin-top:0;">
                                                    Dear <strong>{{ $message->full_name }}</strong>,
                                                </p>

                                                <p>
                                                    We are pleased to inform you that your meeting has been <strong style="color:#2e7d32;">successfully confirmed</strong>.
                                                </p>

                                                <!-- Details Box -->
                                                <table width="100%" cellpadding="10" cellspacing="0" style="background:#f9f9f9; border:1px solid #eeeeee; border-radius:6px; margin:20px 0;">
                                                    
                                                    <tr>
                                                        <td><strong>📅 Date & Time:</strong></td>
                                                        <td>
                                                            {{ \Carbon\Carbon::parse(json_decode($message)->preferred_time)->format('F d, Y \a\t h:i A') }}
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>Meeting Location / Platform:</strong></td>
                                                        <td>Green Hut Office / Online Meeting</td>
                                                    </tr>
                                                </table>
                                                <div class="form-group">
                                                    <textarea name="reply_message" placeholder="Our team looks forward to discussing your real estate requirements and providing the best possible solutions." class="form-control">Our team looks forward to discussing your real estate requirements and providing the best possible solutions.</textarea>
                                                </div>

                                                <p>If you need to reschedule, please contact us at least 24 hours in advance.</p>

                                                <p style="margin-bottom:0;">
                                                    Best Regards,<br>
                                                    <strong>Green Hut Real Estate Team</strong>
                                                </p>
                                            </td>
                                        </tr>

                                        <!-- Footer -->
                                        <tr>
                                            <td style="background:#f1f1f1; padding:20px; text-align:center; font-size:13px; color:#666666;">
                                                <p style="margin:5px 0;">
                                                    📞 +8801754720343 | ✉ zhripon97@gmail.com
                                                </p>
                                                <p style="margin:5px 0;">
                                                    © {{ date('Y') }} Green Hut Real Estate. All Rights Reserved.
                                                </p>
                                            </td>
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





    