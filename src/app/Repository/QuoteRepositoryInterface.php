
<?php
namespace App\Repository;

use App\Models\Quote;
use Illuminate\Support\Collection;

interface QuoteRepositoryInterface
{
   public function all(): Collection;
}