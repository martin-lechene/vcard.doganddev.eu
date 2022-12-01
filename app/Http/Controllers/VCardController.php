<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use JeroenDesloovere\VCard\VCard;

class VCardController extends Controller
{

    // CRUD methods for controllers laravel 9
    public function index()
    {
//        $vcards = new VCard();

        // Define a table with multiple peopel
        $vcards[1] = new VCard();
        $vcards[2] = new VCard();
        $vcards[3] = new VCard();

        // Define a table with multiple peopel
        $vcards[1]->id = 1;
        $vcards[1]->first_name = 'John';
        $vcards[1]->last_name = 'Doe';
        $vcards[1]->company = 'John Doe Inc.';
        $vcards[1]->job_title = 'CEO';
        $vcards[1]->email = ''.rand(1, 100).'@example.com';'';
        $vcards[1]->phone_pref_work_number = '123456789';
        $vcards[1]->phone_work_number = '123456789';
        $vcards[1]->address_name = 'John Doe';
        $vcards[1]->address_extended = 'John Doe Inc.';
        $vcards[1]->street = 'Street 1';
        $vcards[1]->city = 'City';
        $vcards[1]->region = 'Region';
        $vcards[1]->postal_code = '123456';
        $vcards[1]->country = 'Country';
        $vcards[1]->address_label = 'John Doe'.PHP_EOL.'John Doe Inc.'.PHP_EOL.'Street 1'.PHP_EOL.'City'.PHP_EOL.'Region'.PHP_EOL.'123456'.PHP_EOL.'Country';
        $vcards[1]->url = 'http://www.example.com';
        $vcards[1]->note = 'This is a note.';
        $vcards[1]->birthday = '1970-01-01';
        $vcards[1]->photo = 'http://www.example.com/photo.jpg';
        // $vcards[2]
        $vcards[2]->id = 2;
        $vcards[2]->first_name = 'Jane';
        $vcards[2]->last_name = 'Doe';
        $vcards[2]->company = 'Jane Doe Inc.';
        $vcards[2]->job_title = 'CEO';
        $vcards[2]->email = ''.rand(1, 100).'@example.com';'';
        $vcards[2]->phone_pref_work_number = '123456789';
        $vcards[2]->phone_work_number = '123456789';
        $vcards[2]->address_name = 'Jane Doe';
        $vcards[2]->address_extended = 'Jane Doe Inc.';
        $vcards[2]->street = 'Street 1';
        $vcards[2]->city = 'City';
        $vcards[2]->region = 'Region';
        $vcards[2]->postal_code = '123456';
        $vcards[2]->country = 'Country';
        $vcards[2]->address_label = 'Jane Doe'.PHP_EOL.'Jane Doe Inc.'.PHP_EOL.'Street 1'.PHP_EOL.'City'.PHP_EOL.'Region'.PHP_EOL.'123456'.PHP_EOL.'Country';
        $vcards[2]->url = 'http://www.example.com';
        $vcards[2]->note = 'This is a note.';
        $vcards[2]->birthday = '1970-01-01';
        $vcards[2]->photo = 'http://www.example.com/photo.jpg';
        // $vcards[3]
        $vcards[3]->id = 3;
        $vcards[3]->first_name = 'John';
        $vcards[3]->last_name = 'Doe';
        $vcards[3]->company = 'John Doe Inc.';
        $vcards[3]->job_title = 'CEO';
        $vcards[3]->email = ''.rand(1, 100).'@example.com';'';
        $vcards[3]->phone_pref_work_number = '123456789';
        $vcards[3]->phone_work_number = '123456789';
        $vcards[3]->address_name = 'John Doe';
        $vcards[3]->address_extended = 'John Doe Inc.';
        $vcards[3]->street = 'Street 1';
        $vcards[3]->city = 'City';
        $vcards[3]->region = 'Region';
        $vcards[3]->postal_code = '123456';
        $vcards[3]->country = 'Country';
        $vcards[3]->address_label = 'John Doe'.PHP_EOL.'John Doe Inc.'.PHP_EOL.'Street 1'.PHP_EOL.'City'.PHP_EOL.'Region'.PHP_EOL.'123456'.PHP_EOL.'Country';
        $vcards[3]->url = 'http://www.example.com';
        $vcards[3]->note = 'This is a note.';
        $vcards[3]->birthday = '1970-01-01';
        $vcards[3]->photo = 'http://www.example.com/photo.jpg';


        return view('vcard.index', compact('vcards'));
    }

    public function create()
    {
        return view('vcard.create');
    }

