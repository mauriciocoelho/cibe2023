<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

use OwenIt\Auditing\Auditable;
use OwenIt\Auditing\Contracts\Auditable as AuditableContract;

class Inscrito extends Model implements AuditableContract
{
    use HasFactory;
    use Auditable;
    use SoftDeletes;

    protected $table = 'inscritos';

    protected $casts = [
        'id' => 'int',
        'status_pagamento' => 'int',
        'updated_at' => 'datetime:d/m/Y h:m',
        'deleted_at' => 'datetime:d/m/Y h:m',
    ];

    protected $fillable = [
        'nome',
        'cpf',
        'telefone',
        'cidade',
        'campo',
        'qntde',
        'valor',
        'status_pagamento',
    ];

    protected $guarded = ['id'];

    public function getStatusPagamentoAttribute()
    {
        return $this->attributes['status_pagamento'] == 1 ? 'Pago' : 'á Pagar';
    }

    protected $appends = ['statusPagamento'];
}
