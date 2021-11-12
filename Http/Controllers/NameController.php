<?php

namespace Modules\Name\Http\Controllers;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Routing\Controller;
use Modules\Name\Entities\Name;
use Modules\Name\Http\Requests\SaveNameRequest;
use Modules\Name\Transformers\NameResource;

class NameController extends Controller
{
    /**
     * Store a newly created resource in storage.
     * @param SaveNameRequest $request
     * @return JsonResource
     */
    public function store(SaveNameRequest $request): JsonResource
    {
        $name = Name::create($request->validated());

        return new NameResource($name);
    }

    /**
     * Show the specified resource.
     * @param Name $name
     * @return JsonResource
     */
    public function show(Name $name): JsonResource
    {
        return new NameResource($name);
    }

    /**
     * Show the form for editing the specified resource.
     * @param $id
     * @return JsonResource
     */
    public function edit($id): JsonResource
    {
        $name = Name::findOrFail($id);

        return new NameResource($name);
    }

    /**
     * Update the specified resource in storage.
     * @param SaveNameRequest $request
     * @param Name $name
     * @return JsonResource
     */
    public function update(SaveNameRequest $request, Name $name): JsonResource
    {
        $name->update($request->validated());

        return new NameResource($name);
    }

    /**
     * Remove the specified resource from storage.
     * @param Name $name
     * @return JsonResource
     */
    public function destroy(Name $name): JsonResource
    {
        $name->delete();

        return new NameResource($name);
    }
}
