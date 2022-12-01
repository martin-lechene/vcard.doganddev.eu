<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
//use App\Http\Controllers\VCardController;
//use JeroenDesloovere\VCard\VCard;+


class VCard extends Model
{
    use HasFactory;

//    public function __construct()
//    {
////        $this->name = 'Martin Lechene';
////        $this->title = 'Web Developer';
////        $this->email = 'martin@lechene.be';
////        $this->phone = '+32 495 77 77 77';
////        $this->address = 'Rue de la Paix 1, 1000 Bruxelles';
////        $this->website = 'https://martin.lechene.be';
//    }
//
//    public function addName($name)
//    {
//        $this->name = $name;
//    }
//
//    // addCompany()
//    public function addCompany($company)
//    {
//        $this->company = $company;
//    }
//
//    // addJobtitle()
//    public function addJobtitle($title)
//    {
//        $this->title = $title;
//    }
//
//    // addRole()
//    public function addRole($role)
//    {
//        $this->role = $role;
//    }
//
//    // addEmail()
//    public function addEmail($email)
//    {
//        $this->email = $email;
//    }
//
//    // addPhoneNumber()
//    public function addPhoneNumber($phone)
//    {
//        $this->phone = $phone;
//    }
//
//    // addAddress()
//    public function addAddress($address)
//    {
//        $this->address = $address;
//    }
//
//    // addLabel()
//    public function addLabel($label)
//    {
//        $this->label = $label;
//    }
//
//    // addURL()
//    public function addURL($website)
//    {
//        $this->website = $website;
//    }
//
//    // addPhoto()
//    public function addPhoto($photo)
//    {
//        $this->photo = $photo;
//    }
//
//    // download()
//    public function download()
//    {
//        $vcard = "
//            BEGIN:VCARD
//            VERSION:3.0
//            N:{$this->name}
//            FN:{$this->name}
//            TITLE:{$this->title}
//            EMAIL:{$this->email}
//            TEL:{$this->phone}
//            ADR:{$this->address}
//            URL:{$this->website}
//            END:VCARD
//        ";
//
//        return response($vcard, 200)
//            ->header('Content-Type', 'text/x-vcard')
//            ->header('Content-Disposition', 'attachment; filename="martin.lechene.vcf"');
//    }
//
//    // getOutput()
//    public function getOutput()
//    {
//        $vcard = "
//            BEGIN:VCARD
//            VERSION:3.0
//            N:{$this->name}
//            FN:{$this->name}
//            TITLE:{$this->title}
//            EMAIL:{$this->email}
//            TEL:{$this->phone}
//            ADR:{$this->address}
//            URL:{$this->website}
//            END:VCARD
//        ";
//
//        return $vcard;
//    }
}
