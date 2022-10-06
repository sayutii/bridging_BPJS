<?php

namespace App\Services\Bpjs;

use Bpjs\Bridging\Vclaim\BridgeVclaim;
use App\Services\Bpjs\Request;

class ReferensiService {
    protected $serviceBpjs;

    public function __construct()
    {
        $this->serviceBpjs = new BridgeVclaim;
    }

    public function getDiagnosa($diagnosa)
    {
        // $endpoint = "referensi/diagnosa/{$diagnosa}";
        $endpoint = 'referensi/diagnosa/'.$diagnosa;
        $diagnosa = $this->serviceBpjs->getRequest($endpoint);
        return $diagnosa;
    }

    public function getPoli($kode)
    {
        $endpoint = 'referensi/poli/'.$kode;
        $poli = $this->serviceBpjs->getRequest($endpoint);
        return $poli;
    }

    public function getFaskes($kd_faskes = null, $jns_faskes = null)
    {
        $endpoint = 'referensi/faskes/'.$kd_faskes.'/'.$jns_faskes;
        $faskes = $this->serviceBpjs->getRequest($endpoint);
        return $faskes;
    }

    public function getDokter($pelayanan, $tglPelayanan, $spesialis)
    {
        // $endpoint = 'referensi/dokter/pelayanan/'.$pelayanan.'/tglPelayanan/'.$tglPelayanan.'/Spesialis/'.$spesialis;
        // $referensi = $this->serviceBpjs->getRequest($endpoint);
        $endpoint = 'referensi/dokter/pelayanan/'.$pelayanan.'/tglPelayanan/'.$tglPelayanan.'/Spesialis/'.$spesialis;
		$referensi = $this->serviceBpjs->getRequest($endpoint);
        return $referensi;
    }
    
    public function getPropinsi()
    {
        $endpoint ='referensi/propinsi';
        $referensi = $this->serviceBpjs->getRequest($endpoint);
        // return json_decode($response, true);
        return $referensi;
    }

    public function getKabupaten($kdpropinsi)
    {
        $endpoint = 'referensi/kabupaten/propinsi/'.$kdpropinsi;
        $referensi = $this->serviceBpjs->getRequest($endpoint);
        return $referensi;
    }

    public function getKecamatan($kdKabupaten)
    {
        $endpoint = 'referensi/kecamatan/kabupaten/'.$kdKabupaten;
        $referensi = $this->serviceBpjs->getRequest($endpoint);
        return $referensi;
    }

    public function kelasRawat()
    {
        $endpoint = 'referensi/kelasrawat';
        $referensi = $this->serviceBpjs->getRequest($endpoint);
        return $referensi;
    }

}