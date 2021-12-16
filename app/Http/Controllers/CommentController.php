<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CommentController extends Controller
{
    public static function valider(Request $request,int $id){
        DB::update('update comments set validated=1 where id= ?',[$id]);
        return redirect()->back()->with('message', 'le commentaire a été validé');
    }
    public static function delete(Request $request,int $id){
        DB::update('delete from comments where id= ?',[$id]);
        return redirect()->back()->with('message', 'le commentaire a été validé');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    public function store(Request $request,array $ids)
    {
        $this->validate(
            $request,
            [
                'content' => 'required',
                'note' => 'required',
            ]
        );
        $comment = new Comment;
        $comment->content = $request->comment;
        $comment->note = $request->note ;
        $comment->validated =0;
        $comment->user_id=1;//$ids[0];
        $comment->serie_id =$ids[1];
        $comment->save();
        return redirect()->back()->with('message', 'le commentaire a été sauvegardé');;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
