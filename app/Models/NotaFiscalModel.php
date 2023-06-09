<?php

namespace App\Models;

use CodeIgniter\Model;

class NotaFiscalModel extends Model
{
    protected $table            = 'fornecedores_notas';
    protected $returnType       = 'object';
    protected $allowedFields    = [
        'fornecedor_id',
        'valor_nota',
        'descricao_itens',
        'nota_fiscal',
        'data_emissao',
    ];

    
}