    public function store(Request $request)
    {
        $vcard = new VCard();

        // define variables
        $lastname = $request->query->get('lastname');
        $firstname = $request->query->get('firstname');
        $additional = $request->query->get('additional');
        $prefix = $request->query->get('prefix');
        $suffix = $request->query->get('suffix');
        $company = $request->query->get('company');
        $department = $request->query->get('department');
        $jobtitle = $request->query->get('jobtitle');
        $role = $request->query->get('role');
        $email = $request->query->get('email');
        $phone_pref_work = $request->query->get('phone_pref_work');
        $phone_work = $request->query->get('phone_work');
        $fax_work = $request->query->get('fax_work');
        $phone_home = $request->query->get('phone_home');
        $fax_home = $request->query->get('fax_home');
        $address_name = $request->query->get('address_name');
        $address_extended = $request->query->get('address_extended');
        $address_street = $request->query->get('address_street');
        $address_city = $request->query->get('address_city');
        $address_region = $request->query->get('address_region');
        $address_zip = $request->query->get('address_zip');
        $address_country = $request->query->get('address_country');
        $address_label = $request->query->get('adresss_label');
        $website = $request->query->get('website');

        // add personal data
        $vcard->addName($lastname, $firstname, $additional, $prefix, $suffix);
        // add work data
        $vcard->addCompany($company);
        $vcard->addJobtitle($jobtitle);
        $vcard->addRole($role);
        $vcard->addEmail($email);
        $vcard->addPhoneNumber($phone_pref_work, 'PREF;WORK');
        $vcard->addPhoneNumber($phone_work, 'WORK');
        $vcard->addAddress($address_name, $address_extended, $address_street, $address_city, $address_region, $address_zip, $address_country);
        $vcard->addLabel($address_label);
        $vcard->addURL($website);

        // return vcard as a string
//        return $vcard->getOutput();
        // return vcard as a download
//        return $vcard->download();
        // return vcard as a json
//        return $vcard->getJson();
        // return vcard as a array
//        return $vcard->getArray();
        // return vcard as a html
//        return $vcard->getHtml();
        // return vcard as a qr code
//        return $vcard->getQrCode();
        // return vcard as a qr code url
//        return $vcard->getQrCodeUrl();
        // return vcard as a qr code image
//        return $vcard->getQrCodeImage();

        return view('vcard.index');
    }

    public function show(VCard $vcard)
    {
        return view('vcard.show', compact('vcard'));
    }

    public function edit(VCard $vcard)
    {
        return view('vcard.edit', compact('vcard'));
    }

    public function update(Request $request, VCard $vcard)
    {
        $vcard->update($request->all());
        return redirect()->route('vcard.index');
    }

    public function destroy(VCard $vcard)
    {
        $vcard->delete();
        return redirect()->route('vcard.index');
    }



    public function downloadVcard(Request $request)
    {

        $vcard = new VCard();

        // define variables
        $lastname = $request->input('lastname');
        $firstname = $request->input('firstname');
        $additional = $request->input('additional');
        $prefix = $request->input('prefix');
        $suffix = $request->input('suffix');
        $company = $request->input('company');
        $jobtitle = $request->input('jobtitle');
        $role = $request->input('role');
        $email = $request->input('email');
        $phone_pref_work = $request->input('phone_pref_work');
        $phone_work = $request->input('phone_work');
        $address_name = $request->input('address_name');
        $address_extended = $request->input('address_extended');
        $address_street = $request->input('address_street');
        $address_city = $request->input('address_city');
        $address_region = $request->input('address_region');
        $address_zip = $request->input('address_zip');
        $address_country = $request->input('address_country');
        $address_label = $request->input('adresss_label');
        $website = $request->input('website');

        // add personal data
        $vcard->addName($lastname, $firstname, $additional, $prefix, $suffix);
        // add work data
        $vcard->addCompany($company);
        $vcard->addJobtitle($jobtitle);
        $vcard->addRole($role);
        $vcard->addEmail($email);
        $vcard->addPhoneNumber($phone_pref_work, 'PREF;WORK');
        $vcard->addPhoneNumber($phone_work, 'WORK');
        $vcard->addAddress($address_name, $address_extended, $address_street, $address_city, $address_region, $address_zip, $address_country);
        $vcard->addLabel($address_label);
        $vcard->addURL($website);

        //$vcard->addPhoto(__DIR__ . '/landscape.jpeg');

        // return vcard as a string
//        return $vcard->getOutput();

        // return vcard as a download
        return $vcard->download();

        // save vcard on disk
        //$vcard->setSavePath('/download/vcard/');
        //$vcard->save();
    }


}
