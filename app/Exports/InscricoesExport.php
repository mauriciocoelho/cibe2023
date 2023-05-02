<?php

namespace App\Exports;

use App\Models\Inscrito;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithTitle;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class InscricoesExport implements FromCollection, WithMapping, WithHeadings, WithTitle, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */
    //public function collection()
    //{
    //    return Inscrito::all();
    //}

    public function collection()
    {
        return Inscrito::orderBy('id','ASC')->get();
    }

    //Coluns add
    public function map($inscricao): array
    {
        return [
            $inscricao->id,
            $inscricao->nome,
            $inscricao->cpf,
            $inscricao->telefone,
            $inscricao->campo,
            $inscricao->qntde,
            $inscricao->valor,
            $inscricao->status_pagamento,
            $inscricao->created_at,
        ];
    }

    //Description table
    public function headings(): array
    {
        return [
            '#',
            'Nome Completo',
            'CPF',
            'Telefone',
            'Campo',
            'Qntde',
            'Valor',
            'Status de Pagamento',
            'Data da Inscrição'
        ];
    }

    //Title
    public function title(): string
    {
        return 'Inscrições';
    }
}
