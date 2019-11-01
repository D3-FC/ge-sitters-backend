<?php

namespace App\Http\Controllers;

use App\Contract;
use App\Http\Requests\ContractStoreRequest;
use Illuminate\Http\Request;

class ContractController extends Controller
{
    public function index(Request $request)
    {
        return Contract::filter($request->all())->get();
    }
    public function store(ContractStoreRequest $request)
    {
        $contract = new Contract();
        $this->fillContract($contract,$request);

        return $contract;
    }

    public function update(int $contract, ContractStoreRequest $request)
    {
        $contract = Contract::findOrFail($contract);
        $this->fillContract($contract,$request);

        return $contract;
    }

    public function destroy(int $contract)
    {
        Contract::destroy($contract);
    }

    public function show(int $contract)
    {
        return Contract::findOrFail($contract);
    }

    public function fillContract(Contract $contract,Request $request)
    {
        $contract->child_count = $request->input('child_count');
        $contract->price = $request->input('price');
        $contract->description = $request->input('description');
        $contract->start_at = $request->input('start_at');
        $contract->end_at = $request->input('end_at');
        $contract->coords_x = $request->input('coords_x');
        $contract->coords_y = $request->input('coords_y');
        $contract->payment_method = $request->input('payment_method');

        $contract->save();
    }
}
