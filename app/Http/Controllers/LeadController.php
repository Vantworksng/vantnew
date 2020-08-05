<?php

namespace App\Http\Controllers;

use App\Lead;
use App\Camp;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;
use App\Mail\CampaignLeadMail;
class LeadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=request()->validate([
            "title" => "required",
            "first_name" => "required",
            "last_name" => "required",
            "email" => "required|email",
            "phone" => "nullable",
            "enquiry" => "required",
            "message" => "required"
        ]);

        $lead = new Lead;
        $lead->title = $request->title;
        $lead->first_name = $request->first_name;
        $lead->last_name = $request->last_name;
        $lead->email = $request->email;
        $lead->phone = $request->phone;
        $lead->enquiry = $request->enquiry;
        $lead->message = $request->message;
        // $lead->save();

        $mesage = json_encode([
            date('Y-m-d h:i:s'),
            "title" => $lead->title,
            "name" => $lead->first_name.' '.$lead->last_name,
            "email" => $lead->email,
            "phone" => $lead->phone,
            "enquiry" => $lead->enquiry,
            "message" => $lead->message,
        ]);

        try {
            $filePath = storage_path('logs/lead.log');
            if(!file_exists($filePath)){
                touch($filePath);
            }
            $content = file_get_contents($filePath);
            $content .= $mesage ."\n";
            file_put_contents($filePath, $content);
        } catch (\Throwable $th) {
            Log::info('could no log lead with details => '. $mesage);
        }

        mail::to('info@vantworks.ca')->send(new ContactFormMail($data));

        return redirect()->route('about_contact')->with('contact', 'true');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Lead  $lead
     * @return \Illuminate\Http\Response
     */
public function save(Request $request)
    {
        
        $camp_data=request()->validate([
            "name" => "required",
            "company" => "nullable",
            "email" => "required|email",
            "phone" => "nullable",
            "budget" => "required",
            "message" => "required"
        ]);

        $camp = new Camp;
        $camp->name = $request->name;
        $camp->company = $request->company;
        $camp->email = $request->email;
        $camp->phone = $request->phone;
        $camp->budget = $request->budget;
        $camp->message = $request->message;

        $mesage = json_encode([
            date('Y-m-d h:i:s'),
            "name" => $camp->name,
            "company" => $camp->company,
            "email" => $camp->email,
            "phone" => $camp->phone,
            "budget" => $camp->budget,
            "message" => $camp->message
        ]);

        try {
            $filePath = storage_path('logs/camp.log');
            if(!file_exists($filePath)){
                touch($filePath);
            }
            $content = file_get_contents($filePath);
            $content .= $mesage ."\n";
            file_put_contents($filePath, $content);
        } catch (\Throwable $th) {
            Log::info('could not log camp with details => '. $mesage);
        }

        mail::to('info@vantworks.ca')->send(new CampaignLeadMail($camp_data));

        return redirect()->route('campaign_contact')->with('contacted', 'true');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Lead  $lead
     * @return \Illuminate\Http\Response
     */

    public function show(Lead $lead)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Lead  $lead
     * @return \Illuminate\Http\Response
     */
    public function edit(Lead $lead)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Lead  $lead
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Lead $lead)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Lead  $lead
     * @return \Illuminate\Http\Response
     */
    public function destroy(Lead $lead)
    {
        //
    }
}

