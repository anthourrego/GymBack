<?php

namespace App\Services;
use App\Models\Membership;

class MembershipService
{
    public function create(array $data): Membership
    {
        // Inicializar todos los campos guest_* y restrictionday_* en false
        $days = ['monday', 'tuesday', 'wednesday', 'thursday', 'friday', 'saturday', 'sunday', 'holiday'];
        foreach ($days as $day) {
            $data['guest_' . $day] = false;
            $data['restrictionday_' . $day] = false;
        }

        // Marcar como true según los arrays recibidos
        if (isset($data['guest_days']) && is_array($data['guest_days'])) {
            foreach ($data['guest_days'] as $day) {
                $key = 'guest_' . strtolower($day);
                if (array_key_exists($key, $data)) {
                    $data[$key] = true;
                }
            }
            unset($data['guest_days']);
        }

        if (isset($data['restriction_days']) && is_array($data['restriction_days'])) {
            foreach ($data['restriction_days'] as $day) {
                $key = 'restrictionday_' . strtolower($day);
                if (array_key_exists($key, $data)) {
                    $data[$key] = true;
                }
            }
            unset($data['restriction_days']);
        }

        return Membership::create($data);
    }

    public function get()
    {
        $memberships = Membership::get();
        return $memberships;
    }
}
