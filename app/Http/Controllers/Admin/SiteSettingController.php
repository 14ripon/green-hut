<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SiteSetting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SiteSettingController extends Controller
{
    public function edit()
    {
        $setting = SiteSetting::first();
        return view('admin.site_settings.edit', compact('setting'));
    }

    public function update(Request $request)
    {
        $setting = SiteSetting::first();

        // ================= VALIDATION =================
        $data = $request->validate([
            'site_name'        => 'nullable|string|max:255',
            'site_tagline'     => 'nullable|string|max:255',

            'phone'            => 'nullable|string|max:50',
            'email'            => 'nullable|email',

            'whatsapp'         => 'nullable|string',
            'facebook'         => 'nullable|string',
            'instagram'        => 'nullable|string',
            'linkedin'         => 'nullable|string',
            'youtube'          => 'nullable|string',

            'map_embed'        => 'nullable|string',

            'address'      => 'nullable|string',
            'copyright_text'   => 'nullable|string',

            'meta_title'       => 'nullable|string|max:255',
            'meta_description' => 'nullable|string',
            'meta_keyword'     => 'nullable|string',

            'logo'         => 'nullable|image|mimes:png,jpg,jpeg,svg,webp|max:2048',
            'logo_sticky'  => 'nullable|image|mimes:png,jpg,jpeg,svg,webp|max:2048',
            'footer_logo'  => 'nullable|image|mimes:png,jpg,jpeg,svg,webp|max:2048',
            'favicon'      => 'nullable|image|mimes:png,ico,svg|max:1024',
        ]);

        // ================= IMAGE UPLOAD HANDLER =================
        $imageFields = ['logo', 'logo_sticky', 'footer_logo', 'favicon'];

        foreach ($imageFields as $field) {
            if ($request->hasFile($field)) {

                // delete old image
                if ($setting->$field && Storage::disk('public')->exists($setting->$field)) {
                    Storage::disk('public')->delete($setting->$field);
                }

                // store new image
                $data[$field] = $request->file($field)
                    ->store('site-settings', 'public');
            }
        }

        // ================= UPDATE =================
        $setting->update($data);

        return redirect()
            ->back()
            ->with('success', 'Site settings updated successfully');
    }
}
