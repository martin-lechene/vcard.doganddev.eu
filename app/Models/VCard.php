<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\VCardController;
//use JeroenDesloovere\VCard\VCard;


class VCard extends Model
{
    use HasFactory;

    // filaable fields
    protected $fillable = [
        'lastname',
        'firstname',
        'additional',
        'prefix',
        'suffix',
        'company',
        'department',
        'jobtitle',
        'role',
        'email',
        'phone_pref_work',
        'phone_work',
        'fax_work',
        'phone_home',
        'fax_home',
        'address_name',
        'address_extended',
        'address_street',
        'address_city',
        'address_region',
        'address_zip',
        'address_country',
        'website',
        'birthday',
        'note',
        'photo'
    ];
    // auto generate line in database for table download
//    public function downloads()
//    {
//        return $this->hasMany(Download::class);
//    }

    // all vcards since mysql
    public function allVcards()
    {
        $vcards = VCard::all();
        return $vcards;
    }


    // delete vcard
    public function deleteVCard($id)
    {
        // Declaration of App\Models\VCard::delete($id) must be compatible with Illuminate\Database\Eloquent\Model::delete()

        $vcard = VCard::find($id);
        $vcard->delete();

        return true;
    }

    // create vcard
    public function createVcard()
    {
        $vcard = new VCard();
        $vcard->lastname = 'Doe';
        $vcard->firstname = 'John';
        $vcard->additional = 'van';
        $vcard->prefix = 'Mr.';
        $vcard->suffix = 'III';
        $vcard->company = 'Acme Inc.';
        $vcard->department = 'Sales';
        $vcard->jobtitle = 'Salesman';
        $vcard->role = 'Manager';
        $vcard->email = '';
    }

    public function latest($id)
    {
        $vcard = VCard::find($id);
        return $vcard;
    }

}
