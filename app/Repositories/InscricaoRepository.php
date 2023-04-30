<?php

namespace App\Repositories;

use JasonGuru\LaravelMakeRepository\Repository\BaseRepository;
use App\Models\Inscrito;

/**
 * Class InscricaoRepository.
 */
class InscricaoRepository extends BaseRepository
{
    /**
     * @return string
     *  Return the model
     */
    public function model()
    {
        return Inscrito::class;
    }

    public function getAll()
    {
        $data = $this->model->all();
        return $data;
    }    

    public function created(array $data): Inscrito
    {        
        return $this->model::create($data);
    }

    public function getShow($id)
    {
        $data = $this->model::find($id);
        return $data;
    }

    public function updated($id, $data)
    {
        $update = $this->model::find($id);
        $update->update($data);
        return $update;
    }

    
    public function deleted($id)
    {
        $data = $this->model::find($id);
        $data->delete();

        return $data;
    }
}
