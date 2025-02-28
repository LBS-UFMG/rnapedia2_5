<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('home');
    }

    public function documentation(): string
    {
        return view('documentation');
    }

    public function download(): string
    {
        return view('download');
    }

    public function blast(): string
    {
        return view('blast');
    }

    public function explore(): string
    {
        return view('explore');
    }

    private function getInfo($id): Array 
    {
        $url = "./data/structures/$id/info.txt";
        $file_handle = fopen($url, 'r');
        $lines = "";
        if ($file_handle) {
            while (($line = fgets($file_handle)) !== false) {
                $lines = $lines.$line;
            }
            fclose($file_handle);
        } else {
            echo "Não foi possível abrir o arquivo.";
        }
        
        $info = explode("\t", $lines);
        return $info;
    }

    private function getRna($id): Array 
    {
        $rna = [];

        # sequencia do rna
        $url = "./data/structures/$id/rna_sequence.txt";
        $file_handle = fopen($url, 'r');
        $lines = "";
        if ($file_handle) {
            while (($line = fgets($file_handle)) !== false) {
                $lines = $lines.$line;
            }
            fclose($file_handle);
        } else {
            echo "Não foi possível abrir o arquivo.";
        }
        $rnaseq = $lines;

        # propriedades rna
        $url = "./data/structures/$id/rna_properties.txt";
        $file_handle = fopen($url, 'r');
        $lines = "";
        if ($file_handle) {
            while (($line = fgets($file_handle)) !== false) {
                $tmp = explode(":",$line);
                $rna[ $tmp[0] ] = $tmp[1];
            }
            fclose($file_handle);
        } else {
            echo "Não foi possível abrir o arquivo.";
        }
        
        $rna["seq"] = $rnaseq;

        # novas atualizações -------

        $url = "./data/structures/$id/info_extra_$id.csv";
        $file_handle = fopen($url, 'r');
        $lines = "";
        if ($file_handle) {
            while (($line = fgets($file_handle)) !== false) {
                $tmp = explode("\t",$line);
                $rna[ $tmp[0] ] = $tmp[1];

                $rna["pronab_id"] = $tmp[0]; #1
                $rna["dg_pronab"] = $tmp[1];
                $rna["kd_pronab"] = $tmp[2];
                $rna["all_attoms_asa_complex"] = $tmp[3];
                $rna["delta_asa"] = $tmp[4]; #5
                $rna["bsa_all_atoms"] = $tmp[5];
                $rna["non_polar_asa"] = $tmp[6];
                $rna["non_polar_asa_complexo"] = $tmp[7];
                $rna["delta_asa_non_polar"] = $tmp[8];
                $rna["bsa_non_polar"] = $tmp[9]; #10
                $rna["all_polar_asa_complexo"] = $tmp[10];
                $rna["delta_asa_all_polar"] = $tmp[11];
                $rna["bsa_all_polar"] = $tmp[12];
                $rna["notation"] = $tmp[13];
                $rna["delta_g"] = $tmp[14]; #15

                break; # pega apenas a primeira linha
            }
            fclose($file_handle);
        } else {
            echo "Não foi possível abrir o arquivo.";
        }

        # tipo de rna
        $url = "./data/structures/$id/result_rna_sequence.txt.json";
        $file_handle = fopen($url, 'r');
        $lines = "";
        if ($file_handle) {
            while (($line = fgets($file_handle)) !== false) {
                $lines = $lines.$line;
            }
            fclose($file_handle);
        } else {
            echo "Não foi possível abrir o arquivo.";
        }
        $json_types = json_decode($lines,true);

        $rna['type'] = $json_types['Tipo de RNA'];

        return $rna;
    }

    private function getProtein($id): Array 
    {
        $protein = [];

        # sequencia da proteina
        $url = "./data/structures/$id/protein_sequence.txt";
        $file_handle = fopen($url, 'r');
        $lines = "";
        if ($file_handle) {
            while (($line = fgets($file_handle)) !== false) {
                $lines = $lines.$line;
            }
            fclose($file_handle);
        } else {
            echo "Não foi possível abrir o arquivo.";
        }
        $proteinseq = $lines;

        # propriedades protein
        $url = "./data/structures/$id/protein_properties.txt";
        $file_handle = fopen($url, 'r');
        $lines = "";
        if ($file_handle) {
            while (($line = fgets($file_handle)) !== false) {
                $tmp = explode(":",$line);
                $protein[ $tmp[0] ] = $tmp[1];
            }
            fclose($file_handle);
        } else {
            echo "Não foi possível abrir o arquivo.";
        }
        
        $protein["seq"] = $proteinseq;

        return $protein;
    }

    private function getContacts($id): Array 
    {
        $contacts = [];

        # contacts
        $url = "./data/structures/$id/$id"."_interacoes.csv";
        $file_handle = fopen($url, 'r');
        if ($file_handle) {
            while (($line = fgets($file_handle)) !== false) {
                array_push($contacts, explode(",",$line));
            }
            fclose($file_handle);
        } else {
            echo "Não foi possível abrir o arquivo.";
        }
        
        return $contacts;
    }

    public function entry($id): string
    {
        $data = [];
        $data['id'] = $id;

        // código inexistente
        if(strlen($id) != 8){
            return view('404', $data);
        }

        // pega informações básicas
        $data['info'] = $this->getInfo($id);

        // pega informações do rna
        $data['rna'] = $this->getRna($id);

        // pega informações da proteína
        $data['protein'] = $this->getProtein($id);

        // pega informações de contatos
        $data['contacts'] = $this->getContacts($id);

        return view('entry', $data);
    }

}
