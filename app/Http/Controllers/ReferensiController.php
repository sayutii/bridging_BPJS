<?php

namespace App\Http\Controllers;

use App\Services\Bpjs\ReferensiService;
use Bpjs\Bridging\Vclaim\BridgeVclaim;

class ReferensiController extends Controller
{
    protected $serviceBpjs;
    protected $bridging;
    
    public function __construct()
    {
        $this->serviceBpjs = new ReferensiService;        
        $this->bridging = new BridgeVclaim;
    }

    public function index()
    {
        return view('referensi.index');
    }

    public function getDiagnosa($diagnosa)
    {
        $diagnosa = $this->serviceBpjs->getDiagnosa($diagnosa);
        return $diagnosa;
    }

    public function getPoli($kode)
    {
        $poliklinik = $this->serviceBpjs->getPoli($kode);
        return $poliklinik;
    }

    public function getFaskes($kd_faskes, $jns_faskes)
    {
        $faskes = $this->serviceBpjs->getFaskes($kd_faskes, $jns_faskes);
        return $faskes;
    }

    public function getDokter($pelayanan, $tglPelayanan, $spesialis)
    {
        $dokter = $this->serviceBpjs->getDokter($pelayanan, $tglPelayanan, $spesialis);
        return $dokter;
    }

    public function propinsi()
    {
        $provinsi = $this->serviceBpjs->getPropinsi();
        return $provinsi;
    }

    public function getKabupaten($kdpropinsi)
    {
        $kabupaten = $this->serviceBpjs->getKabupaten($kdpropinsi);
        return $kabupaten;
    }

    public function getKecamatan($kdKabupaten)
    {
        $kecamatan = $this->serviceBpjs->getKecamatan($kdKabupaten);
        return $kecamatan;
    }

    public function kelasRawat()
    {
        $kelas = $this->serviceBpjs->kelasRawat();
        return $kelas;
    }
}