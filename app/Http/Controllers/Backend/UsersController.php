<?php

namespace App\Http\Controllers\Backend;
use Illuminate\Validation\Rule;
use Validator;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\User;
Use Alert;
use App\Http\Requests\Userstorerequest;
use App\Http\Requests\Userupdaterequest;
use App\Listrole;
use App\Role;
class UsersController extends Controller
{

        protected $limit=5;
      public function __construct(){

        $this->middleware('auth');
        $this->middleware('role');
        $this->middleware('check-menbre');
     }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $users=User::where('test','=',1)->paginate($this->limit);
        $userscount=count($users);
        return view('backend.users.index')->with('users',$users)
                                               ->with('userscount',$userscount);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(User $users)
    {
        
        return view('backend.users.create')->with('users',$users);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Userstorerequest $request)
    {

          
          $role_id=$request->id;

          $role=Listrole::find($role_id);

             
           $user=new User();
          //$user=User::create($request->all());
           $user->name=$request->name;
           $user->email=$request->email;
           $user->password=bcrypt($request->password);
           $user->test=1;

          $user->save(); 
          $newrole=new Role();
            
          $newrole->title=$role->title;
          $newrole->user_id=$user->id;
          $newrole->save();
        

        Alert::success('Category ajouté avec succès', 'Category ajouté avec succès');

        return redirect()->back();
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
         
         $user=User::find($id);
         return view('backend.users.edit')->with('user',$user);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Userupdaterequest $request, $id)
    {

               
             $user=User::find($id);
             /*
             $validatedData = $request->validate([
        'name' => 'required',
        'email' => [
        'required',
        Rule::unique('users')->ignore($user->id),
    ],
    ]);
        

             */


             

               /*
           Validator::make($request->all(), [
            'email' => [
                'required',
                Rule::unique('users')->ignore($user->id),
            ],
            ]);
                  */
          

          $user->update($request->all());
          Alert::success('user mis à jour avec succès', 'user mis à jour avec succès');

        return redirect()->back();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
           
        

        $user=User::destroy($id);   

 
                  
        Alert::success('user has been deleted', 'user has been deleted');

              return redirect()->back();
    }
}
