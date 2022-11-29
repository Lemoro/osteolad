<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAppointmentRequest;
use App\Models\Appointment;

class AppointmentController extends Controller
{
    public function store(StoreAppointmentRequest $request)
    {

        $data = $request->validated();

        $appointment = Appointment::create($data);

        return response()->json([
            'message' => __('main.appointment create'),
        ], 200);

    }
}
