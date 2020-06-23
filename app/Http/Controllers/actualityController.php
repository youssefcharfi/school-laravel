<?php

namespace App\Http\Controllers;

use App\Image;
use App\Actuality;
use Illuminate\Http\Request;
use App\Http\Requests\ActualityRequest;
use Illuminate\Support\Facades\Storage;

class actualityController extends Controller
{
    /*public function __construct(){
        $this->middleware('auth');
    }*/
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $actus = Actuality::orderBy('updated_at','desc')->paginate(3);
        return view('actuality.index',['actus' => $actus ]);
    }
    public function all(){
        $allActus = Actuality::orderBy('updated_at','desc')->get();
        return 
        view('actuality.indexAll',['actus' => $allActus ]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('create');
        return 
        view('actuality.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ActualityRequest $request)
    {
        $data['title'] = $request->title ;
        $data['content'] = $request->content ;
        $data['user_id'] = $request->user()->id;
        $actuality = Actuality::create($data);
        if($request->hasFile('file')){
            $path = Storage::disk('public')->put('actuality',$request->file('file'));
          $image = new Image(['path' => $path]);
          $actuality->image()->save($image);
        }
        $request->session()->flash('status','Nouvelle Actualitée est ajoutée');
        return
        redirect()->route('actu.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $actu = Actuality::findOrFail($id);
        return 
        view('actuality.show', [ 'actu' => $actu ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $actu = Actuality::findOrFail($id);
        $this->authorize('update',$actu);
                return 
        view('actuality.edit',['actu' => $actu]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ActualityRequest $request, $id)
    {
        $actu = Actuality::findOrFail($id);
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $path = Storage::disk('public')->put('actuality', $file);  
            if ($actu->image) {
                Storage::delete($actu->image->path);
                $actu->image->path = $path;
                $actu->image->save();
            } else {
                $image = new Image(['path' => $path]);
                $actu->image()->save($image);
            }
        }
        $actu->title = $request->title;
        $actu->content = $request->content;
        $actu->save();
        $request->session()->flash('status', 'Actualitée est modifiée'); 
        return
            view('actuality.show',['actu' => $actu]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id)
    {     
        $actu = Actuality::findOrFail($id);
        $this->authorize('delete',$actu);
        $actu->delete();
        $request->session()->flash('status','Actualitée supprimer');
        return
        redirect()->back();
    }
}
