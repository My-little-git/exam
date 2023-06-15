<?php

namespace App\Http\Controllers\Admin\Product;

use App\Models\Product;

class DestroyController extends BaseController
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Product $product)
    {
        $this->service->destroy($product);

        return back();
    }
}
