<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function home()
    {
        return view('templates.home');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function solutions()
    {
        return view('templates.solution.index');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function business()
    {
        return view('templates.solution.business');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function web()
    {
        return view('templates.solution.web');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function digital()
    {
        return view('templates.solution.digital');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function webmobile()
    {
        return view('templates.campaign.webmobile');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function webapp()
    {
        return view('templates.campaign.webapp');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function aboutWhy()
    {
        return view('templates.about.why');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function aboutOur()
    {
        return view('templates.about.our');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function about()
    {
        return view('templates.about.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function contact()
    {
        $titles = ["Mr", "Mrs", "Miss"];
        $enquiries = ["Business Quote", "Customer Support", "Partnership", "Careers", "General Enquiry"];
        return view('templates.contact', compact('titles', 'enquiries'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function contactus()
    {
        $budgets = ["$1000 - $1499 (Save 30% - up to $450", "$1500 - $3999 (Save 30% - up to $1200", "$4000 - $10000 (Save Save 30% - up to $3000", "No Budget Yet"];
        return view('templates.campaign.contactus', compact('budgets'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function process()
    {
        return view('templates.others.process');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function privacy()
    {
        return view('templates.others.privacy');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function cookie()
    {
        return view('templates.others.cookie');
    }
}
