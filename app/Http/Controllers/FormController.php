<?php

namespace App\Http\Controllers;

use App\Enums\FormElementName;
use App\Models\Form;
use Illuminate\Http\Request;
use Illuminate\View\View;

class FormController extends Controller
{
    public function index(): View
    {
        $this->data['header'] = array(
            'title' => 'Forms',
            'breadcrumbs' => array(
                'Dashboard' => 'dashboard',
                'Forms' => '#',
                'View Forms' => '#',
            ),
        );

        $this->data['forms'] = Form::select([
            'id',
            'title',
            'status',
            'created_at',
        ])->latest()->get();

        return view('forms.index', $this->data);
    }

    public function create( Request $request )
    {
        $this->data = array(
            'header' => array(
                'title' => 'Forms',
                'breadcrumbs' => array(
                    'Dashboard' => 'dashboard',
                    'Forms' => 'forms.index',
                    'Create Forms' => '#',
                ),
            ),
            'formElements' => FormElementName::toArray(),
        );

        if ( $request->ajax() ) {
            $this->data = [
                'formElements' => FormElementName::toArray(),
            ];
            $view = view('forms.form-element', $this->data)->render();

            $this->data = [
                'status' => true,
                'data' => [
                    'view' => $view,
                ]
            ];
            return response()->json($this->data);
        }

        return view('forms.create', $this->data);
    }

    public function store( Request $request )
    {
        dd($request->all());
    }

    public function edit(Form $id)
    {
        //
    }

    public function update( Request $request, Form $id)
    {
        //
    }

    public function destroy( Request $request, Form $id)
    {
        //
    }
}
