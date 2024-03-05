<?php

namespace App\Controllers;

class Page extends BaseController
{
    public function about()
    {
        echo "about page";
    }
    public function contact()
    {
        echo "contact page";
    }
    public function faqs()
    {
        echo "faqs page";
    }
    public function tos()
    {
        echo "terms of service";
    }
    public function biodata()
    {
        echo "Nama: Putri Friska Azzahra <br/>";
        echo "Nim: 4122038 <br/>";
        echo "Prodi: Sistem Informasi <br/>";
    }
}
