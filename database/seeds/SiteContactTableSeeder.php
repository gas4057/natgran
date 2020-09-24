<?php

use App\Models\SiteContactType;
use Illuminate\Database\Seeder;
use App\Models\SiteContact;

class SiteContactTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $type = SiteContactType::create([
            'name' => 'instagram'
        ]);
        SiteContact::create([
            'type_id' => $type->id,
            'contact' => 'greenstoneby'
        ]);
        $type = SiteContactType::create([
            'name' => 'phone'
        ]);
        SiteContact::create([
            'type_id' => $type->id,
            'contact' => '+375113985688'
        ]);
        SiteContact::create([
            'type_id' => $type->id,
            'contact' => '+375113985688'
        ]);
        SiteContact::create([
            'type_id' => $type->id,
            'contact' => '+375113985688'
        ]);
        SiteContact::create([
            'type_id' => $type->id,
            'contact' => '+375113985688'
        ]);

        $type = SiteContactType::create([
            'name' => 'email'
        ]);
        SiteContact::create([
            'type_id' => $type->id,
            'contact' => 'natgran@mail.ru'
        ]);
        $type = SiteContactType::create([
            'name' => 'skype'
        ]);
        SiteContact::create([
            'type_id' => $type->id,
            'contact' => 'greenstoneby'
        ]);
        $type = SiteContactType::create([
            'name' => 'address'
        ]);
        SiteContact::create([
            'type_id' => $type->id,
            'contact' => '220000, г. Минск ул. Уручская 23А'
        ]);

    }
}
