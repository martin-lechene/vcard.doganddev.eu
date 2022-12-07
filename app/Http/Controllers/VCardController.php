<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Support\Responsable;
use Illuminate\Http\Request;
use JeroenDesloovere\VCard\VCard;
use App\Models\VCard as VCardModel;
use App\models\Download;
// laravel use for find deleteOrFail() and more functions for change data in database
use Illuminate\Support\Facades\DB;

class VCardController extends Controller
{

    // CRUD methods for controllers laravel 9
    public function allVcards()
    {
        $vcards = \App\Models\VCard::all();
        return $vcards;
    }


    public function downloadVcard(Request $request)
    {

        $vcard = new VCard();
        $download = Download::all()->find($request->query->get('id'));

//        $download->count();
//        $download->save(); // Save in database

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

        // request {id} in current URLs
        // current URL
        $url = $request->url();
        // Found vcard/downloadVCard/{id}
        $id = $request->route()->parameter('id');

        // if vcard_id exist in database in downloads table update count +1 else create new row in downloads table
        if (Download::where('vcard_id', $id)->exists()) {
            $download = Download::all()->find($id);
            $download->count = $download->count + 1;
            $download->save();
        } else {
            $download = new Download();
            $download->vcard_id = $id;
            $download->count = 1;
            $download->save();
        }


//        $download = Download::all()->find($id);
//        $download->count = $download->count + 1;
//        $download->save();

//        $vcard->addPhoto(__DIR__ . '/'.$id.'.jpeg');

        // return vcard as a string
//        return $vcard->getOutput();

        // return vcard as a download
        return $vcard->download();

        // save vcard on disk
//        $vcard->setSavePath('/download/vcard/');
//        $vcard->save();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vcards = VCardModel::all();

        return view('vcard.index', compact('vcards'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('vcard.create', compact('request'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
//            'frist_name'          =>  'required',
//            'email'         =>  'required|email|unique:vcards',
//            'url'         =>  'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048|dimensions:min_width=100,min_height=100,max_width=1000,max_height=1000'
        ]);

//        $file_name = time() . '.' . request()->vcard_image->getClientOriginalExtension();
//        request()->vcard_image->move(public_path('images'), $file_name);

        $vcard = new VCard;
        $vcard->first_name = $request->first_name;
        $vcard->email = $request->email;
        // save in DB no function  save() !!!
        $vcard->save();
//        $vcard->save();
        return $this->downloadVcard($request);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\VCard  $vcard
     * @return \Illuminate\Http\Response
     */
    public function show(VCard $vcard)
    {
        return view('show', compact('vcard'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\VCard  $vcard
     * @return \Illuminate\Http\Response
     */
    public function edit(VCard $vcard)
    {
        return view('edit', compact('vcard'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\VCard  $vcard
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, VCard $vcard)
    {
        $request->validate([
            'vcard_name'      =>  'required',
            'vcard_email'     =>  'required|email',
            'vcard_image'     =>  'image|mimes:jpg,png,jpeg,gif,svg|max:2048|dimensions:min_width=100,min_height=100,max_width=1000,max_height=1000'
        ]);

        $vcard_image = $request->hidden_vcard_image;

        if($request->vcard_image != '')
        {
            $vcard_image = time() . '.' . request()->vcard_image->getClientOriginalExtension();

            request()->vcard_image->move(public_path('images'), $vcard_image);
        }

        $vcard = VCard::find($request->hidden_id);

        $vcard->vcard_name = $request->vcard_name;

        $vcard->vcard_email = $request->vcard_email;

        $vcard->vcard_gender = $request->vcard_gender;

        $vcard->vcard_image = $vcard_image;

        $vcard->save();

        return redirect()->route('vcards.index')->with('success', 'VCard Data has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\VCard  $vcard
     * @return \Illuminate\Http\Response
     */
    public function destroy(VCard $vcard)
    {
        $vcard->delete();

        return redirect()->route('vcards.index')->with('success', 'VCard Data deleted successfully');
    }


}
