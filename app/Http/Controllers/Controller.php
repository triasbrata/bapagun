<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Database\Eloquent\Model as EloquentModel;

abstract class Controller extends BaseController
{
    use DispatchesJobs, ValidatesRequests;


    protected $prefix;
    protected $model;
    protected $moduleName;
    /**
     * contructor controller to init all depedence this
     * controller
     * @param [type] $prefix     [description]
     * @param [type] $model      [description]
     * @param [type] $moduleName [description]
     */
    public function __construct($prefix = null, $model = null, $moduleName = null)
    {
        $this->prefix = $prefix;
        $this->model = $model;
        $this->moduleName = $moduleName;
    }
    /**
     * make route to index of module
     * @return Response
     */
    public function toIndex()
    {
        return redirect()->route($this->nameFix('index'));
    }
    /**
     * route user to index and give some
     * alert of success from previous action
     * @param  string  $from 
     * @return Response 
     */
    public function routeAndSuccess($from)
    {
        $message = "{$this->moduleName} successfully ";
        switch ($from) {
            case 'destroy':
                $message.= "destroyed";
                break;
            default:
                $message.=$from.'d';
            break;
        }
           return  $this->toIndex()->withSuccess([$message]);
    }
    public function routeBackWithError($from)
    {
        $message = "{$this->moduleName} fail ";
        switch ($from) {
            case 'destroy':
                $message.= "destroyed";
                break;
            default:
                $message.=$from.'d';
            break;
        }
        return redirect()->back()->withInput()->withErrors([$message]);
    }
    /**
     * 
     * @param  string $index [description]
     * @return [type]        [description]
     */
    protected function nameFix($index = "")
    {
        $out = [
            'index' => "{$this->prefix}.index",
            'create' => "{$this->prefix}.create",
            'store' => "{$this->prefix}.store",
            'edit' => "{$this->prefix}.edit",
            'update' => "{$this->prefix}.update",
            'destroy' => "{$this->prefix}.destroy",
            'show' => "{$this->prefix}.show",
        ];
        return isset($out[$index]) ? $out[$index] : $out;
    }
    protected function view($nameview="", $data = null)
    {
        if (\Request::ajax()) {
            if (isset($data)) {
                return  \Response::json($data);
            }
        } else {
            if (isset($data)) {
                return view($nameview, $data);
            } else {
                return view($nameview);
            }
        }
    }
    /**
     * index of controller
     * @return Response
     */
    public function index()
    {
        $lists = $this->model->all();
        $page_title =  "Keseluruhan Data <b>{$this->moduleName}</b>";
        return $this->view($this->nameFix('index'), compact('lists', 'page_title'))->with($this->nameFix());
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     **/
    public function create()
    {
        $page_title = "Tambah <b>{$this->moduleName}</b>";
        $form = $this->prefix.'.form';
        return $this->view($this->nameFix('create'), compact('page_title', 'form'))->with($this->nameFix());
    }

    /**
     * Display the specified resource.
     *
     * @param  Eloquent  $id
     * @return Response
     */
    public function show($data)
    {

        $page_title = "Deskripsi Data <b>{$this->moduleName}</b>";
        return view($this->prefix.'.show', compact('data','page_title'))->with($this->nameFix());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Eloquent  $id
     * @return Response
     */
    public function edit(EloquentModel $data)
    {
        $page_title = "Perbarui <b>{$this->moduleName}</b>";
        $form = "{$this->prefix}.form";
        return view("{$this->prefix}.edit", compact('data', 'page_title', 'form'))->with($this->nameFix());
    }
}
