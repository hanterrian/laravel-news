<?php

use Illuminate\Database\Seeder;

class VoyagerSettingsSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            'credit' => 'Credit',
            'credit-kz' => 'Credit kz',
            'credit-rus' => 'Credit rus',
        ];

        foreach ($categories as $key => $label) {
            $setting = $this->findSetting($key . '.header_title');
            if (!$setting->exists) {
                $setting->fill([
                    'display_name' => 'Header title',
                    'value' => '',
                    'details' => '',
                    'type' => 'text',
                    'order' => 1,
                    'group' => $label,
                ])->save();
            }

            $setting = $this->findSetting($key . '.header_description');
            if (!$setting->exists) {
                $setting->fill([
                    'display_name' => 'Header description',
                    'value' => '',
                    'details' => '',
                    'type' => 'text_area',
                    'order' => 2,
                    'group' => $label,
                ])->save();
            }

            $setting = $this->findSetting($key . '.after_header');
            if (!$setting->exists) {
                $setting->fill([
                    'display_name' => 'After header',
                    'value' => '',
                    'details' => '',
                    'type' => 'text_area',
                    'order' => 3,
                    'group' => $label,
                ])->save();
            }

            $setting = $this->findSetting($key . '.left_text');
            if (!$setting->exists) {
                $setting->fill([
                    'display_name' => 'Left text',
                    'value' => '',
                    'details' => '',
                    'type' => 'rich_text_box',
                    'order' => 4,
                    'group' => $label,
                ])->save();
            }

            $setting = $this->findSetting($key . '.right_text');
            if (!$setting->exists) {
                $setting->fill([
                    'display_name' => 'Right text',
                    'value' => '',
                    'details' => '',
                    'type' => 'rich_text_box',
                    'order' => 5,
                    'group' => $label,
                ])->save();
            }

            $setting = $this->findSetting($key . '.footer_text');
            if (!$setting->exists) {
                $setting->fill([
                    'display_name' => 'Footer text',
                    'value' => '',
                    'details' => '',
                    'type' => 'rich_text_box',
                    'order' => 6,
                    'group' => $label,
                ])->save();
            }

            $setting = $this->findSetting($key . '.after_body');
            if (!$setting->exists) {
                $setting->fill([
                    'display_name' => 'After body',
                    'value' => '',
                    'details' => '',
                    'type' => 'text_area',
                    'order' => 7,
                    'group' => $label,
                ])->save();
            }
        }
    }

    /**
     * [setting description].
     *
     * @param [type] $key [description]
     *
     * @return [type] [description]
     */
    protected function findSetting($key)
    {
        return \TCG\Voyager\Models\Setting::firstOrNew(['key' => $key]);
    }
}
