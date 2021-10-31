<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Seeker;

use App\Models\Post;

use App\Models\Corp_emp;

use App\Models\F_emp;

class HomeController extends Controller
{
    public function home(){
        $seekers = array();
        $seekers = Seeker::all();
        $posts = array();
        $cemps = array();
        $cemps = Corp_emp::all();
        $femps = array();
        $femps = F_emp::all();
        $posts = Post::where('Post_Status','Approved')->orderBy('created_at', 'desc')->get();
        return view('pages.home')->with('posts',$posts)
        ->with('seekers',$seekers)
        ->with('cemps',$cemps)
        ->with('femps',$femps);
    }
    public function index()
    {
    return view('pages.search');
    }
    public function searchRidirect(Request $request){
        return view('pages.search')->with('search',$request->search);
    }
    public function search(Request $request)
    {
        if($request->ajax())
        {
            $output="";
            $posts=Post::where('Post_Title','LIKE','%'.$request->search."%")->get();
            if($posts)
            {
            foreach ($posts as $key => $posts) {
            $output.='<tr>'.
            '<td>'.$posts->Post_id.'</td>'.
            '<td>'.$posts->Post_Title.'</td>'.
            '<td>'.$posts->Post_Description.'</td>'.
            '<td>'.$posts->Job_Requirement.'</td>'.
            '<td>'.$posts->Job_Location.'</td>'.
            '<td>'.$posts->Salary.'</td>'.
            '<td><a class="btn btn-success" href="#" role="button">Apply!</a></td>'.
            '</tr>';
            }
            return Response($output);
            }
        }
    }
}