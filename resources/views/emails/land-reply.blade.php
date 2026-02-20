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
                <p>Dear <strong>{{ $land->owner_name ?? 'Mr. Rahman' }}</strong>, </p>
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
                <p>{!! nl2br(e($messageText)) !!}</p>
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