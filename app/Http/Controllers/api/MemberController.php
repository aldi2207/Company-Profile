<?php

namespace App\Http\Controllers\api;

use App\Models\Member;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\MemberResource;
use Illuminate\Support\Facades\Validator;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Member::all();
        return new MemberResource(true, 'data muncul', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama' => 'required',
            'email' => 'required|unique:members,email',
            'nomor' => 'required',
            'umur' => 'required',
            'gender' => 'required',
            'nik' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        };
        $memberInsert = member::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'nomor' => $request->nomor,
            'umur' => $request->umur,
            'gender' => $request->gender,
            'nik' => $request->nik,
        ]);
        return new MemberResource('true', 'Data berhasil ditambahkan', $memberInsert);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $dataId = Member::findOrFail($id);
        return new MemberResource('true', 'Data ditemukan', $dataId);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'nama' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        };
        $dataId = Member::findOrFail($id);
        $memberUpdate = member::update([
            'nama' => $request->nama,
            'email' => $request->email,
            'nomor' => $request->nomor,
            'umur' => $request->umur,
            'gender' => $request->gender,
            'nik' => $request->nik,
        ]);
        return new MemberResource(true, 'Data berhasil diupdate', $memberUpdate);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
