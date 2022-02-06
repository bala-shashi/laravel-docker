<?php

namespace App\Repository\Eloquent;

use App\Models\Quote;
use App\Repository\QuoteRepositoryInterface;
use Illuminate\Support\Collection;

class QuoteRepository extends BaseRepository implements QuoteRepositoryInterface
{

   /**
    * UserRepository constructor.
    *
    * @param Quote $model
    */
   public function __construct(Quote $model)
   {
       parent::__construct($model);
   }

   /**
    * @return Collection
    */
   public function all(): Collection
   {
       return $this->model->all();    
   }
}