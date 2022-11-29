<?php

namespace App\Http\Controllers\Adms;

use App\Http\Controllers\Controller;
use App\Http\Requests\Certificate\StoreRequest;
use App\Http\Requests\Certificate\UpdateRequest;
use App\Models\Certificate;
use App\Services\CertificateAdmService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CertificateController extends Controller
{
    private $service;

    public function __construct(CertificateAdmService $service)
    {
        $this->service = $service;

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $certificates = Certificate::orderBy('id', 'desc')->paginate(5);
        // dd($loads);
        return view('adms.certificate.index', compact('certificates'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('adms.certificate.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequest $request)
    {
        $data = $request->validated();

        $data = $this->service->store($data);

        $about = Certificate::create($data);

        return redirect()->route('certificate.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Certificate $certificate)
    {
        return view('adms.certificate.edit', $certificate);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRequest $request, $id)
    {
        $data = $request->validated();

        $certificate = Certificate::findOrFail($id);

        $certificate = $this->service->update($data, $certificate);

        return redirect()->route('certificate.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Certificate $certificate)
    {

        Storage::delete($certificate->image);

        $certificate->delete();

        return redirect()->route('certificate.index');
    }

}
