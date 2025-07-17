<?php

namespace App\Services;

use App\Models\Setting;
use Illuminate\Support\Facades\DB;

class SettingAppService
{
    /**
     * Store app settings in the database
     * Each field becomes a record with key_setting and value_setting
     */
    public function storeAppSettings(array $data): array
    {
        try {
            DB::beginTransaction();

            $settings = [];
            
            foreach ($data as $key => $value) {
                // Skip null values
                if ($value === null) {
                    continue;
                }

                // Convert boolean values to string for storage
                $valueToStore = is_bool($value) ? ($value ? 'true' : 'false') : (string) $value;

                // Check if setting already exists
                $existingSetting = Setting::where('key_setting', $key)->first();
                
                if ($existingSetting) {
                    // Update existing setting
                    $existingSetting->update(['value_setting' => $valueToStore]);
                    $settings[] = $existingSetting;
                } else {
                    // Create new setting
                    $setting = Setting::create([
                        'key_setting' => $key,
                        'value_setting' => $valueToStore
                    ]);
                    $settings[] = $setting;
                }
            }

            DB::commit();

            return $settings;

        } catch (\Exception $e) {
            DB::rollBack();
            throw $e;
        }
    }

    /**
     * Get all settings as key-value pairs
     */
    public function getAllSettings(): array
    {
        $settings = Setting::all();
        
        $result = [];
        foreach ($settings as $setting) {
            $value = $setting->value_setting;
            
            // Convert string boolean values back to boolean
            if ($value === 'true') {
                $value = true;
            } elseif ($value === 'false') {
                $value = false;
            }
            
            // Convert numeric strings back to numbers
            if (is_numeric($value)) {
                $value = (float) $value;
                if (is_int($value)) {
                    $value = (int) $value;
                }
            }
            
            $result[$setting->key_setting] = $value;
        }
        
        return $result;
    }

    /**
     * Get a specific setting by key
     */
    public function getSettingByKey(string $key)
    {
        $setting = Setting::where('key_setting', $key)->first();
        
        if (!$setting) {
            return null;
        }
        
        $value = $setting->value_setting;
        
        // Convert string boolean values back to boolean
        if ($value === 'true') {
            return true;
        } elseif ($value === 'false') {
            return false;
        }
        
        // Convert numeric strings back to numbers
        if (is_numeric($value)) {
            $value = (float) $value;
            if (is_int($value)) {
                return (int) $value;
            }
            return $value;
        }
        
        return $value;
    }

    /**
     * Update a specific setting
     */
    public function updateSetting(string $key, $value): Setting
    {
        $valueToStore = is_bool($value) ? ($value ? 'true' : 'false') : (string) $value;
        
        return Setting::updateOrCreate(
            ['key_setting' => $key],
            ['value_setting' => $valueToStore]
        );
    }

    /**
     * Delete a setting
     */
    public function deleteSetting(string $key): bool
    {
        return Setting::where('key_setting', $key)->delete();
    }
} 