<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;

class MessageController extends Controller
{
    //
    public function displayDashboard(){
        return view('dashboardpages.dashboard');
    }
    public function createMessages(Request $request){
       
        Message::create(array(
            'name'=>$request->name,
            'email'=>$request->email,
            'message'=>$request->message,
        ));
        return Redirect()->back();
    } 
    public function displayUnreadMessages(){
        $show_all_unread_messages =Message::where('status','not read')
        ->orderBy('created_at', 'desc')
        ->paginate('10');
        return view('dashboardpages.unread-messages', compact('show_all_unread_messages'));
    }
    public function displayReadMessages(){
        $display_all_read_messages =Message::where('status','read')
        ->orderBy('created_at', 'desc')
        ->paginate('10');
        return view('dashboardpages.read-messages', compact('display_all_read_messages'));
    }
    public function displayAllMessages(){
        $display_all_messages =Message::where('status','read')
        ->orwhere('status','not read')
        ->orderBy('created_at', 'desc')
        ->paginate('10');
        return view('dashboardpages.all-messages', compact('display_all_messages'));
    }
     public function markMessages(Request $request,$id){
        Message::where('id',$id)->update(array(
            'status'=>'read'
        ));
        return Redirect()->back()->withErrors("Message has been marked successfully");
     }
     public function deleteMessages($id){
        Message::where('id',$id)->update(array(
            'status'=>'deleted'
        ));
        return Redirect()->back()->withErrors("Message has been deleted successfully");
     }
     public function displayChangePasswordForm(){
        return view('dashboardpages.change-password');
    }
     public function store_users_password(Request $request) {
        $get_users_current_password = User::find(Auth::user()->id)->password;
        $current_password = $request->current_password;
        if ($request->new_password == $request->confirm_password) {
            if (Hash::check($current_password, $get_users_current_password)) {
                User::where("id", Auth::user()->id)->update(array('password' => Hash::make($request->new_password)));
                Auth::logout();
                return Redirect()->back()->with('message', 'Password was Updated successfully');
            } else {
                return Redirect()->back()->withInput()->withErrors("Incorrect password has been supplied");
            }
        } else {
            return Redirect()->back()->withInput()->withErrors("Make sure the two new passwords match");
        }
    }
    
}
