<?php

namespace App\Http\Controllers\Admin\Product;

use App\Http\Requests\Admin\Product\UpdateRequest;
use App\Models\Product;

class UpdateController extends BaseController
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(UpdateRequest $request, Product $product)
    {
        $data = $request->validated();

        $this->service->update($data, $product);

        return to_route('admin.product.index');
    }
}
